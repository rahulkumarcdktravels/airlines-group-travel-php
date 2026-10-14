<?php
if (session_status() === PHP_SESSION_NONE) session_start();
define('DATA_FILE', __DIR__.'/../data/posts.json');
define('ADMIN_USER', 'admin');
define('ADMIN_PASSWORD', 'ChangeMe123!'); // Change this before using the site publicly.
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
function get_posts() {
  if (!file_exists(DATA_FILE)) return [];
  $data = json_decode(file_get_contents(DATA_FILE), true);
  if (!is_array($data)) return [];
  usort($data, function($a,$b){ return strcmp($b['date'] ?? '', $a['date'] ?? ''); });
  return $data;
}
function save_posts($posts) {
  $dir = dirname(DATA_FILE);
  if (!is_dir($dir)) mkdir($dir, 0755, true);
  file_put_contents(DATA_FILE, json_encode(array_values($posts), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE), LOCK_EX);
}
function slugify($text) {
  $text = strtolower(trim($text));
  $text = preg_replace('/[^a-z0-9]+/', '-', $text);
  return trim($text, '-') ?: 'article-'.time();
}
function is_admin() { return !empty($_SESSION['agt_admin']); }
function require_admin() { if (!is_admin()) { header('Location: login.php'); exit; } }
function csrf_token() {
  if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));
  return $_SESSION['csrf'];
}
function verify_csrf() {
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && !hash_equals($_SESSION['csrf'] ?? '', $_POST['csrf'] ?? '')) {
    http_response_code(403); exit('Invalid request token. Go back and try again.');
  }
}
function excerpt($content, $length=155) {
  $text = trim(preg_replace('/\s+/', ' ', strip_tags($content)));
  return mb_substr($text, 0, $length).(mb_strlen($text)>$length?'…':'');
}

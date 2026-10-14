<?php
require_once __DIR__.'/includes/functions.php';
$posts = get_posts();
$featured = array_slice($posts, 0, 3);
$pageTitle = 'Group Travel Made Simple | Airlines Group Travel';
include __DIR__.'/includes/header.php';
?>
<section class="hero">
  <div class="hero-shade"></div>
  <div class="hero-content wrap">
    <span class="eyebrow">GROUP FLIGHTS • MADE EASIER</span>
    <h1>Fly together.<br><em>Go further.</em></h1>
    <p>Group flight planning for teams, families, schools and every journey worth sharing.</p>
    <div class="hero-actions"><a class="btn btn-gold" href="#quote">Request a group quote <span>↗</span></a><a class="text-link" href="#how">How it works <span>→</span></a></div>
    <div class="hero-proof"><div class="proof-icon">✦</div><div><strong>One journey. One point of contact.</strong><small>Helpful support from planning to departure.</small></div></div>
  </div>
  <div class="hero-note">YOUR GROUP. YOUR JOURNEY.</div>
</section>
<section class="trust-strip"><div class="wrap trust-inner"><span>BUILT FOR GROUPS OF 10+</span><b>Corporate teams</b><i>✦</i><b>School trips</b><i>✦</i><b>Sports teams</b><i>✦</i><b>Family reunions</b></div></section>
<section class="section wrap intro-grid" id="about"><div><span class="eyebrow dark">TRAVEL, TOGETHER</span><h2>Big plans are<br>better <em>shared.</em></h2></div><div class="intro-copy"><p>Coordinating flights for a group can mean lots of details, deadlines and questions. We make it easier to get started with a clear quote request and practical guidance for your trip.</p><a class="under-link" href="#quote">Let’s plan your group trip <span>↗</span></a></div></section>
<section class="section service-section"><div class="wrap"><div class="section-heading"><div><span class="eyebrow dark">MADE FOR YOUR KIND OF TRIP</span><h2>Every group has<br>a <em>destination.</em></h2></div><p>From work trips to once-in-a-lifetime celebrations, start with a plan that fits your people.</p></div>
<div class="service-grid">
 <article class="service-card service-one"><div class="service-num">01 / BUSINESS</div><div><h3>Corporate & events</h3><p>Coordinate travel for conferences, offsites and company-wide gatherings.</p></div></article>
 <article class="service-card service-two"><div class="service-num">02 / TEAM</div><div><h3>Sports & school groups</h3><p>Keep schedules, passenger details and travel requirements organized.</p></div></article>
 <article class="service-card service-three"><div class="service-num">03 / TOGETHER</div><div><h3>Families & celebrations</h3><p>Bring everyone closer for reunions, weddings and memorable holidays.</p></div></article>
</div></div></section>
<section class="section wrap process" id="how"><div class="section-heading"><div><span class="eyebrow dark">A CLEARER WAY TO PLAN</span><h2>From “let’s go”<br>to <em>ready to fly.</em></h2></div><p>Start with the essentials. We’ll help you understand the next steps.</p></div><div class="steps"><div><span>01</span><h3>Tell us the plan</h3><p>Share your route, dates and estimated number of travelers.</p></div><div><span>02</span><h3>Review your options</h3><p>Compare the details and conditions in the quote you receive.</p></div><div><span>03</span><h3>Confirm the details</h3><p>Follow the agreed timeline for names, payment and ticketing.</p></div></div></section>
<section class="blog-section section"><div class="wrap"><div class="section-heading"><div><span class="eyebrow dark">THE GROUP TRAVEL JOURNAL</span><h2>Good trips start<br>with <em>good advice.</em></h2></div><a class="under-link" href="blog.php">Explore all articles <span>↗</span></a></div>
<div class="blog-grid"><?php if ($featured): foreach ($featured as $post): ?><article class="blog-card"><a class="blog-image" href="post.php?slug=<?= e($post['slug']) ?>" style="background-image:url('<?= e($post['image'] ?: 'assets/images/blog-default.svg') ?>')"><span>READ ARTICLE ↗</span></a><div class="blog-meta"><?= e($post['category'] ?? 'Group Travel') ?> <span>•</span> <?= date('M j, Y', strtotime($post['date'])) ?></div><h3><a href="post.php?slug=<?= e($post['slug']) ?>"><?= e($post['title']) ?></a></h3><p><?= e($post['excerpt']) ?></p><a class="under-link" href="post.php?slug=<?= e($post['slug']) ?>">Read story <span>→</span></a></article><?php endforeach; else: ?><p>No articles yet. Add your first post from the admin dashboard.</p><?php endif; ?></div></div></section>
<section class="quote-section" id="quote"><div class="wrap quote-grid"><div><span class="eyebrow">LET’S GET YOUR GROUP MOVING</span><h2>One trip.<br><em>Many memories.</em></h2><p>Tell us a little about your travel plans. This demo form opens an email draft so you can connect it to your real enquiry process later.</p><div class="contact-mini"><span>✉</span><div><small>HAVE A QUESTION?</small><strong>Use your business email here</strong></div></div></div>
<form class="quote-form" action="mailto:hello@example.com" method="post" enctype="text/plain"><div class="form-row"><label>Your name<input required name="Name" placeholder="Full name"></label><label>Email address<input required type="email" name="Email" placeholder="you@example.com"></label></div><div class="form-row"><label>Departure city<input name="From" placeholder="e.g. New York"></label><label>Destination<input name="To" placeholder="e.g. London"></label></div><div class="form-row"><label>Travel date<input type="date" name="Travel date"></label><label>Group size<select name="Group size"><option>10–19 travelers</option><option>20–49 travelers</option><option>50–99 travelers</option><option>100+ travelers</option></select></label></div><label>Tell us about your trip<textarea name="Trip details" rows="3" placeholder="Dates, flexibility, special requirements..."></textarea></label><button class="btn btn-gold" type="submit">Send enquiry <span>↗</span></button><small class="form-note">Demo form: replace hello@example.com with your real enquiry email before publishing.</small></form></div></section>
<?php include __DIR__.'/includes/footer.php'; ?>
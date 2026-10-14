AIRLINES GROUP TRAVEL — PHP LOCAL WEBSITE

INSTALL ON WINDOWS (XAMPP)
1. Extract the "Airlines Group Travel" folder to:
   C:\Users\PUNEET\Downloads\Airlines Group Travel
2. Install/start Apache using XAMPP.
3. Easiest: copy this folder into C:\xampp\htdocs\Airlines-Group-Travel
   OR configure Apache to serve the Downloads folder.
4. Open: http://localhost/Airlines-Group-Travel/
   If you use a virtual host, use the local URL you configured.
5. Blog admin: http://localhost/Airlines-Group-Travel/admin/login.php

DEFAULT DEMO ADMIN LOGIN
Username: admin
Password: ChangeMe123!

IMPORTANT SECURITY
- Change ADMIN_USER and ADMIN_PASSWORD in includes/functions.php before any public deployment.
- This is a starter local PHP site. It stores posts in data/posts.json; no database setup is needed.
- Ensure PHP has write permission for data/posts.json.
- The contact form is a mailto demo, not a server-side lead database. Replace hello@example.com in index.php with your actual business email.
- Use a proper database, password_hash/password_verify, HTTPS, server-side email delivery, and additional hardening before production use.
- Blog editor accepts plain text; paragraphs are displayed with line breaks. Cover images use a public image URL or a relative URL.
- Confirm all airline terms, savings and service claims before publishing. The sample content avoids guaranteed fares or unverified airline policies.

FEATURES
- Responsive group travel homepage
- Quote enquiry form demo
- Blog listing and individual article pages
- Admin login
- Create, edit and delete blog posts
- JSON file storage (no MySQL required)
- Starter blog posts included

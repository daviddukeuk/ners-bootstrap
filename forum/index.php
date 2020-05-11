<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/_functions.php');
$page_title = "Forum";// appended to <title> tag
$menu = "forum";// navigation section of this page

inc('header'); // display page header
?>

<h2>Members' Forum</h2>

<p>The NERS have a members-only forum which is available for all members of any age to join. The forum can be used to get up-to-date information about society events, share rattie photos and tales, give and receive general advice and information. It could previously be used to advertise/source rat kittens, make pre-show plans and advertise second-hand equipment for sale, but this content has been stopped.</p>
<p>If you are a new NERS member and wish to join the forum, please complete the <a href="/phpbb/ucp.php?mode=register" target="_new">forum registration process</a>. (You will need an email address and choose a username and password.)<br>
Once you have completed the forum sign-up process, please email the <a href="mailto:honsec@neratsociety.co.uk">Honorary Secretary</a> with your forum username so that your account can be activated speedily (we get a lot of 'bot' requests so this ensures your registration isn't accidentally missed). If you need help with any part of the process, please refer to the <a href="/phpbb/faq.php" target="_new">frequently asked questions</a> or contact the <a href="mailto:honsec@neratsociety.co.uk">secretary</a> directly.</p>

<div id="forum-large">
    <a href="/phpbb/index.php">Enter the Forum here</a>
    <img src="/resources/pics/rat_on_computer-mouse.jpg" />
</div>

<?php
inc('footer'); // display page footer
?>
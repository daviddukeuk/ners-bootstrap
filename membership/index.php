<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/_functions.php');
$page_title = "Membership Information";// appended to <title> tag
$menu = "membership";// navigation section of this page

inc('header'); // display page header
?>

<h2>Membership</h2>

<p>The members of the NERS are its greatest asset, and we try to provide excellent value for money to our membership. As seen from the benefits of membership the society aims to provide a package that is appealing to rat lovers regardless of whether they are interested in showing their rats or not.</p>
<p>Benefits of yearly membership include:</p>

<ul>
    <li>NERS Joining Pack (welcome letter, complimentary copy of <a href="/rattitude" title="Rattitude" target="_self"><i>Rattitude</i></a>, show rules and varieties booklet and a little something for  your ratties too)</li>
    <li><a href="/rattitude" title="Rattitude" target="_self"><i>Rattitude</i></a> (quarterly colour magazine with a wide range of  informative articles as well as society news and information) </li>
    <li>Annual Report</li>
    <li>Right to a voice and a vote (for members aged 16 and over) on how the society evolves, by post if preferred</li>
    <li>Easy access to member breeders</li>
    <li>Web directory for members' rat related websites</li>
    <li>Support and advice via the <a href="/forum" target="_self">forum</a> and the <a href="https://www.facebook.com/groups/neratsociety/" target="_blank">Facebook group</a> (both members-only) </li>
    <li>Eligibility to apply for the NERS <a href="/longevity" title="Longevity award scheme" target="_self">Longevity award</a> scheme</li>
    <li>Reduced show entry rates</li>
    <li>Loan service (items such as live/humane rat trap, books)</li>
</ul>


<h3>Membership types</h3>

<p>There are two types of basic/digital membership:</p>

<table class="table table-hover table-bordered">
    <tr>
        <td><strong>Individual</strong>. All members aged 16 or over are entitled to one vote at any AGM/EGM. </td>
        <td width="30%">Initial fee for 1st year: £9<br/>Subsequent years: £7</td>
    </tr>
    <tr>
        <td><strong>Family</strong> <em>(any family group or partnership living under one roof)</em>. Family memberships are entitled to one vote for   each member aged 16 or over listed on their application form.</td>
        <td width="30%">Initial fee for 1st year: £12<br/>Subsequent years: £10</td>
    </tr>
</table>

<p>The  cost for new members includes a fee of £2 to cover the joining pack,  renewals therefore cost £7 and £10 respectively. </p>
<p>Digital membership covers receipt of all NERS   publications in a digital format. Printed copies are available for a   further subscription of £15 per year. Please contact our <a href="mailto:membership@neratsociety.co.uk" title="membership@neratsociety.co.uk">membership secretary</a> if you wish to arrange this.</p>
<p>All membership renewal notifications are now sent by email (unless you have specifically requested otherwise), so do inform the <a href="mailto:membership@neratsociety.co.uk">membership secretary</a> promptly if your email address ever changes. </p>


<h3>How to join the NERS</h3>

<p>We hope that you will decide to join the NERS and help us to promote rats as wonderful pets. There are two steps to the joining process:</p>
<ol>
    <li>Fill out our <a href="/membership/form/" title="online membership form" target="_new">online joining form</a> to submit your application.</li>
    <li>Payment can be made instantly via PayPal or credit/debit card by selecting the membership category below and clicking the button (you will be redirected to the secure PayPal payment site):<a name="paypal" id="paypal"></a></li>
</ol>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="payment@neratsociety.co.uk">
    <input type="hidden" name="lc" value="GB">
    <input type="hidden" name="item_name" value="NERS membership">
    <input type="hidden" name="button_subtype" value="services">
    <input type="hidden" name="no_note" value="0">
    <input type="hidden" name="currency_code" value="GBP">
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHostedGuest">
    <table>
        <tr>
            <td>
                <select name="os0">
                    <option value="Individual: New membership (digital)">Individual: New membership £9.00 (digital)</option>
                    <option value="Individual: Renewal (digital)">Individual: Renewal £7.00 (digital)</option>
                    <option value="Family: New membership (digital)">Family: New membership £12.00 (digital)</option>
                    <option value="Family: Renewal (digital)">Family: Renewal £10.00 (digital)</option>
                    <option value="Individual: New membership (print)">Individual: New membership £24.00 (print)</option>
                    <option value="Individual: Renewal (print)">Individual: Renewal £22.00 (print)</option>
                    <option value="Family: New membership (print)">Family: New membership £27.00 (print)</option>
                    <option value="Family: Renewal (print)">Family: Renewal £25.00 (print)</option>
                </select> 
                <input name="submit" type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" alt="PayPal — The safer, easier way to pay online." align="top" border="0" />
                <input type="hidden" name="currency_code2" value="GBP" />
                <input type="hidden" name="option_select0" value="Individual: New membership (digital)" />
                <input type="hidden" name="option_amount0" value="9.00" />
                <input type="hidden" name="option_select1" value="Individual: Renewal (digital)" />
                <input type="hidden" name="option_amount1" value="7.00" />
                <input type="hidden" name="option_select4" value="Family: New membership (digital)" />
                <input type="hidden" name="option_amount4" value="12.00" />
                <input type="hidden" name="option_select5" value="Family: Renewal (digital)" />
                <input type="hidden" name="option_amount5" value="10.00" />
                <input type="hidden" name="option_select6" value="Individual: New membership (print)" />
                <input type="hidden" name="option_amount6" value="24.00" />
                <input type="hidden" name="option_select7" value="Individual: Renewal (print)" />
                <input type="hidden" name="option_amount7" value="22.00" />
                <input type="hidden" name="option_select8" value="Family: New membership (print)" />
                <input type="hidden" name="option_amount8" value="27.00" />
                <input type="hidden" name="option_select9" value="Family: Renewal (print)" />
                <input type="hidden" name="option_amount9" value="25.00" />

                <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
            </td>
        </tr>
    </table>
</form>

<p>Please ensure you include your full name. Without this information it can be very difficult to match payments to actual memberships.</p>
<p>Alternatively, you can download the <a href="/resources/docs/application-form.pdf" title="Membership application form (PDF)" target="_blank">application form</a> (pdf format), complete it and return by post to our membership secretary. You should also include a cheque payable to the NERS. Full details are on the application form. For further information contact our <a href="mailto:membership@neratsociety.co.uk" title="membership@neratsociety.co.uk">membership secretary</a>.</p>
<p><strong>Please note the society is run by volunteers in their free time, so it can take up to 28 days for your membership pack to be processed.</strong></p>
	
<?php
inc('footer'); // display page footer
?>
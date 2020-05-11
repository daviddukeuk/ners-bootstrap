<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/_functions.php');
$page_title = "Breeders List";// appended to <title> tag
$menu = "breeders";// navigation section of this page

inc('header'); // display page header
?>

<h2>List of NERS member breeders</h2>
<p>The table below lists members of the NERS who also breed rats. We provide this information to help you to locate a responsible breeder in your area. Please click on the rattery name to be redirected to their website.<br>
<strong>Please note that inclusion on the list does not constitute a recommendation or endorsement by the society.</strong><br>
Prospective owners are encouraged to spend time researching breeders with the view to find someone whose ethics and breeding practices they feel comfortable with. Getting rats from a breeder is a two-way relationship, ideally one which both parties will find rewarding and important. Prospective owners should feel happy with their chosen breeder, just as much as the breeder need to satisfy themselves that their kittens will be going to a good home.</p>

<table id="breeders-table" class="table table-hover table-striped">
<thead class="thead-dark">
    <tr>
        <th scope="col">Rattery name <em>(click for details)</em></th>
        <th scope="col">Breeder's name</th>
        <th scope="col">Location</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><a href="https://www.facebook.com/Azarath-Rattery-1372222466257156/" target="_new">Azarath Rattery</td>
        <td>Kaylee Wright</td>
        <td>Morpeth, Northumberland</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/AzulineRattery/" target="_new">Azuline Rattery</td>
        <td>Zoë Lumour</td>
        <td>Llysfaen, North Wales</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/Ellfin-Rats-1568096996854095/" target="_new">Ellfin Rats</td>
        <td>April Hearnah</td>
        <td>Braintree, Essex</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/ExcaliburRattery/" target="_new">Excalibur Rattery</td>
        <td>Joel Groves</td>
        <td>Newcastle</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/FeegleRats" target="_new">Feegle Stud</td>
        <td>Fiona Milton</td>
        <td>Edinburgh, Scotland</td>
    </tr>
    <tr>
        <td><a href="http://www.gallifreyrattery.com/" target="_new">Gallifrey Stud</td>
        <td>Cat Mace</td>
        <td>Morley, West Yorkshire</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/Harkylerats/" target="_new">Harkyle Rats</td>
        <td>Teena Madden</td>
        <td>Glasgow, Scotland</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/hawthornrats/" target="_new">Hawthorn Stud</td>
        <td>toyah Leitch</td>
        <td>Glasgow, Scotland</td>
    </tr>
    <tr>
        <td><a href="http://www.isamurats.co.uk/" target="_new">Isamu Stud</td>
        <td>Jemma Fettes</td>
        <td>Leyland, Lancashire</td>
    </tr>    
    <tr>
        <td><a href="http://www.lilliputrattery.co.uk/" target="_new">Lilliput Stud</td>
        <td>Lilly Hoyland</td>
        <td>Sheffield, South Yorkshire</td>
    </tr>
    <tr>
        <td><a href="http://www.lovecraftrats.co.uk/" target="_new">Lovecraft Stud</td>
        <td>Lisa Maurin</td>
        <td>Lancaster, Lancashire</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/mimblerats/" target="_new">Mimble Rats</td>
        <td>Helen Belton</td>
        <td>Consett, County Durham</td>
    </tr>
    <tr>
        <td><a href="https://facebook.com/Poplet-Rattery-564142464010605" target="_new">Poplet Rattery</td>
        <td>Julia McArdle</td>
        <td>Todmorden, West Yorkshire</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/redwallrats/" target="_new">Redwall Rats</td>
        <td>Cassie Soden</td>
        <td>Leeds, West Yorkshire</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/Ren.Rattery/" target="_new">Renegade Rats</td>
        <td>Hannah Field</td>
        <td>Sheffield, South Yorkshire</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/RhosynRats/" target="_new">Rhosyn Rats</td>
        <td>Rachael Jones</td>
        <td>Apperley Bridge, West Yorkshire</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/SolveigRats/" target="_new">Solveig Rats</td>
        <td>Elise McDonald</td>
        <td>Prestonpans, East Lothian, Scotland</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/TenebraeStud/" target="_new">Tenebrae Stud</td>
        <td>Doug Connor</td>
        <td>Banbury, Oxfordshire</td>
    </tr>
    <tr>
        <td><a href="https://www.facebook.com/whitemagerats/" target="_new">White Mage Rattery</td>
        <td>Amy Aindow</td>
        <td>Skelmersdale, Lancashire</td>
    </tr>
    <tr>
        <td><a href="http://www.zephyrrats.co.uk/" target="_new">Zephyr Stud</td>
        <td>Mary Giles</td>
        <td>Meldreth, Cambridgeshire</td>
    </tr>
</tbody>
</table>

<img src="/resources/pics/ratbums.jpg" class="img-fluid">


<?php
inc('footer'); // display page footer
?>
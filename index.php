<html>
<head>
</head>
<>
<body style="background-color:lightcoral;"></style>
<pre>
<?php
require 'vendor\autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://api.github.com/repos/akai-org/trios/issues/5', [
	'auth' =>['agatabaczkiewicz', 'gofergofer123']
]);
//echo $res->getStatusCode();
//echo $res->getHeader('content-type');
//
//echo;

$issue=json_decode($res->getBody());

print_r($issue);
?>
</pre>

<?php
echo $issue->title;
echo "<br>tgvtbyu";
?>
<br>
<img src="<?php echo $issue->user->avatar_url;?>" usemap="#kawa" style="float:center" >
<map name="kawa">
    <area shape="rect" coords="34,44,270,350" alt="ludek" href=" https://www.w3schools.com/html/html_images.asp" target="_blank">
</map>
<font size = "12"><br><?php
    echo $issue ->milestone -> description;
    ?> </font>

<ul>
<?php
foreach ( $issue->assignees as $user) {
    echo "<li>";
    echo $user->login;
    echo "</li>";
}
?></ul>
</body>
</html>
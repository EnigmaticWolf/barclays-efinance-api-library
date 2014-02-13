<? require_once('html/head.php'); ?>
<? require_once('html/return.php'); ?>

<h2>Test 3 - Server</h2>

<?

$xml = '<?xml version="1.0" encoding="utf‐8"?>
<Callback xmlns="http://www.barclays‐partnerfinance.com/">
<ProposalID>3062690</ProposalID>
<ClientReference>1529374839</ClientReference>
<ProposalStatus IsParked="False">
<Status>Accepted</Status>
</ProposalStatus>
<CustomerAddress>
<HouseNumber>10000</HouseNumber>
<HouseName />
<Flat />
<Street>ACADEMY PARK</Street>
<District>GOWER STREET</District>
<Town>GLASGOW</Town>
<County>LANARKSHIRE</County>
<PostCode>G51 1PR</PostCode>
</CustomerAddress>
<Snags />
<ChecklistConditions>
<ChecklistCondition Type="ID Verified">
<Status>Please select</Status>
<Satisfied>False</Satisfied>
<SatisfiedOn />
</ChecklistCondition>
<ChecklistCondition Type="Goods Quantity">
<Status>Please select</Status>
<Satisfied>False</Satisfied>
<SatisfiedOn />
</ChecklistCondition>
<ChecklistCondition Type="Delivery Notification">
<Status>Please select</Status>
<Satisfied>False</Satisfied>
<SatisfiedOn />
</ChecklistCondition>
</ChecklistConditions>
</Callback>';
// We send XML via CURL using POST with a http header of text/xml.
$ch = curl_init('http://localhost/efinance/src/server.php');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$ch_result = curl_exec($ch);
curl_close($ch);
// Print CURL result.
echo $ch_result;

?>

<? require_once('html/footer.php'); ?>
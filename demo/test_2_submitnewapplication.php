<? require_once('html/head.php'); ?>
<? require_once('html/return.php'); ?>

<h2>Test 2 - SubmitNewApplication</h2>

<?

require_once('../src/efinance.php');

$bef = new bef_submitNewApplication();

$bef->build_proposal('ProposalTypeCode', 'FTBNPS');
$bef->build_proposal('InterestRateType', 1);
$bef->build_proposal('InterestRate', '29.84');
$bef->build_proposal('Term', 36);
$bef->build_proposal('DeferralPeriod', 6);
$bef->build_proposal('ClientReference', 'A11');
$bef->build_proposal('CashPrice', 600);
$bef->build_proposal('Deposit', 0);
$bef->build_proposal('ThirdPartyCharge', 0);

$bef->build_customer('Title', 'Mr');
$bef->build_customer('Forename', 'Test');
$bef->build_customer('Surname', 'Person');
$bef->build_customer('EmailAddress', 'test@test.com');

$bef->build_address('HouseNumber', '1');
$bef->build_address('Street', 'A Street');
$bef->build_address('District', 'A Locality');
$bef->build_address('Town', 'A Town');
$bef->build_address('County', 'A County');
$bef->build_address('Postcode', 'A1 1AA');

$bef->build_goods('CY0', 'Generic Bike', 5);
$bef->build_goods('CY0', 'Generic Bike 2', 5);
$bef->build_goods('CY0', 'Generic Bike 3', 5);

$bef->call();

echo 'Token:<br />';
echo $bef->get_token();

echo '<br /><br />Proposal ID:<br />';
echo $bef->get_proposal_id();

?>

<? require_once('html/footer.php'); ?>
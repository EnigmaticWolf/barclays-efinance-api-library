<?

/**
 * Barclays eFinance Library - Incoming Server
 *
 * @name      barclaysefinance
 * @author    Ben <ben@ben-griffiths.com>
 */

/*
 * Get the XML
 */
$post_data = trim(file_get_contents('php://input'));
$post_data = str_replace('<?xml version="1.0" encoding="utf‐8"?>', '', $post_data);
$post_data = str_replace(' xmlns="http://www.barclays‐partnerfinance.com/"', '', $post_data);

/*
 * Create the XML object
 */
$xml = simplexml_load_string($post_data);

/*
 * Get the Proposal ID
 */
if(isset($xml->ProposalID))
{
    $application_proposal_id = $xml->ProposalID;

    echo '<p><strong>ProposalID</strong>: '.$application_proposal_id.'</p>';
}

/*
 * Get the Client Reference
 */
if(isset($xml->ClientReference))
{
    $application_client_reference = $xml->ClientReference;

    echo '<p><strong>ClientReference</strong>: '.$application_client_reference.'</p>';
}

/*
 * Get the Application Status
 */
if(isset($xml->ProposalStatus->Status))
{
    $application_status = $xml->ProposalStatus->Status;

    echo '<p><strong>ProposalStatus</strong>: '.$application_status.'</p>';
}

?>
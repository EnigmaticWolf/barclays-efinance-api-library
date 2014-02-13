<?

/*
 * The MIT License (MIT)
 * 
 * Copyright (c) 2014 Ben Griffiths (http://www.appliedorder.com)
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

/**
 * Barclays eFinance Library - cancelAgreement
 *
 * @name      bef_cancelAgreement
 * @author    Ben Griffiths <https://github.com/BenGriffiths/barclays-efinance-api-library>
 */
class bef_cancelAgreement extends barclaysefinance
{


    /**
     * Customer data array
     *
     * @access public
     * @type   array
     */
    public $build_customer;


    /**
     * Agreement data array
     *
     * @access public
     * @type   array
     */
    public $build_agreement;


    /**
     * Prepare the initial array structures
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->build_customer = array
        (
            'Title'        => '',
            'Forename'     => '',
            'Initial'      => '',
            'Surname'      => '',
            'EmailAddress' => ''
        );

        $this->build_agreement = array
        (
            'AgreementNumber'        => '',
            'OriginalLoanAdvance'    => '',
            'CancellationAmount'     => '',
            'NewLoanAdvance'         => '',
            'CancellationType'       => '',
            'ClientRequestReference' => ''
        );
    }



    /**
     * Check for the fields needed for this call
     *
     * @access public
     * @return void
     */
    public function check_data()
    {
        parent::check_data();
    }


    /**
     * Build the Customer data array
     *
     * @access public
     * @return void
     */
    public function build_customer($key = '', $value = '')
    {
        if(!empty($key))
        {
            if(strtolower($key) == 'title')
            {
                $this->build_customer['Title'] = $value;
            }
            elseif(strtolower($key) == 'forename')
            {
                $this->build_customer['Forename'] = $value;
            }
            elseif(strtolower($key) == 'initial')
            {
                $this->build_customer['Initial'] = $value;
            }
            elseif(strtolower($key) == 'surname')
            {
                $this->build_customer['Surname'] = $value;
            }
            elseif(strtolower($key) == 'emailaddress')
            {
                $this->build_customer['EmailAddress'] = $value;
            }
            else
            {
                throw new exception('<strong>Unknown Customer Key \''.$key.'\'</strong>');
            }
        }
    }


    /**
     * Build the Agreement data array
     *
     * @access public
     * @return void
     */
    public function build_agreement($key = '', $value = '')
    {
        if(!empty($key))
        {
            if(strtolower($key) == 'agreementnumber')
            {
                $this->build_agreement['AgreementNumber'] = $value;
            }
            elseif(strtolower($key) == 'originalloanadvance')
            {
                $this->build_agreement['OriginalLoanAdvance'] = $value;
            }
            elseif(strtolower($key) == 'cancellationamount')
            {
                $this->build_agreement['CancellationAmount'] = $value;
            }
            elseif(strtolower($key) == 'newloanadvance')
            {
                $this->build_agreement['NewLoanAdvance'] = $value;
            }
            elseif(strtolower($key) == 'cancellationtype')
            {
                $this->build_agreement['CancellationType'] = $value;
            }
            elseif(strtolower($key) == 'clientrequestreference')
            {
                $this->build_agreement['ClientRequestReference'] = $value;
            }
            else
            {
                throw new exception('<strong>Unknown Agreement Key \''.$key.'\'</strong>');
            }
        }
    }


    /**
     * Call the function
     *
     * @access public
     * @return void
     */
    public function call()
    {
        parent::call();

        $this->add_data('Customer', $this->build_customer);

        $this->add_data('Agreement', $this->build_agreement);

        $params = array
        (
            'cancelAgreementData' => $this->data_array
        );

        $this->debug($params, 'Soap Params');

        $this->create_client();

        $this->call_result = $this->soap_client->CancelAgreement($params);

        $this->after_call();
    }


}

?>
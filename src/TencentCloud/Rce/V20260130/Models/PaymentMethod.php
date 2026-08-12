<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 支付方式，支持多种支付方式
 *
 * @method string getPaymentType() 获取<p>支付方式</p><p>枚举值：</p><ul><li>cash： 现金</li><li>check： 支票</li><li>credit_card： 信用卡</li><li>debit_card： 借记卡</li><li>crypto_currency： 加密货币</li><li>digital_wallet： 数字钱包</li><li>gift_card： 礼品卡</li><li>points： 积分</li><li>in_app_purchase： APP内购买</li><li>electronic_fund_transfer： 电子资金转账</li><li>financing： 融资</li><li>invoice： 发票</li><li>prepaid_card： 预付卡</li><li>sepa_credit： SEPA信用转账</li></ul>
 * @method void setPaymentType(string $PaymentType) 设置<p>支付方式</p><p>枚举值：</p><ul><li>cash： 现金</li><li>check： 支票</li><li>credit_card： 信用卡</li><li>debit_card： 借记卡</li><li>crypto_currency： 加密货币</li><li>digital_wallet： 数字钱包</li><li>gift_card： 礼品卡</li><li>points： 积分</li><li>in_app_purchase： APP内购买</li><li>electronic_fund_transfer： 电子资金转账</li><li>financing： 融资</li><li>invoice： 发票</li><li>prepaid_card： 预付卡</li><li>sepa_credit： SEPA信用转账</li></ul>
 * @method string getPaymentChannel() 获取<p>支付渠道</p>
 * @method void setPaymentChannel(string $PaymentChannel) 设置<p>支付渠道</p>
 * @method Card getCard() 获取<p>银行卡信息，当用支付方式是credit_card、debit_card时必填</p>
 * @method void setCard(Card $Card) 设置<p>银行卡信息，当用支付方式是credit_card、debit_card时必填</p>
 * @method boolean getSEPADirectDebitMandate() 获取<p>SEPA直接借记授权</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method void setSEPADirectDebitMandate(boolean $SEPADirectDebitMandate) 设置<p>SEPA直接借记授权</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method Wallet getDigitalWallet() 获取<p>数字钱包</p>
 * @method void setDigitalWallet(Wallet $DigitalWallet) 设置<p>数字钱包</p>
 */
class PaymentMethod extends AbstractModel
{
    /**
     * @var string <p>支付方式</p><p>枚举值：</p><ul><li>cash： 现金</li><li>check： 支票</li><li>credit_card： 信用卡</li><li>debit_card： 借记卡</li><li>crypto_currency： 加密货币</li><li>digital_wallet： 数字钱包</li><li>gift_card： 礼品卡</li><li>points： 积分</li><li>in_app_purchase： APP内购买</li><li>electronic_fund_transfer： 电子资金转账</li><li>financing： 融资</li><li>invoice： 发票</li><li>prepaid_card： 预付卡</li><li>sepa_credit： SEPA信用转账</li></ul>
     */
    public $PaymentType;

    /**
     * @var string <p>支付渠道</p>
     */
    public $PaymentChannel;

    /**
     * @var Card <p>银行卡信息，当用支付方式是credit_card、debit_card时必填</p>
     */
    public $Card;

    /**
     * @var boolean <p>SEPA直接借记授权</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     */
    public $SEPADirectDebitMandate;

    /**
     * @var Wallet <p>数字钱包</p>
     */
    public $DigitalWallet;

    /**
     * @param string $PaymentType <p>支付方式</p><p>枚举值：</p><ul><li>cash： 现金</li><li>check： 支票</li><li>credit_card： 信用卡</li><li>debit_card： 借记卡</li><li>crypto_currency： 加密货币</li><li>digital_wallet： 数字钱包</li><li>gift_card： 礼品卡</li><li>points： 积分</li><li>in_app_purchase： APP内购买</li><li>electronic_fund_transfer： 电子资金转账</li><li>financing： 融资</li><li>invoice： 发票</li><li>prepaid_card： 预付卡</li><li>sepa_credit： SEPA信用转账</li></ul>
     * @param string $PaymentChannel <p>支付渠道</p>
     * @param Card $Card <p>银行卡信息，当用支付方式是credit_card、debit_card时必填</p>
     * @param boolean $SEPADirectDebitMandate <p>SEPA直接借记授权</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     * @param Wallet $DigitalWallet <p>数字钱包</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PaymentType",$param) and $param["PaymentType"] !== null) {
            $this->PaymentType = $param["PaymentType"];
        }

        if (array_key_exists("PaymentChannel",$param) and $param["PaymentChannel"] !== null) {
            $this->PaymentChannel = $param["PaymentChannel"];
        }

        if (array_key_exists("Card",$param) and $param["Card"] !== null) {
            $this->Card = new Card();
            $this->Card->deserialize($param["Card"]);
        }

        if (array_key_exists("SEPADirectDebitMandate",$param) and $param["SEPADirectDebitMandate"] !== null) {
            $this->SEPADirectDebitMandate = $param["SEPADirectDebitMandate"];
        }

        if (array_key_exists("DigitalWallet",$param) and $param["DigitalWallet"] !== null) {
            $this->DigitalWallet = new Wallet();
            $this->DigitalWallet->deserialize($param["DigitalWallet"]);
        }
    }
}

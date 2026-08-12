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
 * 提现事件详情
 *
 * @method Amount getAmount() 获取<p>提现金额</p>
 * @method void setAmount(Amount $Amount) 设置<p>提现金额</p>
 * @method string getMethod() 获取<p>提现方式</p><p>枚举值：</p><ul><li>card： 银行卡</li><li>wallet： 电子钱包</li></ul>
 * @method void setMethod(string $Method) 设置<p>提现方式</p><p>枚举值：</p><ul><li>card： 银行卡</li><li>wallet： 电子钱包</li></ul>
 * @method Card getCard() 获取<p>提现银行卡，当提现方式是card时必填</p>
 * @method void setCard(Card $Card) 设置<p>提现银行卡，当提现方式是card时必填</p>
 * @method Wallet getWallet() 获取<p>提现数字钱包，当提现方式是wallet时必填</p>
 * @method void setWallet(Wallet $Wallet) 设置<p>提现数字钱包，当提现方式是wallet时必填</p>
 * @method Result getResult() 获取<p>提现结果</p>
 * @method void setResult(Result $Result) 设置<p>提现结果</p>
 * @method array getCust() 获取<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class WithdrawEvent extends AbstractModel
{
    /**
     * @var Amount <p>提现金额</p>
     */
    public $Amount;

    /**
     * @var string <p>提现方式</p><p>枚举值：</p><ul><li>card： 银行卡</li><li>wallet： 电子钱包</li></ul>
     */
    public $Method;

    /**
     * @var Card <p>提现银行卡，当提现方式是card时必填</p>
     */
    public $Card;

    /**
     * @var Wallet <p>提现数字钱包，当提现方式是wallet时必填</p>
     */
    public $Wallet;

    /**
     * @var Result <p>提现结果</p>
     */
    public $Result;

    /**
     * @var array <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param Amount $Amount <p>提现金额</p>
     * @param string $Method <p>提现方式</p><p>枚举值：</p><ul><li>card： 银行卡</li><li>wallet： 电子钱包</li></ul>
     * @param Card $Card <p>提现银行卡，当提现方式是card时必填</p>
     * @param Wallet $Wallet <p>提现数字钱包，当提现方式是wallet时必填</p>
     * @param Result $Result <p>提现结果</p>
     * @param array $Cust <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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
        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = new Amount();
            $this->Amount->deserialize($param["Amount"]);
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Card",$param) and $param["Card"] !== null) {
            $this->Card = new Card();
            $this->Card->deserialize($param["Card"]);
        }

        if (array_key_exists("Wallet",$param) and $param["Wallet"] !== null) {
            $this->Wallet = new Wallet();
            $this->Wallet->deserialize($param["Wallet"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new Result();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}

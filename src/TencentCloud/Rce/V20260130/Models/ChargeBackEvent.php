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
 * 拒付事件详情
 *
 * @method string getTransactionId() 获取<p>交易ID</p>
 * @method void setTransactionId(string $TransactionId) 设置<p>交易ID</p>
 * @method array getOrderId() 获取<p>订单 ID，当一笔交易关联多个订单（合并支付）时请输入所有订单ID</p>
 * @method void setOrderId(array $OrderId) 设置<p>订单 ID，当一笔交易关联多个订单（合并支付）时请输入所有订单ID</p>
 * @method string getChargeBackCode() 获取<p>拒付理由码，参考各卡组织定义的拒付码，例如：10.1、13.1、 4870、4871等</p>
 * @method void setChargeBackCode(string $ChargeBackCode) 设置<p>拒付理由码，参考各卡组织定义的拒付码，例如：10.1、13.1、 4870、4871等</p>
 * @method string getChargeBackReason() 获取<p>拒付原因，参考各卡组织定义的拒付原因，例如：未收到商品、欺诈等</p>
 * @method void setChargeBackReason(string $ChargeBackReason) 设置<p>拒付原因，参考各卡组织定义的拒付原因，例如：未收到商品、欺诈等</p>
 * @method string getChargeBackProcess() 获取<p>拒付申诉阶段</p><p>枚举值：</p><ul><li>need_response： 需要商家回应</li><li>information_supplied： 商家已提供信息</li><li>chargeback_reversed： 拒付已撤销</li><li>chargeback_sustained： 拒付已成立</li></ul>
 * @method void setChargeBackProcess(string $ChargeBackProcess) 设置<p>拒付申诉阶段</p><p>枚举值：</p><ul><li>need_response： 需要商家回应</li><li>information_supplied： 商家已提供信息</li><li>chargeback_reversed： 拒付已撤销</li><li>chargeback_sustained： 拒付已成立</li></ul>
 * @method Amount getChargeBackAmount() 获取<p>拒付金额</p>
 * @method void setChargeBackAmount(Amount $ChargeBackAmount) 设置<p>拒付金额</p>
 * @method array getCust() 获取<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class ChargeBackEvent extends AbstractModel
{
    /**
     * @var string <p>交易ID</p>
     */
    public $TransactionId;

    /**
     * @var array <p>订单 ID，当一笔交易关联多个订单（合并支付）时请输入所有订单ID</p>
     */
    public $OrderId;

    /**
     * @var string <p>拒付理由码，参考各卡组织定义的拒付码，例如：10.1、13.1、 4870、4871等</p>
     */
    public $ChargeBackCode;

    /**
     * @var string <p>拒付原因，参考各卡组织定义的拒付原因，例如：未收到商品、欺诈等</p>
     */
    public $ChargeBackReason;

    /**
     * @var string <p>拒付申诉阶段</p><p>枚举值：</p><ul><li>need_response： 需要商家回应</li><li>information_supplied： 商家已提供信息</li><li>chargeback_reversed： 拒付已撤销</li><li>chargeback_sustained： 拒付已成立</li></ul>
     */
    public $ChargeBackProcess;

    /**
     * @var Amount <p>拒付金额</p>
     */
    public $ChargeBackAmount;

    /**
     * @var array <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param string $TransactionId <p>交易ID</p>
     * @param array $OrderId <p>订单 ID，当一笔交易关联多个订单（合并支付）时请输入所有订单ID</p>
     * @param string $ChargeBackCode <p>拒付理由码，参考各卡组织定义的拒付码，例如：10.1、13.1、 4870、4871等</p>
     * @param string $ChargeBackReason <p>拒付原因，参考各卡组织定义的拒付原因，例如：未收到商品、欺诈等</p>
     * @param string $ChargeBackProcess <p>拒付申诉阶段</p><p>枚举值：</p><ul><li>need_response： 需要商家回应</li><li>information_supplied： 商家已提供信息</li><li>chargeback_reversed： 拒付已撤销</li><li>chargeback_sustained： 拒付已成立</li></ul>
     * @param Amount $ChargeBackAmount <p>拒付金额</p>
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
        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ChargeBackCode",$param) and $param["ChargeBackCode"] !== null) {
            $this->ChargeBackCode = $param["ChargeBackCode"];
        }

        if (array_key_exists("ChargeBackReason",$param) and $param["ChargeBackReason"] !== null) {
            $this->ChargeBackReason = $param["ChargeBackReason"];
        }

        if (array_key_exists("ChargeBackProcess",$param) and $param["ChargeBackProcess"] !== null) {
            $this->ChargeBackProcess = $param["ChargeBackProcess"];
        }

        if (array_key_exists("ChargeBackAmount",$param) and $param["ChargeBackAmount"] !== null) {
            $this->ChargeBackAmount = new Amount();
            $this->ChargeBackAmount->deserialize($param["ChargeBackAmount"]);
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

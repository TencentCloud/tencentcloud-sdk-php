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
 * 交易事件详情
 *
 * @method string getTransactionId() 获取<p>交易唯一标识</p>
 * @method void setTransactionId(string $TransactionId) 设置<p>交易唯一标识</p>
 * @method array getOrderId() 获取<p>您系统中的订单 ID，当一笔交易关联多个订单（合并支付）时请输入所有订单ID</p>
 * @method void setOrderId(array $OrderId) 设置<p>您系统中的订单 ID，当一笔交易关联多个订单（合并支付）时请输入所有订单ID</p>
 * @method Amount getPaymentAmount() 获取<p>交易金额</p>
 * @method void setPaymentAmount(Amount $PaymentAmount) 设置<p>交易金额</p>
 * @method PaymentMethod getPaymentMethod() 获取<p>支付方式，支持多种支付方式</p>
 * @method void setPaymentMethod(PaymentMethod $PaymentMethod) 设置<p>支付方式，支持多种支付方式</p>
 * @method string getTransactionType() 获取<p>交易类型</p><p>枚举值：</p><ul><li>sale： 一次性完成授权与扣款（最常见）</li><li>authorize： 仅授权（冻结金额）</li><li>capture： 执行扣款（在授权后）</li><li>void： 取消待处理的授权或扣款</li><li>refund： 退款（部分或全部）</li><li>deposit： 向账户存款</li><li>withdrawal： 从账户提现</li><li>transfer： 账户间转账</li><li>buy： 购买资产（如加密货币）</li><li>sell： 出售资产</li><li>send： 发送资金/资产（如跨钱包转账）</li><li>receive： 接收资金/资产</li></ul><p>默认值：sale</p>
 * @method void setTransactionType(string $TransactionType) 设置<p>交易类型</p><p>枚举值：</p><ul><li>sale： 一次性完成授权与扣款（最常见）</li><li>authorize： 仅授权（冻结金额）</li><li>capture： 执行扣款（在授权后）</li><li>void： 取消待处理的授权或扣款</li><li>refund： 退款（部分或全部）</li><li>deposit： 向账户存款</li><li>withdrawal： 从账户提现</li><li>transfer： 账户间转账</li><li>buy： 购买资产（如加密货币）</li><li>sell： 出售资产</li><li>send： 发送资金/资产（如跨钱包转账）</li><li>receive： 接收资金/资产</li></ul><p>默认值：sale</p>
 * @method Billing getBilling() 获取<p>账单信息</p>
 * @method void setBilling(Billing $Billing) 设置<p>账单信息</p>
 * @method Delivery getDelivery() 获取<p>物流信息</p>
 * @method void setDelivery(Delivery $Delivery) 设置<p>物流信息</p>
 * @method Merchant getMerchant() 获取<p>商家信息</p>
 * @method void setMerchant(Merchant $Merchant) 设置<p>商家信息</p>
 * @method PaymentResult getPaymentResult() 获取<p>支付结果</p>
 * @method void setPaymentResult(PaymentResult $PaymentResult) 设置<p>支付结果</p>
 * @method string getTransferRecipientUserId() 获取<p>接收方的用户ID，适用于 transfer 交易类型</p>
 * @method void setTransferRecipientUserId(string $TransferRecipientUserId) 设置<p>接收方的用户ID，适用于 transfer 交易类型</p>
 * @method Address getTransferSentAddress() 获取<p>发送方的物理地址，适用于 transfer 交易类型</p>
 * @method void setTransferSentAddress(Address $TransferSentAddress) 设置<p>发送方的物理地址，适用于 transfer 交易类型</p>
 * @method Address getTransferReceivedAddress() 获取<p>接收方的物理地址，适用于 transfer 交易类型</p>
 * @method void setTransferReceivedAddress(Address $TransferReceivedAddress) 设置<p>接收方的物理地址，适用于 transfer 交易类型</p>
 * @method array getDigitalOrders() 获取<p>数字订单列表</p>
 * @method void setDigitalOrders(array $DigitalOrders) 设置<p>数字订单列表</p>
 * @method Wallet getReceiverWallet() 获取<p>接收加密货币的钱包</p>
 * @method void setReceiverWallet(Wallet $ReceiverWallet) 设置<p>接收加密货币的钱包</p>
 * @method array getCust() 获取<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class TransactionEvent extends AbstractModel
{
    /**
     * @var string <p>交易唯一标识</p>
     */
    public $TransactionId;

    /**
     * @var array <p>您系统中的订单 ID，当一笔交易关联多个订单（合并支付）时请输入所有订单ID</p>
     */
    public $OrderId;

    /**
     * @var Amount <p>交易金额</p>
     */
    public $PaymentAmount;

    /**
     * @var PaymentMethod <p>支付方式，支持多种支付方式</p>
     */
    public $PaymentMethod;

    /**
     * @var string <p>交易类型</p><p>枚举值：</p><ul><li>sale： 一次性完成授权与扣款（最常见）</li><li>authorize： 仅授权（冻结金额）</li><li>capture： 执行扣款（在授权后）</li><li>void： 取消待处理的授权或扣款</li><li>refund： 退款（部分或全部）</li><li>deposit： 向账户存款</li><li>withdrawal： 从账户提现</li><li>transfer： 账户间转账</li><li>buy： 购买资产（如加密货币）</li><li>sell： 出售资产</li><li>send： 发送资金/资产（如跨钱包转账）</li><li>receive： 接收资金/资产</li></ul><p>默认值：sale</p>
     */
    public $TransactionType;

    /**
     * @var Billing <p>账单信息</p>
     */
    public $Billing;

    /**
     * @var Delivery <p>物流信息</p>
     */
    public $Delivery;

    /**
     * @var Merchant <p>商家信息</p>
     */
    public $Merchant;

    /**
     * @var PaymentResult <p>支付结果</p>
     */
    public $PaymentResult;

    /**
     * @var string <p>接收方的用户ID，适用于 transfer 交易类型</p>
     */
    public $TransferRecipientUserId;

    /**
     * @var Address <p>发送方的物理地址，适用于 transfer 交易类型</p>
     */
    public $TransferSentAddress;

    /**
     * @var Address <p>接收方的物理地址，适用于 transfer 交易类型</p>
     */
    public $TransferReceivedAddress;

    /**
     * @var array <p>数字订单列表</p>
     */
    public $DigitalOrders;

    /**
     * @var Wallet <p>接收加密货币的钱包</p>
     */
    public $ReceiverWallet;

    /**
     * @var array <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param string $TransactionId <p>交易唯一标识</p>
     * @param array $OrderId <p>您系统中的订单 ID，当一笔交易关联多个订单（合并支付）时请输入所有订单ID</p>
     * @param Amount $PaymentAmount <p>交易金额</p>
     * @param PaymentMethod $PaymentMethod <p>支付方式，支持多种支付方式</p>
     * @param string $TransactionType <p>交易类型</p><p>枚举值：</p><ul><li>sale： 一次性完成授权与扣款（最常见）</li><li>authorize： 仅授权（冻结金额）</li><li>capture： 执行扣款（在授权后）</li><li>void： 取消待处理的授权或扣款</li><li>refund： 退款（部分或全部）</li><li>deposit： 向账户存款</li><li>withdrawal： 从账户提现</li><li>transfer： 账户间转账</li><li>buy： 购买资产（如加密货币）</li><li>sell： 出售资产</li><li>send： 发送资金/资产（如跨钱包转账）</li><li>receive： 接收资金/资产</li></ul><p>默认值：sale</p>
     * @param Billing $Billing <p>账单信息</p>
     * @param Delivery $Delivery <p>物流信息</p>
     * @param Merchant $Merchant <p>商家信息</p>
     * @param PaymentResult $PaymentResult <p>支付结果</p>
     * @param string $TransferRecipientUserId <p>接收方的用户ID，适用于 transfer 交易类型</p>
     * @param Address $TransferSentAddress <p>发送方的物理地址，适用于 transfer 交易类型</p>
     * @param Address $TransferReceivedAddress <p>接收方的物理地址，适用于 transfer 交易类型</p>
     * @param array $DigitalOrders <p>数字订单列表</p>
     * @param Wallet $ReceiverWallet <p>接收加密货币的钱包</p>
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

        if (array_key_exists("PaymentAmount",$param) and $param["PaymentAmount"] !== null) {
            $this->PaymentAmount = new Amount();
            $this->PaymentAmount->deserialize($param["PaymentAmount"]);
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = new PaymentMethod();
            $this->PaymentMethod->deserialize($param["PaymentMethod"]);
        }

        if (array_key_exists("TransactionType",$param) and $param["TransactionType"] !== null) {
            $this->TransactionType = $param["TransactionType"];
        }

        if (array_key_exists("Billing",$param) and $param["Billing"] !== null) {
            $this->Billing = new Billing();
            $this->Billing->deserialize($param["Billing"]);
        }

        if (array_key_exists("Delivery",$param) and $param["Delivery"] !== null) {
            $this->Delivery = new Delivery();
            $this->Delivery->deserialize($param["Delivery"]);
        }

        if (array_key_exists("Merchant",$param) and $param["Merchant"] !== null) {
            $this->Merchant = new Merchant();
            $this->Merchant->deserialize($param["Merchant"]);
        }

        if (array_key_exists("PaymentResult",$param) and $param["PaymentResult"] !== null) {
            $this->PaymentResult = new PaymentResult();
            $this->PaymentResult->deserialize($param["PaymentResult"]);
        }

        if (array_key_exists("TransferRecipientUserId",$param) and $param["TransferRecipientUserId"] !== null) {
            $this->TransferRecipientUserId = $param["TransferRecipientUserId"];
        }

        if (array_key_exists("TransferSentAddress",$param) and $param["TransferSentAddress"] !== null) {
            $this->TransferSentAddress = new Address();
            $this->TransferSentAddress->deserialize($param["TransferSentAddress"]);
        }

        if (array_key_exists("TransferReceivedAddress",$param) and $param["TransferReceivedAddress"] !== null) {
            $this->TransferReceivedAddress = new Address();
            $this->TransferReceivedAddress->deserialize($param["TransferReceivedAddress"]);
        }

        if (array_key_exists("DigitalOrders",$param) and $param["DigitalOrders"] !== null) {
            $this->DigitalOrders = [];
            foreach ($param["DigitalOrders"] as $key => $value){
                $obj = new DigitalOrder();
                $obj->deserialize($value);
                array_push($this->DigitalOrders, $obj);
            }
        }

        if (array_key_exists("ReceiverWallet",$param) and $param["ReceiverWallet"] !== null) {
            $this->ReceiverWallet = new Wallet();
            $this->ReceiverWallet->deserialize($param["ReceiverWallet"]);
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

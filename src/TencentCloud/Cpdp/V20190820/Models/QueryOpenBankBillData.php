<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云企付-分页查询对账单数据结果
 *
 * @method string getBillDate() 获取交易日期
 * @method void setBillDate(string $BillDate) 设置交易日期
 * @method string getChannel() 获取渠道编码
 * @method void setChannel(string $Channel) 设置渠道编码
 * @method string getSubChannel() 获取二级渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubChannel(string $SubChannel) 设置二级渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentMerchantId() 获取系统父商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentMerchantId(string $ParentMerchantId) 设置系统父商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutMerchantId() 获取外部商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutMerchantId(string $OutMerchantId) 设置外部商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantId() 获取系统商户号
 * @method void setMerchantId(string $MerchantId) 设置系统商户号
 * @method string getEndMerchantId() 获取第三方商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndMerchantId(string $EndMerchantId) 设置第三方商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutTradeNo() 获取外部订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutTradeNo(string $OutTradeNo) 设置外部订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeNo() 获取系统订单号
 * @method void setTradeNo(string $TradeNo) 设置系统订单号
 * @method string getEndTradeNo() 获取第三方订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTradeNo(string $EndTradeNo) 设置第三方订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentType() 获取收付类型，PAYMENT:付款，INCOME:收款
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentType(string $PaymentType) 设置收付类型，PAYMENT:付款，INCOME:收款
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessType() 获取业务类型，WITHDRAW:提现，PAY:支付，RECHARGE:充值，TRANSFER:转账，REFUND:退款
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessType(string $BusinessType) 设置业务类型，WITHDRAW:提现，PAY:支付，RECHARGE:充值，TRANSFER:转账，REFUND:退款
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeTime() 获取发起交易时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setTradeTime(string $TradeTime) 设置发起交易时间，格式yyyy-MM-dd HH:mm:ss
 * @method string getFinishTime() 获取交易完成时间，格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(string $FinishTime) 设置交易完成时间，格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeStatus() 获取交易状态，0:未知，1:成功，2:失败
 * @method void setTradeStatus(string $TradeStatus) 设置交易状态，0:未知，1:成功，2:失败
 * @method string getCheckStatus() 获取对账状态，1:成功，2:失败 3:长账 4:短账
 * @method void setCheckStatus(string $CheckStatus) 设置对账状态，1:成功，2:失败 3:长账 4:短账
 * @method string getCheckFailReason() 获取对账失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckFailReason(string $CheckFailReason) 设置对账失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderAmount() 获取交易金额（元）
 * @method void setOrderAmount(string $OrderAmount) 设置交易金额（元）
 * @method string getServiceFee() 获取服务费（元）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceFee(string $ServiceFee) 设置服务费（元）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayeeAccount() 获取收款人账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayeeAccount(string $PayeeAccount) 设置收款人账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayeeName() 获取收款人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayeeName(string $PayeeName) 设置收款人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayerAccount() 获取付款人账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayerAccount(string $PayerAccount) 设置付款人账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayerName() 获取付款人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayerName(string $PayerName) 设置付款人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取支付信息描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置支付信息描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOpenBankBillData extends AbstractModel
{
    /**
     * @var string 交易日期
     */
    public $BillDate;

    /**
     * @var string 渠道编码
     */
    public $Channel;

    /**
     * @var string 二级渠道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubChannel;

    /**
     * @var string 系统父商户号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentMerchantId;

    /**
     * @var string 外部商户号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutMerchantId;

    /**
     * @var string 系统商户号
     */
    public $MerchantId;

    /**
     * @var string 第三方商户号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndMerchantId;

    /**
     * @var string 外部订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutTradeNo;

    /**
     * @var string 系统订单号
     */
    public $TradeNo;

    /**
     * @var string 第三方订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTradeNo;

    /**
     * @var string 收付类型，PAYMENT:付款，INCOME:收款
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentType;

    /**
     * @var string 业务类型，WITHDRAW:提现，PAY:支付，RECHARGE:充值，TRANSFER:转账，REFUND:退款
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessType;

    /**
     * @var string 发起交易时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $TradeTime;

    /**
     * @var string 交易完成时间，格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @var string 交易状态，0:未知，1:成功，2:失败
     */
    public $TradeStatus;

    /**
     * @var string 对账状态，1:成功，2:失败 3:长账 4:短账
     */
    public $CheckStatus;

    /**
     * @var string 对账失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckFailReason;

    /**
     * @var string 交易金额（元）
     */
    public $OrderAmount;

    /**
     * @var string 服务费（元）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceFee;

    /**
     * @var string 收款人账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayeeAccount;

    /**
     * @var string 收款人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayeeName;

    /**
     * @var string 付款人账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayerAccount;

    /**
     * @var string 付款人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayerName;

    /**
     * @var string 支付信息描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $BillDate 交易日期
     * @param string $Channel 渠道编码
     * @param string $SubChannel 二级渠道
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentMerchantId 系统父商户号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutMerchantId 外部商户号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantId 系统商户号
     * @param string $EndMerchantId 第三方商户号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutTradeNo 外部订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeNo 系统订单号
     * @param string $EndTradeNo 第三方订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentType 收付类型，PAYMENT:付款，INCOME:收款
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessType 业务类型，WITHDRAW:提现，PAY:支付，RECHARGE:充值，TRANSFER:转账，REFUND:退款
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeTime 发起交易时间，格式yyyy-MM-dd HH:mm:ss
     * @param string $FinishTime 交易完成时间，格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeStatus 交易状态，0:未知，1:成功，2:失败
     * @param string $CheckStatus 对账状态，1:成功，2:失败 3:长账 4:短账
     * @param string $CheckFailReason 对账失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderAmount 交易金额（元）
     * @param string $ServiceFee 服务费（元）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayeeAccount 收款人账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayeeName 收款人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayerAccount 付款人账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayerName 付款人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 支付信息描述
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("BillDate",$param) and $param["BillDate"] !== null) {
            $this->BillDate = $param["BillDate"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("SubChannel",$param) and $param["SubChannel"] !== null) {
            $this->SubChannel = $param["SubChannel"];
        }

        if (array_key_exists("ParentMerchantId",$param) and $param["ParentMerchantId"] !== null) {
            $this->ParentMerchantId = $param["ParentMerchantId"];
        }

        if (array_key_exists("OutMerchantId",$param) and $param["OutMerchantId"] !== null) {
            $this->OutMerchantId = $param["OutMerchantId"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("EndMerchantId",$param) and $param["EndMerchantId"] !== null) {
            $this->EndMerchantId = $param["EndMerchantId"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("TradeNo",$param) and $param["TradeNo"] !== null) {
            $this->TradeNo = $param["TradeNo"];
        }

        if (array_key_exists("EndTradeNo",$param) and $param["EndTradeNo"] !== null) {
            $this->EndTradeNo = $param["EndTradeNo"];
        }

        if (array_key_exists("PaymentType",$param) and $param["PaymentType"] !== null) {
            $this->PaymentType = $param["PaymentType"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("TradeTime",$param) and $param["TradeTime"] !== null) {
            $this->TradeTime = $param["TradeTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("TradeStatus",$param) and $param["TradeStatus"] !== null) {
            $this->TradeStatus = $param["TradeStatus"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("CheckFailReason",$param) and $param["CheckFailReason"] !== null) {
            $this->CheckFailReason = $param["CheckFailReason"];
        }

        if (array_key_exists("OrderAmount",$param) and $param["OrderAmount"] !== null) {
            $this->OrderAmount = $param["OrderAmount"];
        }

        if (array_key_exists("ServiceFee",$param) and $param["ServiceFee"] !== null) {
            $this->ServiceFee = $param["ServiceFee"];
        }

        if (array_key_exists("PayeeAccount",$param) and $param["PayeeAccount"] !== null) {
            $this->PayeeAccount = $param["PayeeAccount"];
        }

        if (array_key_exists("PayeeName",$param) and $param["PayeeName"] !== null) {
            $this->PayeeName = $param["PayeeName"];
        }

        if (array_key_exists("PayerAccount",$param) and $param["PayerAccount"] !== null) {
            $this->PayerAccount = $param["PayerAccount"];
        }

        if (array_key_exists("PayerName",$param) and $param["PayerName"] !== null) {
            $this->PayerName = $param["PayerName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

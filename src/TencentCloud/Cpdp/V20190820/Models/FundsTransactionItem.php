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
 * 会员资金交易明细信息
 *
 * @method string getTransType() 获取资金交易类型。
__1__：提现/退款
__2__：清分/充值
 * @method void setTransType(string $TransType) 设置资金交易类型。
__1__：提现/退款
__2__：清分/充值
 * @method string getBankBookingMessage() 获取银行记账说明。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankBookingMessage(string $BankBookingMessage) 设置银行记账说明。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranStatus() 获取交易状态。
__0__：成功
 * @method void setTranStatus(string $TranStatus) 设置交易状态。
__0__：成功
 * @method string getTransNetMemberCode() 获取业务方会员标识。
_平安渠道为交易网会员代码_
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransNetMemberCode(string $TransNetMemberCode) 设置业务方会员标识。
_平安渠道为交易网会员代码_
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountNumber() 获取子账户账号。
_平安渠道为见证子账户的账号_
 * @method void setSubAccountNumber(string $SubAccountNumber) 设置子账户账号。
_平安渠道为见证子账户的账号_
 * @method string getSubAccountName() 获取子账户名称。
_平安渠道为见证子账户的户名_
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountName(string $SubAccountName) 设置子账户名称。
_平安渠道为见证子账户的户名_
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransAmount() 获取交易金额。
 * @method void setTransAmount(string $TransAmount) 设置交易金额。
 * @method string getTransFee() 获取交易手续费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransFee(string $TransFee) 设置交易手续费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransDate() 获取交易日期，格式：yyyyMMdd。
 * @method void setTransDate(string $TransDate) 设置交易日期，格式：yyyyMMdd。
 * @method string getTransTime() 获取交易时间，格式：HHmmss。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransTime(string $TransTime) 设置交易时间，格式：HHmmss。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBankSequenceNumber() 获取银行系统流水号。
_平安渠道为见证系统流水号_
 * @method void setBankSequenceNumber(string $BankSequenceNumber) 设置银行系统流水号。
_平安渠道为见证系统流水号_
 * @method string getRemark() 获取备注。
_平安渠道，如果是见证+收单的交易，返回交易订单号_
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注。
_平安渠道，如果是见证+收单的交易，返回交易订单号_
注意：此字段可能返回 null，表示取不到有效值。
 */
class FundsTransactionItem extends AbstractModel
{
    /**
     * @var string 资金交易类型。
__1__：提现/退款
__2__：清分/充值
     */
    public $TransType;

    /**
     * @var string 银行记账说明。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankBookingMessage;

    /**
     * @var string 交易状态。
__0__：成功
     */
    public $TranStatus;

    /**
     * @var string 业务方会员标识。
_平安渠道为交易网会员代码_
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransNetMemberCode;

    /**
     * @var string 子账户账号。
_平安渠道为见证子账户的账号_
     */
    public $SubAccountNumber;

    /**
     * @var string 子账户名称。
_平安渠道为见证子账户的户名_
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountName;

    /**
     * @var string 交易金额。
     */
    public $TransAmount;

    /**
     * @var string 交易手续费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransFee;

    /**
     * @var string 交易日期，格式：yyyyMMdd。
     */
    public $TransDate;

    /**
     * @var string 交易时间，格式：HHmmss。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransTime;

    /**
     * @var string 银行系统流水号。
_平安渠道为见证系统流水号_
     */
    public $BankSequenceNumber;

    /**
     * @var string 备注。
_平安渠道，如果是见证+收单的交易，返回交易订单号_
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $TransType 资金交易类型。
__1__：提现/退款
__2__：清分/充值
     * @param string $BankBookingMessage 银行记账说明。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranStatus 交易状态。
__0__：成功
     * @param string $TransNetMemberCode 业务方会员标识。
_平安渠道为交易网会员代码_
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountNumber 子账户账号。
_平安渠道为见证子账户的账号_
     * @param string $SubAccountName 子账户名称。
_平安渠道为见证子账户的户名_
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransAmount 交易金额。
     * @param string $TransFee 交易手续费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransDate 交易日期，格式：yyyyMMdd。
     * @param string $TransTime 交易时间，格式：HHmmss。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankSequenceNumber 银行系统流水号。
_平安渠道为见证系统流水号_
     * @param string $Remark 备注。
_平安渠道，如果是见证+收单的交易，返回交易订单号_
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
        if (array_key_exists("TransType",$param) and $param["TransType"] !== null) {
            $this->TransType = $param["TransType"];
        }

        if (array_key_exists("BankBookingMessage",$param) and $param["BankBookingMessage"] !== null) {
            $this->BankBookingMessage = $param["BankBookingMessage"];
        }

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }

        if (array_key_exists("TransNetMemberCode",$param) and $param["TransNetMemberCode"] !== null) {
            $this->TransNetMemberCode = $param["TransNetMemberCode"];
        }

        if (array_key_exists("SubAccountNumber",$param) and $param["SubAccountNumber"] !== null) {
            $this->SubAccountNumber = $param["SubAccountNumber"];
        }

        if (array_key_exists("SubAccountName",$param) and $param["SubAccountName"] !== null) {
            $this->SubAccountName = $param["SubAccountName"];
        }

        if (array_key_exists("TransAmount",$param) and $param["TransAmount"] !== null) {
            $this->TransAmount = $param["TransAmount"];
        }

        if (array_key_exists("TransFee",$param) and $param["TransFee"] !== null) {
            $this->TransFee = $param["TransFee"];
        }

        if (array_key_exists("TransDate",$param) and $param["TransDate"] !== null) {
            $this->TransDate = $param["TransDate"];
        }

        if (array_key_exists("TransTime",$param) and $param["TransTime"] !== null) {
            $this->TransTime = $param["TransTime"];
        }

        if (array_key_exists("BankSequenceNumber",$param) and $param["BankSequenceNumber"] !== null) {
            $this->BankSequenceNumber = $param["BankSequenceNumber"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}

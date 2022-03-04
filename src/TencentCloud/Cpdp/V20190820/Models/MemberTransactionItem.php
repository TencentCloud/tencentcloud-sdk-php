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
 * 会员间交易明细信息
 *
 * @method string getTransType() 获取交易类型。
__1__：转出
__2__：转入
 * @method void setTransType(string $TransType) 设置交易类型。
__1__：转出
__2__：转入
 * @method string getTranStatus() 获取交易状态。
__0__：成功
 * @method void setTranStatus(string $TranStatus) 设置交易状态。
__0__：成功
 * @method string getTransAmount() 获取交易金额。
 * @method void setTransAmount(string $TransAmount) 设置交易金额。
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
 * @method string getBankBookingType() 获取银行记账类型。
_平安渠道为：_
_1：会员支付_
_2：会员冻结_
_3：会员解冻_
_4：登记挂账_
_6：下单预支付_
_7：确认并付款_
_8：会员退款_
_22：见证+收单平台调账_
_23：见证+收单资金冻结_
_24：见证+收单资金解冻_
_25：会员间交易退款_
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankBookingType(string $BankBookingType) 设置银行记账类型。
_平安渠道为：_
_1：会员支付_
_2：会员冻结_
_3：会员解冻_
_4：登记挂账_
_6：下单预支付_
_7：确认并付款_
_8：会员退款_
_22：见证+收单平台调账_
_23：见证+收单资金冻结_
_24：见证+收单资金解冻_
_25：会员间交易退款_
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInSubAccountNumber() 获取转入方子账户账号。
_平安渠道为转入见证子账户的账号_
 * @method void setInSubAccountNumber(string $InSubAccountNumber) 设置转入方子账户账号。
_平安渠道为转入见证子账户的账号_
 * @method string getOutSubAccountNumber() 获取转出方子账户账号。
_平安渠道为转出见证子账户的账号_
 * @method void setOutSubAccountNumber(string $OutSubAccountNumber) 设置转出方子账户账号。
_平安渠道为转出见证子账户的账号_
 * @method string getRemark() 获取备注。
_平安渠道，如果是见证+收单的交易，返回交易订单号_
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注。
_平安渠道，如果是见证+收单的交易，返回交易订单号_
注意：此字段可能返回 null，表示取不到有效值。
 */
class MemberTransactionItem extends AbstractModel
{
    /**
     * @var string 交易类型。
__1__：转出
__2__：转入
     */
    public $TransType;

    /**
     * @var string 交易状态。
__0__：成功
     */
    public $TranStatus;

    /**
     * @var string 交易金额。
     */
    public $TransAmount;

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
     * @var string 银行记账类型。
_平安渠道为：_
_1：会员支付_
_2：会员冻结_
_3：会员解冻_
_4：登记挂账_
_6：下单预支付_
_7：确认并付款_
_8：会员退款_
_22：见证+收单平台调账_
_23：见证+收单资金冻结_
_24：见证+收单资金解冻_
_25：会员间交易退款_
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankBookingType;

    /**
     * @var string 转入方子账户账号。
_平安渠道为转入见证子账户的账号_
     */
    public $InSubAccountNumber;

    /**
     * @var string 转出方子账户账号。
_平安渠道为转出见证子账户的账号_
     */
    public $OutSubAccountNumber;

    /**
     * @var string 备注。
_平安渠道，如果是见证+收单的交易，返回交易订单号_
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $TransType 交易类型。
__1__：转出
__2__：转入
     * @param string $TranStatus 交易状态。
__0__：成功
     * @param string $TransAmount 交易金额。
     * @param string $TransDate 交易日期，格式：yyyyMMdd。
     * @param string $TransTime 交易时间，格式：HHmmss。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankSequenceNumber 银行系统流水号。
_平安渠道为见证系统流水号_
     * @param string $BankBookingType 银行记账类型。
_平安渠道为：_
_1：会员支付_
_2：会员冻结_
_3：会员解冻_
_4：登记挂账_
_6：下单预支付_
_7：确认并付款_
_8：会员退款_
_22：见证+收单平台调账_
_23：见证+收单资金冻结_
_24：见证+收单资金解冻_
_25：会员间交易退款_
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InSubAccountNumber 转入方子账户账号。
_平安渠道为转入见证子账户的账号_
     * @param string $OutSubAccountNumber 转出方子账户账号。
_平安渠道为转出见证子账户的账号_
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

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }

        if (array_key_exists("TransAmount",$param) and $param["TransAmount"] !== null) {
            $this->TransAmount = $param["TransAmount"];
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

        if (array_key_exists("BankBookingType",$param) and $param["BankBookingType"] !== null) {
            $this->BankBookingType = $param["BankBookingType"];
        }

        if (array_key_exists("InSubAccountNumber",$param) and $param["InSubAccountNumber"] !== null) {
            $this->InSubAccountNumber = $param["InSubAccountNumber"];
        }

        if (array_key_exists("OutSubAccountNumber",$param) and $param["OutSubAccountNumber"] !== null) {
            $this->OutSubAccountNumber = $param["OutSubAccountNumber"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}

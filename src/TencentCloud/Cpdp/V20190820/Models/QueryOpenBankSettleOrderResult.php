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
 * 云企付结算查询结果
 *
 * @method string getOutSettleId() 获取外部结算流水号
 * @method void setOutSettleId(string $OutSettleId) 设置外部结算流水号
 * @method string getChannelSettleId() 获取渠道结算流水号
 * @method void setChannelSettleId(string $ChannelSettleId) 设置渠道结算流水号
 * @method string getSettleStatus() 获取退款状态。
SUCCESS：结算成功；
FAILED：结算失败；
PROCESSING：结算中;
INIT:初始化;
ACCEPT_FAILED:受理失败,底层银行返回订单不存在
ACCEPTED：受理成功
_UNKNOWN：默认未知
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSettleStatus(string $SettleStatus) 设置退款状态。
SUCCESS：结算成功；
FAILED：结算失败；
PROCESSING：结算中;
INIT:初始化;
ACCEPT_FAILED:受理失败,底层银行返回订单不存在
ACCEPTED：受理成功
_UNKNOWN：默认未知
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSettleAmount() 获取结算金额
 * @method void setSettleAmount(integer $SettleAmount) 设置结算金额
 * @method string getSettleDate() 获取结算日期，格式YYYYMMdd
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSettleDate(string $SettleDate) 设置结算日期，格式YYYYMMdd
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSettleType() 获取结算类型（T1/D1）
 * @method void setSettleType(string $SettleType) 设置结算类型（T1/D1）
 * @method string getFailReason() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeFinish() 获取完成时间，格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeFinish(string $TimeFinish) 设置完成时间，格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSettleFee() 获取结算手续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSettleFee(string $SettleFee) 设置结算手续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrency() 获取账户货币。参考附录“币种类型”。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrency(string $Currency) 设置账户货币。参考附录“币种类型”。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOpenBankSettleOrderResult extends AbstractModel
{
    /**
     * @var string 外部结算流水号
     */
    public $OutSettleId;

    /**
     * @var string 渠道结算流水号
     */
    public $ChannelSettleId;

    /**
     * @var string 退款状态。
SUCCESS：结算成功；
FAILED：结算失败；
PROCESSING：结算中;
INIT:初始化;
ACCEPT_FAILED:受理失败,底层银行返回订单不存在
ACCEPTED：受理成功
_UNKNOWN：默认未知
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SettleStatus;

    /**
     * @var integer 结算金额
     */
    public $SettleAmount;

    /**
     * @var string 结算日期，格式YYYYMMdd
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SettleDate;

    /**
     * @var string 结算类型（T1/D1）
     */
    public $SettleType;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var string 完成时间，格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeFinish;

    /**
     * @var string 结算手续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SettleFee;

    /**
     * @var string 账户货币。参考附录“币种类型”。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Currency;

    /**
     * @param string $OutSettleId 外部结算流水号
     * @param string $ChannelSettleId 渠道结算流水号
     * @param string $SettleStatus 退款状态。
SUCCESS：结算成功；
FAILED：结算失败；
PROCESSING：结算中;
INIT:初始化;
ACCEPT_FAILED:受理失败,底层银行返回订单不存在
ACCEPTED：受理成功
_UNKNOWN：默认未知
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SettleAmount 结算金额
     * @param string $SettleDate 结算日期，格式YYYYMMdd
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SettleType 结算类型（T1/D1）
     * @param string $FailReason 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeFinish 完成时间，格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SettleFee 结算手续费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Currency 账户货币。参考附录“币种类型”。
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
        if (array_key_exists("OutSettleId",$param) and $param["OutSettleId"] !== null) {
            $this->OutSettleId = $param["OutSettleId"];
        }

        if (array_key_exists("ChannelSettleId",$param) and $param["ChannelSettleId"] !== null) {
            $this->ChannelSettleId = $param["ChannelSettleId"];
        }

        if (array_key_exists("SettleStatus",$param) and $param["SettleStatus"] !== null) {
            $this->SettleStatus = $param["SettleStatus"];
        }

        if (array_key_exists("SettleAmount",$param) and $param["SettleAmount"] !== null) {
            $this->SettleAmount = $param["SettleAmount"];
        }

        if (array_key_exists("SettleDate",$param) and $param["SettleDate"] !== null) {
            $this->SettleDate = $param["SettleDate"];
        }

        if (array_key_exists("SettleType",$param) and $param["SettleType"] !== null) {
            $this->SettleType = $param["SettleType"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("TimeFinish",$param) and $param["TimeFinish"] !== null) {
            $this->TimeFinish = $param["TimeFinish"];
        }

        if (array_key_exists("SettleFee",$param) and $param["SettleFee"] !== null) {
            $this->SettleFee = $param["SettleFee"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}

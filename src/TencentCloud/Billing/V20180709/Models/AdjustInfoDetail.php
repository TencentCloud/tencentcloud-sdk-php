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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UIN异常调整明细
 *
 * @method string getPayerUin() 获取支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayerUin(string $PayerUin) 设置支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonth() 获取账单月份，格式：yyyy-MM
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonth(string $Month) 设置账单月份，格式：yyyy-MM
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdjustType() 获取调整类型
调账：manualAdjustment
补结算：supplementarySettlement
重结算：reSettlement
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdjustType(string $AdjustType) 设置调整类型
调账：manualAdjustment
补结算：supplementarySettlement
重结算：reSettlement
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdjustNum() 获取调整单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdjustNum(string $AdjustNum) 设置调整单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdjustCompletionTime() 获取异常调整完成时间，格式：yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdjustCompletionTime(string $AdjustCompletionTime) 设置异常调整完成时间，格式：yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAdjustAmount() 获取调整金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdjustAmount(float $AdjustAmount) 设置调整金额
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdjustInfoDetail extends AbstractModel
{
    /**
     * @var string 支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayerUin;

    /**
     * @var string 账单月份，格式：yyyy-MM
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Month;

    /**
     * @var string 调整类型
调账：manualAdjustment
补结算：supplementarySettlement
重结算：reSettlement
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdjustType;

    /**
     * @var string 调整单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdjustNum;

    /**
     * @var string 异常调整完成时间，格式：yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdjustCompletionTime;

    /**
     * @var float 调整金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdjustAmount;

    /**
     * @param string $PayerUin 支付者UIN：支付者的账号 ID，账号 ID 是用户在腾讯云的唯一账号标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Month 账单月份，格式：yyyy-MM
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdjustType 调整类型
调账：manualAdjustment
补结算：supplementarySettlement
重结算：reSettlement
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdjustNum 调整单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdjustCompletionTime 异常调整完成时间，格式：yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $AdjustAmount 调整金额
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
        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("AdjustType",$param) and $param["AdjustType"] !== null) {
            $this->AdjustType = $param["AdjustType"];
        }

        if (array_key_exists("AdjustNum",$param) and $param["AdjustNum"] !== null) {
            $this->AdjustNum = $param["AdjustNum"];
        }

        if (array_key_exists("AdjustCompletionTime",$param) and $param["AdjustCompletionTime"] !== null) {
            $this->AdjustCompletionTime = $param["AdjustCompletionTime"];
        }

        if (array_key_exists("AdjustAmount",$param) and $param["AdjustAmount"] !== null) {
            $this->AdjustAmount = $param["AdjustAmount"];
        }
    }
}

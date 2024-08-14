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
 * 使用记录
 *
 * @method integer getUsedAmount() 获取使用金额（微分）
 * @method void setUsedAmount(integer $UsedAmount) 设置使用金额（微分）
 * @method string getUsedTime() 获取使用时间
 * @method void setUsedTime(string $UsedTime) 设置使用时间
 * @method array getUsageDetails() 获取使用记录细节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsageDetails(array $UsageDetails) 设置使用记录细节
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayMode() 获取付费模式
 * @method void setPayMode(string $PayMode) 设置付费模式
 * @method string getVoucherId() 获取查询的券id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoucherId(string $VoucherId) 设置查询的券id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayScene() 获取交易场景：（adjust：调账、common：正常交易场景）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayScene(string $PayScene) 设置交易场景：（adjust：调账、common：正常交易场景）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeqId() 获取唯一id,对应交易:预付费的dealName,调账/后付费的outTradeNo
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeqId(string $SeqId) 设置唯一id,对应交易:预付费的dealName,调账/后付费的outTradeNo
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsageRecords extends AbstractModel
{
    /**
     * @var integer 使用金额（微分）
     */
    public $UsedAmount;

    /**
     * @var string 使用时间
     */
    public $UsedTime;

    /**
     * @var array 使用记录细节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsageDetails;

    /**
     * @var string 付费模式
     */
    public $PayMode;

    /**
     * @var string 查询的券id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoucherId;

    /**
     * @var string 交易场景：（adjust：调账、common：正常交易场景）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayScene;

    /**
     * @var string 唯一id,对应交易:预付费的dealName,调账/后付费的outTradeNo
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SeqId;

    /**
     * @param integer $UsedAmount 使用金额（微分）
     * @param string $UsedTime 使用时间
     * @param array $UsageDetails 使用记录细节
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayMode 付费模式
     * @param string $VoucherId 查询的券id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayScene 交易场景：（adjust：调账、common：正常交易场景）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SeqId 唯一id,对应交易:预付费的dealName,调账/后付费的outTradeNo
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
        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("UsedTime",$param) and $param["UsedTime"] !== null) {
            $this->UsedTime = $param["UsedTime"];
        }

        if (array_key_exists("UsageDetails",$param) and $param["UsageDetails"] !== null) {
            $this->UsageDetails = [];
            foreach ($param["UsageDetails"] as $key => $value){
                $obj = new UsageDetails();
                $obj->deserialize($value);
                array_push($this->UsageDetails, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("PayScene",$param) and $param["PayScene"] !== null) {
            $this->PayScene = $param["PayScene"];
        }

        if (array_key_exists("SeqId",$param) and $param["SeqId"] !== null) {
            $this->SeqId = $param["SeqId"];
        }
    }
}

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
     * @param integer $UsedAmount 使用金额（微分）
     * @param string $UsedTime 使用时间
     * @param array $UsageDetails 使用记录细节
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
    }
}

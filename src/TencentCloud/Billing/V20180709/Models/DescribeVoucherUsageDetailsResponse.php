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
 * DescribeVoucherUsageDetails返回参数结构体
 *
 * @method integer getTotalCount() 获取券总数
 * @method void setTotalCount(integer $TotalCount) 设置券总数
 * @method integer getTotalUsedAmount() 获取总已用金额（微分）
 * @method void setTotalUsedAmount(integer $TotalUsedAmount) 设置总已用金额（微分）
 * @method array getUsageRecords() 获取代金券使用记录细节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsageRecords(array $UsageRecords) 设置代金券使用记录细节
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVoucherUsageDetailsResponse extends AbstractModel
{
    /**
     * @var integer 券总数
     */
    public $TotalCount;

    /**
     * @var integer 总已用金额（微分）
     */
    public $TotalUsedAmount;

    /**
     * @var array 代金券使用记录细节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsageRecords;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 券总数
     * @param integer $TotalUsedAmount 总已用金额（微分）
     * @param array $UsageRecords 代金券使用记录细节
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalUsedAmount",$param) and $param["TotalUsedAmount"] !== null) {
            $this->TotalUsedAmount = $param["TotalUsedAmount"];
        }

        if (array_key_exists("UsageRecords",$param) and $param["UsageRecords"] !== null) {
            $this->UsageRecords = [];
            foreach ($param["UsageRecords"] as $key => $value){
                $obj = new UsageRecords();
                $obj->deserialize($value);
                array_push($this->UsageRecords, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

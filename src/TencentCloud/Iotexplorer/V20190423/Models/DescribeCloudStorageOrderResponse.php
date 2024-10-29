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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudStorageOrder返回参数结构体
 *
 * @method integer getStartTime() 获取云存套餐开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置云存套餐开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取云存套餐过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置云存套餐过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageId() 获取套餐id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageId(string $PackageId) 设置套餐id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取套餐状态
0：等待生效
1: 已过期
2:生效
 * @method void setStatus(integer $Status) 设置套餐状态
0：等待生效
1: 已过期
2:生效
 * @method integer getChannelId() 获取通道id
 * @method void setChannelId(integer $ChannelId) 设置通道id
 * @method integer getPrice() 获取订单金额，单位为分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrice(integer $Price) 设置订单金额，单位为分
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAmount() 获取支付金额，单位为分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmount(integer $Amount) 设置支付金额，单位为分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudStorageOrderResponse extends AbstractModel
{
    /**
     * @var integer 云存套餐开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 云存套餐过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 套餐id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageId;

    /**
     * @var integer 套餐状态
0：等待生效
1: 已过期
2:生效
     */
    public $Status;

    /**
     * @var integer 通道id
     */
    public $ChannelId;

    /**
     * @var integer 订单金额，单位为分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Price;

    /**
     * @var integer 支付金额，单位为分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Amount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $StartTime 云存套餐开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 云存套餐过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageId 套餐id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 套餐状态
0：等待生效
1: 已过期
2:生效
     * @param integer $ChannelId 通道id
     * @param integer $Price 订单金额，单位为分
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Amount 支付金额，单位为分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

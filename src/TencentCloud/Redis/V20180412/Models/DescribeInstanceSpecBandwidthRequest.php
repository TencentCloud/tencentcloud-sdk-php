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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceSpecBandwidth请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。填写实例id或者规格，两者必选其一。
 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。填写实例id或者规格，两者必选其一。
 * @method integer getShardSize() 获取分片大小，单位：MB
 * @method void setShardSize(integer $ShardSize) 设置分片大小，单位：MB
 * @method integer getShardNum() 获取分片数量。
 * @method void setShardNum(integer $ShardNum) 设置分片数量。
 * @method integer getReplicateNum() 获取复制组数量。
 * @method void setReplicateNum(integer $ReplicateNum) 设置复制组数量。
 * @method integer getReadOnlyWeight() 获取只读权重。
- 100：开启从只读。
- 0：关闭从只读。
 * @method void setReadOnlyWeight(integer $ReadOnlyWeight) 设置只读权重。
- 100：开启从只读。
- 0：关闭从只读。
 * @method integer getType() 获取实例类型，同 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的Type。
 * @method void setType(integer $Type) 设置实例类型，同 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的Type。
 */
class DescribeInstanceSpecBandwidthRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。填写实例id或者规格，两者必选其一。
     */
    public $InstanceId;

    /**
     * @var integer 分片大小，单位：MB
     */
    public $ShardSize;

    /**
     * @var integer 分片数量。
     */
    public $ShardNum;

    /**
     * @var integer 复制组数量。
     */
    public $ReplicateNum;

    /**
     * @var integer 只读权重。
- 100：开启从只读。
- 0：关闭从只读。
     */
    public $ReadOnlyWeight;

    /**
     * @var integer 实例类型，同 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的Type。
     */
    public $Type;

    /**
     * @param string $InstanceId 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。填写实例id或者规格，两者必选其一。
     * @param integer $ShardSize 分片大小，单位：MB
     * @param integer $ShardNum 分片数量。
     * @param integer $ReplicateNum 复制组数量。
     * @param integer $ReadOnlyWeight 只读权重。
- 100：开启从只读。
- 0：关闭从只读。
     * @param integer $Type 实例类型，同 [CreateInstances](https://cloud.tencent.com/document/api/239/20026) 的Type。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ShardSize",$param) and $param["ShardSize"] !== null) {
            $this->ShardSize = $param["ShardSize"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("ReplicateNum",$param) and $param["ReplicateNum"] !== null) {
            $this->ReplicateNum = $param["ReplicateNum"];
        }

        if (array_key_exists("ReadOnlyWeight",$param) and $param["ReadOnlyWeight"] !== null) {
            $this->ReadOnlyWeight = $param["ReadOnlyWeight"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

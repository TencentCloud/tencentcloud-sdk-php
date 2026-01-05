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
 * @method string getInstanceId() 获取<p>指定实例 ID。请登录 <a href="https://console.cloud.tencent.com/redis">Redis控制台</a> 在实例列表复制实例 ID。同时，InstanceId 与规格参数不能同时为空，至少提供一种。</p><ul><li>若仅指定 InstanceId：查询该实例当前规格的带宽。</li><li>若指定 InstanceId + 至少一个规格参数（ShardSize、ShardNum 或 ReplicateNum）：计算变更规格后的带宽。</li><li>若指定部分或所有规格参数（ShardSize、ShardNum、ReplicateNum 与 Type），而不指定 InstanceId：根据规格组合查询理论带宽。</li></ul>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。请登录 <a href="https://console.cloud.tencent.com/redis">Redis控制台</a> 在实例列表复制实例 ID。同时，InstanceId 与规格参数不能同时为空，至少提供一种。</p><ul><li>若仅指定 InstanceId：查询该实例当前规格的带宽。</li><li>若指定 InstanceId + 至少一个规格参数（ShardSize、ShardNum 或 ReplicateNum）：计算变更规格后的带宽。</li><li>若指定部分或所有规格参数（ShardSize、ShardNum、ReplicateNum 与 Type），而不指定 InstanceId：根据规格组合查询理论带宽。</li></ul>
 * @method integer getShardSize() 获取<p>分片大小。单位：MB。</p>
 * @method void setShardSize(integer $ShardSize) 设置<p>分片大小。单位：MB。</p>
 * @method integer getShardNum() 获取<p>分片数量。</p>
 * @method void setShardNum(integer $ShardNum) 设置<p>分片数量。</p>
 * @method integer getReplicateNum() 获取<p>复制组数量。</p>
 * @method void setReplicateNum(integer $ReplicateNum) 设置<p>复制组数量。</p>
 * @method integer getReadOnlyWeight() 获取<p>只读权重。- 100：开启从只读。- 0：关闭从只读。</p>
 * @method void setReadOnlyWeight(integer $ReadOnlyWeight) 设置<p>只读权重。- 100：开启从只读。- 0：关闭从只读。</p>
 * @method integer getType() 获取<p>实例类型，同 <a href="https://cloud.tencent.com/document/api/239/20026">CreateInstances</a> 的Type。</p>
 * @method void setType(integer $Type) 设置<p>实例类型，同 <a href="https://cloud.tencent.com/document/api/239/20026">CreateInstances</a> 的Type。</p>
 */
class DescribeInstanceSpecBandwidthRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例 ID。请登录 <a href="https://console.cloud.tencent.com/redis">Redis控制台</a> 在实例列表复制实例 ID。同时，InstanceId 与规格参数不能同时为空，至少提供一种。</p><ul><li>若仅指定 InstanceId：查询该实例当前规格的带宽。</li><li>若指定 InstanceId + 至少一个规格参数（ShardSize、ShardNum 或 ReplicateNum）：计算变更规格后的带宽。</li><li>若指定部分或所有规格参数（ShardSize、ShardNum、ReplicateNum 与 Type），而不指定 InstanceId：根据规格组合查询理论带宽。</li></ul>
     */
    public $InstanceId;

    /**
     * @var integer <p>分片大小。单位：MB。</p>
     */
    public $ShardSize;

    /**
     * @var integer <p>分片数量。</p>
     */
    public $ShardNum;

    /**
     * @var integer <p>复制组数量。</p>
     */
    public $ReplicateNum;

    /**
     * @var integer <p>只读权重。- 100：开启从只读。- 0：关闭从只读。</p>
     */
    public $ReadOnlyWeight;

    /**
     * @var integer <p>实例类型，同 <a href="https://cloud.tencent.com/document/api/239/20026">CreateInstances</a> 的Type。</p>
     */
    public $Type;

    /**
     * @param string $InstanceId <p>指定实例 ID。请登录 <a href="https://console.cloud.tencent.com/redis">Redis控制台</a> 在实例列表复制实例 ID。同时，InstanceId 与规格参数不能同时为空，至少提供一种。</p><ul><li>若仅指定 InstanceId：查询该实例当前规格的带宽。</li><li>若指定 InstanceId + 至少一个规格参数（ShardSize、ShardNum 或 ReplicateNum）：计算变更规格后的带宽。</li><li>若指定部分或所有规格参数（ShardSize、ShardNum、ReplicateNum 与 Type），而不指定 InstanceId：根据规格组合查询理论带宽。</li></ul>
     * @param integer $ShardSize <p>分片大小。单位：MB。</p>
     * @param integer $ShardNum <p>分片数量。</p>
     * @param integer $ReplicateNum <p>复制组数量。</p>
     * @param integer $ReadOnlyWeight <p>只读权重。- 100：开启从只读。- 0：关闭从只读。</p>
     * @param integer $Type <p>实例类型，同 <a href="https://cloud.tencent.com/document/api/239/20026">CreateInstances</a> 的Type。</p>
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

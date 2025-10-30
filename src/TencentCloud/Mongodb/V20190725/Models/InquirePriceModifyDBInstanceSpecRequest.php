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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceModifyDBInstanceSpec请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method integer getMemory() 获取变更配置后实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method void setMemory(integer $Memory) 设置变更配置后实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method integer getVolume() 获取变更配置后实例磁盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method void setVolume(integer $Volume) 设置变更配置后实例磁盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
 * @method integer getNodeNum() 获取实例节点数量。请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 副本集实例，指变更配置后实例的主从节点数量。
- 分片集群实例，指变更配置后实例每一个分片的主从节点数。
**说明**：切勿同时发起调整节点数、调整分片数、调整节点规格的任务。
 * @method void setNodeNum(integer $NodeNum) 设置实例节点数量。请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 副本集实例，指变更配置后实例的主从节点数量。
- 分片集群实例，指变更配置后实例每一个分片的主从节点数。
**说明**：切勿同时发起调整节点数、调整分片数、调整节点规格的任务。
 * @method integer getReplicateSetNum() 获取分片集群实例，指变更配置后实例的分片数量。取值范围：[2,36] 。
**说明**：变更后的分片数量不能小于当前现有的数量。切勿同时发起调整节点数、调整分片数与调整节点规格的任务。
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置分片集群实例，指变更配置后实例的分片数量。取值范围：[2,36] 。
**说明**：变更后的分片数量不能小于当前现有的数量。切勿同时发起调整节点数、调整分片数与调整节点规格的任务。
 */
class InquirePriceModifyDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 变更配置后实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     */
    public $Memory;

    /**
     * @var integer 变更配置后实例磁盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     */
    public $Volume;

    /**
     * @var integer 实例节点数量。请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 副本集实例，指变更配置后实例的主从节点数量。
- 分片集群实例，指变更配置后实例每一个分片的主从节点数。
**说明**：切勿同时发起调整节点数、调整分片数、调整节点规格的任务。
     */
    public $NodeNum;

    /**
     * @var integer 分片集群实例，指变更配置后实例的分片数量。取值范围：[2,36] 。
**说明**：变更后的分片数量不能小于当前现有的数量。切勿同时发起调整节点数、调整分片数与调整节点规格的任务。
     */
    public $ReplicateSetNum;

    /**
     * @param string $InstanceId 实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param integer $Memory 变更配置后实例内存大小，单位：GB。具体售卖的内存规格，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     * @param integer $Volume 变更配置后实例磁盘大小，单位：GB。每一个 CPU 规格对应的最大磁盘与最小磁盘范围，请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
     * @param integer $NodeNum 实例节点数量。请通过接口 [DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 获取。
- 副本集实例，指变更配置后实例的主从节点数量。
- 分片集群实例，指变更配置后实例每一个分片的主从节点数。
**说明**：切勿同时发起调整节点数、调整分片数、调整节点规格的任务。
     * @param integer $ReplicateSetNum 分片集群实例，指变更配置后实例的分片数量。取值范围：[2,36] 。
**说明**：变更后的分片数量不能小于当前现有的数量。切勿同时发起调整节点数、调整分片数与调整节点规格的任务。
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }
    }
}

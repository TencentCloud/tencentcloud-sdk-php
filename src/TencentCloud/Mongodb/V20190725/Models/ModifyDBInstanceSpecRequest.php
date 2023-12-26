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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSpec请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

 * @method void setInstanceId(string $InstanceId) 设置实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

 * @method integer getMemory() 获取实例配置变更后的内存大小。
- 单位：GB。
- 内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
 * @method void setMemory(integer $Memory) 设置实例配置变更后的内存大小。
- 单位：GB。
- 内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
 * @method integer getVolume() 获取实例配置变更后的硬盘大小，单位：GB。<ul><li>内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</li><li>降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。</li></ul>
 * @method void setVolume(integer $Volume) 设置实例配置变更后的硬盘大小，单位：GB。<ul><li>内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</li><li>降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。</li></ul>
 * @method integer getOplogSize() 获取(已废弃) 请使用ResizeOplog独立接口完成。

实例配置变更后 Oplog 的大小。
- 单位：GB。
- 默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。
 * @method void setOplogSize(integer $OplogSize) 设置(已废弃) 请使用ResizeOplog独立接口完成。

实例配置变更后 Oplog 的大小。
- 单位：GB。
- 默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。
 * @method integer getNodeNum() 获取实例变更后的节点数(mongod节点或mongos节点或readonly节点调整后的节点数，具体类型取决于AddNodeList或RemoveNodeList参数的节点类型)。
<ul><li>副本集：取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数 MinNodeNum 与 MaxNodeNum 获取。</li><li>分片集群：取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取。</li></ul>
 * @method void setNodeNum(integer $NodeNum) 设置实例变更后的节点数(mongod节点或mongos节点或readonly节点调整后的节点数，具体类型取决于AddNodeList或RemoveNodeList参数的节点类型)。
<ul><li>副本集：取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数 MinNodeNum 与 MaxNodeNum 获取。</li><li>分片集群：取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取。</li></ul>
 * @method integer getReplicateSetNum() 获取实例变更后的分片数。<ul><li>取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数MinReplicateSetNum与MaxReplicateSetNum获取。</li><li>该参数只能增加不能减少。</li></ul>
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置实例变更后的分片数。<ul><li>取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数MinReplicateSetNum与MaxReplicateSetNum获取。</li><li>该参数只能增加不能减少。</li></ul>
 * @method integer getInMaintenance() 获取实例配置变更的切换时间。<ul><li>0：调整完成时，立即执行变配任务。默认为0。</li><li>1：在维护时间窗内，执行变配任务。
<b>说明</b>：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。</li></ul>
 * @method void setInMaintenance(integer $InMaintenance) 设置实例配置变更的切换时间。<ul><li>0：调整完成时，立即执行变配任务。默认为0。</li><li>1：在维护时间窗内，执行变配任务。
<b>说明</b>：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。</li></ul>
 */
class ModifyDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     */
    public $InstanceId;

    /**
     * @var integer 实例配置变更后的内存大小。
- 单位：GB。
- 内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
     */
    public $Memory;

    /**
     * @var integer 实例配置变更后的硬盘大小，单位：GB。<ul><li>内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</li><li>降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。</li></ul>
     */
    public $Volume;

    /**
     * @var integer (已废弃) 请使用ResizeOplog独立接口完成。

实例配置变更后 Oplog 的大小。
- 单位：GB。
- 默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。
     */
    public $OplogSize;

    /**
     * @var integer 实例变更后的节点数(mongod节点或mongos节点或readonly节点调整后的节点数，具体类型取决于AddNodeList或RemoveNodeList参数的节点类型)。
<ul><li>副本集：取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数 MinNodeNum 与 MaxNodeNum 获取。</li><li>分片集群：取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取。</li></ul>
     */
    public $NodeNum;

    /**
     * @var integer 实例变更后的分片数。<ul><li>取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数MinReplicateSetNum与MaxReplicateSetNum获取。</li><li>该参数只能增加不能减少。</li></ul>
     */
    public $ReplicateSetNum;

    /**
     * @var integer 实例配置变更的切换时间。<ul><li>0：调整完成时，立即执行变配任务。默认为0。</li><li>1：在维护时间窗内，执行变配任务。
<b>说明</b>：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。</li></ul>
     */
    public $InMaintenance;

    /**
     * @param string $InstanceId 实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     * @param integer $Memory 实例配置变更后的内存大小。
- 单位：GB。
- 内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
     * @param integer $Volume 实例配置变更后的硬盘大小，单位：GB。<ul><li>内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</li><li>降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。</li></ul>
     * @param integer $OplogSize (已废弃) 请使用ResizeOplog独立接口完成。

实例配置变更后 Oplog 的大小。
- 单位：GB。
- 默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。
     * @param integer $NodeNum 实例变更后的节点数(mongod节点或mongos节点或readonly节点调整后的节点数，具体类型取决于AddNodeList或RemoveNodeList参数的节点类型)。
<ul><li>副本集：取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数 MinNodeNum 与 MaxNodeNum 获取。</li><li>分片集群：取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取。</li></ul>
     * @param integer $ReplicateSetNum 实例变更后的分片数。<ul><li>取值范围请通过云数据库的售卖规格（DescribeSpecInfo）接口返回的参数MinReplicateSetNum与MaxReplicateSetNum获取。</li><li>该参数只能增加不能减少。</li></ul>
     * @param integer $InMaintenance 实例配置变更的切换时间。<ul><li>0：调整完成时，立即执行变配任务。默认为0。</li><li>1：在维护时间窗内，执行变配任务。
<b>说明</b>：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。</li></ul>
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

        if (array_key_exists("OplogSize",$param) and $param["OplogSize"] !== null) {
            $this->OplogSize = $param["OplogSize"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }

        if (array_key_exists("InMaintenance",$param) and $param["InMaintenance"] !== null) {
            $this->InMaintenance = $param["InMaintenance"];
        }
    }
}

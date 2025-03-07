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

 * @method integer getMemory() 获取实例配置变更后的内存大小。- 单位：GB。为空时，默认取实例当前的内存大小。<br>  注意：内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
 * @method void setMemory(integer $Memory) 设置实例配置变更后的内存大小。- 单位：GB。为空时，默认取实例当前的内存大小。<br>  注意：内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
 * @method integer getVolume() 获取实例配置变更后的硬盘大小，单位：GB。为空时，默认取当前实例的磁盘大小。
- 内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
- 降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。
 * @method void setVolume(integer $Volume) 设置实例配置变更后的硬盘大小，单位：GB。为空时，默认取当前实例的磁盘大小。
- 内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
- 降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。
 * @method integer getOplogSize() 获取(已废弃) 请使用ResizeOplog独立接口完成。

实例配置变更后 Oplog 的大小。
- 单位：GB。
- 默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。
 * @method void setOplogSize(integer $OplogSize) 设置(已废弃) 请使用ResizeOplog独立接口完成。

实例配置变更后 Oplog 的大小。
- 单位：GB。
- 默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。
 * @method integer getNodeNum() 获取实例变更后mongod的节点数（不包含readonly节点数）。
- 变更mongod CPU与内存规格时，该参数可以不配置或者输入当前 mongod(不包含readonly) 节点数量。
-  变更 mongos CPU与内存规格时，该参数可以不配置或者输入当前 mongod(不包含readonly) 节点数量。
-  节点变更时(全部类型)，该参数可不配置或输入变更后的 mongod(不包含readonly) 节点数量。
-  副本集节点数：请确认节点数量取值范围，通过云数据库的售卖规格 [DescribeSpecInfo ](https://cloud.tencent.com/document/product/240/38565)接口返回的参数 MinNodeNum 与 MaxNodeNum 获取。
-  分片集群每个分片节点数：请确认节点数量取值范围，通过云数据库的售卖规格 [DescribeSpecInfo ](https://cloud.tencent.com/document/product/240/38565)接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取。
 * @method void setNodeNum(integer $NodeNum) 设置实例变更后mongod的节点数（不包含readonly节点数）。
- 变更mongod CPU与内存规格时，该参数可以不配置或者输入当前 mongod(不包含readonly) 节点数量。
-  变更 mongos CPU与内存规格时，该参数可以不配置或者输入当前 mongod(不包含readonly) 节点数量。
-  节点变更时(全部类型)，该参数可不配置或输入变更后的 mongod(不包含readonly) 节点数量。
-  副本集节点数：请确认节点数量取值范围，通过云数据库的售卖规格 [DescribeSpecInfo ](https://cloud.tencent.com/document/product/240/38565)接口返回的参数 MinNodeNum 与 MaxNodeNum 获取。
-  分片集群每个分片节点数：请确认节点数量取值范围，通过云数据库的售卖规格 [DescribeSpecInfo ](https://cloud.tencent.com/document/product/240/38565)接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取。
 * @method integer getReplicateSetNum() 获取实例变更后的分片数。
- 取值范围请通过云数据库的售卖规格[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 接口返回的参数**MinReplicateSetNum**与**MaxReplicateSetNum**获取。- 该参数只能增加不能减少。
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置实例变更后的分片数。
- 取值范围请通过云数据库的售卖规格[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 接口返回的参数**MinReplicateSetNum**与**MaxReplicateSetNum**获取。- 该参数只能增加不能减少。
 * @method integer getInMaintenance() 获取实例配置变更的切换时间。
- 0：调整完成时，立即执行变配任务。默认为0。
- 1：在维护时间窗内，执行变配任务。
**说明**：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。
 * @method void setInMaintenance(integer $InMaintenance) 设置实例配置变更的切换时间。
- 0：调整完成时，立即执行变配任务。默认为0。
- 1：在维护时间窗内，执行变配任务。
**说明**：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。
 * @method string getMongosMemory() 获取分片实例配置变更后的mongos内存大小。单位：GB。
 * @method void setMongosMemory(string $MongosMemory) 设置分片实例配置变更后的mongos内存大小。单位：GB。
 * @method array getAddNodeList() 获取新增节点列表，节点类型及可用区信息。
 * @method void setAddNodeList(array $AddNodeList) 设置新增节点列表，节点类型及可用区信息。
 * @method array getRemoveNodeList() 获取删除节点列表，注意：基于分片实例各片节点的一致性原则，删除分片实例节点时，只需指定0分片对应的节点即可，如：cmgo-9nl1czif_0-node-readonly0 将删除每个分片的第1个只读节点。
 * @method void setRemoveNodeList(array $RemoveNodeList) 设置删除节点列表，注意：基于分片实例各片节点的一致性原则，删除分片实例节点时，只需指定0分片对应的节点即可，如：cmgo-9nl1czif_0-node-readonly0 将删除每个分片的第1个只读节点。
 */
class ModifyDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     */
    public $InstanceId;

    /**
     * @var integer 实例配置变更后的内存大小。- 单位：GB。为空时，默认取实例当前的内存大小。<br>  注意：内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
     */
    public $Memory;

    /**
     * @var integer 实例配置变更后的硬盘大小，单位：GB。为空时，默认取当前实例的磁盘大小。
- 内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
- 降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。
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
     * @var integer 实例变更后mongod的节点数（不包含readonly节点数）。
- 变更mongod CPU与内存规格时，该参数可以不配置或者输入当前 mongod(不包含readonly) 节点数量。
-  变更 mongos CPU与内存规格时，该参数可以不配置或者输入当前 mongod(不包含readonly) 节点数量。
-  节点变更时(全部类型)，该参数可不配置或输入变更后的 mongod(不包含readonly) 节点数量。
-  副本集节点数：请确认节点数量取值范围，通过云数据库的售卖规格 [DescribeSpecInfo ](https://cloud.tencent.com/document/product/240/38565)接口返回的参数 MinNodeNum 与 MaxNodeNum 获取。
-  分片集群每个分片节点数：请确认节点数量取值范围，通过云数据库的售卖规格 [DescribeSpecInfo ](https://cloud.tencent.com/document/product/240/38565)接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取。
     */
    public $NodeNum;

    /**
     * @var integer 实例变更后的分片数。
- 取值范围请通过云数据库的售卖规格[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 接口返回的参数**MinReplicateSetNum**与**MaxReplicateSetNum**获取。- 该参数只能增加不能减少。
     */
    public $ReplicateSetNum;

    /**
     * @var integer 实例配置变更的切换时间。
- 0：调整完成时，立即执行变配任务。默认为0。
- 1：在维护时间窗内，执行变配任务。
**说明**：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。
     */
    public $InMaintenance;

    /**
     * @var string 分片实例配置变更后的mongos内存大小。单位：GB。
     */
    public $MongosMemory;

    /**
     * @var array 新增节点列表，节点类型及可用区信息。
     */
    public $AddNodeList;

    /**
     * @var array 删除节点列表，注意：基于分片实例各片节点的一致性原则，删除分片实例节点时，只需指定0分片对应的节点即可，如：cmgo-9nl1czif_0-node-readonly0 将删除每个分片的第1个只读节点。
     */
    public $RemoveNodeList;

    /**
     * @param string $InstanceId 实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     * @param integer $Memory 实例配置变更后的内存大小。- 单位：GB。为空时，默认取实例当前的内存大小。<br>  注意：内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
     * @param integer $Volume 实例配置变更后的硬盘大小，单位：GB。为空时，默认取当前实例的磁盘大小。
- 内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。
- 降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。
     * @param integer $OplogSize (已废弃) 请使用ResizeOplog独立接口完成。

实例配置变更后 Oplog 的大小。
- 单位：GB。
- 默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。
     * @param integer $NodeNum 实例变更后mongod的节点数（不包含readonly节点数）。
- 变更mongod CPU与内存规格时，该参数可以不配置或者输入当前 mongod(不包含readonly) 节点数量。
-  变更 mongos CPU与内存规格时，该参数可以不配置或者输入当前 mongod(不包含readonly) 节点数量。
-  节点变更时(全部类型)，该参数可不配置或输入变更后的 mongod(不包含readonly) 节点数量。
-  副本集节点数：请确认节点数量取值范围，通过云数据库的售卖规格 [DescribeSpecInfo ](https://cloud.tencent.com/document/product/240/38565)接口返回的参数 MinNodeNum 与 MaxNodeNum 获取。
-  分片集群每个分片节点数：请确认节点数量取值范围，通过云数据库的售卖规格 [DescribeSpecInfo ](https://cloud.tencent.com/document/product/240/38565)接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取。
     * @param integer $ReplicateSetNum 实例变更后的分片数。
- 取值范围请通过云数据库的售卖规格[DescribeSpecInfo](https://cloud.tencent.com/document/product/240/38567) 接口返回的参数**MinReplicateSetNum**与**MaxReplicateSetNum**获取。- 该参数只能增加不能减少。
     * @param integer $InMaintenance 实例配置变更的切换时间。
- 0：调整完成时，立即执行变配任务。默认为0。
- 1：在维护时间窗内，执行变配任务。
**说明**：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。
     * @param string $MongosMemory 分片实例配置变更后的mongos内存大小。单位：GB。
     * @param array $AddNodeList 新增节点列表，节点类型及可用区信息。
     * @param array $RemoveNodeList 删除节点列表，注意：基于分片实例各片节点的一致性原则，删除分片实例节点时，只需指定0分片对应的节点即可，如：cmgo-9nl1czif_0-node-readonly0 将删除每个分片的第1个只读节点。
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

        if (array_key_exists("MongosMemory",$param) and $param["MongosMemory"] !== null) {
            $this->MongosMemory = $param["MongosMemory"];
        }

        if (array_key_exists("AddNodeList",$param) and $param["AddNodeList"] !== null) {
            $this->AddNodeList = [];
            foreach ($param["AddNodeList"] as $key => $value){
                $obj = new AddNodeList();
                $obj->deserialize($value);
                array_push($this->AddNodeList, $obj);
            }
        }

        if (array_key_exists("RemoveNodeList",$param) and $param["RemoveNodeList"] !== null) {
            $this->RemoveNodeList = [];
            foreach ($param["RemoveNodeList"] as $key => $value){
                $obj = new RemoveNodeList();
                $obj->deserialize($value);
                array_push($this->RemoveNodeList, $obj);
            }
        }
    }
}

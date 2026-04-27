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
 * ModifyDBInstanceSpec请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method integer getMemory() 获取<p>实例配置变更后的内存大小。单位：GB。该参数为空值时，默认取实例当前的内存大小。当前所支持的内存规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。<br><strong>注意</strong>：内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</p>
 * @method void setMemory(integer $Memory) 设置<p>实例配置变更后的内存大小。单位：GB。该参数为空值时，默认取实例当前的内存大小。当前所支持的内存规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。<br><strong>注意</strong>：内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</p>
 * @method integer getVolume() 获取<p>实例配置变更后的硬盘大小，单位：GB。该参数为空值时，默认取当前实例的磁盘大小。当前所支持的磁盘容量，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p><ul><li>内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</li><li>降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。</li></ul>
 * @method void setVolume(integer $Volume) 设置<p>实例配置变更后的硬盘大小，单位：GB。该参数为空值时，默认取当前实例的磁盘大小。当前所支持的磁盘容量，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p><ul><li>内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</li><li>降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。</li></ul>
 * @method integer getOplogSize() 获取<p>(已废弃) 请使用ResizeOplog独立接口完成。</p><p>实例配置变更后 Oplog 的大小。</p><ul><li>单位：GB。</li><li>默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。</li></ul>
 * @method void setOplogSize(integer $OplogSize) 设置<p>(已废弃) 请使用ResizeOplog独立接口完成。</p><p>实例配置变更后 Oplog 的大小。</p><ul><li>单位：GB。</li><li>默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。</li></ul>
 * @method integer getNodeNum() 获取<p>实例变更后 mongod 的节点数（不包含 readonly 只读节点数）。</p><ul><li>副本集节点数：请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo </a>接口返回的参数 MinNodeNum 与 MaxNodeNum 获取节点数量取值范围。</li><li>分片集群每个分片节点数：请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo </a>接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取节点数量取值范围。<br><strong>说明</strong>：变更 mongod 或 mongos 的 CPU 与内存规格时，该参数可以不配置或者输入当前 mongod 或 mongos（不包含readonly）节点数量。</li></ul>
 * @method void setNodeNum(integer $NodeNum) 设置<p>实例变更后 mongod 的节点数（不包含 readonly 只读节点数）。</p><ul><li>副本集节点数：请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo </a>接口返回的参数 MinNodeNum 与 MaxNodeNum 获取节点数量取值范围。</li><li>分片集群每个分片节点数：请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo </a>接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取节点数量取值范围。<br><strong>说明</strong>：变更 mongod 或 mongos 的 CPU 与内存规格时，该参数可以不配置或者输入当前 mongod 或 mongos（不包含readonly）节点数量。</li></ul>
 * @method integer getReplicateSetNum() 获取<p>实例变更后的分片数。</p><ul><li>请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 接口返回的参数<strong>MinReplicateSetNum</strong>与<strong>MaxReplicateSetNum</strong>获取实例分片数取值范围。</li><li>实例分片数量只允许增加不允许减少。</li></ul>
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置<p>实例变更后的分片数。</p><ul><li>请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 接口返回的参数<strong>MinReplicateSetNum</strong>与<strong>MaxReplicateSetNum</strong>获取实例分片数取值范围。</li><li>实例分片数量只允许增加不允许减少。</li></ul>
 * @method integer getInMaintenance() 获取<p>实例配置变更的切换时间。</p><ul><li>0：调整完成时，立即执行变配任务。默认为0。</li><li>1：在维护时间窗内，执行变配任务。<br><strong>说明</strong>：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。</li></ul>
 * @method void setInMaintenance(integer $InMaintenance) 设置<p>实例配置变更的切换时间。</p><ul><li>0：调整完成时，立即执行变配任务。默认为0。</li><li>1：在维护时间窗内，执行变配任务。<br><strong>说明</strong>：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。</li></ul>
 * @method string getMongosMemory() 获取<p>分片实例配置变更后的 mongos 内存大小。单位：GB。实例支持的规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p>
 * @method void setMongosMemory(string $MongosMemory) 设置<p>分片实例配置变更后的 mongos 内存大小。单位：GB。实例支持的规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p>
 * @method array getAddNodeList() 获取<p>新增节点列表，节点类型及可用区信息。</p>
 * @method void setAddNodeList(array $AddNodeList) 设置<p>新增节点列表，节点类型及可用区信息。</p>
 * @method array getRemoveNodeList() 获取<p>删除节点列表。<br><strong>注意</strong>：基于分片实例各片节点的一致性原则，删除分片实例节点时，只需指定0分片对应的节点即可，如：cmgo-9nl1czif_0-node-readonly0 将删除每个分片的第1个只读节点。</p>
 * @method void setRemoveNodeList(array $RemoveNodeList) 设置<p>删除节点列表。<br><strong>注意</strong>：基于分片实例各片节点的一致性原则，删除分片实例节点时，只需指定0分片对应的节点即可，如：cmgo-9nl1czif_0-node-readonly0 将删除每个分片的第1个只读节点。</p>
 * @method integer getCpu() 获取<p>实例配置变更后的CPU大小。单位：C。该参数为空值时，默认取实例当前的 CPU 大小。当前所支持的CPU规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例配置变更后的CPU大小。单位：C。该参数为空值时，默认取实例当前的 CPU 大小。当前所支持的CPU规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p>
 * @method string getMachineCode() 获取<p>实例配置变更后的产品规格类型。该参数为空值时，默认取实例当前的产品规格类型。<br>当前支持的产品规格类型如下：<br>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：</p><ol><li>白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</li><li>通用 I 型不能变更到白名单规格类型</li></ol>
 * @method void setMachineCode(string $MachineCode) 设置<p>实例配置变更后的产品规格类型。该参数为空值时，默认取实例当前的产品规格类型。<br>当前支持的产品规格类型如下：<br>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：</p><ol><li>白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</li><li>通用 I 型不能变更到白名单规格类型</li></ol>
 */
class ModifyDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>实例配置变更后的内存大小。单位：GB。该参数为空值时，默认取实例当前的内存大小。当前所支持的内存规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。<br><strong>注意</strong>：内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例配置变更后的硬盘大小，单位：GB。该参数为空值时，默认取当前实例的磁盘大小。当前所支持的磁盘容量，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p><ul><li>内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</li><li>降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。</li></ul>
     */
    public $Volume;

    /**
     * @var integer <p>(已废弃) 请使用ResizeOplog独立接口完成。</p><p>实例配置变更后 Oplog 的大小。</p><ul><li>单位：GB。</li><li>默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。</li></ul>
     * @deprecated
     */
    public $OplogSize;

    /**
     * @var integer <p>实例变更后 mongod 的节点数（不包含 readonly 只读节点数）。</p><ul><li>副本集节点数：请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo </a>接口返回的参数 MinNodeNum 与 MaxNodeNum 获取节点数量取值范围。</li><li>分片集群每个分片节点数：请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo </a>接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取节点数量取值范围。<br><strong>说明</strong>：变更 mongod 或 mongos 的 CPU 与内存规格时，该参数可以不配置或者输入当前 mongod 或 mongos（不包含readonly）节点数量。</li></ul>
     */
    public $NodeNum;

    /**
     * @var integer <p>实例变更后的分片数。</p><ul><li>请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 接口返回的参数<strong>MinReplicateSetNum</strong>与<strong>MaxReplicateSetNum</strong>获取实例分片数取值范围。</li><li>实例分片数量只允许增加不允许减少。</li></ul>
     */
    public $ReplicateSetNum;

    /**
     * @var integer <p>实例配置变更的切换时间。</p><ul><li>0：调整完成时，立即执行变配任务。默认为0。</li><li>1：在维护时间窗内，执行变配任务。<br><strong>说明</strong>：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。</li></ul>
     */
    public $InMaintenance;

    /**
     * @var string <p>分片实例配置变更后的 mongos 内存大小。单位：GB。实例支持的规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p>
     */
    public $MongosMemory;

    /**
     * @var array <p>新增节点列表，节点类型及可用区信息。</p>
     */
    public $AddNodeList;

    /**
     * @var array <p>删除节点列表。<br><strong>注意</strong>：基于分片实例各片节点的一致性原则，删除分片实例节点时，只需指定0分片对应的节点即可，如：cmgo-9nl1czif_0-node-readonly0 将删除每个分片的第1个只读节点。</p>
     */
    public $RemoveNodeList;

    /**
     * @var integer <p>实例配置变更后的CPU大小。单位：C。该参数为空值时，默认取实例当前的 CPU 大小。当前所支持的CPU规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p>
     */
    public $Cpu;

    /**
     * @var string <p>实例配置变更后的产品规格类型。该参数为空值时，默认取实例当前的产品规格类型。<br>当前支持的产品规格类型如下：<br>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：</p><ol><li>白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</li><li>通用 I 型不能变更到白名单规格类型</li></ol>
     */
    public $MachineCode;

    /**
     * @param string $InstanceId <p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     * @param integer $Memory <p>实例配置变更后的内存大小。单位：GB。该参数为空值时，默认取实例当前的内存大小。当前所支持的内存规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。<br><strong>注意</strong>：内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</p>
     * @param integer $Volume <p>实例配置变更后的硬盘大小，单位：GB。该参数为空值时，默认取当前实例的磁盘大小。当前所支持的磁盘容量，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p><ul><li>内存和磁盘必须同时升配或同时降配，即 Memory 与 Volume 需同时配置变更。</li><li>降配时，变更后的磁盘容量必须大于已用磁盘容量的1.2倍。</li></ul>
     * @param integer $OplogSize <p>(已废弃) 请使用ResizeOplog独立接口完成。</p><p>实例配置变更后 Oplog 的大小。</p><ul><li>单位：GB。</li><li>默认 Oplog 占用容量为磁盘空间的10%。系统允许设置的 Oplog 容量范围为磁盘空间的[10%,90%]。</li></ul>
     * @param integer $NodeNum <p>实例变更后 mongod 的节点数（不包含 readonly 只读节点数）。</p><ul><li>副本集节点数：请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo </a>接口返回的参数 MinNodeNum 与 MaxNodeNum 获取节点数量取值范围。</li><li>分片集群每个分片节点数：请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo </a>接口返回的参数 MinReplicateSetNodeNum 与 MaxReplicateSetNodeNum 获取节点数量取值范围。<br><strong>说明</strong>：变更 mongod 或 mongos 的 CPU 与内存规格时，该参数可以不配置或者输入当前 mongod 或 mongos（不包含readonly）节点数量。</li></ul>
     * @param integer $ReplicateSetNum <p>实例变更后的分片数。</p><ul><li>请通过 <a href="https://cloud.tencent.com/document/product/240/38567">DescribeSpecInfo</a> 接口返回的参数<strong>MinReplicateSetNum</strong>与<strong>MaxReplicateSetNum</strong>获取实例分片数取值范围。</li><li>实例分片数量只允许增加不允许减少。</li></ul>
     * @param integer $InMaintenance <p>实例配置变更的切换时间。</p><ul><li>0：调整完成时，立即执行变配任务。默认为0。</li><li>1：在维护时间窗内，执行变配任务。<br><strong>说明</strong>：调整节点数和分片数不支持在<b>维护时间窗内</b>变更。</li></ul>
     * @param string $MongosMemory <p>分片实例配置变更后的 mongos 内存大小。单位：GB。实例支持的规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p>
     * @param array $AddNodeList <p>新增节点列表，节点类型及可用区信息。</p>
     * @param array $RemoveNodeList <p>删除节点列表。<br><strong>注意</strong>：基于分片实例各片节点的一致性原则，删除分片实例节点时，只需指定0分片对应的节点即可，如：cmgo-9nl1czif_0-node-readonly0 将删除每个分片的第1个只读节点。</p>
     * @param integer $Cpu <p>实例配置变更后的CPU大小。单位：C。该参数为空值时，默认取实例当前的 CPU 大小。当前所支持的CPU规格，请参见<a href="https://cloud.tencent.com/document/product/240/64125">产品规格</a>。</p>
     * @param string $MachineCode <p>实例配置变更后的产品规格类型。该参数为空值时，默认取实例当前的产品规格类型。<br>当前支持的产品规格类型如下：<br>产品推荐规格类型：</p><ul><li>GE.LD.T1：本地盘（通用I型）。</li><li>GE.CD.T1：云盘（通用I型）。</li></ul><p>产品白名单规格类型：</p><ul><li>HIO10G：本地盘（高IO万兆型）。</li><li>HCD：云盘（云盘版）。</li></ul><p>注意：</p><ol><li>白名单规格类型为白名单控制，如若需要，请 <a href="https://console.cloud.tencent.com/workorder/category">提交工单</a> 申请</li><li>通用 I 型不能变更到白名单规格类型</li></ol>
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }
    }
}

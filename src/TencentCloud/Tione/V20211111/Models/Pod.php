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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod信息展示
 *
 * @method string getName() 获取<p>pod名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>pod名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUid() 获取<p>pod的唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUid(string $Uid) 设置<p>pod的唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取<p>服务付费模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置<p>服务付费模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhase() 获取<p>pod的状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhase(string $Phase) 设置<p>pod的状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取<p>pod的IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置<p>pod的IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>pod的创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>pod的创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Container getContainers() 获取<p>容器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainers(Container $Containers) 设置<p>容器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContainerInfos() 获取<p>容器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerInfos(array $ContainerInfos) 设置<p>容器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CrossTenantENIInfo getCrossTenantENIInfo() 获取<p>容器调用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossTenantENIInfo(CrossTenantENIInfo $CrossTenantENIInfo) 设置<p>容器调用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>实例的状态信息</p>
 * @method void setStatus(string $Status) 设置<p>实例的状态信息</p>
 * @method string getStartScheduleTime() 获取<p>实例的开始调度时间</p>
 * @method void setStartScheduleTime(string $StartScheduleTime) 设置<p>实例的开始调度时间</p>
 * @method string getMessage() 获取<p>实例状态的补充信息</p>
 * @method void setMessage(string $Message) 设置<p>实例状态的补充信息</p>
 * @method string getNodeIP() 获取<p>当前实例所在的节点 IP</p>
 * @method void setNodeIP(string $NodeIP) 设置<p>当前实例所在的节点 IP</p>
 * @method string getNodeId() 获取<p>当前实例所在节点id</p>
 * @method void setNodeId(string $NodeId) 设置<p>当前实例所在节点id</p>
 * @method string getResourceGroupId() 获取<p>当时实例所属资源组 id</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>当时实例所属资源组 id</p>
 * @method string getResourceGroupName() 获取<p>资源组名称</p>
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>资源组名称</p>
 * @method ResourceInfo getResourceInfo() 获取<p>实例的资源占用信息</p>
 * @method void setResourceInfo(ResourceInfo $ResourceInfo) 设置<p>实例的资源占用信息</p>
 */
class Pod extends AbstractModel
{
    /**
     * @var string <p>pod名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>pod的唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uid;

    /**
     * @var string <p>服务付费模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var string <p>pod的状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phase;

    /**
     * @var string <p>pod的IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var string <p>pod的创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var Container <p>容器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Containers;

    /**
     * @var array <p>容器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerInfos;

    /**
     * @var CrossTenantENIInfo <p>容器调用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossTenantENIInfo;

    /**
     * @var string <p>实例的状态信息</p>
     */
    public $Status;

    /**
     * @var string <p>实例的开始调度时间</p>
     */
    public $StartScheduleTime;

    /**
     * @var string <p>实例状态的补充信息</p>
     */
    public $Message;

    /**
     * @var string <p>当前实例所在的节点 IP</p>
     */
    public $NodeIP;

    /**
     * @var string <p>当前实例所在节点id</p>
     */
    public $NodeId;

    /**
     * @var string <p>当时实例所属资源组 id</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>资源组名称</p>
     */
    public $ResourceGroupName;

    /**
     * @var ResourceInfo <p>实例的资源占用信息</p>
     */
    public $ResourceInfo;

    /**
     * @param string $Name <p>pod名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uid <p>pod的唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType <p>服务付费模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phase <p>pod的状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP <p>pod的IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>pod的创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Container $Containers <p>容器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ContainerInfos <p>容器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CrossTenantENIInfo $CrossTenantENIInfo <p>容器调用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>实例的状态信息</p>
     * @param string $StartScheduleTime <p>实例的开始调度时间</p>
     * @param string $Message <p>实例状态的补充信息</p>
     * @param string $NodeIP <p>当前实例所在的节点 IP</p>
     * @param string $NodeId <p>当前实例所在节点id</p>
     * @param string $ResourceGroupId <p>当时实例所属资源组 id</p>
     * @param string $ResourceGroupName <p>资源组名称</p>
     * @param ResourceInfo $ResourceInfo <p>实例的资源占用信息</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = new Container();
            $this->Containers->deserialize($param["Containers"]);
        }

        if (array_key_exists("ContainerInfos",$param) and $param["ContainerInfos"] !== null) {
            $this->ContainerInfos = [];
            foreach ($param["ContainerInfos"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->ContainerInfos, $obj);
            }
        }

        if (array_key_exists("CrossTenantENIInfo",$param) and $param["CrossTenantENIInfo"] !== null) {
            $this->CrossTenantENIInfo = new CrossTenantENIInfo();
            $this->CrossTenantENIInfo->deserialize($param["CrossTenantENIInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartScheduleTime",$param) and $param["StartScheduleTime"] !== null) {
            $this->StartScheduleTime = $param["StartScheduleTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("NodeIP",$param) and $param["NodeIP"] !== null) {
            $this->NodeIP = $param["NodeIP"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("ResourceInfo",$param) and $param["ResourceInfo"] !== null) {
            $this->ResourceInfo = new ResourceInfo();
            $this->ResourceInfo->deserialize($param["ResourceInfo"]);
        }
    }
}

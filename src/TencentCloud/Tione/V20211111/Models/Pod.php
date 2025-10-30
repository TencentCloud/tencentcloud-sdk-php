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
 * @method string getName() 获取pod名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置pod名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUid() 获取pod的唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUid(string $Uid) 设置pod的唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取服务付费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置服务付费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhase() 获取pod的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhase(string $Phase) 设置pod的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取pod的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置pod的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取pod的创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置pod的创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method Container getContainers() 获取容器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainers(Container $Containers) 设置容器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContainerInfos() 获取容器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerInfos(array $ContainerInfos) 设置容器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method CrossTenantENIInfo getCrossTenantENIInfo() 获取容器调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossTenantENIInfo(CrossTenantENIInfo $CrossTenantENIInfo) 设置容器调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取实例的状态信息
 * @method void setStatus(string $Status) 设置实例的状态信息
 * @method string getStartScheduleTime() 获取实例的开始调度时间
 * @method void setStartScheduleTime(string $StartScheduleTime) 设置实例的开始调度时间
 * @method string getMessage() 获取实例状态的补充信息
 * @method void setMessage(string $Message) 设置实例状态的补充信息
 * @method string getNodeIP() 获取当前实例所在的节点 IP
 * @method void setNodeIP(string $NodeIP) 设置当前实例所在的节点 IP
 * @method string getNodeId() 获取当前实例所在节点id
 * @method void setNodeId(string $NodeId) 设置当前实例所在节点id
 * @method string getResourceGroupId() 获取当时实例所属资源组 id
 * @method void setResourceGroupId(string $ResourceGroupId) 设置当时实例所属资源组 id
 * @method string getResourceGroupName() 获取资源组名称
 * @method void setResourceGroupName(string $ResourceGroupName) 设置资源组名称
 * @method ResourceInfo getResourceInfo() 获取实例的资源占用信息
 * @method void setResourceInfo(ResourceInfo $ResourceInfo) 设置实例的资源占用信息
 */
class Pod extends AbstractModel
{
    /**
     * @var string pod名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string pod的唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uid;

    /**
     * @var string 服务付费模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var string pod的状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phase;

    /**
     * @var string pod的IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var string pod的创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var Container 容器列表
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Containers;

    /**
     * @var array 容器列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerInfos;

    /**
     * @var CrossTenantENIInfo 容器调用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossTenantENIInfo;

    /**
     * @var string 实例的状态信息
     */
    public $Status;

    /**
     * @var string 实例的开始调度时间
     */
    public $StartScheduleTime;

    /**
     * @var string 实例状态的补充信息
     */
    public $Message;

    /**
     * @var string 当前实例所在的节点 IP
     */
    public $NodeIP;

    /**
     * @var string 当前实例所在节点id
     */
    public $NodeId;

    /**
     * @var string 当时实例所属资源组 id
     */
    public $ResourceGroupId;

    /**
     * @var string 资源组名称
     */
    public $ResourceGroupName;

    /**
     * @var ResourceInfo 实例的资源占用信息
     */
    public $ResourceInfo;

    /**
     * @param string $Name pod名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uid pod的唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 服务付费模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phase pod的状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP pod的IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime pod的创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param Container $Containers 容器列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ContainerInfos 容器列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param CrossTenantENIInfo $CrossTenantENIInfo 容器调用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 实例的状态信息
     * @param string $StartScheduleTime 实例的开始调度时间
     * @param string $Message 实例状态的补充信息
     * @param string $NodeIP 当前实例所在的节点 IP
     * @param string $NodeId 当前实例所在节点id
     * @param string $ResourceGroupId 当时实例所属资源组 id
     * @param string $ResourceGroupName 资源组名称
     * @param ResourceInfo $ResourceInfo 实例的资源占用信息
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

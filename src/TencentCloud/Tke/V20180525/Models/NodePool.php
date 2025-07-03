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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点池描述
 *
 * @method string getNodePoolId() 获取NodePoolId 资源池id
 * @method void setNodePoolId(string $NodePoolId) 设置NodePoolId 资源池id
 * @method string getName() 获取Name 资源池名称
 * @method void setName(string $Name) 设置Name 资源池名称
 * @method string getClusterInstanceId() 获取ClusterInstanceId 集群实例id
 * @method void setClusterInstanceId(string $ClusterInstanceId) 设置ClusterInstanceId 集群实例id
 * @method string getLifeState() 获取LifeState 状态，当前节点池生命周期状态包括：creating，normal，updating，deleting，deleted
 * @method void setLifeState(string $LifeState) 设置LifeState 状态，当前节点池生命周期状态包括：creating，normal，updating，deleting，deleted
 * @method string getLaunchConfigurationId() 获取LaunchConfigurationId 配置
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置LaunchConfigurationId 配置
 * @method string getAutoscalingGroupId() 获取AutoscalingGroupId 分组id
 * @method void setAutoscalingGroupId(string $AutoscalingGroupId) 设置AutoscalingGroupId 分组id
 * @method array getLabels() 获取Labels 标签
 * @method void setLabels(array $Labels) 设置Labels 标签
 * @method array getTaints() 获取Taints 污点标记
 * @method void setTaints(array $Taints) 设置Taints 污点标记
 * @method array getAnnotations() 获取节点 Annotation 列表
 * @method void setAnnotations(array $Annotations) 设置节点 Annotation 列表
 * @method NodeCountSummary getNodeCountSummary() 获取NodeCountSummary 节点列表
 * @method void setNodeCountSummary(NodeCountSummary $NodeCountSummary) 设置NodeCountSummary 节点列表
 * @method string getAutoscalingGroupStatus() 获取状态信息
 * @method void setAutoscalingGroupStatus(string $AutoscalingGroupStatus) 设置状态信息
 * @method integer getMaxNodesNum() 获取最大节点数量
 * @method void setMaxNodesNum(integer $MaxNodesNum) 设置最大节点数量
 * @method integer getMinNodesNum() 获取最小节点数量
 * @method void setMinNodesNum(integer $MinNodesNum) 设置最小节点数量
 * @method integer getDesiredNodesNum() 获取期望的节点数量
 * @method void setDesiredNodesNum(integer $DesiredNodesNum) 设置期望的节点数量
 * @method RuntimeConfig getRuntimeConfig() 获取运行时描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeConfig(RuntimeConfig $RuntimeConfig) 设置运行时描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodePoolOs() 获取节点池osName
 * @method void setNodePoolOs(string $NodePoolOs) 设置节点池osName
 * @method string getOsCustomizeType() 获取容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
 * @method string getImageId() 获取镜像id
 * @method void setImageId(string $ImageId) 设置镜像id
 * @method integer getDesiredPodNum() 获取集群属于节点podCIDR大小自定义模式时，节点池需要带上pod数量属性
 * @method void setDesiredPodNum(integer $DesiredPodNum) 设置集群属于节点podCIDR大小自定义模式时，节点池需要带上pod数量属性
 * @method string getUserScript() 获取用户自定义脚本
 * @method void setUserScript(string $UserScript) 设置用户自定义脚本
 * @method array getTags() 获取资源标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置资源标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeletionProtection() 获取删除保护开关
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置删除保护开关
 * @method InstanceExtraArgs getExtraArgs() 获取节点配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraArgs(InstanceExtraArgs $ExtraArgs) 设置节点配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method GPUArgs getGPUArgs() 获取GPU驱动相关参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPUArgs(GPUArgs $GPUArgs) 设置GPU驱动相关参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDockerGraphPath() 获取dockerd --graph 指定值, 默认为 /var/lib/docker
 * @method void setDockerGraphPath(string $DockerGraphPath) 设置dockerd --graph 指定值, 默认为 /var/lib/docker
 * @method array getDataDisks() 获取多盘数据盘挂载信息：新建节点时请确保购买CVM的参数传递了购买多个数据盘的信息，如CreateClusterInstances API的RunInstancesPara下的DataDisks也需要设置购买多个数据盘, 具体可以参考CreateClusterInstances接口的添加集群节点(多块数据盘)样例；添加已有节点时，请确保填写的分区信息在节点上真实存在
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDisks(array $DataDisks) 设置多盘数据盘挂载信息：新建节点时请确保购买CVM的参数传递了购买多个数据盘的信息，如CreateClusterInstances API的RunInstancesPara下的DataDisks也需要设置购买多个数据盘, 具体可以参考CreateClusterInstances接口的添加集群节点(多块数据盘)样例；添加已有节点时，请确保填写的分区信息在节点上真实存在
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnschedulable() 获取是否不可调度
 * @method void setUnschedulable(integer $Unschedulable) 设置是否不可调度
 * @method string getPreStartUserScript() 获取用户自定义脚本,在UserScript前执行
 * @method void setPreStartUserScript(string $PreStartUserScript) 设置用户自定义脚本,在UserScript前执行
 */
class NodePool extends AbstractModel
{
    /**
     * @var string NodePoolId 资源池id
     */
    public $NodePoolId;

    /**
     * @var string Name 资源池名称
     */
    public $Name;

    /**
     * @var string ClusterInstanceId 集群实例id
     */
    public $ClusterInstanceId;

    /**
     * @var string LifeState 状态，当前节点池生命周期状态包括：creating，normal，updating，deleting，deleted
     */
    public $LifeState;

    /**
     * @var string LaunchConfigurationId 配置
     */
    public $LaunchConfigurationId;

    /**
     * @var string AutoscalingGroupId 分组id
     */
    public $AutoscalingGroupId;

    /**
     * @var array Labels 标签
     */
    public $Labels;

    /**
     * @var array Taints 污点标记
     */
    public $Taints;

    /**
     * @var array 节点 Annotation 列表
     */
    public $Annotations;

    /**
     * @var NodeCountSummary NodeCountSummary 节点列表
     */
    public $NodeCountSummary;

    /**
     * @var string 状态信息
     */
    public $AutoscalingGroupStatus;

    /**
     * @var integer 最大节点数量
     */
    public $MaxNodesNum;

    /**
     * @var integer 最小节点数量
     */
    public $MinNodesNum;

    /**
     * @var integer 期望的节点数量
     */
    public $DesiredNodesNum;

    /**
     * @var RuntimeConfig 运行时描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeConfig;

    /**
     * @var string 节点池osName
     */
    public $NodePoolOs;

    /**
     * @var string 容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
     */
    public $OsCustomizeType;

    /**
     * @var string 镜像id
     */
    public $ImageId;

    /**
     * @var integer 集群属于节点podCIDR大小自定义模式时，节点池需要带上pod数量属性
     */
    public $DesiredPodNum;

    /**
     * @var string 用户自定义脚本
     */
    public $UserScript;

    /**
     * @var array 资源标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean 删除保护开关
     */
    public $DeletionProtection;

    /**
     * @var InstanceExtraArgs 节点配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraArgs;

    /**
     * @var GPUArgs GPU驱动相关参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPUArgs;

    /**
     * @var string dockerd --graph 指定值, 默认为 /var/lib/docker
     */
    public $DockerGraphPath;

    /**
     * @var array 多盘数据盘挂载信息：新建节点时请确保购买CVM的参数传递了购买多个数据盘的信息，如CreateClusterInstances API的RunInstancesPara下的DataDisks也需要设置购买多个数据盘, 具体可以参考CreateClusterInstances接口的添加集群节点(多块数据盘)样例；添加已有节点时，请确保填写的分区信息在节点上真实存在
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDisks;

    /**
     * @var integer 是否不可调度
     */
    public $Unschedulable;

    /**
     * @var string 用户自定义脚本,在UserScript前执行
     */
    public $PreStartUserScript;

    /**
     * @param string $NodePoolId NodePoolId 资源池id
     * @param string $Name Name 资源池名称
     * @param string $ClusterInstanceId ClusterInstanceId 集群实例id
     * @param string $LifeState LifeState 状态，当前节点池生命周期状态包括：creating，normal，updating，deleting，deleted
     * @param string $LaunchConfigurationId LaunchConfigurationId 配置
     * @param string $AutoscalingGroupId AutoscalingGroupId 分组id
     * @param array $Labels Labels 标签
     * @param array $Taints Taints 污点标记
     * @param array $Annotations 节点 Annotation 列表
     * @param NodeCountSummary $NodeCountSummary NodeCountSummary 节点列表
     * @param string $AutoscalingGroupStatus 状态信息
     * @param integer $MaxNodesNum 最大节点数量
     * @param integer $MinNodesNum 最小节点数量
     * @param integer $DesiredNodesNum 期望的节点数量
     * @param RuntimeConfig $RuntimeConfig 运行时描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodePoolOs 节点池osName
     * @param string $OsCustomizeType 容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
     * @param string $ImageId 镜像id
     * @param integer $DesiredPodNum 集群属于节点podCIDR大小自定义模式时，节点池需要带上pod数量属性
     * @param string $UserScript 用户自定义脚本
     * @param array $Tags 资源标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeletionProtection 删除保护开关
     * @param InstanceExtraArgs $ExtraArgs 节点配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param GPUArgs $GPUArgs GPU驱动相关参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DockerGraphPath dockerd --graph 指定值, 默认为 /var/lib/docker
     * @param array $DataDisks 多盘数据盘挂载信息：新建节点时请确保购买CVM的参数传递了购买多个数据盘的信息，如CreateClusterInstances API的RunInstancesPara下的DataDisks也需要设置购买多个数据盘, 具体可以参考CreateClusterInstances接口的添加集群节点(多块数据盘)样例；添加已有节点时，请确保填写的分区信息在节点上真实存在
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Unschedulable 是否不可调度
     * @param string $PreStartUserScript 用户自定义脚本,在UserScript前执行
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
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClusterInstanceId",$param) and $param["ClusterInstanceId"] !== null) {
            $this->ClusterInstanceId = $param["ClusterInstanceId"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("AutoscalingGroupId",$param) and $param["AutoscalingGroupId"] !== null) {
            $this->AutoscalingGroupId = $param["AutoscalingGroupId"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new AnnotationValue();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }

        if (array_key_exists("NodeCountSummary",$param) and $param["NodeCountSummary"] !== null) {
            $this->NodeCountSummary = new NodeCountSummary();
            $this->NodeCountSummary->deserialize($param["NodeCountSummary"]);
        }

        if (array_key_exists("AutoscalingGroupStatus",$param) and $param["AutoscalingGroupStatus"] !== null) {
            $this->AutoscalingGroupStatus = $param["AutoscalingGroupStatus"];
        }

        if (array_key_exists("MaxNodesNum",$param) and $param["MaxNodesNum"] !== null) {
            $this->MaxNodesNum = $param["MaxNodesNum"];
        }

        if (array_key_exists("MinNodesNum",$param) and $param["MinNodesNum"] !== null) {
            $this->MinNodesNum = $param["MinNodesNum"];
        }

        if (array_key_exists("DesiredNodesNum",$param) and $param["DesiredNodesNum"] !== null) {
            $this->DesiredNodesNum = $param["DesiredNodesNum"];
        }

        if (array_key_exists("RuntimeConfig",$param) and $param["RuntimeConfig"] !== null) {
            $this->RuntimeConfig = new RuntimeConfig();
            $this->RuntimeConfig->deserialize($param["RuntimeConfig"]);
        }

        if (array_key_exists("NodePoolOs",$param) and $param["NodePoolOs"] !== null) {
            $this->NodePoolOs = $param["NodePoolOs"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("DesiredPodNum",$param) and $param["DesiredPodNum"] !== null) {
            $this->DesiredPodNum = $param["DesiredPodNum"];
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new InstanceExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }

        if (array_key_exists("GPUArgs",$param) and $param["GPUArgs"] !== null) {
            $this->GPUArgs = new GPUArgs();
            $this->GPUArgs->deserialize($param["GPUArgs"]);
        }

        if (array_key_exists("DockerGraphPath",$param) and $param["DockerGraphPath"] !== null) {
            $this->DockerGraphPath = $param["DockerGraphPath"];
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("PreStartUserScript",$param) and $param["PreStartUserScript"] !== null) {
            $this->PreStartUserScript = $param["PreStartUserScript"];
        }
    }
}

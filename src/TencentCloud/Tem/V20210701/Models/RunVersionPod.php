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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用实例
 *
 * @method string getWebshell() 获取shell地址
 * @method void setWebshell(string $Webshell) 设置shell地址
 * @method string getPodId() 获取pod的id
 * @method void setPodId(string $PodId) 设置pod的id
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getPodIp() 获取实例的ip
 * @method void setPodIp(string $PodIp) 设置实例的ip
 * @method string getZone() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeployVersion() 获取部署版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployVersion(string $DeployVersion) 设置部署版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestartCount() 获取重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartCount(integer $RestartCount) 设置重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReady() 获取pod是否就绪
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReady(boolean $Ready) 设置pod是否就绪
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerState() 获取容器状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerState(string $ContainerState) 设置容器状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeInfo getNodeInfo() 获取实例所在节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeInfo(NodeInfo $NodeInfo) 设置实例所在节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUnhealthy() 获取是否健康
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnhealthy(boolean $Unhealthy) 设置是否健康
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnhealthyWarningMsg() 获取不健康时的提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnhealthyWarningMsg(string $UnhealthyWarningMsg) 设置不健康时的提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionId() 获取版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class RunVersionPod extends AbstractModel
{
    /**
     * @var string shell地址
     */
    public $Webshell;

    /**
     * @var string pod的id
     */
    public $PodId;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例的ip
     */
    public $PodIp;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 部署版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployVersion;

    /**
     * @var integer 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartCount;

    /**
     * @var boolean pod是否就绪
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ready;

    /**
     * @var string 容器状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerState;

    /**
     * @var NodeInfo 实例所在节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeInfo;

    /**
     * @var string 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var boolean 是否健康
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unhealthy;

    /**
     * @var string 不健康时的提示信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnhealthyWarningMsg;

    /**
     * @var string 版本ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @param string $Webshell shell地址
     * @param string $PodId pod的id
     * @param string $Status 状态
     * @param string $CreateTime 创建时间
     * @param string $PodIp 实例的ip
     * @param string $Zone 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeployVersion 部署版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestartCount 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Ready pod是否就绪
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerState 容器状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeInfo $NodeInfo 实例所在节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Unhealthy 是否健康
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnhealthyWarningMsg 不健康时的提示信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionId 版本ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Webshell",$param) and $param["Webshell"] !== null) {
            $this->Webshell = $param["Webshell"];
        }

        if (array_key_exists("PodId",$param) and $param["PodId"] !== null) {
            $this->PodId = $param["PodId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("Ready",$param) and $param["Ready"] !== null) {
            $this->Ready = $param["Ready"];
        }

        if (array_key_exists("ContainerState",$param) and $param["ContainerState"] !== null) {
            $this->ContainerState = $param["ContainerState"];
        }

        if (array_key_exists("NodeInfo",$param) and $param["NodeInfo"] !== null) {
            $this->NodeInfo = new NodeInfo();
            $this->NodeInfo->deserialize($param["NodeInfo"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Unhealthy",$param) and $param["Unhealthy"] !== null) {
            $this->Unhealthy = $param["Unhealthy"];
        }

        if (array_key_exists("UnhealthyWarningMsg",$param) and $param["UnhealthyWarningMsg"] !== null) {
            $this->UnhealthyWarningMsg = $param["UnhealthyWarningMsg"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }
    }
}

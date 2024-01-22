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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 普通节点池信息
 *
 * @method string getLaunchConfigurationId() 获取LaunchConfigurationId 配置
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置LaunchConfigurationId 配置
 * @method string getAutoscalingGroupId() 获取AutoscalingGroupId 分组id
 * @method void setAutoscalingGroupId(string $AutoscalingGroupId) 设置AutoscalingGroupId 分组id
 * @method NodeCountSummary getNodeCountSummary() 获取NodeCountSummary 节点列表
 * @method void setNodeCountSummary(NodeCountSummary $NodeCountSummary) 设置NodeCountSummary 节点列表
 * @method string getAutoscalingGroupStatus() 获取状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoscalingGroupStatus(string $AutoscalingGroupStatus) 设置状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxNodesNum() 获取最大节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxNodesNum(integer $MaxNodesNum) 设置最大节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinNodesNum() 获取最小节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinNodesNum(integer $MinNodesNum) 设置最小节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDesiredNodesNum() 获取期望的节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesiredNodesNum(integer $DesiredNodesNum) 设置期望的节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodePoolOs() 获取节点池osName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePoolOs(string $NodePoolOs) 设置节点池osName
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取节点配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置节点配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegularNodePoolInfo extends AbstractModel
{
    /**
     * @var string LaunchConfigurationId 配置
     */
    public $LaunchConfigurationId;

    /**
     * @var string AutoscalingGroupId 分组id
     */
    public $AutoscalingGroupId;

    /**
     * @var NodeCountSummary NodeCountSummary 节点列表
     */
    public $NodeCountSummary;

    /**
     * @var string 状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoscalingGroupStatus;

    /**
     * @var integer 最大节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxNodesNum;

    /**
     * @var integer 最小节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinNodesNum;

    /**
     * @var integer 期望的节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DesiredNodesNum;

    /**
     * @var string 节点池osName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePoolOs;

    /**
     * @var InstanceAdvancedSettings 节点配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceAdvancedSettings;

    /**
     * @param string $LaunchConfigurationId LaunchConfigurationId 配置
     * @param string $AutoscalingGroupId AutoscalingGroupId 分组id
     * @param NodeCountSummary $NodeCountSummary NodeCountSummary 节点列表
     * @param string $AutoscalingGroupStatus 状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxNodesNum 最大节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinNodesNum 最小节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DesiredNodesNum 期望的节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodePoolOs 节点池osName
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings 节点配置
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
        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("AutoscalingGroupId",$param) and $param["AutoscalingGroupId"] !== null) {
            $this->AutoscalingGroupId = $param["AutoscalingGroupId"];
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

        if (array_key_exists("NodePoolOs",$param) and $param["NodePoolOs"] !== null) {
            $this->NodePoolOs = $param["NodePoolOs"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }
    }
}

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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 普通节点信息
 *
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取节点配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置节点配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoscalingGroupId() 获取自动伸缩组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoscalingGroupId(string $AutoscalingGroupId) 设置自动伸缩组ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegularNodeInfo extends AbstractModel
{
    /**
     * @var InstanceAdvancedSettings 节点配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceAdvancedSettings;

    /**
     * @var string 自动伸缩组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoscalingGroupId;

    /**
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings 节点配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoscalingGroupId 自动伸缩组ID
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
        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("AutoscalingGroupId",$param) and $param["AutoscalingGroupId"] !== null) {
            $this->AutoscalingGroupId = $param["AutoscalingGroupId"];
        }
    }
}

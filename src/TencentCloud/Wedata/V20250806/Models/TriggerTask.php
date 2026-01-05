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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务对象
 *
 * @method TriggerTaskBaseAttribute getTriggerTaskBaseAttribute() 获取任务基本属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerTaskBaseAttribute(TriggerTaskBaseAttribute $TriggerTaskBaseAttribute) 设置任务基本属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method TriggerTaskConfiguration getTriggerTaskConfiguration() 获取任务配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerTaskConfiguration(TriggerTaskConfiguration $TriggerTaskConfiguration) 设置任务配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method TriggerTaskSchedulerConfiguration getTriggerTaskSchedulerConfiguration() 获取任务调度配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerTaskSchedulerConfiguration(TriggerTaskSchedulerConfiguration $TriggerTaskSchedulerConfiguration) 设置任务调度配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerTask extends AbstractModel
{
    /**
     * @var TriggerTaskBaseAttribute 任务基本属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerTaskBaseAttribute;

    /**
     * @var TriggerTaskConfiguration 任务配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerTaskConfiguration;

    /**
     * @var TriggerTaskSchedulerConfiguration 任务调度配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerTaskSchedulerConfiguration;

    /**
     * @param TriggerTaskBaseAttribute $TriggerTaskBaseAttribute 任务基本属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param TriggerTaskConfiguration $TriggerTaskConfiguration 任务配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param TriggerTaskSchedulerConfiguration $TriggerTaskSchedulerConfiguration 任务调度配置
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
        if (array_key_exists("TriggerTaskBaseAttribute",$param) and $param["TriggerTaskBaseAttribute"] !== null) {
            $this->TriggerTaskBaseAttribute = new TriggerTaskBaseAttribute();
            $this->TriggerTaskBaseAttribute->deserialize($param["TriggerTaskBaseAttribute"]);
        }

        if (array_key_exists("TriggerTaskConfiguration",$param) and $param["TriggerTaskConfiguration"] !== null) {
            $this->TriggerTaskConfiguration = new TriggerTaskConfiguration();
            $this->TriggerTaskConfiguration->deserialize($param["TriggerTaskConfiguration"]);
        }

        if (array_key_exists("TriggerTaskSchedulerConfiguration",$param) and $param["TriggerTaskSchedulerConfiguration"] !== null) {
            $this->TriggerTaskSchedulerConfiguration = new TriggerTaskSchedulerConfiguration();
            $this->TriggerTaskSchedulerConfiguration->deserialize($param["TriggerTaskSchedulerConfiguration"]);
        }
    }
}

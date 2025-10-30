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
 * @method TaskBaseAttribute getTaskBaseAttribute() 获取任务基本属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskBaseAttribute(TaskBaseAttribute $TaskBaseAttribute) 设置任务基本属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskConfiguration getTaskConfiguration() 获取任务配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskConfiguration(TaskConfiguration $TaskConfiguration) 设置任务配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskSchedulerConfiguration getTaskSchedulerConfiguration() 获取任务调度配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskSchedulerConfiguration(TaskSchedulerConfiguration $TaskSchedulerConfiguration) 设置任务调度配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class Task extends AbstractModel
{
    /**
     * @var TaskBaseAttribute 任务基本属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskBaseAttribute;

    /**
     * @var TaskConfiguration 任务配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskConfiguration;

    /**
     * @var TaskSchedulerConfiguration 任务调度配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskSchedulerConfiguration;

    /**
     * @param TaskBaseAttribute $TaskBaseAttribute 任务基本属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskConfiguration $TaskConfiguration 任务配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskSchedulerConfiguration $TaskSchedulerConfiguration 任务调度配置
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
        if (array_key_exists("TaskBaseAttribute",$param) and $param["TaskBaseAttribute"] !== null) {
            $this->TaskBaseAttribute = new TaskBaseAttribute();
            $this->TaskBaseAttribute->deserialize($param["TaskBaseAttribute"]);
        }

        if (array_key_exists("TaskConfiguration",$param) and $param["TaskConfiguration"] !== null) {
            $this->TaskConfiguration = new TaskConfiguration();
            $this->TaskConfiguration->deserialize($param["TaskConfiguration"]);
        }

        if (array_key_exists("TaskSchedulerConfiguration",$param) and $param["TaskSchedulerConfiguration"] !== null) {
            $this->TaskSchedulerConfiguration = new TaskSchedulerConfiguration();
            $this->TaskSchedulerConfiguration->deserialize($param["TaskSchedulerConfiguration"]);
        }
    }
}

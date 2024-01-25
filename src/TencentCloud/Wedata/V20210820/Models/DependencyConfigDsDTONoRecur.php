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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 依赖配置无循环递归属性
 *
 * @method TaskDsDTONoRecur getParentTask() 获取ParentTask任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentTask(TaskDsDTONoRecur $ParentTask) 设置ParentTask任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskDsDTONoRecur getSonTask() 获取SonTask任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSonTask(TaskDsDTONoRecur $SonTask) 设置SonTask任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMainCyclicConfig() 获取the dependency config
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainCyclicConfig(string $MainCyclicConfig) 设置the dependency config
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubordinateCyclicConfig() 获取SubordinateCyclicConfig配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubordinateCyclicConfig(string $SubordinateCyclicConfig) 设置SubordinateCyclicConfig配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method DependencyStrategy getDependencyStrategy() 获取DependencyStrategy策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyStrategy(DependencyStrategy $DependencyStrategy) 设置DependencyStrategy策略
注意：此字段可能返回 null，表示取不到有效值。
 */
class DependencyConfigDsDTONoRecur extends AbstractModel
{
    /**
     * @var TaskDsDTONoRecur ParentTask任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentTask;

    /**
     * @var TaskDsDTONoRecur SonTask任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SonTask;

    /**
     * @var string the dependency config
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainCyclicConfig;

    /**
     * @var string SubordinateCyclicConfig配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubordinateCyclicConfig;

    /**
     * @var DependencyStrategy DependencyStrategy策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyStrategy;

    /**
     * @param TaskDsDTONoRecur $ParentTask ParentTask任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskDsDTONoRecur $SonTask SonTask任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MainCyclicConfig the dependency config
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubordinateCyclicConfig SubordinateCyclicConfig配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param DependencyStrategy $DependencyStrategy DependencyStrategy策略
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
        if (array_key_exists("ParentTask",$param) and $param["ParentTask"] !== null) {
            $this->ParentTask = new TaskDsDTONoRecur();
            $this->ParentTask->deserialize($param["ParentTask"]);
        }

        if (array_key_exists("SonTask",$param) and $param["SonTask"] !== null) {
            $this->SonTask = new TaskDsDTONoRecur();
            $this->SonTask->deserialize($param["SonTask"]);
        }

        if (array_key_exists("MainCyclicConfig",$param) and $param["MainCyclicConfig"] !== null) {
            $this->MainCyclicConfig = $param["MainCyclicConfig"];
        }

        if (array_key_exists("SubordinateCyclicConfig",$param) and $param["SubordinateCyclicConfig"] !== null) {
            $this->SubordinateCyclicConfig = $param["SubordinateCyclicConfig"];
        }

        if (array_key_exists("DependencyStrategy",$param) and $param["DependencyStrategy"] !== null) {
            $this->DependencyStrategy = new DependencyStrategy();
            $this->DependencyStrategy->deserialize($param["DependencyStrategy"]);
        }
    }
}

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
 * 依赖配置
 *
 * @method string getDependConfType() 获取仅五种周期运行依赖配置： HOUR,DAY,WEEK,MONTH,YEAR,CRONTAB,MINUTE
 * @method void setDependConfType(string $DependConfType) 设置仅五种周期运行依赖配置： HOUR,DAY,WEEK,MONTH,YEAR,CRONTAB,MINUTE
 * @method string getSubordinateCyclicType() 获取依赖配置从属周期类型，CURRENT_HOUR，PREVIOUS_HOUR，CURRENT_DAY，PREVIOUS_DAY，PREVIOUS_WEEK，PREVIOUS_FRIDAY，PREVIOUS_WEEKEND，CURRENT_MONTH，PREVIOUS_MONTH，PREVIOUS_END_OF_MONTH
     * PREVIOUS_BEGIN_OF_MONTH，ALL_MONTH_OF_YEAR，ALL_DAY_OF_YEAR，CURRENT_YEAR，CURRENT，CURRENT_MINUTE，PREVIOUS_MINUTE_CYCLE，PREVIOUS_HOUR_CYCLE
 * @method void setSubordinateCyclicType(string $SubordinateCyclicType) 设置依赖配置从属周期类型，CURRENT_HOUR，PREVIOUS_HOUR，CURRENT_DAY，PREVIOUS_DAY，PREVIOUS_WEEK，PREVIOUS_FRIDAY，PREVIOUS_WEEKEND，CURRENT_MONTH，PREVIOUS_MONTH，PREVIOUS_END_OF_MONTH
     * PREVIOUS_BEGIN_OF_MONTH，ALL_MONTH_OF_YEAR，ALL_DAY_OF_YEAR，CURRENT_YEAR，CURRENT，CURRENT_MINUTE，PREVIOUS_MINUTE_CYCLE，PREVIOUS_HOUR_CYCLE
 * @method string getDependencyStrategy() 获取WAITING，等待（默认策略）EXECUTING:执行
 * @method void setDependencyStrategy(string $DependencyStrategy) 设置WAITING，等待（默认策略）EXECUTING:执行
 * @method TaskInnerInfo getParentTask() 获取父任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentTask(TaskInnerInfo $ParentTask) 设置父任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskInnerInfo getSonTask() 获取子任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSonTask(TaskInnerInfo $SonTask) 设置子任务信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DependencyConfig extends AbstractModel
{
    /**
     * @var string 仅五种周期运行依赖配置： HOUR,DAY,WEEK,MONTH,YEAR,CRONTAB,MINUTE
     */
    public $DependConfType;

    /**
     * @var string 依赖配置从属周期类型，CURRENT_HOUR，PREVIOUS_HOUR，CURRENT_DAY，PREVIOUS_DAY，PREVIOUS_WEEK，PREVIOUS_FRIDAY，PREVIOUS_WEEKEND，CURRENT_MONTH，PREVIOUS_MONTH，PREVIOUS_END_OF_MONTH
     * PREVIOUS_BEGIN_OF_MONTH，ALL_MONTH_OF_YEAR，ALL_DAY_OF_YEAR，CURRENT_YEAR，CURRENT，CURRENT_MINUTE，PREVIOUS_MINUTE_CYCLE，PREVIOUS_HOUR_CYCLE
     */
    public $SubordinateCyclicType;

    /**
     * @var string WAITING，等待（默认策略）EXECUTING:执行
     */
    public $DependencyStrategy;

    /**
     * @var TaskInnerInfo 父任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentTask;

    /**
     * @var TaskInnerInfo 子任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SonTask;

    /**
     * @param string $DependConfType 仅五种周期运行依赖配置： HOUR,DAY,WEEK,MONTH,YEAR,CRONTAB,MINUTE
     * @param string $SubordinateCyclicType 依赖配置从属周期类型，CURRENT_HOUR，PREVIOUS_HOUR，CURRENT_DAY，PREVIOUS_DAY，PREVIOUS_WEEK，PREVIOUS_FRIDAY，PREVIOUS_WEEKEND，CURRENT_MONTH，PREVIOUS_MONTH，PREVIOUS_END_OF_MONTH
     * PREVIOUS_BEGIN_OF_MONTH，ALL_MONTH_OF_YEAR，ALL_DAY_OF_YEAR，CURRENT_YEAR，CURRENT，CURRENT_MINUTE，PREVIOUS_MINUTE_CYCLE，PREVIOUS_HOUR_CYCLE
     * @param string $DependencyStrategy WAITING，等待（默认策略）EXECUTING:执行
     * @param TaskInnerInfo $ParentTask 父任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskInnerInfo $SonTask 子任务信息
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
        if (array_key_exists("DependConfType",$param) and $param["DependConfType"] !== null) {
            $this->DependConfType = $param["DependConfType"];
        }

        if (array_key_exists("SubordinateCyclicType",$param) and $param["SubordinateCyclicType"] !== null) {
            $this->SubordinateCyclicType = $param["SubordinateCyclicType"];
        }

        if (array_key_exists("DependencyStrategy",$param) and $param["DependencyStrategy"] !== null) {
            $this->DependencyStrategy = $param["DependencyStrategy"];
        }

        if (array_key_exists("ParentTask",$param) and $param["ParentTask"] !== null) {
            $this->ParentTask = new TaskInnerInfo();
            $this->ParentTask->deserialize($param["ParentTask"]);
        }

        if (array_key_exists("SonTask",$param) and $param["SonTask"] !== null) {
            $this->SonTask = new TaskInnerInfo();
            $this->SonTask->deserialize($param["SonTask"]);
        }
    }
}

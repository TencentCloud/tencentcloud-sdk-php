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
 * 父任务配置
 *
 * @method string getParentId() 获取父任务ID
 * @method void setParentId(string $ParentId) 设置父任务ID
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getCycleType() 获取周期类型
 * @method void setCycleType(string $CycleType) 设置周期类型
 * @method integer getCycleStep() 获取周期步长
 * @method void setCycleStep(integer $CycleStep) 设置周期步长
 * @method string getNormalizedJobStartTime() 获取该值不填
 * @method void setNormalizedJobStartTime(string $NormalizedJobStartTime) 设置该值不填
 * @method string getTaskAction() 获取任务Action
 * @method void setTaskAction(string $TaskAction) 设置任务Action
 * @method string getSubordinateCyclicConfig() 获取依赖值
 * @method void setSubordinateCyclicConfig(string $SubordinateCyclicConfig) 设置依赖值
 * @method string getPollingNullStrategy() 获取空值策略
 * @method void setPollingNullStrategy(string $PollingNullStrategy) 设置空值策略
 * @method string getDependConfType() 获取依赖配置类型
 * @method void setDependConfType(string $DependConfType) 设置依赖配置类型
 * @method string getOffset() 获取偏移量
 * @method void setOffset(string $Offset) 设置偏移量
 * @method string getMainCyclicConfig() 获取主循环配置
 * @method void setMainCyclicConfig(string $MainCyclicConfig) 设置主循环配置
 * @method integer getDelayTime() 获取延迟时间
 * @method void setDelayTime(integer $DelayTime) 设置延迟时间
 * @method string getExecutionStartTime() 获取周期类型为小时的时候需要设置当天的开始时间
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置周期类型为小时的时候需要设置当天的开始时间
 * @method string getExecutionEndTime() 获取周期类型为小时的时候需要设置当天的结束时间
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置周期类型为小时的时候需要设置当天的结束时间
 */
class TaskParentSchedulerDependency extends AbstractModel
{
    /**
     * @var string 父任务ID
     */
    public $ParentId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 周期类型
     */
    public $CycleType;

    /**
     * @var integer 周期步长
     */
    public $CycleStep;

    /**
     * @var string 该值不填
     */
    public $NormalizedJobStartTime;

    /**
     * @var string 任务Action
     */
    public $TaskAction;

    /**
     * @var string 依赖值
     */
    public $SubordinateCyclicConfig;

    /**
     * @var string 空值策略
     */
    public $PollingNullStrategy;

    /**
     * @var string 依赖配置类型
     */
    public $DependConfType;

    /**
     * @var string 偏移量
     */
    public $Offset;

    /**
     * @var string 主循环配置
     */
    public $MainCyclicConfig;

    /**
     * @var integer 延迟时间
     */
    public $DelayTime;

    /**
     * @var string 周期类型为小时的时候需要设置当天的开始时间
     */
    public $ExecutionStartTime;

    /**
     * @var string 周期类型为小时的时候需要设置当天的结束时间
     */
    public $ExecutionEndTime;

    /**
     * @param string $ParentId 父任务ID
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $CycleType 周期类型
     * @param integer $CycleStep 周期步长
     * @param string $NormalizedJobStartTime 该值不填
     * @param string $TaskAction 任务Action
     * @param string $SubordinateCyclicConfig 依赖值
     * @param string $PollingNullStrategy 空值策略
     * @param string $DependConfType 依赖配置类型
     * @param string $Offset 偏移量
     * @param string $MainCyclicConfig 主循环配置
     * @param integer $DelayTime 延迟时间
     * @param string $ExecutionStartTime 周期类型为小时的时候需要设置当天的开始时间
     * @param string $ExecutionEndTime 周期类型为小时的时候需要设置当天的结束时间
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
        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("NormalizedJobStartTime",$param) and $param["NormalizedJobStartTime"] !== null) {
            $this->NormalizedJobStartTime = $param["NormalizedJobStartTime"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("SubordinateCyclicConfig",$param) and $param["SubordinateCyclicConfig"] !== null) {
            $this->SubordinateCyclicConfig = $param["SubordinateCyclicConfig"];
        }

        if (array_key_exists("PollingNullStrategy",$param) and $param["PollingNullStrategy"] !== null) {
            $this->PollingNullStrategy = $param["PollingNullStrategy"];
        }

        if (array_key_exists("DependConfType",$param) and $param["DependConfType"] !== null) {
            $this->DependConfType = $param["DependConfType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("MainCyclicConfig",$param) and $param["MainCyclicConfig"] !== null) {
            $this->MainCyclicConfig = $param["MainCyclicConfig"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }
    }
}

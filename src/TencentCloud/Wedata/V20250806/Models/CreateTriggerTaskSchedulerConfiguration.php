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
 * 创建任务调度配置信息
 *
 * @method array getUpstreamDependencyConfigList() 获取上游依赖的任务数组
 * @method void setUpstreamDependencyConfigList(array $UpstreamDependencyConfigList) 设置上游依赖的任务数组
 * @method integer getRunPriorityType() 获取任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
 * @method void setRunPriorityType(integer $RunPriorityType) 设置任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
 * @method integer getRetryWaitMinute() 获取重试策略 重试等待时间,单位分钟: 默认: 5
 * @method void setRetryWaitMinute(integer $RetryWaitMinute) 设置重试策略 重试等待时间,单位分钟: 默认: 5
 * @method integer getMaxRetryNumber() 获取重试策略 最大尝试次数, 默认: 4
 * @method void setMaxRetryNumber(integer $MaxRetryNumber) 设置重试策略 最大尝试次数, 默认: 4
 * @method integer getExecutionTTLMinute() 获取超时处理策略 运行耗时超时（单位：分钟）默认为 -1
 * @method void setExecutionTTLMinute(integer $ExecutionTTLMinute) 设置超时处理策略 运行耗时超时（单位：分钟）默认为 -1
 * @method integer getWaitExecutionTotalTTLMinute() 获取超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
 * @method void setWaitExecutionTotalTTLMinute(integer $WaitExecutionTotalTTLMinute) 设置超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
 * @method string getAllowRedoType() 获取重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
 * @method void setAllowRedoType(string $AllowRedoType) 设置重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
 * @method array getParamTaskOutList() 获取输出参数数组
 * @method void setParamTaskOutList(array $ParamTaskOutList) 设置输出参数数组
 * @method array getParamTaskInList() 获取输入参数数组
 * @method void setParamTaskInList(array $ParamTaskInList) 设置输入参数数组
 * @method array getTaskOutputRegistryList() 获取产出登记
 * @method void setTaskOutputRegistryList(array $TaskOutputRegistryList) 设置产出登记
 */
class CreateTriggerTaskSchedulerConfiguration extends AbstractModel
{
    /**
     * @var array 上游依赖的任务数组
     */
    public $UpstreamDependencyConfigList;

    /**
     * @var integer 任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
     */
    public $RunPriorityType;

    /**
     * @var integer 重试策略 重试等待时间,单位分钟: 默认: 5
     */
    public $RetryWaitMinute;

    /**
     * @var integer 重试策略 最大尝试次数, 默认: 4
     */
    public $MaxRetryNumber;

    /**
     * @var integer 超时处理策略 运行耗时超时（单位：分钟）默认为 -1
     */
    public $ExecutionTTLMinute;

    /**
     * @var integer 超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
     */
    public $WaitExecutionTotalTTLMinute;

    /**
     * @var string 重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
     */
    public $AllowRedoType;

    /**
     * @var array 输出参数数组
     */
    public $ParamTaskOutList;

    /**
     * @var array 输入参数数组
     */
    public $ParamTaskInList;

    /**
     * @var array 产出登记
     */
    public $TaskOutputRegistryList;

    /**
     * @param array $UpstreamDependencyConfigList 上游依赖的任务数组
     * @param integer $RunPriorityType 任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
     * @param integer $RetryWaitMinute 重试策略 重试等待时间,单位分钟: 默认: 5
     * @param integer $MaxRetryNumber 重试策略 最大尝试次数, 默认: 4
     * @param integer $ExecutionTTLMinute 超时处理策略 运行耗时超时（单位：分钟）默认为 -1
     * @param integer $WaitExecutionTotalTTLMinute 超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
     * @param string $AllowRedoType 重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
     * @param array $ParamTaskOutList 输出参数数组
     * @param array $ParamTaskInList 输入参数数组
     * @param array $TaskOutputRegistryList 产出登记
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
        if (array_key_exists("UpstreamDependencyConfigList",$param) and $param["UpstreamDependencyConfigList"] !== null) {
            $this->UpstreamDependencyConfigList = [];
            foreach ($param["UpstreamDependencyConfigList"] as $key => $value){
                $obj = new DependencyTriggerTaskBrief();
                $obj->deserialize($value);
                array_push($this->UpstreamDependencyConfigList, $obj);
            }
        }

        if (array_key_exists("RunPriorityType",$param) and $param["RunPriorityType"] !== null) {
            $this->RunPriorityType = $param["RunPriorityType"];
        }

        if (array_key_exists("RetryWaitMinute",$param) and $param["RetryWaitMinute"] !== null) {
            $this->RetryWaitMinute = $param["RetryWaitMinute"];
        }

        if (array_key_exists("MaxRetryNumber",$param) and $param["MaxRetryNumber"] !== null) {
            $this->MaxRetryNumber = $param["MaxRetryNumber"];
        }

        if (array_key_exists("ExecutionTTLMinute",$param) and $param["ExecutionTTLMinute"] !== null) {
            $this->ExecutionTTLMinute = $param["ExecutionTTLMinute"];
        }

        if (array_key_exists("WaitExecutionTotalTTLMinute",$param) and $param["WaitExecutionTotalTTLMinute"] !== null) {
            $this->WaitExecutionTotalTTLMinute = $param["WaitExecutionTotalTTLMinute"];
        }

        if (array_key_exists("AllowRedoType",$param) and $param["AllowRedoType"] !== null) {
            $this->AllowRedoType = $param["AllowRedoType"];
        }

        if (array_key_exists("ParamTaskOutList",$param) and $param["ParamTaskOutList"] !== null) {
            $this->ParamTaskOutList = [];
            foreach ($param["ParamTaskOutList"] as $key => $value){
                $obj = new OutTaskParameter();
                $obj->deserialize($value);
                array_push($this->ParamTaskOutList, $obj);
            }
        }

        if (array_key_exists("ParamTaskInList",$param) and $param["ParamTaskInList"] !== null) {
            $this->ParamTaskInList = [];
            foreach ($param["ParamTaskInList"] as $key => $value){
                $obj = new InTaskParameter();
                $obj->deserialize($value);
                array_push($this->ParamTaskInList, $obj);
            }
        }

        if (array_key_exists("TaskOutputRegistryList",$param) and $param["TaskOutputRegistryList"] !== null) {
            $this->TaskOutputRegistryList = [];
            foreach ($param["TaskOutputRegistryList"] as $key => $value){
                $obj = new TaskDataRegistry();
                $obj->deserialize($value);
                array_push($this->TaskOutputRegistryList, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一致性校验对象信息
 *
 * @method string getJobId() 获取任务id
 * @method void setJobId(string $JobId) 设置任务id
 * @method string getCompareTaskId() 获取对比任务 Id
 * @method void setCompareTaskId(string $CompareTaskId) 设置对比任务 Id
 * @method string getTaskName() 获取对比任务名称
 * @method void setTaskName(string $TaskName) 设置对比任务名称
 * @method string getStatus() 获取对比任务状态, 可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止
 * @method void setStatus(string $Status) 设置对比任务状态, 可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止
 * @method CompareObject getConfig() 获取对比任务配置
 * @method void setConfig(CompareObject $Config) 设置对比任务配置
 * @method ProcessProgress getCheckProcess() 获取对比任务校验详情
 * @method void setCheckProcess(ProcessProgress $CheckProcess) 设置对比任务校验详情
 * @method ProcessProgress getCompareProcess() 获取对比任务运行详情
 * @method void setCompareProcess(ProcessProgress $CompareProcess) 设置对比任务运行详情
 * @method string getConclusion() 获取对比结果, 可能的值：same - 一致；different - 不一致；skipAll - 跳过
 * @method void setConclusion(string $Conclusion) 设置对比结果, 可能的值：same - 一致；different - 不一致；skipAll - 跳过
 * @method string getCreatedAt() 获取任务创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置任务创建时间
 * @method string getStartedAt() 获取任务启动时间
 * @method void setStartedAt(string $StartedAt) 设置任务启动时间
 * @method string getFinishedAt() 获取对比结束时间
 * @method void setFinishedAt(string $FinishedAt) 设置对比结束时间
 * @method string getMethod() 获取对比类型，dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比)
 * @method void setMethod(string $Method) 设置对比类型，dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比)
 * @method CompareOptions getOptions() 获取对比配置信息
 * @method void setOptions(CompareOptions $Options) 设置对比配置信息
 * @method string getMessage() 获取一致性校验提示信息
 * @method void setMessage(string $Message) 设置一致性校验提示信息
 */
class CompareTaskItem extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $JobId;

    /**
     * @var string 对比任务 Id
     */
    public $CompareTaskId;

    /**
     * @var string 对比任务名称
     */
    public $TaskName;

    /**
     * @var string 对比任务状态, 可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止
     */
    public $Status;

    /**
     * @var CompareObject 对比任务配置
     */
    public $Config;

    /**
     * @var ProcessProgress 对比任务校验详情
     */
    public $CheckProcess;

    /**
     * @var ProcessProgress 对比任务运行详情
     */
    public $CompareProcess;

    /**
     * @var string 对比结果, 可能的值：same - 一致；different - 不一致；skipAll - 跳过
     */
    public $Conclusion;

    /**
     * @var string 任务创建时间
     */
    public $CreatedAt;

    /**
     * @var string 任务启动时间
     */
    public $StartedAt;

    /**
     * @var string 对比结束时间
     */
    public $FinishedAt;

    /**
     * @var string 对比类型，dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比)
     */
    public $Method;

    /**
     * @var CompareOptions 对比配置信息
     */
    public $Options;

    /**
     * @var string 一致性校验提示信息
     */
    public $Message;

    /**
     * @param string $JobId 任务id
     * @param string $CompareTaskId 对比任务 Id
     * @param string $TaskName 对比任务名称
     * @param string $Status 对比任务状态, 可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止
     * @param CompareObject $Config 对比任务配置
     * @param ProcessProgress $CheckProcess 对比任务校验详情
     * @param ProcessProgress $CompareProcess 对比任务运行详情
     * @param string $Conclusion 对比结果, 可能的值：same - 一致；different - 不一致；skipAll - 跳过
     * @param string $CreatedAt 任务创建时间
     * @param string $StartedAt 任务启动时间
     * @param string $FinishedAt 对比结束时间
     * @param string $Method 对比类型，dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比)
     * @param CompareOptions $Options 对比配置信息
     * @param string $Message 一致性校验提示信息
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CompareObject();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("CheckProcess",$param) and $param["CheckProcess"] !== null) {
            $this->CheckProcess = new ProcessProgress();
            $this->CheckProcess->deserialize($param["CheckProcess"]);
        }

        if (array_key_exists("CompareProcess",$param) and $param["CompareProcess"] !== null) {
            $this->CompareProcess = new ProcessProgress();
            $this->CompareProcess->deserialize($param["CompareProcess"]);
        }

        if (array_key_exists("Conclusion",$param) and $param["Conclusion"] !== null) {
            $this->Conclusion = $param["Conclusion"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
            $this->FinishedAt = $param["FinishedAt"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new CompareOptions();
            $this->Options->deserialize($param["Options"]);
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}

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
 * @method string getJobId() 获取<p>任务id</p>
 * @method void setJobId(string $JobId) 设置<p>任务id</p>
 * @method string getCompareTaskId() 获取<p>对比任务 Id</p>
 * @method void setCompareTaskId(string $CompareTaskId) 设置<p>对比任务 Id</p>
 * @method string getTaskName() 获取<p>对比任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>对比任务名称</p>
 * @method string getStatus() 获取<p>对比任务状态, 可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止</p>
 * @method void setStatus(string $Status) 设置<p>对比任务状态, 可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止</p>
 * @method CompareObject getConfig() 获取<p>对比任务配置</p>
 * @method void setConfig(CompareObject $Config) 设置<p>对比任务配置</p>
 * @method ProcessProgress getCheckProcess() 获取<p>对比任务校验详情</p>
 * @method void setCheckProcess(ProcessProgress $CheckProcess) 设置<p>对比任务校验详情</p>
 * @method ProcessProgress getCompareProcess() 获取<p>对比任务运行详情</p>
 * @method void setCompareProcess(ProcessProgress $CompareProcess) 设置<p>对比任务运行详情</p>
 * @method string getConclusion() 获取<p>对比结果, 可能的值：same - 一致；different - 不一致；skipAll - 跳过</p>
 * @method void setConclusion(string $Conclusion) 设置<p>对比结果, 可能的值：same - 一致；different - 不一致；skipAll - 跳过</p>
 * @method string getCreatedAt() 获取<p>任务创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>任务创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getStartedAt() 获取<p>任务启动时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setStartedAt(string $StartedAt) 设置<p>任务启动时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getFinishedAt() 获取<p>对比结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setFinishedAt(string $FinishedAt) 设置<p>对比结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getMethod() 获取<p>对比类型，dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比)</p>
 * @method void setMethod(string $Method) 设置<p>对比类型，dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比)</p>
 * @method CompareOptions getOptions() 获取<p>对比配置信息</p>
 * @method void setOptions(CompareOptions $Options) 设置<p>对比配置信息</p>
 * @method string getMessage() 获取<p>一致性校验提示信息</p>
 * @method void setMessage(string $Message) 设置<p>一致性校验提示信息</p>
 */
class CompareTaskItem extends AbstractModel
{
    /**
     * @var string <p>任务id</p>
     */
    public $JobId;

    /**
     * @var string <p>对比任务 Id</p>
     */
    public $CompareTaskId;

    /**
     * @var string <p>对比任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>对比任务状态, 可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止</p>
     */
    public $Status;

    /**
     * @var CompareObject <p>对比任务配置</p>
     */
    public $Config;

    /**
     * @var ProcessProgress <p>对比任务校验详情</p>
     */
    public $CheckProcess;

    /**
     * @var ProcessProgress <p>对比任务运行详情</p>
     */
    public $CompareProcess;

    /**
     * @var string <p>对比结果, 可能的值：same - 一致；different - 不一致；skipAll - 跳过</p>
     */
    public $Conclusion;

    /**
     * @var string <p>任务创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>任务启动时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $StartedAt;

    /**
     * @var string <p>对比结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $FinishedAt;

    /**
     * @var string <p>对比类型，dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比)</p>
     */
    public $Method;

    /**
     * @var CompareOptions <p>对比配置信息</p>
     */
    public $Options;

    /**
     * @var string <p>一致性校验提示信息</p>
     */
    public $Message;

    /**
     * @param string $JobId <p>任务id</p>
     * @param string $CompareTaskId <p>对比任务 Id</p>
     * @param string $TaskName <p>对比任务名称</p>
     * @param string $Status <p>对比任务状态, 可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止</p>
     * @param CompareObject $Config <p>对比任务配置</p>
     * @param ProcessProgress $CheckProcess <p>对比任务校验详情</p>
     * @param ProcessProgress $CompareProcess <p>对比任务运行详情</p>
     * @param string $Conclusion <p>对比结果, 可能的值：same - 一致；different - 不一致；skipAll - 跳过</p>
     * @param string $CreatedAt <p>任务创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $StartedAt <p>任务启动时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $FinishedAt <p>对比结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $Method <p>对比类型，dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比)</p>
     * @param CompareOptions $Options <p>对比配置信息</p>
     * @param string $Message <p>一致性校验提示信息</p>
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

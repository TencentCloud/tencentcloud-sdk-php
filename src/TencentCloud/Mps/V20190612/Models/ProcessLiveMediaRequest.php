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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getUrl() 获取直播流 URL。
 * @method void setUrl(string $Url) 设置直播流 URL。
 * @method TaskOutputStorage getOutputStorage() 获取直播流处理输出文件的目标存储。如处理有文件输出，该参数为必填项。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置直播流处理输出文件的目标存储。如处理有文件输出，该参数为必填项。
 * @method string getOutputDir() 获取直播流处理生成的文件输出的目标目录，如`/movie/201909/`，如果不填为 `/` 目录。
 * @method void setOutputDir(string $OutputDir) 设置直播流处理生成的文件输出的目标目录，如`/movie/201909/`，如果不填为 `/` 目录。
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取直播流内容识别类型任务参数。
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置直播流内容识别类型任务参数。
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取直播流内容分析类型任务参数。
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置直播流内容分析类型任务参数。
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取任务的事件通知信息，不填代表不获取事件通知。
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置任务的事件通知信息，不填代表不获取事件通知。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method string getSessionId() 获取用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method integer getStartTime() 获取直播开始时间戳（UTC 时间 单位为秒，该参数仅对于直播流分析有效）。
 * @method void setStartTime(integer $StartTime) 设置直播开始时间戳（UTC 时间 单位为秒，该参数仅对于直播流分析有效）。
 */

/**
 *ProcessLiveMedia请求参数结构体
 */
class ProcessLiveMediaRequest extends AbstractModel
{
    /**
     * @var string 直播流 URL。
     */
    public $Url;

    /**
     * @var TaskOutputStorage 直播流处理输出文件的目标存储。如处理有文件输出，该参数为必填项。
     */
    public $OutputStorage;

    /**
     * @var string 直播流处理生成的文件输出的目标目录，如`/movie/201909/`，如果不填为 `/` 目录。
     */
    public $OutputDir;

    /**
     * @var AiRecognitionTaskInput 直播流内容识别类型任务参数。
     */
    public $AiRecognitionTask;

    /**
     * @var AiAnalysisTaskInput 直播流内容分析类型任务参数。
     */
    public $AiAnalysisTask;

    /**
     * @var TaskNotifyConfig 任务的事件通知信息，不填代表不获取事件通知。
     */
    public $TaskNotifyConfig;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var string 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var integer 直播开始时间戳（UTC 时间 单位为秒，该参数仅对于直播流分析有效）。
     */
    public $StartTime;
    /**
     * @param string $Url 直播流 URL。
     * @param TaskOutputStorage $OutputStorage 直播流处理输出文件的目标存储。如处理有文件输出，该参数为必填项。
     * @param string $OutputDir 直播流处理生成的文件输出的目标目录，如`/movie/201909/`，如果不填为 `/` 目录。
     * @param AiRecognitionTaskInput $AiRecognitionTask 直播流内容识别类型任务参数。
     * @param AiAnalysisTaskInput $AiAnalysisTask 直播流内容分析类型任务参数。
     * @param TaskNotifyConfig $TaskNotifyConfig 任务的事件通知信息，不填代表不获取事件通知。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     * @param string $SessionId 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param integer $StartTime 直播开始时间戳（UTC 时间 单位为秒，该参数仅对于直播流分析有效）。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}

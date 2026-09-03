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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMediaEvaluation请求参数结构体
 *
 * @method MediaInputInfo getInputInfo() 获取<p>评测的原文件输入信息。目前输入对象的类型有 COS 和 URL。</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置<p>评测的原文件输入信息。目前输入对象的类型有 COS 和 URL。</p>
 * @method EvaluationTaskInput getEvaluationTask() 获取<p>评测任务参数。</p>
 * @method void setEvaluationTask(EvaluationTaskInput $EvaluationTask) 设置<p>评测任务参数。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>评测的输出文件的目标存储。不填则继承 InputInfo 中的存储位置。目前输出对象存储位置的类型有COS。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>评测的输出文件的目标存储。不填则继承 InputInfo 中的存储位置。目前输出对象存储位置的类型有COS。</p>
 * @method string getOutputDir() 获取<p>评测生成文件的输出目录，必选以 / 开头和结尾，如/movie/201907/。 如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
 * @method void setOutputDir(string $OutputDir) 设置<p>评测生成文件的输出目录，必选以 / 开头和结尾，如/movie/201907/。 如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取<p>任务的事件通知信息，不填代表不获取事件通知。</p>
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置<p>任务的事件通知信息，不填代表不获取事件通知。</p>
 * @method integer getTasksPriority() 获取<p>任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 */
class CreateMediaEvaluationRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo <p>评测的原文件输入信息。目前输入对象的类型有 COS 和 URL。</p>
     */
    public $InputInfo;

    /**
     * @var EvaluationTaskInput <p>评测任务参数。</p>
     */
    public $EvaluationTask;

    /**
     * @var TaskOutputStorage <p>评测的输出文件的目标存储。不填则继承 InputInfo 中的存储位置。目前输出对象存储位置的类型有COS。</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>评测生成文件的输出目录，必选以 / 开头和结尾，如/movie/201907/。 如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
     */
    public $OutputDir;

    /**
     * @var TaskNotifyConfig <p>任务的事件通知信息，不填代表不获取事件通知。</p>
     */
    public $TaskNotifyConfig;

    /**
     * @var integer <p>任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @param MediaInputInfo $InputInfo <p>评测的原文件输入信息。目前输入对象的类型有 COS 和 URL。</p>
     * @param EvaluationTaskInput $EvaluationTask <p>评测任务参数。</p>
     * @param TaskOutputStorage $OutputStorage <p>评测的输出文件的目标存储。不填则继承 InputInfo 中的存储位置。目前输出对象存储位置的类型有COS。</p>
     * @param string $OutputDir <p>评测生成文件的输出目录，必选以 / 开头和结尾，如/movie/201907/。 如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
     * @param TaskNotifyConfig $TaskNotifyConfig <p>任务的事件通知信息，不填代表不获取事件通知。</p>
     * @param integer $TasksPriority <p>任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("EvaluationTask",$param) and $param["EvaluationTask"] !== null) {
            $this->EvaluationTask = new EvaluationTaskInput();
            $this->EvaluationTask->deserialize($param["EvaluationTask"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}

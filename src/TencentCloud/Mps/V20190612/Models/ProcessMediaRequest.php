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
 * ProcessMedia请求参数结构体
 *
 * @method MediaInputInfo getInputInfo() 获取媒体处理的文件输入信息。
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置媒体处理的文件输入信息。
 * @method TaskOutputStorage getOutputStorage() 获取媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
注意：当InputInfo.Type为URL时，该参数是必填项
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
注意：当InputInfo.Type为URL时，该参数是必填项
 * @method string getOutputDir() 获取媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如`/movie/201907/`。
如果不填，表示与 InputInfo 中文件所在的目录一致。
 * @method void setOutputDir(string $OutputDir) 设置媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如`/movie/201907/`。
如果不填，表示与 InputInfo 中文件所在的目录一致。
 * @method integer getScheduleId() 获取编排ID。
注意1：对于OutputStorage、OutputDir参数：
<li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li>
<li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若创建任务接口（ProcessMedia）有指定输出，将覆盖原有编排的默认输出。</li>
<li>即输出设置的优先级：编排子任务节点 > 任务接口指定 > 对应编排内的配置 </li>
注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessMedia）有设置，将覆盖原有编排的默认回调。

注意3：编排的 Trigger 只是用来自动化触发场景，在手动发起的请求中已经配置的 Trigger 无意义。
 * @method void setScheduleId(integer $ScheduleId) 设置编排ID。
注意1：对于OutputStorage、OutputDir参数：
<li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li>
<li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若创建任务接口（ProcessMedia）有指定输出，将覆盖原有编排的默认输出。</li>
<li>即输出设置的优先级：编排子任务节点 > 任务接口指定 > 对应编排内的配置 </li>
注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessMedia）有设置，将覆盖原有编排的默认回调。

注意3：编排的 Trigger 只是用来自动化触发场景，在手动发起的请求中已经配置的 Trigger 无意义。
 * @method MediaProcessTaskInput getMediaProcessTask() 获取媒体处理类型任务参数。
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) 设置媒体处理类型任务参数。
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取视频内容审核类型任务参数。
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置视频内容审核类型任务参数。
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取视频内容分析类型任务参数。
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置视频内容分析类型任务参数。
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取视频内容识别类型任务参数。
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置视频内容识别类型任务参数。
 * @method AiQualityControlTaskInput getAiQualityControlTask() 获取媒体质检类型任务参数。
 * @method void setAiQualityControlTask(AiQualityControlTaskInput $AiQualityControlTask) 设置媒体质检类型任务参数。
 * @method SmartSubtitlesTaskInput getSmartSubtitlesTask() 获取智能字幕
 * @method void setSmartSubtitlesTask(SmartSubtitlesTaskInput $SmartSubtitlesTask) 设置智能字幕
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取任务的事件通知信息，不填代表不获取事件通知。
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置任务的事件通知信息，不填代表不获取事件通知。
 * @method integer getTasksPriority() 获取任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不传该参数或者参数为空字符串则本次请求不做去重操作。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不传该参数或者参数为空字符串则本次请求不做去重操作。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method string getTaskType() 获取任务类型，默认Online
<li> Online：实时任务</li>
<li> Offline：闲时任务，不保证实效性，默认3天内处理完</li>
 * @method void setTaskType(string $TaskType) 设置任务类型，默认Online
<li> Online：实时任务</li>
<li> Offline：闲时任务，不保证实效性，默认3天内处理完</li>
 * @method string getResourceId() 获取资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。
 * @method void setResourceId(string $ResourceId) 设置资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。
 * @method integer getSkipMateData() 获取是否跳过元信息获取，可选值： 
0：表示不跳过 
1：表示跳过 
默认值：0	
 * @method void setSkipMateData(integer $SkipMateData) 设置是否跳过元信息获取，可选值： 
0：表示不跳过 
1：表示跳过 
默认值：0	
 */
class ProcessMediaRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo 媒体处理的文件输入信息。
     */
    public $InputInfo;

    /**
     * @var TaskOutputStorage 媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
注意：当InputInfo.Type为URL时，该参数是必填项
     */
    public $OutputStorage;

    /**
     * @var string 媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如`/movie/201907/`。
如果不填，表示与 InputInfo 中文件所在的目录一致。
     */
    public $OutputDir;

    /**
     * @var integer 编排ID。
注意1：对于OutputStorage、OutputDir参数：
<li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li>
<li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若创建任务接口（ProcessMedia）有指定输出，将覆盖原有编排的默认输出。</li>
<li>即输出设置的优先级：编排子任务节点 > 任务接口指定 > 对应编排内的配置 </li>
注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessMedia）有设置，将覆盖原有编排的默认回调。

注意3：编排的 Trigger 只是用来自动化触发场景，在手动发起的请求中已经配置的 Trigger 无意义。
     */
    public $ScheduleId;

    /**
     * @var MediaProcessTaskInput 媒体处理类型任务参数。
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput 视频内容审核类型任务参数。
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput 视频内容分析类型任务参数。
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput 视频内容识别类型任务参数。
     */
    public $AiRecognitionTask;

    /**
     * @var AiQualityControlTaskInput 媒体质检类型任务参数。
     */
    public $AiQualityControlTask;

    /**
     * @var SmartSubtitlesTaskInput 智能字幕
     */
    public $SmartSubtitlesTask;

    /**
     * @var TaskNotifyConfig 任务的事件通知信息，不填代表不获取事件通知。
     */
    public $TaskNotifyConfig;

    /**
     * @var integer 任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
     */
    public $TasksPriority;

    /**
     * @var string 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不传该参数或者参数为空字符串则本次请求不做去重操作。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var string 任务类型，默认Online
<li> Online：实时任务</li>
<li> Offline：闲时任务，不保证实效性，默认3天内处理完</li>
     */
    public $TaskType;

    /**
     * @var string 资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。
     */
    public $ResourceId;

    /**
     * @var integer 是否跳过元信息获取，可选值： 
0：表示不跳过 
1：表示跳过 
默认值：0	
     */
    public $SkipMateData;

    /**
     * @param MediaInputInfo $InputInfo 媒体处理的文件输入信息。
     * @param TaskOutputStorage $OutputStorage 媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。
注意：当InputInfo.Type为URL时，该参数是必填项
     * @param string $OutputDir 媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如`/movie/201907/`。
如果不填，表示与 InputInfo 中文件所在的目录一致。
     * @param integer $ScheduleId 编排ID。
注意1：对于OutputStorage、OutputDir参数：
<li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li>
<li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若创建任务接口（ProcessMedia）有指定输出，将覆盖原有编排的默认输出。</li>
<li>即输出设置的优先级：编排子任务节点 > 任务接口指定 > 对应编排内的配置 </li>
注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessMedia）有设置，将覆盖原有编排的默认回调。

注意3：编排的 Trigger 只是用来自动化触发场景，在手动发起的请求中已经配置的 Trigger 无意义。
     * @param MediaProcessTaskInput $MediaProcessTask 媒体处理类型任务参数。
     * @param AiContentReviewTaskInput $AiContentReviewTask 视频内容审核类型任务参数。
     * @param AiAnalysisTaskInput $AiAnalysisTask 视频内容分析类型任务参数。
     * @param AiRecognitionTaskInput $AiRecognitionTask 视频内容识别类型任务参数。
     * @param AiQualityControlTaskInput $AiQualityControlTask 媒体质检类型任务参数。
     * @param SmartSubtitlesTaskInput $SmartSubtitlesTask 智能字幕
     * @param TaskNotifyConfig $TaskNotifyConfig 任务的事件通知信息，不填代表不获取事件通知。
     * @param integer $TasksPriority 任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
     * @param string $SessionId 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不传该参数或者参数为空字符串则本次请求不做去重操作。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     * @param string $TaskType 任务类型，默认Online
<li> Online：实时任务</li>
<li> Offline：闲时任务，不保证实效性，默认3天内处理完</li>
     * @param string $ResourceId 资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。
     * @param integer $SkipMateData 是否跳过元信息获取，可选值： 
0：表示不跳过 
1：表示跳过 
默认值：0	
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

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("MediaProcessTask",$param) and $param["MediaProcessTask"] !== null) {
            $this->MediaProcessTask = new MediaProcessTaskInput();
            $this->MediaProcessTask->deserialize($param["MediaProcessTask"]);
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("AiQualityControlTask",$param) and $param["AiQualityControlTask"] !== null) {
            $this->AiQualityControlTask = new AiQualityControlTaskInput();
            $this->AiQualityControlTask->deserialize($param["AiQualityControlTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new SmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("SkipMateData",$param) and $param["SkipMateData"] !== null) {
            $this->SkipMateData = $param["SkipMateData"];
        }
    }
}

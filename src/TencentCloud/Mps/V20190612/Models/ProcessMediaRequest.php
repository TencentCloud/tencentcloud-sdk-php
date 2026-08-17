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
 * @method MediaInputInfo getInputInfo() 获取<p>媒体处理的文件输入信息。</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置<p>媒体处理的文件输入信息。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。<br>注意：当InputInfo.Type为URL时，该参数是必填项</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。<br>注意：当InputInfo.Type为URL时，该参数是必填项</p>
 * @method string getOutputDir() 获取<p>媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如<code>/movie/201907/</code>。<br>如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
 * @method void setOutputDir(string $OutputDir) 设置<p>媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如<code>/movie/201907/</code>。<br>如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
 * @method integer getScheduleId() 获取<p>编排ID。<br>注意1：对于OutputStorage、OutputDir参数：</p><li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li><li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若创建任务接口（ProcessMedia）有指定输出，将覆盖原有编排的默认输出。</li><li>即输出设置的优先级：编排子任务节点 &gt; 任务接口指定 &gt; 对应编排内的配置 </li>注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessMedia）有设置，将覆盖原有编排的默认回调。<p>注意3：编排的 Trigger 只是用来自动化触发场景，在手动发起的请求中已经配置的 Trigger 无意义。</p>
 * @method void setScheduleId(integer $ScheduleId) 设置<p>编排ID。<br>注意1：对于OutputStorage、OutputDir参数：</p><li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li><li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若创建任务接口（ProcessMedia）有指定输出，将覆盖原有编排的默认输出。</li><li>即输出设置的优先级：编排子任务节点 &gt; 任务接口指定 &gt; 对应编排内的配置 </li>注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessMedia）有设置，将覆盖原有编排的默认回调。<p>注意3：编排的 Trigger 只是用来自动化触发场景，在手动发起的请求中已经配置的 Trigger 无意义。</p>
 * @method MediaProcessTaskInput getMediaProcessTask() 获取<p>媒体处理类型任务参数。</p>
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) 设置<p>媒体处理类型任务参数。</p>
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取<p>视频内容审核类型任务参数。</p>
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置<p>视频内容审核类型任务参数。</p>
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取<p>视频内容分析类型任务参数。</p>
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置<p>视频内容分析类型任务参数。</p>
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取<p>视频内容识别类型任务参数。</p>
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置<p>视频内容识别类型任务参数。</p>
 * @method AiQualityControlTaskInput getAiQualityControlTask() 获取<p>媒体质检类型任务参数。</p>
 * @method void setAiQualityControlTask(AiQualityControlTaskInput $AiQualityControlTask) 设置<p>媒体质检类型任务参数。</p>
 * @method SmartSubtitlesTaskInput getSmartSubtitlesTask() 获取<p>智能字幕</p>
 * @method void setSmartSubtitlesTask(SmartSubtitlesTaskInput $SmartSubtitlesTask) 设置<p>智能字幕</p>
 * @method SmartEraseTaskInput getSmartEraseTask() 获取<p>智能擦除类型任务参数</p>
 * @method void setSmartEraseTask(SmartEraseTaskInput $SmartEraseTask) 设置<p>智能擦除类型任务参数</p>
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取<p>任务的事件通知信息，不填代表不获取事件通知。</p>
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置<p>任务的事件通知信息，不填代表不获取事件通知。</p>
 * @method integer getTasksPriority() 获取<p>任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不传该参数或者参数为空字符串则本次请求不做去重操作。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不传该参数或者参数为空字符串则本次请求不做去重操作。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method string getTaskType() 获取<p>任务类型，默认Online</p><li> Online：实时任务</li><li> Offline：闲时任务，不保证实效性，默认3天内处理完</li>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型，默认Online</p><li> Online：实时任务</li><li> Offline：闲时任务，不保证实效性，默认3天内处理完</li>
 * @method string getResourceId() 获取<p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
 * @method array getActivities() 获取<p>媒体编排任务组<br>注意：填写此参数ScheduleId字段将失效，Activities优先级大于ScheduleId</p>
 * @method void setActivities(array $Activities) 设置<p>媒体编排任务组<br>注意：填写此参数ScheduleId字段将失效，Activities优先级大于ScheduleId</p>
 * @method integer getSkipMateData() 获取<p>是否跳过元信息获取，可选值：<br>0：表示不跳过<br>1：表示跳过<br>默认值：0</p>
 * @method void setSkipMateData(integer $SkipMateData) 设置<p>是否跳过元信息获取，可选值：<br>0：表示不跳过<br>1：表示跳过<br>默认值：0</p>
 */
class ProcessMediaRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo <p>媒体处理的文件输入信息。</p>
     */
    public $InputInfo;

    /**
     * @var TaskOutputStorage <p>媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。<br>注意：当InputInfo.Type为URL时，该参数是必填项</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如<code>/movie/201907/</code>。<br>如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
     */
    public $OutputDir;

    /**
     * @var integer <p>编排ID。<br>注意1：对于OutputStorage、OutputDir参数：</p><li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li><li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若创建任务接口（ProcessMedia）有指定输出，将覆盖原有编排的默认输出。</li><li>即输出设置的优先级：编排子任务节点 &gt; 任务接口指定 &gt; 对应编排内的配置 </li>注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessMedia）有设置，将覆盖原有编排的默认回调。<p>注意3：编排的 Trigger 只是用来自动化触发场景，在手动发起的请求中已经配置的 Trigger 无意义。</p>
     */
    public $ScheduleId;

    /**
     * @var MediaProcessTaskInput <p>媒体处理类型任务参数。</p>
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput <p>视频内容审核类型任务参数。</p>
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput <p>视频内容分析类型任务参数。</p>
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput <p>视频内容识别类型任务参数。</p>
     */
    public $AiRecognitionTask;

    /**
     * @var AiQualityControlTaskInput <p>媒体质检类型任务参数。</p>
     */
    public $AiQualityControlTask;

    /**
     * @var SmartSubtitlesTaskInput <p>智能字幕</p>
     */
    public $SmartSubtitlesTask;

    /**
     * @var SmartEraseTaskInput <p>智能擦除类型任务参数</p>
     */
    public $SmartEraseTask;

    /**
     * @var TaskNotifyConfig <p>任务的事件通知信息，不填代表不获取事件通知。</p>
     */
    public $TaskNotifyConfig;

    /**
     * @var integer <p>任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不传该参数或者参数为空字符串则本次请求不做去重操作。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>任务类型，默认Online</p><li> Online：实时任务</li><li> Offline：闲时任务，不保证实效性，默认3天内处理完</li>
     */
    public $TaskType;

    /**
     * @var string <p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
     */
    public $ResourceId;

    /**
     * @var array <p>媒体编排任务组<br>注意：填写此参数ScheduleId字段将失效，Activities优先级大于ScheduleId</p>
     */
    public $Activities;

    /**
     * @var integer <p>是否跳过元信息获取，可选值：<br>0：表示不跳过<br>1：表示跳过<br>默认值：0</p>
     */
    public $SkipMateData;

    /**
     * @param MediaInputInfo $InputInfo <p>媒体处理的文件输入信息。</p>
     * @param TaskOutputStorage $OutputStorage <p>媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。<br>注意：当InputInfo.Type为URL时，该参数是必填项</p>
     * @param string $OutputDir <p>媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾，如<code>/movie/201907/</code>。<br>如果不填，表示与 InputInfo 中文件所在的目录一致。</p>
     * @param integer $ScheduleId <p>编排ID。<br>注意1：对于OutputStorage、OutputDir参数：</p><li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li><li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若创建任务接口（ProcessMedia）有指定输出，将覆盖原有编排的默认输出。</li><li>即输出设置的优先级：编排子任务节点 &gt; 任务接口指定 &gt; 对应编排内的配置 </li>注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessMedia）有设置，将覆盖原有编排的默认回调。<p>注意3：编排的 Trigger 只是用来自动化触发场景，在手动发起的请求中已经配置的 Trigger 无意义。</p>
     * @param MediaProcessTaskInput $MediaProcessTask <p>媒体处理类型任务参数。</p>
     * @param AiContentReviewTaskInput $AiContentReviewTask <p>视频内容审核类型任务参数。</p>
     * @param AiAnalysisTaskInput $AiAnalysisTask <p>视频内容分析类型任务参数。</p>
     * @param AiRecognitionTaskInput $AiRecognitionTask <p>视频内容识别类型任务参数。</p>
     * @param AiQualityControlTaskInput $AiQualityControlTask <p>媒体质检类型任务参数。</p>
     * @param SmartSubtitlesTaskInput $SmartSubtitlesTask <p>智能字幕</p>
     * @param SmartEraseTaskInput $SmartEraseTask <p>智能擦除类型任务参数</p>
     * @param TaskNotifyConfig $TaskNotifyConfig <p>任务的事件通知信息，不填代表不获取事件通知。</p>
     * @param integer $TasksPriority <p>任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不传该参数或者参数为空字符串则本次请求不做去重操作。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     * @param string $TaskType <p>任务类型，默认Online</p><li> Online：实时任务</li><li> Offline：闲时任务，不保证实效性，默认3天内处理完</li>
     * @param string $ResourceId <p>资源ID，需要保证对应资源是开启状态。默认为账号主资源ID。</p>
     * @param array $Activities <p>媒体编排任务组<br>注意：填写此参数ScheduleId字段将失效，Activities优先级大于ScheduleId</p>
     * @param integer $SkipMateData <p>是否跳过元信息获取，可选值：<br>0：表示不跳过<br>1：表示跳过<br>默认值：0</p>
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

        if (array_key_exists("SmartEraseTask",$param) and $param["SmartEraseTask"] !== null) {
            $this->SmartEraseTask = new SmartEraseTaskInput();
            $this->SmartEraseTask->deserialize($param["SmartEraseTask"]);
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

        if (array_key_exists("Activities",$param) and $param["Activities"] !== null) {
            $this->Activities = [];
            foreach ($param["Activities"] as $key => $value){
                $obj = new Activity();
                $obj->deserialize($value);
                array_push($this->Activities, $obj);
            }
        }

        if (array_key_exists("SkipMateData",$param) and $param["SkipMateData"] !== null) {
            $this->SkipMateData = $param["SkipMateData"];
        }
    }
}

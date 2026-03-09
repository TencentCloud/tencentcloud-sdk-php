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
 * ProcessLiveStream请求参数结构体
 *
 * @method string getUrl() 获取<p>直播流 URL（必须是直播流地址，支持 rtmp，hls 和 flv, trtc,webrtc,srt等）。<br>trtc地址如下：<br> trtc: //trtc.rtc.qq.com/mps/<code>&lt;roomid&gt;</code>?sdkappid=<code>&lt;sdkappid&gt;</code>&amp;userid=<code>&lt;userid&gt;</code>&amp;usersig=&lt;<code>usersig&gt;</code><br><code>&lt;roomid&gt;</code> 为trtc的房间号id, 为数字<br><code>&lt;sdkappid&gt;</code> 为trtc的sdk app id<br><code>&lt;userid&gt;</code> 为服务进入房间的用户id,可以区分谁是机器人<br>&lt;<code>usersig&gt;</code> 为trtc 用户的签名</p><p>webrtc 支持<a href="https://cloud.tencent.com/product/leb">LEB</a>的直播流，地址获取请<a href="https://cloud.tencent.com/document/product/267/32720">参考</a></p><p>srt支持地址请<a href="https://ffmpeg.org/ffmpeg-protocols.html#srt">参考</a></p>
 * @method void setUrl(string $Url) 设置<p>直播流 URL（必须是直播流地址，支持 rtmp，hls 和 flv, trtc,webrtc,srt等）。<br>trtc地址如下：<br> trtc: //trtc.rtc.qq.com/mps/<code>&lt;roomid&gt;</code>?sdkappid=<code>&lt;sdkappid&gt;</code>&amp;userid=<code>&lt;userid&gt;</code>&amp;usersig=&lt;<code>usersig&gt;</code><br><code>&lt;roomid&gt;</code> 为trtc的房间号id, 为数字<br><code>&lt;sdkappid&gt;</code> 为trtc的sdk app id<br><code>&lt;userid&gt;</code> 为服务进入房间的用户id,可以区分谁是机器人<br>&lt;<code>usersig&gt;</code> 为trtc 用户的签名</p><p>webrtc 支持<a href="https://cloud.tencent.com/product/leb">LEB</a>的直播流，地址获取请<a href="https://cloud.tencent.com/document/product/267/32720">参考</a></p><p>srt支持地址请<a href="https://ffmpeg.org/ffmpeg-protocols.html#srt">参考</a></p>
 * @method LiveStreamTaskNotifyConfig getTaskNotifyConfig() 获取<p>任务的事件通知信息，用于指定直播流处理的结果。</p>
 * @method void setTaskNotifyConfig(LiveStreamTaskNotifyConfig $TaskNotifyConfig) 设置<p>任务的事件通知信息，用于指定直播流处理的结果。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>直播流处理输出文件的目标存储。如处理有文件输出，该参数为必填项。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>直播流处理输出文件的目标存储。如处理有文件输出，该参数为必填项。</p>
 * @method string getOutputDir() 获取<p>直播流处理生成的文件输出的目标目录，如<code>/movie/201909/</code>，如果不填为 <code>/</code> 目录。</p>
 * @method void setOutputDir(string $OutputDir) 设置<p>直播流处理生成的文件输出的目标目录，如<code>/movie/201909/</code>，如果不填为 <code>/</code> 目录。</p>
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取<p>视频内容审核类型任务参数。</p>
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置<p>视频内容审核类型任务参数。</p>
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取<p>视频内容识别类型任务参数。</p>
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置<p>视频内容识别类型任务参数。</p>
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取<p>视频内容分析类型任务参数。</p>
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置<p>视频内容分析类型任务参数。</p>
 * @method AiQualityControlTaskInput getAiQualityControlTask() 获取<p>媒体质检类型任务参数。</p>
 * @method void setAiQualityControlTask(AiQualityControlTaskInput $AiQualityControlTask) 设置<p>媒体质检类型任务参数。</p>
 * @method LiveSmartSubtitlesTaskInput getSmartSubtitlesTask() 获取<p>智能字幕任务参数。</p>
 * @method void setSmartSubtitlesTask(LiveSmartSubtitlesTaskInput $SmartSubtitlesTask) 设置<p>智能字幕任务参数。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method integer getScheduleId() 获取<p>直播编排ID。<br>注意1：对于OutputStorage、OutputDir参数：</p><li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li><li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若对直播流发起处理（ProcessLiveStream）有输出，将覆盖原有编排的默认输出。</li>注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessLiveStream）有设置，将覆盖原有编排的默认回调。
 * @method void setScheduleId(integer $ScheduleId) 设置<p>直播编排ID。<br>注意1：对于OutputStorage、OutputDir参数：</p><li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li><li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若对直播流发起处理（ProcessLiveStream）有输出，将覆盖原有编排的默认输出。</li>注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessLiveStream）有设置，将覆盖原有编排的默认回调。
 * @method string getResourceId() 获取<p>资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。</p>
 */
class ProcessLiveStreamRequest extends AbstractModel
{
    /**
     * @var string <p>直播流 URL（必须是直播流地址，支持 rtmp，hls 和 flv, trtc,webrtc,srt等）。<br>trtc地址如下：<br> trtc: //trtc.rtc.qq.com/mps/<code>&lt;roomid&gt;</code>?sdkappid=<code>&lt;sdkappid&gt;</code>&amp;userid=<code>&lt;userid&gt;</code>&amp;usersig=&lt;<code>usersig&gt;</code><br><code>&lt;roomid&gt;</code> 为trtc的房间号id, 为数字<br><code>&lt;sdkappid&gt;</code> 为trtc的sdk app id<br><code>&lt;userid&gt;</code> 为服务进入房间的用户id,可以区分谁是机器人<br>&lt;<code>usersig&gt;</code> 为trtc 用户的签名</p><p>webrtc 支持<a href="https://cloud.tencent.com/product/leb">LEB</a>的直播流，地址获取请<a href="https://cloud.tencent.com/document/product/267/32720">参考</a></p><p>srt支持地址请<a href="https://ffmpeg.org/ffmpeg-protocols.html#srt">参考</a></p>
     */
    public $Url;

    /**
     * @var LiveStreamTaskNotifyConfig <p>任务的事件通知信息，用于指定直播流处理的结果。</p>
     */
    public $TaskNotifyConfig;

    /**
     * @var TaskOutputStorage <p>直播流处理输出文件的目标存储。如处理有文件输出，该参数为必填项。</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>直播流处理生成的文件输出的目标目录，如<code>/movie/201909/</code>，如果不填为 <code>/</code> 目录。</p>
     */
    public $OutputDir;

    /**
     * @var AiContentReviewTaskInput <p>视频内容审核类型任务参数。</p>
     */
    public $AiContentReviewTask;

    /**
     * @var AiRecognitionTaskInput <p>视频内容识别类型任务参数。</p>
     */
    public $AiRecognitionTask;

    /**
     * @var AiAnalysisTaskInput <p>视频内容分析类型任务参数。</p>
     */
    public $AiAnalysisTask;

    /**
     * @var AiQualityControlTaskInput <p>媒体质检类型任务参数。</p>
     */
    public $AiQualityControlTask;

    /**
     * @var LiveSmartSubtitlesTaskInput <p>智能字幕任务参数。</p>
     */
    public $SmartSubtitlesTask;

    /**
     * @var string <p>用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>直播编排ID。<br>注意1：对于OutputStorage、OutputDir参数：</p><li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li><li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若对直播流发起处理（ProcessLiveStream）有输出，将覆盖原有编排的默认输出。</li>注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessLiveStream）有设置，将覆盖原有编排的默认回调。
     */
    public $ScheduleId;

    /**
     * @var string <p>资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。</p>
     */
    public $ResourceId;

    /**
     * @param string $Url <p>直播流 URL（必须是直播流地址，支持 rtmp，hls 和 flv, trtc,webrtc,srt等）。<br>trtc地址如下：<br> trtc: //trtc.rtc.qq.com/mps/<code>&lt;roomid&gt;</code>?sdkappid=<code>&lt;sdkappid&gt;</code>&amp;userid=<code>&lt;userid&gt;</code>&amp;usersig=&lt;<code>usersig&gt;</code><br><code>&lt;roomid&gt;</code> 为trtc的房间号id, 为数字<br><code>&lt;sdkappid&gt;</code> 为trtc的sdk app id<br><code>&lt;userid&gt;</code> 为服务进入房间的用户id,可以区分谁是机器人<br>&lt;<code>usersig&gt;</code> 为trtc 用户的签名</p><p>webrtc 支持<a href="https://cloud.tencent.com/product/leb">LEB</a>的直播流，地址获取请<a href="https://cloud.tencent.com/document/product/267/32720">参考</a></p><p>srt支持地址请<a href="https://ffmpeg.org/ffmpeg-protocols.html#srt">参考</a></p>
     * @param LiveStreamTaskNotifyConfig $TaskNotifyConfig <p>任务的事件通知信息，用于指定直播流处理的结果。</p>
     * @param TaskOutputStorage $OutputStorage <p>直播流处理输出文件的目标存储。如处理有文件输出，该参数为必填项。</p>
     * @param string $OutputDir <p>直播流处理生成的文件输出的目标目录，如<code>/movie/201909/</code>，如果不填为 <code>/</code> 目录。</p>
     * @param AiContentReviewTaskInput $AiContentReviewTask <p>视频内容审核类型任务参数。</p>
     * @param AiRecognitionTaskInput $AiRecognitionTask <p>视频内容识别类型任务参数。</p>
     * @param AiAnalysisTaskInput $AiAnalysisTask <p>视频内容分析类型任务参数。</p>
     * @param AiQualityControlTaskInput $AiQualityControlTask <p>媒体质检类型任务参数。</p>
     * @param LiveSmartSubtitlesTaskInput $SmartSubtitlesTask <p>智能字幕任务参数。</p>
     * @param string $SessionId <p>用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     * @param integer $ScheduleId <p>直播编排ID。<br>注意1：对于OutputStorage、OutputDir参数：</p><li>当服务编排中子任务节点配置了OutputStorage、OutputDir时，该子任务节点中配置的输出作为子任务的输出。</li><li>当服务编排中子任务节点没有配置OutputStorage、OutputDir时，若对直播流发起处理（ProcessLiveStream）有输出，将覆盖原有编排的默认输出。</li>注意2：对于TaskNotifyConfig参数，若创建任务接口（ProcessLiveStream）有设置，将覆盖原有编排的默认回调。
     * @param string $ResourceId <p>资源ID，需要保证对应资源是开启状态。默认为帐号主资源ID。</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new LiveStreamTaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiQualityControlTask",$param) and $param["AiQualityControlTask"] !== null) {
            $this->AiQualityControlTask = new AiQualityControlTaskInput();
            $this->AiQualityControlTask->deserialize($param["AiQualityControlTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new LiveSmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}

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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ProcessMedia请求参数结构体
 *
 * @method string getFileId() 获取<p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。<br>FileId和MediaStoragePath必须提供其中一个。</p>
 * @method void setFileId(string $FileId) 设置<p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。<br>FileId和MediaStoragePath必须提供其中一个。</p>
 * @method string getMediaStoragePath() 获取<p>媒体的存储路径。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以通过MediaStoragePath发起任务。<br>FileId和MediaStoragePath必须提供其中一个。</p>
 * @method void setMediaStoragePath(string $MediaStoragePath) 设置<p>媒体的存储路径。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以通过MediaStoragePath发起任务。<br>FileId和MediaStoragePath必须提供其中一个。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method MediaProcessTaskInput getMediaProcessTask() 获取<p>视频处理类型任务参数。</p>
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) 设置<p>视频处理类型任务参数。</p>
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取<p>音视频内容审核类型任务参数 *。<br><font color="red">* 不建议使用</font>，推荐使用 <a href="https://cloud.tencent.com/document/api/266/80283">音视频审核(ReviewAudioVideo)</a> 或 <a href="https://cloud.tencent.com/document/api/266/73217">图片审核(ReviewImage)</a>。</p>
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置<p>音视频内容审核类型任务参数 *。<br><font color="red">* 不建议使用</font>，推荐使用 <a href="https://cloud.tencent.com/document/api/266/80283">音视频审核(ReviewAudioVideo)</a> 或 <a href="https://cloud.tencent.com/document/api/266/73217">图片审核(ReviewImage)</a>。</p>
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取<p>音视频内容分析类型任务参数。</p>
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置<p>音视频内容分析类型任务参数。</p>
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取<p>音视频内容识别类型任务参数。</p>
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置<p>音视频内容识别类型任务参数。</p>
 * @method integer getTasksPriority() 获取<p>任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method string getTasksNotifyMode() 获取<p>任务流状态变更通知模式，可取值有 Finish，Change 和 None，不填代表 Finish。</p>
 * @method void setTasksNotifyMode(string $TasksNotifyMode) 设置<p>任务流状态变更通知模式，可取值有 Finish，Change 和 None，不填代表 Finish。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getExtInfo() 获取<p>保留字段，特殊用途时使用。</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>保留字段，特殊用途时使用。</p>
 * @method string getUrl() 获取<p>FileID为空时有效，拉取Url生成新媒资产生新FileID，媒体处理产物将作为新媒资的附属产物。</p><p>注意：新媒资会产生存储费用</p>
 * @method void setUrl(string $Url) 设置<p>FileID为空时有效，拉取Url生成新媒资产生新FileID，媒体处理产物将作为新媒资的附属产物。</p><p>注意：新媒资会产生存储费用</p>
 */
class ProcessMediaRequest extends AbstractModel
{
    /**
     * @var string <p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。<br>FileId和MediaStoragePath必须提供其中一个。</p>
     */
    public $FileId;

    /**
     * @var string <p>媒体的存储路径。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以通过MediaStoragePath发起任务。<br>FileId和MediaStoragePath必须提供其中一个。</p>
     */
    public $MediaStoragePath;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var MediaProcessTaskInput <p>视频处理类型任务参数。</p>
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput <p>音视频内容审核类型任务参数 *。<br><font color="red">* 不建议使用</font>，推荐使用 <a href="https://cloud.tencent.com/document/api/266/80283">音视频审核(ReviewAudioVideo)</a> 或 <a href="https://cloud.tencent.com/document/api/266/73217">图片审核(ReviewImage)</a>。</p>
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput <p>音视频内容分析类型任务参数。</p>
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput <p>音视频内容识别类型任务参数。</p>
     */
    public $AiRecognitionTask;

    /**
     * @var integer <p>任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>任务流状态变更通知模式，可取值有 Finish，Change 和 None，不填代表 Finish。</p>
     */
    public $TasksNotifyMode;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>保留字段，特殊用途时使用。</p>
     */
    public $ExtInfo;

    /**
     * @var string <p>FileID为空时有效，拉取Url生成新媒资产生新FileID，媒体处理产物将作为新媒资的附属产物。</p><p>注意：新媒资会产生存储费用</p>
     */
    public $Url;

    /**
     * @param string $FileId <p>媒体文件 ID，即该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。<br>FileId和MediaStoragePath必须提供其中一个。</p>
     * @param string $MediaStoragePath <p>媒体的存储路径。<br>只有<a href="https://cloud.tencent.com/document/product/266/126825">FileID + Path 模式</a>的子应用可以通过MediaStoragePath发起任务。<br>FileId和MediaStoragePath必须提供其中一个。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param MediaProcessTaskInput $MediaProcessTask <p>视频处理类型任务参数。</p>
     * @param AiContentReviewTaskInput $AiContentReviewTask <p>音视频内容审核类型任务参数 *。<br><font color="red">* 不建议使用</font>，推荐使用 <a href="https://cloud.tencent.com/document/api/266/80283">音视频审核(ReviewAudioVideo)</a> 或 <a href="https://cloud.tencent.com/document/api/266/73217">图片审核(ReviewImage)</a>。</p>
     * @param AiAnalysisTaskInput $AiAnalysisTask <p>音视频内容分析类型任务参数。</p>
     * @param AiRecognitionTaskInput $AiRecognitionTask <p>音视频内容识别类型任务参数。</p>
     * @param integer $TasksPriority <p>任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     * @param string $TasksNotifyMode <p>任务流状态变更通知模式，可取值有 Finish，Change 和 None，不填代表 Finish。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $ExtInfo <p>保留字段，特殊用途时使用。</p>
     * @param string $Url <p>FileID为空时有效，拉取Url生成新媒资产生新FileID，媒体处理产物将作为新媒资的附属产物。</p><p>注意：新媒资会产生存储费用</p>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("TasksNotifyMode",$param) and $param["TasksNotifyMode"] !== null) {
            $this->TasksNotifyMode = $param["TasksNotifyMode"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}

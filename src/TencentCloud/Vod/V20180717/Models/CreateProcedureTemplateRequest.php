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
 * CreateProcedureTemplate请求参数结构体
 *
 * @method string getName() 获取任务流名字（支持中文，不超过20个字）。
 * @method void setName(string $Name) 设置任务流名字（支持中文，不超过20个字）。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 * @method MediaProcessTaskInput getMediaProcessTask() 获取视频处理类型任务参数。
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) 设置视频处理类型任务参数。
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取AI 内容审核类型任务参数 \*。
<font color=red>\*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font> 
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置AI 内容审核类型任务参数 \*。
<font color=red>\*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font> 
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取AI 内容分析类型任务参数。
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置AI 内容分析类型任务参数。
 * @method array getAiRecognitionTaskSet() 获取AI 内容识别类型任务参数。
 * @method void setAiRecognitionTaskSet(array $AiRecognitionTaskSet) 设置AI 内容识别类型任务参数。
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取该参数已不推荐使用，建议使用 AiRecognitionTaskSet。
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置该参数已不推荐使用，建议使用 AiRecognitionTaskSet。
 * @method ProcedureReviewAudioVideoTaskInput getReviewAudioVideoTask() 获取音视频审核类型任务参数。
 * @method void setReviewAudioVideoTask(ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask) 设置音视频审核类型任务参数。
 */
class CreateProcedureTemplateRequest extends AbstractModel
{
    /**
     * @var string 任务流名字（支持中文，不超过20个字）。
     */
    public $Name;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var MediaProcessTaskInput 视频处理类型任务参数。
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput AI 内容审核类型任务参数 \*。
<font color=red>\*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font> 
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput AI 内容分析类型任务参数。
     */
    public $AiAnalysisTask;

    /**
     * @var array AI 内容识别类型任务参数。
     */
    public $AiRecognitionTaskSet;

    /**
     * @var AiRecognitionTaskInput 该参数已不推荐使用，建议使用 AiRecognitionTaskSet。
     * @deprecated
     */
    public $AiRecognitionTask;

    /**
     * @var ProcedureReviewAudioVideoTaskInput 音视频审核类型任务参数。
     */
    public $ReviewAudioVideoTask;

    /**
     * @param string $Name 任务流名字（支持中文，不超过20个字）。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
     * @param MediaProcessTaskInput $MediaProcessTask 视频处理类型任务参数。
     * @param AiContentReviewTaskInput $AiContentReviewTask AI 内容审核类型任务参数 \*。
<font color=red>\*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font> 
     * @param AiAnalysisTaskInput $AiAnalysisTask AI 内容分析类型任务参数。
     * @param array $AiRecognitionTaskSet AI 内容识别类型任务参数。
     * @param AiRecognitionTaskInput $AiRecognitionTask 该参数已不推荐使用，建议使用 AiRecognitionTaskSet。
     * @param ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask 音视频审核类型任务参数。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
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

        if (array_key_exists("AiRecognitionTaskSet",$param) and $param["AiRecognitionTaskSet"] !== null) {
            $this->AiRecognitionTaskSet = [];
            foreach ($param["AiRecognitionTaskSet"] as $key => $value){
                $obj = new AiRecognitionTaskInput();
                $obj->deserialize($value);
                array_push($this->AiRecognitionTaskSet, $obj);
            }
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("ReviewAudioVideoTask",$param) and $param["ReviewAudioVideoTask"] !== null) {
            $this->ReviewAudioVideoTask = new ProcedureReviewAudioVideoTaskInput();
            $this->ReviewAudioVideoTask->deserialize($param["ReviewAudioVideoTask"]);
        }
    }
}

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
 * ResetProcedureTemplate请求参数结构体
 *
 * @method string getName() 获取<p>任务流名字</p>
 * @method void setName(string $Name) 设置<p>任务流名字</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getComment() 获取<p>模板描述信息，长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>模板描述信息，长度限制：256 个字符。</p>
 * @method MediaProcessTaskInput getMediaProcessTask() 获取<p>视频处理类型任务参数。</p>
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) 设置<p>视频处理类型任务参数。</p>
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取<p>AI 智能内容审核类型任务参数 *。<br><font color="red">*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font></p>
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置<p>AI 智能内容审核类型任务参数 *。<br><font color="red">*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font></p>
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取<p>AI 智能内容分析类型任务参数。</p>
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置<p>AI 智能内容分析类型任务参数。</p>
 * @method array getAiRecognitionTaskSet() 获取<p>AI 内容识别类型任务参数。</p>
 * @method void setAiRecognitionTaskSet(array $AiRecognitionTaskSet) 设置<p>AI 内容识别类型任务参数。</p>
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取<p>该参数已不推荐使用，建议使用 AiRecognitionTaskSet。</p>
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置<p>该参数已不推荐使用，建议使用 AiRecognitionTaskSet。</p>
 * @method ProcedureReviewAudioVideoTaskInput getReviewAudioVideoTask() 获取<p>音视频审核类型任务参数。</p>
 * @method void setReviewAudioVideoTask(ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask) 设置<p>音视频审核类型任务参数。</p>
 * @method array getImportMediaKnowledgeTaskSet() 获取<p>导入智能媒资知识库任务参数。</p>
 * @method void setImportMediaKnowledgeTaskSet(array $ImportMediaKnowledgeTaskSet) 设置<p>导入智能媒资知识库任务参数。</p>
 */
class ResetProcedureTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>任务流名字</p>
     */
    public $Name;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>模板描述信息，长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var MediaProcessTaskInput <p>视频处理类型任务参数。</p>
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput <p>AI 智能内容审核类型任务参数 *。<br><font color="red">*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font></p>
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput <p>AI 智能内容分析类型任务参数。</p>
     */
    public $AiAnalysisTask;

    /**
     * @var array <p>AI 内容识别类型任务参数。</p>
     */
    public $AiRecognitionTaskSet;

    /**
     * @var AiRecognitionTaskInput <p>该参数已不推荐使用，建议使用 AiRecognitionTaskSet。</p>
     * @deprecated
     */
    public $AiRecognitionTask;

    /**
     * @var ProcedureReviewAudioVideoTaskInput <p>音视频审核类型任务参数。</p>
     */
    public $ReviewAudioVideoTask;

    /**
     * @var array <p>导入智能媒资知识库任务参数。</p>
     */
    public $ImportMediaKnowledgeTaskSet;

    /**
     * @param string $Name <p>任务流名字</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Comment <p>模板描述信息，长度限制：256 个字符。</p>
     * @param MediaProcessTaskInput $MediaProcessTask <p>视频处理类型任务参数。</p>
     * @param AiContentReviewTaskInput $AiContentReviewTask <p>AI 智能内容审核类型任务参数 *。<br><font color="red">*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font></p>
     * @param AiAnalysisTaskInput $AiAnalysisTask <p>AI 智能内容分析类型任务参数。</p>
     * @param array $AiRecognitionTaskSet <p>AI 内容识别类型任务参数。</p>
     * @param AiRecognitionTaskInput $AiRecognitionTask <p>该参数已不推荐使用，建议使用 AiRecognitionTaskSet。</p>
     * @param ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask <p>音视频审核类型任务参数。</p>
     * @param array $ImportMediaKnowledgeTaskSet <p>导入智能媒资知识库任务参数。</p>
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

        if (array_key_exists("ImportMediaKnowledgeTaskSet",$param) and $param["ImportMediaKnowledgeTaskSet"] !== null) {
            $this->ImportMediaKnowledgeTaskSet = [];
            foreach ($param["ImportMediaKnowledgeTaskSet"] as $key => $value){
                $obj = new ImportMediaKnowledgeTaskInput();
                $obj->deserialize($value);
                array_push($this->ImportMediaKnowledgeTaskSet, $obj);
            }
        }
    }
}

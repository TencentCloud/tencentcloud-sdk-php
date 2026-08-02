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
 * 任务流模板详情
 *
 * @method string getName() 获取<p>任务流名字。</p>
 * @method void setName(string $Name) 设置<p>任务流名字。</p>
 * @method string getType() 获取<p>任务流模板类型，取值范围：</p><li>Preset：系统预置任务流模板；</li><li>Custom：用户自定义任务流模板。</li>
 * @method void setType(string $Type) 设置<p>任务流模板类型，取值范围：</p><li>Preset：系统预置任务流模板；</li><li>Custom：用户自定义任务流模板。</li>
 * @method string getComment() 获取<p>模板描述信息，长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>模板描述信息，长度限制：256 个字符。</p>
 * @method MediaProcessTaskInput getMediaProcessTask() 获取<p>视频处理类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) 设置<p>视频处理类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取<p>AI 智能审核类型任务参数 *。<br><font color="red">*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置<p>AI 智能审核类型任务参数 *。<br><font color="red">*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取<p>AI 智能内容分析类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置<p>AI 智能内容分析类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAiRecognitionTaskSet() 获取<p>AI 内容识别类型任务参数。</p>
 * @method void setAiRecognitionTaskSet(array $AiRecognitionTaskSet) 设置<p>AI 内容识别类型任务参数。</p>
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取<p>该参数已不推荐使用，建议使用 AiRecognitionTaskSet。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置<p>该参数已不推荐使用，建议使用 AiRecognitionTaskSet。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatMiniProgramPublishTaskInput getMiniProgramPublishTask() 获取<p>微信小程序发布任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniProgramPublishTask(WechatMiniProgramPublishTaskInput $MiniProgramPublishTask) 设置<p>微信小程序发布任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProcedureReviewAudioVideoTaskInput getReviewAudioVideoTask() 获取<p>音视频审核类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReviewAudioVideoTask(ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask) 设置<p>音视频审核类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImportMediaKnowledgeTaskSet() 获取<p>导入智能媒资知识库任务参数。</p>
 * @method void setImportMediaKnowledgeTaskSet(array $ImportMediaKnowledgeTaskSet) 设置<p>导入智能媒资知识库任务参数。</p>
 * @method string getCreateTime() 获取<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getUpdateTime() 获取<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 */
class ProcedureTemplate extends AbstractModel
{
    /**
     * @var string <p>任务流名字。</p>
     */
    public $Name;

    /**
     * @var string <p>任务流模板类型，取值范围：</p><li>Preset：系统预置任务流模板；</li><li>Custom：用户自定义任务流模板。</li>
     */
    public $Type;

    /**
     * @var string <p>模板描述信息，长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var MediaProcessTaskInput <p>视频处理类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput <p>AI 智能审核类型任务参数 *。<br><font color="red">*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput <p>AI 智能内容分析类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiAnalysisTask;

    /**
     * @var array <p>AI 内容识别类型任务参数。</p>
     */
    public $AiRecognitionTaskSet;

    /**
     * @var AiRecognitionTaskInput <p>该参数已不推荐使用，建议使用 AiRecognitionTaskSet。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $AiRecognitionTask;

    /**
     * @var WechatMiniProgramPublishTaskInput <p>微信小程序发布任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniProgramPublishTask;

    /**
     * @var ProcedureReviewAudioVideoTaskInput <p>音视频审核类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReviewAudioVideoTask;

    /**
     * @var array <p>导入智能媒资知识库任务参数。</p>
     */
    public $ImportMediaKnowledgeTaskSet;

    /**
     * @var string <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $UpdateTime;

    /**
     * @param string $Name <p>任务流名字。</p>
     * @param string $Type <p>任务流模板类型，取值范围：</p><li>Preset：系统预置任务流模板；</li><li>Custom：用户自定义任务流模板。</li>
     * @param string $Comment <p>模板描述信息，长度限制：256 个字符。</p>
     * @param MediaProcessTaskInput $MediaProcessTask <p>视频处理类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiContentReviewTaskInput $AiContentReviewTask <p>AI 智能审核类型任务参数 *。<br><font color="red">*：该参数用于发起旧版审核，不建议使用。推荐使用 ReviewAudioVideoTask 参数发起审核。</font></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskInput $AiAnalysisTask <p>AI 智能内容分析类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AiRecognitionTaskSet <p>AI 内容识别类型任务参数。</p>
     * @param AiRecognitionTaskInput $AiRecognitionTask <p>该参数已不推荐使用，建议使用 AiRecognitionTaskSet。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatMiniProgramPublishTaskInput $MiniProgramPublishTask <p>微信小程序发布任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProcedureReviewAudioVideoTaskInput $ReviewAudioVideoTask <p>音视频审核类型任务参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImportMediaKnowledgeTaskSet <p>导入智能媒资知识库任务参数。</p>
     * @param string $CreateTime <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $UpdateTime <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("MiniProgramPublishTask",$param) and $param["MiniProgramPublishTask"] !== null) {
            $this->MiniProgramPublishTask = new WechatMiniProgramPublishTaskInput();
            $this->MiniProgramPublishTask->deserialize($param["MiniProgramPublishTask"]);
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

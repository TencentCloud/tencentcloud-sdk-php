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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 不满意回复
 *
 * @method string getReplyBizId() 获取<p>不满意回复ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplyBizId(string $ReplyBizId) 设置<p>不满意回复ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordBizId() 获取<p>消息记录ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordBizId(string $RecordBizId) 设置<p>消息记录ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuestion() 获取<p>用户问题</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestion(string $Question) 设置<p>用户问题</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnswer() 获取<p>问题回复</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnswer(string $Answer) 设置<p>问题回复</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReasons() 获取<p>错误类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasons(array $Reasons) 设置<p>错误类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>处理状态，0：待处理，1：已拒答，2：已忽略，3：已纠错</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>处理状态，0：待处理，1：已拒答，2：已忽略，3：已纠错</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间，秒级时间戳</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，秒级时间戳</p>
 * @method string getUpdateTime() 获取<p>更新时间,秒级时间戳</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间,秒级时间戳</p>
 * @method string getOperator() 获取<p>操作人</p>
 * @method void setOperator(string $Operator) 设置<p>操作人</p>
 * @method string getFeedbackContent() 获取<p>自定义反馈</p>
 * @method void setFeedbackContent(string $FeedbackContent) 设置<p>自定义反馈</p>
 */
class UnsatisfiedReply extends AbstractModel
{
    /**
     * @var string <p>不满意回复ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplyBizId;

    /**
     * @var string <p>消息记录ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordBizId;

    /**
     * @var string <p>用户问题</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Question;

    /**
     * @var string <p>问题回复</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Answer;

    /**
     * @var array <p>错误类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reasons;

    /**
     * @var integer <p>处理状态，0：待处理，1：已拒答，2：已忽略，3：已纠错</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>创建时间，秒级时间戳</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间,秒级时间戳</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>操作人</p>
     */
    public $Operator;

    /**
     * @var string <p>自定义反馈</p>
     */
    public $FeedbackContent;

    /**
     * @param string $ReplyBizId <p>不满意回复ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordBizId <p>消息记录ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Question <p>用户问题</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Answer <p>问题回复</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Reasons <p>错误类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>处理状态，0：待处理，1：已拒答，2：已忽略，3：已纠错</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间，秒级时间戳</p>
     * @param string $UpdateTime <p>更新时间,秒级时间戳</p>
     * @param string $Operator <p>操作人</p>
     * @param string $FeedbackContent <p>自定义反馈</p>
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
        if (array_key_exists("ReplyBizId",$param) and $param["ReplyBizId"] !== null) {
            $this->ReplyBizId = $param["ReplyBizId"];
        }

        if (array_key_exists("RecordBizId",$param) and $param["RecordBizId"] !== null) {
            $this->RecordBizId = $param["RecordBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("FeedbackContent",$param) and $param["FeedbackContent"] !== null) {
            $this->FeedbackContent = $param["FeedbackContent"];
        }
    }
}

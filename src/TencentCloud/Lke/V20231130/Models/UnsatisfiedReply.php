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
 * @method string getReplyBizId() 获取不满意回复ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplyBizId(string $ReplyBizId) 设置不满意回复ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordBizId() 获取消息记录ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordBizId(string $RecordBizId) 设置消息记录ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuestion() 获取用户问题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestion(string $Question) 设置用户问题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnswer() 获取问题回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnswer(string $Answer) 设置问题回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReasons() 获取错误类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasons(array $Reasons) 设置错误类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取处理状态，0：待处理，1：已拒答，2：已忽略，3：已纠错
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置处理状态，0：待处理，1：已拒答，2：已忽略，3：已纠错
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，秒级时间戳
 * @method void setCreateTime(string $CreateTime) 设置创建时间，秒级时间戳
 * @method string getUpdateTime() 获取更新时间,秒级时间戳
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间,秒级时间戳
 * @method string getOperator() 获取操作人
 * @method void setOperator(string $Operator) 设置操作人
 * @method string getFeedbackContent() 获取自定义反馈
 * @method void setFeedbackContent(string $FeedbackContent) 设置自定义反馈
 */
class UnsatisfiedReply extends AbstractModel
{
    /**
     * @var string 不满意回复ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplyBizId;

    /**
     * @var string 消息记录ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordBizId;

    /**
     * @var string 用户问题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Question;

    /**
     * @var string 问题回复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Answer;

    /**
     * @var array 错误类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reasons;

    /**
     * @var integer 处理状态，0：待处理，1：已拒答，2：已忽略，3：已纠错
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建时间，秒级时间戳
     */
    public $CreateTime;

    /**
     * @var string 更新时间,秒级时间戳
     */
    public $UpdateTime;

    /**
     * @var string 操作人
     */
    public $Operator;

    /**
     * @var string 自定义反馈
     */
    public $FeedbackContent;

    /**
     * @param string $ReplyBizId 不满意回复ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordBizId 消息记录ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Question 用户问题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Answer 问题回复
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Reasons 错误类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 处理状态，0：待处理，1：已拒答，2：已忽略，3：已纠错
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，秒级时间戳
     * @param string $UpdateTime 更新时间,秒级时间戳
     * @param string $Operator 操作人
     * @param string $FeedbackContent 自定义反馈
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

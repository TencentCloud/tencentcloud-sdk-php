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
 * @method string getAnswer() 获取应用回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnswer(string $Answer) 设置应用回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReasons() 获取错误类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasons(array $Reasons) 设置错误类型
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var string 应用回复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Answer;

    /**
     * @var array 错误类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reasons;

    /**
     * @param string $ReplyBizId 不满意回复ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordBizId 消息记录ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Question 用户问题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Answer 应用回复
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Reasons 错误类型
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}

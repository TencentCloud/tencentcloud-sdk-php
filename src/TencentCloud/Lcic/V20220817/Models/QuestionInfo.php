<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 房间问答问题详情
 *
 * @method string getQuestionId() 获取问题ID
 * @method void setQuestionId(string $QuestionId) 设置问题ID
 * @method string getQuestionContent() 获取问题内容
 * @method void setQuestionContent(string $QuestionContent) 设置问题内容
 * @method integer getDuration() 获取倒计时答题设置的秒数（0 表示不计时）
 * @method void setDuration(integer $Duration) 设置倒计时答题设置的秒数（0 表示不计时）
 * @method integer getCorrectAnswer() 获取正确答案（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
 * @method void setCorrectAnswer(integer $CorrectAnswer) 设置正确答案（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
 * @method array getAnswerStats() 获取每个选项答题人数统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnswerStats(array $AnswerStats) 设置每个选项答题人数统计
注意：此字段可能返回 null，表示取不到有效值。
 */
class QuestionInfo extends AbstractModel
{
    /**
     * @var string 问题ID
     */
    public $QuestionId;

    /**
     * @var string 问题内容
     */
    public $QuestionContent;

    /**
     * @var integer 倒计时答题设置的秒数（0 表示不计时）
     */
    public $Duration;

    /**
     * @var integer 正确答案（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
     */
    public $CorrectAnswer;

    /**
     * @var array 每个选项答题人数统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnswerStats;

    /**
     * @param string $QuestionId 问题ID
     * @param string $QuestionContent 问题内容
     * @param integer $Duration 倒计时答题设置的秒数（0 表示不计时）
     * @param integer $CorrectAnswer 正确答案（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
     * @param array $AnswerStats 每个选项答题人数统计
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
        if (array_key_exists("QuestionId",$param) and $param["QuestionId"] !== null) {
            $this->QuestionId = $param["QuestionId"];
        }

        if (array_key_exists("QuestionContent",$param) and $param["QuestionContent"] !== null) {
            $this->QuestionContent = $param["QuestionContent"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("CorrectAnswer",$param) and $param["CorrectAnswer"] !== null) {
            $this->CorrectAnswer = $param["CorrectAnswer"];
        }

        if (array_key_exists("AnswerStats",$param) and $param["AnswerStats"] !== null) {
            $this->AnswerStats = [];
            foreach ($param["AnswerStats"] as $key => $value){
                $obj = new AnswerStat();
                $obj->deserialize($value);
                array_push($this->AnswerStats, $obj);
            }
        }
    }
}

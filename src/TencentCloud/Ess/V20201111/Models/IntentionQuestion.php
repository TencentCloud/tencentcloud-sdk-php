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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 意愿核身语音问答模式（即语音播报+语音回答）使用的文案，包括：系统语音播报的文本、需要核验的标准文本。当前仅支持1轮问答。
 *
 * @method string getQuestion() 获取当选择语音问答模式时，系统自动播报的问题文本，最大长度为250个字符。
 * @method void setQuestion(string $Question) 设置当选择语音问答模式时，系统自动播报的问题文本，最大长度为250个字符。
 * @method array getAnswers() 获取 当选择语音问答模式时，用于判断用户回答是否通过的标准答案列表，传入后可自动判断用户回答文本是否在标准文本列表中。
 * @method void setAnswers(array $Answers) 设置 当选择语音问答模式时，用于判断用户回答是否通过的标准答案列表，传入后可自动判断用户回答文本是否在标准文本列表中。
 */
class IntentionQuestion extends AbstractModel
{
    /**
     * @var string 当选择语音问答模式时，系统自动播报的问题文本，最大长度为250个字符。
     */
    public $Question;

    /**
     * @var array  当选择语音问答模式时，用于判断用户回答是否通过的标准答案列表，传入后可自动判断用户回答文本是否在标准文本列表中。
     */
    public $Answers;

    /**
     * @param string $Question 当选择语音问答模式时，系统自动播报的问题文本，最大长度为250个字符。
     * @param array $Answers  当选择语音问答模式时，用于判断用户回答是否通过的标准答案列表，传入后可自动判断用户回答文本是否在标准文本列表中。
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
        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answers",$param) and $param["Answers"] !== null) {
            $this->Answers = $param["Answers"];
        }
    }
}

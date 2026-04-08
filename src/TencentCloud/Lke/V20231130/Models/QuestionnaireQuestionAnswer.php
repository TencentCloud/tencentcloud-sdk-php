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
 * 问卷问题的答案
 *
 * @method string getQuestion() 获取<p>问题</p>
 * @method void setQuestion(string $Question) 设置<p>问题</p>
 * @method array getSelectedLabels() 获取<p>选中的答案标签</p>
 * @method void setSelectedLabels(array $SelectedLabels) 设置<p>选中的答案标签</p>
 */
class QuestionnaireQuestionAnswer extends AbstractModel
{
    /**
     * @var string <p>问题</p>
     */
    public $Question;

    /**
     * @var array <p>选中的答案标签</p>
     */
    public $SelectedLabels;

    /**
     * @param string $Question <p>问题</p>
     * @param array $SelectedLabels <p>选中的答案标签</p>
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

        if (array_key_exists("SelectedLabels",$param) and $param["SelectedLabels"] !== null) {
            $this->SelectedLabels = $param["SelectedLabels"];
        }
    }
}

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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QuestionAnswer 问题答案信息
 *
 * @method string getQuestion() 获取<p>问题内容</p>
 * @method void setQuestion(string $Question) 设置<p>问题内容</p>
 * @method array getSelectedLabelList() 获取<p>已选择的选项标签列表</p>
 * @method void setSelectedLabelList(array $SelectedLabelList) 设置<p>已选择的选项标签列表</p>
 * @method array getSelectedLabels() 获取<p>已选择的选项标签列表</p>
 * @method void setSelectedLabels(array $SelectedLabels) 设置<p>已选择的选项标签列表</p>
 */
class ConversationQuestionAnswer extends AbstractModel
{
    /**
     * @var string <p>问题内容</p>
     */
    public $Question;

    /**
     * @var array <p>已选择的选项标签列表</p>
     */
    public $SelectedLabelList;

    /**
     * @var array <p>已选择的选项标签列表</p>
     */
    public $SelectedLabels;

    /**
     * @param string $Question <p>问题内容</p>
     * @param array $SelectedLabelList <p>已选择的选项标签列表</p>
     * @param array $SelectedLabels <p>已选择的选项标签列表</p>
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

        if (array_key_exists("SelectedLabelList",$param) and $param["SelectedLabelList"] !== null) {
            $this->SelectedLabelList = $param["SelectedLabelList"];
        }

        if (array_key_exists("SelectedLabels",$param) and $param["SelectedLabels"] !== null) {
            $this->SelectedLabels = $param["SelectedLabels"];
        }
    }
}

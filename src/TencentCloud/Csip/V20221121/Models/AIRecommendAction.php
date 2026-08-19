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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI助手AI问答推荐操作项
 *
 * @method string getAction() 获取<p>推荐操作类型</p>
 * @method void setAction(string $Action) 设置<p>推荐操作类型</p>
 * @method string getQuestion() 获取<p>推荐操作</p>
 * @method void setQuestion(string $Question) 设置<p>推荐操作</p>
 */
class AIRecommendAction extends AbstractModel
{
    /**
     * @var string <p>推荐操作类型</p>
     */
    public $Action;

    /**
     * @var string <p>推荐操作</p>
     */
    public $Question;

    /**
     * @param string $Action <p>推荐操作类型</p>
     * @param string $Question <p>推荐操作</p>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }
    }
}

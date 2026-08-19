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
 * DescribeAIAnalysisRecommendQuestions请求参数结构体
 *
 * @method string getSessionID() 获取<p>问答的SessionID</p>
 * @method void setSessionID(string $SessionID) 设置<p>问答的SessionID</p>
 */
class DescribeAIAnalysisRecommendQuestionsRequest extends AbstractModel
{
    /**
     * @var string <p>问答的SessionID</p>
     */
    public $SessionID;

    /**
     * @param string $SessionID <p>问答的SessionID</p>
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
        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }
    }
}

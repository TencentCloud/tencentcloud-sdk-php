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
 * 相似问额外信息
 *
 * @method string getContent() 获取<p>相似问文本内容</p>
 * @method void setContent(string $Content) 设置<p>相似问文本内容</p>
 * @method string getSimilarQuestionId() 获取<p>相似问 ID</p>
 * @method void setSimilarQuestionId(string $SimilarQuestionId) 设置<p>相似问 ID</p>
 */
class SimilarQuestionExtra extends AbstractModel
{
    /**
     * @var string <p>相似问文本内容</p>
     */
    public $Content;

    /**
     * @var string <p>相似问 ID</p>
     */
    public $SimilarQuestionId;

    /**
     * @param string $Content <p>相似问文本内容</p>
     * @param string $SimilarQuestionId <p>相似问 ID</p>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("SimilarQuestionId",$param) and $param["SimilarQuestionId"] !== null) {
            $this->SimilarQuestionId = $param["SimilarQuestionId"];
        }
    }
}

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
 * 检索输入
 *
 * @method array getImageUrlList() 获取<p>图片 URL 列表</p>
 * @method void setImageUrlList(array $ImageUrlList) 设置<p>图片 URL 列表</p>
 * @method string getQuestion() 获取<p>问题</p>
 * @method void setQuestion(string $Question) 设置<p>问题</p>
 * @method array getSubQuestionList() 获取<p>拆解的子问题列表</p>
 * @method void setSubQuestionList(array $SubQuestionList) 设置<p>拆解的子问题列表</p>
 */
class SearchInput extends AbstractModel
{
    /**
     * @var array <p>图片 URL 列表</p>
     */
    public $ImageUrlList;

    /**
     * @var string <p>问题</p>
     */
    public $Question;

    /**
     * @var array <p>拆解的子问题列表</p>
     */
    public $SubQuestionList;

    /**
     * @param array $ImageUrlList <p>图片 URL 列表</p>
     * @param string $Question <p>问题</p>
     * @param array $SubQuestionList <p>拆解的子问题列表</p>
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
        if (array_key_exists("ImageUrlList",$param) and $param["ImageUrlList"] !== null) {
            $this->ImageUrlList = $param["ImageUrlList"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("SubQuestionList",$param) and $param["SubQuestionList"] !== null) {
            $this->SubQuestionList = $param["SubQuestionList"];
        }
    }
}

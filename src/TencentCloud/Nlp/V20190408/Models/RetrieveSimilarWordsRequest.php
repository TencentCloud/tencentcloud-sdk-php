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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RetrieveSimilarWords请求参数结构体
 *
 * @method string getText() 获取输入的词语。（仅支持UTF-8格式，不超过10字符）
 * @method void setText(string $Text) 设置输入的词语。（仅支持UTF-8格式，不超过10字符）
 * @method integer getNumber() 获取召回的相似词个数，取值范围为1-20。
 * @method void setNumber(integer $Number) 设置召回的相似词个数，取值范围为1-20。
 */
class RetrieveSimilarWordsRequest extends AbstractModel
{
    /**
     * @var string 输入的词语。（仅支持UTF-8格式，不超过10字符）
     */
    public $Text;

    /**
     * @var integer 召回的相似词个数，取值范围为1-20。
     */
    public $Number;

    /**
     * @param string $Text 输入的词语。（仅支持UTF-8格式，不超过10字符）
     * @param integer $Number 召回的相似词个数，取值范围为1-20。
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}

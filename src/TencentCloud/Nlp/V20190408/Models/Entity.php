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
 * 实体识别结果。
 *
 * @method string getWord() 获取基础词。
 * @method void setWord(string $Word) 设置基础词。
 * @method integer getBeginOffset() 获取基础词在NormalText中的起始位置。
 * @method void setBeginOffset(integer $BeginOffset) 设置基础词在NormalText中的起始位置。
 * @method integer getLength() 获取基础词的长度。
 * @method void setLength(integer $Length) 设置基础词的长度。
 * @method string getType() 获取实体类型的标准名字。
 * @method void setType(string $Type) 设置实体类型的标准名字。
 * @method string getName() 获取类型名字的自然语言表达。（中文或英文）
 * @method void setName(string $Name) 设置类型名字的自然语言表达。（中文或英文）
 */
class Entity extends AbstractModel
{
    /**
     * @var string 基础词。
     */
    public $Word;

    /**
     * @var integer 基础词在NormalText中的起始位置。
     */
    public $BeginOffset;

    /**
     * @var integer 基础词的长度。
     */
    public $Length;

    /**
     * @var string 实体类型的标准名字。
     */
    public $Type;

    /**
     * @var string 类型名字的自然语言表达。（中文或英文）
     */
    public $Name;

    /**
     * @param string $Word 基础词。
     * @param integer $BeginOffset 基础词在NormalText中的起始位置。
     * @param integer $Length 基础词的长度。
     * @param string $Type 实体类型的标准名字。
     * @param string $Name 类型名字的自然语言表达。（中文或英文）
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
        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("BeginOffset",$param) and $param["BeginOffset"] !== null) {
            $this->BeginOffset = $param["BeginOffset"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}

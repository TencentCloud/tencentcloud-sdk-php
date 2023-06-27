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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ComposePoetry请求参数结构体
 *
 * @method string getText() 获取生成诗词的关键词。
 * @method void setText(string $Text) 设置生成诗词的关键词。
 * @method integer getPoetryType() 获取生成诗词的类型。0：藏头或藏身；1：藏头；2：藏身。默认为0。
 * @method void setPoetryType(integer $PoetryType) 设置生成诗词的类型。0：藏头或藏身；1：藏头；2：藏身。默认为0。
 * @method integer getGenre() 获取诗的体裁。0：五言律诗或七言律诗；5：五言律诗；7：七言律诗。默认为0。
 * @method void setGenre(integer $Genre) 设置诗的体裁。0：五言律诗或七言律诗；5：五言律诗；7：七言律诗。默认为0。
 */
class ComposePoetryRequest extends AbstractModel
{
    /**
     * @var string 生成诗词的关键词。
     */
    public $Text;

    /**
     * @var integer 生成诗词的类型。0：藏头或藏身；1：藏头；2：藏身。默认为0。
     */
    public $PoetryType;

    /**
     * @var integer 诗的体裁。0：五言律诗或七言律诗；5：五言律诗；7：七言律诗。默认为0。
     */
    public $Genre;

    /**
     * @param string $Text 生成诗词的关键词。
     * @param integer $PoetryType 生成诗词的类型。0：藏头或藏身；1：藏头；2：藏身。默认为0。
     * @param integer $Genre 诗的体裁。0：五言律诗或七言律诗；5：五言律诗；7：七言律诗。默认为0。
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

        if (array_key_exists("PoetryType",$param) and $param["PoetryType"] !== null) {
            $this->PoetryType = $param["PoetryType"];
        }

        if (array_key_exists("Genre",$param) and $param["Genre"] !== null) {
            $this->Genre = $param["Genre"];
        }
    }
}

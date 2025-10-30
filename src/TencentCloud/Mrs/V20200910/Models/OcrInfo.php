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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片完整的OCR信息
 *
 * @method array getItems() 获取图片进行OCR之后得到的所有包含字块的OCR信息
 * @method void setItems(array $Items) 设置图片进行OCR之后得到的所有包含字块的OCR信息
 * @method string getText() 获取图片进行OCR之后得到的所有字符
 * @method void setText(string $Text) 设置图片进行OCR之后得到的所有字符
 */
class OcrInfo extends AbstractModel
{
    /**
     * @var array 图片进行OCR之后得到的所有包含字块的OCR信息
     */
    public $Items;

    /**
     * @var string 图片进行OCR之后得到的所有字符
     */
    public $Text;

    /**
     * @param array $Items 图片进行OCR之后得到的所有包含字块的OCR信息
     * @param string $Text 图片进行OCR之后得到的所有字符
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new OcrItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}

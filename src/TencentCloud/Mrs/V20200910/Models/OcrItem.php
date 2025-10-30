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
 * 图片进行OCR之后,包含字符块的信息，包含字符与坐标，一个图片进行OCR之后可能分为多个这样的块
 *
 * @method string getWords() 获取图片中文字的字符串
 * @method void setWords(string $Words) 设置图片中文字的字符串
 * @method array getCoords() 获取Words 中每个文字的坐标数组，顺序与Words中的字符顺序一致
 * @method void setCoords(array $Coords) 设置Words 中每个文字的坐标数组，顺序与Words中的字符顺序一致
 * @method Coordinate getWordCoords() 获取整个字符块的坐标信息
 * @method void setWordCoords(Coordinate $WordCoords) 设置整个字符块的坐标信息
 */
class OcrItem extends AbstractModel
{
    /**
     * @var string 图片中文字的字符串
     */
    public $Words;

    /**
     * @var array Words 中每个文字的坐标数组，顺序与Words中的字符顺序一致
     */
    public $Coords;

    /**
     * @var Coordinate 整个字符块的坐标信息
     */
    public $WordCoords;

    /**
     * @param string $Words 图片中文字的字符串
     * @param array $Coords Words 中每个文字的坐标数组，顺序与Words中的字符顺序一致
     * @param Coordinate $WordCoords 整个字符块的坐标信息
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
        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = $param["Words"];
        }

        if (array_key_exists("Coords",$param) and $param["Coords"] !== null) {
            $this->Coords = [];
            foreach ($param["Coords"] as $key => $value){
                $obj = new Coordinate();
                $obj->deserialize($value);
                array_push($this->Coords, $obj);
            }
        }

        if (array_key_exists("WordCoords",$param) and $param["WordCoords"] !== null) {
            $this->WordCoords = new Coordinate();
            $this->WordCoords->deserialize($param["WordCoords"]);
        }
    }
}

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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 还原文本信息
 *
 * @method string getDetectedText() 获取文本块内容
 * @method void setDetectedText(string $DetectedText) 设置文本块内容
 * @method Polygon getCoord() 获取四点坐标
 * @method void setCoord(Polygon $Coord) 设置四点坐标
 * @method string getAdvancedInfo() 获取描述性信息
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置描述性信息
 * @method array getWordCoord() 获取单词的四点坐标
 * @method void setWordCoord(array $WordCoord) 设置单词的四点坐标
 */
class WordItem extends AbstractModel
{
    /**
     * @var string 文本块内容
     */
    public $DetectedText;

    /**
     * @var Polygon 四点坐标
     */
    public $Coord;

    /**
     * @var string 描述性信息
     */
    public $AdvancedInfo;

    /**
     * @var array 单词的四点坐标
     */
    public $WordCoord;

    /**
     * @param string $DetectedText 文本块内容
     * @param Polygon $Coord 四点坐标
     * @param string $AdvancedInfo 描述性信息
     * @param array $WordCoord 单词的四点坐标
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
        if (array_key_exists("DetectedText",$param) and $param["DetectedText"] !== null) {
            $this->DetectedText = $param["DetectedText"];
        }

        if (array_key_exists("Coord",$param) and $param["Coord"] !== null) {
            $this->Coord = new Polygon();
            $this->Coord->deserialize($param["Coord"]);
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("WordCoord",$param) and $param["WordCoord"] !== null) {
            $this->WordCoord = [];
            foreach ($param["WordCoord"] as $key => $value){
                $obj = new WordPolygon();
                $obj->deserialize($value);
                array_push($this->WordCoord, $obj);
            }
        }
    }
}

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
 * 公式识别结果
 *
 * @method string getDetectedText() 获取识别出的文本行内容
 * @method void setDetectedText(string $DetectedText) 设置识别出的文本行内容
 * @method Polygon getCoord() 获取识别出的文本行内容坐标
 * @method void setCoord(Polygon $Coord) 设置识别出的文本行内容坐标
 */
class TextFormulaInfo extends AbstractModel
{
    /**
     * @var string 识别出的文本行内容
     */
    public $DetectedText;

    /**
     * @var Polygon 识别出的文本行内容坐标
     */
    public $Coord;

    /**
     * @param string $DetectedText 识别出的文本行内容
     * @param Polygon $Coord 识别出的文本行内容坐标
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
    }
}

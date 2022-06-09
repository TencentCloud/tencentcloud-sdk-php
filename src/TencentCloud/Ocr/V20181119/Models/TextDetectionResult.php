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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 识别结果
 *
 * @method string getValue() 获取识别出的文本行内容
 * @method void setValue(string $Value) 设置识别出的文本行内容
 * @method array getPolygon() 获取坐标，以四个顶点坐标表示
 * @method void setPolygon(array $Polygon) 设置坐标，以四个顶点坐标表示
 */
class TextDetectionResult extends AbstractModel
{
    /**
     * @var string 识别出的文本行内容
     */
    public $Value;

    /**
     * @var array 坐标，以四个顶点坐标表示
     */
    public $Polygon;

    /**
     * @param string $Value 识别出的文本行内容
     * @param array $Polygon 坐标，以四个顶点坐标表示
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = [];
            foreach ($param["Polygon"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Polygon, $obj);
            }
        }
    }
}

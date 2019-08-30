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
 * @method string getDetectedText() 获取识别出的文本行内容
 * @method void setDetectedText(string $DetectedText) 设置识别出的文本行内容
 * @method boolean getResult() 获取算式运算结果
 * @method void setResult(boolean $Result) 设置算式运算结果
 * @method integer getConfidence() 获取保留字段，暂不支持
 * @method void setConfidence(integer $Confidence) 设置保留字段，暂不支持
 * @method array getPolygon() 获取文本行坐标，以四个顶点坐标表示（保留字段，暂不支持）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolygon(array $Polygon) 设置文本行坐标，以四个顶点坐标表示（保留字段，暂不支持）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdvancedInfo() 获取保留字段，暂不支持
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置保留字段，暂不支持
 */

/**
 *算式识别结果
 */
class TextArithmetic extends AbstractModel
{
    /**
     * @var string 识别出的文本行内容
     */
    public $DetectedText;

    /**
     * @var boolean 算式运算结果
     */
    public $Result;

    /**
     * @var integer 保留字段，暂不支持
     */
    public $Confidence;

    /**
     * @var array 文本行坐标，以四个顶点坐标表示（保留字段，暂不支持）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Polygon;

    /**
     * @var string 保留字段，暂不支持
     */
    public $AdvancedInfo;
    /**
     * @param string $DetectedText 识别出的文本行内容
     * @param boolean $Result 算式运算结果
     * @param integer $Confidence 保留字段，暂不支持
     * @param array $Polygon 文本行坐标，以四个顶点坐标表示（保留字段，暂不支持）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdvancedInfo 保留字段，暂不支持
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DetectedText",$param) and $param["DetectedText"] !== null) {
            $this->DetectedText = $param["DetectedText"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = [];
            foreach ($param["Polygon"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Polygon, $obj);
            }
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }
    }
}

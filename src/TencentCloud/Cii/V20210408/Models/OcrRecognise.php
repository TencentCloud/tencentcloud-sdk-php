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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ocr识别结果
 *
 * @method string getOriginalField() 获取原文字段
 * @method void setOriginalField(string $OriginalField) 设置原文字段
 * @method string getValue() 获取识别结果
 * @method void setValue(string $Value) 设置识别结果
 * @method float getConfidence() 获取置信度
 * @method void setConfidence(float $Confidence) 设置置信度
 * @method Location getLocation() 获取位置信息
 * @method void setLocation(Location $Location) 设置位置信息
 * @method string getField() 获取字段名
 * @method void setField(string $Field) 设置字段名
 */
class OcrRecognise extends AbstractModel
{
    /**
     * @var string 原文字段
     */
    public $OriginalField;

    /**
     * @var string 识别结果
     */
    public $Value;

    /**
     * @var float 置信度
     */
    public $Confidence;

    /**
     * @var Location 位置信息
     */
    public $Location;

    /**
     * @var string 字段名
     */
    public $Field;

    /**
     * @param string $OriginalField 原文字段
     * @param string $Value 识别结果
     * @param float $Confidence 置信度
     * @param Location $Location 位置信息
     * @param string $Field 字段名
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
        if (array_key_exists("OriginalField",$param) and $param["OriginalField"] !== null) {
            $this->OriginalField = $param["OriginalField"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }
    }
}

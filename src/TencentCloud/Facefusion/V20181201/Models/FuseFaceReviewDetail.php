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
namespace TencentCloud\Facefusion\V20181201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getField() 获取鉴政使用字段, 为职业属性,其他审核结果对应上一级category
 * @method void setField(string $Field) 设置鉴政使用字段, 为职业属性,其他审核结果对应上一级category
 * @method string getLabel() 获取人员名称
 * @method void setLabel(string $Label) 设置人员名称
 * @method float getConfidence() 获取对应识别label的置信度
 * @method void setConfidence(float $Confidence) 设置对应识别label的置信度
 * @method string getSuggestion() 获取此字段为保留字段，目前统一返回pass。
 * @method void setSuggestion(string $Suggestion) 设置此字段为保留字段，目前统一返回pass。
 */

/**
 *人脸融合鉴黄鉴政人脸信息
 */
class FuseFaceReviewDetail extends AbstractModel
{
    /**
     * @var string 鉴政使用字段, 为职业属性,其他审核结果对应上一级category
     */
    public $Field;

    /**
     * @var string 人员名称
     */
    public $Label;

    /**
     * @var float 对应识别label的置信度
     */
    public $Confidence;

    /**
     * @var string 此字段为保留字段，目前统一返回pass。
     */
    public $Suggestion;
    /**
     * @param string $Field 鉴政使用字段, 为职业属性,其他审核结果对应上一级category
     * @param string $Label 人员名称
     * @param float $Confidence 对应识别label的置信度
     * @param string $Suggestion 此字段为保留字段，目前统一返回pass。
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }
    }
}

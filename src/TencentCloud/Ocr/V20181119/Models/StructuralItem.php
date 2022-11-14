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
 * 智能结构化识别
 *
 * @method string getName() 获取识别出的字段名称(关键字)。
 * @method void setName(string $Name) 设置识别出的字段名称(关键字)。
 * @method string getValue() 获取识别出的字段名称对应的值。
 * @method void setValue(string $Value) 设置识别出的字段名称对应的值。
 * @method integer getConfidence() 获取置信度 0 ~100。
 * @method void setConfidence(integer $Confidence) 设置置信度 0 ~100。
 * @method ItemCoord getItemCoord() 获取文本行在旋转纠正之后的图像中的像素
坐标。
 * @method void setItemCoord(ItemCoord $ItemCoord) 设置文本行在旋转纠正之后的图像中的像素
坐标。
 * @method integer getRow() 获取字段所在行号，下标从0开始，非行字段或未能识别行号的该值返回-1。
 * @method void setRow(integer $Row) 设置字段所在行号，下标从0开始，非行字段或未能识别行号的该值返回-1。
 */
class StructuralItem extends AbstractModel
{
    /**
     * @var string 识别出的字段名称(关键字)。
     */
    public $Name;

    /**
     * @var string 识别出的字段名称对应的值。
     */
    public $Value;

    /**
     * @var integer 置信度 0 ~100。
     */
    public $Confidence;

    /**
     * @var ItemCoord 文本行在旋转纠正之后的图像中的像素
坐标。
     */
    public $ItemCoord;

    /**
     * @var integer 字段所在行号，下标从0开始，非行字段或未能识别行号的该值返回-1。
     */
    public $Row;

    /**
     * @param string $Name 识别出的字段名称(关键字)。
     * @param string $Value 识别出的字段名称对应的值。
     * @param integer $Confidence 置信度 0 ~100。
     * @param ItemCoord $ItemCoord 文本行在旋转纠正之后的图像中的像素
坐标。
     * @param integer $Row 字段所在行号，下标从0开始，非行字段或未能识别行号的该值返回-1。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("ItemCoord",$param) and $param["ItemCoord"] !== null) {
            $this->ItemCoord = new ItemCoord();
            $this->ItemCoord->deserialize($param["ItemCoord"]);
        }

        if (array_key_exists("Row",$param) and $param["Row"] !== null) {
            $this->Row = $param["Row"];
        }
    }
}

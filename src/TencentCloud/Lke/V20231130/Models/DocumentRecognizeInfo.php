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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单页文档识别的内容
 *
 * @method integer getPageNumber() 获取输入PDF文件的页码，从1开始。输入图片的话值始终为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置输入PDF文件的页码，从1开始。输入图片的话值始终为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAngle() 获取旋转角度

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAngle(integer $Angle) 设置旋转角度

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取AI算法识别处理后的图片高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置AI算法识别处理后的图片高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取AI算法识别处理后的图片宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置AI算法识别处理后的图片宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOriginHeight() 获取图片的原始高度，输入PDF文件则表示单页PDF转图片之后的图片高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginHeight(integer $OriginHeight) 设置图片的原始高度，输入PDF文件则表示单页PDF转图片之后的图片高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOriginWidth() 获取图片的原始宽度，输入PDF文件则表示单页PDF转图片之后的图片宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginWidth(integer $OriginWidth) 设置图片的原始宽度，输入PDF文件则表示单页PDF转图片之后的图片宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getElements() 获取文档元素信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElements(array $Elements) 设置文档元素信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRotatedAngle() 获取旋转角度

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotatedAngle(float $RotatedAngle) 设置旋转角度

注意：此字段可能返回 null，表示取不到有效值。
 */
class DocumentRecognizeInfo extends AbstractModel
{
    /**
     * @var integer 输入PDF文件的页码，从1开始。输入图片的话值始终为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @var integer 旋转角度

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Angle;

    /**
     * @var integer AI算法识别处理后的图片高度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var integer AI算法识别处理后的图片宽度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 图片的原始高度，输入PDF文件则表示单页PDF转图片之后的图片高度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginHeight;

    /**
     * @var integer 图片的原始宽度，输入PDF文件则表示单页PDF转图片之后的图片宽度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginWidth;

    /**
     * @var array 文档元素信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Elements;

    /**
     * @var float 旋转角度

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotatedAngle;

    /**
     * @param integer $PageNumber 输入PDF文件的页码，从1开始。输入图片的话值始终为1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Angle 旋转角度

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height AI算法识别处理后的图片高度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width AI算法识别处理后的图片宽度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OriginHeight 图片的原始高度，输入PDF文件则表示单页PDF转图片之后的图片高度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OriginWidth 图片的原始宽度，输入PDF文件则表示单页PDF转图片之后的图片宽度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Elements 文档元素信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RotatedAngle 旋转角度

注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("OriginHeight",$param) and $param["OriginHeight"] !== null) {
            $this->OriginHeight = $param["OriginHeight"];
        }

        if (array_key_exists("OriginWidth",$param) and $param["OriginWidth"] !== null) {
            $this->OriginWidth = $param["OriginWidth"];
        }

        if (array_key_exists("Elements",$param) and $param["Elements"] !== null) {
            $this->Elements = [];
            foreach ($param["Elements"] as $key => $value){
                $obj = new DocumentElement();
                $obj->deserialize($value);
                array_push($this->Elements, $obj);
            }
        }

        if (array_key_exists("RotatedAngle",$param) and $param["RotatedAngle"] !== null) {
            $this->RotatedAngle = $param["RotatedAngle"];
        }
    }
}

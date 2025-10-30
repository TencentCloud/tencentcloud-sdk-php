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
 * 试题识别结果
 *
 * @method float getAngle() 获取旋转角度
 * @method void setAngle(float $Angle) 设置旋转角度
 * @method integer getHeight() 获取预处理后图片高度
 * @method void setHeight(integer $Height) 设置预处理后图片高度
 * @method integer getWidth() 获取预处理后图片宽度
 * @method void setWidth(integer $Width) 设置预处理后图片宽度
 * @method array getResultList() 获取文档元素
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultList(array $ResultList) 设置文档元素
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrgHeight() 获取输入图片高度
 * @method void setOrgHeight(integer $OrgHeight) 设置输入图片高度
 * @method integer getOrgWidth() 获取输入图片宽度
 * @method void setOrgWidth(integer $OrgWidth) 设置输入图片宽度
 * @method string getImageBase64() 获取预处理后的图片base64编码
 * @method void setImageBase64(string $ImageBase64) 设置预处理后的图片base64编码
 */
class QuestionInfo extends AbstractModel
{
    /**
     * @var float 旋转角度
     */
    public $Angle;

    /**
     * @var integer 预处理后图片高度
     */
    public $Height;

    /**
     * @var integer 预处理后图片宽度
     */
    public $Width;

    /**
     * @var array 文档元素
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultList;

    /**
     * @var integer 输入图片高度
     */
    public $OrgHeight;

    /**
     * @var integer 输入图片宽度
     */
    public $OrgWidth;

    /**
     * @var string 预处理后的图片base64编码
     */
    public $ImageBase64;

    /**
     * @param float $Angle 旋转角度
     * @param integer $Height 预处理后图片高度
     * @param integer $Width 预处理后图片宽度
     * @param array $ResultList 文档元素
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OrgHeight 输入图片高度
     * @param integer $OrgWidth 输入图片宽度
     * @param string $ImageBase64 预处理后的图片base64编码
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
        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("ResultList",$param) and $param["ResultList"] !== null) {
            $this->ResultList = [];
            foreach ($param["ResultList"] as $key => $value){
                $obj = new ResultList();
                $obj->deserialize($value);
                array_push($this->ResultList, $obj);
            }
        }

        if (array_key_exists("OrgHeight",$param) and $param["OrgHeight"] !== null) {
            $this->OrgHeight = $param["OrgHeight"];
        }

        if (array_key_exists("OrgWidth",$param) and $param["OrgWidth"] !== null) {
            $this->OrgWidth = $param["OrgWidth"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }
    }
}

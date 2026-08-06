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
 * @method float getAngle() 获取<p>旋转角度</p>
 * @method void setAngle(float $Angle) 设置<p>旋转角度</p>
 * @method integer getHeight() 获取<p>预处理后图片高度</p><p>单位：px</p>
 * @method void setHeight(integer $Height) 设置<p>预处理后图片高度</p><p>单位：px</p>
 * @method integer getWidth() 获取<p>预处理后图片宽度</p><p>单位：px</p>
 * @method void setWidth(integer $Width) 设置<p>预处理后图片宽度</p><p>单位：px</p>
 * @method array getResultList() 获取<p>文档元素</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultList(array $ResultList) 设置<p>文档元素</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrgHeight() 获取<p>输入图片高度</p><p>单位：px</p>
 * @method void setOrgHeight(integer $OrgHeight) 设置<p>输入图片高度</p><p>单位：px</p>
 * @method integer getOrgWidth() 获取<p>输入图片宽度</p><p>单位：px</p>
 * @method void setOrgWidth(integer $OrgWidth) 设置<p>输入图片宽度</p><p>单位：px</p>
 * @method string getImageBase64() 获取<p>预处理后的图片base64编码</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>预处理后的图片base64编码</p>
 */
class QuestionInfo extends AbstractModel
{
    /**
     * @var float <p>旋转角度</p>
     */
    public $Angle;

    /**
     * @var integer <p>预处理后图片高度</p><p>单位：px</p>
     */
    public $Height;

    /**
     * @var integer <p>预处理后图片宽度</p><p>单位：px</p>
     */
    public $Width;

    /**
     * @var array <p>文档元素</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultList;

    /**
     * @var integer <p>输入图片高度</p><p>单位：px</p>
     */
    public $OrgHeight;

    /**
     * @var integer <p>输入图片宽度</p><p>单位：px</p>
     */
    public $OrgWidth;

    /**
     * @var string <p>预处理后的图片base64编码</p>
     */
    public $ImageBase64;

    /**
     * @param float $Angle <p>旋转角度</p>
     * @param integer $Height <p>预处理后图片高度</p><p>单位：px</p>
     * @param integer $Width <p>预处理后图片宽度</p><p>单位：px</p>
     * @param array $ResultList <p>文档元素</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OrgHeight <p>输入图片高度</p><p>单位：px</p>
     * @param integer $OrgWidth <p>输入图片宽度</p><p>单位：px</p>
     * @param string $ImageBase64 <p>预处理后的图片base64编码</p>
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

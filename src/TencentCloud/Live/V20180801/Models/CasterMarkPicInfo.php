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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导播台水印信息。
 *
 * @method integer getMarkPicIndex() 获取水印图片Index。
 * @method void setMarkPicIndex(integer $MarkPicIndex) 设置水印图片Index。
 * @method integer getMarkPicId() 获取注：该字段已废弃。
 * @method void setMarkPicId(integer $MarkPicId) 设置注：该字段已废弃。
 * @method float getMarkPicWidth() 获取水印图片在输出时的宽度。
当该值为大于1的整数值时，单位为像素，允许范围[1,1920]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面上所占的比例值。
 * @method void setMarkPicWidth(float $MarkPicWidth) 设置水印图片在输出时的宽度。
当该值为大于1的整数值时，单位为像素，允许范围[1,1920]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面上所占的比例值。
 * @method float getMarkPicHeight() 获取水印图片在输出时的高度。
当该值为大于1的整数值时，单位为像素，允许范围[1,1080]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在输出上所占的比例值。
 * @method void setMarkPicHeight(float $MarkPicHeight) 设置水印图片在输出时的高度。
当该值为大于1的整数值时，单位为像素，允许范围[1,1080]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在输出上所占的比例值。
 * @method float getMarkPicLocationX() 获取水印图片在输出时的X轴坐标。
当该值为大于1的整数值时，单位为像素，允许范围[1,1920]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面上x坐标所占的比例值。
 * @method void setMarkPicLocationX(float $MarkPicLocationX) 设置水印图片在输出时的X轴坐标。
当该值为大于1的整数值时，单位为像素，允许范围[1,1920]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面上x坐标所占的比例值。
 * @method float getMarkPicLocationY() 获取水印图片在输出时的Y坐标。
当该值为大于1的整数值时，单位为像素，允许范围[1,1080]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面Y坐标上所占的比例值。
 * @method void setMarkPicLocationY(float $MarkPicLocationY) 设置水印图片在输出时的Y坐标。
当该值为大于1的整数值时，单位为像素，允许范围[1,1080]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面Y坐标上所占的比例值。
 * @method string getMarkPicUrl() 获取水印地址。
最大长度256字符，且url需以jpg、jpeg、png、bmp、gif后缀结尾。
 * @method void setMarkPicUrl(string $MarkPicUrl) 设置水印地址。
最大长度256字符，且url需以jpg、jpeg、png、bmp、gif后缀结尾。
 * @method string getDescription() 获取水印描述。
最大允许长度为256。
 * @method void setDescription(string $Description) 设置水印描述。
最大允许长度为256。
 * @method boolean getIsEqualProportion() 获取是否启用了等比例缩放。
注：该字段仅做状态保存，无实际效果。
 * @method void setIsEqualProportion(boolean $IsEqualProportion) 设置是否启用了等比例缩放。
注：该字段仅做状态保存，无实际效果。
 */
class CasterMarkPicInfo extends AbstractModel
{
    /**
     * @var integer 水印图片Index。
     */
    public $MarkPicIndex;

    /**
     * @var integer 注：该字段已废弃。
     */
    public $MarkPicId;

    /**
     * @var float 水印图片在输出时的宽度。
当该值为大于1的整数值时，单位为像素，允许范围[1,1920]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面上所占的比例值。
     */
    public $MarkPicWidth;

    /**
     * @var float 水印图片在输出时的高度。
当该值为大于1的整数值时，单位为像素，允许范围[1,1080]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在输出上所占的比例值。
     */
    public $MarkPicHeight;

    /**
     * @var float 水印图片在输出时的X轴坐标。
当该值为大于1的整数值时，单位为像素，允许范围[1,1920]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面上x坐标所占的比例值。
     */
    public $MarkPicLocationX;

    /**
     * @var float 水印图片在输出时的Y坐标。
当该值为大于1的整数值时，单位为像素，允许范围[1,1080]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面Y坐标上所占的比例值。
     */
    public $MarkPicLocationY;

    /**
     * @var string 水印地址。
最大长度256字符，且url需以jpg、jpeg、png、bmp、gif后缀结尾。
     */
    public $MarkPicUrl;

    /**
     * @var string 水印描述。
最大允许长度为256。
     */
    public $Description;

    /**
     * @var boolean 是否启用了等比例缩放。
注：该字段仅做状态保存，无实际效果。
     */
    public $IsEqualProportion;

    /**
     * @param integer $MarkPicIndex 水印图片Index。
     * @param integer $MarkPicId 注：该字段已废弃。
     * @param float $MarkPicWidth 水印图片在输出时的宽度。
当该值为大于1的整数值时，单位为像素，允许范围[1,1920]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面上所占的比例值。
     * @param float $MarkPicHeight 水印图片在输出时的高度。
当该值为大于1的整数值时，单位为像素，允许范围[1,1080]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在输出上所占的比例值。
     * @param float $MarkPicLocationX 水印图片在输出时的X轴坐标。
当该值为大于1的整数值时，单位为像素，允许范围[1,1920]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面上x坐标所占的比例值。
     * @param float $MarkPicLocationY 水印图片在输出时的Y坐标。
当该值为大于1的整数值时，单位为像素，允许范围[1,1080]。 
当该值为小于1大于0的小数时，单位为百分比，表示水印在最终画面Y坐标上所占的比例值。
     * @param string $MarkPicUrl 水印地址。
最大长度256字符，且url需以jpg、jpeg、png、bmp、gif后缀结尾。
     * @param string $Description 水印描述。
最大允许长度为256。
     * @param boolean $IsEqualProportion 是否启用了等比例缩放。
注：该字段仅做状态保存，无实际效果。
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
        if (array_key_exists("MarkPicIndex",$param) and $param["MarkPicIndex"] !== null) {
            $this->MarkPicIndex = $param["MarkPicIndex"];
        }

        if (array_key_exists("MarkPicId",$param) and $param["MarkPicId"] !== null) {
            $this->MarkPicId = $param["MarkPicId"];
        }

        if (array_key_exists("MarkPicWidth",$param) and $param["MarkPicWidth"] !== null) {
            $this->MarkPicWidth = $param["MarkPicWidth"];
        }

        if (array_key_exists("MarkPicHeight",$param) and $param["MarkPicHeight"] !== null) {
            $this->MarkPicHeight = $param["MarkPicHeight"];
        }

        if (array_key_exists("MarkPicLocationX",$param) and $param["MarkPicLocationX"] !== null) {
            $this->MarkPicLocationX = $param["MarkPicLocationX"];
        }

        if (array_key_exists("MarkPicLocationY",$param) and $param["MarkPicLocationY"] !== null) {
            $this->MarkPicLocationY = $param["MarkPicLocationY"];
        }

        if (array_key_exists("MarkPicUrl",$param) and $param["MarkPicUrl"] !== null) {
            $this->MarkPicUrl = $param["MarkPicUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsEqualProportion",$param) and $param["IsEqualProportion"] !== null) {
            $this->IsEqualProportion = $param["IsEqualProportion"];
        }
    }
}

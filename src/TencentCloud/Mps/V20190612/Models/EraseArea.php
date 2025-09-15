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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能擦除，擦除区域坐标配置。
区域由左上角与右下角点的坐标确定。
坐标原点为画面左上角，坐标点可使用像素值或百分比单位指定。
对自动擦除区域：
当单位为%时，坐标范围为[0,1]；
当单位为px时，X值范围为 [0，视频画面宽度]，Y值范围为 [0，视频画面高度]
对指定擦除区域：
当单位为%时，坐标范围为[0,1)；
当单位为px时，X值范围为 [0，视频画面宽度]，Y值范围为 [0，视频画面高度]
 *
 * @method float getLeftTopX() 获取区域左上角X坐标。
如当Unit取1即使用百分比单位时，0.05表示区域左上角离整个画面左上角的横向距离为画面宽度的5%。
 * @method void setLeftTopX(float $LeftTopX) 设置区域左上角X坐标。
如当Unit取1即使用百分比单位时，0.05表示区域左上角离整个画面左上角的横向距离为画面宽度的5%。
 * @method float getLeftTopY() 获取区域左上角Y坐标。
如当Unit取1即使用百分比单位时，0.1表示区域左上角离整个画面左上角的纵向距离为画面高度的10%。
 * @method void setLeftTopY(float $LeftTopY) 设置区域左上角Y坐标。
如当Unit取1即使用百分比单位时，0.1表示区域左上角离整个画面左上角的纵向距离为画面高度的10%。
 * @method float getRightBottomX() 获取区域右下角X坐标。
如当Unit取1即使用百分比单位时，0.75表示区域右下角离整个画面左上角的横向距离为画面宽度的75%。
 * @method void setRightBottomX(float $RightBottomX) 设置区域右下角X坐标。
如当Unit取1即使用百分比单位时，0.75表示区域右下角离整个画面左上角的横向距离为画面宽度的75%。
 * @method float getRightBottomY() 获取区域右下角Y坐标。
如当Unit取1即使用百分比单位时，0.9表示区域右下角离整个画面左上角的纵向距离为画面高度的90%。
 * @method void setRightBottomY(float $RightBottomY) 设置区域右下角Y坐标。
如当Unit取1即使用百分比单位时，0.9表示区域右下角离整个画面左上角的纵向距离为画面高度的90%。
 * @method integer getUnit() 获取坐标单位
- 1 百分比
- 2 像素值
 * @method void setUnit(integer $Unit) 设置坐标单位
- 1 百分比
- 2 像素值
 */
class EraseArea extends AbstractModel
{
    /**
     * @var float 区域左上角X坐标。
如当Unit取1即使用百分比单位时，0.05表示区域左上角离整个画面左上角的横向距离为画面宽度的5%。
     */
    public $LeftTopX;

    /**
     * @var float 区域左上角Y坐标。
如当Unit取1即使用百分比单位时，0.1表示区域左上角离整个画面左上角的纵向距离为画面高度的10%。
     */
    public $LeftTopY;

    /**
     * @var float 区域右下角X坐标。
如当Unit取1即使用百分比单位时，0.75表示区域右下角离整个画面左上角的横向距离为画面宽度的75%。
     */
    public $RightBottomX;

    /**
     * @var float 区域右下角Y坐标。
如当Unit取1即使用百分比单位时，0.9表示区域右下角离整个画面左上角的纵向距离为画面高度的90%。
     */
    public $RightBottomY;

    /**
     * @var integer 坐标单位
- 1 百分比
- 2 像素值
     */
    public $Unit;

    /**
     * @param float $LeftTopX 区域左上角X坐标。
如当Unit取1即使用百分比单位时，0.05表示区域左上角离整个画面左上角的横向距离为画面宽度的5%。
     * @param float $LeftTopY 区域左上角Y坐标。
如当Unit取1即使用百分比单位时，0.1表示区域左上角离整个画面左上角的纵向距离为画面高度的10%。
     * @param float $RightBottomX 区域右下角X坐标。
如当Unit取1即使用百分比单位时，0.75表示区域右下角离整个画面左上角的横向距离为画面宽度的75%。
     * @param float $RightBottomY 区域右下角Y坐标。
如当Unit取1即使用百分比单位时，0.9表示区域右下角离整个画面左上角的纵向距离为画面高度的90%。
     * @param integer $Unit 坐标单位
- 1 百分比
- 2 像素值
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
        if (array_key_exists("LeftTopX",$param) and $param["LeftTopX"] !== null) {
            $this->LeftTopX = $param["LeftTopX"];
        }

        if (array_key_exists("LeftTopY",$param) and $param["LeftTopY"] !== null) {
            $this->LeftTopY = $param["LeftTopY"];
        }

        if (array_key_exists("RightBottomX",$param) and $param["RightBottomX"] !== null) {
            $this->RightBottomX = $param["RightBottomX"];
        }

        if (array_key_exists("RightBottomY",$param) and $param["RightBottomY"] !== null) {
            $this->RightBottomY = $param["RightBottomY"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}

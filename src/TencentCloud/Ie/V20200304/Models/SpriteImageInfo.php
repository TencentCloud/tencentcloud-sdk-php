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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 雪碧图参数信息
注意：雪碧图大图整体的宽和高都不能大于 65000 像素。
 *
 * @method integer getRowCount() 获取表示雪碧图行数，默认：10。
 * @method void setRowCount(integer $RowCount) 设置表示雪碧图行数，默认：10。
 * @method integer getColumnCount() 获取表示雪碧图列数，默认：10。
 * @method void setColumnCount(integer $ColumnCount) 设置表示雪碧图列数，默认：10。
 * @method integer getMarginTop() 获取第一行元素与顶部像素距离，默认：0。
 * @method void setMarginTop(integer $MarginTop) 设置第一行元素与顶部像素距离，默认：0。
 * @method integer getMarginBottom() 获取最后一行元素与底部像素距离，默认：0。
 * @method void setMarginBottom(integer $MarginBottom) 设置最后一行元素与底部像素距离，默认：0。
 * @method integer getMarginLeft() 获取最左一行元素与左边像素距离，默认：0。
 * @method void setMarginLeft(integer $MarginLeft) 设置最左一行元素与左边像素距离，默认：0。
 * @method integer getMarginRight() 获取最右一行元素与右边像素距离，默认：0。
 * @method void setMarginRight(integer $MarginRight) 设置最右一行元素与右边像素距离，默认：0。
 * @method integer getPaddingTop() 获取小图与元素顶部像素距离，默认：0。
 * @method void setPaddingTop(integer $PaddingTop) 设置小图与元素顶部像素距离，默认：0。
 * @method integer getPaddingBottom() 获取小图与元素底部像素距离，默认：0。
 * @method void setPaddingBottom(integer $PaddingBottom) 设置小图与元素底部像素距离，默认：0。
 * @method integer getPaddingLeft() 获取小图与元素左边像素距离，默认：0。
 * @method void setPaddingLeft(integer $PaddingLeft) 设置小图与元素左边像素距离，默认：0。
 * @method integer getPaddingRight() 获取小图与元素右边像素距离，默认：0。
 * @method void setPaddingRight(integer $PaddingRight) 设置小图与元素右边像素距离，默认：0。
 * @method string getBackgroundColor() 获取背景颜色，格式：#RRGGBB，默认：#FFFFFF。
 * @method void setBackgroundColor(string $BackgroundColor) 设置背景颜色，格式：#RRGGBB，默认：#FFFFFF。
 */
class SpriteImageInfo extends AbstractModel
{
    /**
     * @var integer 表示雪碧图行数，默认：10。
     */
    public $RowCount;

    /**
     * @var integer 表示雪碧图列数，默认：10。
     */
    public $ColumnCount;

    /**
     * @var integer 第一行元素与顶部像素距离，默认：0。
     */
    public $MarginTop;

    /**
     * @var integer 最后一行元素与底部像素距离，默认：0。
     */
    public $MarginBottom;

    /**
     * @var integer 最左一行元素与左边像素距离，默认：0。
     */
    public $MarginLeft;

    /**
     * @var integer 最右一行元素与右边像素距离，默认：0。
     */
    public $MarginRight;

    /**
     * @var integer 小图与元素顶部像素距离，默认：0。
     */
    public $PaddingTop;

    /**
     * @var integer 小图与元素底部像素距离，默认：0。
     */
    public $PaddingBottom;

    /**
     * @var integer 小图与元素左边像素距离，默认：0。
     */
    public $PaddingLeft;

    /**
     * @var integer 小图与元素右边像素距离，默认：0。
     */
    public $PaddingRight;

    /**
     * @var string 背景颜色，格式：#RRGGBB，默认：#FFFFFF。
     */
    public $BackgroundColor;

    /**
     * @param integer $RowCount 表示雪碧图行数，默认：10。
     * @param integer $ColumnCount 表示雪碧图列数，默认：10。
     * @param integer $MarginTop 第一行元素与顶部像素距离，默认：0。
     * @param integer $MarginBottom 最后一行元素与底部像素距离，默认：0。
     * @param integer $MarginLeft 最左一行元素与左边像素距离，默认：0。
     * @param integer $MarginRight 最右一行元素与右边像素距离，默认：0。
     * @param integer $PaddingTop 小图与元素顶部像素距离，默认：0。
     * @param integer $PaddingBottom 小图与元素底部像素距离，默认：0。
     * @param integer $PaddingLeft 小图与元素左边像素距离，默认：0。
     * @param integer $PaddingRight 小图与元素右边像素距离，默认：0。
     * @param string $BackgroundColor 背景颜色，格式：#RRGGBB，默认：#FFFFFF。
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
        if (array_key_exists("RowCount",$param) and $param["RowCount"] !== null) {
            $this->RowCount = $param["RowCount"];
        }

        if (array_key_exists("ColumnCount",$param) and $param["ColumnCount"] !== null) {
            $this->ColumnCount = $param["ColumnCount"];
        }

        if (array_key_exists("MarginTop",$param) and $param["MarginTop"] !== null) {
            $this->MarginTop = $param["MarginTop"];
        }

        if (array_key_exists("MarginBottom",$param) and $param["MarginBottom"] !== null) {
            $this->MarginBottom = $param["MarginBottom"];
        }

        if (array_key_exists("MarginLeft",$param) and $param["MarginLeft"] !== null) {
            $this->MarginLeft = $param["MarginLeft"];
        }

        if (array_key_exists("MarginRight",$param) and $param["MarginRight"] !== null) {
            $this->MarginRight = $param["MarginRight"];
        }

        if (array_key_exists("PaddingTop",$param) and $param["PaddingTop"] !== null) {
            $this->PaddingTop = $param["PaddingTop"];
        }

        if (array_key_exists("PaddingBottom",$param) and $param["PaddingBottom"] !== null) {
            $this->PaddingBottom = $param["PaddingBottom"];
        }

        if (array_key_exists("PaddingLeft",$param) and $param["PaddingLeft"] !== null) {
            $this->PaddingLeft = $param["PaddingLeft"];
        }

        if (array_key_exists("PaddingRight",$param) and $param["PaddingRight"] !== null) {
            $this->PaddingRight = $param["PaddingRight"];
        }

        if (array_key_exists("BackgroundColor",$param) and $param["BackgroundColor"] !== null) {
            $this->BackgroundColor = $param["BackgroundColor"];
        }
    }
}

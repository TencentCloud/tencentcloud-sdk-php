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
 * 导播台布局详细参数。
 *
 * @method integer getLayerId() 获取布局层ID。
在画面最终渲染时，将按ID从小到大的顺序，由下至上渲染。
 * @method void setLayerId(integer $LayerId) 设置布局层ID。
在画面最终渲染时，将按ID从小到大的顺序，由下至上渲染。
 * @method float getLayerWidth() 获取布局层宽度。单位为百分比，范围[0.0,1.0]，表示该层在最终画面上所占的比例值。
 * @method void setLayerWidth(float $LayerWidth) 设置布局层宽度。单位为百分比，范围[0.0,1.0]，表示该层在最终画面上所占的比例值。
 * @method float getLayerHeight() 获取布局层高度。单位为百分比，范围[0.0,1.0]， 表示该层在最终画面上所占的比例值。
 * @method void setLayerHeight(float $LayerHeight) 设置布局层高度。单位为百分比，范围[0.0,1.0]， 表示该层在最终画面上所占的比例值。
 * @method float getLayerLocationX() 获取布局层位置x坐标。单位为百分比，范围[0.0,1.0]，表示该层在最终画面上x坐标所占的比例值。
 * @method void setLayerLocationX(float $LayerLocationX) 设置布局层位置x坐标。单位为百分比，范围[0.0,1.0]，表示该层在最终画面上x坐标所占的比例值。
 * @method float getLayerLocationY() 获取布局层位置Y坐标。单位为百分比，范围[0.0,1.0]， 表示该层在最终画面Y坐标上所占的比例值。
 * @method void setLayerLocationY(float $LayerLocationY) 设置布局层位置Y坐标。单位为百分比，范围[0.0,1.0]， 表示该层在最终画面Y坐标上所占的比例值。
 * @method boolean getUsePortraitSegment() 获取是否启用抠图。
 * @method void setUsePortraitSegment(boolean $UsePortraitSegment) 设置是否启用抠图。
 */
class CasterLayoutParam extends AbstractModel
{
    /**
     * @var integer 布局层ID。
在画面最终渲染时，将按ID从小到大的顺序，由下至上渲染。
     */
    public $LayerId;

    /**
     * @var float 布局层宽度。单位为百分比，范围[0.0,1.0]，表示该层在最终画面上所占的比例值。
     */
    public $LayerWidth;

    /**
     * @var float 布局层高度。单位为百分比，范围[0.0,1.0]， 表示该层在最终画面上所占的比例值。
     */
    public $LayerHeight;

    /**
     * @var float 布局层位置x坐标。单位为百分比，范围[0.0,1.0]，表示该层在最终画面上x坐标所占的比例值。
     */
    public $LayerLocationX;

    /**
     * @var float 布局层位置Y坐标。单位为百分比，范围[0.0,1.0]， 表示该层在最终画面Y坐标上所占的比例值。
     */
    public $LayerLocationY;

    /**
     * @var boolean 是否启用抠图。
     */
    public $UsePortraitSegment;

    /**
     * @param integer $LayerId 布局层ID。
在画面最终渲染时，将按ID从小到大的顺序，由下至上渲染。
     * @param float $LayerWidth 布局层宽度。单位为百分比，范围[0.0,1.0]，表示该层在最终画面上所占的比例值。
     * @param float $LayerHeight 布局层高度。单位为百分比，范围[0.0,1.0]， 表示该层在最终画面上所占的比例值。
     * @param float $LayerLocationX 布局层位置x坐标。单位为百分比，范围[0.0,1.0]，表示该层在最终画面上x坐标所占的比例值。
     * @param float $LayerLocationY 布局层位置Y坐标。单位为百分比，范围[0.0,1.0]， 表示该层在最终画面Y坐标上所占的比例值。
     * @param boolean $UsePortraitSegment 是否启用抠图。
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
        if (array_key_exists("LayerId",$param) and $param["LayerId"] !== null) {
            $this->LayerId = $param["LayerId"];
        }

        if (array_key_exists("LayerWidth",$param) and $param["LayerWidth"] !== null) {
            $this->LayerWidth = $param["LayerWidth"];
        }

        if (array_key_exists("LayerHeight",$param) and $param["LayerHeight"] !== null) {
            $this->LayerHeight = $param["LayerHeight"];
        }

        if (array_key_exists("LayerLocationX",$param) and $param["LayerLocationX"] !== null) {
            $this->LayerLocationX = $param["LayerLocationX"];
        }

        if (array_key_exists("LayerLocationY",$param) and $param["LayerLocationY"] !== null) {
            $this->LayerLocationY = $param["LayerLocationY"];
        }

        if (array_key_exists("UsePortraitSegment",$param) and $param["UsePortraitSegment"] !== null) {
            $this->UsePortraitSegment = $param["UsePortraitSegment"];
        }
    }
}

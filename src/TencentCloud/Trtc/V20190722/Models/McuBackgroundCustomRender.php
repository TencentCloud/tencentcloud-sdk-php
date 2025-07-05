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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混流自定义渲染参数
 *
 * @method integer getWidth() 获取自定义渲染画面的宽度，单位为像素值，需大于0，且不能超过子布局的宽。
 * @method void setWidth(integer $Width) 设置自定义渲染画面的宽度，单位为像素值，需大于0，且不能超过子布局的宽。
 * @method integer getHeight() 获取自定义渲染画面的高度，单位为像素值，需大于0，且不能超过子布局的高。
 * @method void setHeight(integer $Height) 设置自定义渲染画面的高度，单位为像素值，需大于0，且不能超过子布局的高。
 * @method integer getRadius() 获取自定义渲染画面的圆角半径，单位为像素值，不能超过渲染画面Width和Height最小值的一半，不指定默认为0，表示直角。
 * @method void setRadius(integer $Radius) 设置自定义渲染画面的圆角半径，单位为像素值，不能超过渲染画面Width和Height最小值的一半，不指定默认为0，表示直角。
 */
class McuBackgroundCustomRender extends AbstractModel
{
    /**
     * @var integer 自定义渲染画面的宽度，单位为像素值，需大于0，且不能超过子布局的宽。
     */
    public $Width;

    /**
     * @var integer 自定义渲染画面的高度，单位为像素值，需大于0，且不能超过子布局的高。
     */
    public $Height;

    /**
     * @var integer 自定义渲染画面的圆角半径，单位为像素值，不能超过渲染画面Width和Height最小值的一半，不指定默认为0，表示直角。
     */
    public $Radius;

    /**
     * @param integer $Width 自定义渲染画面的宽度，单位为像素值，需大于0，且不能超过子布局的宽。
     * @param integer $Height 自定义渲染画面的高度，单位为像素值，需大于0，且不能超过子布局的高。
     * @param integer $Radius 自定义渲染画面的圆角半径，单位为像素值，不能超过渲染画面Width和Height最小值的一半，不指定默认为0，表示直角。
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Radius",$param) and $param["Radius"] !== null) {
            $this->Radius = $param["Radius"];
        }
    }
}

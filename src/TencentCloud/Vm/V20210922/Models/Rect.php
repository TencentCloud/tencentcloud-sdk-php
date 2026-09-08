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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 位置信息
 *
 * @method integer getX() 获取<p>X坐标</p>
 * @method void setX(integer $X) 设置<p>X坐标</p>
 * @method integer getY() 获取<p>Y坐标</p>
 * @method void setY(integer $Y) 设置<p>Y坐标</p>
 * @method integer getWidth() 获取<p>宽</p>
 * @method void setWidth(integer $Width) 设置<p>宽</p>
 * @method integer getHeight() 获取<p>高</p>
 * @method void setHeight(integer $Height) 设置<p>高</p>
 * @method integer getRotate() 获取<p>旋转角度</p>
 * @method void setRotate(integer $Rotate) 设置<p>旋转角度</p>
 */
class Rect extends AbstractModel
{
    /**
     * @var integer <p>X坐标</p>
     */
    public $X;

    /**
     * @var integer <p>Y坐标</p>
     */
    public $Y;

    /**
     * @var integer <p>宽</p>
     */
    public $Width;

    /**
     * @var integer <p>高</p>
     */
    public $Height;

    /**
     * @var integer <p>旋转角度</p>
     */
    public $Rotate;

    /**
     * @param integer $X <p>X坐标</p>
     * @param integer $Y <p>Y坐标</p>
     * @param integer $Width <p>宽</p>
     * @param integer $Height <p>高</p>
     * @param integer $Rotate <p>旋转角度</p>
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }
    }
}

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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指定摄像机在不同方向上的运动或变化
 *
 * @method float getHorizontal() 获取水平运镜，控制摄像机在水平方向上的移动量（沿x轴平移）

取值范围：[-10, 10]，负值表示向左平移，正值表示向右平移
 * @method void setHorizontal(float $Horizontal) 设置水平运镜，控制摄像机在水平方向上的移动量（沿x轴平移）

取值范围：[-10, 10]，负值表示向左平移，正值表示向右平移
 * @method float getVertical() 获取垂直运镜，控制摄像机在垂直方向上的移动量（沿y轴平移）

取值范围：[-10, 10]，负值表示向下平移，正值表示向上平移
 * @method void setVertical(float $Vertical) 设置垂直运镜，控制摄像机在垂直方向上的移动量（沿y轴平移）

取值范围：[-10, 10]，负值表示向下平移，正值表示向上平移
 * @method float getPan() 获取水平摇镜，控制摄像机在水平面上的旋转量（绕y轴旋转）

取值范围：[-10, 10]，负值表示绕y轴向左旋转，正值表示绕y轴向右旋转
 * @method void setPan(float $Pan) 设置水平摇镜，控制摄像机在水平面上的旋转量（绕y轴旋转）

取值范围：[-10, 10]，负值表示绕y轴向左旋转，正值表示绕y轴向右旋转
 * @method float getTilt() 获取垂直摇镜，控制摄像机在垂直面上的旋转量（沿x轴旋转）

取值范围：[-10, 10]，负值表示绕x轴向下旋转，正值表示绕x轴向上旋转
 * @method void setTilt(float $Tilt) 设置垂直摇镜，控制摄像机在垂直面上的旋转量（沿x轴旋转）

取值范围：[-10, 10]，负值表示绕x轴向下旋转，正值表示绕x轴向上旋转
 * @method float getRoll() 获取旋转运镜，控制摄像机的滚动量（绕z轴旋转）

取值范围：[-10, 10]，负值表示绕z轴逆时针旋转，正值表示绕z轴顺时针旋转
 * @method void setRoll(float $Roll) 设置旋转运镜，控制摄像机的滚动量（绕z轴旋转）

取值范围：[-10, 10]，负值表示绕z轴逆时针旋转，正值表示绕z轴顺时针旋转
 * @method float getZoom() 获取变焦，控制摄像机的焦距变化，影响视野的远近

取值范围：[-10, 10]，负值表示焦距变长、视野范围变小，正值表示焦距变短、视野范围变大
 * @method void setZoom(float $Zoom) 设置变焦，控制摄像机的焦距变化，影响视野的远近

取值范围：[-10, 10]，负值表示焦距变长、视野范围变小，正值表示焦距变短、视野范围变大
 */
class CameraControlConfig extends AbstractModel
{
    /**
     * @var float 水平运镜，控制摄像机在水平方向上的移动量（沿x轴平移）

取值范围：[-10, 10]，负值表示向左平移，正值表示向右平移
     */
    public $Horizontal;

    /**
     * @var float 垂直运镜，控制摄像机在垂直方向上的移动量（沿y轴平移）

取值范围：[-10, 10]，负值表示向下平移，正值表示向上平移
     */
    public $Vertical;

    /**
     * @var float 水平摇镜，控制摄像机在水平面上的旋转量（绕y轴旋转）

取值范围：[-10, 10]，负值表示绕y轴向左旋转，正值表示绕y轴向右旋转
     */
    public $Pan;

    /**
     * @var float 垂直摇镜，控制摄像机在垂直面上的旋转量（沿x轴旋转）

取值范围：[-10, 10]，负值表示绕x轴向下旋转，正值表示绕x轴向上旋转
     */
    public $Tilt;

    /**
     * @var float 旋转运镜，控制摄像机的滚动量（绕z轴旋转）

取值范围：[-10, 10]，负值表示绕z轴逆时针旋转，正值表示绕z轴顺时针旋转
     */
    public $Roll;

    /**
     * @var float 变焦，控制摄像机的焦距变化，影响视野的远近

取值范围：[-10, 10]，负值表示焦距变长、视野范围变小，正值表示焦距变短、视野范围变大
     */
    public $Zoom;

    /**
     * @param float $Horizontal 水平运镜，控制摄像机在水平方向上的移动量（沿x轴平移）

取值范围：[-10, 10]，负值表示向左平移，正值表示向右平移
     * @param float $Vertical 垂直运镜，控制摄像机在垂直方向上的移动量（沿y轴平移）

取值范围：[-10, 10]，负值表示向下平移，正值表示向上平移
     * @param float $Pan 水平摇镜，控制摄像机在水平面上的旋转量（绕y轴旋转）

取值范围：[-10, 10]，负值表示绕y轴向左旋转，正值表示绕y轴向右旋转
     * @param float $Tilt 垂直摇镜，控制摄像机在垂直面上的旋转量（沿x轴旋转）

取值范围：[-10, 10]，负值表示绕x轴向下旋转，正值表示绕x轴向上旋转
     * @param float $Roll 旋转运镜，控制摄像机的滚动量（绕z轴旋转）

取值范围：[-10, 10]，负值表示绕z轴逆时针旋转，正值表示绕z轴顺时针旋转
     * @param float $Zoom 变焦，控制摄像机的焦距变化，影响视野的远近

取值范围：[-10, 10]，负值表示焦距变长、视野范围变小，正值表示焦距变短、视野范围变大
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
        if (array_key_exists("Horizontal",$param) and $param["Horizontal"] !== null) {
            $this->Horizontal = $param["Horizontal"];
        }

        if (array_key_exists("Vertical",$param) and $param["Vertical"] !== null) {
            $this->Vertical = $param["Vertical"];
        }

        if (array_key_exists("Pan",$param) and $param["Pan"] !== null) {
            $this->Pan = $param["Pan"];
        }

        if (array_key_exists("Tilt",$param) and $param["Tilt"] !== null) {
            $this->Tilt = $param["Tilt"];
        }

        if (array_key_exists("Roll",$param) and $param["Roll"] !== null) {
            $this->Roll = $param["Roll"];
        }

        if (array_key_exists("Zoom",$param) and $param["Zoom"] !== null) {
            $this->Zoom = $param["Zoom"];
        }
    }
}

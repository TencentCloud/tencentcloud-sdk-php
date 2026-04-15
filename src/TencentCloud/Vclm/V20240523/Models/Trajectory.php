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
 * 运动轨迹坐标序列
 *
 * @method integer getX() 获取轨迹点横坐标（在像素二维坐标系下，以输入图片image左下为原点的像素坐标）
 * @method void setX(integer $X) 设置轨迹点横坐标（在像素二维坐标系下，以输入图片image左下为原点的像素坐标）
 * @method integer getY() 获取轨迹点纵坐标（在像素二维坐标系下，以输入图片image左下为原点的像素坐标）
 * @method void setY(integer $Y) 设置轨迹点纵坐标（在像素二维坐标系下，以输入图片image左下为原点的像素坐标）
 */
class Trajectory extends AbstractModel
{
    /**
     * @var integer 轨迹点横坐标（在像素二维坐标系下，以输入图片image左下为原点的像素坐标）
     */
    public $X;

    /**
     * @var integer 轨迹点纵坐标（在像素二维坐标系下，以输入图片image左下为原点的像素坐标）
     */
    public $Y;

    /**
     * @param integer $X 轨迹点横坐标（在像素二维坐标系下，以输入图片image左下为原点的像素坐标）
     * @param integer $Y 轨迹点纵坐标（在像素二维坐标系下，以输入图片image左下为原点的像素坐标）
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
    }
}

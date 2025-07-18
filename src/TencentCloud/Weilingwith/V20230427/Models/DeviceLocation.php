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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备点位坐标值
 *
 * @method float getX() 获取点位X坐标值
 * @method void setX(float $X) 设置点位X坐标值
 * @method float getY() 获取点位Y坐标值
 * @method void setY(float $Y) 设置点位Y坐标值
 * @method float getZ() 获取点位Z坐标值
 * @method void setZ(float $Z) 设置点位Z坐标值
 */
class DeviceLocation extends AbstractModel
{
    /**
     * @var float 点位X坐标值
     */
    public $X;

    /**
     * @var float 点位Y坐标值
     */
    public $Y;

    /**
     * @var float 点位Z坐标值
     */
    public $Z;

    /**
     * @param float $X 点位X坐标值
     * @param float $Y 点位Y坐标值
     * @param float $Z 点位Z坐标值
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

        if (array_key_exists("Z",$param) and $param["Z"] !== null) {
            $this->Z = $param["Z"];
        }
    }
}

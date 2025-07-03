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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构件平移信息
 *
 * @method float getX() 获取X方向偏移量
 * @method void setX(float $X) 设置X方向偏移量
 * @method float getY() 获取Y方向偏移量
 * @method void setY(float $Y) 设置Y方向偏移量
 * @method float getZ() 获取Z方向偏移量
 * @method void setZ(float $Z) 设置Z方向偏移量
 */
class ElementTranslate extends AbstractModel
{
    /**
     * @var float X方向偏移量
     */
    public $X;

    /**
     * @var float Y方向偏移量
     */
    public $Y;

    /**
     * @var float Z方向偏移量
     */
    public $Z;

    /**
     * @param float $X X方向偏移量
     * @param float $Y Y方向偏移量
     * @param float $Z Z方向偏移量
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

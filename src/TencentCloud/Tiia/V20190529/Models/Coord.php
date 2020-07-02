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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 汽车坐标信息
 *
 * @method integer getX() 获取横坐标x
 * @method void setX(integer $X) 设置横坐标x
 * @method integer getY() 获取纵坐标y
 * @method void setY(integer $Y) 设置纵坐标y
 */
class Coord extends AbstractModel
{
    /**
     * @var integer 横坐标x
     */
    public $X;

    /**
     * @var integer 纵坐标y
     */
    public $Y;

    /**
     * @param integer $X 横坐标x
     * @param integer $Y 纵坐标y
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
        if (array_key_exists('X',$param) and $param['X'] !== null) {
            $this->X = $param['X'];
        }

        if (array_key_exists('Y',$param) and $param['Y'] !== null) {
            $this->Y = $param['Y'];
        }
    }
}

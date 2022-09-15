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
 * 具体坐标，可用来判断边界
 *
 * @method integer getX() 获取x轴坐标
 * @method void setX(integer $X) 设置x轴坐标
 * @method integer getY() 获取y轴坐标
 * @method void setY(integer $Y) 设置y轴坐标
 * @method integer getWidth() 获取(x,y)坐标距离长度
 * @method void setWidth(integer $Width) 设置(x,y)坐标距离长度
 * @method integer getHeight() 获取(x,y)坐标距离高度
 * @method void setHeight(integer $Height) 设置(x,y)坐标距离高度
 */
class Rect extends AbstractModel
{
    /**
     * @var integer x轴坐标
     */
    public $X;

    /**
     * @var integer y轴坐标
     */
    public $Y;

    /**
     * @var integer (x,y)坐标距离长度
     */
    public $Width;

    /**
     * @var integer (x,y)坐标距离高度
     */
    public $Height;

    /**
     * @param integer $X x轴坐标
     * @param integer $Y y轴坐标
     * @param integer $Width (x,y)坐标距离长度
     * @param integer $Height (x,y)坐标距离高度
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
    }
}

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
namespace TencentCloud\Hcm\V20181106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标算式在图片上的坐标信息
 *
 * @method integer getHeight() 获取算式高度
 * @method void setHeight(integer $Height) 设置算式高度
 * @method integer getWidth() 获取算式宽度
 * @method void setWidth(integer $Width) 设置算式宽度
 * @method integer getX() 获取算式图的左上角横坐标
 * @method void setX(integer $X) 设置算式图的左上角横坐标
 * @method integer getY() 获取算式图的左上角纵坐标
 * @method void setY(integer $Y) 设置算式图的左上角纵坐标
 */
class ItemCoord extends AbstractModel
{
    /**
     * @var integer 算式高度
     */
    public $Height;

    /**
     * @var integer 算式宽度
     */
    public $Width;

    /**
     * @var integer 算式图的左上角横坐标
     */
    public $X;

    /**
     * @var integer 算式图的左上角纵坐标
     */
    public $Y;

    /**
     * @param integer $Height 算式高度
     * @param integer $Width 算式宽度
     * @param integer $X 算式图的左上角横坐标
     * @param integer $Y 算式图的左上角纵坐标
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
        if (array_key_exists('Height',$param) and $param['Height'] !== null) {
            $this->Height = $param['Height'];
        }

        if (array_key_exists('Width',$param) and $param['Width'] !== null) {
            $this->Width = $param['Width'];
        }

        if (array_key_exists('X',$param) and $param['X'] !== null) {
            $this->X = $param['X'];
        }

        if (array_key_exists('Y',$param) and $param['Y'] !== null) {
            $this->Y = $param['Y'];
        }
    }
}

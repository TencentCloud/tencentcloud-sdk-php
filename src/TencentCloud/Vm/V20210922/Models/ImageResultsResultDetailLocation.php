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
 * 图片详情位置信息
 *
 * @method float getX() 获取x坐标
 * @method void setX(float $X) 设置x坐标
 * @method float getY() 获取y坐标
 * @method void setY(float $Y) 设置y坐标
 * @method integer getWidth() 获取宽度
 * @method void setWidth(integer $Width) 设置宽度
 * @method integer getHeight() 获取高度
 * @method void setHeight(integer $Height) 设置高度
 * @method float getRotate() 获取旋转角度
 * @method void setRotate(float $Rotate) 设置旋转角度
 */
class ImageResultsResultDetailLocation extends AbstractModel
{
    /**
     * @var float x坐标
     */
    public $X;

    /**
     * @var float y坐标
     */
    public $Y;

    /**
     * @var integer 宽度
     */
    public $Width;

    /**
     * @var integer 高度
     */
    public $Height;

    /**
     * @var float 旋转角度
     */
    public $Rotate;

    /**
     * @param float $X x坐标
     * @param float $Y y坐标
     * @param integer $Width 宽度
     * @param integer $Height 高度
     * @param float $Rotate 旋转角度
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

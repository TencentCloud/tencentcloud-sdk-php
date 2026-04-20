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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸框坐标
 *
 * @method integer getX() 获取<p>人脸框左上角横坐标。</p>
 * @method void setX(integer $X) 设置<p>人脸框左上角横坐标。</p>
 * @method integer getY() 获取<p>人脸框左上角纵坐标。</p>
 * @method void setY(integer $Y) 设置<p>人脸框左上角纵坐标。</p>
 * @method integer getWidth() 获取<p>人脸框宽度。<br>单位：px</p>
 * @method void setWidth(integer $Width) 设置<p>人脸框宽度。<br>单位：px</p>
 * @method integer getHeight() 获取<p>人脸框高度。<br>单位：px</p>
 * @method void setHeight(integer $Height) 设置<p>人脸框高度。<br>单位：px</p>
 */
class Rect extends AbstractModel
{
    /**
     * @var integer <p>人脸框左上角横坐标。</p>
     */
    public $X;

    /**
     * @var integer <p>人脸框左上角纵坐标。</p>
     */
    public $Y;

    /**
     * @var integer <p>人脸框宽度。<br>单位：px</p>
     */
    public $Width;

    /**
     * @var integer <p>人脸框高度。<br>单位：px</p>
     */
    public $Height;

    /**
     * @param integer $X <p>人脸框左上角横坐标。</p>
     * @param integer $Y <p>人脸框左上角纵坐标。</p>
     * @param integer $Width <p>人脸框宽度。<br>单位：px</p>
     * @param integer $Height <p>人脸框高度。<br>单位：px</p>
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

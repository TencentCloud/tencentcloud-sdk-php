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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）
 *
 * @method integer getX() 获取<p>左上角x。</p>
 * @method void setX(integer $X) 设置<p>左上角x。</p>
 * @method integer getY() 获取<p>左上角y。</p>
 * @method void setY(integer $Y) 设置<p>左上角y。</p>
 * @method integer getWidth() 获取<p>宽width。</p>
 * @method void setWidth(integer $Width) 设置<p>宽width。</p>
 * @method integer getHeight() 获取<p>高height。</p>
 * @method void setHeight(integer $Height) 设置<p>高height。</p>
 */
class ItemCoord extends AbstractModel
{
    /**
     * @var integer <p>左上角x。</p>
     */
    public $X;

    /**
     * @var integer <p>左上角y。</p>
     */
    public $Y;

    /**
     * @var integer <p>宽width。</p>
     */
    public $Width;

    /**
     * @var integer <p>高height。</p>
     */
    public $Height;

    /**
     * @param integer $X <p>左上角x。</p>
     * @param integer $Y <p>左上角y。</p>
     * @param integer $Width <p>宽width。</p>
     * @param integer $Height <p>高height。</p>
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

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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图像坐标点结构体
 *
 * @method integer getX() 获取<p>横坐标，单位像素，取值范围 [0, 图像宽度]</p>
 * @method void setX(integer $X) 设置<p>横坐标，单位像素，取值范围 [0, 图像宽度]</p>
 * @method integer getY() 获取<p>纵坐标，单位像素，取值范围 [0, 图像高度]</p>
 * @method void setY(integer $Y) 设置<p>纵坐标，单位像素，取值范围 [0, 图像高度]</p>
 */
class Point extends AbstractModel
{
    /**
     * @var integer <p>横坐标，单位像素，取值范围 [0, 图像宽度]</p>
     */
    public $X;

    /**
     * @var integer <p>纵坐标，单位像素，取值范围 [0, 图像高度]</p>
     */
    public $Y;

    /**
     * @param integer $X <p>横坐标，单位像素，取值范围 [0, 图像宽度]</p>
     * @param integer $Y <p>纵坐标，单位像素，取值范围 [0, 图像高度]</p>
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

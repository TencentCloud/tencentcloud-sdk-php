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
 * 文本的坐标，以四个顶点坐标表示
注意：此字段可能返回 null，表示取不到有效值
 *
 * @method Coord getLeftTop() 获取<p>左上顶点坐标</p>
 * @method void setLeftTop(Coord $LeftTop) 设置<p>左上顶点坐标</p>
 * @method Coord getRightTop() 获取<p>右上顶点坐标</p>
 * @method void setRightTop(Coord $RightTop) 设置<p>右上顶点坐标</p>
 * @method Coord getRightBottom() 获取<p>右下顶点坐标</p>
 * @method void setRightBottom(Coord $RightBottom) 设置<p>右下顶点坐标</p>
 * @method Coord getLeftBottom() 获取<p>左下顶点坐标</p>
 * @method void setLeftBottom(Coord $LeftBottom) 设置<p>左下顶点坐标</p>
 */
class Polygon extends AbstractModel
{
    /**
     * @var Coord <p>左上顶点坐标</p>
     */
    public $LeftTop;

    /**
     * @var Coord <p>右上顶点坐标</p>
     */
    public $RightTop;

    /**
     * @var Coord <p>右下顶点坐标</p>
     */
    public $RightBottom;

    /**
     * @var Coord <p>左下顶点坐标</p>
     */
    public $LeftBottom;

    /**
     * @param Coord $LeftTop <p>左上顶点坐标</p>
     * @param Coord $RightTop <p>右上顶点坐标</p>
     * @param Coord $RightBottom <p>右下顶点坐标</p>
     * @param Coord $LeftBottom <p>左下顶点坐标</p>
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
        if (array_key_exists("LeftTop",$param) and $param["LeftTop"] !== null) {
            $this->LeftTop = new Coord();
            $this->LeftTop->deserialize($param["LeftTop"]);
        }

        if (array_key_exists("RightTop",$param) and $param["RightTop"] !== null) {
            $this->RightTop = new Coord();
            $this->RightTop->deserialize($param["RightTop"]);
        }

        if (array_key_exists("RightBottom",$param) and $param["RightBottom"] !== null) {
            $this->RightBottom = new Coord();
            $this->RightBottom->deserialize($param["RightBottom"]);
        }

        if (array_key_exists("LeftBottom",$param) and $param["LeftBottom"] !== null) {
            $this->LeftBottom = new Coord();
            $this->LeftBottom->deserialize($param["LeftBottom"]);
        }
    }
}

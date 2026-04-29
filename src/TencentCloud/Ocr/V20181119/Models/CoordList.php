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
 * 坐标数组
 *
 * @method Coord getTopLeft() 获取<p>左上角坐标。</p>
 * @method void setTopLeft(Coord $TopLeft) 设置<p>左上角坐标。</p>
 * @method Coord getTopRight() 获取<p>右上角坐标。</p>
 * @method void setTopRight(Coord $TopRight) 设置<p>右上角坐标。</p>
 * @method Coord getBottomLeft() 获取<p>左下角坐标。</p>
 * @method void setBottomLeft(Coord $BottomLeft) 设置<p>左下角坐标。</p>
 * @method Coord getBottomRight() 获取<p>右下角坐标。</p>
 * @method void setBottomRight(Coord $BottomRight) 设置<p>右下角坐标。</p>
 */
class CoordList extends AbstractModel
{
    /**
     * @var Coord <p>左上角坐标。</p>
     */
    public $TopLeft;

    /**
     * @var Coord <p>右上角坐标。</p>
     */
    public $TopRight;

    /**
     * @var Coord <p>左下角坐标。</p>
     */
    public $BottomLeft;

    /**
     * @var Coord <p>右下角坐标。</p>
     */
    public $BottomRight;

    /**
     * @param Coord $TopLeft <p>左上角坐标。</p>
     * @param Coord $TopRight <p>右上角坐标。</p>
     * @param Coord $BottomLeft <p>左下角坐标。</p>
     * @param Coord $BottomRight <p>右下角坐标。</p>
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
        if (array_key_exists("TopLeft",$param) and $param["TopLeft"] !== null) {
            $this->TopLeft = new Coord();
            $this->TopLeft->deserialize($param["TopLeft"]);
        }

        if (array_key_exists("TopRight",$param) and $param["TopRight"] !== null) {
            $this->TopRight = new Coord();
            $this->TopRight->deserialize($param["TopRight"]);
        }

        if (array_key_exists("BottomLeft",$param) and $param["BottomLeft"] !== null) {
            $this->BottomLeft = new Coord();
            $this->BottomLeft->deserialize($param["BottomLeft"]);
        }

        if (array_key_exists("BottomRight",$param) and $param["BottomRight"] !== null) {
            $this->BottomRight = new Coord();
            $this->BottomRight->deserialize($param["BottomRight"]);
        }
    }
}

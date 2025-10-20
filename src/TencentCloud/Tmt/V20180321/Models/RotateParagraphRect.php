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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 段落文本旋转信息
 *
 * @method array getCoord() 获取段落文本坐标
 * @method void setCoord(array $Coord) 设置段落文本坐标
 * @method float getTiltAngle() 获取旋转角度
 * @method void setTiltAngle(float $TiltAngle) 设置旋转角度
 * @method boolean getValid() 获取段落文本信息是否有效
 * @method void setValid(boolean $Valid) 设置段落文本信息是否有效
 */
class RotateParagraphRect extends AbstractModel
{
    /**
     * @var array 段落文本坐标
     */
    public $Coord;

    /**
     * @var float 旋转角度
     */
    public $TiltAngle;

    /**
     * @var boolean 段落文本信息是否有效
     */
    public $Valid;

    /**
     * @param array $Coord 段落文本坐标
     * @param float $TiltAngle 旋转角度
     * @param boolean $Valid 段落文本信息是否有效
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
        if (array_key_exists("Coord",$param) and $param["Coord"] !== null) {
            $this->Coord = [];
            foreach ($param["Coord"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Coord, $obj);
            }
        }

        if (array_key_exists("TiltAngle",$param) and $param["TiltAngle"] !== null) {
            $this->TiltAngle = $param["TiltAngle"];
        }

        if (array_key_exists("Valid",$param) and $param["Valid"] !== null) {
            $this->Valid = $param["Valid"];
        }
    }
}

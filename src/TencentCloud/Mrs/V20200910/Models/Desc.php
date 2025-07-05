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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述
 *
 * @method string getText() 获取描述
 * @method void setText(string $Text) 设置描述
 * @method array getOrgan() 获取器官
 * @method void setOrgan(array $Organ) 设置器官
 * @method array getTuber() 获取结节
 * @method void setTuber(array $Tuber) 设置结节
 * @method array getCoords() 获取坐标
 * @method void setCoords(array $Coords) 设置坐标
 */
class Desc extends AbstractModel
{
    /**
     * @var string 描述
     */
    public $Text;

    /**
     * @var array 器官
     */
    public $Organ;

    /**
     * @var array 结节
     */
    public $Tuber;

    /**
     * @var array 坐标
     */
    public $Coords;

    /**
     * @param string $Text 描述
     * @param array $Organ 器官
     * @param array $Tuber 结节
     * @param array $Coords 坐标
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Organ",$param) and $param["Organ"] !== null) {
            $this->Organ = [];
            foreach ($param["Organ"] as $key => $value){
                $obj = new Organ();
                $obj->deserialize($value);
                array_push($this->Organ, $obj);
            }
        }

        if (array_key_exists("Tuber",$param) and $param["Tuber"] !== null) {
            $this->Tuber = [];
            foreach ($param["Tuber"] as $key => $value){
                $obj = new TuberInfo();
                $obj->deserialize($value);
                array_push($this->Tuber, $obj);
            }
        }

        if (array_key_exists("Coords",$param) and $param["Coords"] !== null) {
            $this->Coords = [];
            foreach ($param["Coords"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Coords, $obj);
            }
        }
    }
}

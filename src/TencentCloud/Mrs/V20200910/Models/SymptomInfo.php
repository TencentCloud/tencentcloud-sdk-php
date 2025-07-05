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
 * 病症描述信息
 *
 * @method BlockInfo getGrade() 获取等级
 * @method void setGrade(BlockInfo $Grade) 设置等级
 * @method Part getPart() 获取部位
 * @method void setPart(Part $Part) 设置部位
 * @method array getIndex() 获取原文位置
 * @method void setIndex(array $Index) 设置原文位置
 * @method BlockInfo getSymptom() 获取病变
 * @method void setSymptom(BlockInfo $Symptom) 设置病变
 * @method array getAttrs() 获取属性
 * @method void setAttrs(array $Attrs) 设置属性
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method array getCoords() 获取坐标
 * @method void setCoords(array $Coords) 设置坐标
 */
class SymptomInfo extends AbstractModel
{
    /**
     * @var BlockInfo 等级
     */
    public $Grade;

    /**
     * @var Part 部位
     */
    public $Part;

    /**
     * @var array 原文位置
     */
    public $Index;

    /**
     * @var BlockInfo 病变
     */
    public $Symptom;

    /**
     * @var array 属性
     */
    public $Attrs;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var array 坐标
     */
    public $Coords;

    /**
     * @param BlockInfo $Grade 等级
     * @param Part $Part 部位
     * @param array $Index 原文位置
     * @param BlockInfo $Symptom 病变
     * @param array $Attrs 属性
     * @param string $Src 原文
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
        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = new BlockInfo();
            $this->Grade->deserialize($param["Grade"]);
        }

        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = new Part();
            $this->Part->deserialize($param["Part"]);
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Symptom",$param) and $param["Symptom"] !== null) {
            $this->Symptom = new BlockInfo();
            $this->Symptom->deserialize($param["Symptom"]);
        }

        if (array_key_exists("Attrs",$param) and $param["Attrs"] !== null) {
            $this->Attrs = [];
            foreach ($param["Attrs"] as $key => $value){
                $obj = new BlockInfo();
                $obj->deserialize($value);
                array_push($this->Attrs, $obj);
            }
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
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

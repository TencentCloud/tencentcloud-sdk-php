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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内窥部位
 *
 * @method Part getPart() 获取部位
 * @method void setPart(Part $Part) 设置部位
 * @method array getIndex() 获取原文位置
 * @method void setIndex(array $Index) 设置原文位置
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method string getPartAlias() 获取部位别名
 * @method void setPartAlias(string $PartAlias) 设置部位别名
 * @method array getSymDescList() 获取症状描述
 * @method void setSymDescList(array $SymDescList) 设置症状描述
 * @method array getCoords() 获取坐标
 * @method void setCoords(array $Coords) 设置坐标
 */
class EndoscopyOrgan extends AbstractModel
{
    /**
     * @var Part 部位
     */
    public $Part;

    /**
     * @var array 原文位置
     */
    public $Index;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var string 部位别名
     */
    public $PartAlias;

    /**
     * @var array 症状描述
     */
    public $SymDescList;

    /**
     * @var array 坐标
     */
    public $Coords;

    /**
     * @param Part $Part 部位
     * @param array $Index 原文位置
     * @param string $Src 原文
     * @param string $PartAlias 部位别名
     * @param array $SymDescList 症状描述
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
        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = new Part();
            $this->Part->deserialize($param["Part"]);
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("PartAlias",$param) and $param["PartAlias"] !== null) {
            $this->PartAlias = $param["PartAlias"];
        }

        if (array_key_exists("SymDescList",$param) and $param["SymDescList"] !== null) {
            $this->SymDescList = [];
            foreach ($param["SymDescList"] as $key => $value){
                $obj = new BlockInfo();
                $obj->deserialize($value);
                array_push($this->SymDescList, $obj);
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

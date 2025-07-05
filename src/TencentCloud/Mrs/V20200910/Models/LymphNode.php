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
 * 单淋巴结转移信息
 *
 * @method string getName() 获取项目名称
 * @method void setName(string $Name) 设置项目名称
 * @method array getIndex() 获取索引
 * @method void setIndex(array $Index) 设置索引
 * @method Part getPart() 获取部位
 * @method void setPart(Part $Part) 设置部位
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method integer getTotal() 获取总数量
 * @method void setTotal(integer $Total) 设置总数量
 * @method integer getTransferNum() 获取转移数量
 * @method void setTransferNum(integer $TransferNum) 设置转移数量
 * @method array getSizes() 获取淋巴结大小
 * @method void setSizes(array $Sizes) 设置淋巴结大小
 * @method array getCoords() 获取原文对应坐标
 * @method void setCoords(array $Coords) 设置原文对应坐标
 */
class LymphNode extends AbstractModel
{
    /**
     * @var string 项目名称
     */
    public $Name;

    /**
     * @var array 索引
     */
    public $Index;

    /**
     * @var Part 部位
     */
    public $Part;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var integer 总数量
     */
    public $Total;

    /**
     * @var integer 转移数量
     */
    public $TransferNum;

    /**
     * @var array 淋巴结大小
     */
    public $Sizes;

    /**
     * @var array 原文对应坐标
     */
    public $Coords;

    /**
     * @param string $Name 项目名称
     * @param array $Index 索引
     * @param Part $Part 部位
     * @param string $Src 原文
     * @param integer $Total 总数量
     * @param integer $TransferNum 转移数量
     * @param array $Sizes 淋巴结大小
     * @param array $Coords 原文对应坐标
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = new Part();
            $this->Part->deserialize($param["Part"]);
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TransferNum",$param) and $param["TransferNum"] !== null) {
            $this->TransferNum = $param["TransferNum"];
        }

        if (array_key_exists("Sizes",$param) and $param["Sizes"] !== null) {
            $this->Sizes = $param["Sizes"];
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

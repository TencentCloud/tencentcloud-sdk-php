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
 * 检验指标项
 *
 * @method string getCode() 获取英文缩写
 * @method void setCode(string $Code) 设置英文缩写
 * @method string getScode() 获取标准缩写
 * @method void setScode(string $Scode) 设置标准缩写
 * @method string getName() 获取项目名称
 * @method void setName(string $Name) 设置项目名称
 * @method string getSname() 获取标准名
 * @method void setSname(string $Sname) 设置标准名
 * @method string getResult() 获取结果
 * @method void setResult(string $Result) 设置结果
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 * @method string getRange() 获取参考范围
 * @method void setRange(string $Range) 设置参考范围
 * @method string getArrow() 获取上下箭头
 * @method void setArrow(string $Arrow) 设置上下箭头
 * @method boolean getNormal() 获取是否正常
 * @method void setNormal(boolean $Normal) 设置是否正常
 * @method string getItemString() 获取项目原文
 * @method void setItemString(string $ItemString) 设置项目原文
 * @method integer getId() 获取指标项ID
 * @method void setId(integer $Id) 设置指标项ID
 * @method Coordinate getCoords() 获取指标项坐标位置
 * @method void setCoords(Coordinate $Coords) 设置指标项坐标位置
 * @method string getInferNormal() 获取推测结果是否异常
 * @method void setInferNormal(string $InferNormal) 设置推测结果是否异常
 * @method string getSample() 获取标本
 * @method void setSample(string $Sample) 设置标本
 * @method string getMethod() 获取检测方法
 * @method void setMethod(string $Method) 设置检测方法
 */
class IndicatorItem extends AbstractModel
{
    /**
     * @var string 英文缩写
     */
    public $Code;

    /**
     * @var string 标准缩写
     */
    public $Scode;

    /**
     * @var string 项目名称
     */
    public $Name;

    /**
     * @var string 标准名
     */
    public $Sname;

    /**
     * @var string 结果
     */
    public $Result;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @var string 参考范围
     */
    public $Range;

    /**
     * @var string 上下箭头
     */
    public $Arrow;

    /**
     * @var boolean 是否正常
     */
    public $Normal;

    /**
     * @var string 项目原文
     */
    public $ItemString;

    /**
     * @var integer 指标项ID
     */
    public $Id;

    /**
     * @var Coordinate 指标项坐标位置
     */
    public $Coords;

    /**
     * @var string 推测结果是否异常
     */
    public $InferNormal;

    /**
     * @var string 标本
     */
    public $Sample;

    /**
     * @var string 检测方法
     */
    public $Method;

    /**
     * @param string $Code 英文缩写
     * @param string $Scode 标准缩写
     * @param string $Name 项目名称
     * @param string $Sname 标准名
     * @param string $Result 结果
     * @param string $Unit 单位
     * @param string $Range 参考范围
     * @param string $Arrow 上下箭头
     * @param boolean $Normal 是否正常
     * @param string $ItemString 项目原文
     * @param integer $Id 指标项ID
     * @param Coordinate $Coords 指标项坐标位置
     * @param string $InferNormal 推测结果是否异常
     * @param string $Sample 标本
     * @param string $Method 检测方法
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Scode",$param) and $param["Scode"] !== null) {
            $this->Scode = $param["Scode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sname",$param) and $param["Sname"] !== null) {
            $this->Sname = $param["Sname"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }

        if (array_key_exists("Arrow",$param) and $param["Arrow"] !== null) {
            $this->Arrow = $param["Arrow"];
        }

        if (array_key_exists("Normal",$param) and $param["Normal"] !== null) {
            $this->Normal = $param["Normal"];
        }

        if (array_key_exists("ItemString",$param) and $param["ItemString"] !== null) {
            $this->ItemString = $param["ItemString"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Coords",$param) and $param["Coords"] !== null) {
            $this->Coords = new Coordinate();
            $this->Coords->deserialize($param["Coords"]);
        }

        if (array_key_exists("InferNormal",$param) and $param["InferNormal"] !== null) {
            $this->InferNormal = $param["InferNormal"];
        }

        if (array_key_exists("Sample",$param) and $param["Sample"] !== null) {
            $this->Sample = $param["Sample"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}

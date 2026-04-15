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
 * @method string getCode() 获取<p>英文缩写</p>
 * @method void setCode(string $Code) 设置<p>英文缩写</p>
 * @method string getScode() 获取<p>标准缩写</p>
 * @method void setScode(string $Scode) 设置<p>标准缩写</p>
 * @method string getName() 获取<p>项目名称</p>
 * @method void setName(string $Name) 设置<p>项目名称</p>
 * @method string getSname() 获取<p>标准名</p>
 * @method void setSname(string $Sname) 设置<p>标准名</p>
 * @method string getResult() 获取<p>结果</p>
 * @method void setResult(string $Result) 设置<p>结果</p>
 * @method string getUnit() 获取<p>单位</p>
 * @method void setUnit(string $Unit) 设置<p>单位</p>
 * @method string getRange() 获取<p>参考范围</p>
 * @method void setRange(string $Range) 设置<p>参考范围</p>
 * @method string getArrow() 获取<p>上下箭头</p>
 * @method void setArrow(string $Arrow) 设置<p>上下箭头</p>
 * @method boolean getNormal() 获取<p>是否正常</p>
 * @method void setNormal(boolean $Normal) 设置<p>是否正常</p>
 * @method string getItemString() 获取<p>项目原文</p>
 * @method void setItemString(string $ItemString) 设置<p>项目原文</p>
 * @method integer getId() 获取<p>指标项ID</p>
 * @method void setId(integer $Id) 设置<p>指标项ID</p>
 * @method Coordinate getCoords() 获取<p>指标项坐标位置</p>
 * @method void setCoords(Coordinate $Coords) 设置<p>指标项坐标位置</p>
 * @method string getInferNormal() 获取<p>推测结果是否异常</p>
 * @method void setInferNormal(string $InferNormal) 设置<p>推测结果是否异常</p>
 * @method string getSample() 获取<p>标本</p>
 * @method void setSample(string $Sample) 设置<p>标本</p>
 * @method string getMethod() 获取<p>检测方法</p>
 * @method void setMethod(string $Method) 设置<p>检测方法</p>
 * @method ItemCoordinate getItemCoords() 获取<p>检验指标项坐标信息</p>
 * @method void setItemCoords(ItemCoordinate $ItemCoords) 设置<p>检验指标项坐标信息</p>
 */
class IndicatorItem extends AbstractModel
{
    /**
     * @var string <p>英文缩写</p>
     */
    public $Code;

    /**
     * @var string <p>标准缩写</p>
     */
    public $Scode;

    /**
     * @var string <p>项目名称</p>
     */
    public $Name;

    /**
     * @var string <p>标准名</p>
     */
    public $Sname;

    /**
     * @var string <p>结果</p>
     */
    public $Result;

    /**
     * @var string <p>单位</p>
     */
    public $Unit;

    /**
     * @var string <p>参考范围</p>
     */
    public $Range;

    /**
     * @var string <p>上下箭头</p>
     */
    public $Arrow;

    /**
     * @var boolean <p>是否正常</p>
     */
    public $Normal;

    /**
     * @var string <p>项目原文</p>
     */
    public $ItemString;

    /**
     * @var integer <p>指标项ID</p>
     */
    public $Id;

    /**
     * @var Coordinate <p>指标项坐标位置</p>
     * @deprecated
     */
    public $Coords;

    /**
     * @var string <p>推测结果是否异常</p>
     */
    public $InferNormal;

    /**
     * @var string <p>标本</p>
     */
    public $Sample;

    /**
     * @var string <p>检测方法</p>
     */
    public $Method;

    /**
     * @var ItemCoordinate <p>检验指标项坐标信息</p>
     */
    public $ItemCoords;

    /**
     * @param string $Code <p>英文缩写</p>
     * @param string $Scode <p>标准缩写</p>
     * @param string $Name <p>项目名称</p>
     * @param string $Sname <p>标准名</p>
     * @param string $Result <p>结果</p>
     * @param string $Unit <p>单位</p>
     * @param string $Range <p>参考范围</p>
     * @param string $Arrow <p>上下箭头</p>
     * @param boolean $Normal <p>是否正常</p>
     * @param string $ItemString <p>项目原文</p>
     * @param integer $Id <p>指标项ID</p>
     * @param Coordinate $Coords <p>指标项坐标位置</p>
     * @param string $InferNormal <p>推测结果是否异常</p>
     * @param string $Sample <p>标本</p>
     * @param string $Method <p>检测方法</p>
     * @param ItemCoordinate $ItemCoords <p>检验指标项坐标信息</p>
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

        if (array_key_exists("ItemCoords",$param) and $param["ItemCoords"] !== null) {
            $this->ItemCoords = new ItemCoordinate();
            $this->ItemCoords->deserialize($param["ItemCoords"]);
        }
    }
}

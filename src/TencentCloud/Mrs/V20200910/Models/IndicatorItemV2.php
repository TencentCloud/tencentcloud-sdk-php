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
 * 检验指标项结构v2
 *
 * @method BaseItem getItem() 获取项目名称
 * @method void setItem(BaseItem $Item) 设置项目名称
 * @method BaseItem getCode() 获取英文编码
 * @method void setCode(BaseItem $Code) 设置英文编码
 * @method BaseItem getResult() 获取结果
 * @method void setResult(BaseItem $Result) 设置结果
 * @method BaseItem getUnit() 获取单位
 * @method void setUnit(BaseItem $Unit) 设置单位
 * @method BaseItem getRange() 获取参考范围
 * @method void setRange(BaseItem $Range) 设置参考范围
 * @method BaseItem getArrow() 获取上下箭头
 * @method void setArrow(BaseItem $Arrow) 设置上下箭头
 * @method BaseItem getMethod() 获取检测方法
 * @method void setMethod(BaseItem $Method) 设置检测方法
 * @method boolean getNormal() 获取结果是否异常
 * @method void setNormal(boolean $Normal) 设置结果是否异常
 * @method integer getId() 获取ID
 * @method void setId(integer $Id) 设置ID
 * @method integer getOrder() 获取序号
 * @method void setOrder(integer $Order) 设置序号
 * @method string getInferNormal() 获取推测结果是否异常
 * @method void setInferNormal(string $InferNormal) 设置推测结果是否异常
 */
class IndicatorItemV2 extends AbstractModel
{
    /**
     * @var BaseItem 项目名称
     */
    public $Item;

    /**
     * @var BaseItem 英文编码
     */
    public $Code;

    /**
     * @var BaseItem 结果
     */
    public $Result;

    /**
     * @var BaseItem 单位
     */
    public $Unit;

    /**
     * @var BaseItem 参考范围
     */
    public $Range;

    /**
     * @var BaseItem 上下箭头
     */
    public $Arrow;

    /**
     * @var BaseItem 检测方法
     */
    public $Method;

    /**
     * @var boolean 结果是否异常
     */
    public $Normal;

    /**
     * @var integer ID
     */
    public $Id;

    /**
     * @var integer 序号
     */
    public $Order;

    /**
     * @var string 推测结果是否异常
     */
    public $InferNormal;

    /**
     * @param BaseItem $Item 项目名称
     * @param BaseItem $Code 英文编码
     * @param BaseItem $Result 结果
     * @param BaseItem $Unit 单位
     * @param BaseItem $Range 参考范围
     * @param BaseItem $Arrow 上下箭头
     * @param BaseItem $Method 检测方法
     * @param boolean $Normal 结果是否异常
     * @param integer $Id ID
     * @param integer $Order 序号
     * @param string $InferNormal 推测结果是否异常
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = new BaseItem();
            $this->Item->deserialize($param["Item"]);
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = new BaseItem();
            $this->Code->deserialize($param["Code"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new BaseItem();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = new BaseItem();
            $this->Unit->deserialize($param["Unit"]);
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = new BaseItem();
            $this->Range->deserialize($param["Range"]);
        }

        if (array_key_exists("Arrow",$param) and $param["Arrow"] !== null) {
            $this->Arrow = new BaseItem();
            $this->Arrow->deserialize($param["Arrow"]);
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = new BaseItem();
            $this->Method->deserialize($param["Method"]);
        }

        if (array_key_exists("Normal",$param) and $param["Normal"] !== null) {
            $this->Normal = $param["Normal"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("InferNormal",$param) and $param["InferNormal"] !== null) {
            $this->InferNormal = $param["InferNormal"];
        }
    }
}

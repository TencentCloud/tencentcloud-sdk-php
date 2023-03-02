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
 * 检验指标项结构v2
 *
 * @method BaseItem getItem() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItem(BaseItem $Item) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getCode() 获取英文编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(BaseItem $Code) 设置英文编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getResult() 获取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(BaseItem $Result) 设置结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getUnit() 获取单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(BaseItem $Unit) 设置单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getRange() 获取参考范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRange(BaseItem $Range) 设置参考范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getArrow() 获取上下箭头
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArrow(BaseItem $Arrow) 设置上下箭头
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getMethod() 获取检测方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(BaseItem $Method) 设置检测方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNormal() 获取结果是否异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNormal(boolean $Normal) 设置结果是否异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrder() 获取序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrder(integer $Order) 设置序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInferNormal() 获取推测结果是否异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInferNormal(string $InferNormal) 设置推测结果是否异常
注意：此字段可能返回 null，表示取不到有效值。
 */
class IndicatorItemV2 extends AbstractModel
{
    /**
     * @var BaseItem 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Item;

    /**
     * @var BaseItem 英文编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var BaseItem 结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var BaseItem 单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var BaseItem 参考范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Range;

    /**
     * @var BaseItem 上下箭头
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Arrow;

    /**
     * @var BaseItem 检测方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var boolean 结果是否异常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Normal;

    /**
     * @var integer ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Order;

    /**
     * @var string 推测结果是否异常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InferNormal;

    /**
     * @param BaseItem $Item 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $Code 英文编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $Result 结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $Unit 单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $Range 参考范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $Arrow 上下箭头
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $Method 检测方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Normal 结果是否异常
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Order 序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InferNormal 推测结果是否异常
注意：此字段可能返回 null，表示取不到有效值。
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

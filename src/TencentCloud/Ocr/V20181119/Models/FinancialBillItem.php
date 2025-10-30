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
 * 财务票据查验返回结果-项目明细
 *
 * @method string getItemID() 获取项目编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemID(string $ItemID) 设置项目编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuantity() 获取数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuantity(string $Quantity) 设置数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStandard() 获取规格标准
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandard(string $Standard) 设置规格标准
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotal() 获取金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(string $Total) 设置金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerialNumber() 获取项目序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialNumber(string $SerialNumber) 设置项目序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class FinancialBillItem extends AbstractModel
{
    /**
     * @var string 项目编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemID;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var string 数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quantity;

    /**
     * @var string 规格标准
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Standard;

    /**
     * @var string 金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string 项目序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialNumber;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $ItemID 项目编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit 单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Quantity 数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Standard 规格标准
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Total 金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SerialNumber 项目序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
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
        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}

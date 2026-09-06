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
 * 增值税发票项目明细
 *
 * @method string getLineNo() 获取<p>行号</p>
 * @method void setLineNo(string $LineNo) 设置<p>行号</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getSpec() 获取<p>规格</p>
 * @method void setSpec(string $Spec) 设置<p>规格</p>
 * @method string getUnit() 获取<p>单位</p>
 * @method void setUnit(string $Unit) 设置<p>单位</p>
 * @method string getQuantity() 获取<p>数量</p>
 * @method void setQuantity(string $Quantity) 设置<p>数量</p>
 * @method string getUnitPrice() 获取<p>单价</p>
 * @method void setUnitPrice(string $UnitPrice) 设置<p>单价</p>
 * @method string getAmountWithoutTax() 获取<p>不含税金额</p>
 * @method void setAmountWithoutTax(string $AmountWithoutTax) 设置<p>不含税金额</p>
 * @method string getTaxRate() 获取<p>税率</p>
 * @method void setTaxRate(string $TaxRate) 设置<p>税率</p>
 * @method string getTaxAmount() 获取<p>税额</p>
 * @method void setTaxAmount(string $TaxAmount) 设置<p>税额</p>
 * @method string getTaxClassifyCode() 获取<p>税收分类编码</p>
 * @method void setTaxClassifyCode(string $TaxClassifyCode) 设置<p>税收分类编码</p>
 * @method string getVehicleType() 获取<p>运输工具类型</p>
 * @method void setVehicleType(string $VehicleType) 设置<p>运输工具类型</p>
 * @method string getVehicleBrand() 获取<p>运输工具牌号</p>
 * @method void setVehicleBrand(string $VehicleBrand) 设置<p>运输工具牌号</p>
 * @method string getDeparturePlace() 获取<p>起始地</p>
 * @method void setDeparturePlace(string $DeparturePlace) 设置<p>起始地</p>
 * @method string getArrivalPlace() 获取<p>到达地</p>
 * @method void setArrivalPlace(string $ArrivalPlace) 设置<p>到达地</p>
 * @method string getTransportItemsName() 获取<p>运输货物名称</p>
 * @method void setTransportItemsName(string $TransportItemsName) 设置<p>运输货物名称</p>
 * @method string getConstructionPlace() 获取<p>建筑服务发生地</p>
 * @method void setConstructionPlace(string $ConstructionPlace) 设置<p>建筑服务发生地</p>
 * @method string getConstructionName() 获取<p>建筑项目名称</p>
 * @method void setConstructionName(string $ConstructionName) 设置<p>建筑项目名称</p>
 * @method string getOriginalTaxRate() 获取<p>原始税率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalTaxRate(string $OriginalTaxRate) 设置<p>原始税率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalTaxAmount() 获取<p>原始税额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalTaxAmount(string $OriginalTaxAmount) 设置<p>原始税额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZeroTaxRateMark() 获取<p>零税率标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZeroTaxRateMark(string $ZeroTaxRateMark) 设置<p>零税率标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxIncludedUnitPrice() 获取<p>含税单价</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxIncludedUnitPrice(string $TaxIncludedUnitPrice) 设置<p>含税单价</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTaxIncludedAmount() 获取<p>含税金额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxIncludedAmount(float $TaxIncludedAmount) 设置<p>含税金额</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class VatInvoiceItem extends AbstractModel
{
    /**
     * @var string <p>行号</p>
     */
    public $LineNo;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>规格</p>
     */
    public $Spec;

    /**
     * @var string <p>单位</p>
     */
    public $Unit;

    /**
     * @var string <p>数量</p>
     */
    public $Quantity;

    /**
     * @var string <p>单价</p>
     */
    public $UnitPrice;

    /**
     * @var string <p>不含税金额</p>
     */
    public $AmountWithoutTax;

    /**
     * @var string <p>税率</p>
     */
    public $TaxRate;

    /**
     * @var string <p>税额</p>
     */
    public $TaxAmount;

    /**
     * @var string <p>税收分类编码</p>
     */
    public $TaxClassifyCode;

    /**
     * @var string <p>运输工具类型</p>
     */
    public $VehicleType;

    /**
     * @var string <p>运输工具牌号</p>
     */
    public $VehicleBrand;

    /**
     * @var string <p>起始地</p>
     */
    public $DeparturePlace;

    /**
     * @var string <p>到达地</p>
     */
    public $ArrivalPlace;

    /**
     * @var string <p>运输货物名称</p>
     */
    public $TransportItemsName;

    /**
     * @var string <p>建筑服务发生地</p>
     */
    public $ConstructionPlace;

    /**
     * @var string <p>建筑项目名称</p>
     */
    public $ConstructionName;

    /**
     * @var string <p>原始税率</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalTaxRate;

    /**
     * @var string <p>原始税额</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalTaxAmount;

    /**
     * @var string <p>零税率标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZeroTaxRateMark;

    /**
     * @var string <p>含税单价</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxIncludedUnitPrice;

    /**
     * @var float <p>含税金额</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxIncludedAmount;

    /**
     * @param string $LineNo <p>行号</p>
     * @param string $Name <p>名称</p>
     * @param string $Spec <p>规格</p>
     * @param string $Unit <p>单位</p>
     * @param string $Quantity <p>数量</p>
     * @param string $UnitPrice <p>单价</p>
     * @param string $AmountWithoutTax <p>不含税金额</p>
     * @param string $TaxRate <p>税率</p>
     * @param string $TaxAmount <p>税额</p>
     * @param string $TaxClassifyCode <p>税收分类编码</p>
     * @param string $VehicleType <p>运输工具类型</p>
     * @param string $VehicleBrand <p>运输工具牌号</p>
     * @param string $DeparturePlace <p>起始地</p>
     * @param string $ArrivalPlace <p>到达地</p>
     * @param string $TransportItemsName <p>运输货物名称</p>
     * @param string $ConstructionPlace <p>建筑服务发生地</p>
     * @param string $ConstructionName <p>建筑项目名称</p>
     * @param string $OriginalTaxRate <p>原始税率</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalTaxAmount <p>原始税额</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZeroTaxRateMark <p>零税率标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxIncludedUnitPrice <p>含税单价</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TaxIncludedAmount <p>含税金额</p>
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
        if (array_key_exists("LineNo",$param) and $param["LineNo"] !== null) {
            $this->LineNo = $param["LineNo"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("AmountWithoutTax",$param) and $param["AmountWithoutTax"] !== null) {
            $this->AmountWithoutTax = $param["AmountWithoutTax"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }

        if (array_key_exists("TaxClassifyCode",$param) and $param["TaxClassifyCode"] !== null) {
            $this->TaxClassifyCode = $param["TaxClassifyCode"];
        }

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
        }

        if (array_key_exists("VehicleBrand",$param) and $param["VehicleBrand"] !== null) {
            $this->VehicleBrand = $param["VehicleBrand"];
        }

        if (array_key_exists("DeparturePlace",$param) and $param["DeparturePlace"] !== null) {
            $this->DeparturePlace = $param["DeparturePlace"];
        }

        if (array_key_exists("ArrivalPlace",$param) and $param["ArrivalPlace"] !== null) {
            $this->ArrivalPlace = $param["ArrivalPlace"];
        }

        if (array_key_exists("TransportItemsName",$param) and $param["TransportItemsName"] !== null) {
            $this->TransportItemsName = $param["TransportItemsName"];
        }

        if (array_key_exists("ConstructionPlace",$param) and $param["ConstructionPlace"] !== null) {
            $this->ConstructionPlace = $param["ConstructionPlace"];
        }

        if (array_key_exists("ConstructionName",$param) and $param["ConstructionName"] !== null) {
            $this->ConstructionName = $param["ConstructionName"];
        }

        if (array_key_exists("OriginalTaxRate",$param) and $param["OriginalTaxRate"] !== null) {
            $this->OriginalTaxRate = $param["OriginalTaxRate"];
        }

        if (array_key_exists("OriginalTaxAmount",$param) and $param["OriginalTaxAmount"] !== null) {
            $this->OriginalTaxAmount = $param["OriginalTaxAmount"];
        }

        if (array_key_exists("ZeroTaxRateMark",$param) and $param["ZeroTaxRateMark"] !== null) {
            $this->ZeroTaxRateMark = $param["ZeroTaxRateMark"];
        }

        if (array_key_exists("TaxIncludedUnitPrice",$param) and $param["TaxIncludedUnitPrice"] !== null) {
            $this->TaxIncludedUnitPrice = $param["TaxIncludedUnitPrice"];
        }

        if (array_key_exists("TaxIncludedAmount",$param) and $param["TaxIncludedAmount"] !== null) {
            $this->TaxIncludedAmount = $param["TaxIncludedAmount"];
        }
    }
}

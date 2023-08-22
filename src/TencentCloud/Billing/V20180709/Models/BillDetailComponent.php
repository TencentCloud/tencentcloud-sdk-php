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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账单明细组件对象
 *
 * @method string getComponentCodeName() 获取组件类型：用户购买的产品或服务对应的组件大类，例如：云服务器 CVM 的组件：CPU、内存等
 * @method void setComponentCodeName(string $ComponentCodeName) 设置组件类型：用户购买的产品或服务对应的组件大类，例如：云服务器 CVM 的组件：CPU、内存等
 * @method string getItemCodeName() 获取组件名称：用户购买的产品或服务，所包含的具体组件
 * @method void setItemCodeName(string $ItemCodeName) 设置组件名称：用户购买的产品或服务，所包含的具体组件
 * @method string getSinglePrice() 获取组件刊例价：组件的官网原始单价（如果客户享受一口价/合同价则默认不展示）
 * @method void setSinglePrice(string $SinglePrice) 设置组件刊例价：组件的官网原始单价（如果客户享受一口价/合同价则默认不展示）
 * @method string getSpecifiedPrice() 获取组件指定价（已废弃）
 * @method void setSpecifiedPrice(string $SpecifiedPrice) 设置组件指定价（已废弃）
 * @method string getPriceUnit() 获取组件价格单位：组件价格的单位，单位构成：元/用量单位/时长单位
 * @method void setPriceUnit(string $PriceUnit) 设置组件价格单位：组件价格的单位，单位构成：元/用量单位/时长单位
 * @method string getUsedAmount() 获取组件用量：该组件实际结算用量，组件用量 = 组件原始用量 - 抵扣用量（含资源包
 * @method void setUsedAmount(string $UsedAmount) 设置组件用量：该组件实际结算用量，组件用量 = 组件原始用量 - 抵扣用量（含资源包
 * @method string getUsedAmountUnit() 获取组件用量单位：组件用量对应的单位
 * @method void setUsedAmountUnit(string $UsedAmountUnit) 设置组件用量单位：组件用量对应的单位
 * @method string getRealTotalMeasure() 获取原始用量/时长：组件被资源包抵扣前的原始用量/时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealTotalMeasure(string $RealTotalMeasure) 设置原始用量/时长：组件被资源包抵扣前的原始用量/时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeductedMeasure() 获取抵扣用量/时长（含资源包）：组件被资源包抵扣的用量/时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeductedMeasure(string $DeductedMeasure) 设置抵扣用量/时长（含资源包）：组件被资源包抵扣的用量/时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeSpan() 获取使用时长：资源使用的时长
 * @method void setTimeSpan(string $TimeSpan) 设置使用时长：资源使用的时长
 * @method string getTimeUnitName() 获取时长单位：资源使用时长的单位
 * @method void setTimeUnitName(string $TimeUnitName) 设置时长单位：资源使用时长的单位
 * @method string getCost() 获取组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如果客户享受一口价/合同价则默认不展示，退费类场景也默认不展示）
 * @method void setCost(string $Cost) 设置组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如果客户享受一口价/合同价则默认不展示，退费类场景也默认不展示）
 * @method string getDiscount() 获取折扣率：本资源享受的折扣率（如果客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
 * @method void setDiscount(string $Discount) 设置折扣率：本资源享受的折扣率（如果客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
 * @method string getReduceType() 获取优惠类型
 * @method void setReduceType(string $ReduceType) 设置优惠类型
 * @method string getRealCost() 获取优惠后总价：优惠后总价=（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
 * @method void setRealCost(string $RealCost) 设置优惠后总价：优惠后总价=（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
 * @method string getVoucherPayAmount() 获取优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
 * @method string getCashPayAmount() 获取现金账户支出：通过现金账户支付的金额
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金账户支出：通过现金账户支付的金额
 * @method string getIncentivePayAmount() 获取赠送账户支出：使用赠送金支付的金额
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送账户支出：使用赠送金支付的金额
 * @method string getTransferPayAmount() 获取分成金账户支出：通过分成金账户支付的金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置分成金账户支出：通过分成金账户支付的金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItemCode() 获取组件类型编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemCode(string $ItemCode) 设置组件类型编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComponentCode() 获取组件名称编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentCode(string $ComponentCode) 设置组件名称编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractPrice() 获取组件单价：组件的折后单价，组件单价 = 刊例价 * 折扣
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractPrice(string $ContractPrice) 设置组件单价：组件的折后单价，组件单价 = 刊例价 * 折扣
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。正常的实例展示默认为不展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。正常的实例展示默认为不展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiTimeSpan() 获取预留实例抵扣的使用时长：本产品或服务使用预留实例抵扣的使用时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiTimeSpan(string $RiTimeSpan) 设置预留实例抵扣的使用时长：本产品或服务使用预留实例抵扣的使用时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalCostWithRI() 获取预留实例抵扣组件原价：本产品或服务使用预留实例抵扣的组件原价金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalCostWithRI(string $OriginalCostWithRI) 设置预留实例抵扣组件原价：本产品或服务使用预留实例抵扣的组件原价金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSPDeductionRate() 获取节省计划抵扣率：节省计划可用余额额度范围内，节省计划对于此组件打的折扣率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSPDeductionRate(string $SPDeductionRate) 设置节省计划抵扣率：节省计划可用余额额度范围内，节省计划对于此组件打的折扣率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSPDeduction() 获取节省计划抵扣金额（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSPDeduction(string $SPDeduction) 设置节省计划抵扣金额（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalCostWithSP() 获取节省计划抵扣组件原价：节省计划抵扣原价=节省计划包抵扣金额/节省计划抵扣率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalCostWithSP(string $OriginalCostWithSP) 设置节省计划抵扣组件原价：节省计划抵扣原价=节省计划包抵扣金额/节省计划抵扣率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlendedDiscount() 获取混合折扣率：综合各类折扣抵扣信息后的最终折扣率，混合折扣率 = 优惠后总价 / 组件原价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlendedDiscount(string $BlendedDiscount) 设置混合折扣率：综合各类折扣抵扣信息后的最终折扣率，混合折扣率 = 优惠后总价 / 组件原价
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComponentConfig() 获取配置描述：资源配置规格信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentConfig(array $ComponentConfig) 设置配置描述：资源配置规格信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BillDetailComponent extends AbstractModel
{
    /**
     * @var string 组件类型：用户购买的产品或服务对应的组件大类，例如：云服务器 CVM 的组件：CPU、内存等
     */
    public $ComponentCodeName;

    /**
     * @var string 组件名称：用户购买的产品或服务，所包含的具体组件
     */
    public $ItemCodeName;

    /**
     * @var string 组件刊例价：组件的官网原始单价（如果客户享受一口价/合同价则默认不展示）
     */
    public $SinglePrice;

    /**
     * @var string 组件指定价（已废弃）
     * @deprecated
     */
    public $SpecifiedPrice;

    /**
     * @var string 组件价格单位：组件价格的单位，单位构成：元/用量单位/时长单位
     */
    public $PriceUnit;

    /**
     * @var string 组件用量：该组件实际结算用量，组件用量 = 组件原始用量 - 抵扣用量（含资源包
     */
    public $UsedAmount;

    /**
     * @var string 组件用量单位：组件用量对应的单位
     */
    public $UsedAmountUnit;

    /**
     * @var string 原始用量/时长：组件被资源包抵扣前的原始用量/时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealTotalMeasure;

    /**
     * @var string 抵扣用量/时长（含资源包）：组件被资源包抵扣的用量/时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeductedMeasure;

    /**
     * @var string 使用时长：资源使用的时长
     */
    public $TimeSpan;

    /**
     * @var string 时长单位：资源使用时长的单位
     */
    public $TimeUnitName;

    /**
     * @var string 组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如果客户享受一口价/合同价则默认不展示，退费类场景也默认不展示）
     */
    public $Cost;

    /**
     * @var string 折扣率：本资源享受的折扣率（如果客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
     */
    public $Discount;

    /**
     * @var string 优惠类型
     */
    public $ReduceType;

    /**
     * @var string 优惠后总价：优惠后总价=（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
     */
    public $RealCost;

    /**
     * @var string 优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
     */
    public $VoucherPayAmount;

    /**
     * @var string 现金账户支出：通过现金账户支付的金额
     */
    public $CashPayAmount;

    /**
     * @var string 赠送账户支出：使用赠送金支付的金额
     */
    public $IncentivePayAmount;

    /**
     * @var string 分成金账户支出：通过分成金账户支付的金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferPayAmount;

    /**
     * @var string 组件类型编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemCode;

    /**
     * @var string 组件名称编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComponentCode;

    /**
     * @var string 组件单价：组件的折后单价，组件单价 = 刊例价 * 折扣
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractPrice;

    /**
     * @var string 实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。正常的实例展示默认为不展示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 预留实例抵扣的使用时长：本产品或服务使用预留实例抵扣的使用时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiTimeSpan;

    /**
     * @var string 预留实例抵扣组件原价：本产品或服务使用预留实例抵扣的组件原价金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalCostWithRI;

    /**
     * @var string 节省计划抵扣率：节省计划可用余额额度范围内，节省计划对于此组件打的折扣率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SPDeductionRate;

    /**
     * @var string 节省计划抵扣金额（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $SPDeduction;

    /**
     * @var string 节省计划抵扣组件原价：节省计划抵扣原价=节省计划包抵扣金额/节省计划抵扣率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalCostWithSP;

    /**
     * @var string 混合折扣率：综合各类折扣抵扣信息后的最终折扣率，混合折扣率 = 优惠后总价 / 组件原价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlendedDiscount;

    /**
     * @var array 配置描述：资源配置规格信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComponentConfig;

    /**
     * @param string $ComponentCodeName 组件类型：用户购买的产品或服务对应的组件大类，例如：云服务器 CVM 的组件：CPU、内存等
     * @param string $ItemCodeName 组件名称：用户购买的产品或服务，所包含的具体组件
     * @param string $SinglePrice 组件刊例价：组件的官网原始单价（如果客户享受一口价/合同价则默认不展示）
     * @param string $SpecifiedPrice 组件指定价（已废弃）
     * @param string $PriceUnit 组件价格单位：组件价格的单位，单位构成：元/用量单位/时长单位
     * @param string $UsedAmount 组件用量：该组件实际结算用量，组件用量 = 组件原始用量 - 抵扣用量（含资源包
     * @param string $UsedAmountUnit 组件用量单位：组件用量对应的单位
     * @param string $RealTotalMeasure 原始用量/时长：组件被资源包抵扣前的原始用量/时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeductedMeasure 抵扣用量/时长（含资源包）：组件被资源包抵扣的用量/时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeSpan 使用时长：资源使用的时长
     * @param string $TimeUnitName 时长单位：资源使用时长的单位
     * @param string $Cost 组件原价：原价 = 组件刊例价 * 组件用量 * 使用时长（如果客户享受一口价/合同价则默认不展示，退费类场景也默认不展示）
     * @param string $Discount 折扣率：本资源享受的折扣率（如果客户享受一口价/合同价则默认不展示，退费场景也默认不展示）
     * @param string $ReduceType 优惠类型
     * @param string $RealCost 优惠后总价：优惠后总价=（原价 - 预留实例抵扣原价 - 节省计划抵扣原价）* 折扣率
     * @param string $VoucherPayAmount 优惠券支出：使用各类优惠券（如代金券、现金券等）支付的金额
     * @param string $CashPayAmount 现金账户支出：通过现金账户支付的金额
     * @param string $IncentivePayAmount 赠送账户支出：使用赠送金支付的金额
     * @param string $TransferPayAmount 分成金账户支出：通过分成金账户支付的金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ItemCode 组件类型编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComponentCode 组件名称编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractPrice 组件单价：组件的折后单价，组件单价 = 刊例价 * 折扣
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 实例类型：购买的产品服务对应的实例类型，包括资源包、RI、SP、竞价实例。正常的实例展示默认为不展示
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiTimeSpan 预留实例抵扣的使用时长：本产品或服务使用预留实例抵扣的使用时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalCostWithRI 预留实例抵扣组件原价：本产品或服务使用预留实例抵扣的组件原价金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SPDeductionRate 节省计划抵扣率：节省计划可用余额额度范围内，节省计划对于此组件打的折扣率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SPDeduction 节省计划抵扣金额（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalCostWithSP 节省计划抵扣组件原价：节省计划抵扣原价=节省计划包抵扣金额/节省计划抵扣率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlendedDiscount 混合折扣率：综合各类折扣抵扣信息后的最终折扣率，混合折扣率 = 优惠后总价 / 组件原价
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ComponentConfig 配置描述：资源配置规格信息
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
        if (array_key_exists("ComponentCodeName",$param) and $param["ComponentCodeName"] !== null) {
            $this->ComponentCodeName = $param["ComponentCodeName"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }

        if (array_key_exists("SinglePrice",$param) and $param["SinglePrice"] !== null) {
            $this->SinglePrice = $param["SinglePrice"];
        }

        if (array_key_exists("SpecifiedPrice",$param) and $param["SpecifiedPrice"] !== null) {
            $this->SpecifiedPrice = $param["SpecifiedPrice"];
        }

        if (array_key_exists("PriceUnit",$param) and $param["PriceUnit"] !== null) {
            $this->PriceUnit = $param["PriceUnit"];
        }

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("UsedAmountUnit",$param) and $param["UsedAmountUnit"] !== null) {
            $this->UsedAmountUnit = $param["UsedAmountUnit"];
        }

        if (array_key_exists("RealTotalMeasure",$param) and $param["RealTotalMeasure"] !== null) {
            $this->RealTotalMeasure = $param["RealTotalMeasure"];
        }

        if (array_key_exists("DeductedMeasure",$param) and $param["DeductedMeasure"] !== null) {
            $this->DeductedMeasure = $param["DeductedMeasure"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnitName",$param) and $param["TimeUnitName"] !== null) {
            $this->TimeUnitName = $param["TimeUnitName"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("ReduceType",$param) and $param["ReduceType"] !== null) {
            $this->ReduceType = $param["ReduceType"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ContractPrice",$param) and $param["ContractPrice"] !== null) {
            $this->ContractPrice = $param["ContractPrice"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("RiTimeSpan",$param) and $param["RiTimeSpan"] !== null) {
            $this->RiTimeSpan = $param["RiTimeSpan"];
        }

        if (array_key_exists("OriginalCostWithRI",$param) and $param["OriginalCostWithRI"] !== null) {
            $this->OriginalCostWithRI = $param["OriginalCostWithRI"];
        }

        if (array_key_exists("SPDeductionRate",$param) and $param["SPDeductionRate"] !== null) {
            $this->SPDeductionRate = $param["SPDeductionRate"];
        }

        if (array_key_exists("SPDeduction",$param) and $param["SPDeduction"] !== null) {
            $this->SPDeduction = $param["SPDeduction"];
        }

        if (array_key_exists("OriginalCostWithSP",$param) and $param["OriginalCostWithSP"] !== null) {
            $this->OriginalCostWithSP = $param["OriginalCostWithSP"];
        }

        if (array_key_exists("BlendedDiscount",$param) and $param["BlendedDiscount"] !== null) {
            $this->BlendedDiscount = $param["BlendedDiscount"];
        }

        if (array_key_exists("ComponentConfig",$param) and $param["ComponentConfig"] !== null) {
            $this->ComponentConfig = [];
            foreach ($param["ComponentConfig"] as $key => $value){
                $obj = new BillDetailComponentConfig();
                $obj->deserialize($value);
                array_push($this->ComponentConfig, $obj);
            }
        }
    }
}

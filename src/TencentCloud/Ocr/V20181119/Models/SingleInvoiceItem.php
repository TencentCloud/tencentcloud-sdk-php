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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混贴票据中单张发票的内容
 *
 * @method VatInvoiceInfo getVatSpecialInvoice() 获取增值税专用发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVatSpecialInvoice(VatInvoiceInfo $VatSpecialInvoice) 设置增值税专用发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method VatInvoiceInfo getVatCommonInvoice() 获取增值税普通发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVatCommonInvoice(VatInvoiceInfo $VatCommonInvoice) 设置增值税普通发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method VatInvoiceInfo getVatElectronicCommonInvoice() 获取增值税电子普通发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVatElectronicCommonInvoice(VatInvoiceInfo $VatElectronicCommonInvoice) 设置增值税电子普通发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method VatInvoiceInfo getVatElectronicSpecialInvoice() 获取增值税电子专用发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVatElectronicSpecialInvoice(VatInvoiceInfo $VatElectronicSpecialInvoice) 设置增值税电子专用发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method VatInvoiceInfo getVatElectronicInvoiceBlockchain() 获取区块链电子发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVatElectronicInvoiceBlockchain(VatInvoiceInfo $VatElectronicInvoiceBlockchain) 设置区块链电子发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method VatInvoiceInfo getVatElectronicInvoiceToll() 获取增值税电子普通发票(通行费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVatElectronicInvoiceToll(VatInvoiceInfo $VatElectronicInvoiceToll) 设置增值税电子普通发票(通行费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method VatElectronicInfo getVatElectronicSpecialInvoiceFull() 获取电子发票(专用发票)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVatElectronicSpecialInvoiceFull(VatElectronicInfo $VatElectronicSpecialInvoiceFull) 设置电子发票(专用发票)
注意：此字段可能返回 null，表示取不到有效值。
 * @method VatElectronicInfo getVatElectronicInvoiceFull() 获取电子发票(普通发票)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVatElectronicInvoiceFull(VatElectronicInfo $VatElectronicInvoiceFull) 设置电子发票(普通发票)
注意：此字段可能返回 null，表示取不到有效值。
 * @method MachinePrintedInvoice getMachinePrintedInvoice() 获取通用机打发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachinePrintedInvoice(MachinePrintedInvoice $MachinePrintedInvoice) 设置通用机打发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method BusInvoice getBusInvoice() 获取汽车票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusInvoice(BusInvoice $BusInvoice) 设置汽车票
注意：此字段可能返回 null，表示取不到有效值。
 * @method ShippingInvoice getShippingInvoice() 获取轮船票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShippingInvoice(ShippingInvoice $ShippingInvoice) 设置轮船票
注意：此字段可能返回 null，表示取不到有效值。
 * @method TollInvoice getTollInvoice() 获取过路过桥费发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTollInvoice(TollInvoice $TollInvoice) 设置过路过桥费发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method OtherInvoice getOtherInvoice() 获取其他发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherInvoice(OtherInvoice $OtherInvoice) 设置其他发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method MotorVehicleSaleInvoice getMotorVehicleSaleInvoice() 获取机动车销售统一发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMotorVehicleSaleInvoice(MotorVehicleSaleInvoice $MotorVehicleSaleInvoice) 设置机动车销售统一发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method UsedCarPurchaseInvoice getUsedCarPurchaseInvoice() 获取二手车销售统一发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedCarPurchaseInvoice(UsedCarPurchaseInvoice $UsedCarPurchaseInvoice) 设置二手车销售统一发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method VatInvoiceRoll getVatInvoiceRoll() 获取增值税普通发票(卷票)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVatInvoiceRoll(VatInvoiceRoll $VatInvoiceRoll) 设置增值税普通发票(卷票)
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaxiTicket getTaxiTicket() 获取出租车发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxiTicket(TaxiTicket $TaxiTicket) 设置出租车发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method QuotaInvoice getQuotaInvoice() 获取定额发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaInvoice(QuotaInvoice $QuotaInvoice) 设置定额发票
注意：此字段可能返回 null，表示取不到有效值。
 * @method AirTransport getAirTransport() 获取机票行程单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAirTransport(AirTransport $AirTransport) 设置机票行程单
注意：此字段可能返回 null，表示取不到有效值。
 * @method NonTaxIncomeBill getNonTaxIncomeGeneralBill() 获取非税收入通用票据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNonTaxIncomeGeneralBill(NonTaxIncomeBill $NonTaxIncomeGeneralBill) 设置非税收入通用票据
注意：此字段可能返回 null，表示取不到有效值。
 * @method NonTaxIncomeBill getNonTaxIncomeElectronicBill() 获取非税收入一般缴款书(电子)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNonTaxIncomeElectronicBill(NonTaxIncomeBill $NonTaxIncomeElectronicBill) 设置非税收入一般缴款书(电子)
注意：此字段可能返回 null，表示取不到有效值。
 * @method TrainTicket getTrainTicket() 获取火车票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainTicket(TrainTicket $TrainTicket) 设置火车票
注意：此字段可能返回 null，表示取不到有效值。
 */
class SingleInvoiceItem extends AbstractModel
{
    /**
     * @var VatInvoiceInfo 增值税专用发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VatSpecialInvoice;

    /**
     * @var VatInvoiceInfo 增值税普通发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VatCommonInvoice;

    /**
     * @var VatInvoiceInfo 增值税电子普通发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VatElectronicCommonInvoice;

    /**
     * @var VatInvoiceInfo 增值税电子专用发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VatElectronicSpecialInvoice;

    /**
     * @var VatInvoiceInfo 区块链电子发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VatElectronicInvoiceBlockchain;

    /**
     * @var VatInvoiceInfo 增值税电子普通发票(通行费)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VatElectronicInvoiceToll;

    /**
     * @var VatElectronicInfo 电子发票(专用发票)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VatElectronicSpecialInvoiceFull;

    /**
     * @var VatElectronicInfo 电子发票(普通发票)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VatElectronicInvoiceFull;

    /**
     * @var MachinePrintedInvoice 通用机打发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachinePrintedInvoice;

    /**
     * @var BusInvoice 汽车票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusInvoice;

    /**
     * @var ShippingInvoice 轮船票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShippingInvoice;

    /**
     * @var TollInvoice 过路过桥费发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TollInvoice;

    /**
     * @var OtherInvoice 其他发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherInvoice;

    /**
     * @var MotorVehicleSaleInvoice 机动车销售统一发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MotorVehicleSaleInvoice;

    /**
     * @var UsedCarPurchaseInvoice 二手车销售统一发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedCarPurchaseInvoice;

    /**
     * @var VatInvoiceRoll 增值税普通发票(卷票)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VatInvoiceRoll;

    /**
     * @var TaxiTicket 出租车发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxiTicket;

    /**
     * @var QuotaInvoice 定额发票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaInvoice;

    /**
     * @var AirTransport 机票行程单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AirTransport;

    /**
     * @var NonTaxIncomeBill 非税收入通用票据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NonTaxIncomeGeneralBill;

    /**
     * @var NonTaxIncomeBill 非税收入一般缴款书(电子)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NonTaxIncomeElectronicBill;

    /**
     * @var TrainTicket 火车票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainTicket;

    /**
     * @param VatInvoiceInfo $VatSpecialInvoice 增值税专用发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param VatInvoiceInfo $VatCommonInvoice 增值税普通发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param VatInvoiceInfo $VatElectronicCommonInvoice 增值税电子普通发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param VatInvoiceInfo $VatElectronicSpecialInvoice 增值税电子专用发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param VatInvoiceInfo $VatElectronicInvoiceBlockchain 区块链电子发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param VatInvoiceInfo $VatElectronicInvoiceToll 增值税电子普通发票(通行费)
注意：此字段可能返回 null，表示取不到有效值。
     * @param VatElectronicInfo $VatElectronicSpecialInvoiceFull 电子发票(专用发票)
注意：此字段可能返回 null，表示取不到有效值。
     * @param VatElectronicInfo $VatElectronicInvoiceFull 电子发票(普通发票)
注意：此字段可能返回 null，表示取不到有效值。
     * @param MachinePrintedInvoice $MachinePrintedInvoice 通用机打发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param BusInvoice $BusInvoice 汽车票
注意：此字段可能返回 null，表示取不到有效值。
     * @param ShippingInvoice $ShippingInvoice 轮船票
注意：此字段可能返回 null，表示取不到有效值。
     * @param TollInvoice $TollInvoice 过路过桥费发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param OtherInvoice $OtherInvoice 其他发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param MotorVehicleSaleInvoice $MotorVehicleSaleInvoice 机动车销售统一发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param UsedCarPurchaseInvoice $UsedCarPurchaseInvoice 二手车销售统一发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param VatInvoiceRoll $VatInvoiceRoll 增值税普通发票(卷票)
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaxiTicket $TaxiTicket 出租车发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param QuotaInvoice $QuotaInvoice 定额发票
注意：此字段可能返回 null，表示取不到有效值。
     * @param AirTransport $AirTransport 机票行程单
注意：此字段可能返回 null，表示取不到有效值。
     * @param NonTaxIncomeBill $NonTaxIncomeGeneralBill 非税收入通用票据
注意：此字段可能返回 null，表示取不到有效值。
     * @param NonTaxIncomeBill $NonTaxIncomeElectronicBill 非税收入一般缴款书(电子)
注意：此字段可能返回 null，表示取不到有效值。
     * @param TrainTicket $TrainTicket 火车票
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
        if (array_key_exists("VatSpecialInvoice",$param) and $param["VatSpecialInvoice"] !== null) {
            $this->VatSpecialInvoice = new VatInvoiceInfo();
            $this->VatSpecialInvoice->deserialize($param["VatSpecialInvoice"]);
        }

        if (array_key_exists("VatCommonInvoice",$param) and $param["VatCommonInvoice"] !== null) {
            $this->VatCommonInvoice = new VatInvoiceInfo();
            $this->VatCommonInvoice->deserialize($param["VatCommonInvoice"]);
        }

        if (array_key_exists("VatElectronicCommonInvoice",$param) and $param["VatElectronicCommonInvoice"] !== null) {
            $this->VatElectronicCommonInvoice = new VatInvoiceInfo();
            $this->VatElectronicCommonInvoice->deserialize($param["VatElectronicCommonInvoice"]);
        }

        if (array_key_exists("VatElectronicSpecialInvoice",$param) and $param["VatElectronicSpecialInvoice"] !== null) {
            $this->VatElectronicSpecialInvoice = new VatInvoiceInfo();
            $this->VatElectronicSpecialInvoice->deserialize($param["VatElectronicSpecialInvoice"]);
        }

        if (array_key_exists("VatElectronicInvoiceBlockchain",$param) and $param["VatElectronicInvoiceBlockchain"] !== null) {
            $this->VatElectronicInvoiceBlockchain = new VatInvoiceInfo();
            $this->VatElectronicInvoiceBlockchain->deserialize($param["VatElectronicInvoiceBlockchain"]);
        }

        if (array_key_exists("VatElectronicInvoiceToll",$param) and $param["VatElectronicInvoiceToll"] !== null) {
            $this->VatElectronicInvoiceToll = new VatInvoiceInfo();
            $this->VatElectronicInvoiceToll->deserialize($param["VatElectronicInvoiceToll"]);
        }

        if (array_key_exists("VatElectronicSpecialInvoiceFull",$param) and $param["VatElectronicSpecialInvoiceFull"] !== null) {
            $this->VatElectronicSpecialInvoiceFull = new VatElectronicInfo();
            $this->VatElectronicSpecialInvoiceFull->deserialize($param["VatElectronicSpecialInvoiceFull"]);
        }

        if (array_key_exists("VatElectronicInvoiceFull",$param) and $param["VatElectronicInvoiceFull"] !== null) {
            $this->VatElectronicInvoiceFull = new VatElectronicInfo();
            $this->VatElectronicInvoiceFull->deserialize($param["VatElectronicInvoiceFull"]);
        }

        if (array_key_exists("MachinePrintedInvoice",$param) and $param["MachinePrintedInvoice"] !== null) {
            $this->MachinePrintedInvoice = new MachinePrintedInvoice();
            $this->MachinePrintedInvoice->deserialize($param["MachinePrintedInvoice"]);
        }

        if (array_key_exists("BusInvoice",$param) and $param["BusInvoice"] !== null) {
            $this->BusInvoice = new BusInvoice();
            $this->BusInvoice->deserialize($param["BusInvoice"]);
        }

        if (array_key_exists("ShippingInvoice",$param) and $param["ShippingInvoice"] !== null) {
            $this->ShippingInvoice = new ShippingInvoice();
            $this->ShippingInvoice->deserialize($param["ShippingInvoice"]);
        }

        if (array_key_exists("TollInvoice",$param) and $param["TollInvoice"] !== null) {
            $this->TollInvoice = new TollInvoice();
            $this->TollInvoice->deserialize($param["TollInvoice"]);
        }

        if (array_key_exists("OtherInvoice",$param) and $param["OtherInvoice"] !== null) {
            $this->OtherInvoice = new OtherInvoice();
            $this->OtherInvoice->deserialize($param["OtherInvoice"]);
        }

        if (array_key_exists("MotorVehicleSaleInvoice",$param) and $param["MotorVehicleSaleInvoice"] !== null) {
            $this->MotorVehicleSaleInvoice = new MotorVehicleSaleInvoice();
            $this->MotorVehicleSaleInvoice->deserialize($param["MotorVehicleSaleInvoice"]);
        }

        if (array_key_exists("UsedCarPurchaseInvoice",$param) and $param["UsedCarPurchaseInvoice"] !== null) {
            $this->UsedCarPurchaseInvoice = new UsedCarPurchaseInvoice();
            $this->UsedCarPurchaseInvoice->deserialize($param["UsedCarPurchaseInvoice"]);
        }

        if (array_key_exists("VatInvoiceRoll",$param) and $param["VatInvoiceRoll"] !== null) {
            $this->VatInvoiceRoll = new VatInvoiceRoll();
            $this->VatInvoiceRoll->deserialize($param["VatInvoiceRoll"]);
        }

        if (array_key_exists("TaxiTicket",$param) and $param["TaxiTicket"] !== null) {
            $this->TaxiTicket = new TaxiTicket();
            $this->TaxiTicket->deserialize($param["TaxiTicket"]);
        }

        if (array_key_exists("QuotaInvoice",$param) and $param["QuotaInvoice"] !== null) {
            $this->QuotaInvoice = new QuotaInvoice();
            $this->QuotaInvoice->deserialize($param["QuotaInvoice"]);
        }

        if (array_key_exists("AirTransport",$param) and $param["AirTransport"] !== null) {
            $this->AirTransport = new AirTransport();
            $this->AirTransport->deserialize($param["AirTransport"]);
        }

        if (array_key_exists("NonTaxIncomeGeneralBill",$param) and $param["NonTaxIncomeGeneralBill"] !== null) {
            $this->NonTaxIncomeGeneralBill = new NonTaxIncomeBill();
            $this->NonTaxIncomeGeneralBill->deserialize($param["NonTaxIncomeGeneralBill"]);
        }

        if (array_key_exists("NonTaxIncomeElectronicBill",$param) and $param["NonTaxIncomeElectronicBill"] !== null) {
            $this->NonTaxIncomeElectronicBill = new NonTaxIncomeBill();
            $this->NonTaxIncomeElectronicBill->deserialize($param["NonTaxIncomeElectronicBill"]);
        }

        if (array_key_exists("TrainTicket",$param) and $param["TrainTicket"] !== null) {
            $this->TrainTicket = new TrainTicket();
            $this->TrainTicket->deserialize($param["TrainTicket"]);
        }
    }
}

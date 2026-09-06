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
 * 全电发票（铁路电子客票）
 *
 * @method string getBuyerName() 获取<p>购方名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyerName(string $BuyerName) 设置<p>购方名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuyerTaxCode() 获取<p>购方识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyerTaxCode(string $BuyerTaxCode) 设置<p>购方识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNumber() 获取<p>发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumber(string $Number) 设置<p>发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取<p>开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置<p>开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalCN() 获取<p>价税合计（中文大写）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCN(string $TotalCN) 设置<p>价税合计（中文大写）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTax() 获取<p>税额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTax(string $Tax) 设置<p>税额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceType() 获取<p>业务类型，0：退票，1:售票</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置<p>业务类型，0：退票，1:售票</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeGetOn() 获取<p>出发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeGetOn(string $TimeGetOn) 设置<p>出发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainNumber() 获取<p>车次</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainNumber(string $TrainNumber) 设置<p>车次</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取<p>发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置<p>发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeatType() 获取<p>席别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeatType(string $SeatType) 设置<p>席别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDateGetOn() 获取<p>乘车日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDateGetOn(string $DateGetOn) 设置<p>乘车日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainCabin() 获取<p>车厢</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainCabin(string $TrainCabin) 设置<p>车厢</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStationGetOn() 获取<p>出发站</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStationGetOn(string $StationGetOn) 设置<p>出发站</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getElectronicNumber() 获取<p>电子客票号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElectronicNumber(string $ElectronicNumber) 设置<p>电子客票号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassengerName() 获取<p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassengerName(string $PassengerName) 设置<p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassengerNo() 获取<p>证件号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassengerNo(string $PassengerNo) 设置<p>证件号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAmount() 获取<p>金额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmount(string $Amount) 设置<p>金额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStationGetOff() 获取<p>到达站</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStationGetOff(string $StationGetOff) 设置<p>到达站</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxRate() 获取<p>税率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxRate(string $TaxRate) 设置<p>税率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeat() 获取<p>席位</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeat(string $Seat) 设置<p>席位</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotal() 获取<p>价税合计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(string $Total) 设置<p>价税合计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckCode() 获取<p>校验码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckCode(string $CheckCode) 设置<p>校验码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStateCode() 获取<p>发票状态代码，0正常 1 未更新  2作废 3已红冲</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStateCode(string $StateCode) 设置<p>发票状态代码，0正常 1 未更新  2作废 3已红冲</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>发票类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>发票类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAirConditionerFeature() 获取<p>空调特征</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAirConditionerFeature(string $AirConditionerFeature) 设置<p>空调特征</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTicketType() 获取<p>票种，不替代 VatInvoice.Type。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTicketType(string $TicketType) 设置<p>票种，不替代 VatInvoice.Type。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalTaxRate() 获取<p>原始税率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalTaxRate(string $OriginalTaxRate) 设置<p>原始税率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullElectronicNumber() 获取<p>全电发票号码，映射源字段 qdfphm。</p>
 * @method void setFullElectronicNumber(string $FullElectronicNumber) 设置<p>全电发票号码，映射源字段 qdfphm。</p>
 */
class ElectronicTrainTicket extends AbstractModel
{
    /**
     * @var string <p>购方名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyerName;

    /**
     * @var string <p>购方识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyerTaxCode;

    /**
     * @var string <p>发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Number;

    /**
     * @var string <p>开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var string <p>价税合计（中文大写）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCN;

    /**
     * @var string <p>税额</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tax;

    /**
     * @var string <p>业务类型，0：退票，1:售票</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @var string <p>出发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeGetOn;

    /**
     * @var string <p>车次</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainNumber;

    /**
     * @var string <p>发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string <p>席别</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SeatType;

    /**
     * @var string <p>乘车日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DateGetOn;

    /**
     * @var string <p>车厢</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainCabin;

    /**
     * @var string <p>出发站</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StationGetOn;

    /**
     * @var string <p>电子客票号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElectronicNumber;

    /**
     * @var string <p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassengerName;

    /**
     * @var string <p>证件号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassengerNo;

    /**
     * @var string <p>金额</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Amount;

    /**
     * @var string <p>到达站</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StationGetOff;

    /**
     * @var string <p>税率</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxRate;

    /**
     * @var string <p>席位</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seat;

    /**
     * @var string <p>价税合计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string <p>校验码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckCode;

    /**
     * @var string <p>发票状态代码，0正常 1 未更新  2作废 3已红冲</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StateCode;

    /**
     * @var string <p>发票类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>空调特征</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AirConditionerFeature;

    /**
     * @var string <p>票种，不替代 VatInvoice.Type。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TicketType;

    /**
     * @var string <p>原始税率</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalTaxRate;

    /**
     * @var string <p>全电发票号码，映射源字段 qdfphm。</p>
     */
    public $FullElectronicNumber;

    /**
     * @param string $BuyerName <p>购方名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuyerTaxCode <p>购方识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Number <p>发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date <p>开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalCN <p>价税合计（中文大写）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tax <p>税额</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceType <p>业务类型，0：退票，1:售票</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeGetOn <p>出发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainNumber <p>车次</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code <p>发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SeatType <p>席别</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DateGetOn <p>乘车日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainCabin <p>车厢</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StationGetOn <p>出发站</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ElectronicNumber <p>电子客票号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassengerName <p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassengerNo <p>证件号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Amount <p>金额</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StationGetOff <p>到达站</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxRate <p>税率</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Seat <p>席位</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Total <p>价税合计</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckCode <p>校验码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StateCode <p>发票状态代码，0正常 1 未更新  2作废 3已红冲</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>发票类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AirConditionerFeature <p>空调特征</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TicketType <p>票种，不替代 VatInvoice.Type。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalTaxRate <p>原始税率</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullElectronicNumber <p>全电发票号码，映射源字段 qdfphm。</p>
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
        if (array_key_exists("BuyerName",$param) and $param["BuyerName"] !== null) {
            $this->BuyerName = $param["BuyerName"];
        }

        if (array_key_exists("BuyerTaxCode",$param) and $param["BuyerTaxCode"] !== null) {
            $this->BuyerTaxCode = $param["BuyerTaxCode"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("TotalCN",$param) and $param["TotalCN"] !== null) {
            $this->TotalCN = $param["TotalCN"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("TrainNumber",$param) and $param["TrainNumber"] !== null) {
            $this->TrainNumber = $param["TrainNumber"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("SeatType",$param) and $param["SeatType"] !== null) {
            $this->SeatType = $param["SeatType"];
        }

        if (array_key_exists("DateGetOn",$param) and $param["DateGetOn"] !== null) {
            $this->DateGetOn = $param["DateGetOn"];
        }

        if (array_key_exists("TrainCabin",$param) and $param["TrainCabin"] !== null) {
            $this->TrainCabin = $param["TrainCabin"];
        }

        if (array_key_exists("StationGetOn",$param) and $param["StationGetOn"] !== null) {
            $this->StationGetOn = $param["StationGetOn"];
        }

        if (array_key_exists("ElectronicNumber",$param) and $param["ElectronicNumber"] !== null) {
            $this->ElectronicNumber = $param["ElectronicNumber"];
        }

        if (array_key_exists("PassengerName",$param) and $param["PassengerName"] !== null) {
            $this->PassengerName = $param["PassengerName"];
        }

        if (array_key_exists("PassengerNo",$param) and $param["PassengerNo"] !== null) {
            $this->PassengerNo = $param["PassengerNo"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("StationGetOff",$param) and $param["StationGetOff"] !== null) {
            $this->StationGetOff = $param["StationGetOff"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("Seat",$param) and $param["Seat"] !== null) {
            $this->Seat = $param["Seat"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("StateCode",$param) and $param["StateCode"] !== null) {
            $this->StateCode = $param["StateCode"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AirConditionerFeature",$param) and $param["AirConditionerFeature"] !== null) {
            $this->AirConditionerFeature = $param["AirConditionerFeature"];
        }

        if (array_key_exists("TicketType",$param) and $param["TicketType"] !== null) {
            $this->TicketType = $param["TicketType"];
        }

        if (array_key_exists("OriginalTaxRate",$param) and $param["OriginalTaxRate"] !== null) {
            $this->OriginalTaxRate = $param["OriginalTaxRate"];
        }

        if (array_key_exists("FullElectronicNumber",$param) and $param["FullElectronicNumber"] !== null) {
            $this->FullElectronicNumber = $param["FullElectronicNumber"];
        }
    }
}

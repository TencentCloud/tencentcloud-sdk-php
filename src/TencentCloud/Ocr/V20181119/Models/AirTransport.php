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
 * 机票行程单
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method string getNumber() 获取电子客票号码
 * @method void setNumber(string $Number) 设置电子客票号码
 * @method string getCheckCode() 获取校验码
 * @method void setCheckCode(string $CheckCode) 设置校验码
 * @method string getSerialNumber() 获取印刷序号
 * @method void setSerialNumber(string $SerialNumber) 设置印刷序号
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getAgentCode() 获取销售单位代号
 * @method void setAgentCode(string $AgentCode) 设置销售单位代号
 * @method string getAgentCodeFirst() 获取销售单位代号第一行
 * @method void setAgentCodeFirst(string $AgentCodeFirst) 设置销售单位代号第一行
 * @method string getAgentCodeSecond() 获取销售单位代号第二行
 * @method void setAgentCodeSecond(string $AgentCodeSecond) 设置销售单位代号第二行
 * @method string getUserName() 获取姓名
 * @method void setUserName(string $UserName) 设置姓名
 * @method string getUserID() 获取身份证号
 * @method void setUserID(string $UserID) 设置身份证号
 * @method string getIssuer() 获取填开单位
 * @method void setIssuer(string $Issuer) 设置填开单位
 * @method string getFare() 获取票价
 * @method void setFare(string $Fare) 设置票价
 * @method string getTax() 获取合计税额
 * @method void setTax(string $Tax) 设置合计税额
 * @method string getFuelSurcharge() 获取燃油附加费
 * @method void setFuelSurcharge(string $FuelSurcharge) 设置燃油附加费
 * @method string getAirDevelopmentFund() 获取民航发展基金
 * @method void setAirDevelopmentFund(string $AirDevelopmentFund) 设置民航发展基金
 * @method string getInsurance() 获取保险费
 * @method void setInsurance(string $Insurance) 设置保险费
 * @method string getTotal() 获取合计金额（小写）
 * @method void setTotal(string $Total) 设置合计金额（小写）
 * @method string getKind() 获取发票消费类型
 * @method void setKind(string $Kind) 设置发票消费类型
 * @method string getDomesticInternationalTag() 获取国内国际标签
 * @method void setDomesticInternationalTag(string $DomesticInternationalTag) 设置国内国际标签
 * @method string getDateStart() 获取客票生效日期
 * @method void setDateStart(string $DateStart) 设置客票生效日期
 * @method string getDateEnd() 获取有效截至日期
 * @method void setDateEnd(string $DateEnd) 设置有效截至日期
 * @method string getEndorsement() 获取签注
 * @method void setEndorsement(string $Endorsement) 设置签注
 * @method integer getQRCodeMark() 获取是否存在二维码（1：有，0：无）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（1：有，0：无）
 * @method array getFlightItems() 获取条目
 * @method void setFlightItems(array $FlightItems) 设置条目
 */
class AirTransport extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var string 电子客票号码
     */
    public $Number;

    /**
     * @var string 校验码
     */
    public $CheckCode;

    /**
     * @var string 印刷序号
     */
    public $SerialNumber;

    /**
     * @var string 开票日期
     */
    public $Date;

    /**
     * @var string 销售单位代号
     */
    public $AgentCode;

    /**
     * @var string 销售单位代号第一行
     */
    public $AgentCodeFirst;

    /**
     * @var string 销售单位代号第二行
     */
    public $AgentCodeSecond;

    /**
     * @var string 姓名
     */
    public $UserName;

    /**
     * @var string 身份证号
     */
    public $UserID;

    /**
     * @var string 填开单位
     */
    public $Issuer;

    /**
     * @var string 票价
     */
    public $Fare;

    /**
     * @var string 合计税额
     */
    public $Tax;

    /**
     * @var string 燃油附加费
     */
    public $FuelSurcharge;

    /**
     * @var string 民航发展基金
     */
    public $AirDevelopmentFund;

    /**
     * @var string 保险费
     */
    public $Insurance;

    /**
     * @var string 合计金额（小写）
     */
    public $Total;

    /**
     * @var string 发票消费类型
     */
    public $Kind;

    /**
     * @var string 国内国际标签
     */
    public $DomesticInternationalTag;

    /**
     * @var string 客票生效日期
     */
    public $DateStart;

    /**
     * @var string 有效截至日期
     */
    public $DateEnd;

    /**
     * @var string 签注
     */
    public $Endorsement;

    /**
     * @var integer 是否存在二维码（1：有，0：无）
     */
    public $QRCodeMark;

    /**
     * @var array 条目
     */
    public $FlightItems;

    /**
     * @param string $Title 发票名称
     * @param string $Number 电子客票号码
     * @param string $CheckCode 校验码
     * @param string $SerialNumber 印刷序号
     * @param string $Date 开票日期
     * @param string $AgentCode 销售单位代号
     * @param string $AgentCodeFirst 销售单位代号第一行
     * @param string $AgentCodeSecond 销售单位代号第二行
     * @param string $UserName 姓名
     * @param string $UserID 身份证号
     * @param string $Issuer 填开单位
     * @param string $Fare 票价
     * @param string $Tax 合计税额
     * @param string $FuelSurcharge 燃油附加费
     * @param string $AirDevelopmentFund 民航发展基金
     * @param string $Insurance 保险费
     * @param string $Total 合计金额（小写）
     * @param string $Kind 发票消费类型
     * @param string $DomesticInternationalTag 国内国际标签
     * @param string $DateStart 客票生效日期
     * @param string $DateEnd 有效截至日期
     * @param string $Endorsement 签注
     * @param integer $QRCodeMark 是否存在二维码（1：有，0：无）
     * @param array $FlightItems 条目
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("AgentCode",$param) and $param["AgentCode"] !== null) {
            $this->AgentCode = $param["AgentCode"];
        }

        if (array_key_exists("AgentCodeFirst",$param) and $param["AgentCodeFirst"] !== null) {
            $this->AgentCodeFirst = $param["AgentCodeFirst"];
        }

        if (array_key_exists("AgentCodeSecond",$param) and $param["AgentCodeSecond"] !== null) {
            $this->AgentCodeSecond = $param["AgentCodeSecond"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Fare",$param) and $param["Fare"] !== null) {
            $this->Fare = $param["Fare"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("FuelSurcharge",$param) and $param["FuelSurcharge"] !== null) {
            $this->FuelSurcharge = $param["FuelSurcharge"];
        }

        if (array_key_exists("AirDevelopmentFund",$param) and $param["AirDevelopmentFund"] !== null) {
            $this->AirDevelopmentFund = $param["AirDevelopmentFund"];
        }

        if (array_key_exists("Insurance",$param) and $param["Insurance"] !== null) {
            $this->Insurance = $param["Insurance"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("DomesticInternationalTag",$param) and $param["DomesticInternationalTag"] !== null) {
            $this->DomesticInternationalTag = $param["DomesticInternationalTag"];
        }

        if (array_key_exists("DateStart",$param) and $param["DateStart"] !== null) {
            $this->DateStart = $param["DateStart"];
        }

        if (array_key_exists("DateEnd",$param) and $param["DateEnd"] !== null) {
            $this->DateEnd = $param["DateEnd"];
        }

        if (array_key_exists("Endorsement",$param) and $param["Endorsement"] !== null) {
            $this->Endorsement = $param["Endorsement"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("FlightItems",$param) and $param["FlightItems"] !== null) {
            $this->FlightItems = [];
            foreach ($param["FlightItems"] as $key => $value){
                $obj = new FlightItem();
                $obj->deserialize($value);
                array_push($this->FlightItems, $obj);
            }
        }
    }
}

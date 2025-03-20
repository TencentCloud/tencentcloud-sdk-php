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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节省计划抵扣明细
 *
 * @method string getOwnerUin() 获取账号id
 * @method void setOwnerUin(string $OwnerUin) 设置账号id
 * @method string getOwnerUinName() 获取账号名称
 * @method void setOwnerUinName(string $OwnerUinName) 设置账号名称
 * @method string getPayerUin() 获取抵扣账号id
 * @method void setPayerUin(string $PayerUin) 设置抵扣账号id
 * @method string getPayerUinName() 获取抵扣账号名称
 * @method void setPayerUinName(string $PayerUinName) 设置抵扣账号名称
 * @method string getSpId() 获取节省计划资源id
 * @method void setSpId(string $SpId) 设置节省计划资源id
 * @method string getProductCode() 获取产品编码
 * @method void setProductCode(string $ProductCode) 设置产品编码
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getSubProductCode() 获取子产品编码
 * @method void setSubProductCode(string $SubProductCode) 设置子产品编码
 * @method string getSubProductName() 获取子产品名称
 * @method void setSubProductName(string $SubProductName) 设置子产品名称
 * @method string getOutTradeNo() 获取交易ID
 * @method void setOutTradeNo(string $OutTradeNo) 设置交易ID
 * @method integer getRegionId() 获取地域id
 * @method void setRegionId(integer $RegionId) 设置地域id
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method integer getZoneId() 获取地区id
 * @method void setZoneId(integer $ZoneId) 设置地区id
 * @method string getZoneName() 获取地区名称
 * @method void setZoneName(string $ZoneName) 设置地区名称
 * @method string getSpStartTime() 获取开始使用时间
 * @method void setSpStartTime(string $SpStartTime) 设置开始使用时间
 * @method string getSpEndTime() 获取结束使用时间
 * @method void setSpEndTime(string $SpEndTime) 设置结束使用时间
 * @method string getDeductTime() 获取折扣时间
 * @method void setDeductTime(string $DeductTime) 设置折扣时间
 * @method string getDeductAmount() 获取抵扣金额，单位分
 * @method void setDeductAmount(string $DeductAmount) 设置抵扣金额，单位分
 * @method string getDeductDiscount() 获取抵扣折扣率
 * @method void setDeductDiscount(string $DeductDiscount) 设置抵扣折扣率
 * @method string getDeductRate() 获取抵扣比率
 * @method void setDeductRate(string $DeductRate) 设置抵扣比率
 */
class SavingPlanDeductDetail extends AbstractModel
{
    /**
     * @var string 账号id
     */
    public $OwnerUin;

    /**
     * @var string 账号名称
     */
    public $OwnerUinName;

    /**
     * @var string 抵扣账号id
     */
    public $PayerUin;

    /**
     * @var string 抵扣账号名称
     */
    public $PayerUinName;

    /**
     * @var string 节省计划资源id
     */
    public $SpId;

    /**
     * @var string 产品编码
     */
    public $ProductCode;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 子产品编码
     */
    public $SubProductCode;

    /**
     * @var string 子产品名称
     */
    public $SubProductName;

    /**
     * @var string 交易ID
     */
    public $OutTradeNo;

    /**
     * @var integer 地域id
     */
    public $RegionId;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var integer 地区id
     */
    public $ZoneId;

    /**
     * @var string 地区名称
     */
    public $ZoneName;

    /**
     * @var string 开始使用时间
     */
    public $SpStartTime;

    /**
     * @var string 结束使用时间
     */
    public $SpEndTime;

    /**
     * @var string 折扣时间
     */
    public $DeductTime;

    /**
     * @var string 抵扣金额，单位分
     */
    public $DeductAmount;

    /**
     * @var string 抵扣折扣率
     */
    public $DeductDiscount;

    /**
     * @var string 抵扣比率
     */
    public $DeductRate;

    /**
     * @param string $OwnerUin 账号id
     * @param string $OwnerUinName 账号名称
     * @param string $PayerUin 抵扣账号id
     * @param string $PayerUinName 抵扣账号名称
     * @param string $SpId 节省计划资源id
     * @param string $ProductCode 产品编码
     * @param string $ProductName 产品名称
     * @param string $SubProductCode 子产品编码
     * @param string $SubProductName 子产品名称
     * @param string $OutTradeNo 交易ID
     * @param integer $RegionId 地域id
     * @param string $RegionName 地域名称
     * @param integer $ZoneId 地区id
     * @param string $ZoneName 地区名称
     * @param string $SpStartTime 开始使用时间
     * @param string $SpEndTime 结束使用时间
     * @param string $DeductTime 折扣时间
     * @param string $DeductAmount 抵扣金额，单位分
     * @param string $DeductDiscount 抵扣折扣率
     * @param string $DeductRate 抵扣比率
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
        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerUinName",$param) and $param["OwnerUinName"] !== null) {
            $this->OwnerUinName = $param["OwnerUinName"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("PayerUinName",$param) and $param["PayerUinName"] !== null) {
            $this->PayerUinName = $param["PayerUinName"];
        }

        if (array_key_exists("SpId",$param) and $param["SpId"] !== null) {
            $this->SpId = $param["SpId"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("SpStartTime",$param) and $param["SpStartTime"] !== null) {
            $this->SpStartTime = $param["SpStartTime"];
        }

        if (array_key_exists("SpEndTime",$param) and $param["SpEndTime"] !== null) {
            $this->SpEndTime = $param["SpEndTime"];
        }

        if (array_key_exists("DeductTime",$param) and $param["DeductTime"] !== null) {
            $this->DeductTime = $param["DeductTime"];
        }

        if (array_key_exists("DeductAmount",$param) and $param["DeductAmount"] !== null) {
            $this->DeductAmount = $param["DeductAmount"];
        }

        if (array_key_exists("DeductDiscount",$param) and $param["DeductDiscount"] !== null) {
            $this->DeductDiscount = $param["DeductDiscount"];
        }

        if (array_key_exists("DeductRate",$param) and $param["DeductRate"] !== null) {
            $this->DeductRate = $param["DeductRate"];
        }
    }
}

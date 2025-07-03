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
 * 计量标准接入类产品支持API接口获取用量明细返回数据结构
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method string getUin() 获取账号 ID 是用户在腾讯云的唯一账号标识
 * @method void setUin(string $Uin) 设置账号 ID 是用户在腾讯云的唯一账号标识
 * @method string getDosageType() 获取用量统计类型
 * @method void setDosageType(string $DosageType) 设置用量统计类型
 * @method string getProductCode() 获取产品编码
 * @method void setProductCode(string $ProductCode) 设置产品编码
 * @method string getSubProductCode() 获取子产品编码
 * @method void setSubProductCode(string $SubProductCode) 设置子产品编码
 * @method string getBillingItemCode() 获取组件类型编码

 * @method void setBillingItemCode(string $BillingItemCode) 设置组件类型编码

 * @method string getSubBillingItemCode() 获取组件编码
 * @method void setSubBillingItemCode(string $SubBillingItemCode) 设置组件编码
 * @method string getProductCodeName() 获取产品名称
 * @method void setProductCodeName(string $ProductCodeName) 设置产品名称
 * @method string getSubProductCodeName() 获取子产品名称
 * @method void setSubProductCodeName(string $SubProductCodeName) 设置子产品名称
 * @method string getBillingItemCodeName() 获取组件类型
 * @method void setBillingItemCodeName(string $BillingItemCodeName) 设置组件类型
 * @method string getSubBillingItemCodeName() 获取组件
 * @method void setSubBillingItemCodeName(string $SubBillingItemCodeName) 设置组件
 * @method string getDosageUnit() 获取用量单位
 * @method void setDosageUnit(string $DosageUnit) 设置用量单位
 * @method string getDosageBeginTime() 获取用量起始时间
 * @method void setDosageBeginTime(string $DosageBeginTime) 设置用量起始时间
 * @method string getDosageEndTime() 获取用量截止时间
 * @method void setDosageEndTime(string $DosageEndTime) 设置用量截止时间
 * @method float getDosageValue() 获取标准用量
 * @method void setDosageValue(float $DosageValue) 设置标准用量
 * @method float getDeductValue() 获取抵扣用量
 * @method void setDeductValue(float $DeductValue) 设置抵扣用量
 * @method float getRemainValue() 获取抵扣余量
 * @method void setRemainValue(float $RemainValue) 设置抵扣余量
 * @method string getSdkAppId() 获取sdkAppId
 * @method void setSdkAppId(string $SdkAppId) 设置sdkAppId
 * @method array getAttrStr() 获取其他信息
 * @method void setAttrStr(array $AttrStr) 设置其他信息
 * @method array getSheetName() 获取用量模板名称
 * @method void setSheetName(array $SheetName) 设置用量模板名称
 */
class DescribeDosageDetail extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var string 账号 ID 是用户在腾讯云的唯一账号标识
     */
    public $Uin;

    /**
     * @var string 用量统计类型
     */
    public $DosageType;

    /**
     * @var string 产品编码
     */
    public $ProductCode;

    /**
     * @var string 子产品编码
     */
    public $SubProductCode;

    /**
     * @var string 组件类型编码

     */
    public $BillingItemCode;

    /**
     * @var string 组件编码
     */
    public $SubBillingItemCode;

    /**
     * @var string 产品名称
     */
    public $ProductCodeName;

    /**
     * @var string 子产品名称
     */
    public $SubProductCodeName;

    /**
     * @var string 组件类型
     */
    public $BillingItemCodeName;

    /**
     * @var string 组件
     */
    public $SubBillingItemCodeName;

    /**
     * @var string 用量单位
     */
    public $DosageUnit;

    /**
     * @var string 用量起始时间
     */
    public $DosageBeginTime;

    /**
     * @var string 用量截止时间
     */
    public $DosageEndTime;

    /**
     * @var float 标准用量
     */
    public $DosageValue;

    /**
     * @var float 抵扣用量
     */
    public $DeductValue;

    /**
     * @var float 抵扣余量
     */
    public $RemainValue;

    /**
     * @var string sdkAppId
     */
    public $SdkAppId;

    /**
     * @var array 其他信息
     */
    public $AttrStr;

    /**
     * @var array 用量模板名称
     */
    public $SheetName;

    /**
     * @param string $Date 日期
     * @param string $Uin 账号 ID 是用户在腾讯云的唯一账号标识
     * @param string $DosageType 用量统计类型
     * @param string $ProductCode 产品编码
     * @param string $SubProductCode 子产品编码
     * @param string $BillingItemCode 组件类型编码

     * @param string $SubBillingItemCode 组件编码
     * @param string $ProductCodeName 产品名称
     * @param string $SubProductCodeName 子产品名称
     * @param string $BillingItemCodeName 组件类型
     * @param string $SubBillingItemCodeName 组件
     * @param string $DosageUnit 用量单位
     * @param string $DosageBeginTime 用量起始时间
     * @param string $DosageEndTime 用量截止时间
     * @param float $DosageValue 标准用量
     * @param float $DeductValue 抵扣用量
     * @param float $RemainValue 抵扣余量
     * @param string $SdkAppId sdkAppId
     * @param array $AttrStr 其他信息
     * @param array $SheetName 用量模板名称
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("DosageType",$param) and $param["DosageType"] !== null) {
            $this->DosageType = $param["DosageType"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("BillingItemCode",$param) and $param["BillingItemCode"] !== null) {
            $this->BillingItemCode = $param["BillingItemCode"];
        }

        if (array_key_exists("SubBillingItemCode",$param) and $param["SubBillingItemCode"] !== null) {
            $this->SubBillingItemCode = $param["SubBillingItemCode"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("SubProductCodeName",$param) and $param["SubProductCodeName"] !== null) {
            $this->SubProductCodeName = $param["SubProductCodeName"];
        }

        if (array_key_exists("BillingItemCodeName",$param) and $param["BillingItemCodeName"] !== null) {
            $this->BillingItemCodeName = $param["BillingItemCodeName"];
        }

        if (array_key_exists("SubBillingItemCodeName",$param) and $param["SubBillingItemCodeName"] !== null) {
            $this->SubBillingItemCodeName = $param["SubBillingItemCodeName"];
        }

        if (array_key_exists("DosageUnit",$param) and $param["DosageUnit"] !== null) {
            $this->DosageUnit = $param["DosageUnit"];
        }

        if (array_key_exists("DosageBeginTime",$param) and $param["DosageBeginTime"] !== null) {
            $this->DosageBeginTime = $param["DosageBeginTime"];
        }

        if (array_key_exists("DosageEndTime",$param) and $param["DosageEndTime"] !== null) {
            $this->DosageEndTime = $param["DosageEndTime"];
        }

        if (array_key_exists("DosageValue",$param) and $param["DosageValue"] !== null) {
            $this->DosageValue = $param["DosageValue"];
        }

        if (array_key_exists("DeductValue",$param) and $param["DeductValue"] !== null) {
            $this->DeductValue = $param["DeductValue"];
        }

        if (array_key_exists("RemainValue",$param) and $param["RemainValue"] !== null) {
            $this->RemainValue = $param["RemainValue"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AttrStr",$param) and $param["AttrStr"] !== null) {
            $this->AttrStr = [];
            foreach ($param["AttrStr"] as $key => $value){
                $obj = new JsonObject();
                $obj->deserialize($value);
                array_push($this->AttrStr, $obj);
            }
        }

        if (array_key_exists("SheetName",$param) and $param["SheetName"] !== null) {
            $this->SheetName = $param["SheetName"];
        }
    }
}

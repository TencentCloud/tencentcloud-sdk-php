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
 * 成本分析查询条件
 *
 * @method string getBusinessCodes() 获取产品名称代码
 * @method void setBusinessCodes(string $BusinessCodes) 设置产品名称代码
 * @method string getProductCodes() 获取子产品名称代码
 * @method void setProductCodes(string $ProductCodes) 设置子产品名称代码
 * @method string getComponentCode() 获取组件类型代码
 * @method void setComponentCode(string $ComponentCode) 设置组件类型代码
 * @method string getZoneIds() 获取可用区ID：资源所属可用区ID
 * @method void setZoneIds(string $ZoneIds) 设置可用区ID：资源所属可用区ID
 * @method string getRegionIds() 获取地域ID:资源所属地域ID
 * @method void setRegionIds(string $RegionIds) 设置地域ID:资源所属地域ID
 * @method string getProjectIds() 获取项目ID:资源所属项目ID
 * @method void setProjectIds(string $ProjectIds) 设置项目ID:资源所属项目ID
 * @method string getPayModes() 获取计费模式 prePay(表示包年包月)/postPay(表示按量计费)
 * @method void setPayModes(string $PayModes) 设置计费模式 prePay(表示包年包月)/postPay(表示按量计费)
 * @method string getActionTypes() 获取交易类型，查询交易类型（请使用交易类型code入参）
 * @method void setActionTypes(string $ActionTypes) 设置交易类型，查询交易类型（请使用交易类型code入参）
 * @method string getTags() 获取分账标签键
 * @method void setTags(string $Tags) 设置分账标签键
 * @method string getFeeType() 获取费用类型，查询费用类型（请使用费用类型code入参)入参枚举如下：
cashPayAmount:现金 
incentivePayAmount:赠送金 
voucherPayAmount:优惠券 
tax:税金 
costBeforeTax:税前价
 * @method void setFeeType(string $FeeType) 设置费用类型，查询费用类型（请使用费用类型code入参)入参枚举如下：
cashPayAmount:现金 
incentivePayAmount:赠送金 
voucherPayAmount:优惠券 
tax:税金 
costBeforeTax:税前价
 * @method string getPayerUins() 获取查询成本分析数据的用户UIN
 * @method void setPayerUins(string $PayerUins) 设置查询成本分析数据的用户UIN
 * @method string getOwnerUins() 获取使用资源的用户UIN
 * @method void setOwnerUins(string $OwnerUins) 设置使用资源的用户UIN
 * @method string getConsumptionTypes() 获取消耗类型，查询消耗类型（请使用消耗类型code入参）
 * @method void setConsumptionTypes(string $ConsumptionTypes) 设置消耗类型，查询消耗类型（请使用消耗类型code入参）
 */
class AnalyseConditions extends AbstractModel
{
    /**
     * @var string 产品名称代码
     */
    public $BusinessCodes;

    /**
     * @var string 子产品名称代码
     */
    public $ProductCodes;

    /**
     * @var string 组件类型代码
     */
    public $ComponentCode;

    /**
     * @var string 可用区ID：资源所属可用区ID
     */
    public $ZoneIds;

    /**
     * @var string 地域ID:资源所属地域ID
     */
    public $RegionIds;

    /**
     * @var string 项目ID:资源所属项目ID
     */
    public $ProjectIds;

    /**
     * @var string 计费模式 prePay(表示包年包月)/postPay(表示按量计费)
     */
    public $PayModes;

    /**
     * @var string 交易类型，查询交易类型（请使用交易类型code入参）
     */
    public $ActionTypes;

    /**
     * @var string 分账标签键
     */
    public $Tags;

    /**
     * @var string 费用类型，查询费用类型（请使用费用类型code入参)入参枚举如下：
cashPayAmount:现金 
incentivePayAmount:赠送金 
voucherPayAmount:优惠券 
tax:税金 
costBeforeTax:税前价
     */
    public $FeeType;

    /**
     * @var string 查询成本分析数据的用户UIN
     */
    public $PayerUins;

    /**
     * @var string 使用资源的用户UIN
     */
    public $OwnerUins;

    /**
     * @var string 消耗类型，查询消耗类型（请使用消耗类型code入参）
     */
    public $ConsumptionTypes;

    /**
     * @param string $BusinessCodes 产品名称代码
     * @param string $ProductCodes 子产品名称代码
     * @param string $ComponentCode 组件类型代码
     * @param string $ZoneIds 可用区ID：资源所属可用区ID
     * @param string $RegionIds 地域ID:资源所属地域ID
     * @param string $ProjectIds 项目ID:资源所属项目ID
     * @param string $PayModes 计费模式 prePay(表示包年包月)/postPay(表示按量计费)
     * @param string $ActionTypes 交易类型，查询交易类型（请使用交易类型code入参）
     * @param string $Tags 分账标签键
     * @param string $FeeType 费用类型，查询费用类型（请使用费用类型code入参)入参枚举如下：
cashPayAmount:现金 
incentivePayAmount:赠送金 
voucherPayAmount:优惠券 
tax:税金 
costBeforeTax:税前价
     * @param string $PayerUins 查询成本分析数据的用户UIN
     * @param string $OwnerUins 使用资源的用户UIN
     * @param string $ConsumptionTypes 消耗类型，查询消耗类型（请使用消耗类型code入参）
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
        if (array_key_exists("BusinessCodes",$param) and $param["BusinessCodes"] !== null) {
            $this->BusinessCodes = $param["BusinessCodes"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("PayModes",$param) and $param["PayModes"] !== null) {
            $this->PayModes = $param["PayModes"];
        }

        if (array_key_exists("ActionTypes",$param) and $param["ActionTypes"] !== null) {
            $this->ActionTypes = $param["ActionTypes"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("PayerUins",$param) and $param["PayerUins"] !== null) {
            $this->PayerUins = $param["PayerUins"];
        }

        if (array_key_exists("OwnerUins",$param) and $param["OwnerUins"] !== null) {
            $this->OwnerUins = $param["OwnerUins"];
        }

        if (array_key_exists("ConsumptionTypes",$param) and $param["ConsumptionTypes"] !== null) {
            $this->ConsumptionTypes = $param["ConsumptionTypes"];
        }
    }
}

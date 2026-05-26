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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成本分析查询条件
 *
 * @method string getBusinessCodes() 获取<p>产品名称代码</p>
 * @method void setBusinessCodes(string $BusinessCodes) 设置<p>产品名称代码</p>
 * @method string getProductCodes() 获取<p>子产品名称代码</p>
 * @method void setProductCodes(string $ProductCodes) 设置<p>子产品名称代码</p>
 * @method string getComponentCode() 获取<p>组件类型代码</p>
 * @method void setComponentCode(string $ComponentCode) 设置<p>组件类型代码</p>
 * @method string getZoneIds() 获取<p>可用区ID：资源所属可用区ID</p>
 * @method void setZoneIds(string $ZoneIds) 设置<p>可用区ID：资源所属可用区ID</p>
 * @method string getRegionIds() 获取<p>地域ID:资源所属地域ID</p>
 * @method void setRegionIds(string $RegionIds) 设置<p>地域ID:资源所属地域ID</p>
 * @method string getProjectIds() 获取<p>项目ID:资源所属项目ID</p>
 * @method void setProjectIds(string $ProjectIds) 设置<p>项目ID:资源所属项目ID</p>
 * @method string getPayModes() 获取<p>计费模式 prePay(表示包年包月)/postPay(表示按量计费)</p>
 * @method void setPayModes(string $PayModes) 设置<p>计费模式 prePay(表示包年包月)/postPay(表示按量计费)</p>
 * @method string getActionTypes() 获取<p>交易类型，查询交易类型（请使用交易类型code入参）</p>
 * @method void setActionTypes(string $ActionTypes) 设置<p>交易类型，查询交易类型（请使用交易类型code入参）</p>
 * @method string getTags() 获取<p>分账标签</p>
 * @method void setTags(string $Tags) 设置<p>分账标签</p>
 * @method string getFeeType() 获取<p>费用类型，查询费用类型（请使用费用类型code入参)入参枚举如下：<br>cashPayAmount:现金<br>incentivePayAmount:赠送金<br>voucherPayAmount:优惠券<br>tax:税金<br>costBeforeTax:税前价</p>
 * @method void setFeeType(string $FeeType) 设置<p>费用类型，查询费用类型（请使用费用类型code入参)入参枚举如下：<br>cashPayAmount:现金<br>incentivePayAmount:赠送金<br>voucherPayAmount:优惠券<br>tax:税金<br>costBeforeTax:税前价</p>
 * @method string getPayerUins() 获取<p>查询成本分析数据的用户UIN</p>
 * @method void setPayerUins(string $PayerUins) 设置<p>查询成本分析数据的用户UIN</p>
 * @method string getOwnerUins() 获取<p>使用资源的用户UIN</p>
 * @method void setOwnerUins(string $OwnerUins) 设置<p>使用资源的用户UIN</p>
 * @method string getConsumptionTypes() 获取<p>消耗类型，查询消耗类型（请使用消耗类型code入参）</p>
 * @method void setConsumptionTypes(string $ConsumptionTypes) 设置<p>消耗类型，查询消耗类型（请使用消耗类型code入参）</p>
 */
class AnalyseConditions extends AbstractModel
{
    /**
     * @var string <p>产品名称代码</p>
     */
    public $BusinessCodes;

    /**
     * @var string <p>子产品名称代码</p>
     */
    public $ProductCodes;

    /**
     * @var string <p>组件类型代码</p>
     */
    public $ComponentCode;

    /**
     * @var string <p>可用区ID：资源所属可用区ID</p>
     */
    public $ZoneIds;

    /**
     * @var string <p>地域ID:资源所属地域ID</p>
     */
    public $RegionIds;

    /**
     * @var string <p>项目ID:资源所属项目ID</p>
     */
    public $ProjectIds;

    /**
     * @var string <p>计费模式 prePay(表示包年包月)/postPay(表示按量计费)</p>
     */
    public $PayModes;

    /**
     * @var string <p>交易类型，查询交易类型（请使用交易类型code入参）</p>
     */
    public $ActionTypes;

    /**
     * @var string <p>分账标签</p>
     */
    public $Tags;

    /**
     * @var string <p>费用类型，查询费用类型（请使用费用类型code入参)入参枚举如下：<br>cashPayAmount:现金<br>incentivePayAmount:赠送金<br>voucherPayAmount:优惠券<br>tax:税金<br>costBeforeTax:税前价</p>
     */
    public $FeeType;

    /**
     * @var string <p>查询成本分析数据的用户UIN</p>
     */
    public $PayerUins;

    /**
     * @var string <p>使用资源的用户UIN</p>
     */
    public $OwnerUins;

    /**
     * @var string <p>消耗类型，查询消耗类型（请使用消耗类型code入参）</p>
     */
    public $ConsumptionTypes;

    /**
     * @param string $BusinessCodes <p>产品名称代码</p>
     * @param string $ProductCodes <p>子产品名称代码</p>
     * @param string $ComponentCode <p>组件类型代码</p>
     * @param string $ZoneIds <p>可用区ID：资源所属可用区ID</p>
     * @param string $RegionIds <p>地域ID:资源所属地域ID</p>
     * @param string $ProjectIds <p>项目ID:资源所属项目ID</p>
     * @param string $PayModes <p>计费模式 prePay(表示包年包月)/postPay(表示按量计费)</p>
     * @param string $ActionTypes <p>交易类型，查询交易类型（请使用交易类型code入参）</p>
     * @param string $Tags <p>分账标签</p>
     * @param string $FeeType <p>费用类型，查询费用类型（请使用费用类型code入参)入参枚举如下：<br>cashPayAmount:现金<br>incentivePayAmount:赠送金<br>voucherPayAmount:优惠券<br>tax:税金<br>costBeforeTax:税前价</p>
     * @param string $PayerUins <p>查询成本分析数据的用户UIN</p>
     * @param string $OwnerUins <p>使用资源的用户UIN</p>
     * @param string $ConsumptionTypes <p>消耗类型，查询消耗类型（请使用消耗类型code入参）</p>
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

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
 * 账单筛选条件对象
 *
 * @method integer getTimeRange() 获取<p>只支持6个月和12个月两个值</p>
 * @method void setTimeRange(integer $TimeRange) 设置<p>只支持6个月和12个月两个值</p>
 * @method string getBusinessCode() 获取<p>产品名称代码</p>
 * @method void setBusinessCode(string $BusinessCode) 设置<p>产品名称代码</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method integer getRegionId() 获取<p>地域ID</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域ID</p>
 * @method string getPayMode() 获取<p>付费模式，可选prePay和postPay</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式，可选prePay和postPay</p>
 * @method string getResourceKeyword() 获取<p>资源关键字</p>
 * @method void setResourceKeyword(string $ResourceKeyword) 设置<p>资源关键字</p>
 * @method array getBusinessCodes() 获取<p>产品名称代码</p>
 * @method void setBusinessCodes(array $BusinessCodes) 设置<p>产品名称代码</p>
 * @method array getProductCodes() 获取<p>子产品名称代码</p>
 * @method void setProductCodes(array $ProductCodes) 设置<p>子产品名称代码</p>
 * @method array getRegionIds() 获取<p>地域ID</p>
 * @method void setRegionIds(array $RegionIds) 设置<p>地域ID</p>
 * @method array getProjectIds() 获取<p>项目ID</p>
 * @method void setProjectIds(array $ProjectIds) 设置<p>项目ID</p>
 * @method array getPayModes() 获取<p>付费模式，可选prePay和postPay</p>
 * @method void setPayModes(array $PayModes) 设置<p>付费模式，可选prePay和postPay</p>
 * @method array getActionTypes() 获取<p>交易类型</p>
 * @method void setActionTypes(array $ActionTypes) 设置<p>交易类型</p>
 * @method integer getHideFreeCost() 获取<p>是否隐藏0元流水</p>
 * @method void setHideFreeCost(integer $HideFreeCost) 设置<p>是否隐藏0元流水</p>
 * @method string getOrderByCost() 获取<p>排序规则，可选desc和asc</p>
 * @method void setOrderByCost(string $OrderByCost) 设置<p>排序规则，可选desc和asc</p>
 * @method array getBillIds() 获取<p>交易ID</p>
 * @method void setBillIds(array $BillIds) 设置<p>交易ID</p>
 * @method array getComponentCodes() 获取<p>组件编码</p>
 * @method void setComponentCodes(array $ComponentCodes) 设置<p>组件编码</p>
 * @method array getFileIds() 获取<p>文件ID</p>
 * @method void setFileIds(array $FileIds) 设置<p>文件ID</p>
 * @method array getFileTypes() 获取<p>文件类型</p>
 * @method void setFileTypes(array $FileTypes) 设置<p>文件类型</p>
 * @method array getStatus() 获取<p>状态</p>
 * @method void setStatus(array $Status) 设置<p>状态</p>
 */
class Conditions extends AbstractModel
{
    /**
     * @var integer <p>只支持6个月和12个月两个值</p>
     */
    public $TimeRange;

    /**
     * @var string <p>产品名称代码</p>
     */
    public $BusinessCode;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>地域ID</p>
     */
    public $RegionId;

    /**
     * @var string <p>付费模式，可选prePay和postPay</p>
     */
    public $PayMode;

    /**
     * @var string <p>资源关键字</p>
     */
    public $ResourceKeyword;

    /**
     * @var array <p>产品名称代码</p>
     */
    public $BusinessCodes;

    /**
     * @var array <p>子产品名称代码</p>
     */
    public $ProductCodes;

    /**
     * @var array <p>地域ID</p>
     */
    public $RegionIds;

    /**
     * @var array <p>项目ID</p>
     */
    public $ProjectIds;

    /**
     * @var array <p>付费模式，可选prePay和postPay</p>
     */
    public $PayModes;

    /**
     * @var array <p>交易类型</p>
     */
    public $ActionTypes;

    /**
     * @var integer <p>是否隐藏0元流水</p>
     */
    public $HideFreeCost;

    /**
     * @var string <p>排序规则，可选desc和asc</p>
     */
    public $OrderByCost;

    /**
     * @var array <p>交易ID</p>
     */
    public $BillIds;

    /**
     * @var array <p>组件编码</p>
     */
    public $ComponentCodes;

    /**
     * @var array <p>文件ID</p>
     */
    public $FileIds;

    /**
     * @var array <p>文件类型</p>
     */
    public $FileTypes;

    /**
     * @var array <p>状态</p>
     */
    public $Status;

    /**
     * @param integer $TimeRange <p>只支持6个月和12个月两个值</p>
     * @param string $BusinessCode <p>产品名称代码</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param integer $RegionId <p>地域ID</p>
     * @param string $PayMode <p>付费模式，可选prePay和postPay</p>
     * @param string $ResourceKeyword <p>资源关键字</p>
     * @param array $BusinessCodes <p>产品名称代码</p>
     * @param array $ProductCodes <p>子产品名称代码</p>
     * @param array $RegionIds <p>地域ID</p>
     * @param array $ProjectIds <p>项目ID</p>
     * @param array $PayModes <p>付费模式，可选prePay和postPay</p>
     * @param array $ActionTypes <p>交易类型</p>
     * @param integer $HideFreeCost <p>是否隐藏0元流水</p>
     * @param string $OrderByCost <p>排序规则，可选desc和asc</p>
     * @param array $BillIds <p>交易ID</p>
     * @param array $ComponentCodes <p>组件编码</p>
     * @param array $FileIds <p>文件ID</p>
     * @param array $FileTypes <p>文件类型</p>
     * @param array $Status <p>状态</p>
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceKeyword",$param) and $param["ResourceKeyword"] !== null) {
            $this->ResourceKeyword = $param["ResourceKeyword"];
        }

        if (array_key_exists("BusinessCodes",$param) and $param["BusinessCodes"] !== null) {
            $this->BusinessCodes = $param["BusinessCodes"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
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

        if (array_key_exists("HideFreeCost",$param) and $param["HideFreeCost"] !== null) {
            $this->HideFreeCost = $param["HideFreeCost"];
        }

        if (array_key_exists("OrderByCost",$param) and $param["OrderByCost"] !== null) {
            $this->OrderByCost = $param["OrderByCost"];
        }

        if (array_key_exists("BillIds",$param) and $param["BillIds"] !== null) {
            $this->BillIds = $param["BillIds"];
        }

        if (array_key_exists("ComponentCodes",$param) and $param["ComponentCodes"] !== null) {
            $this->ComponentCodes = $param["ComponentCodes"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("FileTypes",$param) and $param["FileTypes"] !== null) {
            $this->FileTypes = $param["FileTypes"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

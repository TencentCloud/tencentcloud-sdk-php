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
 * 消耗明细数据类型
 *
 * @method string getPayerUin() 获取<p>支付者uin</p>
 * @method void setPayerUin(string $PayerUin) 设置<p>支付者uin</p>
 * @method string getBusinessCodeName() 获取<p>产品名称</p>
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置<p>产品名称</p>
 * @method string getProductCodeName() 获取<p>子产品名称</p>
 * @method void setProductCodeName(string $ProductCodeName) 设置<p>子产品名称</p>
 * @method string getPayModeName() 获取<p>计费模式名称</p>
 * @method void setPayModeName(string $PayModeName) 设置<p>计费模式名称</p>
 * @method string getProjectName() 获取<p>项目名称</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
 * @method string getRegionName() 获取<p>区域名称</p>
 * @method void setRegionName(string $RegionName) 设置<p>区域名称</p>
 * @method string getZoneName() 获取<p>地区名称</p>
 * @method void setZoneName(string $ZoneName) 设置<p>地区名称</p>
 * @method string getResourceId() 获取<p>资源id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源id</p>
 * @method string getResourceName() 获取<p>资源名称</p>
 * @method void setResourceName(string $ResourceName) 设置<p>资源名称</p>
 * @method string getActionTypeName() 获取<p>类型名称</p>
 * @method void setActionTypeName(string $ActionTypeName) 设置<p>类型名称</p>
 * @method string getOrderId() 获取<p>订单id</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单id</p>
 * @method string getBillId() 获取<p>交易id</p>
 * @method void setBillId(string $BillId) 设置<p>交易id</p>
 * @method string getFeeBeginTime() 获取<p>费用开始时间</p>
 * @method void setFeeBeginTime(string $FeeBeginTime) 设置<p>费用开始时间</p>
 * @method string getFeeEndTime() 获取<p>费用结束时间</p>
 * @method void setFeeEndTime(string $FeeEndTime) 设置<p>费用结束时间</p>
 * @method array getComponentSet() 获取<p>组件明细</p>
 * @method void setComponentSet(array $ComponentSet) 设置<p>组件明细</p>
 * @method string getProductCode() 获取<p>子产品名称代码</p>
 * @method void setProductCode(string $ProductCode) 设置<p>子产品名称代码</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 * @method string getOperateUin() 获取<p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
 * @method void setOperateUin(string $OperateUin) 设置<p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
 * @method string getOwnerUin() 获取<p>使用者UIN：实际使用资源的账号 ID</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>使用者UIN：实际使用资源的账号 ID</p>
 * @method string getPayTime() 获取<p>扣费时间：结算扣费时间</p>
 * @method void setPayTime(string $PayTime) 设置<p>扣费时间：结算扣费时间</p>
 */
class CostDetail extends AbstractModel
{
    /**
     * @var string <p>支付者uin</p>
     */
    public $PayerUin;

    /**
     * @var string <p>产品名称</p>
     */
    public $BusinessCodeName;

    /**
     * @var string <p>子产品名称</p>
     */
    public $ProductCodeName;

    /**
     * @var string <p>计费模式名称</p>
     */
    public $PayModeName;

    /**
     * @var string <p>项目名称</p>
     */
    public $ProjectName;

    /**
     * @var string <p>区域名称</p>
     */
    public $RegionName;

    /**
     * @var string <p>地区名称</p>
     */
    public $ZoneName;

    /**
     * @var string <p>资源id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源名称</p>
     */
    public $ResourceName;

    /**
     * @var string <p>类型名称</p>
     */
    public $ActionTypeName;

    /**
     * @var string <p>订单id</p>
     */
    public $OrderId;

    /**
     * @var string <p>交易id</p>
     */
    public $BillId;

    /**
     * @var string <p>费用开始时间</p>
     */
    public $FeeBeginTime;

    /**
     * @var string <p>费用结束时间</p>
     */
    public $FeeEndTime;

    /**
     * @var array <p>组件明细</p>
     */
    public $ComponentSet;

    /**
     * @var string <p>子产品名称代码</p>
     */
    public $ProductCode;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @var string <p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
     */
    public $OperateUin;

    /**
     * @var string <p>使用者UIN：实际使用资源的账号 ID</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>扣费时间：结算扣费时间</p>
     */
    public $PayTime;

    /**
     * @param string $PayerUin <p>支付者uin</p>
     * @param string $BusinessCodeName <p>产品名称</p>
     * @param string $ProductCodeName <p>子产品名称</p>
     * @param string $PayModeName <p>计费模式名称</p>
     * @param string $ProjectName <p>项目名称</p>
     * @param string $RegionName <p>区域名称</p>
     * @param string $ZoneName <p>地区名称</p>
     * @param string $ResourceId <p>资源id</p>
     * @param string $ResourceName <p>资源名称</p>
     * @param string $ActionTypeName <p>类型名称</p>
     * @param string $OrderId <p>订单id</p>
     * @param string $BillId <p>交易id</p>
     * @param string $FeeBeginTime <p>费用开始时间</p>
     * @param string $FeeEndTime <p>费用结束时间</p>
     * @param array $ComponentSet <p>组件明细</p>
     * @param string $ProductCode <p>子产品名称代码</p>
     * @param array $Tags <p>标签信息</p>
     * @param string $OperateUin <p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
     * @param string $OwnerUin <p>使用者UIN：实际使用资源的账号 ID</p>
     * @param string $PayTime <p>扣费时间：结算扣费时间</p>
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
        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("ComponentSet",$param) and $param["ComponentSet"] !== null) {
            $this->ComponentSet = [];
            foreach ($param["ComponentSet"] as $key => $value){
                $obj = new CostComponentSet();
                $obj->deserialize($value);
                array_push($this->ComponentSet, $obj);
            }
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new BillTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }
    }
}

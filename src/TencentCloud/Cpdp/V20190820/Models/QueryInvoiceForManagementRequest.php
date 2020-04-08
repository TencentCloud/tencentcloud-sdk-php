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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryInvoiceForManagement请求参数结构体
 *
 * @method integer getInvoicePlatformId() 获取开票平台ID
 * @method void setInvoicePlatformId(integer $InvoicePlatformId) 设置开票平台ID
 * @method integer getInvoiceStatus() 获取开票状态
 * @method void setInvoiceStatus(integer $InvoiceStatus) 设置开票状态
 * @method integer getRedInvoiceStatus() 获取红冲状态
 * @method void setRedInvoiceStatus(integer $RedInvoiceStatus) 设置红冲状态
 * @method string getBeginTime() 获取开始时间
 * @method void setBeginTime(string $BeginTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method integer getLimit() 获取页大小
 * @method void setLimit(integer $Limit) 设置页大小
 * @method string getOrderId() 获取订单号
 * @method void setOrderId(string $OrderId) 设置订单号
 * @method string getInvoiceId() 获取发票ID
 * @method void setInvoiceId(string $InvoiceId) 设置发票ID
 * @method string getOrderSn() 获取业务开票号
 * @method void setOrderSn(string $OrderSn) 设置业务开票号
 * @method string getInvoiceSn() 获取发票号码
 * @method void setInvoiceSn(string $InvoiceSn) 设置发票号码
 * @method string getInvoiceCode() 获取发票代码
 * @method void setInvoiceCode(string $InvoiceCode) 设置发票代码
 * @method string getProfile() 获取接入环境。沙箱环境填 sandbox。
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填 sandbox。
 */
class QueryInvoiceForManagementRequest extends AbstractModel
{
    /**
     * @var integer 开票平台ID
     */
    public $InvoicePlatformId;

    /**
     * @var integer 开票状态
     */
    public $InvoiceStatus;

    /**
     * @var integer 红冲状态
     */
    public $RedInvoiceStatus;

    /**
     * @var string 开始时间
     */
    public $BeginTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var integer 页大小
     */
    public $Limit;

    /**
     * @var string 订单号
     */
    public $OrderId;

    /**
     * @var string 发票ID
     */
    public $InvoiceId;

    /**
     * @var string 业务开票号
     */
    public $OrderSn;

    /**
     * @var string 发票号码
     */
    public $InvoiceSn;

    /**
     * @var string 发票代码
     */
    public $InvoiceCode;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。
     */
    public $Profile;

    /**
     * @param integer $InvoicePlatformId 开票平台ID
     * @param integer $InvoiceStatus 开票状态
     * @param integer $RedInvoiceStatus 红冲状态
     * @param string $BeginTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $Offset 页码
     * @param integer $Limit 页大小
     * @param string $OrderId 订单号
     * @param string $InvoiceId 发票ID
     * @param string $OrderSn 业务开票号
     * @param string $InvoiceSn 发票号码
     * @param string $InvoiceCode 发票代码
     * @param string $Profile 接入环境。沙箱环境填 sandbox。
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
        if (array_key_exists("InvoicePlatformId",$param) and $param["InvoicePlatformId"] !== null) {
            $this->InvoicePlatformId = $param["InvoicePlatformId"];
        }

        if (array_key_exists("InvoiceStatus",$param) and $param["InvoiceStatus"] !== null) {
            $this->InvoiceStatus = $param["InvoiceStatus"];
        }

        if (array_key_exists("RedInvoiceStatus",$param) and $param["RedInvoiceStatus"] !== null) {
            $this->RedInvoiceStatus = $param["RedInvoiceStatus"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("InvoiceId",$param) and $param["InvoiceId"] !== null) {
            $this->InvoiceId = $param["InvoiceId"];
        }

        if (array_key_exists("OrderSn",$param) and $param["OrderSn"] !== null) {
            $this->OrderSn = $param["OrderSn"];
        }

        if (array_key_exists("InvoiceSn",$param) and $param["InvoiceSn"] !== null) {
            $this->InvoiceSn = $param["InvoiceSn"];
        }

        if (array_key_exists("InvoiceCode",$param) and $param["InvoiceCode"] !== null) {
            $this->InvoiceCode = $param["InvoiceCode"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}

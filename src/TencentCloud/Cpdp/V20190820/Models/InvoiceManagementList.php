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
 * 发票管理端列表
 *
 * @method string getInvoiceId() 获取发票ID
 * @method void setInvoiceId(string $InvoiceId) 设置发票ID
 * @method string getOrderId() 获取订单号
 * @method void setOrderId(string $OrderId) 设置订单号
 * @method string getSellerName() 获取销方名称
 * @method void setSellerName(string $SellerName) 设置销方名称
 * @method string getOrderSn() 获取业务开票号
 * @method void setOrderSn(string $OrderSn) 设置业务开票号
 * @method integer getInvoicePlatformId() 获取开票平台ID
 * @method void setInvoicePlatformId(integer $InvoicePlatformId) 设置开票平台ID
 * @method string getAppId() 获取腾讯云AppId
 * @method void setAppId(string $AppId) 设置腾讯云AppId
 * @method string getInvoiceSn() 获取开票号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvoiceSn(string $InvoiceSn) 设置开票号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvoiceCode() 获取开票代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvoiceCode(string $InvoiceCode) 设置开票代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRedStatus() 获取红冲状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedStatus(integer $RedStatus) 设置红冲状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotifyTime() 获取开票通知时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotifyTime(string $NotifyTime) 设置开票通知时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAmountHasTax() 获取含税总金额
 * @method void setAmountHasTax(string $AmountHasTax) 设置含税总金额
 * @method integer getInvoiceType() 获取发票类型
 * @method void setInvoiceType(integer $InvoiceType) 设置发票类型
 * @method integer getInvoiceStatus() 获取开票状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvoiceStatus(integer $InvoiceStatus) 设置开票状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class InvoiceManagementList extends AbstractModel
{
    /**
     * @var string 发票ID
     */
    public $InvoiceId;

    /**
     * @var string 订单号
     */
    public $OrderId;

    /**
     * @var string 销方名称
     */
    public $SellerName;

    /**
     * @var string 业务开票号
     */
    public $OrderSn;

    /**
     * @var integer 开票平台ID
     */
    public $InvoicePlatformId;

    /**
     * @var string 腾讯云AppId
     */
    public $AppId;

    /**
     * @var string 开票号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvoiceSn;

    /**
     * @var string 开票代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvoiceCode;

    /**
     * @var integer 红冲状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedStatus;

    /**
     * @var string 开票通知时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotifyTime;

    /**
     * @var string 含税总金额
     */
    public $AmountHasTax;

    /**
     * @var integer 发票类型
     */
    public $InvoiceType;

    /**
     * @var integer 开票状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvoiceStatus;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $InvoiceId 发票ID
     * @param string $OrderId 订单号
     * @param string $SellerName 销方名称
     * @param string $OrderSn 业务开票号
     * @param integer $InvoicePlatformId 开票平台ID
     * @param string $AppId 腾讯云AppId
     * @param string $InvoiceSn 开票号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvoiceCode 开票代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RedStatus 红冲状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NotifyTime 开票通知时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AmountHasTax 含税总金额
     * @param integer $InvoiceType 发票类型
     * @param integer $InvoiceStatus 开票状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("InvoiceId",$param) and $param["InvoiceId"] !== null) {
            $this->InvoiceId = $param["InvoiceId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("SellerName",$param) and $param["SellerName"] !== null) {
            $this->SellerName = $param["SellerName"];
        }

        if (array_key_exists("OrderSn",$param) and $param["OrderSn"] !== null) {
            $this->OrderSn = $param["OrderSn"];
        }

        if (array_key_exists("InvoicePlatformId",$param) and $param["InvoicePlatformId"] !== null) {
            $this->InvoicePlatformId = $param["InvoicePlatformId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("InvoiceSn",$param) and $param["InvoiceSn"] !== null) {
            $this->InvoiceSn = $param["InvoiceSn"];
        }

        if (array_key_exists("InvoiceCode",$param) and $param["InvoiceCode"] !== null) {
            $this->InvoiceCode = $param["InvoiceCode"];
        }

        if (array_key_exists("RedStatus",$param) and $param["RedStatus"] !== null) {
            $this->RedStatus = $param["RedStatus"];
        }

        if (array_key_exists("NotifyTime",$param) and $param["NotifyTime"] !== null) {
            $this->NotifyTime = $param["NotifyTime"];
        }

        if (array_key_exists("AmountHasTax",$param) and $param["AmountHasTax"] !== null) {
            $this->AmountHasTax = $param["AmountHasTax"];
        }

        if (array_key_exists("InvoiceType",$param) and $param["InvoiceType"] !== null) {
            $this->InvoiceType = $param["InvoiceType"];
        }

        if (array_key_exists("InvoiceStatus",$param) and $param["InvoiceStatus"] !== null) {
            $this->InvoiceStatus = $param["InvoiceStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

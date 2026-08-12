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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 物流信息
 *
 * @method string getDeliveryMethod() 获取<p>物流方式</p><ul><li>physical：物理投送</li><li>electonic：电子投送</li></ul>
 * @method void setDeliveryMethod(string $DeliveryMethod) 设置<p>物流方式</p><ul><li>physical：物理投送</li><li>electonic：电子投送</li></ul>
 * @method Amount getDeliveryAmount() 获取<p>物流费用</p>
 * @method void setDeliveryAmount(Amount $DeliveryAmount) 设置<p>物流费用</p>
 * @method Address getDeliveryAddress() 获取<p>收货地址</p>
 * @method void setDeliveryAddress(Address $DeliveryAddress) 设置<p>收货地址</p>
 * @method string getConsigneePhone() 获取<p>收货人电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method void setConsigneePhone(string $ConsigneePhone) 设置<p>收货人电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method string getConsigneeEmail() 获取<p>收货人邮箱</p>
 * @method void setConsigneeEmail(string $ConsigneeEmail) 设置<p>收货人邮箱</p>
 * @method string getConsigneeName() 获取<p>收货人姓名</p>
 * @method void setConsigneeName(string $ConsigneeName) 设置<p>收货人姓名</p>
 * @method boolean getExpedited() 获取<p>是否加急</p>
 * @method void setExpedited(boolean $Expedited) 设置<p>是否加急</p>
 * @method string getDeliveryCarrier() 获取<p>物流厂商，一般是物流的公司</p>
 * @method void setDeliveryCarrier(string $DeliveryCarrier) 设置<p>物流厂商，一般是物流的公司</p>
 * @method string getDeliveryTracking() 获取<p>物流追踪单号</p>
 * @method void setDeliveryTracking(string $DeliveryTracking) 设置<p>物流追踪单号</p>
 */
class Delivery extends AbstractModel
{
    /**
     * @var string <p>物流方式</p><ul><li>physical：物理投送</li><li>electonic：电子投送</li></ul>
     */
    public $DeliveryMethod;

    /**
     * @var Amount <p>物流费用</p>
     */
    public $DeliveryAmount;

    /**
     * @var Address <p>收货地址</p>
     */
    public $DeliveryAddress;

    /**
     * @var string <p>收货人电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     */
    public $ConsigneePhone;

    /**
     * @var string <p>收货人邮箱</p>
     */
    public $ConsigneeEmail;

    /**
     * @var string <p>收货人姓名</p>
     */
    public $ConsigneeName;

    /**
     * @var boolean <p>是否加急</p>
     */
    public $Expedited;

    /**
     * @var string <p>物流厂商，一般是物流的公司</p>
     */
    public $DeliveryCarrier;

    /**
     * @var string <p>物流追踪单号</p>
     */
    public $DeliveryTracking;

    /**
     * @param string $DeliveryMethod <p>物流方式</p><ul><li>physical：物理投送</li><li>electonic：电子投送</li></ul>
     * @param Amount $DeliveryAmount <p>物流费用</p>
     * @param Address $DeliveryAddress <p>收货地址</p>
     * @param string $ConsigneePhone <p>收货人电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     * @param string $ConsigneeEmail <p>收货人邮箱</p>
     * @param string $ConsigneeName <p>收货人姓名</p>
     * @param boolean $Expedited <p>是否加急</p>
     * @param string $DeliveryCarrier <p>物流厂商，一般是物流的公司</p>
     * @param string $DeliveryTracking <p>物流追踪单号</p>
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
        if (array_key_exists("DeliveryMethod",$param) and $param["DeliveryMethod"] !== null) {
            $this->DeliveryMethod = $param["DeliveryMethod"];
        }

        if (array_key_exists("DeliveryAmount",$param) and $param["DeliveryAmount"] !== null) {
            $this->DeliveryAmount = new Amount();
            $this->DeliveryAmount->deserialize($param["DeliveryAmount"]);
        }

        if (array_key_exists("DeliveryAddress",$param) and $param["DeliveryAddress"] !== null) {
            $this->DeliveryAddress = new Address();
            $this->DeliveryAddress->deserialize($param["DeliveryAddress"]);
        }

        if (array_key_exists("ConsigneePhone",$param) and $param["ConsigneePhone"] !== null) {
            $this->ConsigneePhone = $param["ConsigneePhone"];
        }

        if (array_key_exists("ConsigneeEmail",$param) and $param["ConsigneeEmail"] !== null) {
            $this->ConsigneeEmail = $param["ConsigneeEmail"];
        }

        if (array_key_exists("ConsigneeName",$param) and $param["ConsigneeName"] !== null) {
            $this->ConsigneeName = $param["ConsigneeName"];
        }

        if (array_key_exists("Expedited",$param) and $param["Expedited"] !== null) {
            $this->Expedited = $param["Expedited"];
        }

        if (array_key_exists("DeliveryCarrier",$param) and $param["DeliveryCarrier"] !== null) {
            $this->DeliveryCarrier = $param["DeliveryCarrier"];
        }

        if (array_key_exists("DeliveryTracking",$param) and $param["DeliveryTracking"] !== null) {
            $this->DeliveryTracking = $param["DeliveryTracking"];
        }
    }
}

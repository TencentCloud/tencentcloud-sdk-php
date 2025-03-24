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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 物流上门收货信息
 *
 * @method string getLogisticsArrivalTime() 获取物流预计上门时间
 * @method void setLogisticsArrivalTime(string $LogisticsArrivalTime) 设置物流预计上门时间
 * @method string getLogisticsCompany() 获取物流公司名称
 * @method void setLogisticsCompany(string $LogisticsCompany) 设置物流公司名称
 * @method string getLogisticsStuff() 获取物流联系人
 * @method void setLogisticsStuff(string $LogisticsStuff) 设置物流联系人
 * @method string getLogisticsStuffContact() 获取物流电话
 * @method void setLogisticsStuffContact(string $LogisticsStuffContact) 设置物流电话
 * @method string getReceiverContact() 获取收货人电话
 * @method void setReceiverContact(string $ReceiverContact) 设置收货人电话
 * @method string getReceiverName() 获取收货人姓名
 * @method void setReceiverName(string $ReceiverName) 设置收货人姓名
 * @method string getShippingAddress() 获取收货地址
 * @method void setShippingAddress(string $ShippingAddress) 设置收货地址
 */
class LogisticsReceipt extends AbstractModel
{
    /**
     * @var string 物流预计上门时间
     */
    public $LogisticsArrivalTime;

    /**
     * @var string 物流公司名称
     */
    public $LogisticsCompany;

    /**
     * @var string 物流联系人
     */
    public $LogisticsStuff;

    /**
     * @var string 物流电话
     */
    public $LogisticsStuffContact;

    /**
     * @var string 收货人电话
     */
    public $ReceiverContact;

    /**
     * @var string 收货人姓名
     */
    public $ReceiverName;

    /**
     * @var string 收货地址
     */
    public $ShippingAddress;

    /**
     * @param string $LogisticsArrivalTime 物流预计上门时间
     * @param string $LogisticsCompany 物流公司名称
     * @param string $LogisticsStuff 物流联系人
     * @param string $LogisticsStuffContact 物流电话
     * @param string $ReceiverContact 收货人电话
     * @param string $ReceiverName 收货人姓名
     * @param string $ShippingAddress 收货地址
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
        if (array_key_exists("LogisticsArrivalTime",$param) and $param["LogisticsArrivalTime"] !== null) {
            $this->LogisticsArrivalTime = $param["LogisticsArrivalTime"];
        }

        if (array_key_exists("LogisticsCompany",$param) and $param["LogisticsCompany"] !== null) {
            $this->LogisticsCompany = $param["LogisticsCompany"];
        }

        if (array_key_exists("LogisticsStuff",$param) and $param["LogisticsStuff"] !== null) {
            $this->LogisticsStuff = $param["LogisticsStuff"];
        }

        if (array_key_exists("LogisticsStuffContact",$param) and $param["LogisticsStuffContact"] !== null) {
            $this->LogisticsStuffContact = $param["LogisticsStuffContact"];
        }

        if (array_key_exists("ReceiverContact",$param) and $param["ReceiverContact"] !== null) {
            $this->ReceiverContact = $param["ReceiverContact"];
        }

        if (array_key_exists("ReceiverName",$param) and $param["ReceiverName"] !== null) {
            $this->ReceiverName = $param["ReceiverName"];
        }

        if (array_key_exists("ShippingAddress",$param) and $param["ShippingAddress"] !== null) {
            $this->ShippingAddress = $param["ShippingAddress"];
        }
    }
}

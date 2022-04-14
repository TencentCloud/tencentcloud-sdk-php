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
 * 门店信息
 *
 * @method string getStoreId() 获取门店ID。
 * @method void setStoreId(string $StoreId) 设置门店ID。
 * @method string getStoreName() 获取门店名称。
 * @method void setStoreName(string $StoreName) 设置门店名称。
 * @method string getStoreAddress() 获取门店地址。
 * @method void setStoreAddress(string $StoreAddress) 设置门店地址。
 * @method string getStoreAreaCode() 获取门店地区代码。
 * @method void setStoreAreaCode(string $StoreAreaCode) 设置门店地区代码。
 * @method string getStoreDeviceId() 获取设备ID。
wechat_ecommerce渠道 - h5支付方式，此字段必填。
 * @method void setStoreDeviceId(string $StoreDeviceId) 设置设备ID。
wechat_ecommerce渠道 - h5支付方式，此字段必填。
 */
class CloudStoreInfo extends AbstractModel
{
    /**
     * @var string 门店ID。
     */
    public $StoreId;

    /**
     * @var string 门店名称。
     */
    public $StoreName;

    /**
     * @var string 门店地址。
     */
    public $StoreAddress;

    /**
     * @var string 门店地区代码。
     */
    public $StoreAreaCode;

    /**
     * @var string 设备ID。
wechat_ecommerce渠道 - h5支付方式，此字段必填。
     */
    public $StoreDeviceId;

    /**
     * @param string $StoreId 门店ID。
     * @param string $StoreName 门店名称。
     * @param string $StoreAddress 门店地址。
     * @param string $StoreAreaCode 门店地区代码。
     * @param string $StoreDeviceId 设备ID。
wechat_ecommerce渠道 - h5支付方式，此字段必填。
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
        if (array_key_exists("StoreId",$param) and $param["StoreId"] !== null) {
            $this->StoreId = $param["StoreId"];
        }

        if (array_key_exists("StoreName",$param) and $param["StoreName"] !== null) {
            $this->StoreName = $param["StoreName"];
        }

        if (array_key_exists("StoreAddress",$param) and $param["StoreAddress"] !== null) {
            $this->StoreAddress = $param["StoreAddress"];
        }

        if (array_key_exists("StoreAreaCode",$param) and $param["StoreAreaCode"] !== null) {
            $this->StoreAreaCode = $param["StoreAreaCode"];
        }

        if (array_key_exists("StoreDeviceId",$param) and $param["StoreDeviceId"] !== null) {
            $this->StoreDeviceId = $param["StoreDeviceId"];
        }
    }
}

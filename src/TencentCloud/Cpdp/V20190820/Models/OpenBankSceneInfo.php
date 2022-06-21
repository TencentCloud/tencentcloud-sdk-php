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
 * 云企付-设备信息
 *
 * @method string getPayerClientIp() 获取用户端实际 ip。汇付渠道必填。
 * @method void setPayerClientIp(string $PayerClientIp) 设置用户端实际 ip。汇付渠道必填。
 * @method string getPayerUa() 获取浏览器 User-Agent。
 * @method void setPayerUa(string $PayerUa) 设置浏览器 User-Agent。
 * @method string getOrderTime() 获取用户下单时间。若不上送，服务端默认当前时间。
 * @method void setOrderTime(string $OrderTime) 设置用户下单时间。若不上送，服务端默认当前时间。
 * @method string getDeviceId() 获取终端设备号（门店号或收银设备 ID），示例值：POS1:1。
 * @method void setDeviceId(string $DeviceId) 设置终端设备号（门店号或收银设备 ID），示例值：POS1:1。
 * @method string getDeviceType() 获取终端设备类型。MOBILE_BROWSER:手机浏览器，MOBILE_APP:手机应用程序，TABLET:平板；WATCH:手表，PC:电脑PC，OTHER:其他。
汇付渠道必填。
 * @method void setDeviceType(string $DeviceType) 设置终端设备类型。MOBILE_BROWSER:手机浏览器，MOBILE_APP:手机应用程序，TABLET:平板；WATCH:手表，PC:电脑PC，OTHER:其他。
汇付渠道必填。
 */
class OpenBankSceneInfo extends AbstractModel
{
    /**
     * @var string 用户端实际 ip。汇付渠道必填。
     */
    public $PayerClientIp;

    /**
     * @var string 浏览器 User-Agent。
     */
    public $PayerUa;

    /**
     * @var string 用户下单时间。若不上送，服务端默认当前时间。
     */
    public $OrderTime;

    /**
     * @var string 终端设备号（门店号或收银设备 ID），示例值：POS1:1。
     */
    public $DeviceId;

    /**
     * @var string 终端设备类型。MOBILE_BROWSER:手机浏览器，MOBILE_APP:手机应用程序，TABLET:平板；WATCH:手表，PC:电脑PC，OTHER:其他。
汇付渠道必填。
     */
    public $DeviceType;

    /**
     * @param string $PayerClientIp 用户端实际 ip。汇付渠道必填。
     * @param string $PayerUa 浏览器 User-Agent。
     * @param string $OrderTime 用户下单时间。若不上送，服务端默认当前时间。
     * @param string $DeviceId 终端设备号（门店号或收银设备 ID），示例值：POS1:1。
     * @param string $DeviceType 终端设备类型。MOBILE_BROWSER:手机浏览器，MOBILE_APP:手机应用程序，TABLET:平板；WATCH:手表，PC:电脑PC，OTHER:其他。
汇付渠道必填。
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
        if (array_key_exists("PayerClientIp",$param) and $param["PayerClientIp"] !== null) {
            $this->PayerClientIp = $param["PayerClientIp"];
        }

        if (array_key_exists("PayerUa",$param) and $param["PayerUa"] !== null) {
            $this->PayerUa = $param["PayerUa"];
        }

        if (array_key_exists("OrderTime",$param) and $param["OrderTime"] !== null) {
            $this->OrderTime = $param["OrderTime"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}

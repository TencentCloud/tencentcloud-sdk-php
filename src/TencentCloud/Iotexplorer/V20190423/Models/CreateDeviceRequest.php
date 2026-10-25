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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDevice请求参数结构体
 *
 * @method string getProductId() 获取<p>产品ID。</p>
 * @method void setProductId(string $ProductId) 设置<p>产品ID。</p>
 * @method string getDeviceName() 获取<p>设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。</p>
 * @method string getDevAddr() 获取<p>LoRaWAN 设备地址</p>
 * @method void setDevAddr(string $DevAddr) 设置<p>LoRaWAN 设备地址</p>
 * @method string getAppKey() 获取<p>LoRaWAN 应用密钥</p>
 * @method void setAppKey(string $AppKey) 设置<p>LoRaWAN 应用密钥</p>
 * @method string getDevEUI() 获取<p>LoRaWAN 设备唯一标识</p>
 * @method void setDevEUI(string $DevEUI) 设置<p>LoRaWAN 设备唯一标识</p>
 * @method string getAppSKey() 获取<p>LoRaWAN 应用会话密钥</p>
 * @method void setAppSKey(string $AppSKey) 设置<p>LoRaWAN 应用会话密钥</p>
 * @method string getNwkSKey() 获取<p>LoRaWAN 网络会话密钥</p>
 * @method void setNwkSKey(string $NwkSKey) 设置<p>LoRaWAN 网络会话密钥</p>
 * @method string getDefinedPsk() 获取<p>手动指定设备的PSK密钥</p>
 * @method void setDefinedPsk(string $DefinedPsk) 设置<p>手动指定设备的PSK密钥</p>
 * @method string getTlsCrt() 获取<p>设备证书。第三方CA证书认证的产品下必填；腾讯云CA证书产品传入会报错；非证书认证产品传入会被忽略</p>
 * @method void setTlsCrt(string $TlsCrt) 设置<p>设备证书。第三方CA证书认证的产品下必填；腾讯云CA证书产品传入会报错；非证书认证产品传入会被忽略</p>
 */
class CreateDeviceRequest extends AbstractModel
{
    /**
     * @var string <p>产品ID。</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。</p>
     */
    public $DeviceName;

    /**
     * @var string <p>LoRaWAN 设备地址</p>
     */
    public $DevAddr;

    /**
     * @var string <p>LoRaWAN 应用密钥</p>
     */
    public $AppKey;

    /**
     * @var string <p>LoRaWAN 设备唯一标识</p>
     */
    public $DevEUI;

    /**
     * @var string <p>LoRaWAN 应用会话密钥</p>
     */
    public $AppSKey;

    /**
     * @var string <p>LoRaWAN 网络会话密钥</p>
     */
    public $NwkSKey;

    /**
     * @var string <p>手动指定设备的PSK密钥</p>
     */
    public $DefinedPsk;

    /**
     * @var string <p>设备证书。第三方CA证书认证的产品下必填；腾讯云CA证书产品传入会报错；非证书认证产品传入会被忽略</p>
     */
    public $TlsCrt;

    /**
     * @param string $ProductId <p>产品ID。</p>
     * @param string $DeviceName <p>设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。</p>
     * @param string $DevAddr <p>LoRaWAN 设备地址</p>
     * @param string $AppKey <p>LoRaWAN 应用密钥</p>
     * @param string $DevEUI <p>LoRaWAN 设备唯一标识</p>
     * @param string $AppSKey <p>LoRaWAN 应用会话密钥</p>
     * @param string $NwkSKey <p>LoRaWAN 网络会话密钥</p>
     * @param string $DefinedPsk <p>手动指定设备的PSK密钥</p>
     * @param string $TlsCrt <p>设备证书。第三方CA证书认证的产品下必填；腾讯云CA证书产品传入会报错；非证书认证产品传入会被忽略</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DevAddr",$param) and $param["DevAddr"] !== null) {
            $this->DevAddr = $param["DevAddr"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("DevEUI",$param) and $param["DevEUI"] !== null) {
            $this->DevEUI = $param["DevEUI"];
        }

        if (array_key_exists("AppSKey",$param) and $param["AppSKey"] !== null) {
            $this->AppSKey = $param["AppSKey"];
        }

        if (array_key_exists("NwkSKey",$param) and $param["NwkSKey"] !== null) {
            $this->NwkSKey = $param["NwkSKey"];
        }

        if (array_key_exists("DefinedPsk",$param) and $param["DefinedPsk"] !== null) {
            $this->DefinedPsk = $param["DefinedPsk"];
        }

        if (array_key_exists("TlsCrt",$param) and $param["TlsCrt"] !== null) {
            $this->TlsCrt = $param["TlsCrt"];
        }
    }
}

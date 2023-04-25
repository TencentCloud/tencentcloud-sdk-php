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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCdbProxyAddressVipAndVPort请求参数结构体
 *
 * @method string getProxyGroupId() 获取代理组ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组ID
 * @method string getProxyAddressId() 获取代理组地址ID
 * @method void setProxyAddressId(string $ProxyAddressId) 设置代理组地址ID
 * @method string getUniqVpcId() 获取私有网络ID
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络ID
 * @method string getUniqSubnetId() 获取私有子网ID
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有子网ID
 * @method string getVip() 获取IP地址
 * @method void setVip(string $Vip) 设置IP地址
 * @method integer getVPort() 获取端口
 * @method void setVPort(integer $VPort) 设置端口
 * @method integer getReleaseDuration() 获取旧IP地址回收时间
 * @method void setReleaseDuration(integer $ReleaseDuration) 设置旧IP地址回收时间
 */
class ModifyCdbProxyAddressVipAndVPortRequest extends AbstractModel
{
    /**
     * @var string 代理组ID
     */
    public $ProxyGroupId;

    /**
     * @var string 代理组地址ID
     */
    public $ProxyAddressId;

    /**
     * @var string 私有网络ID
     */
    public $UniqVpcId;

    /**
     * @var string 私有子网ID
     */
    public $UniqSubnetId;

    /**
     * @var string IP地址
     */
    public $Vip;

    /**
     * @var integer 端口
     */
    public $VPort;

    /**
     * @var integer 旧IP地址回收时间
     */
    public $ReleaseDuration;

    /**
     * @param string $ProxyGroupId 代理组ID
     * @param string $ProxyAddressId 代理组地址ID
     * @param string $UniqVpcId 私有网络ID
     * @param string $UniqSubnetId 私有子网ID
     * @param string $Vip IP地址
     * @param integer $VPort 端口
     * @param integer $ReleaseDuration 旧IP地址回收时间
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ProxyAddressId",$param) and $param["ProxyAddressId"] !== null) {
            $this->ProxyAddressId = $param["ProxyAddressId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("ReleaseDuration",$param) and $param["ReleaseDuration"] !== null) {
            $this->ReleaseDuration = $param["ReleaseDuration"];
        }
    }
}

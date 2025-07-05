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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCdbProxyAddressVipAndVPort请求参数结构体
 *
 * @method string getProxyGroupId() 获取代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method string getProxyAddressId() 获取代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method void setProxyAddressId(string $ProxyAddressId) 设置代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method string getUniqVpcId() 获取私有网络 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method string getUniqSubnetId() 获取私有子网 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有子网 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method string getVip() 获取IP 地址。若不填写则自动分配子网下的可用 IP。
 * @method void setVip(string $Vip) 设置IP 地址。若不填写则自动分配子网下的可用 IP。
 * @method integer getVPort() 获取端口。默认值3306，取值范围：1024 - 65535。
 * @method void setVPort(integer $VPort) 设置端口。默认值3306，取值范围：1024 - 65535。
 * @method integer getReleaseDuration() 获取旧 IP 地址回收时间。单位：小时，默认值：24，取值范围：0 - 168。
 * @method void setReleaseDuration(integer $ReleaseDuration) 设置旧 IP 地址回收时间。单位：小时，默认值：24，取值范围：0 - 168。
 */
class ModifyCdbProxyAddressVipAndVPortRequest extends AbstractModel
{
    /**
     * @var string 代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     */
    public $ProxyGroupId;

    /**
     * @var string 代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     */
    public $ProxyAddressId;

    /**
     * @var string 私有网络 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $UniqVpcId;

    /**
     * @var string 私有子网 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $UniqSubnetId;

    /**
     * @var string IP 地址。若不填写则自动分配子网下的可用 IP。
     */
    public $Vip;

    /**
     * @var integer 端口。默认值3306，取值范围：1024 - 65535。
     */
    public $VPort;

    /**
     * @var integer 旧 IP 地址回收时间。单位：小时，默认值：24，取值范围：0 - 168。
     */
    public $ReleaseDuration;

    /**
     * @param string $ProxyGroupId 代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     * @param string $ProxyAddressId 代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     * @param string $UniqVpcId 私有网络 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param string $UniqSubnetId 私有子网 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param string $Vip IP 地址。若不填写则自动分配子网下的可用 IP。
     * @param integer $VPort 端口。默认值3306，取值范围：1024 - 65535。
     * @param integer $ReleaseDuration 旧 IP 地址回收时间。单位：小时，默认值：24，取值范围：0 - 168。
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

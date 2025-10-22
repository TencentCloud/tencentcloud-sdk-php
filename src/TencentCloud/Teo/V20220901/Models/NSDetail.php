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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NS 接入类型站点参数详情。
 *
 * @method string getCnameSpeedUp() 获取是否开启 CNAME 加速，取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
 * @method void setCnameSpeedUp(string $CnameSpeedUp) 设置是否开启 CNAME 加速，取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
 * @method integer getIsFake() 获取是否存在同名站点，取值有：
<li> 0：不存在同名站点；</li>
<li> 1：已存在同名站点。</li>
 * @method void setIsFake(integer $IsFake) 设置是否存在同名站点，取值有：
<li> 0：不存在同名站点；</li>
<li> 1：已存在同名站点。</li>
 * @method OwnershipVerification getOwnershipVerification() 获取归属权验证信息。针对 NS 接入类型的站点，将当前的 NS 服务器切换至腾讯云 EdgeOne 指定的 NS 服务器，即视为通过归属权验证。详情请参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789) 。
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) 设置归属权验证信息。针对 NS 接入类型的站点，将当前的 NS 服务器切换至腾讯云 EdgeOne 指定的 NS 服务器，即视为通过归属权验证。详情请参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789) 。
 * @method array getOriginalNameServers() 获取由 EdgeOne 检测到的站点当前正在使用的 NS 服务器列表。
 * @method void setOriginalNameServers(array $OriginalNameServers) 设置由 EdgeOne 检测到的站点当前正在使用的 NS 服务器列表。
 * @method array getNameServers() 获取腾讯云 EdgeOne 分配的 NS 服务器列表。需要将当前站点 NS 服务器指向该地址，站点才能生效。
 * @method void setNameServers(array $NameServers) 设置腾讯云 EdgeOne 分配的 NS 服务器列表。需要将当前站点 NS 服务器指向该地址，站点才能生效。
 * @method VanityNameServers getVanityNameServers() 获取用户自定义 NS 服务器域名信息。如果启用了自定义 NS 服务，需要在域名注册厂商内将 NS 指向该地址。
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) 设置用户自定义 NS 服务器域名信息。如果启用了自定义 NS 服务，需要在域名注册厂商内将 NS 指向该地址。
 * @method array getVanityNameServersIps() 获取用户自定义 NS 服务器对应的 IP 地址信息。
 * @method void setVanityNameServersIps(array $VanityNameServersIps) 设置用户自定义 NS 服务器对应的 IP 地址信息。
 */
class NSDetail extends AbstractModel
{
    /**
     * @var string 是否开启 CNAME 加速，取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
     */
    public $CnameSpeedUp;

    /**
     * @var integer 是否存在同名站点，取值有：
<li> 0：不存在同名站点；</li>
<li> 1：已存在同名站点。</li>
     */
    public $IsFake;

    /**
     * @var OwnershipVerification 归属权验证信息。针对 NS 接入类型的站点，将当前的 NS 服务器切换至腾讯云 EdgeOne 指定的 NS 服务器，即视为通过归属权验证。详情请参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789) 。
     */
    public $OwnershipVerification;

    /**
     * @var array 由 EdgeOne 检测到的站点当前正在使用的 NS 服务器列表。
     */
    public $OriginalNameServers;

    /**
     * @var array 腾讯云 EdgeOne 分配的 NS 服务器列表。需要将当前站点 NS 服务器指向该地址，站点才能生效。
     */
    public $NameServers;

    /**
     * @var VanityNameServers 用户自定义 NS 服务器域名信息。如果启用了自定义 NS 服务，需要在域名注册厂商内将 NS 指向该地址。
     */
    public $VanityNameServers;

    /**
     * @var array 用户自定义 NS 服务器对应的 IP 地址信息。
     */
    public $VanityNameServersIps;

    /**
     * @param string $CnameSpeedUp 是否开启 CNAME 加速，取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
     * @param integer $IsFake 是否存在同名站点，取值有：
<li> 0：不存在同名站点；</li>
<li> 1：已存在同名站点。</li>
     * @param OwnershipVerification $OwnershipVerification 归属权验证信息。针对 NS 接入类型的站点，将当前的 NS 服务器切换至腾讯云 EdgeOne 指定的 NS 服务器，即视为通过归属权验证。详情请参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789) 。
     * @param array $OriginalNameServers 由 EdgeOne 检测到的站点当前正在使用的 NS 服务器列表。
     * @param array $NameServers 腾讯云 EdgeOne 分配的 NS 服务器列表。需要将当前站点 NS 服务器指向该地址，站点才能生效。
     * @param VanityNameServers $VanityNameServers 用户自定义 NS 服务器域名信息。如果启用了自定义 NS 服务，需要在域名注册厂商内将 NS 指向该地址。
     * @param array $VanityNameServersIps 用户自定义 NS 服务器对应的 IP 地址信息。
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
        if (array_key_exists("CnameSpeedUp",$param) and $param["CnameSpeedUp"] !== null) {
            $this->CnameSpeedUp = $param["CnameSpeedUp"];
        }

        if (array_key_exists("IsFake",$param) and $param["IsFake"] !== null) {
            $this->IsFake = $param["IsFake"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }

        if (array_key_exists("VanityNameServers",$param) and $param["VanityNameServers"] !== null) {
            $this->VanityNameServers = new VanityNameServers();
            $this->VanityNameServers->deserialize($param["VanityNameServers"]);
        }

        if (array_key_exists("VanityNameServersIps",$param) and $param["VanityNameServersIps"] !== null) {
            $this->VanityNameServersIps = [];
            foreach ($param["VanityNameServersIps"] as $key => $value){
                $obj = new VanityNameServersIps();
                $obj->deserialize($value);
                array_push($this->VanityNameServersIps, $obj);
            }
        }
    }
}

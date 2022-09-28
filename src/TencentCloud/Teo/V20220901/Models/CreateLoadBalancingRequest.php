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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLoadBalancing请求参数结构体
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getHost() 获取负载均衡域名。
 * @method void setHost(string $Host) 设置负载均衡域名。
 * @method string getType() 获取代理模式，取值有：
<li>dns_only：仅DNS；</li>
<li>proxied：开启代理。</li>
 * @method void setType(string $Type) 设置代理模式，取值有：
<li>dns_only：仅DNS；</li>
<li>proxied：开启代理。</li>
 * @method string getOriginGroupId() 获取主源站源站组ID。
 * @method void setOriginGroupId(string $OriginGroupId) 设置主源站源站组ID。
 * @method string getBackupOriginGroupId() 获取备用源站源站组ID，当Type=proxied时可以填写，为空表示不使用备用源站。
 * @method void setBackupOriginGroupId(string $BackupOriginGroupId) 设置备用源站源站组ID，当Type=proxied时可以填写，为空表示不使用备用源站。
 * @method integer getTTL() 获取当Type=dns_only时，指解析记录在DNS服务器缓存的生存时间。
取值范围60-86400，单位：秒，不填写使用默认值：600。
 * @method void setTTL(integer $TTL) 设置当Type=dns_only时，指解析记录在DNS服务器缓存的生存时间。
取值范围60-86400，单位：秒，不填写使用默认值：600。
 * @method string getOriginType() 获取回源类型，取值有：
<li>normal：主备回源；</li>
<li>advanced：高级回源配置（仅当Type=proxied时可以使用）。</li>为空表示使用主备回源。
 * @method void setOriginType(string $OriginType) 设置回源类型，取值有：
<li>normal：主备回源；</li>
<li>advanced：高级回源配置（仅当Type=proxied时可以使用）。</li>为空表示使用主备回源。
 * @method array getAdvancedOriginGroups() 获取高级回源配置，当OriginType=advanced时有效。
 * @method void setAdvancedOriginGroups(array $AdvancedOriginGroups) 设置高级回源配置，当OriginType=advanced时有效。
 */
class CreateLoadBalancingRequest extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 负载均衡域名。
     */
    public $Host;

    /**
     * @var string 代理模式，取值有：
<li>dns_only：仅DNS；</li>
<li>proxied：开启代理。</li>
     */
    public $Type;

    /**
     * @var string 主源站源站组ID。
     */
    public $OriginGroupId;

    /**
     * @var string 备用源站源站组ID，当Type=proxied时可以填写，为空表示不使用备用源站。
     */
    public $BackupOriginGroupId;

    /**
     * @var integer 当Type=dns_only时，指解析记录在DNS服务器缓存的生存时间。
取值范围60-86400，单位：秒，不填写使用默认值：600。
     */
    public $TTL;

    /**
     * @var string 回源类型，取值有：
<li>normal：主备回源；</li>
<li>advanced：高级回源配置（仅当Type=proxied时可以使用）。</li>为空表示使用主备回源。
     */
    public $OriginType;

    /**
     * @var array 高级回源配置，当OriginType=advanced时有效。
     */
    public $AdvancedOriginGroups;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $Host 负载均衡域名。
     * @param string $Type 代理模式，取值有：
<li>dns_only：仅DNS；</li>
<li>proxied：开启代理。</li>
     * @param string $OriginGroupId 主源站源站组ID。
     * @param string $BackupOriginGroupId 备用源站源站组ID，当Type=proxied时可以填写，为空表示不使用备用源站。
     * @param integer $TTL 当Type=dns_only时，指解析记录在DNS服务器缓存的生存时间。
取值范围60-86400，单位：秒，不填写使用默认值：600。
     * @param string $OriginType 回源类型，取值有：
<li>normal：主备回源；</li>
<li>advanced：高级回源配置（仅当Type=proxied时可以使用）。</li>为空表示使用主备回源。
     * @param array $AdvancedOriginGroups 高级回源配置，当OriginType=advanced时有效。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }

        if (array_key_exists("BackupOriginGroupId",$param) and $param["BackupOriginGroupId"] !== null) {
            $this->BackupOriginGroupId = $param["BackupOriginGroupId"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("AdvancedOriginGroups",$param) and $param["AdvancedOriginGroups"] !== null) {
            $this->AdvancedOriginGroups = [];
            foreach ($param["AdvancedOriginGroups"] as $key => $value){
                $obj = new AdvancedOriginGroup();
                $obj->deserialize($value);
                array_push($this->AdvancedOriginGroups, $obj);
            }
        }
    }
}

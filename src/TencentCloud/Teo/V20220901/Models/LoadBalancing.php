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
 * 负载均衡信息
 *
 * @method string getLoadBalancingId() 获取负载均衡ID。
 * @method void setLoadBalancingId(string $LoadBalancingId) 设置负载均衡ID。
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getHost() 获取子域名，填写@表示根域。
 * @method void setHost(string $Host) 设置子域名，填写@表示根域。
 * @method string getType() 获取代理模式，取值有：
<li>dns_only：仅DNS；</li>
<li>proxied：开启代理。</li>
 * @method void setType(string $Type) 设置代理模式，取值有：
<li>dns_only：仅DNS；</li>
<li>proxied：开启代理。</li>
 * @method integer getTTL() 获取当Type=dns_only表示DNS记录的缓存时间。
 * @method void setTTL(integer $TTL) 设置当Type=dns_only表示DNS记录的缓存时间。
 * @method string getStatus() 获取状态，取值有：
<li>online：部署成功；</li>
<li>process：部署中。</li>
 * @method void setStatus(string $Status) 设置状态，取值有：
<li>online：部署成功；</li>
<li>process：部署中。</li>
 * @method string getCname() 获取调度域名。
 * @method void setCname(string $Cname) 设置调度域名。
 * @method string getOriginGroupId() 获取主源源站组ID。
 * @method void setOriginGroupId(string $OriginGroupId) 设置主源源站组ID。
 * @method string getBackupOriginGroupId() 获取备用源站源站组ID。为空表示不适用备用源站。
 * @method void setBackupOriginGroupId(string $BackupOriginGroupId) 设置备用源站源站组ID。为空表示不适用备用源站。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 */
class LoadBalancing extends AbstractModel
{
    /**
     * @var string 负载均衡ID。
     */
    public $LoadBalancingId;

    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 子域名，填写@表示根域。
     */
    public $Host;

    /**
     * @var string 代理模式，取值有：
<li>dns_only：仅DNS；</li>
<li>proxied：开启代理。</li>
     */
    public $Type;

    /**
     * @var integer 当Type=dns_only表示DNS记录的缓存时间。
     */
    public $TTL;

    /**
     * @var string 状态，取值有：
<li>online：部署成功；</li>
<li>process：部署中。</li>
     */
    public $Status;

    /**
     * @var string 调度域名。
     */
    public $Cname;

    /**
     * @var string 主源源站组ID。
     */
    public $OriginGroupId;

    /**
     * @var string 备用源站源站组ID。为空表示不适用备用源站。
     */
    public $BackupOriginGroupId;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @param string $LoadBalancingId 负载均衡ID。
     * @param string $ZoneId 站点ID。
     * @param string $Host 子域名，填写@表示根域。
     * @param string $Type 代理模式，取值有：
<li>dns_only：仅DNS；</li>
<li>proxied：开启代理。</li>
     * @param integer $TTL 当Type=dns_only表示DNS记录的缓存时间。
     * @param string $Status 状态，取值有：
<li>online：部署成功；</li>
<li>process：部署中。</li>
     * @param string $Cname 调度域名。
     * @param string $OriginGroupId 主源源站组ID。
     * @param string $BackupOriginGroupId 备用源站源站组ID。为空表示不适用备用源站。
     * @param string $UpdateTime 更新时间。
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
        if (array_key_exists("LoadBalancingId",$param) and $param["LoadBalancingId"] !== null) {
            $this->LoadBalancingId = $param["LoadBalancingId"];
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

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }

        if (array_key_exists("BackupOriginGroupId",$param) and $param["BackupOriginGroupId"] !== null) {
            $this->BackupOriginGroupId = $param["BackupOriginGroupId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

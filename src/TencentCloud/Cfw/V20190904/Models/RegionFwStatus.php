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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域的防火墙引流网络状态
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getStatus() 获取引流网络部署状态
1. "NotDeployed"  防火墙集群未部署
2. "Deployed"        防火墙集群已部署，但未创建引流网络
3. "Auto"                防火墙集群已部署，并自动选择网段创建了引流网络
4. "Custom"            防火墙集群已部署，并根据用户自定义网段创建了引流网络
 * @method void setStatus(string $Status) 设置引流网络部署状态
1. "NotDeployed"  防火墙集群未部署
2. "Deployed"        防火墙集群已部署，但未创建引流网络
3. "Auto"                防火墙集群已部署，并自动选择网段创建了引流网络
4. "Custom"            防火墙集群已部署，并根据用户自定义网段创建了引流网络
 * @method string getCidr() 获取引流网络的cidr，如果没有部署引流网络则为空
 * @method void setCidr(string $Cidr) 设置引流网络的cidr，如果没有部署引流网络则为空
 */
class RegionFwStatus extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 引流网络部署状态
1. "NotDeployed"  防火墙集群未部署
2. "Deployed"        防火墙集群已部署，但未创建引流网络
3. "Auto"                防火墙集群已部署，并自动选择网段创建了引流网络
4. "Custom"            防火墙集群已部署，并根据用户自定义网段创建了引流网络
     */
    public $Status;

    /**
     * @var string 引流网络的cidr，如果没有部署引流网络则为空
     */
    public $Cidr;

    /**
     * @param string $Region 地域
     * @param string $Status 引流网络部署状态
1. "NotDeployed"  防火墙集群未部署
2. "Deployed"        防火墙集群已部署，但未创建引流网络
3. "Auto"                防火墙集群已部署，并自动选择网段创建了引流网络
4. "Custom"            防火墙集群已部署，并根据用户自定义网段创建了引流网络
     * @param string $Cidr 引流网络的cidr，如果没有部署引流网络则为空
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }
    }
}

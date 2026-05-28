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
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getStatus() 获取<p>引流网络部署状态</p><ol><li>&quot;NotDeployed&quot;  防火墙集群未部署</li><li>&quot;Deployed&quot;        防火墙集群已部署，但未创建引流网络</li><li>&quot;DeployedCustomOnly&quot;  防火墙集群已部署，但内网段被全覆盖，无法自动选择引流网络，需自定义设置引流网段</li><li>&quot;Auto&quot;                防火墙集群已部署，并自动选择网段创建了引流网络</li><li>&quot;Custom&quot;            防火墙集群已部署，并根据用户自定义网段创建了引流网络</li></ol>
 * @method void setStatus(string $Status) 设置<p>引流网络部署状态</p><ol><li>&quot;NotDeployed&quot;  防火墙集群未部署</li><li>&quot;Deployed&quot;        防火墙集群已部署，但未创建引流网络</li><li>&quot;DeployedCustomOnly&quot;  防火墙集群已部署，但内网段被全覆盖，无法自动选择引流网络，需自定义设置引流网段</li><li>&quot;Auto&quot;                防火墙集群已部署，并自动选择网段创建了引流网络</li><li>&quot;Custom&quot;            防火墙集群已部署，并根据用户自定义网段创建了引流网络</li></ol>
 * @method string getCidr() 获取<p>引流网络的cidr，如果没有部署引流网络则为空</p>
 * @method void setCidr(string $Cidr) 设置<p>引流网络的cidr，如果没有部署引流网络则为空</p>
 */
class RegionFwStatus extends AbstractModel
{
    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>引流网络部署状态</p><ol><li>&quot;NotDeployed&quot;  防火墙集群未部署</li><li>&quot;Deployed&quot;        防火墙集群已部署，但未创建引流网络</li><li>&quot;DeployedCustomOnly&quot;  防火墙集群已部署，但内网段被全覆盖，无法自动选择引流网络，需自定义设置引流网段</li><li>&quot;Auto&quot;                防火墙集群已部署，并自动选择网段创建了引流网络</li><li>&quot;Custom&quot;            防火墙集群已部署，并根据用户自定义网段创建了引流网络</li></ol>
     */
    public $Status;

    /**
     * @var string <p>引流网络的cidr，如果没有部署引流网络则为空</p>
     */
    public $Cidr;

    /**
     * @param string $Region <p>地域</p>
     * @param string $Status <p>引流网络部署状态</p><ol><li>&quot;NotDeployed&quot;  防火墙集群未部署</li><li>&quot;Deployed&quot;        防火墙集群已部署，但未创建引流网络</li><li>&quot;DeployedCustomOnly&quot;  防火墙集群已部署，但内网段被全覆盖，无法自动选择引流网络，需自定义设置引流网段</li><li>&quot;Auto&quot;                防火墙集群已部署，并自动选择网段创建了引流网络</li><li>&quot;Custom&quot;            防火墙集群已部署，并根据用户自定义网段创建了引流网络</li></ol>
     * @param string $Cidr <p>引流网络的cidr，如果没有部署引流网络则为空</p>
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

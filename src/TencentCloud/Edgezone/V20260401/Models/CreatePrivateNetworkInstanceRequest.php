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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrivateNetworkInstance请求参数结构体
 *
 * @method string getNetworkInstanceName() 获取新实例名称
 * @method void setNetworkInstanceName(string $NetworkInstanceName) 设置新实例名称
 * @method string getZoneId() 获取可用区ID
 * @method void setZoneId(string $ZoneId) 设置可用区ID
 * @method string getNetwork() 获取网络地址（host 位必须全为 0），必须落在以下 RFC 1918 私有范围之一：`10.0.0.0/8`、`172.16.0.0/12`、`192.168.0.0/16`
 * @method void setNetwork(string $Network) 设置网络地址（host 位必须全为 0），必须落在以下 RFC 1918 私有范围之一：`10.0.0.0/8`、`172.16.0.0/12`、`192.168.0.0/16`
 * @method integer getMask() 获取掩码位数，上限统一为 `28`，下限随所属私有段而定：`10.0.0.0/8` 允许 `8~28`，`172.16.0.0/12` 允许 `12~28`，`192.168.0.0/16` 允许 `16~28`；需与 Network 共同构成合法网络地址（host 位全为 0）
 * @method void setMask(integer $Mask) 设置掩码位数，上限统一为 `28`，下限随所属私有段而定：`10.0.0.0/8` 允许 `8~28`，`172.16.0.0/12` 允许 `12~28`，`192.168.0.0/16` 允许 `16~28`；需与 Network 共同构成合法网络地址（host 位全为 0）
 */
class CreatePrivateNetworkInstanceRequest extends AbstractModel
{
    /**
     * @var string 新实例名称
     */
    public $NetworkInstanceName;

    /**
     * @var string 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 网络地址（host 位必须全为 0），必须落在以下 RFC 1918 私有范围之一：`10.0.0.0/8`、`172.16.0.0/12`、`192.168.0.0/16`
     */
    public $Network;

    /**
     * @var integer 掩码位数，上限统一为 `28`，下限随所属私有段而定：`10.0.0.0/8` 允许 `8~28`，`172.16.0.0/12` 允许 `12~28`，`192.168.0.0/16` 允许 `16~28`；需与 Network 共同构成合法网络地址（host 位全为 0）
     */
    public $Mask;

    /**
     * @param string $NetworkInstanceName 新实例名称
     * @param string $ZoneId 可用区ID
     * @param string $Network 网络地址（host 位必须全为 0），必须落在以下 RFC 1918 私有范围之一：`10.0.0.0/8`、`172.16.0.0/12`、`192.168.0.0/16`
     * @param integer $Mask 掩码位数，上限统一为 `28`，下限随所属私有段而定：`10.0.0.0/8` 允许 `8~28`，`172.16.0.0/12` 允许 `12~28`，`192.168.0.0/16` 允许 `16~28`；需与 Network 共同构成合法网络地址（host 位全为 0）
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
        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }
    }
}

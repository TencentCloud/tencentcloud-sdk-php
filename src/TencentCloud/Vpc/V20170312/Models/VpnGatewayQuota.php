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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPN网关配额对象
 *
 * @method integer getBandwidth() 获取<p>带宽配额，单位：Mbps。</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>带宽配额，单位：Mbps。</p>
 * @method string getCname() 获取<p>配额中文名称</p>
 * @method void setCname(string $Cname) 设置<p>配额中文名称</p>
 * @method string getName() 获取<p>配额英文名称</p>
 * @method void setName(string $Name) 设置<p>配额英文名称</p>
 * @method array getMaxConnection() 获取<p>SSL 连接数可选配额</p>
 * @method void setMaxConnection(array $MaxConnection) 设置<p>SSL 连接数可选配额</p>
 */
class VpnGatewayQuota extends AbstractModel
{
    /**
     * @var integer <p>带宽配额，单位：Mbps。</p>
     */
    public $Bandwidth;

    /**
     * @var string <p>配额中文名称</p>
     */
    public $Cname;

    /**
     * @var string <p>配额英文名称</p>
     */
    public $Name;

    /**
     * @var array <p>SSL 连接数可选配额</p>
     */
    public $MaxConnection;

    /**
     * @param integer $Bandwidth <p>带宽配额，单位：Mbps。</p>
     * @param string $Cname <p>配额中文名称</p>
     * @param string $Name <p>配额英文名称</p>
     * @param array $MaxConnection <p>SSL 连接数可选配额</p>
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
        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MaxConnection",$param) and $param["MaxConnection"] !== null) {
            $this->MaxConnection = $param["MaxConnection"];
        }
    }
}

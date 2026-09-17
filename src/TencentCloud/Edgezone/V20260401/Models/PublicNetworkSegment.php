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
 * 公网网段信息，包含网段cidr和网关ip
 *
 * @method string getCidr() 获取网段Cidr
 * @method void setCidr(string $Cidr) 设置网段Cidr
 * @method string getGateway() 获取网关Ip
 * @method void setGateway(string $Gateway) 设置网关Ip
 */
class PublicNetworkSegment extends AbstractModel
{
    /**
     * @var string 网段Cidr
     */
    public $Cidr;

    /**
     * @var string 网关Ip
     */
    public $Gateway;

    /**
     * @param string $Cidr 网段Cidr
     * @param string $Gateway 网关Ip
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
        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }

        if (array_key_exists("Gateway",$param) and $param["Gateway"] !== null) {
            $this->Gateway = $param["Gateway"];
        }
    }
}

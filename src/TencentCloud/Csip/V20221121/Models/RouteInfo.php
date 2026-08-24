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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由信息
 *
 * @method string getVip() 获取接入ip
 * @method void setVip(string $Vip) 设置接入ip
 * @method string getVport() 获取接入端口
 * @method void setVport(string $Vport) 设置接入端口
 * @method string getDomain() 获取接入域名
 * @method void setDomain(string $Domain) 设置接入域名
 * @method string getDomainPort() 获取接入域名端口
 * @method void setDomainPort(string $DomainPort) 设置接入域名端口
 */
class RouteInfo extends AbstractModel
{
    /**
     * @var string 接入ip
     */
    public $Vip;

    /**
     * @var string 接入端口
     */
    public $Vport;

    /**
     * @var string 接入域名
     */
    public $Domain;

    /**
     * @var string 接入域名端口
     */
    public $DomainPort;

    /**
     * @param string $Vip 接入ip
     * @param string $Vport 接入端口
     * @param string $Domain 接入域名
     * @param string $DomainPort 接入域名端口
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainPort",$param) and $param["DomainPort"] !== null) {
            $this->DomainPort = $param["DomainPort"];
        }
    }
}

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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述防火墙规则详细信息。
 *
 * @method string getAppType() 获取应用类型，取值：自定义，HTTP(80)，HTTPS(443)，Linux登录(22)，Windows登录(3389)，MySQL(3306)，SQL Server(1433)，全部TCP，全部UDP，ALL。
 * @method void setAppType(string $AppType) 设置应用类型，取值：自定义，HTTP(80)，HTTPS(443)，Linux登录(22)，Windows登录(3389)，MySQL(3306)，SQL Server(1433)，全部TCP，全部UDP，ALL。
 * @method string getProtocol() 获取协议，取值：TCP，UDP，ALL。
 * @method void setProtocol(string $Protocol) 设置协议，取值：TCP，UDP，ALL。
 * @method string getPort() 获取端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。
 * @method void setPort(string $Port) 设置端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。
 */
class FirewallRuleInfo extends AbstractModel
{
    /**
     * @var string 应用类型，取值：自定义，HTTP(80)，HTTPS(443)，Linux登录(22)，Windows登录(3389)，MySQL(3306)，SQL Server(1433)，全部TCP，全部UDP，ALL。
     */
    public $AppType;

    /**
     * @var string 协议，取值：TCP，UDP，ALL。
     */
    public $Protocol;

    /**
     * @var string 端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。
     */
    public $Port;

    /**
     * @param string $AppType 应用类型，取值：自定义，HTTP(80)，HTTPS(443)，Linux登录(22)，Windows登录(3389)，MySQL(3306)，SQL Server(1433)，全部TCP，全部UDP，ALL。
     * @param string $Protocol 协议，取值：TCP，UDP，ALL。
     * @param string $Port 端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}

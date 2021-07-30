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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管prometheus中grafana的信息
 *
 * @method boolean getEnabled() 获取是否启用
 * @method void setEnabled(boolean $Enabled) 设置是否启用
 * @method string getDomain() 获取域名，只有开启外网访问才有效果
 * @method void setDomain(string $Domain) 设置域名，只有开启外网访问才有效果
 * @method string getAddress() 获取内网地址，或者外网地址
 * @method void setAddress(string $Address) 设置内网地址，或者外网地址
 * @method string getInternet() 获取是否开启了外网访问
close = 未开启外网访问
opening = 正在开启外网访问
open  = 已开启外网访问
 * @method void setInternet(string $Internet) 设置是否开启了外网访问
close = 未开启外网访问
opening = 正在开启外网访问
open  = 已开启外网访问
 * @method string getAdminUser() 获取grafana管理员用户名
 * @method void setAdminUser(string $AdminUser) 设置grafana管理员用户名
 */
class PrometheusGrafanaInfo extends AbstractModel
{
    /**
     * @var boolean 是否启用
     */
    public $Enabled;

    /**
     * @var string 域名，只有开启外网访问才有效果
     */
    public $Domain;

    /**
     * @var string 内网地址，或者外网地址
     */
    public $Address;

    /**
     * @var string 是否开启了外网访问
close = 未开启外网访问
opening = 正在开启外网访问
open  = 已开启外网访问
     */
    public $Internet;

    /**
     * @var string grafana管理员用户名
     */
    public $AdminUser;

    /**
     * @param boolean $Enabled 是否启用
     * @param string $Domain 域名，只有开启外网访问才有效果
     * @param string $Address 内网地址，或者外网地址
     * @param string $Internet 是否开启了外网访问
close = 未开启外网访问
opening = 正在开启外网访问
open  = 已开启外网访问
     * @param string $AdminUser grafana管理员用户名
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Internet",$param) and $param["Internet"] !== null) {
            $this->Internet = $param["Internet"];
        }

        if (array_key_exists("AdminUser",$param) and $param["AdminUser"] !== null) {
            $this->AdminUser = $param["AdminUser"];
        }
    }
}

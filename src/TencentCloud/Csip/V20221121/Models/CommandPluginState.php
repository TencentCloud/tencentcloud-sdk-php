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
 * AI Agent 命令沙箱插件状态
 *
 * @method string getInstallStatus() 获取<p>插件安装状态（上层聚合）<br>枚举值：<br>NONE：未安装<br>INSTALLING：安装中<br>INSTALLED：已安装<br>INSTALL_FAIL：安装失败</p>
 * @method void setInstallStatus(string $InstallStatus) 设置<p>插件安装状态（上层聚合）<br>枚举值：<br>NONE：未安装<br>INSTALLING：安装中<br>INSTALLED：已安装<br>INSTALL_FAIL：安装失败</p>
 */
class CommandPluginState extends AbstractModel
{
    /**
     * @var string <p>插件安装状态（上层聚合）<br>枚举值：<br>NONE：未安装<br>INSTALLING：安装中<br>INSTALLED：已安装<br>INSTALL_FAIL：安装失败</p>
     */
    public $InstallStatus;

    /**
     * @param string $InstallStatus <p>插件安装状态（上层聚合）<br>枚举值：<br>NONE：未安装<br>INSTALLING：安装中<br>INSTALLED：已安装<br>INSTALL_FAIL：安装失败</p>
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
        if (array_key_exists("InstallStatus",$param) and $param["InstallStatus"] !== null) {
            $this->InstallStatus = $param["InstallStatus"];
        }
    }
}

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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 暴露网络配置
 *
 * @method SSHConfig getSSHConfig() 获取ssh配置
 * @method void setSSHConfig(SSHConfig $SSHConfig) 设置ssh配置
 * @method ExposePortConfig getExposePortConfig() 获取容器端口暴露到公网配置
 * @method void setExposePortConfig(ExposePortConfig $ExposePortConfig) 设置容器端口暴露到公网配置
 */
class ExposeNetworkConfig extends AbstractModel
{
    /**
     * @var SSHConfig ssh配置
     */
    public $SSHConfig;

    /**
     * @var ExposePortConfig 容器端口暴露到公网配置
     */
    public $ExposePortConfig;

    /**
     * @param SSHConfig $SSHConfig ssh配置
     * @param ExposePortConfig $ExposePortConfig 容器端口暴露到公网配置
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
        if (array_key_exists("SSHConfig",$param) and $param["SSHConfig"] !== null) {
            $this->SSHConfig = new SSHConfig();
            $this->SSHConfig->deserialize($param["SSHConfig"]);
        }

        if (array_key_exists("ExposePortConfig",$param) and $param["ExposePortConfig"] !== null) {
            $this->ExposePortConfig = new ExposePortConfig();
            $this->ExposePortConfig->deserialize($param["ExposePortConfig"]);
        }
    }
}

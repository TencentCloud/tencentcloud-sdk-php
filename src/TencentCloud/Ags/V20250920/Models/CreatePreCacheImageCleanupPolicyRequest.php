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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePreCacheImageCleanupPolicy请求参数结构体
 *
 * @method string getName() 获取<p>策略名</p>
 * @method void setName(string $Name) 设置<p>策略名</p>
 * @method string getIdleTTL() 获取<p>闲置过期时间</p><p>参数格式：正数 m/h/d</p>
 * @method void setIdleTTL(string $IdleTTL) 设置<p>闲置过期时间</p><p>参数格式：正数 m/h/d</p>
 * @method string getRegistryHost() 获取<p>镜像仓库地址</p><p>入参限制：精准匹配，不传或空串表示不限，最多 255 字符</p>
 * @method void setRegistryHost(string $RegistryHost) 设置<p>镜像仓库地址</p><p>入参限制：精准匹配，不传或空串表示不限，最多 255 字符</p>
 * @method string getRepoPattern() 获取<p>镜像仓库名</p><p>入参限制：正则匹配，最多 256 字符，编译后指令数不超过 128，账号全部启用策略合计不超过 1280；不传或空串表示全部 Repo</p>
 * @method void setRepoPattern(string $RepoPattern) 设置<p>镜像仓库名</p><p>入参限制：正则匹配，最多 256 字符，编译后指令数不超过 128，账号全部启用策略合计不超过 1280；不传或空串表示全部 Repo</p>
 * @method boolean getEnabled() 获取<p>策略启用配置</p><p>枚举值：</p><ul><li>true： 启用策略</li><li>false： 禁用策略</li></ul><p>默认值：true</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>策略启用配置</p><p>枚举值：</p><ul><li>true： 启用策略</li><li>false： 禁用策略</li></ul><p>默认值：true</p>
 */
class CreatePreCacheImageCleanupPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>策略名</p>
     */
    public $Name;

    /**
     * @var string <p>闲置过期时间</p><p>参数格式：正数 m/h/d</p>
     */
    public $IdleTTL;

    /**
     * @var string <p>镜像仓库地址</p><p>入参限制：精准匹配，不传或空串表示不限，最多 255 字符</p>
     */
    public $RegistryHost;

    /**
     * @var string <p>镜像仓库名</p><p>入参限制：正则匹配，最多 256 字符，编译后指令数不超过 128，账号全部启用策略合计不超过 1280；不传或空串表示全部 Repo</p>
     */
    public $RepoPattern;

    /**
     * @var boolean <p>策略启用配置</p><p>枚举值：</p><ul><li>true： 启用策略</li><li>false： 禁用策略</li></ul><p>默认值：true</p>
     */
    public $Enabled;

    /**
     * @param string $Name <p>策略名</p>
     * @param string $IdleTTL <p>闲置过期时间</p><p>参数格式：正数 m/h/d</p>
     * @param string $RegistryHost <p>镜像仓库地址</p><p>入参限制：精准匹配，不传或空串表示不限，最多 255 字符</p>
     * @param string $RepoPattern <p>镜像仓库名</p><p>入参限制：正则匹配，最多 256 字符，编译后指令数不超过 128，账号全部启用策略合计不超过 1280；不传或空串表示全部 Repo</p>
     * @param boolean $Enabled <p>策略启用配置</p><p>枚举值：</p><ul><li>true： 启用策略</li><li>false： 禁用策略</li></ul><p>默认值：true</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdleTTL",$param) and $param["IdleTTL"] !== null) {
            $this->IdleTTL = $param["IdleTTL"];
        }

        if (array_key_exists("RegistryHost",$param) and $param["RegistryHost"] !== null) {
            $this->RegistryHost = $param["RegistryHost"];
        }

        if (array_key_exists("RepoPattern",$param) and $param["RepoPattern"] !== null) {
            $this->RepoPattern = $param["RepoPattern"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}

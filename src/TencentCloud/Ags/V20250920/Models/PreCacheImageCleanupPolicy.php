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
 * 预热镜像自动清理策略
 *
 * @method string getCleanupPolicyId() 获取<p>自动清理策略ID</p>
 * @method void setCleanupPolicyId(string $CleanupPolicyId) 设置<p>自动清理策略ID</p>
 * @method string getName() 获取<p>自动清理策略名</p>
 * @method void setName(string $Name) 设置<p>自动清理策略名</p>
 * @method boolean getEnabled() 获取<p>策略启用配置</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>策略启用配置</p>
 * @method string getRegistryHost() 获取<p>镜像仓库地址</p><p>精准匹配，空串表示不限域名</p>
 * @method void setRegistryHost(string $RegistryHost) 设置<p>镜像仓库地址</p><p>精准匹配，空串表示不限域名</p>
 * @method string getRepoPattern() 获取<p>镜像仓库名</p><p>正则匹配，匹配 命名空间/仓库 完整路径，非锚定子串匹配，语法与 TCR 预热触发器一致；空串表示全部 Repo</p>
 * @method void setRepoPattern(string $RepoPattern) 设置<p>镜像仓库名</p><p>正则匹配，匹配 命名空间/仓库 完整路径，非锚定子串匹配，语法与 TCR 预热触发器一致；空串表示全部 Repo</p>
 * @method string getIdleTTL() 获取<p>闲置过期清理时间</p><p>规范化正数时长，例如 7d</p>
 * @method void setIdleTTL(string $IdleTTL) 设置<p>闲置过期清理时间</p><p>规范化正数时长，例如 7d</p>
 * @method string getCreateTime() 获取<p>策略创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>策略创建时间</p>
 * @method string getUpdateTime() 获取<p>策略最近更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>策略最近更新时间</p>
 */
class PreCacheImageCleanupPolicy extends AbstractModel
{
    /**
     * @var string <p>自动清理策略ID</p>
     */
    public $CleanupPolicyId;

    /**
     * @var string <p>自动清理策略名</p>
     */
    public $Name;

    /**
     * @var boolean <p>策略启用配置</p>
     */
    public $Enabled;

    /**
     * @var string <p>镜像仓库地址</p><p>精准匹配，空串表示不限域名</p>
     */
    public $RegistryHost;

    /**
     * @var string <p>镜像仓库名</p><p>正则匹配，匹配 命名空间/仓库 完整路径，非锚定子串匹配，语法与 TCR 预热触发器一致；空串表示全部 Repo</p>
     */
    public $RepoPattern;

    /**
     * @var string <p>闲置过期清理时间</p><p>规范化正数时长，例如 7d</p>
     */
    public $IdleTTL;

    /**
     * @var string <p>策略创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>策略最近更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $CleanupPolicyId <p>自动清理策略ID</p>
     * @param string $Name <p>自动清理策略名</p>
     * @param boolean $Enabled <p>策略启用配置</p>
     * @param string $RegistryHost <p>镜像仓库地址</p><p>精准匹配，空串表示不限域名</p>
     * @param string $RepoPattern <p>镜像仓库名</p><p>正则匹配，匹配 命名空间/仓库 完整路径，非锚定子串匹配，语法与 TCR 预热触发器一致；空串表示全部 Repo</p>
     * @param string $IdleTTL <p>闲置过期清理时间</p><p>规范化正数时长，例如 7d</p>
     * @param string $CreateTime <p>策略创建时间</p>
     * @param string $UpdateTime <p>策略最近更新时间</p>
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
        if (array_key_exists("CleanupPolicyId",$param) and $param["CleanupPolicyId"] !== null) {
            $this->CleanupPolicyId = $param["CleanupPolicyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RegistryHost",$param) and $param["RegistryHost"] !== null) {
            $this->RegistryHost = $param["RegistryHost"];
        }

        if (array_key_exists("RepoPattern",$param) and $param["RepoPattern"] !== null) {
            $this->RepoPattern = $param["RepoPattern"];
        }

        if (array_key_exists("IdleTTL",$param) and $param["IdleTTL"] !== null) {
            $this->IdleTTL = $param["IdleTTL"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

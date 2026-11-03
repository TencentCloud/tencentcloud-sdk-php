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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义安全护栏到 Kong Route 的运行态投影
 *
 * @method string getResourceType() 获取<p>业务资源类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>业务资源类型</p>
 * @method string getResourceId() 获取<p>业务资源 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>业务资源 ID</p>
 * @method string getResourceName() 获取<p>业务资源名称</p>
 * @method void setResourceName(string $ResourceName) 设置<p>业务资源名称</p>
 * @method string getPath() 获取<p>资源访问路径</p>
 * @method void setPath(string $Path) 设置<p>资源访问路径</p>
 * @method string getProtocol() 获取<p>数据面解析协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>数据面解析协议</p>
 * @method string getRouteId() 获取<p>底层 Kong Route ID</p>
 * @method void setRouteId(string $RouteId) 设置<p>底层 Kong Route ID</p>
 * @method string getPluginId() 获取<p>绑定 Route 上的 cngw-ai-custom-guardrail 插件实例 ID；未投影、禁用或同步失败时可能不存在。</p>
 * @method void setPluginId(string $PluginId) 设置<p>绑定 Route 上的 cngw-ai-custom-guardrail 插件实例 ID；未投影、禁用或同步失败时可能不存在。</p>
 * @method string getSyncStatus() 获取<p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
 * @method void setSyncStatus(string $SyncStatus) 设置<p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
 * @method string getSyncError() 获取<p>最近一次同步错误摘要</p>
 * @method void setSyncError(string $SyncError) 设置<p>最近一次同步错误摘要</p>
 */
class CustomGuardrailPolicyBinding extends AbstractModel
{
    /**
     * @var string <p>业务资源类型</p>
     */
    public $ResourceType;

    /**
     * @var string <p>业务资源 ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>业务资源名称</p>
     */
    public $ResourceName;

    /**
     * @var string <p>资源访问路径</p>
     */
    public $Path;

    /**
     * @var string <p>数据面解析协议</p>
     */
    public $Protocol;

    /**
     * @var string <p>底层 Kong Route ID</p>
     */
    public $RouteId;

    /**
     * @var string <p>绑定 Route 上的 cngw-ai-custom-guardrail 插件实例 ID；未投影、禁用或同步失败时可能不存在。</p>
     */
    public $PluginId;

    /**
     * @var string <p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
     */
    public $SyncStatus;

    /**
     * @var string <p>最近一次同步错误摘要</p>
     */
    public $SyncError;

    /**
     * @param string $ResourceType <p>业务资源类型</p>
     * @param string $ResourceId <p>业务资源 ID</p>
     * @param string $ResourceName <p>业务资源名称</p>
     * @param string $Path <p>资源访问路径</p>
     * @param string $Protocol <p>数据面解析协议</p>
     * @param string $RouteId <p>底层 Kong Route ID</p>
     * @param string $PluginId <p>绑定 Route 上的 cngw-ai-custom-guardrail 插件实例 ID；未投影、禁用或同步失败时可能不存在。</p>
     * @param string $SyncStatus <p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
     * @param string $SyncError <p>最近一次同步错误摘要</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SyncError",$param) and $param["SyncError"] !== null) {
            $this->SyncError = $param["SyncError"];
        }
    }
}

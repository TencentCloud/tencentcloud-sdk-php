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
 * 查询自定义安全护栏策略详情结果
 *
 * @method string getPolicyId() 获取<p>策略 ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>策略 ID</p>
 * @method string getName() 获取<p>策略名称</p>
 * @method void setName(string $Name) 设置<p>策略名称</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 * @method boolean getEnabled() 获取<p>策略期望启用状态；实际生效还需检查 EffectiveEnabled 和 SyncStatus。</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>策略期望启用状态；实际生效还需检查 EffectiveEnabled 和 SyncStatus。</p>
 * @method boolean getEffectiveEnabled() 获取<p>当前控制面计算值：Enabled=true 且 SyncStatus=synced 时为 true。不代表一次真实业务请求已通过审核，也不替代 DP 同步/链路验证。</p>
 * @method void setEffectiveEnabled(boolean $EffectiveEnabled) 设置<p>当前控制面计算值：Enabled=true 且 SyncStatus=synced 时为 true。不代表一次真实业务请求已通过审核，也不替代 DP 同步/链路验证。</p>
 * @method CustomGuardrailServiceConfig getServiceConfig() 获取<p>审核服务配置</p>
 * @method void setServiceConfig(CustomGuardrailServiceConfig $ServiceConfig) 设置<p>审核服务配置</p>
 * @method CustomGuardrailAuthConfig getAuthConfig() 获取<p>审核引擎鉴权的脱敏视图，仅返回鉴权类型、Header 名和密钥存在状态，不返回 ApiKey。</p>
 * @method void setAuthConfig(CustomGuardrailAuthConfig $AuthConfig) 设置<p>审核引擎鉴权的脱敏视图，仅返回鉴权类型、Header 名和密钥存在状态，不返回 ApiKey。</p>
 * @method CustomGuardrailDecisionConfig getDecisionConfig() 获取<p>审核响应判定配置</p>
 * @method void setDecisionConfig(CustomGuardrailDecisionConfig $DecisionConfig) 设置<p>审核响应判定配置</p>
 * @method CustomGuardrailBehaviorConfig getBehaviorConfig() 获取<p>处理行为配置</p>
 * @method void setBehaviorConfig(CustomGuardrailBehaviorConfig $BehaviorConfig) 设置<p>处理行为配置</p>
 * @method CustomGuardrailFilterConfig getFilterConfig() 获取<p>过滤与采样配置</p>
 * @method void setFilterConfig(CustomGuardrailFilterConfig $FilterConfig) 设置<p>过滤与采样配置</p>
 * @method CustomGuardrailScope getScope() 获取<p>生效范围</p>
 * @method void setScope(CustomGuardrailScope $Scope) 设置<p>生效范围</p>
 * @method array getBindings() 获取<p>业务资源到 Kong Route 的绑定及插件投影信息，一个业务资源可能对应多个 Route。</p>
 * @method void setBindings(array $Bindings) 设置<p>业务资源到 Kong Route 的绑定及插件投影信息，一个业务资源可能对应多个 Route。</p>
 * @method string getSyncStatus() 获取<p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
 * @method void setSyncStatus(string $SyncStatus) 设置<p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
 * @method string getSyncError() 获取<p>配置同步错误摘要，无错误时可能省略。</p>
 * @method void setSyncError(string $SyncError) 设置<p>配置同步错误摘要，无错误时可能省略。</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModificationTime() 获取<p>最后修改时间</p>
 * @method void setModificationTime(string $ModificationTime) 设置<p>最后修改时间</p>
 */
class DescribeAIGWCustomGuardrailPolicyResult extends AbstractModel
{
    /**
     * @var string <p>策略 ID</p>
     */
    public $PolicyId;

    /**
     * @var string <p>策略名称</p>
     */
    public $Name;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @var boolean <p>策略期望启用状态；实际生效还需检查 EffectiveEnabled 和 SyncStatus。</p>
     */
    public $Enabled;

    /**
     * @var boolean <p>当前控制面计算值：Enabled=true 且 SyncStatus=synced 时为 true。不代表一次真实业务请求已通过审核，也不替代 DP 同步/链路验证。</p>
     */
    public $EffectiveEnabled;

    /**
     * @var CustomGuardrailServiceConfig <p>审核服务配置</p>
     */
    public $ServiceConfig;

    /**
     * @var CustomGuardrailAuthConfig <p>审核引擎鉴权的脱敏视图，仅返回鉴权类型、Header 名和密钥存在状态，不返回 ApiKey。</p>
     */
    public $AuthConfig;

    /**
     * @var CustomGuardrailDecisionConfig <p>审核响应判定配置</p>
     */
    public $DecisionConfig;

    /**
     * @var CustomGuardrailBehaviorConfig <p>处理行为配置</p>
     */
    public $BehaviorConfig;

    /**
     * @var CustomGuardrailFilterConfig <p>过滤与采样配置</p>
     */
    public $FilterConfig;

    /**
     * @var CustomGuardrailScope <p>生效范围</p>
     */
    public $Scope;

    /**
     * @var array <p>业务资源到 Kong Route 的绑定及插件投影信息，一个业务资源可能对应多个 Route。</p>
     */
    public $Bindings;

    /**
     * @var string <p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
     */
    public $SyncStatus;

    /**
     * @var string <p>配置同步错误摘要，无错误时可能省略。</p>
     */
    public $SyncError;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最后修改时间</p>
     */
    public $ModificationTime;

    /**
     * @param string $PolicyId <p>策略 ID</p>
     * @param string $Name <p>策略名称</p>
     * @param string $Description <p>策略描述</p>
     * @param boolean $Enabled <p>策略期望启用状态；实际生效还需检查 EffectiveEnabled 和 SyncStatus。</p>
     * @param boolean $EffectiveEnabled <p>当前控制面计算值：Enabled=true 且 SyncStatus=synced 时为 true。不代表一次真实业务请求已通过审核，也不替代 DP 同步/链路验证。</p>
     * @param CustomGuardrailServiceConfig $ServiceConfig <p>审核服务配置</p>
     * @param CustomGuardrailAuthConfig $AuthConfig <p>审核引擎鉴权的脱敏视图，仅返回鉴权类型、Header 名和密钥存在状态，不返回 ApiKey。</p>
     * @param CustomGuardrailDecisionConfig $DecisionConfig <p>审核响应判定配置</p>
     * @param CustomGuardrailBehaviorConfig $BehaviorConfig <p>处理行为配置</p>
     * @param CustomGuardrailFilterConfig $FilterConfig <p>过滤与采样配置</p>
     * @param CustomGuardrailScope $Scope <p>生效范围</p>
     * @param array $Bindings <p>业务资源到 Kong Route 的绑定及插件投影信息，一个业务资源可能对应多个 Route。</p>
     * @param string $SyncStatus <p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
     * @param string $SyncError <p>配置同步错误摘要，无错误时可能省略。</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModificationTime <p>最后修改时间</p>
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("EffectiveEnabled",$param) and $param["EffectiveEnabled"] !== null) {
            $this->EffectiveEnabled = $param["EffectiveEnabled"];
        }

        if (array_key_exists("ServiceConfig",$param) and $param["ServiceConfig"] !== null) {
            $this->ServiceConfig = new CustomGuardrailServiceConfig();
            $this->ServiceConfig->deserialize($param["ServiceConfig"]);
        }

        if (array_key_exists("AuthConfig",$param) and $param["AuthConfig"] !== null) {
            $this->AuthConfig = new CustomGuardrailAuthConfig();
            $this->AuthConfig->deserialize($param["AuthConfig"]);
        }

        if (array_key_exists("DecisionConfig",$param) and $param["DecisionConfig"] !== null) {
            $this->DecisionConfig = new CustomGuardrailDecisionConfig();
            $this->DecisionConfig->deserialize($param["DecisionConfig"]);
        }

        if (array_key_exists("BehaviorConfig",$param) and $param["BehaviorConfig"] !== null) {
            $this->BehaviorConfig = new CustomGuardrailBehaviorConfig();
            $this->BehaviorConfig->deserialize($param["BehaviorConfig"]);
        }

        if (array_key_exists("FilterConfig",$param) and $param["FilterConfig"] !== null) {
            $this->FilterConfig = new CustomGuardrailFilterConfig();
            $this->FilterConfig->deserialize($param["FilterConfig"]);
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = new CustomGuardrailScope();
            $this->Scope->deserialize($param["Scope"]);
        }

        if (array_key_exists("Bindings",$param) and $param["Bindings"] !== null) {
            $this->Bindings = [];
            foreach ($param["Bindings"] as $key => $value){
                $obj = new CustomGuardrailPolicyBinding();
                $obj->deserialize($value);
                array_push($this->Bindings, $obj);
            }
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SyncError",$param) and $param["SyncError"] !== null) {
            $this->SyncError = $param["SyncError"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModificationTime",$param) and $param["ModificationTime"] !== null) {
            $this->ModificationTime = $param["ModificationTime"];
        }
    }
}

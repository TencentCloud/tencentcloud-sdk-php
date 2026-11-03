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
 * ModifyAIGWCustomGuardrailPolicy请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例 ID</p>
 * @method string getPolicyId() 获取<p>策略 ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>策略 ID</p>
 * @method string getName() 获取<p>策略名称，长度 1～64</p>
 * @method void setName(string $Name) 设置<p>策略名称，长度 1～64</p>
 * @method string getDescription() 获取<p>策略描述，最长 200；传空字符串可清空</p>
 * @method void setDescription(string $Description) 设置<p>策略描述，最长 200；传空字符串可清空</p>
 * @method boolean getEnabled() 获取<p>是否启用策略</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用策略</p>
 * @method CustomGuardrailServiceConfigPatch getServiceConfig() 获取<p>审核服务局部更新配置</p>
 * @method void setServiceConfig(CustomGuardrailServiceConfigPatch $ServiceConfig) 设置<p>审核服务局部更新配置</p>
 * @method CustomGuardrailAuthConfigPatch getAuthConfig() 获取<p>审核服务鉴权局部更新配置</p>
 * @method void setAuthConfig(CustomGuardrailAuthConfigPatch $AuthConfig) 设置<p>审核服务鉴权局部更新配置</p>
 * @method CustomGuardrailDecisionConfigPatch getDecisionConfig() 获取<p>审核响应判定局部更新配置</p>
 * @method void setDecisionConfig(CustomGuardrailDecisionConfigPatch $DecisionConfig) 设置<p>审核响应判定局部更新配置</p>
 * @method CustomGuardrailBehaviorConfigPatch getBehaviorConfig() 获取<p>处理行为局部更新配置</p>
 * @method void setBehaviorConfig(CustomGuardrailBehaviorConfigPatch $BehaviorConfig) 设置<p>处理行为局部更新配置</p>
 * @method CustomGuardrailFilterConfigPatch getFilterConfig() 获取<p>过滤与采样局部更新配置</p>
 * @method void setFilterConfig(CustomGuardrailFilterConfigPatch $FilterConfig) 设置<p>过滤与采样局部更新配置</p>
 * @method CustomGuardrailScopeInput getScope() 获取<p>资源绑定范围，global 或 resource。修改时传入的是新的完整范围，不是增量追加。</p>
 * @method void setScope(CustomGuardrailScopeInput $Scope) 设置<p>资源绑定范围，global 或 resource。修改时传入的是新的完整范围，不是增量追加。</p>
 */
class ModifyAIGWCustomGuardrailPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>策略 ID</p>
     */
    public $PolicyId;

    /**
     * @var string <p>策略名称，长度 1～64</p>
     */
    public $Name;

    /**
     * @var string <p>策略描述，最长 200；传空字符串可清空</p>
     */
    public $Description;

    /**
     * @var boolean <p>是否启用策略</p>
     */
    public $Enabled;

    /**
     * @var CustomGuardrailServiceConfigPatch <p>审核服务局部更新配置</p>
     */
    public $ServiceConfig;

    /**
     * @var CustomGuardrailAuthConfigPatch <p>审核服务鉴权局部更新配置</p>
     */
    public $AuthConfig;

    /**
     * @var CustomGuardrailDecisionConfigPatch <p>审核响应判定局部更新配置</p>
     */
    public $DecisionConfig;

    /**
     * @var CustomGuardrailBehaviorConfigPatch <p>处理行为局部更新配置</p>
     */
    public $BehaviorConfig;

    /**
     * @var CustomGuardrailFilterConfigPatch <p>过滤与采样局部更新配置</p>
     */
    public $FilterConfig;

    /**
     * @var CustomGuardrailScopeInput <p>资源绑定范围，global 或 resource。修改时传入的是新的完整范围，不是增量追加。</p>
     */
    public $Scope;

    /**
     * @param string $GatewayId <p>网关实例 ID</p>
     * @param string $PolicyId <p>策略 ID</p>
     * @param string $Name <p>策略名称，长度 1～64</p>
     * @param string $Description <p>策略描述，最长 200；传空字符串可清空</p>
     * @param boolean $Enabled <p>是否启用策略</p>
     * @param CustomGuardrailServiceConfigPatch $ServiceConfig <p>审核服务局部更新配置</p>
     * @param CustomGuardrailAuthConfigPatch $AuthConfig <p>审核服务鉴权局部更新配置</p>
     * @param CustomGuardrailDecisionConfigPatch $DecisionConfig <p>审核响应判定局部更新配置</p>
     * @param CustomGuardrailBehaviorConfigPatch $BehaviorConfig <p>处理行为局部更新配置</p>
     * @param CustomGuardrailFilterConfigPatch $FilterConfig <p>过滤与采样局部更新配置</p>
     * @param CustomGuardrailScopeInput $Scope <p>资源绑定范围，global 或 resource。修改时传入的是新的完整范围，不是增量追加。</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
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

        if (array_key_exists("ServiceConfig",$param) and $param["ServiceConfig"] !== null) {
            $this->ServiceConfig = new CustomGuardrailServiceConfigPatch();
            $this->ServiceConfig->deserialize($param["ServiceConfig"]);
        }

        if (array_key_exists("AuthConfig",$param) and $param["AuthConfig"] !== null) {
            $this->AuthConfig = new CustomGuardrailAuthConfigPatch();
            $this->AuthConfig->deserialize($param["AuthConfig"]);
        }

        if (array_key_exists("DecisionConfig",$param) and $param["DecisionConfig"] !== null) {
            $this->DecisionConfig = new CustomGuardrailDecisionConfigPatch();
            $this->DecisionConfig->deserialize($param["DecisionConfig"]);
        }

        if (array_key_exists("BehaviorConfig",$param) and $param["BehaviorConfig"] !== null) {
            $this->BehaviorConfig = new CustomGuardrailBehaviorConfigPatch();
            $this->BehaviorConfig->deserialize($param["BehaviorConfig"]);
        }

        if (array_key_exists("FilterConfig",$param) and $param["FilterConfig"] !== null) {
            $this->FilterConfig = new CustomGuardrailFilterConfigPatch();
            $this->FilterConfig->deserialize($param["FilterConfig"]);
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = new CustomGuardrailScopeInput();
            $this->Scope->deserialize($param["Scope"]);
        }
    }
}

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
 * CreateAIGWCustomGuardrailPolicy请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例 ID</p>
 * @method string getName() 获取<p>策略名称，同一网关内唯一，长度 1～64</p>
 * @method void setName(string $Name) 设置<p>策略名称，同一网关内唯一，长度 1～64</p>
 * @method CustomGuardrailServiceConfigInput getServiceConfig() 获取<p>审核服务配置</p>
 * @method void setServiceConfig(CustomGuardrailServiceConfigInput $ServiceConfig) 设置<p>审核服务配置</p>
 * @method CustomGuardrailDecisionConfigInput getDecisionConfig() 获取<p>审核响应判定配置</p>
 * @method void setDecisionConfig(CustomGuardrailDecisionConfigInput $DecisionConfig) 设置<p>审核响应判定配置</p>
 * @method CustomGuardrailScopeInput getScope() 获取<p>资源绑定范围，global 或 resource。修改时传入的是新的完整范围，不是增量追加。</p>
 * @method void setScope(CustomGuardrailScopeInput $Scope) 设置<p>资源绑定范围，global 或 resource。修改时传入的是新的完整范围，不是增量追加。</p>
 * @method CustomGuardrailAuthConfigInput getAuthConfig() 获取<p>必填，必须显式选择鉴权类型；无鉴权填写 {"AuthType":"none"}。</p>
 * @method void setAuthConfig(CustomGuardrailAuthConfigInput $AuthConfig) 设置<p>必填，必须显式选择鉴权类型；无鉴权填写 {"AuthType":"none"}。</p>
 * @method CustomGuardrailBehaviorConfigInput getBehaviorConfig() 获取<p>必填，Direction、HandleAction、TimeoutMs、FailureMode 四项均须显式填写。</p>
 * @method void setBehaviorConfig(CustomGuardrailBehaviorConfigInput $BehaviorConfig) 设置<p>必填，Direction、HandleAction、TimeoutMs、FailureMode 四项均须显式填写。</p>
 * @method string getDescription() 获取<p>策略描述，最长 200</p>
 * @method void setDescription(string $Description) 设置<p>策略描述，最长 200</p>
 * @method boolean getEnabled() 获取<p>是否启用策略，默认 true</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用策略，默认 true</p>
 * @method CustomGuardrailFilterConfigInput getFilterConfig() 获取<p>过滤与采样配置</p>
 * @method void setFilterConfig(CustomGuardrailFilterConfigInput $FilterConfig) 设置<p>过滤与采样配置</p>
 */
class CreateAIGWCustomGuardrailPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>策略名称，同一网关内唯一，长度 1～64</p>
     */
    public $Name;

    /**
     * @var CustomGuardrailServiceConfigInput <p>审核服务配置</p>
     */
    public $ServiceConfig;

    /**
     * @var CustomGuardrailDecisionConfigInput <p>审核响应判定配置</p>
     */
    public $DecisionConfig;

    /**
     * @var CustomGuardrailScopeInput <p>资源绑定范围，global 或 resource。修改时传入的是新的完整范围，不是增量追加。</p>
     */
    public $Scope;

    /**
     * @var CustomGuardrailAuthConfigInput <p>必填，必须显式选择鉴权类型；无鉴权填写 {"AuthType":"none"}。</p>
     */
    public $AuthConfig;

    /**
     * @var CustomGuardrailBehaviorConfigInput <p>必填，Direction、HandleAction、TimeoutMs、FailureMode 四项均须显式填写。</p>
     */
    public $BehaviorConfig;

    /**
     * @var string <p>策略描述，最长 200</p>
     */
    public $Description;

    /**
     * @var boolean <p>是否启用策略，默认 true</p>
     */
    public $Enabled;

    /**
     * @var CustomGuardrailFilterConfigInput <p>过滤与采样配置</p>
     */
    public $FilterConfig;

    /**
     * @param string $GatewayId <p>网关实例 ID</p>
     * @param string $Name <p>策略名称，同一网关内唯一，长度 1～64</p>
     * @param CustomGuardrailServiceConfigInput $ServiceConfig <p>审核服务配置</p>
     * @param CustomGuardrailDecisionConfigInput $DecisionConfig <p>审核响应判定配置</p>
     * @param CustomGuardrailScopeInput $Scope <p>资源绑定范围，global 或 resource。修改时传入的是新的完整范围，不是增量追加。</p>
     * @param CustomGuardrailAuthConfigInput $AuthConfig <p>必填，必须显式选择鉴权类型；无鉴权填写 {"AuthType":"none"}。</p>
     * @param CustomGuardrailBehaviorConfigInput $BehaviorConfig <p>必填，Direction、HandleAction、TimeoutMs、FailureMode 四项均须显式填写。</p>
     * @param string $Description <p>策略描述，最长 200</p>
     * @param boolean $Enabled <p>是否启用策略，默认 true</p>
     * @param CustomGuardrailFilterConfigInput $FilterConfig <p>过滤与采样配置</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ServiceConfig",$param) and $param["ServiceConfig"] !== null) {
            $this->ServiceConfig = new CustomGuardrailServiceConfigInput();
            $this->ServiceConfig->deserialize($param["ServiceConfig"]);
        }

        if (array_key_exists("DecisionConfig",$param) and $param["DecisionConfig"] !== null) {
            $this->DecisionConfig = new CustomGuardrailDecisionConfigInput();
            $this->DecisionConfig->deserialize($param["DecisionConfig"]);
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = new CustomGuardrailScopeInput();
            $this->Scope->deserialize($param["Scope"]);
        }

        if (array_key_exists("AuthConfig",$param) and $param["AuthConfig"] !== null) {
            $this->AuthConfig = new CustomGuardrailAuthConfigInput();
            $this->AuthConfig->deserialize($param["AuthConfig"]);
        }

        if (array_key_exists("BehaviorConfig",$param) and $param["BehaviorConfig"] !== null) {
            $this->BehaviorConfig = new CustomGuardrailBehaviorConfigInput();
            $this->BehaviorConfig->deserialize($param["BehaviorConfig"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("FilterConfig",$param) and $param["FilterConfig"] !== null) {
            $this->FilterConfig = new CustomGuardrailFilterConfigInput();
            $this->FilterConfig->deserialize($param["FilterConfig"]);
        }
    }
}

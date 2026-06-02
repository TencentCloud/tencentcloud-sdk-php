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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent应用关联的服务配置
 *
 * @method string getID() 获取<p>ID</p>
 * @method void setID(string $ID) 设置<p>ID</p>
 * @method boolean getInvokeLimitConfigStatus() 获取<p>是否限流</p>
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置<p>是否限流</p>
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取<p>限流配置</p>
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置<p>限流配置</p>
 * @method boolean getNeedAuth() 获取<p>是否要认证</p>
 * @method void setNeedAuth(boolean $NeedAuth) 设置<p>是否要认证</p>
 * @method string getAgentCredentialID() 获取<p>凭据ID</p>
 * @method void setAgentCredentialID(string $AgentCredentialID) 设置<p>凭据ID</p>
 */
class AgentAppServiceDTO extends AbstractModel
{
    /**
     * @var string <p>ID</p>
     */
    public $ID;

    /**
     * @var boolean <p>是否限流</p>
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO <p>限流配置</p>
     */
    public $InvokeLimitConfig;

    /**
     * @var boolean <p>是否要认证</p>
     */
    public $NeedAuth;

    /**
     * @var string <p>凭据ID</p>
     */
    public $AgentCredentialID;

    /**
     * @param string $ID <p>ID</p>
     * @param boolean $InvokeLimitConfigStatus <p>是否限流</p>
     * @param InvokeLimitConfigDTO $InvokeLimitConfig <p>限流配置</p>
     * @param boolean $NeedAuth <p>是否要认证</p>
     * @param string $AgentCredentialID <p>凭据ID</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InvokeLimitConfigStatus",$param) and $param["InvokeLimitConfigStatus"] !== null) {
            $this->InvokeLimitConfigStatus = $param["InvokeLimitConfigStatus"];
        }

        if (array_key_exists("InvokeLimitConfig",$param) and $param["InvokeLimitConfig"] !== null) {
            $this->InvokeLimitConfig = new InvokeLimitConfigDTO();
            $this->InvokeLimitConfig->deserialize($param["InvokeLimitConfig"]);
        }

        if (array_key_exists("NeedAuth",$param) and $param["NeedAuth"] !== null) {
            $this->NeedAuth = $param["NeedAuth"];
        }

        if (array_key_exists("AgentCredentialID",$param) and $param["AgentCredentialID"] !== null) {
            $this->AgentCredentialID = $param["AgentCredentialID"];
        }
    }
}

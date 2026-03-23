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
 * 应用绑定模型服务入参
 *
 * @method string getID() 获取模型服务ID
 * @method void setID(string $ID) 设置模型服务ID
 * @method boolean getInvokeLimitConfigStatus() 获取是否开启流量控制
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置是否开启流量控制
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取流量控制
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置流量控制
 * @method boolean getTokenLimitStatus() 获取是否开启token控制
 * @method void setTokenLimitStatus(boolean $TokenLimitStatus) 设置是否开启token控制
 * @method TokenLimitConfigDTO getTokenLimitConfig() 获取token控制
 * @method void setTokenLimitConfig(TokenLimitConfigDTO $TokenLimitConfig) 设置token控制
 */
class AgentAppModelServiceDTO extends AbstractModel
{
    /**
     * @var string 模型服务ID
     */
    public $ID;

    /**
     * @var boolean 是否开启流量控制
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO 流量控制
     */
    public $InvokeLimitConfig;

    /**
     * @var boolean 是否开启token控制
     */
    public $TokenLimitStatus;

    /**
     * @var TokenLimitConfigDTO token控制
     */
    public $TokenLimitConfig;

    /**
     * @param string $ID 模型服务ID
     * @param boolean $InvokeLimitConfigStatus 是否开启流量控制
     * @param InvokeLimitConfigDTO $InvokeLimitConfig 流量控制
     * @param boolean $TokenLimitStatus 是否开启token控制
     * @param TokenLimitConfigDTO $TokenLimitConfig token控制
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

        if (array_key_exists("TokenLimitStatus",$param) and $param["TokenLimitStatus"] !== null) {
            $this->TokenLimitStatus = $param["TokenLimitStatus"];
        }

        if (array_key_exists("TokenLimitConfig",$param) and $param["TokenLimitConfig"] !== null) {
            $this->TokenLimitConfig = new TokenLimitConfigDTO();
            $this->TokenLimitConfig->deserialize($param["TokenLimitConfig"]);
        }
    }
}

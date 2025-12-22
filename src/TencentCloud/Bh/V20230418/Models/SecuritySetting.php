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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 系统安全设置
 *
 * @method AuthModeSetting getAuthModeGM() 获取国密认证方式设置
 * @method void setAuthModeGM(AuthModeSetting $AuthModeGM) 设置国密认证方式设置
 * @method ReconnectionSetting getReconnection() 获取资产重连次数
 * @method void setReconnection(ReconnectionSetting $Reconnection) 设置资产重连次数
 * @method EnvInternetAccessSetting getEnvInternetAccess() 获取大区环境网络设置
 * @method void setEnvInternetAccess(EnvInternetAccessSetting $EnvInternetAccess) 设置大区环境网络设置
 */
class SecuritySetting extends AbstractModel
{
    /**
     * @var AuthModeSetting 国密认证方式设置
     */
    public $AuthModeGM;

    /**
     * @var ReconnectionSetting 资产重连次数
     */
    public $Reconnection;

    /**
     * @var EnvInternetAccessSetting 大区环境网络设置
     */
    public $EnvInternetAccess;

    /**
     * @param AuthModeSetting $AuthModeGM 国密认证方式设置
     * @param ReconnectionSetting $Reconnection 资产重连次数
     * @param EnvInternetAccessSetting $EnvInternetAccess 大区环境网络设置
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
        if (array_key_exists("AuthModeGM",$param) and $param["AuthModeGM"] !== null) {
            $this->AuthModeGM = new AuthModeSetting();
            $this->AuthModeGM->deserialize($param["AuthModeGM"]);
        }

        if (array_key_exists("Reconnection",$param) and $param["Reconnection"] !== null) {
            $this->Reconnection = new ReconnectionSetting();
            $this->Reconnection->deserialize($param["Reconnection"]);
        }

        if (array_key_exists("EnvInternetAccess",$param) and $param["EnvInternetAccess"] !== null) {
            $this->EnvInternetAccess = new EnvInternetAccessSetting();
            $this->EnvInternetAccess->deserialize($param["EnvInternetAccess"]);
        }
    }
}

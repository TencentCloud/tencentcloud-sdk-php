<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterAuthenticationOptions请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method ServiceAccountAuthenticationOptions getServiceAccounts() 获取ServiceAccount认证配置
 * @method void setServiceAccounts(ServiceAccountAuthenticationOptions $ServiceAccounts) 设置ServiceAccount认证配置
 * @method OIDCConfigAuthenticationOptions getOIDCConfig() 获取OIDC认证配置
 * @method void setOIDCConfig(OIDCConfigAuthenticationOptions $OIDCConfig) 设置OIDC认证配置
 */
class ModifyClusterAuthenticationOptionsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var ServiceAccountAuthenticationOptions ServiceAccount认证配置
     */
    public $ServiceAccounts;

    /**
     * @var OIDCConfigAuthenticationOptions OIDC认证配置
     */
    public $OIDCConfig;

    /**
     * @param string $ClusterId 集群ID
     * @param ServiceAccountAuthenticationOptions $ServiceAccounts ServiceAccount认证配置
     * @param OIDCConfigAuthenticationOptions $OIDCConfig OIDC认证配置
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ServiceAccounts",$param) and $param["ServiceAccounts"] !== null) {
            $this->ServiceAccounts = new ServiceAccountAuthenticationOptions();
            $this->ServiceAccounts->deserialize($param["ServiceAccounts"]);
        }

        if (array_key_exists("OIDCConfig",$param) and $param["OIDCConfig"] !== null) {
            $this->OIDCConfig = new OIDCConfigAuthenticationOptions();
            $this->OIDCConfig->deserialize($param["OIDCConfig"]);
        }
    }
}

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
 * DescribeClusterAuthenticationOptions返回参数结构体
 *
 * @method ServiceAccountAuthenticationOptions getServiceAccounts() 获取ServiceAccount认证配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceAccounts(ServiceAccountAuthenticationOptions $ServiceAccounts) 设置ServiceAccount认证配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationState() 获取最近一次修改操作结果，返回值可能为：Updating，Success，Failed，TimeOut
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationState(string $LatestOperationState) 设置最近一次修改操作结果，返回值可能为：Updating，Success，Failed，TimeOut
注意：此字段可能返回 null，表示取不到有效值。
 * @method OIDCConfigAuthenticationOptions getOIDCConfig() 获取OIDC认证配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOIDCConfig(OIDCConfigAuthenticationOptions $OIDCConfig) 设置OIDC认证配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterAuthenticationOptionsResponse extends AbstractModel
{
    /**
     * @var ServiceAccountAuthenticationOptions ServiceAccount认证配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceAccounts;

    /**
     * @var string 最近一次修改操作结果，返回值可能为：Updating，Success，Failed，TimeOut
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationState;

    /**
     * @var OIDCConfigAuthenticationOptions OIDC认证配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OIDCConfig;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ServiceAccountAuthenticationOptions $ServiceAccounts ServiceAccount认证配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationState 最近一次修改操作结果，返回值可能为：Updating，Success，Failed，TimeOut
注意：此字段可能返回 null，表示取不到有效值。
     * @param OIDCConfigAuthenticationOptions $OIDCConfig OIDC认证配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ServiceAccounts",$param) and $param["ServiceAccounts"] !== null) {
            $this->ServiceAccounts = new ServiceAccountAuthenticationOptions();
            $this->ServiceAccounts->deserialize($param["ServiceAccounts"]);
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("OIDCConfig",$param) and $param["OIDCConfig"] !== null) {
            $this->OIDCConfig = new OIDCConfigAuthenticationOptions();
            $this->OIDCConfig->deserialize($param["OIDCConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

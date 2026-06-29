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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API插件配置
 *
 * @method AuthConfig getAuthConfig() 获取授权配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthConfig(AuthConfig $AuthConfig) 设置授权配置信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiPluginConfig extends AbstractModel
{
    /**
     * @var AuthConfig 授权配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthConfig;

    /**
     * @param AuthConfig $AuthConfig 授权配置信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AuthConfig",$param) and $param["AuthConfig"] !== null) {
            $this->AuthConfig = new AuthConfig();
            $this->AuthConfig->deserialize($param["AuthConfig"]);
        }
    }
}

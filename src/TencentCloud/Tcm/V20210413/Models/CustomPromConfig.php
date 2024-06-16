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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 第三方 Prometheus 配置参数
 *
 * @method string getUrl() 获取Prometheus 访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置Prometheus 访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthType() 获取认证方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(string $AuthType) 设置认证方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPublicAddr() 获取是否公网地址，缺省为 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPublicAddr(boolean $IsPublicAddr) 设置是否公网地址，缺省为 false
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取虚拟网络id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置虚拟网络id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsername() 获取Prometheus 用户名（用于 basic 认证方式）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsername(string $Username) 设置Prometheus 用户名（用于 basic 认证方式）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取Prometheus 密码（用于 basic 认证方式）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置Prometheus 密码（用于 basic 认证方式）
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomPromConfig extends AbstractModel
{
    /**
     * @var string Prometheus 访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 认证方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var boolean 是否公网地址，缺省为 false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPublicAddr;

    /**
     * @var string 虚拟网络id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string Prometheus 用户名（用于 basic 认证方式）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Username;

    /**
     * @var string Prometheus 密码（用于 basic 认证方式）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @param string $Url Prometheus 访问地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthType 认证方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPublicAddr 是否公网地址，缺省为 false
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 虚拟网络id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Username Prometheus 用户名（用于 basic 认证方式）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password Prometheus 密码（用于 basic 认证方式）
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("IsPublicAddr",$param) and $param["IsPublicAddr"] !== null) {
            $this->IsPublicAddr = $param["IsPublicAddr"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}

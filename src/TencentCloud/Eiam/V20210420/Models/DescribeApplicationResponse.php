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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplication返回参数结构体
 *
 * @method string getKeyId() 获取密钥id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyId(string $KeyId) 设置密钥id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取应用展示名称，长度限制：64个字符。 默认与应用名字相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置应用展示名称，长度限制：64个字符。 默认与应用名字相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifiedDate() 获取应用最后修改时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedDate(string $LastModifiedDate) 设置应用最后修改时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientId() 获取客户端id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientId(string $ClientId) 设置客户端id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取应用类型，即创建应用时所选择的应用模板类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationType(string $ApplicationType) 设置应用类型，即创建应用时所选择的应用模板类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedDate() 获取应用创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedDate(string $CreatedDate) 设置应用创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取应用id，是应用的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置应用id，是应用的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTokenExpired() 获取令牌有效时间，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenExpired(integer $TokenExpired) 设置令牌有效时间，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientSecret() 获取客户端secret。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientSecret(string $ClientSecret) 设置客户端secret。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicKey() 获取公钥信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicKey(string $PublicKey) 设置公钥信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthorizeUrl() 获取授权地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizeUrl(string $AuthorizeUrl) 设置授权地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIconUrl() 获取应用图标图片访问地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIconUrl(string $IconUrl) 设置应用图标图片访问地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecureLevel() 获取安全等级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecureLevel(string $SecureLevel) 设置安全等级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAppStatus() 获取应用状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppStatus(boolean $AppStatus) 设置应用状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeApplicationResponse extends AbstractModel
{
    /**
     * @var string 密钥id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyId;

    /**
     * @var string 应用展示名称，长度限制：64个字符。 默认与应用名字相同。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 应用最后修改时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedDate;

    /**
     * @var string 客户端id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientId;

    /**
     * @var string 应用类型，即创建应用时所选择的应用模板类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationType;

    /**
     * @var string 应用创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedDate;

    /**
     * @var string 应用id，是应用的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var integer 令牌有效时间，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenExpired;

    /**
     * @var string 客户端secret。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientSecret;

    /**
     * @var string 公钥信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicKey;

    /**
     * @var string 授权地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizeUrl;

    /**
     * @var string 应用图标图片访问地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IconUrl;

    /**
     * @var string 安全等级。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecureLevel;

    /**
     * @var boolean 应用状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppStatus;

    /**
     * @var string 描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $KeyId 密钥id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 应用展示名称，长度限制：64个字符。 默认与应用名字相同。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifiedDate 应用最后修改时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientId 客户端id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType 应用类型，即创建应用时所选择的应用模板类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedDate 应用创建时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 应用id，是应用的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TokenExpired 令牌有效时间，单位为秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientSecret 客户端secret。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicKey 公钥信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthorizeUrl 授权地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IconUrl 应用图标图片访问地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecureLevel 安全等级。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AppStatus 应用状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("TokenExpired",$param) and $param["TokenExpired"] !== null) {
            $this->TokenExpired = $param["TokenExpired"];
        }

        if (array_key_exists("ClientSecret",$param) and $param["ClientSecret"] !== null) {
            $this->ClientSecret = $param["ClientSecret"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("AuthorizeUrl",$param) and $param["AuthorizeUrl"] !== null) {
            $this->AuthorizeUrl = $param["AuthorizeUrl"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("SecureLevel",$param) and $param["SecureLevel"] !== null) {
            $this->SecureLevel = $param["SecureLevel"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

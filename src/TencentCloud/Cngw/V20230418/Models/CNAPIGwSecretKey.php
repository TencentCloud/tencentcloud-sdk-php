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
 * 密钥信息
 *
 * @method integer getBindCount() 获取<p>绑定数</p>
 * @method void setBindCount(integer $BindCount) 设置<p>绑定数</p>
 * @method boolean getCanBind() 获取<p>是否可以绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanBind(boolean $CanBind) 设置<p>是否可以绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGenerateType() 获取<p>密钥生成方式。</p><p>枚举值：</p><ul><li>System： 系统自动生成</li><li>Custom： 用户自定义</li><li>KMS： 使用 KMS 密钥</li></ul>
 * @method void setGenerateType(string $GenerateType) 设置<p>密钥生成方式。</p><p>枚举值：</p><ul><li>System： 系统自动生成</li><li>Custom： 用户自定义</li><li>KMS： 使用 KMS 密钥</li></ul>
 * @method AIGWJWTCredentialConfig getJWTCredentialConfig() 获取<p>JWT凭证配置</p>
 * @method void setJWTCredentialConfig(AIGWJWTCredentialConfig $JWTCredentialConfig) 设置<p>JWT凭证配置</p>
 * @method string getKmsKeyName() 获取<p>KMS凭证名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyName(string $KmsKeyName) 设置<p>KMS凭证名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsKeyVersion() 获取<p>KMS凭证版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyVersion(string $KmsKeyVersion) 设置<p>KMS凭证版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method string getName() 获取<p>密钥名字</p>
 * @method void setName(string $Name) 设置<p>密钥名字</p>
 * @method AIGWOAuthCredentialConfig getOAuthCredentialConfig() 获取<p>OAuth2凭证配置</p>
 * @method void setOAuthCredentialConfig(AIGWOAuthCredentialConfig $OAuthCredentialConfig) 设置<p>OAuth2凭证配置</p>
 * @method AIGWOIDCCredentialConfig getOIDCCredentialConfig() 获取<p>OIDC凭证配置</p>
 * @method void setOIDCCredentialConfig(AIGWOIDCCredentialConfig $OIDCCredentialConfig) 设置<p>OIDC凭证配置</p>
 * @method string getProvider() 获取<p>Agent 密钥类型</p>
 * @method void setProvider(string $Provider) 设置<p>Agent 密钥类型</p>
 * @method string getResourceType() 获取<p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer： 消费者</li><li>ModelService： 模型服务</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer： 消费者</li><li>ModelService： 模型服务</li></ul>
 * @method string getSecretKeyId() 获取<p>密钥id</p>
 * @method void setSecretKeyId(string $SecretKeyId) 设置<p>密钥id</p>
 * @method string getSecretType() 获取<p>密钥协议类型。</p>
 * @method void setSecretType(string $SecretType) 设置<p>密钥协议类型。</p>
 * @method string getSecretValue() 获取<p>密钥明文</p>
 * @method void setSecretValue(string $SecretValue) 设置<p>密钥明文</p>
 * @method string getStatus() 获取<p>状态。</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态。</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
 * @method string getSyncStatus() 获取<p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li><li>Success： 成功</li></ul>
 * @method void setSyncStatus(string $SyncStatus) 设置<p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li><li>Success： 成功</li></ul>
 * @method string getSourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>Public： 公共</li><li>Private： 私有</li><li>SourceDeleted： 资源删除</li></ul>
 * @method void setSourceType(string $SourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>Public： 公共</li><li>Private： 私有</li><li>SourceDeleted： 资源删除</li></ul>
 * @method string getSyncedVersion() 获取<p>同步版本</p>
 * @method void setSyncedVersion(string $SyncedVersion) 设置<p>同步版本</p>
 * @method AIGWAKSKCredentialConfig getAKSKCredentialConfig() 获取<p>AK/SK凭证配置</p>
 * @method void setAKSKCredentialConfig(AIGWAKSKCredentialConfig $AKSKCredentialConfig) 设置<p>AK/SK凭证配置</p>
 * @method AIGWCAMCredentialConfig getCAMCredentialConfig() 获取<p>CAM凭证配置</p>
 * @method void setCAMCredentialConfig(AIGWCAMCredentialConfig $CAMCredentialConfig) 设置<p>CAM凭证配置</p>
 * @method AIGWBearerTokenCredentialConfig getBearerTokenCredentialConfig() 获取<p>Bearer Token凭证配置</p>
 * @method void setBearerTokenCredentialConfig(AIGWBearerTokenCredentialConfig $BearerTokenCredentialConfig) 设置<p>Bearer Token凭证配置</p>
 * @method AIGWBasicCredentialConfig getBasicCredentialConfig() 获取<p>Basic Auth凭证配置</p>
 * @method void setBasicCredentialConfig(AIGWBasicCredentialConfig $BasicCredentialConfig) 设置<p>Basic Auth凭证配置</p>
 * @method AIGWCustomHeaderCredentialConfig getCustomHeaderCredentialConfig() 获取<p>自定义Header凭证配置</p>
 * @method void setCustomHeaderCredentialConfig(AIGWCustomHeaderCredentialConfig $CustomHeaderCredentialConfig) 设置<p>自定义Header凭证配置</p>
 * @method AIGWQueryParamCredentialConfig getQueryParamCredentialConfig() 获取<p>自定义Query参数凭证配置</p>
 * @method void setQueryParamCredentialConfig(AIGWQueryParamCredentialConfig $QueryParamCredentialConfig) 设置<p>自定义Query参数凭证配置</p>
 */
class CNAPIGwSecretKey extends AbstractModel
{
    /**
     * @var integer <p>绑定数</p>
     */
    public $BindCount;

    /**
     * @var boolean <p>是否可以绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanBind;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>密钥生成方式。</p><p>枚举值：</p><ul><li>System： 系统自动生成</li><li>Custom： 用户自定义</li><li>KMS： 使用 KMS 密钥</li></ul>
     */
    public $GenerateType;

    /**
     * @var AIGWJWTCredentialConfig <p>JWT凭证配置</p>
     */
    public $JWTCredentialConfig;

    /**
     * @var string <p>KMS凭证名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyName;

    /**
     * @var string <p>KMS凭证版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyVersion;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>密钥名字</p>
     */
    public $Name;

    /**
     * @var AIGWOAuthCredentialConfig <p>OAuth2凭证配置</p>
     */
    public $OAuthCredentialConfig;

    /**
     * @var AIGWOIDCCredentialConfig <p>OIDC凭证配置</p>
     */
    public $OIDCCredentialConfig;

    /**
     * @var string <p>Agent 密钥类型</p>
     */
    public $Provider;

    /**
     * @var string <p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer： 消费者</li><li>ModelService： 模型服务</li></ul>
     */
    public $ResourceType;

    /**
     * @var string <p>密钥id</p>
     */
    public $SecretKeyId;

    /**
     * @var string <p>密钥协议类型。</p>
     */
    public $SecretType;

    /**
     * @var string <p>密钥明文</p>
     */
    public $SecretValue;

    /**
     * @var string <p>状态。</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
     */
    public $Status;

    /**
     * @var string <p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li><li>Success： 成功</li></ul>
     */
    public $SyncStatus;

    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>Public： 公共</li><li>Private： 私有</li><li>SourceDeleted： 资源删除</li></ul>
     */
    public $SourceType;

    /**
     * @var string <p>同步版本</p>
     */
    public $SyncedVersion;

    /**
     * @var AIGWAKSKCredentialConfig <p>AK/SK凭证配置</p>
     */
    public $AKSKCredentialConfig;

    /**
     * @var AIGWCAMCredentialConfig <p>CAM凭证配置</p>
     */
    public $CAMCredentialConfig;

    /**
     * @var AIGWBearerTokenCredentialConfig <p>Bearer Token凭证配置</p>
     */
    public $BearerTokenCredentialConfig;

    /**
     * @var AIGWBasicCredentialConfig <p>Basic Auth凭证配置</p>
     */
    public $BasicCredentialConfig;

    /**
     * @var AIGWCustomHeaderCredentialConfig <p>自定义Header凭证配置</p>
     */
    public $CustomHeaderCredentialConfig;

    /**
     * @var AIGWQueryParamCredentialConfig <p>自定义Query参数凭证配置</p>
     */
    public $QueryParamCredentialConfig;

    /**
     * @param integer $BindCount <p>绑定数</p>
     * @param boolean $CanBind <p>是否可以绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GenerateType <p>密钥生成方式。</p><p>枚举值：</p><ul><li>System： 系统自动生成</li><li>Custom： 用户自定义</li><li>KMS： 使用 KMS 密钥</li></ul>
     * @param AIGWJWTCredentialConfig $JWTCredentialConfig <p>JWT凭证配置</p>
     * @param string $KmsKeyName <p>KMS凭证名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsKeyVersion <p>KMS凭证版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime <p>修改时间</p>
     * @param string $Name <p>密钥名字</p>
     * @param AIGWOAuthCredentialConfig $OAuthCredentialConfig <p>OAuth2凭证配置</p>
     * @param AIGWOIDCCredentialConfig $OIDCCredentialConfig <p>OIDC凭证配置</p>
     * @param string $Provider <p>Agent 密钥类型</p>
     * @param string $ResourceType <p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer： 消费者</li><li>ModelService： 模型服务</li></ul>
     * @param string $SecretKeyId <p>密钥id</p>
     * @param string $SecretType <p>密钥协议类型。</p>
     * @param string $SecretValue <p>密钥明文</p>
     * @param string $Status <p>状态。</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
     * @param string $SyncStatus <p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li><li>Success： 成功</li></ul>
     * @param string $SourceType <p>资源类型</p><p>枚举值：</p><ul><li>Public： 公共</li><li>Private： 私有</li><li>SourceDeleted： 资源删除</li></ul>
     * @param string $SyncedVersion <p>同步版本</p>
     * @param AIGWAKSKCredentialConfig $AKSKCredentialConfig <p>AK/SK凭证配置</p>
     * @param AIGWCAMCredentialConfig $CAMCredentialConfig <p>CAM凭证配置</p>
     * @param AIGWBearerTokenCredentialConfig $BearerTokenCredentialConfig <p>Bearer Token凭证配置</p>
     * @param AIGWBasicCredentialConfig $BasicCredentialConfig <p>Basic Auth凭证配置</p>
     * @param AIGWCustomHeaderCredentialConfig $CustomHeaderCredentialConfig <p>自定义Header凭证配置</p>
     * @param AIGWQueryParamCredentialConfig $QueryParamCredentialConfig <p>自定义Query参数凭证配置</p>
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
        if (array_key_exists("BindCount",$param) and $param["BindCount"] !== null) {
            $this->BindCount = $param["BindCount"];
        }

        if (array_key_exists("CanBind",$param) and $param["CanBind"] !== null) {
            $this->CanBind = $param["CanBind"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("JWTCredentialConfig",$param) and $param["JWTCredentialConfig"] !== null) {
            $this->JWTCredentialConfig = new AIGWJWTCredentialConfig();
            $this->JWTCredentialConfig->deserialize($param["JWTCredentialConfig"]);
        }

        if (array_key_exists("KmsKeyName",$param) and $param["KmsKeyName"] !== null) {
            $this->KmsKeyName = $param["KmsKeyName"];
        }

        if (array_key_exists("KmsKeyVersion",$param) and $param["KmsKeyVersion"] !== null) {
            $this->KmsKeyVersion = $param["KmsKeyVersion"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OAuthCredentialConfig",$param) and $param["OAuthCredentialConfig"] !== null) {
            $this->OAuthCredentialConfig = new AIGWOAuthCredentialConfig();
            $this->OAuthCredentialConfig->deserialize($param["OAuthCredentialConfig"]);
        }

        if (array_key_exists("OIDCCredentialConfig",$param) and $param["OIDCCredentialConfig"] !== null) {
            $this->OIDCCredentialConfig = new AIGWOIDCCredentialConfig();
            $this->OIDCCredentialConfig->deserialize($param["OIDCCredentialConfig"]);
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("SecretKeyId",$param) and $param["SecretKeyId"] !== null) {
            $this->SecretKeyId = $param["SecretKeyId"];
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("SecretValue",$param) and $param["SecretValue"] !== null) {
            $this->SecretValue = $param["SecretValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SyncedVersion",$param) and $param["SyncedVersion"] !== null) {
            $this->SyncedVersion = $param["SyncedVersion"];
        }

        if (array_key_exists("AKSKCredentialConfig",$param) and $param["AKSKCredentialConfig"] !== null) {
            $this->AKSKCredentialConfig = new AIGWAKSKCredentialConfig();
            $this->AKSKCredentialConfig->deserialize($param["AKSKCredentialConfig"]);
        }

        if (array_key_exists("CAMCredentialConfig",$param) and $param["CAMCredentialConfig"] !== null) {
            $this->CAMCredentialConfig = new AIGWCAMCredentialConfig();
            $this->CAMCredentialConfig->deserialize($param["CAMCredentialConfig"]);
        }

        if (array_key_exists("BearerTokenCredentialConfig",$param) and $param["BearerTokenCredentialConfig"] !== null) {
            $this->BearerTokenCredentialConfig = new AIGWBearerTokenCredentialConfig();
            $this->BearerTokenCredentialConfig->deserialize($param["BearerTokenCredentialConfig"]);
        }

        if (array_key_exists("BasicCredentialConfig",$param) and $param["BasicCredentialConfig"] !== null) {
            $this->BasicCredentialConfig = new AIGWBasicCredentialConfig();
            $this->BasicCredentialConfig->deserialize($param["BasicCredentialConfig"]);
        }

        if (array_key_exists("CustomHeaderCredentialConfig",$param) and $param["CustomHeaderCredentialConfig"] !== null) {
            $this->CustomHeaderCredentialConfig = new AIGWCustomHeaderCredentialConfig();
            $this->CustomHeaderCredentialConfig->deserialize($param["CustomHeaderCredentialConfig"]);
        }

        if (array_key_exists("QueryParamCredentialConfig",$param) and $param["QueryParamCredentialConfig"] !== null) {
            $this->QueryParamCredentialConfig = new AIGWQueryParamCredentialConfig();
            $this->QueryParamCredentialConfig->deserialize($param["QueryParamCredentialConfig"]);
        }
    }
}

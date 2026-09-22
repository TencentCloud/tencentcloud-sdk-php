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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 连接器详情（主表 + 最新版本展开）。
 *
 * @method string getConnectorId() 获取连接器 ID
 * @method void setConnectorId(string $ConnectorId) 设置连接器 ID
 * @method string getConnectorSlug() 获取连接器短标识（终身不变，跨版本稳定）
 * @method void setConnectorSlug(string $ConnectorSlug) 设置连接器短标识（终身不变，跨版本稳定）
 * @method string getConnectorKey() 获取版本级连接器密钥
 * @method void setConnectorKey(string $ConnectorKey) 设置版本级连接器密钥
 * @method string getName() 获取连接器名称
 * @method void setName(string $Name) 设置连接器名称
 * @method string getDescription() 获取连接器描述
 * @method void setDescription(string $Description) 设置连接器描述
 * @method string getAvatarUrl() 获取头像 URL
 * @method void setAvatarUrl(string $AvatarUrl) 设置头像 URL
 * @method string getSource() 获取连接器来源：ENTERPRISE_AGENT / ASSISTANT
 * @method void setSource(string $Source) 设置连接器来源：ENTERPRISE_AGENT / ASSISTANT
 * @method string getEnterpriseId() 获取归属企业 ID
 * @method void setEnterpriseId(string $EnterpriseId) 设置归属企业 ID
 * @method string getType() 获取连接器类型：MCP_SERVER / A2A / API_SERVICE
 * @method void setType(string $Type) 设置连接器类型：MCP_SERVER / A2A / API_SERVICE
 * @method string getServiceUrl() 获取上游服务地址
 * @method void setServiceUrl(string $ServiceUrl) 设置上游服务地址
 * @method array getAuthModes() 获取授权方式列表：NONE / ONEID / OAUTH2_IDP
 * @method void setAuthModes(array $AuthModes) 设置授权方式列表：NONE / ONEID / OAUTH2_IDP
 * @method integer getLatestVersionNo() 获取最新版本号
 * @method void setLatestVersionNo(integer $LatestVersionNo) 设置最新版本号
 * @method string getStatus() 获取连接器状态：ACTIVE / DISABLED
 * @method void setStatus(string $Status) 设置连接器状态：ACTIVE / DISABLED
 * @method string getCreatorId() 获取创建人 ID
 * @method void setCreatorId(string $CreatorId) 设置创建人 ID
 * @method string getCreatedTime() 获取创建时间（ISO8601，UTC）
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间（ISO8601，UTC）
 * @method string getModifiedTime() 获取最后修改时间（ISO8601，UTC）
 * @method void setModifiedTime(string $ModifiedTime) 设置最后修改时间（ISO8601，UTC）
 */
class ConnectorInfo extends AbstractModel
{
    /**
     * @var string 连接器 ID
     */
    public $ConnectorId;

    /**
     * @var string 连接器短标识（终身不变，跨版本稳定）
     */
    public $ConnectorSlug;

    /**
     * @var string 版本级连接器密钥
     */
    public $ConnectorKey;

    /**
     * @var string 连接器名称
     */
    public $Name;

    /**
     * @var string 连接器描述
     */
    public $Description;

    /**
     * @var string 头像 URL
     */
    public $AvatarUrl;

    /**
     * @var string 连接器来源：ENTERPRISE_AGENT / ASSISTANT
     */
    public $Source;

    /**
     * @var string 归属企业 ID
     */
    public $EnterpriseId;

    /**
     * @var string 连接器类型：MCP_SERVER / A2A / API_SERVICE
     */
    public $Type;

    /**
     * @var string 上游服务地址
     */
    public $ServiceUrl;

    /**
     * @var array 授权方式列表：NONE / ONEID / OAUTH2_IDP
     */
    public $AuthModes;

    /**
     * @var integer 最新版本号
     */
    public $LatestVersionNo;

    /**
     * @var string 连接器状态：ACTIVE / DISABLED
     */
    public $Status;

    /**
     * @var string 创建人 ID
     */
    public $CreatorId;

    /**
     * @var string 创建时间（ISO8601，UTC）
     */
    public $CreatedTime;

    /**
     * @var string 最后修改时间（ISO8601，UTC）
     */
    public $ModifiedTime;

    /**
     * @param string $ConnectorId 连接器 ID
     * @param string $ConnectorSlug 连接器短标识（终身不变，跨版本稳定）
     * @param string $ConnectorKey 版本级连接器密钥
     * @param string $Name 连接器名称
     * @param string $Description 连接器描述
     * @param string $AvatarUrl 头像 URL
     * @param string $Source 连接器来源：ENTERPRISE_AGENT / ASSISTANT
     * @param string $EnterpriseId 归属企业 ID
     * @param string $Type 连接器类型：MCP_SERVER / A2A / API_SERVICE
     * @param string $ServiceUrl 上游服务地址
     * @param array $AuthModes 授权方式列表：NONE / ONEID / OAUTH2_IDP
     * @param integer $LatestVersionNo 最新版本号
     * @param string $Status 连接器状态：ACTIVE / DISABLED
     * @param string $CreatorId 创建人 ID
     * @param string $CreatedTime 创建时间（ISO8601，UTC）
     * @param string $ModifiedTime 最后修改时间（ISO8601，UTC）
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
        if (array_key_exists("ConnectorId",$param) and $param["ConnectorId"] !== null) {
            $this->ConnectorId = $param["ConnectorId"];
        }

        if (array_key_exists("ConnectorSlug",$param) and $param["ConnectorSlug"] !== null) {
            $this->ConnectorSlug = $param["ConnectorSlug"];
        }

        if (array_key_exists("ConnectorKey",$param) and $param["ConnectorKey"] !== null) {
            $this->ConnectorKey = $param["ConnectorKey"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AvatarUrl",$param) and $param["AvatarUrl"] !== null) {
            $this->AvatarUrl = $param["AvatarUrl"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("EnterpriseId",$param) and $param["EnterpriseId"] !== null) {
            $this->EnterpriseId = $param["EnterpriseId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ServiceUrl",$param) and $param["ServiceUrl"] !== null) {
            $this->ServiceUrl = $param["ServiceUrl"];
        }

        if (array_key_exists("AuthModes",$param) and $param["AuthModes"] !== null) {
            $this->AuthModes = $param["AuthModes"];
        }

        if (array_key_exists("LatestVersionNo",$param) and $param["LatestVersionNo"] !== null) {
            $this->LatestVersionNo = $param["LatestVersionNo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}

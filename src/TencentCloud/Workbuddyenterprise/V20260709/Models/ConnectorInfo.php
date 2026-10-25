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
 * @method string getConnectorId() 获取<p>连接器 ID</p>
 * @method void setConnectorId(string $ConnectorId) 设置<p>连接器 ID</p>
 * @method string getConnectorSlug() 获取<p>连接器短标识（终身不变，跨版本稳定）</p>
 * @method void setConnectorSlug(string $ConnectorSlug) 设置<p>连接器短标识（终身不变，跨版本稳定）</p>
 * @method string getConnectorKey() 获取<p>版本级连接器密钥</p>
 * @method void setConnectorKey(string $ConnectorKey) 设置<p>版本级连接器密钥</p>
 * @method string getName() 获取<p>连接器名称</p>
 * @method void setName(string $Name) 设置<p>连接器名称</p>
 * @method string getDescription() 获取<p>连接器描述</p>
 * @method void setDescription(string $Description) 设置<p>连接器描述</p>
 * @method string getAvatarUrl() 获取<p>头像 URL</p>
 * @method void setAvatarUrl(string $AvatarUrl) 设置<p>头像 URL</p>
 * @method string getSource() 获取<p>连接器来源：ENTERPRISE_AGENT / ASSISTANT</p>
 * @method void setSource(string $Source) 设置<p>连接器来源：ENTERPRISE_AGENT / ASSISTANT</p>
 * @method string getEnterpriseId() 获取<p>归属企业 ID</p>
 * @method void setEnterpriseId(string $EnterpriseId) 设置<p>归属企业 ID</p>
 * @method string getType() 获取<p>连接器类型：MCP_SERVER / A2A / API_SERVICE</p>
 * @method void setType(string $Type) 设置<p>连接器类型：MCP_SERVER / A2A / API_SERVICE</p>
 * @method string getServiceUrl() 获取<p>上游服务地址</p>
 * @method void setServiceUrl(string $ServiceUrl) 设置<p>上游服务地址</p>
 * @method array getAuthModes() 获取<p>授权方式列表：NONE / ONEID / OAUTH2_IDP / API_KEY / DYNAMIC_API_KEY。DYNAMIC_API_KEY 表示按每轮请求提供的动态字段，通过 HeaderMappings 注入出站 HTTP Header。</p>
 * @method void setAuthModes(array $AuthModes) 设置<p>授权方式列表：NONE / ONEID / OAUTH2_IDP / API_KEY / DYNAMIC_API_KEY。DYNAMIC_API_KEY 表示按每轮请求提供的动态字段，通过 HeaderMappings 注入出站 HTTP Header。</p>
 * @method integer getLatestVersionNo() 获取<p>最新版本号</p>
 * @method void setLatestVersionNo(integer $LatestVersionNo) 设置<p>最新版本号</p>
 * @method string getStatus() 获取<p>连接器状态：ACTIVE / DISABLED</p>
 * @method void setStatus(string $Status) 设置<p>连接器状态：ACTIVE / DISABLED</p>
 * @method string getCreatorId() 获取<p>创建人 ID</p>
 * @method void setCreatorId(string $CreatorId) 设置<p>创建人 ID</p>
 * @method string getCreatedTime() 获取<p>创建时间（ISO8601，UTC）</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间（ISO8601，UTC）</p>
 * @method string getModifiedTime() 获取<p>最后修改时间（ISO8601，UTC）</p>
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>最后修改时间（ISO8601，UTC）</p>
 * @method string getVpcConfigId() 获取<p>VPC 网络配置 ID。为空表示该连接器通过公网访问 ServiceUrl。仅绑定 VPC 网络配置时本字段有值。</p>
 * @method void setVpcConfigId(string $VpcConfigId) 设置<p>VPC 网络配置 ID。为空表示该连接器通过公网访问 ServiceUrl。仅绑定 VPC 网络配置时本字段有值。</p>
 * @method string getDisplayName() 获取<p>展示名：console 老连接器目录（DescribeConsoleConnectorList）下发，取 registry data.display_name，老数据缺失时回落 Name；云上目录无独立展示名，省略不返回。Name 是存储名/选型回写键（含 scope 前缀），不承担展示职责。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置<p>展示名：console 老连接器目录（DescribeConsoleConnectorList）下发，取 registry data.display_name，老数据缺失时回落 Name；云上目录无独立展示名，省略不返回。Name 是存储名/选型回写键（含 scope 前缀），不承担展示职责。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConnectorInfo extends AbstractModel
{
    /**
     * @var string <p>连接器 ID</p>
     */
    public $ConnectorId;

    /**
     * @var string <p>连接器短标识（终身不变，跨版本稳定）</p>
     */
    public $ConnectorSlug;

    /**
     * @var string <p>版本级连接器密钥</p>
     */
    public $ConnectorKey;

    /**
     * @var string <p>连接器名称</p>
     */
    public $Name;

    /**
     * @var string <p>连接器描述</p>
     */
    public $Description;

    /**
     * @var string <p>头像 URL</p>
     */
    public $AvatarUrl;

    /**
     * @var string <p>连接器来源：ENTERPRISE_AGENT / ASSISTANT</p>
     */
    public $Source;

    /**
     * @var string <p>归属企业 ID</p>
     */
    public $EnterpriseId;

    /**
     * @var string <p>连接器类型：MCP_SERVER / A2A / API_SERVICE</p>
     */
    public $Type;

    /**
     * @var string <p>上游服务地址</p>
     */
    public $ServiceUrl;

    /**
     * @var array <p>授权方式列表：NONE / ONEID / OAUTH2_IDP / API_KEY / DYNAMIC_API_KEY。DYNAMIC_API_KEY 表示按每轮请求提供的动态字段，通过 HeaderMappings 注入出站 HTTP Header。</p>
     */
    public $AuthModes;

    /**
     * @var integer <p>最新版本号</p>
     */
    public $LatestVersionNo;

    /**
     * @var string <p>连接器状态：ACTIVE / DISABLED</p>
     */
    public $Status;

    /**
     * @var string <p>创建人 ID</p>
     */
    public $CreatorId;

    /**
     * @var string <p>创建时间（ISO8601，UTC）</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>最后修改时间（ISO8601，UTC）</p>
     */
    public $ModifiedTime;

    /**
     * @var string <p>VPC 网络配置 ID。为空表示该连接器通过公网访问 ServiceUrl。仅绑定 VPC 网络配置时本字段有值。</p>
     */
    public $VpcConfigId;

    /**
     * @var string <p>展示名：console 老连接器目录（DescribeConsoleConnectorList）下发，取 registry data.display_name，老数据缺失时回落 Name；云上目录无独立展示名，省略不返回。Name 是存储名/选型回写键（含 scope 前缀），不承担展示职责。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @param string $ConnectorId <p>连接器 ID</p>
     * @param string $ConnectorSlug <p>连接器短标识（终身不变，跨版本稳定）</p>
     * @param string $ConnectorKey <p>版本级连接器密钥</p>
     * @param string $Name <p>连接器名称</p>
     * @param string $Description <p>连接器描述</p>
     * @param string $AvatarUrl <p>头像 URL</p>
     * @param string $Source <p>连接器来源：ENTERPRISE_AGENT / ASSISTANT</p>
     * @param string $EnterpriseId <p>归属企业 ID</p>
     * @param string $Type <p>连接器类型：MCP_SERVER / A2A / API_SERVICE</p>
     * @param string $ServiceUrl <p>上游服务地址</p>
     * @param array $AuthModes <p>授权方式列表：NONE / ONEID / OAUTH2_IDP / API_KEY / DYNAMIC_API_KEY。DYNAMIC_API_KEY 表示按每轮请求提供的动态字段，通过 HeaderMappings 注入出站 HTTP Header。</p>
     * @param integer $LatestVersionNo <p>最新版本号</p>
     * @param string $Status <p>连接器状态：ACTIVE / DISABLED</p>
     * @param string $CreatorId <p>创建人 ID</p>
     * @param string $CreatedTime <p>创建时间（ISO8601，UTC）</p>
     * @param string $ModifiedTime <p>最后修改时间（ISO8601，UTC）</p>
     * @param string $VpcConfigId <p>VPC 网络配置 ID。为空表示该连接器通过公网访问 ServiceUrl。仅绑定 VPC 网络配置时本字段有值。</p>
     * @param string $DisplayName <p>展示名：console 老连接器目录（DescribeConsoleConnectorList）下发，取 registry data.display_name，老数据缺失时回落 Name；云上目录无独立展示名，省略不返回。Name 是存储名/选型回写键（含 scope 前缀），不承担展示职责。</p>
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

        if (array_key_exists("VpcConfigId",$param) and $param["VpcConfigId"] !== null) {
            $this->VpcConfigId = $param["VpcConfigId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }
    }
}

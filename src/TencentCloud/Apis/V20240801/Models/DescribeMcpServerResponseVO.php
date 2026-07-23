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
 * DescribeMcpServerResponseVO
 *
 * @method string getInstanceID() 获取<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelIDs() 获取<p>标签ID数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelIDs(array $LabelIDs) 设置<p>标签ID数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCategoryIDs() 获取<p>目录ID数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryIDs(array $CategoryIDs) 设置<p>目录ID数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetSelect() 获取<p>负载方式，robin random consistentHash</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSelect(string $TargetSelect) 设置<p>负载方式，robin random consistentHash</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargetHosts() 获取<p>目标服务器</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetHosts(array $TargetHosts) 设置<p>目标服务器</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpProtocolType() 获取<p>后端协议：http https</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpProtocolType(string $HttpProtocolType) 设置<p>后端协议：http https</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCheckTargetCertsError() 获取<p>证书检查</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckTargetCertsError(boolean $CheckTargetCertsError) 设置<p>证书检查</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetPath() 获取<p>目标路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetPath(string $TargetPath) 设置<p>目标路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInvokeLimitConfigStatus() 获取<p>流量控制状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置<p>流量控制状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取<p>流量控制配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置<p>流量控制配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIpWhiteStatus() 获取<p>IP白名单开启状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpWhiteStatus(boolean $IpWhiteStatus) 设置<p>IP白名单开启状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method IpConfig getIpWhiteConfig() 获取<p>IP白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpWhiteConfig(IpConfig $IpWhiteConfig) 设置<p>IP白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIpBlackStatus() 获取<p>IP黑名单开启状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpBlackStatus(boolean $IpBlackStatus) 设置<p>IP黑名单开启状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method IpConfig getIpBlackConfig() 获取<p>IP黑名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpBlackConfig(IpConfig $IpBlackConfig) 设置<p>IP黑名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getID() 获取<p>mcp server ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置<p>mcp server ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取<p>预览地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置<p>预览地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method IDNameVO getApp() 获取<p>应用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApp(IDNameVO $App) 设置<p>应用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCatalogs() 获取<p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogs(array $Catalogs) 设置<p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取<p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置<p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppID() 获取<p>用户appID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(integer $AppID) 设置<p>用户appID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取<p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置<p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomHttpHost() 获取<p>自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomHttpHost(string $CustomHttpHost) 设置<p>自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpHostType() 获取<p>Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpHostType(string $HttpHostType) 设置<p>Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取<p>请求的超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置<p>请求的超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMode() 获取<p>mcp server模式</p>
 * @method void setMode(string $Mode) 设置<p>mcp server模式</p>
 * @method string getMcpVersion() 获取<p>mcp version</p>
 * @method void setMcpVersion(string $McpVersion) 设置<p>mcp version</p>
 * @method array getWrapServices() 获取<p>封装模式下绑定的服务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWrapServices(array $WrapServices) 设置<p>封装模式下绑定的服务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getToolNum() 获取<p>工具数量</p>
 * @method void setToolNum(integer $ToolNum) 设置<p>工具数量</p>
 * @method array getMcpSecurityRulesVO() 获取<p>安全规则集响应</p>
 * @method void setMcpSecurityRulesVO(array $McpSecurityRulesVO) 设置<p>安全规则集响应</p>
 * @method array getToolConfigs() 获取<p>真实工具级别配置，实时拉取了tool/list做渲染的，如果tool/list不通，就拉不到。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolConfigs(array $ToolConfigs) 设置<p>真实工具级别配置，实时拉取了tool/list做渲染的，如果tool/list不通，就拉不到。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method McpUrlObj getUrlObj() 获取<p>访问URL</p>
 * @method void setUrlObj(McpUrlObj $UrlObj) 设置<p>访问URL</p>
 * @method string getToolMessage() 获取<p>后端mcp服务是否正常</p>
 * @method void setToolMessage(string $ToolMessage) 设置<p>后端mcp服务是否正常</p>
 * @method array getTools() 获取<p>后端mcp服务的工具列表</p>
 * @method void setTools(array $Tools) 设置<p>后端mcp服务的工具列表</p>
 * @method string getWrapPaasID() 获取<p>封装的API分组ID</p>
 * @method void setWrapPaasID(string $WrapPaasID) 设置<p>封装的API分组ID</p>
 * @method integer getRelateAgentAppNum() 获取<p>关联的agentApp数量</p>
 * @method void setRelateAgentAppNum(integer $RelateAgentAppNum) 设置<p>关联的agentApp数量</p>
 * @method array getPluginConfigs() 获取<p>插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginConfigs(array $PluginConfigs) 设置<p>插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIgnoreHealthCheck() 获取<p>是否忽略健康检查</p>
 * @method void setIgnoreHealthCheck(boolean $IgnoreHealthCheck) 设置<p>是否忽略健康检查</p>
 */
class DescribeMcpServerResponseVO extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceID;

    /**
     * @var string <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array <p>标签ID数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelIDs;

    /**
     * @var array <p>目录ID数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryIDs;

    /**
     * @var string <p>负载方式，robin random consistentHash</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSelect;

    /**
     * @var array <p>目标服务器</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetHosts;

    /**
     * @var string <p>后端协议：http https</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpProtocolType;

    /**
     * @var boolean <p>证书检查</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckTargetCertsError;

    /**
     * @var string <p>目标路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetPath;

    /**
     * @var boolean <p>流量控制状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO <p>流量控制配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvokeLimitConfig;

    /**
     * @var boolean <p>IP白名单开启状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpWhiteStatus;

    /**
     * @var IpConfig <p>IP白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpWhiteConfig;

    /**
     * @var boolean <p>IP黑名单开启状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpBlackStatus;

    /**
     * @var IpConfig <p>IP黑名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpBlackConfig;

    /**
     * @var string <p>mcp server ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>预览地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var IDNameVO <p>应用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $App;

    /**
     * @var array <p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalogs;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var integer <p>用户appID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string <p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string <p>自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomHttpHost;

    /**
     * @var string <p>Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpHostType;

    /**
     * @var integer <p>请求的超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var string <p>mcp server模式</p>
     */
    public $Mode;

    /**
     * @var string <p>mcp version</p>
     */
    public $McpVersion;

    /**
     * @var array <p>封装模式下绑定的服务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WrapServices;

    /**
     * @var integer <p>工具数量</p>
     */
    public $ToolNum;

    /**
     * @var array <p>安全规则集响应</p>
     */
    public $McpSecurityRulesVO;

    /**
     * @var array <p>真实工具级别配置，实时拉取了tool/list做渲染的，如果tool/list不通，就拉不到。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolConfigs;

    /**
     * @var McpUrlObj <p>访问URL</p>
     */
    public $UrlObj;

    /**
     * @var string <p>后端mcp服务是否正常</p>
     */
    public $ToolMessage;

    /**
     * @var array <p>后端mcp服务的工具列表</p>
     */
    public $Tools;

    /**
     * @var string <p>封装的API分组ID</p>
     */
    public $WrapPaasID;

    /**
     * @var integer <p>关联的agentApp数量</p>
     */
    public $RelateAgentAppNum;

    /**
     * @var array <p>插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginConfigs;

    /**
     * @var boolean <p>是否忽略健康检查</p>
     */
    public $IgnoreHealthCheck;

    /**
     * @param string $InstanceID <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelIDs <p>标签ID数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CategoryIDs <p>目录ID数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetSelect <p>负载方式，robin random consistentHash</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TargetHosts <p>目标服务器</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpProtocolType <p>后端协议：http https</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CheckTargetCertsError <p>证书检查</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetPath <p>目标路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InvokeLimitConfigStatus <p>流量控制状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param InvokeLimitConfigDTO $InvokeLimitConfig <p>流量控制配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IpWhiteStatus <p>IP白名单开启状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param IpConfig $IpWhiteConfig <p>IP白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IpBlackStatus <p>IP黑名单开启状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param IpConfig $IpBlackConfig <p>IP黑名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ID <p>mcp server ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url <p>预览地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param IDNameVO $App <p>应用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Catalogs <p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime <p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppID <p>用户appID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin <p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomHttpHost <p>自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpHostType <p>Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout <p>请求的超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mode <p>mcp server模式</p>
     * @param string $McpVersion <p>mcp version</p>
     * @param array $WrapServices <p>封装模式下绑定的服务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ToolNum <p>工具数量</p>
     * @param array $McpSecurityRulesVO <p>安全规则集响应</p>
     * @param array $ToolConfigs <p>真实工具级别配置，实时拉取了tool/list做渲染的，如果tool/list不通，就拉不到。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param McpUrlObj $UrlObj <p>访问URL</p>
     * @param string $ToolMessage <p>后端mcp服务是否正常</p>
     * @param array $Tools <p>后端mcp服务的工具列表</p>
     * @param string $WrapPaasID <p>封装的API分组ID</p>
     * @param integer $RelateAgentAppNum <p>关联的agentApp数量</p>
     * @param array $PluginConfigs <p>插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IgnoreHealthCheck <p>是否忽略健康检查</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LabelIDs",$param) and $param["LabelIDs"] !== null) {
            $this->LabelIDs = $param["LabelIDs"];
        }

        if (array_key_exists("CategoryIDs",$param) and $param["CategoryIDs"] !== null) {
            $this->CategoryIDs = $param["CategoryIDs"];
        }

        if (array_key_exists("TargetSelect",$param) and $param["TargetSelect"] !== null) {
            $this->TargetSelect = $param["TargetSelect"];
        }

        if (array_key_exists("TargetHosts",$param) and $param["TargetHosts"] !== null) {
            $this->TargetHosts = [];
            foreach ($param["TargetHosts"] as $key => $value){
                $obj = new TargetHostDTO();
                $obj->deserialize($value);
                array_push($this->TargetHosts, $obj);
            }
        }

        if (array_key_exists("HttpProtocolType",$param) and $param["HttpProtocolType"] !== null) {
            $this->HttpProtocolType = $param["HttpProtocolType"];
        }

        if (array_key_exists("CheckTargetCertsError",$param) and $param["CheckTargetCertsError"] !== null) {
            $this->CheckTargetCertsError = $param["CheckTargetCertsError"];
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }

        if (array_key_exists("InvokeLimitConfigStatus",$param) and $param["InvokeLimitConfigStatus"] !== null) {
            $this->InvokeLimitConfigStatus = $param["InvokeLimitConfigStatus"];
        }

        if (array_key_exists("InvokeLimitConfig",$param) and $param["InvokeLimitConfig"] !== null) {
            $this->InvokeLimitConfig = new InvokeLimitConfigDTO();
            $this->InvokeLimitConfig->deserialize($param["InvokeLimitConfig"]);
        }

        if (array_key_exists("IpWhiteStatus",$param) and $param["IpWhiteStatus"] !== null) {
            $this->IpWhiteStatus = $param["IpWhiteStatus"];
        }

        if (array_key_exists("IpWhiteConfig",$param) and $param["IpWhiteConfig"] !== null) {
            $this->IpWhiteConfig = new IpConfig();
            $this->IpWhiteConfig->deserialize($param["IpWhiteConfig"]);
        }

        if (array_key_exists("IpBlackStatus",$param) and $param["IpBlackStatus"] !== null) {
            $this->IpBlackStatus = $param["IpBlackStatus"];
        }

        if (array_key_exists("IpBlackConfig",$param) and $param["IpBlackConfig"] !== null) {
            $this->IpBlackConfig = new IpConfig();
            $this->IpBlackConfig->deserialize($param["IpBlackConfig"]);
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("App",$param) and $param["App"] !== null) {
            $this->App = new IDNameVO();
            $this->App->deserialize($param["App"]);
        }

        if (array_key_exists("Catalogs",$param) and $param["Catalogs"] !== null) {
            $this->Catalogs = [];
            foreach ($param["Catalogs"] as $key => $value){
                $obj = new IDNameVO();
                $obj->deserialize($value);
                array_push($this->Catalogs, $obj);
            }
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new IDNameVO();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CustomHttpHost",$param) and $param["CustomHttpHost"] !== null) {
            $this->CustomHttpHost = $param["CustomHttpHost"];
        }

        if (array_key_exists("HttpHostType",$param) and $param["HttpHostType"] !== null) {
            $this->HttpHostType = $param["HttpHostType"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("McpVersion",$param) and $param["McpVersion"] !== null) {
            $this->McpVersion = $param["McpVersion"];
        }

        if (array_key_exists("WrapServices",$param) and $param["WrapServices"] !== null) {
            $this->WrapServices = $param["WrapServices"];
        }

        if (array_key_exists("ToolNum",$param) and $param["ToolNum"] !== null) {
            $this->ToolNum = $param["ToolNum"];
        }

        if (array_key_exists("McpSecurityRulesVO",$param) and $param["McpSecurityRulesVO"] !== null) {
            $this->McpSecurityRulesVO = [];
            foreach ($param["McpSecurityRulesVO"] as $key => $value){
                $obj = new McpSecurityRulesVO();
                $obj->deserialize($value);
                array_push($this->McpSecurityRulesVO, $obj);
            }
        }

        if (array_key_exists("ToolConfigs",$param) and $param["ToolConfigs"] !== null) {
            $this->ToolConfigs = [];
            foreach ($param["ToolConfigs"] as $key => $value){
                $obj = new ToolConfigVO();
                $obj->deserialize($value);
                array_push($this->ToolConfigs, $obj);
            }
        }

        if (array_key_exists("UrlObj",$param) and $param["UrlObj"] !== null) {
            $this->UrlObj = new McpUrlObj();
            $this->UrlObj->deserialize($param["UrlObj"]);
        }

        if (array_key_exists("ToolMessage",$param) and $param["ToolMessage"] !== null) {
            $this->ToolMessage = $param["ToolMessage"];
        }

        if (array_key_exists("Tools",$param) and $param["Tools"] !== null) {
            $this->Tools = [];
            foreach ($param["Tools"] as $key => $value){
                $obj = new McpTool();
                $obj->deserialize($value);
                array_push($this->Tools, $obj);
            }
        }

        if (array_key_exists("WrapPaasID",$param) and $param["WrapPaasID"] !== null) {
            $this->WrapPaasID = $param["WrapPaasID"];
        }

        if (array_key_exists("RelateAgentAppNum",$param) and $param["RelateAgentAppNum"] !== null) {
            $this->RelateAgentAppNum = $param["RelateAgentAppNum"];
        }

        if (array_key_exists("PluginConfigs",$param) and $param["PluginConfigs"] !== null) {
            $this->PluginConfigs = [];
            foreach ($param["PluginConfigs"] as $key => $value){
                $obj = new PluginConfigDTO();
                $obj->deserialize($value);
                array_push($this->PluginConfigs, $obj);
            }
        }

        if (array_key_exists("IgnoreHealthCheck",$param) and $param["IgnoreHealthCheck"] !== null) {
            $this->IgnoreHealthCheck = $param["IgnoreHealthCheck"];
        }
    }
}

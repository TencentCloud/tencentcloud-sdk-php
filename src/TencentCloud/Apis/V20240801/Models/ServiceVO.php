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
 * ServiceVO
 *
 * @method string getInstanceID() 获取<p>实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceID(string $InstanceID) 设置<p>实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaasID() 获取<p>里约应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaasID(string $PaasID) 设置<p>里约应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelIDs() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelIDs(array $LabelIDs) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCategoryIDs() 获取<p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryIDs(array $CategoryIDs) 设置<p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthType() 获取<p>鉴权方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(string $AuthType) 设置<p>鉴权方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSignType() 获取<p>签名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignType(string $SignType) 设置<p>签名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLoginTypes() 获取<p>登录方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoginTypes(array $LoginTypes) 设置<p>登录方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetSelect() 获取<p>负载方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSelect(string $TargetSelect) 设置<p>负载方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPubPath() 获取<p>公开路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPubPath(string $PubPath) 设置<p>公开路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestMethod() 获取<p>请求方法</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestMethod(string $RequestMethod) 设置<p>请求方法</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargetHosts() 获取<p>目标服务器</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetHosts(array $TargetHosts) 设置<p>目标服务器</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpProtocolType() 获取<p>是否https</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpProtocolType(string $HttpProtocolType) 设置<p>是否https</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCheckTargetCertsError() 获取<p>证书检查</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckTargetCertsError(boolean $CheckTargetCertsError) 设置<p>证书检查</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpProtocolVersion() 获取<p>http协议类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpProtocolVersion(string $HttpProtocolVersion) 设置<p>http协议类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVersions() 获取<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersions(array $Versions) 设置<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetPath() 获取<p>目标路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetPath(string $TargetPath) 设置<p>目标路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRequestParamsValidatorStatus() 获取<p>入参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestParamsValidatorStatus(boolean $RequestParamsValidatorStatus) 设置<p>入参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestParamsValidatorJsonInfoT() 获取<p>入参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestParamsValidatorJsonInfoT(string $RequestParamsValidatorJsonInfoT) 设置<p>入参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getResponseParamsValidatorStatus() 获取<p>出参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseParamsValidatorStatus(boolean $ResponseParamsValidatorStatus) 设置<p>出参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResponseParamsValidatorJsonInfoT() 获取<p>出参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseParamsValidatorJsonInfoT(string $ResponseParamsValidatorJsonInfoT) 设置<p>出参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInvokeLimitConfigStatus() 获取<p>流量控制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置<p>流量控制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取<p>流量控制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置<p>流量控制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHealthCheckStatus() 获取<p>健康检查</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckStatus(boolean $HealthCheckStatus) 设置<p>健康检查</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckConfigDTO getHealthCheckConfig() 获取<p>健康检查</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckConfig(HealthCheckConfigDTO $HealthCheckConfig) 设置<p>健康检查</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSourceTypeStatus() 获取<p>格式转换</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceTypeStatus(boolean $SourceTypeStatus) 设置<p>格式转换</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SourceTypeConfigDTO getSourceTypeConfig() 获取<p>格式转换</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceTypeConfig(SourceTypeConfigDTO $SourceTypeConfig) 设置<p>格式转换</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTokenLimitStatus() 获取<p>是否开启Token限流</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenLimitStatus(boolean $TokenLimitStatus) 设置<p>是否开启Token限流</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TokenLimitConfigDTO getTokenLimitConfig() 获取<p>Token限流配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenLimitConfig(TokenLimitConfigDTO $TokenLimitConfig) 设置<p>Token限流配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTmsStatus() 获取<p>是否开启内容安全</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmsStatus(boolean $TmsStatus) 设置<p>是否开启内容安全</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TmsConfigDTO getTmsConfig() 获取<p>内容安全配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmsConfig(TmsConfigDTO $TmsConfig) 设置<p>内容安全配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIpWhiteStatus() 获取<p>IP白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpWhiteStatus(boolean $IpWhiteStatus) 设置<p>IP白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpWhiteList() 获取<p>IP白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpWhiteList(array $IpWhiteList) 设置<p>IP白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIpBlackStatus() 获取<p>IP黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpBlackStatus(boolean $IpBlackStatus) 设置<p>IP黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpBlackList() 获取<p>IP黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpBlackList(array $IpBlackList) 设置<p>IP黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPluginConfigs() 获取<p>插件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginConfigs(array $PluginConfigs) 设置<p>插件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getID() 获取<p>服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置<p>服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取<p>预览地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置<p>预览地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method IDNameVO getApp() 获取<p>app</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApp(IDNameVO $App) 设置<p>app</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCatalogs() 获取<p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogs(array $Catalogs) 设置<p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogins() 获取<p>认证方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogins(array $Logins) 设置<p>认证方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthAppNum() 获取<p>授权数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthAppNum(integer $AuthAppNum) 设置<p>授权数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取<p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置<p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppID() 获取<p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(integer $AppID) 设置<p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取<p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置<p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取<p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置<p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOpenMessageLogStatus() 获取<p>是否开启报文记录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenMessageLogStatus(boolean $OpenMessageLogStatus) 设置<p>是否开启报文记录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrPaasIDSubscriptionID() 获取<p>订阅页面的当前用户是否订阅了该API</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrPaasIDSubscriptionID(string $CurrPaasIDSubscriptionID) 设置<p>订阅页面的当前用户是否订阅了该API</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServiceType() 获取<p>目标服务类型 Restful Database Mock</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServiceType(string $TargetServiceType) 设置<p>目标服务类型 Restful Database Mock</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SqlTemplate getSqlTemplate() 获取<p>SQL模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlTemplate(SqlTemplate $SqlTemplate) 设置<p>SQL模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetHostType() 获取<p>目标Host类型 0 默认 1 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetHostType(integer $TargetHostType) 设置<p>目标Host类型 0 默认 1 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetServiceHostType() 获取<p>后端服务类型 0 自定义 原始数据:ip/域名或vpc 1 后端服务 服务组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServiceHostType(integer $TargetServiceHostType) 设置<p>后端服务类型 0 自定义 原始数据:ip/域名或vpc 1 后端服务 服务组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetServerGroupID() 获取<p>后端服务组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServerGroupID(string $TargetServerGroupID) 设置<p>后端服务组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TargetServerGroupDTO getTargetServerGroup() 获取<p>后端服务组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetServerGroup(TargetServerGroupDTO $TargetServerGroup) 设置<p>后端服务组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomHttpHost() 获取<p>自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomHttpHost(string $CustomHttpHost) 设置<p>自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpHostType() 获取<p>Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpHostType(string $HttpHostType) 设置<p>Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMockStatusCode() 获取<p>mock响应状态码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMockStatusCode(integer $MockStatusCode) 设置<p>mock响应状态码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMockBody() 获取<p>mock响应body</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMockBody(string $MockBody) 设置<p>mock响应body</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMockHeaders() 获取<p>mock响应头</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMockHeaders(array $MockHeaders) 设置<p>mock响应头</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPathMatchType() 获取<p>路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathMatchType(string $PathMatchType) 设置<p>路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CustomMatch getCustomMatch() 获取<p>自定义匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomMatch(CustomMatch $CustomMatch) 设置<p>自定义匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取<p>请求的超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置<p>请求的超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMcpServerNum() 获取<p>绑定的mcp server数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMcpServerNum(integer $McpServerNum) 设置<p>绑定的mcp server数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceVO extends AbstractModel
{
    /**
     * @var string <p>实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceID;

    /**
     * @var string <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>里约应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $PaasID;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelIDs;

    /**
     * @var array <p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryIDs;

    /**
     * @var string <p>鉴权方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $AuthType;

    /**
     * @var string <p>签名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $SignType;

    /**
     * @var array <p>登录方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $LoginTypes;

    /**
     * @var string <p>负载方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSelect;

    /**
     * @var string <p>公开路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PubPath;

    /**
     * @var string <p>请求方法</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestMethod;

    /**
     * @var array <p>目标服务器</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetHosts;

    /**
     * @var string <p>是否https</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpProtocolType;

    /**
     * @var boolean <p>证书检查</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckTargetCertsError;

    /**
     * @var string <p>http协议类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpProtocolVersion;

    /**
     * @var array <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Versions;

    /**
     * @var string <p>目标路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetPath;

    /**
     * @var boolean <p>入参</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestParamsValidatorStatus;

    /**
     * @var string <p>入参</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestParamsValidatorJsonInfoT;

    /**
     * @var boolean <p>出参</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseParamsValidatorStatus;

    /**
     * @var string <p>出参</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseParamsValidatorJsonInfoT;

    /**
     * @var boolean <p>流量控制</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO <p>流量控制</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvokeLimitConfig;

    /**
     * @var boolean <p>健康检查</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckStatus;

    /**
     * @var HealthCheckConfigDTO <p>健康检查</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckConfig;

    /**
     * @var boolean <p>格式转换</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceTypeStatus;

    /**
     * @var SourceTypeConfigDTO <p>格式转换</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceTypeConfig;

    /**
     * @var boolean <p>是否开启Token限流</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $TokenLimitStatus;

    /**
     * @var TokenLimitConfigDTO <p>Token限流配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $TokenLimitConfig;

    /**
     * @var boolean <p>是否开启内容安全</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $TmsStatus;

    /**
     * @var TmsConfigDTO <p>内容安全配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $TmsConfig;

    /**
     * @var boolean <p>IP白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpWhiteStatus;

    /**
     * @var array <p>IP白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpWhiteList;

    /**
     * @var boolean <p>IP黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpBlackStatus;

    /**
     * @var array <p>IP黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpBlackList;

    /**
     * @var array <p>插件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginConfigs;

    /**
     * @var string <p>服务ID</p>
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
     * @var IDNameVO <p>app</p>
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
     * @var array <p>认证方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Logins;

    /**
     * @var integer <p>授权数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthAppNum;

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
     * @var integer <p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string <p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string <p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var boolean <p>是否开启报文记录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenMessageLogStatus;

    /**
     * @var string <p>订阅页面的当前用户是否订阅了该API</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $CurrPaasIDSubscriptionID;

    /**
     * @var string <p>目标服务类型 Restful Database Mock</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServiceType;

    /**
     * @var SqlTemplate <p>SQL模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlTemplate;

    /**
     * @var integer <p>目标Host类型 0 默认 1 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetHostType;

    /**
     * @var integer <p>后端服务类型 0 自定义 原始数据:ip/域名或vpc 1 后端服务 服务组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServiceHostType;

    /**
     * @var string <p>后端服务组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServerGroupID;

    /**
     * @var TargetServerGroupDTO <p>后端服务组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetServerGroup;

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
     * @var integer <p>mock响应状态码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MockStatusCode;

    /**
     * @var string <p>mock响应body</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MockBody;

    /**
     * @var array <p>mock响应头</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MockHeaders;

    /**
     * @var string <p>路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathMatchType;

    /**
     * @var CustomMatch <p>自定义匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomMatch;

    /**
     * @var integer <p>请求的超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var integer <p>绑定的mcp server数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $McpServerNum;

    /**
     * @param string $InstanceID <p>实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaasID <p>里约应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelIDs <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CategoryIDs <p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthType <p>鉴权方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SignType <p>签名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LoginTypes <p>登录方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetSelect <p>负载方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PubPath <p>公开路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestMethod <p>请求方法</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TargetHosts <p>目标服务器</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpProtocolType <p>是否https</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CheckTargetCertsError <p>证书检查</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpProtocolVersion <p>http协议类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Versions <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetPath <p>目标路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RequestParamsValidatorStatus <p>入参</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestParamsValidatorJsonInfoT <p>入参</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ResponseParamsValidatorStatus <p>出参</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResponseParamsValidatorJsonInfoT <p>出参</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InvokeLimitConfigStatus <p>流量控制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param InvokeLimitConfigDTO $InvokeLimitConfig <p>流量控制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HealthCheckStatus <p>健康检查</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckConfigDTO $HealthCheckConfig <p>健康检查</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SourceTypeStatus <p>格式转换</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SourceTypeConfigDTO $SourceTypeConfig <p>格式转换</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TokenLimitStatus <p>是否开启Token限流</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TokenLimitConfigDTO $TokenLimitConfig <p>Token限流配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TmsStatus <p>是否开启内容安全</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TmsConfigDTO $TmsConfig <p>内容安全配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IpWhiteStatus <p>IP白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IpWhiteList <p>IP白名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IpBlackStatus <p>IP黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IpBlackList <p>IP黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PluginConfigs <p>插件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ID <p>服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url <p>预览地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param IDNameVO $App <p>app</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Catalogs <p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Logins <p>认证方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthAppNum <p>授权数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime <p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppID <p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin <p>用户ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain <p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OpenMessageLogStatus <p>是否开启报文记录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrPaasIDSubscriptionID <p>订阅页面的当前用户是否订阅了该API</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServiceType <p>目标服务类型 Restful Database Mock</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SqlTemplate $SqlTemplate <p>SQL模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetHostType <p>目标Host类型 0 默认 1 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetServiceHostType <p>后端服务类型 0 自定义 原始数据:ip/域名或vpc 1 后端服务 服务组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetServerGroupID <p>后端服务组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TargetServerGroupDTO $TargetServerGroup <p>后端服务组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomHttpHost <p>自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpHostType <p>Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MockStatusCode <p>mock响应状态码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MockBody <p>mock响应body</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MockHeaders <p>mock响应头</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PathMatchType <p>路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CustomMatch $CustomMatch <p>自定义匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout <p>请求的超时时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $McpServerNum <p>绑定的mcp server数量</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PaasID",$param) and $param["PaasID"] !== null) {
            $this->PaasID = $param["PaasID"];
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

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("SignType",$param) and $param["SignType"] !== null) {
            $this->SignType = $param["SignType"];
        }

        if (array_key_exists("LoginTypes",$param) and $param["LoginTypes"] !== null) {
            $this->LoginTypes = $param["LoginTypes"];
        }

        if (array_key_exists("TargetSelect",$param) and $param["TargetSelect"] !== null) {
            $this->TargetSelect = $param["TargetSelect"];
        }

        if (array_key_exists("PubPath",$param) and $param["PubPath"] !== null) {
            $this->PubPath = $param["PubPath"];
        }

        if (array_key_exists("RequestMethod",$param) and $param["RequestMethod"] !== null) {
            $this->RequestMethod = $param["RequestMethod"];
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

        if (array_key_exists("HttpProtocolVersion",$param) and $param["HttpProtocolVersion"] !== null) {
            $this->HttpProtocolVersion = $param["HttpProtocolVersion"];
        }

        if (array_key_exists("Versions",$param) and $param["Versions"] !== null) {
            $this->Versions = [];
            foreach ($param["Versions"] as $key => $value){
                $obj = new VersionDTO();
                $obj->deserialize($value);
                array_push($this->Versions, $obj);
            }
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }

        if (array_key_exists("RequestParamsValidatorStatus",$param) and $param["RequestParamsValidatorStatus"] !== null) {
            $this->RequestParamsValidatorStatus = $param["RequestParamsValidatorStatus"];
        }

        if (array_key_exists("RequestParamsValidatorJsonInfoT",$param) and $param["RequestParamsValidatorJsonInfoT"] !== null) {
            $this->RequestParamsValidatorJsonInfoT = $param["RequestParamsValidatorJsonInfoT"];
        }

        if (array_key_exists("ResponseParamsValidatorStatus",$param) and $param["ResponseParamsValidatorStatus"] !== null) {
            $this->ResponseParamsValidatorStatus = $param["ResponseParamsValidatorStatus"];
        }

        if (array_key_exists("ResponseParamsValidatorJsonInfoT",$param) and $param["ResponseParamsValidatorJsonInfoT"] !== null) {
            $this->ResponseParamsValidatorJsonInfoT = $param["ResponseParamsValidatorJsonInfoT"];
        }

        if (array_key_exists("InvokeLimitConfigStatus",$param) and $param["InvokeLimitConfigStatus"] !== null) {
            $this->InvokeLimitConfigStatus = $param["InvokeLimitConfigStatus"];
        }

        if (array_key_exists("InvokeLimitConfig",$param) and $param["InvokeLimitConfig"] !== null) {
            $this->InvokeLimitConfig = new InvokeLimitConfigDTO();
            $this->InvokeLimitConfig->deserialize($param["InvokeLimitConfig"]);
        }

        if (array_key_exists("HealthCheckStatus",$param) and $param["HealthCheckStatus"] !== null) {
            $this->HealthCheckStatus = $param["HealthCheckStatus"];
        }

        if (array_key_exists("HealthCheckConfig",$param) and $param["HealthCheckConfig"] !== null) {
            $this->HealthCheckConfig = new HealthCheckConfigDTO();
            $this->HealthCheckConfig->deserialize($param["HealthCheckConfig"]);
        }

        if (array_key_exists("SourceTypeStatus",$param) and $param["SourceTypeStatus"] !== null) {
            $this->SourceTypeStatus = $param["SourceTypeStatus"];
        }

        if (array_key_exists("SourceTypeConfig",$param) and $param["SourceTypeConfig"] !== null) {
            $this->SourceTypeConfig = new SourceTypeConfigDTO();
            $this->SourceTypeConfig->deserialize($param["SourceTypeConfig"]);
        }

        if (array_key_exists("TokenLimitStatus",$param) and $param["TokenLimitStatus"] !== null) {
            $this->TokenLimitStatus = $param["TokenLimitStatus"];
        }

        if (array_key_exists("TokenLimitConfig",$param) and $param["TokenLimitConfig"] !== null) {
            $this->TokenLimitConfig = new TokenLimitConfigDTO();
            $this->TokenLimitConfig->deserialize($param["TokenLimitConfig"]);
        }

        if (array_key_exists("TmsStatus",$param) and $param["TmsStatus"] !== null) {
            $this->TmsStatus = $param["TmsStatus"];
        }

        if (array_key_exists("TmsConfig",$param) and $param["TmsConfig"] !== null) {
            $this->TmsConfig = new TmsConfigDTO();
            $this->TmsConfig->deserialize($param["TmsConfig"]);
        }

        if (array_key_exists("IpWhiteStatus",$param) and $param["IpWhiteStatus"] !== null) {
            $this->IpWhiteStatus = $param["IpWhiteStatus"];
        }

        if (array_key_exists("IpWhiteList",$param) and $param["IpWhiteList"] !== null) {
            $this->IpWhiteList = $param["IpWhiteList"];
        }

        if (array_key_exists("IpBlackStatus",$param) and $param["IpBlackStatus"] !== null) {
            $this->IpBlackStatus = $param["IpBlackStatus"];
        }

        if (array_key_exists("IpBlackList",$param) and $param["IpBlackList"] !== null) {
            $this->IpBlackList = $param["IpBlackList"];
        }

        if (array_key_exists("PluginConfigs",$param) and $param["PluginConfigs"] !== null) {
            $this->PluginConfigs = [];
            foreach ($param["PluginConfigs"] as $key => $value){
                $obj = new PluginConfigDTO();
                $obj->deserialize($value);
                array_push($this->PluginConfigs, $obj);
            }
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

        if (array_key_exists("Logins",$param) and $param["Logins"] !== null) {
            $this->Logins = [];
            foreach ($param["Logins"] as $key => $value){
                $obj = new IDNameVO();
                $obj->deserialize($value);
                array_push($this->Logins, $obj);
            }
        }

        if (array_key_exists("AuthAppNum",$param) and $param["AuthAppNum"] !== null) {
            $this->AuthAppNum = $param["AuthAppNum"];
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("OpenMessageLogStatus",$param) and $param["OpenMessageLogStatus"] !== null) {
            $this->OpenMessageLogStatus = $param["OpenMessageLogStatus"];
        }

        if (array_key_exists("CurrPaasIDSubscriptionID",$param) and $param["CurrPaasIDSubscriptionID"] !== null) {
            $this->CurrPaasIDSubscriptionID = $param["CurrPaasIDSubscriptionID"];
        }

        if (array_key_exists("TargetServiceType",$param) and $param["TargetServiceType"] !== null) {
            $this->TargetServiceType = $param["TargetServiceType"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = new SqlTemplate();
            $this->SqlTemplate->deserialize($param["SqlTemplate"]);
        }

        if (array_key_exists("TargetHostType",$param) and $param["TargetHostType"] !== null) {
            $this->TargetHostType = $param["TargetHostType"];
        }

        if (array_key_exists("TargetServiceHostType",$param) and $param["TargetServiceHostType"] !== null) {
            $this->TargetServiceHostType = $param["TargetServiceHostType"];
        }

        if (array_key_exists("TargetServerGroupID",$param) and $param["TargetServerGroupID"] !== null) {
            $this->TargetServerGroupID = $param["TargetServerGroupID"];
        }

        if (array_key_exists("TargetServerGroup",$param) and $param["TargetServerGroup"] !== null) {
            $this->TargetServerGroup = new TargetServerGroupDTO();
            $this->TargetServerGroup->deserialize($param["TargetServerGroup"]);
        }

        if (array_key_exists("CustomHttpHost",$param) and $param["CustomHttpHost"] !== null) {
            $this->CustomHttpHost = $param["CustomHttpHost"];
        }

        if (array_key_exists("HttpHostType",$param) and $param["HttpHostType"] !== null) {
            $this->HttpHostType = $param["HttpHostType"];
        }

        if (array_key_exists("MockStatusCode",$param) and $param["MockStatusCode"] !== null) {
            $this->MockStatusCode = $param["MockStatusCode"];
        }

        if (array_key_exists("MockBody",$param) and $param["MockBody"] !== null) {
            $this->MockBody = $param["MockBody"];
        }

        if (array_key_exists("MockHeaders",$param) and $param["MockHeaders"] !== null) {
            $this->MockHeaders = [];
            foreach ($param["MockHeaders"] as $key => $value){
                $obj = new FieldValueDTO();
                $obj->deserialize($value);
                array_push($this->MockHeaders, $obj);
            }
        }

        if (array_key_exists("PathMatchType",$param) and $param["PathMatchType"] !== null) {
            $this->PathMatchType = $param["PathMatchType"];
        }

        if (array_key_exists("CustomMatch",$param) and $param["CustomMatch"] !== null) {
            $this->CustomMatch = new CustomMatch();
            $this->CustomMatch->deserialize($param["CustomMatch"]);
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("McpServerNum",$param) and $param["McpServerNum"] !== null) {
            $this->McpServerNum = $param["McpServerNum"];
        }
    }
}

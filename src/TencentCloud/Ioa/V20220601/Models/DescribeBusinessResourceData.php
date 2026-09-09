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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务资源列表数据对象集合
 *
 * @method integer getServiceId() 获取<p>业务资源id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(integer $ServiceId) 设置<p>业务资源id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取<p>业务资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置<p>业务资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceType() 获取<p>资源类型:ip,domain,ip_section，对应ip，域名，ip段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置<p>资源类型:ip,domain,ip_section，对应ip，域名，ip段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceAddress() 获取<p>业务资源地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceAddress(string $ServiceAddress) 设置<p>业务资源地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServicePort() 获取<p>业务资源端口 all,1-65535</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServicePort(string $ServicePort) 设置<p>业务资源端口 all,1-65535</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>业务资源创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>业务资源创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>业务资源最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>业务资源最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取<p>说明字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置<p>说明字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAreaId() 获取<p>资源模块ID(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaId(integer $AreaId) 设置<p>资源模块ID(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSmartGateIds() 获取<p>零信任网关id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartGateIds(array $SmartGateIds) 设置<p>零信任网关id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProtocol() 获取<p>业务资源协议类型,3：所有,2：UDP，1：TCP(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(integer $Protocol) 设置<p>业务资源协议类型,3：所有,2：UDP，1：TCP(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevels() 获取<p>业务资源等级(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevels(integer $Levels) 设置<p>业务资源等级(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSmartGateNames() 获取<p>零信任网关名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartGateNames(string $SmartGateNames) 设置<p>零信任网关名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDirectConn() 获取<p>网关连通性(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDirectConn(integer $DirectConn) 设置<p>网关连通性(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDetectState() 获取<p>网关连通性状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectState(integer $DetectState) 设置<p>网关连通性状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetectInfo() 获取<p>网关连通性信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectInfo(string $DetectInfo) 设置<p>网关连通性信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetectTime() 获取<p>网关连通性创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectTime(string $DetectTime) 设置<p>网关连通性创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectorGroupId() 获取<p>绑定的连接器组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectorGroupId(string $ConnectorGroupId) 设置<p>绑定的连接器组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectorGroupName() 获取<p>绑定的连接器组的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectorGroupName(string $ConnectorGroupName) 设置<p>绑定的连接器组的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReachableTime() 获取<p>资源连通性可达最后的检测时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReachableTime(string $ReachableTime) 设置<p>资源连通性可达最后的检测时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReachableState() 获取<p>资源连通性可达状态,0：未检测，1：未连通，2：已连通</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReachableState(integer $ReachableState) 设置<p>资源连通性可达状态,0：未检测，1：未连通，2：已连通</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccessType() 获取<p>访问类型:0-NGN 1-web(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessType(integer $AccessType) 设置<p>访问类型:0-NGN 1-web(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackendScheme() 获取<p>web资源-后端协议</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackendScheme(string $BackendScheme) 设置<p>web资源-后端协议</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackendPath() 获取<p>web资源-后端路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackendPath(string $BackendPath) 设置<p>web资源-后端路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrontScheme() 获取<p>web资源-前端协议</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrontScheme(string $FrontScheme) 设置<p>web资源-前端协议</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrontHost() 获取<p>web资源-前端host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrontHost(string $FrontHost) 设置<p>web资源-前端host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFrontPort() 获取<p>web资源-前端host(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrontPort(integer $FrontPort) 设置<p>web资源-前端host(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrontPath() 获取<p>web资源-前端路径 默认&quot;/&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrontPath(string $FrontPath) 设置<p>web资源-前端路径 默认&quot;/&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDisableFront() 获取<p>web资源-是否禁用外网访问：0-可通过外网访问 1-不能通过外网访问(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisableFront(integer $DisableFront) 设置<p>web资源-是否禁用外网访问：0-可通过外网访问 1-不能通过外网访问(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomDomain() 获取<p>web资源-租户自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomDomain(string $CustomDomain) 设置<p>web资源-租户自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomHost() 获取<p>web资源-自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomHost(string $CustomHost) 设置<p>web资源-自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCnameStatus() 获取<p>web资源-Cname状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCnameStatus(integer $CnameStatus) 设置<p>web资源-Cname状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCertificateId() 获取<p>web资源-关联证书ID(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateId(integer $CertificateId) 设置<p>web资源-关联证书ID(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWebGwResourceType() 获取<p>web资源类型：0-应用 1-API(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebGwResourceType(integer $WebGwResourceType) 设置<p>web资源类型：0-应用 1-API(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAPISecretId() 获取<p>web资源-如果选择API类型资源，则需要配置密钥(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAPISecretId(integer $APISecretId) 设置<p>web资源-如果选择API类型资源，则需要配置密钥(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAreaName() 获取<p>所属资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaName(string $AreaName) 设置<p>所属资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSSLCertId() 获取<p>web资源-前端协议是HTTPS类型，需要配置证书</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSLCertId(string $SSLCertId) 设置<p>web资源-前端协议是HTTPS类型，需要配置证书</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableDependentAddr() 获取<p>web资源-是否启用依赖地址：0-不启用 1-启用(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableDependentAddr(integer $EnableDependentAddr) 设置<p>web资源-是否启用依赖地址：0-不启用 1-启用(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependentAddr() 获取<p>web资源-依赖地址的后端服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependentAddr(string $DependentAddr) 设置<p>web资源-依赖地址的后端服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWebGwNoAuth() 获取<p>web免鉴权：1-鉴权 2-免鉴权</p>
 * @method void setWebGwNoAuth(integer $WebGwNoAuth) 设置<p>web免鉴权：1-鉴权 2-免鉴权</p>
 * @method string getConnectorGroupType() 获取<p>通道类型</p><p>枚举值：</p><ul><li>vpc： vpc类型</li><li>native： 专线类型</li></ul><p>默认值：native</p>
 * @method void setConnectorGroupType(string $ConnectorGroupType) 设置<p>通道类型</p><p>枚举值：</p><ul><li>vpc： vpc类型</li><li>native： 专线类型</li></ul><p>默认值：native</p>
 * @method string getDomainSuffix() 获取<p>域名后缀</p>
 * @method void setDomainSuffix(string $DomainSuffix) 设置<p>域名后缀</p>
 * @method integer getConnectivityCheckSwitch() 获取<p>连通性检查开关，0-关闭 1-开启，默认1(只支持32位)</p>
 * @method void setConnectivityCheckSwitch(integer $ConnectivityCheckSwitch) 设置<p>连通性检查开关，0-关闭 1-开启，默认1(只支持32位)</p>
 * @method integer getConnectivityCheckInterval() 获取<p>连通性检查测试间隔数值，最小为1，默认1(只支持32位)</p>
 * @method void setConnectivityCheckInterval(integer $ConnectivityCheckInterval) 设置<p>连通性检查测试间隔数值，最小为1，默认1(只支持32位)</p>
 * @method string getConnectivityCheckIntervalUnit() 获取<p>连通性检查测试间隔单位 minutes/hours/days，默认hours</p>
 * @method void setConnectivityCheckIntervalUnit(string $ConnectivityCheckIntervalUnit) 设置<p>连通性检查测试间隔单位 minutes/hours/days，默认hours</p>
 * @method integer getURLAuditState() 获取<p>URL审计开关：0-关闭 1-开启，默认0</p>
 * @method void setURLAuditState(integer $URLAuditState) 设置<p>URL审计开关：0-关闭 1-开启，默认0</p>
 * @method string getURLAuditId() 获取<p>URL审计证书ID列表，多个用分号分隔</p>
 * @method void setURLAuditId(string $URLAuditId) 设置<p>URL审计证书ID列表，多个用分号分隔</p>
 * @method string getURLPath() 获取<p>URL审计路径，多个用分号分隔</p>
 * @method void setURLPath(string $URLPath) 设置<p>URL审计路径，多个用分号分隔</p>
 * @method integer getReachableType() 获取<p>检测方式：0-未检测 1-主动 2-流量</p>
 * @method void setReachableType(integer $ReachableType) 设置<p>检测方式：0-未检测 1-主动 2-流量</p>
 * @method string getAPISecretName() 获取<p>API密钥名称</p>
 * @method void setAPISecretName(string $APISecretName) 设置<p>API密钥名称</p>
 * @method string getAPISecretKey() 获取<p>API密钥Key</p>
 * @method void setAPISecretKey(string $APISecretKey) 设置<p>API密钥Key</p>
 * @method integer getEnableSensitiveRes() 获取<p>是否为敏感资源：0-否 1-是</p>
 * @method void setEnableSensitiveRes(integer $EnableSensitiveRes) 设置<p>是否为敏感资源：0-否 1-是</p>
 * @method integer getEnableIPPolicy() 获取<p>用户接入IP限制开关：0-不启用 1-启用</p>
 * @method void setEnableIPPolicy(integer $EnableIPPolicy) 设置<p>用户接入IP限制开关：0-不启用 1-启用</p>
 * @method integer getIPPolicyAttr() 获取<p>IP分组属性：0-白名单 1-黑名单</p>
 * @method void setIPPolicyAttr(integer $IPPolicyAttr) 设置<p>IP分组属性：0-白名单 1-黑名单</p>
 * @method array getIPPolicyIds() 获取<p>IP分组ID列表</p>
 * @method void setIPPolicyIds(array $IPPolicyIds) 设置<p>IP分组ID列表</p>
 * @method string getIPPolicyNames() 获取<p>IP分组名称（分号分隔）</p>
 * @method void setIPPolicyNames(string $IPPolicyNames) 设置<p>IP分组名称（分号分隔）</p>
 * @method integer getEnableUserAgent() 获取<p>访问浏览器规则开关：0-不启用 1-启用</p>
 * @method void setEnableUserAgent(integer $EnableUserAgent) 设置<p>访问浏览器规则开关：0-不启用 1-启用</p>
 * @method integer getUserAgentAttr() 获取<p>浏览器规则属性：0-白名单 1-黑名单</p>
 * @method void setUserAgentAttr(integer $UserAgentAttr) 设置<p>浏览器规则属性：0-白名单 1-黑名单</p>
 * @method array getUserAgentIds() 获取<p>浏览器规则ID列表</p>
 * @method void setUserAgentIds(array $UserAgentIds) 设置<p>浏览器规则ID列表</p>
 * @method string getUserAgentNames() 获取<p>浏览器规则名称（分号分隔）</p>
 * @method void setUserAgentNames(string $UserAgentNames) 设置<p>浏览器规则名称（分号分隔）</p>
 */
class DescribeBusinessResourceData extends AbstractModel
{
    /**
     * @var integer <p>业务资源id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string <p>业务资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string <p>资源类型:ip,domain,ip_section，对应ip，域名，ip段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @var string <p>业务资源地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceAddress;

    /**
     * @var string <p>业务资源端口 all,1-65535</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServicePort;

    /**
     * @var string <p>业务资源创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>业务资源最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>说明字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer <p>资源模块ID(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaId;

    /**
     * @var array <p>零信任网关id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartGateIds;

    /**
     * @var integer <p>业务资源协议类型,3：所有,2：UDP，1：TCP(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var integer <p>业务资源等级(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Levels;

    /**
     * @var string <p>零信任网关名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartGateNames;

    /**
     * @var integer <p>网关连通性(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DirectConn;

    /**
     * @var integer <p>网关连通性状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectState;

    /**
     * @var string <p>网关连通性信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectInfo;

    /**
     * @var string <p>网关连通性创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectTime;

    /**
     * @var string <p>绑定的连接器组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectorGroupId;

    /**
     * @var string <p>绑定的连接器组的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectorGroupName;

    /**
     * @var string <p>资源连通性可达最后的检测时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReachableTime;

    /**
     * @var integer <p>资源连通性可达状态,0：未检测，1：未连通，2：已连通</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReachableState;

    /**
     * @var integer <p>访问类型:0-NGN 1-web(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessType;

    /**
     * @var string <p>web资源-后端协议</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackendScheme;

    /**
     * @var string <p>web资源-后端路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackendPath;

    /**
     * @var string <p>web资源-前端协议</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrontScheme;

    /**
     * @var string <p>web资源-前端host</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrontHost;

    /**
     * @var integer <p>web资源-前端host(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrontPort;

    /**
     * @var string <p>web资源-前端路径 默认&quot;/&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrontPath;

    /**
     * @var integer <p>web资源-是否禁用外网访问：0-可通过外网访问 1-不能通过外网访问(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisableFront;

    /**
     * @var string <p>web资源-租户自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomDomain;

    /**
     * @var string <p>web资源-自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomHost;

    /**
     * @var integer <p>web资源-Cname状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CnameStatus;

    /**
     * @var integer <p>web资源-关联证书ID(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateId;

    /**
     * @var integer <p>web资源类型：0-应用 1-API(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebGwResourceType;

    /**
     * @var integer <p>web资源-如果选择API类型资源，则需要配置密钥(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $APISecretId;

    /**
     * @var string <p>所属资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaName;

    /**
     * @var string <p>web资源-前端协议是HTTPS类型，需要配置证书</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSLCertId;

    /**
     * @var integer <p>web资源-是否启用依赖地址：0-不启用 1-启用(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableDependentAddr;

    /**
     * @var string <p>web资源-依赖地址的后端服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependentAddr;

    /**
     * @var integer <p>web免鉴权：1-鉴权 2-免鉴权</p>
     */
    public $WebGwNoAuth;

    /**
     * @var string <p>通道类型</p><p>枚举值：</p><ul><li>vpc： vpc类型</li><li>native： 专线类型</li></ul><p>默认值：native</p>
     */
    public $ConnectorGroupType;

    /**
     * @var string <p>域名后缀</p>
     */
    public $DomainSuffix;

    /**
     * @var integer <p>连通性检查开关，0-关闭 1-开启，默认1(只支持32位)</p>
     */
    public $ConnectivityCheckSwitch;

    /**
     * @var integer <p>连通性检查测试间隔数值，最小为1，默认1(只支持32位)</p>
     */
    public $ConnectivityCheckInterval;

    /**
     * @var string <p>连通性检查测试间隔单位 minutes/hours/days，默认hours</p>
     */
    public $ConnectivityCheckIntervalUnit;

    /**
     * @var integer <p>URL审计开关：0-关闭 1-开启，默认0</p>
     */
    public $URLAuditState;

    /**
     * @var string <p>URL审计证书ID列表，多个用分号分隔</p>
     */
    public $URLAuditId;

    /**
     * @var string <p>URL审计路径，多个用分号分隔</p>
     */
    public $URLPath;

    /**
     * @var integer <p>检测方式：0-未检测 1-主动 2-流量</p>
     */
    public $ReachableType;

    /**
     * @var string <p>API密钥名称</p>
     */
    public $APISecretName;

    /**
     * @var string <p>API密钥Key</p>
     */
    public $APISecretKey;

    /**
     * @var integer <p>是否为敏感资源：0-否 1-是</p>
     */
    public $EnableSensitiveRes;

    /**
     * @var integer <p>用户接入IP限制开关：0-不启用 1-启用</p>
     */
    public $EnableIPPolicy;

    /**
     * @var integer <p>IP分组属性：0-白名单 1-黑名单</p>
     */
    public $IPPolicyAttr;

    /**
     * @var array <p>IP分组ID列表</p>
     */
    public $IPPolicyIds;

    /**
     * @var string <p>IP分组名称（分号分隔）</p>
     */
    public $IPPolicyNames;

    /**
     * @var integer <p>访问浏览器规则开关：0-不启用 1-启用</p>
     */
    public $EnableUserAgent;

    /**
     * @var integer <p>浏览器规则属性：0-白名单 1-黑名单</p>
     */
    public $UserAgentAttr;

    /**
     * @var array <p>浏览器规则ID列表</p>
     */
    public $UserAgentIds;

    /**
     * @var string <p>浏览器规则名称（分号分隔）</p>
     */
    public $UserAgentNames;

    /**
     * @param integer $ServiceId <p>业务资源id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName <p>业务资源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceType <p>资源类型:ip,domain,ip_section，对应ip，域名，ip段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceAddress <p>业务资源地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServicePort <p>业务资源端口 all,1-65535</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>业务资源创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>业务资源最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark <p>说明字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AreaId <p>资源模块ID(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SmartGateIds <p>零信任网关id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Protocol <p>业务资源协议类型,3：所有,2：UDP，1：TCP(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Levels <p>业务资源等级(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SmartGateNames <p>零信任网关名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DirectConn <p>网关连通性(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DetectState <p>网关连通性状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetectInfo <p>网关连通性信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetectTime <p>网关连通性创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectorGroupId <p>绑定的连接器组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectorGroupName <p>绑定的连接器组的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReachableTime <p>资源连通性可达最后的检测时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReachableState <p>资源连通性可达状态,0：未检测，1：未连通，2：已连通</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccessType <p>访问类型:0-NGN 1-web(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackendScheme <p>web资源-后端协议</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackendPath <p>web资源-后端路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrontScheme <p>web资源-前端协议</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrontHost <p>web资源-前端host</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FrontPort <p>web资源-前端host(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrontPath <p>web资源-前端路径 默认&quot;/&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DisableFront <p>web资源-是否禁用外网访问：0-可通过外网访问 1-不能通过外网访问(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomDomain <p>web资源-租户自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomHost <p>web资源-自定义host</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CnameStatus <p>web资源-Cname状态(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CertificateId <p>web资源-关联证书ID(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WebGwResourceType <p>web资源类型：0-应用 1-API(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $APISecretId <p>web资源-如果选择API类型资源，则需要配置密钥(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AreaName <p>所属资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SSLCertId <p>web资源-前端协议是HTTPS类型，需要配置证书</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableDependentAddr <p>web资源-是否启用依赖地址：0-不启用 1-启用(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependentAddr <p>web资源-依赖地址的后端服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WebGwNoAuth <p>web免鉴权：1-鉴权 2-免鉴权</p>
     * @param string $ConnectorGroupType <p>通道类型</p><p>枚举值：</p><ul><li>vpc： vpc类型</li><li>native： 专线类型</li></ul><p>默认值：native</p>
     * @param string $DomainSuffix <p>域名后缀</p>
     * @param integer $ConnectivityCheckSwitch <p>连通性检查开关，0-关闭 1-开启，默认1(只支持32位)</p>
     * @param integer $ConnectivityCheckInterval <p>连通性检查测试间隔数值，最小为1，默认1(只支持32位)</p>
     * @param string $ConnectivityCheckIntervalUnit <p>连通性检查测试间隔单位 minutes/hours/days，默认hours</p>
     * @param integer $URLAuditState <p>URL审计开关：0-关闭 1-开启，默认0</p>
     * @param string $URLAuditId <p>URL审计证书ID列表，多个用分号分隔</p>
     * @param string $URLPath <p>URL审计路径，多个用分号分隔</p>
     * @param integer $ReachableType <p>检测方式：0-未检测 1-主动 2-流量</p>
     * @param string $APISecretName <p>API密钥名称</p>
     * @param string $APISecretKey <p>API密钥Key</p>
     * @param integer $EnableSensitiveRes <p>是否为敏感资源：0-否 1-是</p>
     * @param integer $EnableIPPolicy <p>用户接入IP限制开关：0-不启用 1-启用</p>
     * @param integer $IPPolicyAttr <p>IP分组属性：0-白名单 1-黑名单</p>
     * @param array $IPPolicyIds <p>IP分组ID列表</p>
     * @param string $IPPolicyNames <p>IP分组名称（分号分隔）</p>
     * @param integer $EnableUserAgent <p>访问浏览器规则开关：0-不启用 1-启用</p>
     * @param integer $UserAgentAttr <p>浏览器规则属性：0-白名单 1-黑名单</p>
     * @param array $UserAgentIds <p>浏览器规则ID列表</p>
     * @param string $UserAgentNames <p>浏览器规则名称（分号分隔）</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceAddress",$param) and $param["ServiceAddress"] !== null) {
            $this->ServiceAddress = $param["ServiceAddress"];
        }

        if (array_key_exists("ServicePort",$param) and $param["ServicePort"] !== null) {
            $this->ServicePort = $param["ServicePort"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("SmartGateIds",$param) and $param["SmartGateIds"] !== null) {
            $this->SmartGateIds = $param["SmartGateIds"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Levels",$param) and $param["Levels"] !== null) {
            $this->Levels = $param["Levels"];
        }

        if (array_key_exists("SmartGateNames",$param) and $param["SmartGateNames"] !== null) {
            $this->SmartGateNames = $param["SmartGateNames"];
        }

        if (array_key_exists("DirectConn",$param) and $param["DirectConn"] !== null) {
            $this->DirectConn = $param["DirectConn"];
        }

        if (array_key_exists("DetectState",$param) and $param["DetectState"] !== null) {
            $this->DetectState = $param["DetectState"];
        }

        if (array_key_exists("DetectInfo",$param) and $param["DetectInfo"] !== null) {
            $this->DetectInfo = $param["DetectInfo"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("ConnectorGroupId",$param) and $param["ConnectorGroupId"] !== null) {
            $this->ConnectorGroupId = $param["ConnectorGroupId"];
        }

        if (array_key_exists("ConnectorGroupName",$param) and $param["ConnectorGroupName"] !== null) {
            $this->ConnectorGroupName = $param["ConnectorGroupName"];
        }

        if (array_key_exists("ReachableTime",$param) and $param["ReachableTime"] !== null) {
            $this->ReachableTime = $param["ReachableTime"];
        }

        if (array_key_exists("ReachableState",$param) and $param["ReachableState"] !== null) {
            $this->ReachableState = $param["ReachableState"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("BackendScheme",$param) and $param["BackendScheme"] !== null) {
            $this->BackendScheme = $param["BackendScheme"];
        }

        if (array_key_exists("BackendPath",$param) and $param["BackendPath"] !== null) {
            $this->BackendPath = $param["BackendPath"];
        }

        if (array_key_exists("FrontScheme",$param) and $param["FrontScheme"] !== null) {
            $this->FrontScheme = $param["FrontScheme"];
        }

        if (array_key_exists("FrontHost",$param) and $param["FrontHost"] !== null) {
            $this->FrontHost = $param["FrontHost"];
        }

        if (array_key_exists("FrontPort",$param) and $param["FrontPort"] !== null) {
            $this->FrontPort = $param["FrontPort"];
        }

        if (array_key_exists("FrontPath",$param) and $param["FrontPath"] !== null) {
            $this->FrontPath = $param["FrontPath"];
        }

        if (array_key_exists("DisableFront",$param) and $param["DisableFront"] !== null) {
            $this->DisableFront = $param["DisableFront"];
        }

        if (array_key_exists("CustomDomain",$param) and $param["CustomDomain"] !== null) {
            $this->CustomDomain = $param["CustomDomain"];
        }

        if (array_key_exists("CustomHost",$param) and $param["CustomHost"] !== null) {
            $this->CustomHost = $param["CustomHost"];
        }

        if (array_key_exists("CnameStatus",$param) and $param["CnameStatus"] !== null) {
            $this->CnameStatus = $param["CnameStatus"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("WebGwResourceType",$param) and $param["WebGwResourceType"] !== null) {
            $this->WebGwResourceType = $param["WebGwResourceType"];
        }

        if (array_key_exists("APISecretId",$param) and $param["APISecretId"] !== null) {
            $this->APISecretId = $param["APISecretId"];
        }

        if (array_key_exists("AreaName",$param) and $param["AreaName"] !== null) {
            $this->AreaName = $param["AreaName"];
        }

        if (array_key_exists("SSLCertId",$param) and $param["SSLCertId"] !== null) {
            $this->SSLCertId = $param["SSLCertId"];
        }

        if (array_key_exists("EnableDependentAddr",$param) and $param["EnableDependentAddr"] !== null) {
            $this->EnableDependentAddr = $param["EnableDependentAddr"];
        }

        if (array_key_exists("DependentAddr",$param) and $param["DependentAddr"] !== null) {
            $this->DependentAddr = $param["DependentAddr"];
        }

        if (array_key_exists("WebGwNoAuth",$param) and $param["WebGwNoAuth"] !== null) {
            $this->WebGwNoAuth = $param["WebGwNoAuth"];
        }

        if (array_key_exists("ConnectorGroupType",$param) and $param["ConnectorGroupType"] !== null) {
            $this->ConnectorGroupType = $param["ConnectorGroupType"];
        }

        if (array_key_exists("DomainSuffix",$param) and $param["DomainSuffix"] !== null) {
            $this->DomainSuffix = $param["DomainSuffix"];
        }

        if (array_key_exists("ConnectivityCheckSwitch",$param) and $param["ConnectivityCheckSwitch"] !== null) {
            $this->ConnectivityCheckSwitch = $param["ConnectivityCheckSwitch"];
        }

        if (array_key_exists("ConnectivityCheckInterval",$param) and $param["ConnectivityCheckInterval"] !== null) {
            $this->ConnectivityCheckInterval = $param["ConnectivityCheckInterval"];
        }

        if (array_key_exists("ConnectivityCheckIntervalUnit",$param) and $param["ConnectivityCheckIntervalUnit"] !== null) {
            $this->ConnectivityCheckIntervalUnit = $param["ConnectivityCheckIntervalUnit"];
        }

        if (array_key_exists("URLAuditState",$param) and $param["URLAuditState"] !== null) {
            $this->URLAuditState = $param["URLAuditState"];
        }

        if (array_key_exists("URLAuditId",$param) and $param["URLAuditId"] !== null) {
            $this->URLAuditId = $param["URLAuditId"];
        }

        if (array_key_exists("URLPath",$param) and $param["URLPath"] !== null) {
            $this->URLPath = $param["URLPath"];
        }

        if (array_key_exists("ReachableType",$param) and $param["ReachableType"] !== null) {
            $this->ReachableType = $param["ReachableType"];
        }

        if (array_key_exists("APISecretName",$param) and $param["APISecretName"] !== null) {
            $this->APISecretName = $param["APISecretName"];
        }

        if (array_key_exists("APISecretKey",$param) and $param["APISecretKey"] !== null) {
            $this->APISecretKey = $param["APISecretKey"];
        }

        if (array_key_exists("EnableSensitiveRes",$param) and $param["EnableSensitiveRes"] !== null) {
            $this->EnableSensitiveRes = $param["EnableSensitiveRes"];
        }

        if (array_key_exists("EnableIPPolicy",$param) and $param["EnableIPPolicy"] !== null) {
            $this->EnableIPPolicy = $param["EnableIPPolicy"];
        }

        if (array_key_exists("IPPolicyAttr",$param) and $param["IPPolicyAttr"] !== null) {
            $this->IPPolicyAttr = $param["IPPolicyAttr"];
        }

        if (array_key_exists("IPPolicyIds",$param) and $param["IPPolicyIds"] !== null) {
            $this->IPPolicyIds = $param["IPPolicyIds"];
        }

        if (array_key_exists("IPPolicyNames",$param) and $param["IPPolicyNames"] !== null) {
            $this->IPPolicyNames = $param["IPPolicyNames"];
        }

        if (array_key_exists("EnableUserAgent",$param) and $param["EnableUserAgent"] !== null) {
            $this->EnableUserAgent = $param["EnableUserAgent"];
        }

        if (array_key_exists("UserAgentAttr",$param) and $param["UserAgentAttr"] !== null) {
            $this->UserAgentAttr = $param["UserAgentAttr"];
        }

        if (array_key_exists("UserAgentIds",$param) and $param["UserAgentIds"] !== null) {
            $this->UserAgentIds = $param["UserAgentIds"];
        }

        if (array_key_exists("UserAgentNames",$param) and $param["UserAgentNames"] !== null) {
            $this->UserAgentNames = $param["UserAgentNames"];
        }
    }
}

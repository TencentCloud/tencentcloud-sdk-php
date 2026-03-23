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
 * @method string getInstanceID() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceID(string $InstanceID) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelIDs() 获取标签ID数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelIDs(array $LabelIDs) 设置标签ID数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCategoryIDs() 获取目录ID数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryIDs(array $CategoryIDs) 设置目录ID数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetSelect() 获取负载方式，robin random consistentHash
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSelect(string $TargetSelect) 设置负载方式，robin random consistentHash
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargetHosts() 获取目标服务器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetHosts(array $TargetHosts) 设置目标服务器
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpProtocolType() 获取后端协议：http https
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpProtocolType(string $HttpProtocolType) 设置后端协议：http https
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCheckTargetCertsError() 获取证书检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckTargetCertsError(boolean $CheckTargetCertsError) 设置证书检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetPath() 获取目标路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetPath(string $TargetPath) 设置目标路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInvokeLimitConfigStatus() 获取流量控制状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置流量控制状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取流量控制配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置流量控制配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIpWhiteStatus() 获取IP白名单开启状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpWhiteStatus(boolean $IpWhiteStatus) 设置IP白名单开启状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method IpConfig getIpWhiteConfig() 获取IP白名单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpWhiteConfig(IpConfig $IpWhiteConfig) 设置IP白名单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIpBlackStatus() 获取IP黑名单开启状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpBlackStatus(boolean $IpBlackStatus) 设置IP黑名单开启状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method IpConfig getIpBlackConfig() 获取IP黑名单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpBlackConfig(IpConfig $IpBlackConfig) 设置IP黑名单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getID() 获取mcp server ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置mcp server ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取预览地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置预览地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method IDNameVO getApp() 获取应用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApp(IDNameVO $App) 设置应用
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCatalogs() 获取目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogs(array $Catalogs) 设置目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppID() 获取用户appID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(integer $AppID) 设置用户appID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomHttpHost() 获取自定义host
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomHttpHost(string $CustomHttpHost) 设置自定义host
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpHostType() 获取 Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpHostType(string $HttpHostType) 设置 Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMode() 获取mcp server模式
 * @method void setMode(string $Mode) 设置mcp server模式
 * @method string getMcpVersion() 获取mcp version
 * @method void setMcpVersion(string $McpVersion) 设置mcp version
 * @method array getWrapServices() 获取封装模式下绑定的服务ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWrapServices(array $WrapServices) 设置封装模式下绑定的服务ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getToolNum() 获取工具数量
 * @method void setToolNum(integer $ToolNum) 设置工具数量
 * @method array getMcpSecurityRulesVO() 获取安全规则集响应
 * @method void setMcpSecurityRulesVO(array $McpSecurityRulesVO) 设置安全规则集响应
 * @method array getToolConfigs() 获取真实工具级别配置，实时拉取了tool/list做渲染的，如果tool/list不通，就拉不到。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolConfigs(array $ToolConfigs) 设置真实工具级别配置，实时拉取了tool/list做渲染的，如果tool/list不通，就拉不到。
注意：此字段可能返回 null，表示取不到有效值。
 * @method McpUrlObj getUrlObj() 获取访问URL
 * @method void setUrlObj(McpUrlObj $UrlObj) 设置访问URL
 * @method string getToolMessage() 获取后端mcp服务是否正常
 * @method void setToolMessage(string $ToolMessage) 设置后端mcp服务是否正常
 * @method array getTools() 获取后端mcp服务的工具列表
 * @method void setTools(array $Tools) 设置后端mcp服务的工具列表
 * @method string getWrapPaasID() 获取封装的API分组ID
 * @method void setWrapPaasID(string $WrapPaasID) 设置封装的API分组ID
 * @method integer getRelateAgentAppNum() 获取关联的agentApp数量
 * @method void setRelateAgentAppNum(integer $RelateAgentAppNum) 设置关联的agentApp数量
 * @method array getPluginConfigs() 获取插件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginConfigs(array $PluginConfigs) 设置插件配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeMcpServerResponseVO extends AbstractModel
{
    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceID;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 标签ID数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelIDs;

    /**
     * @var array 目录ID数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryIDs;

    /**
     * @var string 负载方式，robin random consistentHash
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSelect;

    /**
     * @var array 目标服务器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetHosts;

    /**
     * @var string 后端协议：http https
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpProtocolType;

    /**
     * @var boolean 证书检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckTargetCertsError;

    /**
     * @var string 目标路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetPath;

    /**
     * @var boolean 流量控制状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO 流量控制配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvokeLimitConfig;

    /**
     * @var boolean IP白名单开启状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpWhiteStatus;

    /**
     * @var IpConfig IP白名单配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpWhiteConfig;

    /**
     * @var boolean IP黑名单开启状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpBlackStatus;

    /**
     * @var IpConfig IP黑名单配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpBlackConfig;

    /**
     * @var string mcp server ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 预览地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var IDNameVO 应用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $App;

    /**
     * @var array 目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalogs;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var integer 用户appID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 自定义host
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomHttpHost;

    /**
     * @var string  Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpHostType;

    /**
     * @var integer 请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var string mcp server模式
     */
    public $Mode;

    /**
     * @var string mcp version
     */
    public $McpVersion;

    /**
     * @var array 封装模式下绑定的服务ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WrapServices;

    /**
     * @var integer 工具数量
     */
    public $ToolNum;

    /**
     * @var array 安全规则集响应
     */
    public $McpSecurityRulesVO;

    /**
     * @var array 真实工具级别配置，实时拉取了tool/list做渲染的，如果tool/list不通，就拉不到。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolConfigs;

    /**
     * @var McpUrlObj 访问URL
     */
    public $UrlObj;

    /**
     * @var string 后端mcp服务是否正常
     */
    public $ToolMessage;

    /**
     * @var array 后端mcp服务的工具列表
     */
    public $Tools;

    /**
     * @var string 封装的API分组ID
     */
    public $WrapPaasID;

    /**
     * @var integer 关联的agentApp数量
     */
    public $RelateAgentAppNum;

    /**
     * @var array 插件配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginConfigs;

    /**
     * @param string $InstanceID 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelIDs 标签ID数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CategoryIDs 目录ID数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetSelect 负载方式，robin random consistentHash
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TargetHosts 目标服务器
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpProtocolType 后端协议：http https
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CheckTargetCertsError 证书检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetPath 目标路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InvokeLimitConfigStatus 流量控制状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param InvokeLimitConfigDTO $InvokeLimitConfig 流量控制配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IpWhiteStatus IP白名单开启状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param IpConfig $IpWhiteConfig IP白名单配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IpBlackStatus IP黑名单开启状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param IpConfig $IpBlackConfig IP黑名单配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ID mcp server ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 预览地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param IDNameVO $App 应用
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Catalogs 目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppID 用户appID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomHttpHost 自定义host
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpHostType  Http 请求host类型 useRequestHost 保持源请求host targetHost 修正为源站host  customHost 自定义host
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout 请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mode mcp server模式
     * @param string $McpVersion mcp version
     * @param array $WrapServices 封装模式下绑定的服务ID列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ToolNum 工具数量
     * @param array $McpSecurityRulesVO 安全规则集响应
     * @param array $ToolConfigs 真实工具级别配置，实时拉取了tool/list做渲染的，如果tool/list不通，就拉不到。
注意：此字段可能返回 null，表示取不到有效值。
     * @param McpUrlObj $UrlObj 访问URL
     * @param string $ToolMessage 后端mcp服务是否正常
     * @param array $Tools 后端mcp服务的工具列表
     * @param string $WrapPaasID 封装的API分组ID
     * @param integer $RelateAgentAppNum 关联的agentApp数量
     * @param array $PluginConfigs 插件配置
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
    }
}

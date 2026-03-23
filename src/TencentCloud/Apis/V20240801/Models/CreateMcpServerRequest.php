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
 * CreateMcpServer请求参数结构体
 *
 * @method string getMode() 获取模式：proxy代理模式； wrap封装模式；
 * @method void setMode(string $Mode) 设置模式：proxy代理模式； wrap封装模式；
 * @method string getMcpVersion() 获取版本号：2024-11-05 2025-03-26
 * @method void setMcpVersion(string $McpVersion) 设置版本号：2024-11-05 2025-03-26
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method array getWrapServices() 获取封装服务列表
 * @method void setWrapServices(array $WrapServices) 设置封装服务列表
 * @method string getTargetSelect() 获取负载方式，robin random consistentHash
 * @method void setTargetSelect(string $TargetSelect) 设置负载方式，robin random consistentHash
 * @method array getTargetHosts() 获取目标服务器
 * @method void setTargetHosts(array $TargetHosts) 设置目标服务器
 * @method string getHttpProtocolType() 获取后端协议：http https
 * @method void setHttpProtocolType(string $HttpProtocolType) 设置后端协议：http https
 * @method boolean getCheckTargetCertsError() 获取证书检查
 * @method void setCheckTargetCertsError(boolean $CheckTargetCertsError) 设置证书检查
 * @method string getTargetPath() 获取目标路径
 * @method void setTargetPath(string $TargetPath) 设置目标路径
 * @method boolean getInvokeLimitConfigStatus() 获取流量控制开启状态
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置流量控制开启状态
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取流量控制配置
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置流量控制配置
 * @method boolean getIpWhiteStatus() 获取IP白名单开启状态
 * @method void setIpWhiteStatus(boolean $IpWhiteStatus) 设置IP白名单开启状态
 * @method IpConfig getIpWhiteConfig() 获取IP白名单配置
 * @method void setIpWhiteConfig(IpConfig $IpWhiteConfig) 设置IP白名单配置
 * @method boolean getIpBlackStatus() 获取IP黑名单开启状态
 * @method void setIpBlackStatus(boolean $IpBlackStatus) 设置IP黑名单开启状态
 * @method IpConfig getIpBlackConfig() 获取IP黑名单配置
 * @method void setIpBlackConfig(IpConfig $IpBlackConfig) 设置IP黑名单配置
 * @method string getCustomHttpHost() 获取自定义host
 * @method void setCustomHttpHost(string $CustomHttpHost) 设置自定义host
 * @method string getHttpHostType() 获取Http 请求host类型：useRequestHost 保持源请求；host targetHost 修正为源站host；  customHost 自定义host
 * @method void setHttpHostType(string $HttpHostType) 设置Http 请求host类型：useRequestHost 保持源请求；host targetHost 修正为源站host；  customHost 自定义host
 * @method integer getTimeout() 获取请求的超时时间
 * @method void setTimeout(integer $Timeout) 设置请求的超时时间
 * @method array getMcpSecurityRules() 获取安全规则集
 * @method void setMcpSecurityRules(array $McpSecurityRules) 设置安全规则集
 * @method array getToolConfigs() 获取工具集配置（openapi时或许用的是）
 * @method void setToolConfigs(array $ToolConfigs) 设置工具集配置（openapi时或许用的是）
 * @method string getWrapPaasID() 获取封装的API分组ID
 * @method void setWrapPaasID(string $WrapPaasID) 设置封装的API分组ID
 * @method array getPluginConfigs() 获取插件配置
 * @method void setPluginConfigs(array $PluginConfigs) 设置插件配置
 */
class CreateMcpServerRequest extends AbstractModel
{
    /**
     * @var string 模式：proxy代理模式； wrap封装模式；
     */
    public $Mode;

    /**
     * @var string 版本号：2024-11-05 2025-03-26
     */
    public $McpVersion;

    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var array 封装服务列表
     */
    public $WrapServices;

    /**
     * @var string 负载方式，robin random consistentHash
     */
    public $TargetSelect;

    /**
     * @var array 目标服务器
     */
    public $TargetHosts;

    /**
     * @var string 后端协议：http https
     */
    public $HttpProtocolType;

    /**
     * @var boolean 证书检查
     */
    public $CheckTargetCertsError;

    /**
     * @var string 目标路径
     */
    public $TargetPath;

    /**
     * @var boolean 流量控制开启状态
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO 流量控制配置
     */
    public $InvokeLimitConfig;

    /**
     * @var boolean IP白名单开启状态
     */
    public $IpWhiteStatus;

    /**
     * @var IpConfig IP白名单配置
     */
    public $IpWhiteConfig;

    /**
     * @var boolean IP黑名单开启状态
     */
    public $IpBlackStatus;

    /**
     * @var IpConfig IP黑名单配置
     */
    public $IpBlackConfig;

    /**
     * @var string 自定义host
     */
    public $CustomHttpHost;

    /**
     * @var string Http 请求host类型：useRequestHost 保持源请求；host targetHost 修正为源站host；  customHost 自定义host
     */
    public $HttpHostType;

    /**
     * @var integer 请求的超时时间
     */
    public $Timeout;

    /**
     * @var array 安全规则集
     */
    public $McpSecurityRules;

    /**
     * @var array 工具集配置（openapi时或许用的是）
     */
    public $ToolConfigs;

    /**
     * @var string 封装的API分组ID
     */
    public $WrapPaasID;

    /**
     * @var array 插件配置
     */
    public $PluginConfigs;

    /**
     * @param string $Mode 模式：proxy代理模式； wrap封装模式；
     * @param string $McpVersion 版本号：2024-11-05 2025-03-26
     * @param string $InstanceID 实例ID
     * @param string $Name 名称
     * @param string $Description 描述
     * @param array $WrapServices 封装服务列表
     * @param string $TargetSelect 负载方式，robin random consistentHash
     * @param array $TargetHosts 目标服务器
     * @param string $HttpProtocolType 后端协议：http https
     * @param boolean $CheckTargetCertsError 证书检查
     * @param string $TargetPath 目标路径
     * @param boolean $InvokeLimitConfigStatus 流量控制开启状态
     * @param InvokeLimitConfigDTO $InvokeLimitConfig 流量控制配置
     * @param boolean $IpWhiteStatus IP白名单开启状态
     * @param IpConfig $IpWhiteConfig IP白名单配置
     * @param boolean $IpBlackStatus IP黑名单开启状态
     * @param IpConfig $IpBlackConfig IP黑名单配置
     * @param string $CustomHttpHost 自定义host
     * @param string $HttpHostType Http 请求host类型：useRequestHost 保持源请求；host targetHost 修正为源站host；  customHost 自定义host
     * @param integer $Timeout 请求的超时时间
     * @param array $McpSecurityRules 安全规则集
     * @param array $ToolConfigs 工具集配置（openapi时或许用的是）
     * @param string $WrapPaasID 封装的API分组ID
     * @param array $PluginConfigs 插件配置
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("McpVersion",$param) and $param["McpVersion"] !== null) {
            $this->McpVersion = $param["McpVersion"];
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

        if (array_key_exists("WrapServices",$param) and $param["WrapServices"] !== null) {
            $this->WrapServices = $param["WrapServices"];
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

        if (array_key_exists("CustomHttpHost",$param) and $param["CustomHttpHost"] !== null) {
            $this->CustomHttpHost = $param["CustomHttpHost"];
        }

        if (array_key_exists("HttpHostType",$param) and $param["HttpHostType"] !== null) {
            $this->HttpHostType = $param["HttpHostType"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("McpSecurityRules",$param) and $param["McpSecurityRules"] !== null) {
            $this->McpSecurityRules = [];
            foreach ($param["McpSecurityRules"] as $key => $value){
                $obj = new McpSecurityRule();
                $obj->deserialize($value);
                array_push($this->McpSecurityRules, $obj);
            }
        }

        if (array_key_exists("ToolConfigs",$param) and $param["ToolConfigs"] !== null) {
            $this->ToolConfigs = [];
            foreach ($param["ToolConfigs"] as $key => $value){
                $obj = new ToolConfigDTO();
                $obj->deserialize($value);
                array_push($this->ToolConfigs, $obj);
            }
        }

        if (array_key_exists("WrapPaasID",$param) and $param["WrapPaasID"] !== null) {
            $this->WrapPaasID = $param["WrapPaasID"];
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

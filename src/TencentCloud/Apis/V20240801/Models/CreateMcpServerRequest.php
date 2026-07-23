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
 * @method string getMode() 获取<p>模式：proxy代理模式； wrap封装模式；</p>
 * @method void setMode(string $Mode) 设置<p>模式：proxy代理模式； wrap封装模式；</p>
 * @method string getMcpVersion() 获取<p>版本号：2024-11-05 2025-03-26</p>
 * @method void setMcpVersion(string $McpVersion) 设置<p>版本号：2024-11-05 2025-03-26</p>
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method array getWrapServices() 获取<p>封装服务列表</p>
 * @method void setWrapServices(array $WrapServices) 设置<p>封装服务列表</p>
 * @method string getTargetSelect() 获取<p>负载方式，robin random consistentHash</p>
 * @method void setTargetSelect(string $TargetSelect) 设置<p>负载方式，robin random consistentHash</p>
 * @method array getTargetHosts() 获取<p>目标服务器</p>
 * @method void setTargetHosts(array $TargetHosts) 设置<p>目标服务器</p>
 * @method string getHttpProtocolType() 获取<p>后端协议：http https</p>
 * @method void setHttpProtocolType(string $HttpProtocolType) 设置<p>后端协议：http https</p>
 * @method boolean getCheckTargetCertsError() 获取<p>证书检查</p>
 * @method void setCheckTargetCertsError(boolean $CheckTargetCertsError) 设置<p>证书检查</p>
 * @method string getTargetPath() 获取<p>目标路径</p>
 * @method void setTargetPath(string $TargetPath) 设置<p>目标路径</p>
 * @method boolean getInvokeLimitConfigStatus() 获取<p>流量控制开启状态</p>
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置<p>流量控制开启状态</p>
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取<p>流量控制配置</p>
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置<p>流量控制配置</p>
 * @method boolean getIpWhiteStatus() 获取<p>IP白名单开启状态</p>
 * @method void setIpWhiteStatus(boolean $IpWhiteStatus) 设置<p>IP白名单开启状态</p>
 * @method IpConfig getIpWhiteConfig() 获取<p>IP白名单配置</p>
 * @method void setIpWhiteConfig(IpConfig $IpWhiteConfig) 设置<p>IP白名单配置</p>
 * @method boolean getIpBlackStatus() 获取<p>IP黑名单开启状态</p>
 * @method void setIpBlackStatus(boolean $IpBlackStatus) 设置<p>IP黑名单开启状态</p>
 * @method IpConfig getIpBlackConfig() 获取<p>IP黑名单配置</p>
 * @method void setIpBlackConfig(IpConfig $IpBlackConfig) 设置<p>IP黑名单配置</p>
 * @method string getCustomHttpHost() 获取<p>自定义host</p>
 * @method void setCustomHttpHost(string $CustomHttpHost) 设置<p>自定义host</p>
 * @method string getHttpHostType() 获取<p>Http 请求host类型：useRequestHost 保持源请求；host targetHost 修正为源站host；  customHost 自定义host</p>
 * @method void setHttpHostType(string $HttpHostType) 设置<p>Http 请求host类型：useRequestHost 保持源请求；host targetHost 修正为源站host；  customHost 自定义host</p>
 * @method integer getTimeout() 获取<p>请求的超时时间</p>
 * @method void setTimeout(integer $Timeout) 设置<p>请求的超时时间</p>
 * @method array getMcpSecurityRules() 获取<p>安全规则集</p>
 * @method void setMcpSecurityRules(array $McpSecurityRules) 设置<p>安全规则集</p>
 * @method array getToolConfigs() 获取<p>工具集配置（openapi时或许用的是）</p>
 * @method void setToolConfigs(array $ToolConfigs) 设置<p>工具集配置（openapi时或许用的是）</p>
 * @method string getWrapPaasID() 获取<p>封装的API分组ID</p>
 * @method void setWrapPaasID(string $WrapPaasID) 设置<p>封装的API分组ID</p>
 * @method array getPluginConfigs() 获取<p>插件配置</p>
 * @method void setPluginConfigs(array $PluginConfigs) 设置<p>插件配置</p>
 * @method boolean getIgnoreHealthCheck() 获取<p>是否忽略健康检查</p>
 * @method void setIgnoreHealthCheck(boolean $IgnoreHealthCheck) 设置<p>是否忽略健康检查</p>
 */
class CreateMcpServerRequest extends AbstractModel
{
    /**
     * @var string <p>模式：proxy代理模式； wrap封装模式；</p>
     */
    public $Mode;

    /**
     * @var string <p>版本号：2024-11-05 2025-03-26</p>
     */
    public $McpVersion;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var array <p>封装服务列表</p>
     */
    public $WrapServices;

    /**
     * @var string <p>负载方式，robin random consistentHash</p>
     */
    public $TargetSelect;

    /**
     * @var array <p>目标服务器</p>
     */
    public $TargetHosts;

    /**
     * @var string <p>后端协议：http https</p>
     */
    public $HttpProtocolType;

    /**
     * @var boolean <p>证书检查</p>
     */
    public $CheckTargetCertsError;

    /**
     * @var string <p>目标路径</p>
     */
    public $TargetPath;

    /**
     * @var boolean <p>流量控制开启状态</p>
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO <p>流量控制配置</p>
     */
    public $InvokeLimitConfig;

    /**
     * @var boolean <p>IP白名单开启状态</p>
     */
    public $IpWhiteStatus;

    /**
     * @var IpConfig <p>IP白名单配置</p>
     */
    public $IpWhiteConfig;

    /**
     * @var boolean <p>IP黑名单开启状态</p>
     */
    public $IpBlackStatus;

    /**
     * @var IpConfig <p>IP黑名单配置</p>
     */
    public $IpBlackConfig;

    /**
     * @var string <p>自定义host</p>
     */
    public $CustomHttpHost;

    /**
     * @var string <p>Http 请求host类型：useRequestHost 保持源请求；host targetHost 修正为源站host；  customHost 自定义host</p>
     */
    public $HttpHostType;

    /**
     * @var integer <p>请求的超时时间</p>
     */
    public $Timeout;

    /**
     * @var array <p>安全规则集</p>
     */
    public $McpSecurityRules;

    /**
     * @var array <p>工具集配置（openapi时或许用的是）</p>
     */
    public $ToolConfigs;

    /**
     * @var string <p>封装的API分组ID</p>
     */
    public $WrapPaasID;

    /**
     * @var array <p>插件配置</p>
     */
    public $PluginConfigs;

    /**
     * @var boolean <p>是否忽略健康检查</p>
     */
    public $IgnoreHealthCheck;

    /**
     * @param string $Mode <p>模式：proxy代理模式； wrap封装模式；</p>
     * @param string $McpVersion <p>版本号：2024-11-05 2025-03-26</p>
     * @param string $InstanceID <p>实例ID</p>
     * @param string $Name <p>名称</p>
     * @param string $Description <p>描述</p>
     * @param array $WrapServices <p>封装服务列表</p>
     * @param string $TargetSelect <p>负载方式，robin random consistentHash</p>
     * @param array $TargetHosts <p>目标服务器</p>
     * @param string $HttpProtocolType <p>后端协议：http https</p>
     * @param boolean $CheckTargetCertsError <p>证书检查</p>
     * @param string $TargetPath <p>目标路径</p>
     * @param boolean $InvokeLimitConfigStatus <p>流量控制开启状态</p>
     * @param InvokeLimitConfigDTO $InvokeLimitConfig <p>流量控制配置</p>
     * @param boolean $IpWhiteStatus <p>IP白名单开启状态</p>
     * @param IpConfig $IpWhiteConfig <p>IP白名单配置</p>
     * @param boolean $IpBlackStatus <p>IP黑名单开启状态</p>
     * @param IpConfig $IpBlackConfig <p>IP黑名单配置</p>
     * @param string $CustomHttpHost <p>自定义host</p>
     * @param string $HttpHostType <p>Http 请求host类型：useRequestHost 保持源请求；host targetHost 修正为源站host；  customHost 自定义host</p>
     * @param integer $Timeout <p>请求的超时时间</p>
     * @param array $McpSecurityRules <p>安全规则集</p>
     * @param array $ToolConfigs <p>工具集配置（openapi时或许用的是）</p>
     * @param string $WrapPaasID <p>封装的API分组ID</p>
     * @param array $PluginConfigs <p>插件配置</p>
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

        if (array_key_exists("IgnoreHealthCheck",$param) and $param["IgnoreHealthCheck"] !== null) {
            $this->IgnoreHealthCheck = $param["IgnoreHealthCheck"];
        }
    }
}

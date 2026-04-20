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
 * CreateModelService请求参数结构体
 *
 * @method string getInstanceID() 获取<p>实例</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例</p>
 * @method string getName() 获取<p>模型服务名称</p>
 * @method void setName(string $Name) 设置<p>模型服务名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getPubPath() 获取<p>访问路径</p>
 * @method void setPubPath(string $PubPath) 设置<p>访问路径</p>
 * @method array getTargetModels() 获取<p>模型ID列表</p>
 * @method void setTargetModels(array $TargetModels) 设置<p>模型ID列表</p>
 * @method string getPathMatchType() 获取<p>路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;</p>
 * @method void setPathMatchType(string $PathMatchType) 设置<p>路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;</p>
 * @method boolean getInvokeLimitConfigStatus() 获取<p>是否开启限流</p>
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置<p>是否开启限流</p>
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取<p>限流配置</p>
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置<p>限流配置</p>
 * @method boolean getTokenLimitStatus() 获取<p>是否开启token控制</p>
 * @method void setTokenLimitStatus(boolean $TokenLimitStatus) 设置<p>是否开启token控制</p>
 * @method TokenLimitConfigDTO getTokenLimitConfig() 获取<p>token控制</p>
 * @method void setTokenLimitConfig(TokenLimitConfigDTO $TokenLimitConfig) 设置<p>token控制</p>
 * @method boolean getTmsStatus() 获取<p>是否开启内容安全</p>
 * @method void setTmsStatus(boolean $TmsStatus) 设置<p>是否开启内容安全</p>
 * @method TmsConfigDTO getTmsConfig() 获取<p>内容安全配置</p>
 * @method void setTmsConfig(TmsConfigDTO $TmsConfig) 设置<p>内容安全配置</p>
 * @method boolean getIpWhiteStatus() 获取<p>是否开启IP白名单</p>
 * @method void setIpWhiteStatus(boolean $IpWhiteStatus) 设置<p>是否开启IP白名单</p>
 * @method array getIpWhiteList() 获取<p>IP白名单</p>
 * @method void setIpWhiteList(array $IpWhiteList) 设置<p>IP白名单</p>
 * @method array getIpBlackList() 获取<p>IP黑名单</p>
 * @method void setIpBlackList(array $IpBlackList) 设置<p>IP黑名单</p>
 * @method array getPluginConfigs() 获取<p>插件配置</p>
 * @method void setPluginConfigs(array $PluginConfigs) 设置<p>插件配置</p>
 * @method integer getTimeout() 获取<p>超时配置，秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时配置，秒</p>
 * @method boolean getPromptModerateStatus() 获取<p>是否开启提示词安全检测</p>
 * @method void setPromptModerateStatus(boolean $PromptModerateStatus) 设置<p>是否开启提示词安全检测</p>
 * @method PromptModerateConfigDTO getPromptModerateConfig() 获取<p>提示词安全检测配置</p>
 * @method void setPromptModerateConfig(PromptModerateConfigDTO $PromptModerateConfig) 设置<p>提示词安全检测配置</p>
 * @method boolean getSensitiveDataCheckStatus() 获取<p>是否开启敏感数据检测</p>
 * @method void setSensitiveDataCheckStatus(boolean $SensitiveDataCheckStatus) 设置<p>是否开启敏感数据检测</p>
 * @method SensitiveDataCheckConfigDTO getSensitiveDataCheckConfig() 获取<p>敏感数据检测配置</p>
 * @method void setSensitiveDataCheckConfig(SensitiveDataCheckConfigDTO $SensitiveDataCheckConfig) 设置<p>敏感数据检测配置</p>
 */
class CreateModelServiceRequest extends AbstractModel
{
    /**
     * @var string <p>实例</p>
     */
    public $InstanceID;

    /**
     * @var string <p>模型服务名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>访问路径</p>
     */
    public $PubPath;

    /**
     * @var array <p>模型ID列表</p>
     */
    public $TargetModels;

    /**
     * @var string <p>路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;</p>
     */
    public $PathMatchType;

    /**
     * @var boolean <p>是否开启限流</p>
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO <p>限流配置</p>
     */
    public $InvokeLimitConfig;

    /**
     * @var boolean <p>是否开启token控制</p>
     */
    public $TokenLimitStatus;

    /**
     * @var TokenLimitConfigDTO <p>token控制</p>
     */
    public $TokenLimitConfig;

    /**
     * @var boolean <p>是否开启内容安全</p>
     */
    public $TmsStatus;

    /**
     * @var TmsConfigDTO <p>内容安全配置</p>
     */
    public $TmsConfig;

    /**
     * @var boolean <p>是否开启IP白名单</p>
     */
    public $IpWhiteStatus;

    /**
     * @var array <p>IP白名单</p>
     */
    public $IpWhiteList;

    /**
     * @var array <p>IP黑名单</p>
     */
    public $IpBlackList;

    /**
     * @var array <p>插件配置</p>
     */
    public $PluginConfigs;

    /**
     * @var integer <p>超时配置，秒</p>
     */
    public $Timeout;

    /**
     * @var boolean <p>是否开启提示词安全检测</p>
     */
    public $PromptModerateStatus;

    /**
     * @var PromptModerateConfigDTO <p>提示词安全检测配置</p>
     */
    public $PromptModerateConfig;

    /**
     * @var boolean <p>是否开启敏感数据检测</p>
     */
    public $SensitiveDataCheckStatus;

    /**
     * @var SensitiveDataCheckConfigDTO <p>敏感数据检测配置</p>
     */
    public $SensitiveDataCheckConfig;

    /**
     * @param string $InstanceID <p>实例</p>
     * @param string $Name <p>模型服务名称</p>
     * @param string $Description <p>描述</p>
     * @param string $PubPath <p>访问路径</p>
     * @param array $TargetModels <p>模型ID列表</p>
     * @param string $PathMatchType <p>路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;</p>
     * @param boolean $InvokeLimitConfigStatus <p>是否开启限流</p>
     * @param InvokeLimitConfigDTO $InvokeLimitConfig <p>限流配置</p>
     * @param boolean $TokenLimitStatus <p>是否开启token控制</p>
     * @param TokenLimitConfigDTO $TokenLimitConfig <p>token控制</p>
     * @param boolean $TmsStatus <p>是否开启内容安全</p>
     * @param TmsConfigDTO $TmsConfig <p>内容安全配置</p>
     * @param boolean $IpWhiteStatus <p>是否开启IP白名单</p>
     * @param array $IpWhiteList <p>IP白名单</p>
     * @param array $IpBlackList <p>IP黑名单</p>
     * @param array $PluginConfigs <p>插件配置</p>
     * @param integer $Timeout <p>超时配置，秒</p>
     * @param boolean $PromptModerateStatus <p>是否开启提示词安全检测</p>
     * @param PromptModerateConfigDTO $PromptModerateConfig <p>提示词安全检测配置</p>
     * @param boolean $SensitiveDataCheckStatus <p>是否开启敏感数据检测</p>
     * @param SensitiveDataCheckConfigDTO $SensitiveDataCheckConfig <p>敏感数据检测配置</p>
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

        if (array_key_exists("PubPath",$param) and $param["PubPath"] !== null) {
            $this->PubPath = $param["PubPath"];
        }

        if (array_key_exists("TargetModels",$param) and $param["TargetModels"] !== null) {
            $this->TargetModels = [];
            foreach ($param["TargetModels"] as $key => $value){
                $obj = new TargetModelDTO();
                $obj->deserialize($value);
                array_push($this->TargetModels, $obj);
            }
        }

        if (array_key_exists("PathMatchType",$param) and $param["PathMatchType"] !== null) {
            $this->PathMatchType = $param["PathMatchType"];
        }

        if (array_key_exists("InvokeLimitConfigStatus",$param) and $param["InvokeLimitConfigStatus"] !== null) {
            $this->InvokeLimitConfigStatus = $param["InvokeLimitConfigStatus"];
        }

        if (array_key_exists("InvokeLimitConfig",$param) and $param["InvokeLimitConfig"] !== null) {
            $this->InvokeLimitConfig = new InvokeLimitConfigDTO();
            $this->InvokeLimitConfig->deserialize($param["InvokeLimitConfig"]);
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

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("PromptModerateStatus",$param) and $param["PromptModerateStatus"] !== null) {
            $this->PromptModerateStatus = $param["PromptModerateStatus"];
        }

        if (array_key_exists("PromptModerateConfig",$param) and $param["PromptModerateConfig"] !== null) {
            $this->PromptModerateConfig = new PromptModerateConfigDTO();
            $this->PromptModerateConfig->deserialize($param["PromptModerateConfig"]);
        }

        if (array_key_exists("SensitiveDataCheckStatus",$param) and $param["SensitiveDataCheckStatus"] !== null) {
            $this->SensitiveDataCheckStatus = $param["SensitiveDataCheckStatus"];
        }

        if (array_key_exists("SensitiveDataCheckConfig",$param) and $param["SensitiveDataCheckConfig"] !== null) {
            $this->SensitiveDataCheckConfig = new SensitiveDataCheckConfigDTO();
            $this->SensitiveDataCheckConfig->deserialize($param["SensitiveDataCheckConfig"]);
        }
    }
}

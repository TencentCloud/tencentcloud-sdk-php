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
 * @method string getInstanceID() 获取实例
 * @method void setInstanceID(string $InstanceID) 设置实例
 * @method string getName() 获取模型服务名称
 * @method void setName(string $Name) 设置模型服务名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getPubPath() 获取访问路径
 * @method void setPubPath(string $PubPath) 设置访问路径
 * @method array getTargetModels() 获取模型ID列表
 * @method void setTargetModels(array $TargetModels) 设置模型ID列表
 * @method string getPathMatchType() 获取路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;
 * @method void setPathMatchType(string $PathMatchType) 设置路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;
 * @method boolean getInvokeLimitConfigStatus() 获取是否开启限流
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置是否开启限流
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取限流配置
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置限流配置
 * @method boolean getTokenLimitStatus() 获取是否开启token控制
 * @method void setTokenLimitStatus(boolean $TokenLimitStatus) 设置是否开启token控制
 * @method TokenLimitConfigDTO getTokenLimitConfig() 获取token控制
 * @method void setTokenLimitConfig(TokenLimitConfigDTO $TokenLimitConfig) 设置token控制
 * @method boolean getTmsStatus() 获取是否开启内容安全
 * @method void setTmsStatus(boolean $TmsStatus) 设置是否开启内容安全
 * @method TmsConfigDTO getTmsConfig() 获取内容安全配置
 * @method void setTmsConfig(TmsConfigDTO $TmsConfig) 设置内容安全配置
 * @method boolean getIpWhiteStatus() 获取是否开启IP白名单
 * @method void setIpWhiteStatus(boolean $IpWhiteStatus) 设置是否开启IP白名单
 * @method array getIpWhiteList() 获取IP白名单
 * @method void setIpWhiteList(array $IpWhiteList) 设置IP白名单
 * @method array getIpBlackList() 获取IP黑名单
 * @method void setIpBlackList(array $IpBlackList) 设置IP黑名单
 * @method array getPluginConfigs() 获取插件配置
 * @method void setPluginConfigs(array $PluginConfigs) 设置插件配置
 * @method integer getTimeout() 获取超时配置，秒
 * @method void setTimeout(integer $Timeout) 设置超时配置，秒
 */
class CreateModelServiceRequest extends AbstractModel
{
    /**
     * @var string 实例
     */
    public $InstanceID;

    /**
     * @var string 模型服务名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 访问路径
     */
    public $PubPath;

    /**
     * @var array 模型ID列表
     */
    public $TargetModels;

    /**
     * @var string 路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;
     */
    public $PathMatchType;

    /**
     * @var boolean 是否开启限流
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO 限流配置
     */
    public $InvokeLimitConfig;

    /**
     * @var boolean 是否开启token控制
     */
    public $TokenLimitStatus;

    /**
     * @var TokenLimitConfigDTO token控制
     */
    public $TokenLimitConfig;

    /**
     * @var boolean 是否开启内容安全
     */
    public $TmsStatus;

    /**
     * @var TmsConfigDTO 内容安全配置
     */
    public $TmsConfig;

    /**
     * @var boolean 是否开启IP白名单
     */
    public $IpWhiteStatus;

    /**
     * @var array IP白名单
     */
    public $IpWhiteList;

    /**
     * @var array IP黑名单
     */
    public $IpBlackList;

    /**
     * @var array 插件配置
     */
    public $PluginConfigs;

    /**
     * @var integer 超时配置，秒
     */
    public $Timeout;

    /**
     * @param string $InstanceID 实例
     * @param string $Name 模型服务名称
     * @param string $Description 描述
     * @param string $PubPath 访问路径
     * @param array $TargetModels 模型ID列表
     * @param string $PathMatchType 路径匹配类型: prefix 前缀匹配(不送默认); absolute 绝对匹配; regex正则匹配;
     * @param boolean $InvokeLimitConfigStatus 是否开启限流
     * @param InvokeLimitConfigDTO $InvokeLimitConfig 限流配置
     * @param boolean $TokenLimitStatus 是否开启token控制
     * @param TokenLimitConfigDTO $TokenLimitConfig token控制
     * @param boolean $TmsStatus 是否开启内容安全
     * @param TmsConfigDTO $TmsConfig 内容安全配置
     * @param boolean $IpWhiteStatus 是否开启IP白名单
     * @param array $IpWhiteList IP白名单
     * @param array $IpBlackList IP黑名单
     * @param array $PluginConfigs 插件配置
     * @param integer $Timeout 超时配置，秒
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
    }
}

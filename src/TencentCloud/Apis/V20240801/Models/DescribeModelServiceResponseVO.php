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
 * 查询模型服务详情的响应
 *
 * @method integer getAppID() 获取腾讯云AppID
 * @method void setAppID(integer $AppID) 设置腾讯云AppID
 * @method string getUin() 获取腾讯云Uin
 * @method void setUin(string $Uin) 设置腾讯云Uin
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getID() 获取模型ID
 * @method void setID(string $ID) 设置模型ID
 * @method string getName() 获取模型名称
 * @method void setName(string $Name) 设置模型名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getPubPath() 获取访问路径
 * @method void setPubPath(string $PubPath) 设置访问路径
 * @method string getPathMatchType() 获取路径匹配方式：absolute，prefix，regex
 * @method void setPathMatchType(string $PathMatchType) 设置路径匹配方式：absolute，prefix，regex
 * @method array getTargetModels() 获取目标模型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetModels(array $TargetModels) 设置目标模型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getModelNames() 获取模板模型的名称列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelNames(array $ModelNames) 设置模板模型的名称列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInvokeLimitConfigStatus() 获取是否开启限流
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置是否开启限流
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取限流配置
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置限流配置
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getLastUpdateTime() 获取最后修改时间
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最后修改时间
 * @method boolean getTokenLimitStatus() 获取是否开启token控制
 * @method void setTokenLimitStatus(boolean $TokenLimitStatus) 设置是否开启token控制
 * @method TokenLimitConfigDTO getTokenLimitConfig() 获取token控制
 * @method void setTokenLimitConfig(TokenLimitConfigDTO $TokenLimitConfig) 设置token控制
 * @method boolean getTmsStatus() 获取是否开启tms配置
 * @method void setTmsStatus(boolean $TmsStatus) 设置是否开启tms配置
 * @method TmsConfigDTO getTmsConfig() 获取tms配置
 * @method void setTmsConfig(TmsConfigDTO $TmsConfig) 设置tms配置
 * @method boolean getIpWhiteStatus() 获取是否开启IP白名单
 * @method void setIpWhiteStatus(boolean $IpWhiteStatus) 设置是否开启IP白名单
 * @method array getIpWhiteList() 获取IP白名单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpWhiteList(array $IpWhiteList) 设置IP白名单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIpBlackStatus() 获取是否开启IP黑名单
 * @method void setIpBlackStatus(boolean $IpBlackStatus) 设置是否开启IP黑名单
 * @method array getIpBlackList() 获取IP黑名单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpBlackList(array $IpBlackList) 设置IP黑名单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPluginConfigs() 获取插件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginConfigs(array $PluginConfigs) 设置插件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取超时配置，单位秒
 * @method void setTimeout(integer $Timeout) 设置超时配置，单位秒
 * @method string getStatus() 获取状态：normal，disabled
 * @method void setStatus(string $Status) 设置状态：normal，disabled
 * @method integer getRelateAgentAppNum() 获取关联应用数
 * @method void setRelateAgentAppNum(integer $RelateAgentAppNum) 设置关联应用数
 * @method string getUrl() 获取请求路径
 * @method void setUrl(string $Url) 设置请求路径
 * @method boolean getPromptModerateStatus() 获取是否开启提示词安全检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromptModerateStatus(boolean $PromptModerateStatus) 设置是否开启提示词安全检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method PromptModerateConfigDTO getPromptModerateConfig() 获取提示词安全检测配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromptModerateConfig(PromptModerateConfigDTO $PromptModerateConfig) 设置提示词安全检测配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeModelServiceResponseVO extends AbstractModel
{
    /**
     * @var integer 腾讯云AppID
     */
    public $AppID;

    /**
     * @var string 腾讯云Uin
     */
    public $Uin;

    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 模型ID
     */
    public $ID;

    /**
     * @var string 模型名称
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
     * @var string 路径匹配方式：absolute，prefix，regex
     */
    public $PathMatchType;

    /**
     * @var array 目标模型列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetModels;

    /**
     * @var array 模板模型的名称列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelNames;

    /**
     * @var boolean 是否开启限流
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO 限流配置
     */
    public $InvokeLimitConfig;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后修改时间
     */
    public $LastUpdateTime;

    /**
     * @var boolean 是否开启token控制
     */
    public $TokenLimitStatus;

    /**
     * @var TokenLimitConfigDTO token控制
     */
    public $TokenLimitConfig;

    /**
     * @var boolean 是否开启tms配置
     */
    public $TmsStatus;

    /**
     * @var TmsConfigDTO tms配置
     */
    public $TmsConfig;

    /**
     * @var boolean 是否开启IP白名单
     */
    public $IpWhiteStatus;

    /**
     * @var array IP白名单列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpWhiteList;

    /**
     * @var boolean 是否开启IP黑名单
     */
    public $IpBlackStatus;

    /**
     * @var array IP黑名单列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpBlackList;

    /**
     * @var array 插件配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginConfigs;

    /**
     * @var integer 超时配置，单位秒
     */
    public $Timeout;

    /**
     * @var string 状态：normal，disabled
     */
    public $Status;

    /**
     * @var integer 关联应用数
     */
    public $RelateAgentAppNum;

    /**
     * @var string 请求路径
     */
    public $Url;

    /**
     * @var boolean 是否开启提示词安全检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromptModerateStatus;

    /**
     * @var PromptModerateConfigDTO 提示词安全检测配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromptModerateConfig;

    /**
     * @param integer $AppID 腾讯云AppID
     * @param string $Uin 腾讯云Uin
     * @param string $InstanceID 实例ID
     * @param string $ID 模型ID
     * @param string $Name 模型名称
     * @param string $Description 描述
     * @param string $PubPath 访问路径
     * @param string $PathMatchType 路径匹配方式：absolute，prefix，regex
     * @param array $TargetModels 目标模型列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ModelNames 模板模型的名称列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InvokeLimitConfigStatus 是否开启限流
     * @param InvokeLimitConfigDTO $InvokeLimitConfig 限流配置
     * @param string $CreateTime 创建时间
     * @param string $LastUpdateTime 最后修改时间
     * @param boolean $TokenLimitStatus 是否开启token控制
     * @param TokenLimitConfigDTO $TokenLimitConfig token控制
     * @param boolean $TmsStatus 是否开启tms配置
     * @param TmsConfigDTO $TmsConfig tms配置
     * @param boolean $IpWhiteStatus 是否开启IP白名单
     * @param array $IpWhiteList IP白名单列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IpBlackStatus 是否开启IP黑名单
     * @param array $IpBlackList IP黑名单列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PluginConfigs 插件配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout 超时配置，单位秒
     * @param string $Status 状态：normal，disabled
     * @param integer $RelateAgentAppNum 关联应用数
     * @param string $Url 请求路径
     * @param boolean $PromptModerateStatus 是否开启提示词安全检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param PromptModerateConfigDTO $PromptModerateConfig 提示词安全检测配置
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
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

        if (array_key_exists("PathMatchType",$param) and $param["PathMatchType"] !== null) {
            $this->PathMatchType = $param["PathMatchType"];
        }

        if (array_key_exists("TargetModels",$param) and $param["TargetModels"] !== null) {
            $this->TargetModels = [];
            foreach ($param["TargetModels"] as $key => $value){
                $obj = new TargetModelDTO();
                $obj->deserialize($value);
                array_push($this->TargetModels, $obj);
            }
        }

        if (array_key_exists("ModelNames",$param) and $param["ModelNames"] !== null) {
            $this->ModelNames = $param["ModelNames"];
        }

        if (array_key_exists("InvokeLimitConfigStatus",$param) and $param["InvokeLimitConfigStatus"] !== null) {
            $this->InvokeLimitConfigStatus = $param["InvokeLimitConfigStatus"];
        }

        if (array_key_exists("InvokeLimitConfig",$param) and $param["InvokeLimitConfig"] !== null) {
            $this->InvokeLimitConfig = new InvokeLimitConfigDTO();
            $this->InvokeLimitConfig->deserialize($param["InvokeLimitConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
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

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RelateAgentAppNum",$param) and $param["RelateAgentAppNum"] !== null) {
            $this->RelateAgentAppNum = $param["RelateAgentAppNum"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("PromptModerateStatus",$param) and $param["PromptModerateStatus"] !== null) {
            $this->PromptModerateStatus = $param["PromptModerateStatus"];
        }

        if (array_key_exists("PromptModerateConfig",$param) and $param["PromptModerateConfig"] !== null) {
            $this->PromptModerateConfig = new PromptModerateConfigDTO();
            $this->PromptModerateConfig->deserialize($param["PromptModerateConfig"]);
        }
    }
}

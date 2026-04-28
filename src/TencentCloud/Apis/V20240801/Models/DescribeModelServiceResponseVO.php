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
 * @method integer getAppID() 获取<p>腾讯云AppID</p>
 * @method void setAppID(integer $AppID) 设置<p>腾讯云AppID</p>
 * @method string getUin() 获取<p>腾讯云Uin</p>
 * @method void setUin(string $Uin) 设置<p>腾讯云Uin</p>
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getID() 获取<p>模型ID</p>
 * @method void setID(string $ID) 设置<p>模型ID</p>
 * @method string getName() 获取<p>模型名称</p>
 * @method void setName(string $Name) 设置<p>模型名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getPubPath() 获取<p>访问路径</p>
 * @method void setPubPath(string $PubPath) 设置<p>访问路径</p>
 * @method string getPathMatchType() 获取<p>路径匹配方式：absolute，prefix，regex</p>
 * @method void setPathMatchType(string $PathMatchType) 设置<p>路径匹配方式：absolute，prefix，regex</p>
 * @method array getTargetModels() 获取<p>目标模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetModels(array $TargetModels) 设置<p>目标模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getModelNames() 获取<p>模板模型的名称列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelNames(array $ModelNames) 设置<p>模板模型的名称列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInvokeLimitConfigStatus() 获取<p>是否开启限流</p>
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置<p>是否开启限流</p>
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取<p>限流配置</p>
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置<p>限流配置</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getLastUpdateTime() 获取<p>最后修改时间</p>
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置<p>最后修改时间</p>
 * @method boolean getTokenLimitStatus() 获取<p>是否开启token控制</p>
 * @method void setTokenLimitStatus(boolean $TokenLimitStatus) 设置<p>是否开启token控制</p>
 * @method TokenLimitConfigDTO getTokenLimitConfig() 获取<p>token控制</p>
 * @method void setTokenLimitConfig(TokenLimitConfigDTO $TokenLimitConfig) 设置<p>token控制</p>
 * @method boolean getTmsStatus() 获取<p>是否开启tms配置</p>
 * @method void setTmsStatus(boolean $TmsStatus) 设置<p>是否开启tms配置</p>
 * @method TmsConfigDTO getTmsConfig() 获取<p>tms配置</p>
 * @method void setTmsConfig(TmsConfigDTO $TmsConfig) 设置<p>tms配置</p>
 * @method boolean getIpWhiteStatus() 获取<p>是否开启IP白名单</p>
 * @method void setIpWhiteStatus(boolean $IpWhiteStatus) 设置<p>是否开启IP白名单</p>
 * @method array getIpWhiteList() 获取<p>IP白名单列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpWhiteList(array $IpWhiteList) 设置<p>IP白名单列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIpBlackStatus() 获取<p>是否开启IP黑名单</p>
 * @method void setIpBlackStatus(boolean $IpBlackStatus) 设置<p>是否开启IP黑名单</p>
 * @method array getIpBlackList() 获取<p>IP黑名单列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpBlackList(array $IpBlackList) 设置<p>IP黑名单列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPluginConfigs() 获取<p>插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginConfigs(array $PluginConfigs) 设置<p>插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取<p>超时配置，单位秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时配置，单位秒</p>
 * @method string getStatus() 获取<p>状态：normal，disabled</p>
 * @method void setStatus(string $Status) 设置<p>状态：normal，disabled</p>
 * @method integer getRelateAgentAppNum() 获取<p>关联应用数</p>
 * @method void setRelateAgentAppNum(integer $RelateAgentAppNum) 设置<p>关联应用数</p>
 * @method string getUrl() 获取<p>请求路径</p>
 * @method void setUrl(string $Url) 设置<p>请求路径</p>
 * @method boolean getPromptModerateStatus() 获取<p>是否开启提示词安全检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromptModerateStatus(boolean $PromptModerateStatus) 设置<p>是否开启提示词安全检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PromptModerateConfigDTO getPromptModerateConfig() 获取<p>提示词安全检测配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromptModerateConfig(PromptModerateConfigDTO $PromptModerateConfig) 设置<p>提示词安全检测配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSensitiveDataCheckStatus() 获取<p>是否开启敏感数据检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveDataCheckStatus(boolean $SensitiveDataCheckStatus) 设置<p>是否开启敏感数据检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SensitiveDataCheckConfigDTO getSensitiveDataCheckConfig() 获取<p>敏感数据检测配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveDataCheckConfig(SensitiveDataCheckConfigDTO $SensitiveDataCheckConfig) 设置<p>敏感数据检测配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetSelect() 获取<p>负载方式</p><p>枚举值：</p><ul><li>random： 随机</li><li>consistentHash： 会话保持</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSelect(string $TargetSelect) 设置<p>负载方式</p><p>枚举值：</p><ul><li>random： 随机</li><li>consistentHash： 会话保持</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFindHostKeyMethod() 获取<p>会话判断方式</p><p>枚举值：</p><ul><li>fromClientIP： 从客户端IP判断</li><li>fromHeader： 从请求header判断</li><li>autoDetect： 自动探测</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFindHostKeyMethod(string $FindHostKeyMethod) 设置<p>会话判断方式</p><p>枚举值：</p><ul><li>fromClientIP： 从客户端IP判断</li><li>fromHeader： 从请求header判断</li><li>autoDetect： 自动探测</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostKeyHeaderName() 获取<p>会话判断header名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostKeyHeaderName(string $HostKeyHeaderName) 设置<p>会话判断header名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getFallbackStatus() 获取<p>是否开启备份模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFallbackStatus(boolean $FallbackStatus) 设置<p>是否开启备份模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFallbackModels() 获取<p>备份模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFallbackModels(array $FallbackModels) 设置<p>备份模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeModelServiceResponseVO extends AbstractModel
{
    /**
     * @var integer <p>腾讯云AppID</p>
     */
    public $AppID;

    /**
     * @var string <p>腾讯云Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>模型ID</p>
     */
    public $ID;

    /**
     * @var string <p>模型名称</p>
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
     * @var string <p>路径匹配方式：absolute，prefix，regex</p>
     */
    public $PathMatchType;

    /**
     * @var array <p>目标模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetModels;

    /**
     * @var array <p>模板模型的名称列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelNames;

    /**
     * @var boolean <p>是否开启限流</p>
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO <p>限流配置</p>
     */
    public $InvokeLimitConfig;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最后修改时间</p>
     */
    public $LastUpdateTime;

    /**
     * @var boolean <p>是否开启token控制</p>
     */
    public $TokenLimitStatus;

    /**
     * @var TokenLimitConfigDTO <p>token控制</p>
     */
    public $TokenLimitConfig;

    /**
     * @var boolean <p>是否开启tms配置</p>
     */
    public $TmsStatus;

    /**
     * @var TmsConfigDTO <p>tms配置</p>
     */
    public $TmsConfig;

    /**
     * @var boolean <p>是否开启IP白名单</p>
     */
    public $IpWhiteStatus;

    /**
     * @var array <p>IP白名单列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpWhiteList;

    /**
     * @var boolean <p>是否开启IP黑名单</p>
     */
    public $IpBlackStatus;

    /**
     * @var array <p>IP黑名单列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpBlackList;

    /**
     * @var array <p>插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginConfigs;

    /**
     * @var integer <p>超时配置，单位秒</p>
     */
    public $Timeout;

    /**
     * @var string <p>状态：normal，disabled</p>
     */
    public $Status;

    /**
     * @var integer <p>关联应用数</p>
     */
    public $RelateAgentAppNum;

    /**
     * @var string <p>请求路径</p>
     */
    public $Url;

    /**
     * @var boolean <p>是否开启提示词安全检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromptModerateStatus;

    /**
     * @var PromptModerateConfigDTO <p>提示词安全检测配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromptModerateConfig;

    /**
     * @var boolean <p>是否开启敏感数据检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveDataCheckStatus;

    /**
     * @var SensitiveDataCheckConfigDTO <p>敏感数据检测配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveDataCheckConfig;

    /**
     * @var string <p>负载方式</p><p>枚举值：</p><ul><li>random： 随机</li><li>consistentHash： 会话保持</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSelect;

    /**
     * @var string <p>会话判断方式</p><p>枚举值：</p><ul><li>fromClientIP： 从客户端IP判断</li><li>fromHeader： 从请求header判断</li><li>autoDetect： 自动探测</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FindHostKeyMethod;

    /**
     * @var string <p>会话判断header名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostKeyHeaderName;

    /**
     * @var boolean <p>是否开启备份模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FallbackStatus;

    /**
     * @var array <p>备份模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FallbackModels;

    /**
     * @param integer $AppID <p>腾讯云AppID</p>
     * @param string $Uin <p>腾讯云Uin</p>
     * @param string $InstanceID <p>实例ID</p>
     * @param string $ID <p>模型ID</p>
     * @param string $Name <p>模型名称</p>
     * @param string $Description <p>描述</p>
     * @param string $PubPath <p>访问路径</p>
     * @param string $PathMatchType <p>路径匹配方式：absolute，prefix，regex</p>
     * @param array $TargetModels <p>目标模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ModelNames <p>模板模型的名称列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InvokeLimitConfigStatus <p>是否开启限流</p>
     * @param InvokeLimitConfigDTO $InvokeLimitConfig <p>限流配置</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $LastUpdateTime <p>最后修改时间</p>
     * @param boolean $TokenLimitStatus <p>是否开启token控制</p>
     * @param TokenLimitConfigDTO $TokenLimitConfig <p>token控制</p>
     * @param boolean $TmsStatus <p>是否开启tms配置</p>
     * @param TmsConfigDTO $TmsConfig <p>tms配置</p>
     * @param boolean $IpWhiteStatus <p>是否开启IP白名单</p>
     * @param array $IpWhiteList <p>IP白名单列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IpBlackStatus <p>是否开启IP黑名单</p>
     * @param array $IpBlackList <p>IP黑名单列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PluginConfigs <p>插件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout <p>超时配置，单位秒</p>
     * @param string $Status <p>状态：normal，disabled</p>
     * @param integer $RelateAgentAppNum <p>关联应用数</p>
     * @param string $Url <p>请求路径</p>
     * @param boolean $PromptModerateStatus <p>是否开启提示词安全检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PromptModerateConfigDTO $PromptModerateConfig <p>提示词安全检测配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SensitiveDataCheckStatus <p>是否开启敏感数据检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SensitiveDataCheckConfigDTO $SensitiveDataCheckConfig <p>敏感数据检测配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetSelect <p>负载方式</p><p>枚举值：</p><ul><li>random： 随机</li><li>consistentHash： 会话保持</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FindHostKeyMethod <p>会话判断方式</p><p>枚举值：</p><ul><li>fromClientIP： 从客户端IP判断</li><li>fromHeader： 从请求header判断</li><li>autoDetect： 自动探测</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostKeyHeaderName <p>会话判断header名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $FallbackStatus <p>是否开启备份模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FallbackModels <p>备份模型</p>
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

        if (array_key_exists("SensitiveDataCheckStatus",$param) and $param["SensitiveDataCheckStatus"] !== null) {
            $this->SensitiveDataCheckStatus = $param["SensitiveDataCheckStatus"];
        }

        if (array_key_exists("SensitiveDataCheckConfig",$param) and $param["SensitiveDataCheckConfig"] !== null) {
            $this->SensitiveDataCheckConfig = new SensitiveDataCheckConfigDTO();
            $this->SensitiveDataCheckConfig->deserialize($param["SensitiveDataCheckConfig"]);
        }

        if (array_key_exists("TargetSelect",$param) and $param["TargetSelect"] !== null) {
            $this->TargetSelect = $param["TargetSelect"];
        }

        if (array_key_exists("FindHostKeyMethod",$param) and $param["FindHostKeyMethod"] !== null) {
            $this->FindHostKeyMethod = $param["FindHostKeyMethod"];
        }

        if (array_key_exists("HostKeyHeaderName",$param) and $param["HostKeyHeaderName"] !== null) {
            $this->HostKeyHeaderName = $param["HostKeyHeaderName"];
        }

        if (array_key_exists("FallbackStatus",$param) and $param["FallbackStatus"] !== null) {
            $this->FallbackStatus = $param["FallbackStatus"];
        }

        if (array_key_exists("FallbackModels",$param) and $param["FallbackModels"] !== null) {
            $this->FallbackModels = [];
            foreach ($param["FallbackModels"] as $key => $value){
                $obj = new TargetModelDTO();
                $obj->deserialize($value);
                array_push($this->FallbackModels, $obj);
            }
        }
    }
}

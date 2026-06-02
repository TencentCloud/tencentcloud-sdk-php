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
 * ModifyService请求参数结构体
 *
 * @method string getInstanceID() 获取<p>实例</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getPaasID() 获取<p>里约应用ID</p>
 * @method void setPaasID(string $PaasID) 设置<p>里约应用ID</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method array getLabelIDs() 获取<p>标签</p>
 * @method void setLabelIDs(array $LabelIDs) 设置<p>标签</p>
 * @method array getCategoryIDs() 获取<p>目录</p>
 * @method void setCategoryIDs(array $CategoryIDs) 设置<p>目录</p>
 * @method string getAuthType() 获取<p>鉴权方式</p>
 * @method void setAuthType(string $AuthType) 设置<p>鉴权方式</p>
 * @method string getSignType() 获取<p>签名</p>
 * @method void setSignType(string $SignType) 设置<p>签名</p>
 * @method array getLoginTypes() 获取<p>登录方式</p>
 * @method void setLoginTypes(array $LoginTypes) 设置<p>登录方式</p>
 * @method string getTargetSelect() 获取<p>负载方式</p>
 * @method void setTargetSelect(string $TargetSelect) 设置<p>负载方式</p>
 * @method string getPubPath() 获取<p>公开路径</p>
 * @method void setPubPath(string $PubPath) 设置<p>公开路径</p>
 * @method string getRequestMethod() 获取<p>请求方法</p>
 * @method void setRequestMethod(string $RequestMethod) 设置<p>请求方法</p>
 * @method string getHttpProtocolType() 获取<p>是否https</p>
 * @method void setHttpProtocolType(string $HttpProtocolType) 设置<p>是否https</p>
 * @method boolean getCheckTargetCertsError() 获取<p>证书检查</p>
 * @method void setCheckTargetCertsError(boolean $CheckTargetCertsError) 设置<p>证书检查</p>
 * @method string getHttpProtocolVersion() 获取<p>http协议类型</p>
 * @method void setHttpProtocolVersion(string $HttpProtocolVersion) 设置<p>http协议类型</p>
 * @method array getVersions() 获取<p>版本号</p>
 * @method void setVersions(array $Versions) 设置<p>版本号</p>
 * @method string getTargetPath() 获取<p>目标路径</p>
 * @method void setTargetPath(string $TargetPath) 设置<p>目标路径</p>
 * @method boolean getRequestParamsValidatorStatus() 获取<p>入参</p>
 * @method void setRequestParamsValidatorStatus(boolean $RequestParamsValidatorStatus) 设置<p>入参</p>
 * @method string getRequestParamsValidatorJsonInfoT() 获取<p>入参</p>
 * @method void setRequestParamsValidatorJsonInfoT(string $RequestParamsValidatorJsonInfoT) 设置<p>入参</p>
 * @method boolean getResponseParamsValidatorStatus() 获取<p>出参</p>
 * @method void setResponseParamsValidatorStatus(boolean $ResponseParamsValidatorStatus) 设置<p>出参</p>
 * @method string getResponseParamsValidatorJsonInfoT() 获取<p>出参</p>
 * @method void setResponseParamsValidatorJsonInfoT(string $ResponseParamsValidatorJsonInfoT) 设置<p>出参</p>
 * @method boolean getInvokeLimitConfigStatus() 获取<p>流量控制</p>
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置<p>流量控制</p>
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取<p>流量控制</p>
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置<p>流量控制</p>
 * @method boolean getHealthCheckStatus() 获取<p>健康检查</p>
 * @method void setHealthCheckStatus(boolean $HealthCheckStatus) 设置<p>健康检查</p>
 * @method HealthCheckConfigDTO getHealthCheckConfig() 获取<p>健康检查</p>
 * @method void setHealthCheckConfig(HealthCheckConfigDTO $HealthCheckConfig) 设置<p>健康检查</p>
 * @method boolean getSourceTypeStatus() 获取<p>格式转换</p>
 * @method void setSourceTypeStatus(boolean $SourceTypeStatus) 设置<p>格式转换</p>
 * @method SourceTypeConfigDTO getSourceTypeConfig() 获取<p>格式转换</p>
 * @method void setSourceTypeConfig(SourceTypeConfigDTO $SourceTypeConfig) 设置<p>格式转换</p>
 * @method boolean getIpWhiteStatus() 获取<p>IP白名单</p>
 * @method void setIpWhiteStatus(boolean $IpWhiteStatus) 设置<p>IP白名单</p>
 * @method array getIpWhiteList() 获取<p>IP白名单</p>
 * @method void setIpWhiteList(array $IpWhiteList) 设置<p>IP白名单</p>
 * @method boolean getIpBlackStatus() 获取<p>IP黑名单</p>
 * @method void setIpBlackStatus(boolean $IpBlackStatus) 设置<p>IP黑名单</p>
 * @method array getIpBlackList() 获取<p>IP黑名单</p>
 * @method void setIpBlackList(array $IpBlackList) 设置<p>IP黑名单</p>
 * @method array getPluginConfigs() 获取<p>插件</p>
 * @method void setPluginConfigs(array $PluginConfigs) 设置<p>插件</p>
 * @method string getID() 获取<p>服务ID</p>
 * @method void setID(string $ID) 设置<p>服务ID</p>
 */
class ModifyServiceRequest extends AbstractModel
{
    /**
     * @var string <p>实例</p>
     */
    public $InstanceID;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>里约应用ID</p>
     * @deprecated
     */
    public $PaasID;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var array <p>标签</p>
     */
    public $LabelIDs;

    /**
     * @var array <p>目录</p>
     */
    public $CategoryIDs;

    /**
     * @var string <p>鉴权方式</p>
     * @deprecated
     */
    public $AuthType;

    /**
     * @var string <p>签名</p>
     * @deprecated
     */
    public $SignType;

    /**
     * @var array <p>登录方式</p>
     * @deprecated
     */
    public $LoginTypes;

    /**
     * @var string <p>负载方式</p>
     */
    public $TargetSelect;

    /**
     * @var string <p>公开路径</p>
     */
    public $PubPath;

    /**
     * @var string <p>请求方法</p>
     */
    public $RequestMethod;

    /**
     * @var string <p>是否https</p>
     */
    public $HttpProtocolType;

    /**
     * @var boolean <p>证书检查</p>
     */
    public $CheckTargetCertsError;

    /**
     * @var string <p>http协议类型</p>
     */
    public $HttpProtocolVersion;

    /**
     * @var array <p>版本号</p>
     */
    public $Versions;

    /**
     * @var string <p>目标路径</p>
     */
    public $TargetPath;

    /**
     * @var boolean <p>入参</p>
     */
    public $RequestParamsValidatorStatus;

    /**
     * @var string <p>入参</p>
     */
    public $RequestParamsValidatorJsonInfoT;

    /**
     * @var boolean <p>出参</p>
     */
    public $ResponseParamsValidatorStatus;

    /**
     * @var string <p>出参</p>
     */
    public $ResponseParamsValidatorJsonInfoT;

    /**
     * @var boolean <p>流量控制</p>
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO <p>流量控制</p>
     */
    public $InvokeLimitConfig;

    /**
     * @var boolean <p>健康检查</p>
     */
    public $HealthCheckStatus;

    /**
     * @var HealthCheckConfigDTO <p>健康检查</p>
     */
    public $HealthCheckConfig;

    /**
     * @var boolean <p>格式转换</p>
     */
    public $SourceTypeStatus;

    /**
     * @var SourceTypeConfigDTO <p>格式转换</p>
     */
    public $SourceTypeConfig;

    /**
     * @var boolean <p>IP白名单</p>
     */
    public $IpWhiteStatus;

    /**
     * @var array <p>IP白名单</p>
     */
    public $IpWhiteList;

    /**
     * @var boolean <p>IP黑名单</p>
     */
    public $IpBlackStatus;

    /**
     * @var array <p>IP黑名单</p>
     */
    public $IpBlackList;

    /**
     * @var array <p>插件</p>
     */
    public $PluginConfigs;

    /**
     * @var string <p>服务ID</p>
     */
    public $ID;

    /**
     * @param string $InstanceID <p>实例</p>
     * @param string $Name <p>名称</p>
     * @param string $PaasID <p>里约应用ID</p>
     * @param string $Description <p>描述</p>
     * @param array $LabelIDs <p>标签</p>
     * @param array $CategoryIDs <p>目录</p>
     * @param string $AuthType <p>鉴权方式</p>
     * @param string $SignType <p>签名</p>
     * @param array $LoginTypes <p>登录方式</p>
     * @param string $TargetSelect <p>负载方式</p>
     * @param string $PubPath <p>公开路径</p>
     * @param string $RequestMethod <p>请求方法</p>
     * @param string $HttpProtocolType <p>是否https</p>
     * @param boolean $CheckTargetCertsError <p>证书检查</p>
     * @param string $HttpProtocolVersion <p>http协议类型</p>
     * @param array $Versions <p>版本号</p>
     * @param string $TargetPath <p>目标路径</p>
     * @param boolean $RequestParamsValidatorStatus <p>入参</p>
     * @param string $RequestParamsValidatorJsonInfoT <p>入参</p>
     * @param boolean $ResponseParamsValidatorStatus <p>出参</p>
     * @param string $ResponseParamsValidatorJsonInfoT <p>出参</p>
     * @param boolean $InvokeLimitConfigStatus <p>流量控制</p>
     * @param InvokeLimitConfigDTO $InvokeLimitConfig <p>流量控制</p>
     * @param boolean $HealthCheckStatus <p>健康检查</p>
     * @param HealthCheckConfigDTO $HealthCheckConfig <p>健康检查</p>
     * @param boolean $SourceTypeStatus <p>格式转换</p>
     * @param SourceTypeConfigDTO $SourceTypeConfig <p>格式转换</p>
     * @param boolean $IpWhiteStatus <p>IP白名单</p>
     * @param array $IpWhiteList <p>IP白名单</p>
     * @param boolean $IpBlackStatus <p>IP黑名单</p>
     * @param array $IpBlackList <p>IP黑名单</p>
     * @param array $PluginConfigs <p>插件</p>
     * @param string $ID <p>服务ID</p>
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
    }
}

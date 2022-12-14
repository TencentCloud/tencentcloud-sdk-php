<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster请求参数结构体
 *
 * @method string getProductVersion() 获取EMR产品版本名称如EMR-V2.3.0 表示2.3.0版本的EMR， 当前支持产品版本名称查询：[产品版本名称](https://cloud.tencent.com/document/product/589/66338)
 * @method void setProductVersion(string $ProductVersion) 设置EMR产品版本名称如EMR-V2.3.0 表示2.3.0版本的EMR， 当前支持产品版本名称查询：[产品版本名称](https://cloud.tencent.com/document/product/589/66338)
 * @method boolean getEnableSupportHAFlag() 获取是否开启节点高可用。取值范围：
<li>true：表示开启节点高可用。</li>
<li>false：表示不开启节点高可用。</li>
 * @method void setEnableSupportHAFlag(boolean $EnableSupportHAFlag) 设置是否开启节点高可用。取值范围：
<li>true：表示开启节点高可用。</li>
<li>false：表示不开启节点高可用。</li>
 * @method string getInstanceName() 获取实例名称。
<li>长度限制为6-36个字符。</li>
<li>只允许包含中文、字母、数字、-、_。</li>
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
<li>长度限制为6-36个字符。</li>
<li>只允许包含中文、字母、数字、-、_。</li>
 * @method string getInstanceChargeType() 获取实例计费模式。取值范围：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：按小时后付费。</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费模式。取值范围：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：按小时后付费。</li>
 * @method LoginSettings getLoginSettings() 获取实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。
<li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li>
<li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。
<li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li>
<li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
 * @method SceneSoftwareConfig getSceneSoftwareConfig() 获取集群应用场景以及支持部署组件配置
 * @method void setSceneSoftwareConfig(SceneSoftwareConfig $SceneSoftwareConfig) 设置集群应用场景以及支持部署组件配置
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method array getSecurityGroupIds() 获取实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的SecurityGroupId字段来获取。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的SecurityGroupId字段来获取。
 * @method array getScriptBootstrapActionConfig() 获取[引导操作](https://cloud.tencent.com/document/product/589/35656)脚本设置。
 * @method void setScriptBootstrapActionConfig(array $ScriptBootstrapActionConfig) 设置[引导操作](https://cloud.tencent.com/document/product/589/35656)脚本设置。
 * @method string getClientToken() 获取唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-751a-41b6-aad6-fae360632808
 * @method void setClientToken(string $ClientToken) 设置唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-751a-41b6-aad6-fae360632808
 * @method string getNeedMasterWan() 获取是否开启集群Master节点公网。取值范围：
<li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li>
<li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
 * @method void setNeedMasterWan(string $NeedMasterWan) 设置是否开启集群Master节点公网。取值范围：
<li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li>
<li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
 * @method boolean getEnableRemoteLoginFlag() 获取是否开启外网远程登录。（在SecurityGroupId不为空时，该参数无效）不填默认为不开启 取值范围：
<li>true：表示开启</li>
<li>false：表示不开启</li>
 * @method void setEnableRemoteLoginFlag(boolean $EnableRemoteLoginFlag) 设置是否开启外网远程登录。（在SecurityGroupId不为空时，该参数无效）不填默认为不开启 取值范围：
<li>true：表示开启</li>
<li>false：表示不开启</li>
 * @method boolean getEnableKerberosFlag() 获取是否开启Kerberos认证。默认不开启 取值范围：
<li>true：表示开启</li>
<li>false：表示不开启</li>
 * @method void setEnableKerberosFlag(boolean $EnableKerberosFlag) 设置是否开启Kerberos认证。默认不开启 取值范围：
<li>true：表示开启</li>
<li>false：表示不开启</li>
 * @method string getCustomConf() 获取[自定义软件配置](https://cloud.tencent.com/document/product/589/35655?from_cn_redirect=1)
 * @method void setCustomConf(string $CustomConf) 设置[自定义软件配置](https://cloud.tencent.com/document/product/589/35655?from_cn_redirect=1)
 * @method array getTags() 获取标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。
 * @method void setTags(array $Tags) 设置标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。
 * @method array getDisasterRecoverGroupIds() 获取分散置放群组ID列表，当前只支持指定一个。
该参数可以通过调用 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810)的返回值中的DisasterRecoverGroupId字段来获取。
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置分散置放群组ID列表，当前只支持指定一个。
该参数可以通过调用 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810)的返回值中的DisasterRecoverGroupId字段来获取。
 * @method boolean getEnableCbsEncryptFlag() 获取是否开启集群维度CBS加密。默认不加密 取值范围：
<li>true：表示加密</li>
<li>false：表示不加密</li>
 * @method void setEnableCbsEncryptFlag(boolean $EnableCbsEncryptFlag) 设置是否开启集群维度CBS加密。默认不加密 取值范围：
<li>true：表示加密</li>
<li>false：表示不加密</li>
 * @method CustomMetaDBInfo getMetaDBInfo() 获取MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填
当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId
当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass
 * @method void setMetaDBInfo(CustomMetaDBInfo $MetaDBInfo) 设置MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填
当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId
当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass
 * @method array getDependService() 获取共享组件信息
 * @method void setDependService(array $DependService) 设置共享组件信息
 * @method array getZoneResourceConfiguration() 获取节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。
 * @method void setZoneResourceConfiguration(array $ZoneResourceConfiguration) 设置节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string EMR产品版本名称如EMR-V2.3.0 表示2.3.0版本的EMR， 当前支持产品版本名称查询：[产品版本名称](https://cloud.tencent.com/document/product/589/66338)
     */
    public $ProductVersion;

    /**
     * @var boolean 是否开启节点高可用。取值范围：
<li>true：表示开启节点高可用。</li>
<li>false：表示不开启节点高可用。</li>
     */
    public $EnableSupportHAFlag;

    /**
     * @var string 实例名称。
<li>长度限制为6-36个字符。</li>
<li>只允许包含中文、字母、数字、-、_。</li>
     */
    public $InstanceName;

    /**
     * @var string 实例计费模式。取值范围：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：按小时后付费。</li>
     */
    public $InstanceChargeType;

    /**
     * @var LoginSettings 实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。
<li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li>
<li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
     */
    public $LoginSettings;

    /**
     * @var SceneSoftwareConfig 集群应用场景以及支持部署组件配置
     */
    public $SceneSoftwareConfig;

    /**
     * @var InstanceChargePrepaid 即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $InstanceChargePrepaid;

    /**
     * @var array 实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的SecurityGroupId字段来获取。
     */
    public $SecurityGroupIds;

    /**
     * @var array [引导操作](https://cloud.tencent.com/document/product/589/35656)脚本设置。
     */
    public $ScriptBootstrapActionConfig;

    /**
     * @var string 唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-751a-41b6-aad6-fae360632808
     */
    public $ClientToken;

    /**
     * @var string 是否开启集群Master节点公网。取值范围：
<li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li>
<li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
     */
    public $NeedMasterWan;

    /**
     * @var boolean 是否开启外网远程登录。（在SecurityGroupId不为空时，该参数无效）不填默认为不开启 取值范围：
<li>true：表示开启</li>
<li>false：表示不开启</li>
     */
    public $EnableRemoteLoginFlag;

    /**
     * @var boolean 是否开启Kerberos认证。默认不开启 取值范围：
<li>true：表示开启</li>
<li>false：表示不开启</li>
     */
    public $EnableKerberosFlag;

    /**
     * @var string [自定义软件配置](https://cloud.tencent.com/document/product/589/35655?from_cn_redirect=1)
     */
    public $CustomConf;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。
     */
    public $Tags;

    /**
     * @var array 分散置放群组ID列表，当前只支持指定一个。
该参数可以通过调用 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810)的返回值中的DisasterRecoverGroupId字段来获取。
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var boolean 是否开启集群维度CBS加密。默认不加密 取值范围：
<li>true：表示加密</li>
<li>false：表示不加密</li>
     */
    public $EnableCbsEncryptFlag;

    /**
     * @var CustomMetaDBInfo MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填
当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId
当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass
     */
    public $MetaDBInfo;

    /**
     * @var array 共享组件信息
     */
    public $DependService;

    /**
     * @var array 节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。
     */
    public $ZoneResourceConfiguration;

    /**
     * @param string $ProductVersion EMR产品版本名称如EMR-V2.3.0 表示2.3.0版本的EMR， 当前支持产品版本名称查询：[产品版本名称](https://cloud.tencent.com/document/product/589/66338)
     * @param boolean $EnableSupportHAFlag 是否开启节点高可用。取值范围：
<li>true：表示开启节点高可用。</li>
<li>false：表示不开启节点高可用。</li>
     * @param string $InstanceName 实例名称。
<li>长度限制为6-36个字符。</li>
<li>只允许包含中文、字母、数字、-、_。</li>
     * @param string $InstanceChargeType 实例计费模式。取值范围：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：按小时后付费。</li>
     * @param LoginSettings $LoginSettings 实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。
<li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li>
<li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
     * @param SceneSoftwareConfig $SceneSoftwareConfig 集群应用场景以及支持部署组件配置
     * @param InstanceChargePrepaid $InstanceChargePrepaid 即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     * @param array $SecurityGroupIds 实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的SecurityGroupId字段来获取。
     * @param array $ScriptBootstrapActionConfig [引导操作](https://cloud.tencent.com/document/product/589/35656)脚本设置。
     * @param string $ClientToken 唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-751a-41b6-aad6-fae360632808
     * @param string $NeedMasterWan 是否开启集群Master节点公网。取值范围：
<li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li>
<li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
     * @param boolean $EnableRemoteLoginFlag 是否开启外网远程登录。（在SecurityGroupId不为空时，该参数无效）不填默认为不开启 取值范围：
<li>true：表示开启</li>
<li>false：表示不开启</li>
     * @param boolean $EnableKerberosFlag 是否开启Kerberos认证。默认不开启 取值范围：
<li>true：表示开启</li>
<li>false：表示不开启</li>
     * @param string $CustomConf [自定义软件配置](https://cloud.tencent.com/document/product/589/35655?from_cn_redirect=1)
     * @param array $Tags 标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。
     * @param array $DisasterRecoverGroupIds 分散置放群组ID列表，当前只支持指定一个。
该参数可以通过调用 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810)的返回值中的DisasterRecoverGroupId字段来获取。
     * @param boolean $EnableCbsEncryptFlag 是否开启集群维度CBS加密。默认不加密 取值范围：
<li>true：表示加密</li>
<li>false：表示不加密</li>
     * @param CustomMetaDBInfo $MetaDBInfo MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填
当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId
当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass
     * @param array $DependService 共享组件信息
     * @param array $ZoneResourceConfiguration 节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。
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
        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("EnableSupportHAFlag",$param) and $param["EnableSupportHAFlag"] !== null) {
            $this->EnableSupportHAFlag = $param["EnableSupportHAFlag"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("SceneSoftwareConfig",$param) and $param["SceneSoftwareConfig"] !== null) {
            $this->SceneSoftwareConfig = new SceneSoftwareConfig();
            $this->SceneSoftwareConfig->deserialize($param["SceneSoftwareConfig"]);
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("ScriptBootstrapActionConfig",$param) and $param["ScriptBootstrapActionConfig"] !== null) {
            $this->ScriptBootstrapActionConfig = [];
            foreach ($param["ScriptBootstrapActionConfig"] as $key => $value){
                $obj = new ScriptBootstrapActionConfig();
                $obj->deserialize($value);
                array_push($this->ScriptBootstrapActionConfig, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("NeedMasterWan",$param) and $param["NeedMasterWan"] !== null) {
            $this->NeedMasterWan = $param["NeedMasterWan"];
        }

        if (array_key_exists("EnableRemoteLoginFlag",$param) and $param["EnableRemoteLoginFlag"] !== null) {
            $this->EnableRemoteLoginFlag = $param["EnableRemoteLoginFlag"];
        }

        if (array_key_exists("EnableKerberosFlag",$param) and $param["EnableKerberosFlag"] !== null) {
            $this->EnableKerberosFlag = $param["EnableKerberosFlag"];
        }

        if (array_key_exists("CustomConf",$param) and $param["CustomConf"] !== null) {
            $this->CustomConf = $param["CustomConf"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("EnableCbsEncryptFlag",$param) and $param["EnableCbsEncryptFlag"] !== null) {
            $this->EnableCbsEncryptFlag = $param["EnableCbsEncryptFlag"];
        }

        if (array_key_exists("MetaDBInfo",$param) and $param["MetaDBInfo"] !== null) {
            $this->MetaDBInfo = new CustomMetaDBInfo();
            $this->MetaDBInfo->deserialize($param["MetaDBInfo"]);
        }

        if (array_key_exists("DependService",$param) and $param["DependService"] !== null) {
            $this->DependService = [];
            foreach ($param["DependService"] as $key => $value){
                $obj = new DependService();
                $obj->deserialize($value);
                array_push($this->DependService, $obj);
            }
        }

        if (array_key_exists("ZoneResourceConfiguration",$param) and $param["ZoneResourceConfiguration"] !== null) {
            $this->ZoneResourceConfiguration = [];
            foreach ($param["ZoneResourceConfiguration"] as $key => $value){
                $obj = new ZoneResourceConfiguration();
                $obj->deserialize($value);
                array_push($this->ZoneResourceConfiguration, $obj);
            }
        }
    }
}

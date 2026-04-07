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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster请求参数结构体
 *
 * @method string getProductVersion() 获取<p>EMR产品版本名称如EMR-V2.3.0 表示2.3.0版本的EMR， 当前支持产品版本名称查询：<a href="https://cloud.tencent.com/document/product/589/66338">产品版本名称</a></p>
 * @method void setProductVersion(string $ProductVersion) 设置<p>EMR产品版本名称如EMR-V2.3.0 表示2.3.0版本的EMR， 当前支持产品版本名称查询：<a href="https://cloud.tencent.com/document/product/589/66338">产品版本名称</a></p>
 * @method boolean getEnableSupportHAFlag() 获取<p>是否开启节点高可用。取值范围：</p><li>true：表示开启节点高可用。</li><li>false：表示不开启节点高可用。</li>
 * @method void setEnableSupportHAFlag(boolean $EnableSupportHAFlag) 设置<p>是否开启节点高可用。取值范围：</p><li>true：表示开启节点高可用。</li><li>false：表示不开启节点高可用。</li>
 * @method string getInstanceName() 获取<p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
 * @method string getInstanceChargeType() 获取<p>实例计费模式。取值范围：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：按小时后付费。</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例计费模式。取值范围：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：按小时后付费。</li>
 * @method LoginSettings getLoginSettings() 获取<p>实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。</p><li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li><li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。</p><li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li><li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
 * @method SceneSoftwareConfig getSceneSoftwareConfig() 获取<p>集群应用场景以及支持部署组件配置</p>
 * @method void setSceneSoftwareConfig(SceneSoftwareConfig $SceneSoftwareConfig) 设置<p>集群应用场景以及支持部署组件配置</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method array getSecurityGroupIds() 获取<p>实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
 * @method array getScriptBootstrapActionConfig() 获取<p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
 * @method void setScriptBootstrapActionConfig(array $ScriptBootstrapActionConfig) 设置<p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
 * @method string getClientToken() 获取<p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
 * @method void setClientToken(string $ClientToken) 设置<p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
 * @method string getNeedMasterWan() 获取<p>是否开启集群Master节点公网。取值范围：</p><li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li><li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
 * @method void setNeedMasterWan(string $NeedMasterWan) 设置<p>是否开启集群Master节点公网。取值范围：</p><li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li><li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
 * @method boolean getEnableRemoteLoginFlag() 获取<p>是否开启外网远程登录。（在SecurityGroupId不为空时，该参数无效）不填默认为不开启 取值范围：</p><li>true：表示开启</li><li>false：表示不开启</li>
 * @method void setEnableRemoteLoginFlag(boolean $EnableRemoteLoginFlag) 设置<p>是否开启外网远程登录。（在SecurityGroupId不为空时，该参数无效）不填默认为不开启 取值范围：</p><li>true：表示开启</li><li>false：表示不开启</li>
 * @method boolean getEnableKerberosFlag() 获取<p>是否开启Kerberos认证。默认不开启 取值范围：</p><li>true：表示开启</li><li>false：表示不开启</li>
 * @method void setEnableKerberosFlag(boolean $EnableKerberosFlag) 设置<p>是否开启Kerberos认证。默认不开启 取值范围：</p><li>true：表示开启</li><li>false：表示不开启</li>
 * @method string getCustomConf() 获取<p><a href="https://cloud.tencent.com/document/product/589/35655?from_cn_redirect=1">自定义软件配置</a></p>
 * @method void setCustomConf(string $CustomConf) 设置<p><a href="https://cloud.tencent.com/document/product/589/35655?from_cn_redirect=1">自定义软件配置</a></p>
 * @method array getTags() 获取<p>标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。</p>
 * @method void setTags(array $Tags) 设置<p>标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。</p>
 * @method array getDisasterRecoverGroupIds() 获取<p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>的返回值中的DisasterRecoverGroupId字段来获取。</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置<p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>的返回值中的DisasterRecoverGroupId字段来获取。</p>
 * @method boolean getEnableCbsEncryptFlag() 获取<p>是否开启集群维度CBS加密。默认不加密 取值范围：</p><li>true：表示加密</li><li>false：表示不加密</li>
 * @method void setEnableCbsEncryptFlag(boolean $EnableCbsEncryptFlag) 设置<p>是否开启集群维度CBS加密。默认不加密 取值范围：</p><li>true：表示加密</li><li>false：表示不加密</li>
 * @method CustomMetaDBInfo getMetaDBInfo() 获取<p>MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填<br>当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId<br>当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass</p>
 * @method void setMetaDBInfo(CustomMetaDBInfo $MetaDBInfo) 设置<p>MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填<br>当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId<br>当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass</p>
 * @method array getDependService() 获取<p>共享组件信息</p>
 * @method void setDependService(array $DependService) 设置<p>共享组件信息</p>
 * @method array getZoneResourceConfiguration() 获取<p>节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。</p>
 * @method void setZoneResourceConfiguration(array $ZoneResourceConfiguration) 设置<p>节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。</p>
 * @method string getCosBucket() 获取<p>cos桶路径，创建StarRocks存算分离集群时用到</p>
 * @method void setCosBucket(string $CosBucket) 设置<p>cos桶路径，创建StarRocks存算分离集群时用到</p>
 * @method array getNodeMarks() 获取<p>节点标识信息，目前只提供给tf平台使用</p>
 * @method void setNodeMarks(array $NodeMarks) 设置<p>节点标识信息，目前只提供给tf平台使用</p>
 * @method string getLoadBalancerId() 获取<p>clb id</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>clb id</p>
 * @method string getDefaultMetaVersion() 获取<p>数据库版本：mysql8/tdsql8/mysql5</p>
 * @method void setDefaultMetaVersion(string $DefaultMetaVersion) 设置<p>数据库版本：mysql8/tdsql8/mysql5</p>
 * @method integer getNeedCdbAudit() 获取<p>是否开通数据库审计</p>
 * @method void setNeedCdbAudit(integer $NeedCdbAudit) 设置<p>是否开通数据库审计</p>
 * @method string getSgIP() 获取<p>安全指定来源ip</p>
 * @method void setSgIP(string $SgIP) 设置<p>安全指定来源ip</p>
 * @method integer getPartitionNumber() 获取<p>分区置放群组分区</p>
 * @method void setPartitionNumber(integer $PartitionNumber) 设置<p>分区置放群组分区</p>
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string <p>EMR产品版本名称如EMR-V2.3.0 表示2.3.0版本的EMR， 当前支持产品版本名称查询：<a href="https://cloud.tencent.com/document/product/589/66338">产品版本名称</a></p>
     */
    public $ProductVersion;

    /**
     * @var boolean <p>是否开启节点高可用。取值范围：</p><li>true：表示开启节点高可用。</li><li>false：表示不开启节点高可用。</li>
     */
    public $EnableSupportHAFlag;

    /**
     * @var string <p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
     */
    public $InstanceName;

    /**
     * @var string <p>实例计费模式。取值范围：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：按小时后付费。</li>
     */
    public $InstanceChargeType;

    /**
     * @var LoginSettings <p>实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。</p><li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li><li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
     */
    public $LoginSettings;

    /**
     * @var SceneSoftwareConfig <p>集群应用场景以及支持部署组件配置</p>
     */
    public $SceneSoftwareConfig;

    /**
     * @var InstanceChargePrepaid <p>即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var array <p>实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
     */
    public $ScriptBootstrapActionConfig;

    /**
     * @var string <p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
     */
    public $ClientToken;

    /**
     * @var string <p>是否开启集群Master节点公网。取值范围：</p><li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li><li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
     */
    public $NeedMasterWan;

    /**
     * @var boolean <p>是否开启外网远程登录。（在SecurityGroupId不为空时，该参数无效）不填默认为不开启 取值范围：</p><li>true：表示开启</li><li>false：表示不开启</li>
     */
    public $EnableRemoteLoginFlag;

    /**
     * @var boolean <p>是否开启Kerberos认证。默认不开启 取值范围：</p><li>true：表示开启</li><li>false：表示不开启</li>
     */
    public $EnableKerberosFlag;

    /**
     * @var string <p><a href="https://cloud.tencent.com/document/product/589/35655?from_cn_redirect=1">自定义软件配置</a></p>
     */
    public $CustomConf;

    /**
     * @var array <p>标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。</p>
     */
    public $Tags;

    /**
     * @var array <p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>的返回值中的DisasterRecoverGroupId字段来获取。</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var boolean <p>是否开启集群维度CBS加密。默认不加密 取值范围：</p><li>true：表示加密</li><li>false：表示不加密</li>
     */
    public $EnableCbsEncryptFlag;

    /**
     * @var CustomMetaDBInfo <p>MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填<br>当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId<br>当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass</p>
     */
    public $MetaDBInfo;

    /**
     * @var array <p>共享组件信息</p>
     */
    public $DependService;

    /**
     * @var array <p>节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。</p>
     */
    public $ZoneResourceConfiguration;

    /**
     * @var string <p>cos桶路径，创建StarRocks存算分离集群时用到</p>
     */
    public $CosBucket;

    /**
     * @var array <p>节点标识信息，目前只提供给tf平台使用</p>
     */
    public $NodeMarks;

    /**
     * @var string <p>clb id</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>数据库版本：mysql8/tdsql8/mysql5</p>
     */
    public $DefaultMetaVersion;

    /**
     * @var integer <p>是否开通数据库审计</p>
     */
    public $NeedCdbAudit;

    /**
     * @var string <p>安全指定来源ip</p>
     */
    public $SgIP;

    /**
     * @var integer <p>分区置放群组分区</p>
     */
    public $PartitionNumber;

    /**
     * @param string $ProductVersion <p>EMR产品版本名称如EMR-V2.3.0 表示2.3.0版本的EMR， 当前支持产品版本名称查询：<a href="https://cloud.tencent.com/document/product/589/66338">产品版本名称</a></p>
     * @param boolean $EnableSupportHAFlag <p>是否开启节点高可用。取值范围：</p><li>true：表示开启节点高可用。</li><li>false：表示不开启节点高可用。</li>
     * @param string $InstanceName <p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
     * @param string $InstanceChargeType <p>实例计费模式。取值范围：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：按小时后付费。</li>
     * @param LoginSettings $LoginSettings <p>实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。</p><li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li><li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
     * @param SceneSoftwareConfig $SceneSoftwareConfig <p>集群应用场景以及支持部署组件配置</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     * @param array $SecurityGroupIds <p>实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
     * @param array $ScriptBootstrapActionConfig <p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
     * @param string $ClientToken <p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
     * @param string $NeedMasterWan <p>是否开启集群Master节点公网。取值范围：</p><li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li><li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
     * @param boolean $EnableRemoteLoginFlag <p>是否开启外网远程登录。（在SecurityGroupId不为空时，该参数无效）不填默认为不开启 取值范围：</p><li>true：表示开启</li><li>false：表示不开启</li>
     * @param boolean $EnableKerberosFlag <p>是否开启Kerberos认证。默认不开启 取值范围：</p><li>true：表示开启</li><li>false：表示不开启</li>
     * @param string $CustomConf <p><a href="https://cloud.tencent.com/document/product/589/35655?from_cn_redirect=1">自定义软件配置</a></p>
     * @param array $Tags <p>标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。</p>
     * @param array $DisasterRecoverGroupIds <p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>的返回值中的DisasterRecoverGroupId字段来获取。</p>
     * @param boolean $EnableCbsEncryptFlag <p>是否开启集群维度CBS加密。默认不加密 取值范围：</p><li>true：表示加密</li><li>false：表示不加密</li>
     * @param CustomMetaDBInfo $MetaDBInfo <p>MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填<br>当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId<br>当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass</p>
     * @param array $DependService <p>共享组件信息</p>
     * @param array $ZoneResourceConfiguration <p>节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。</p>
     * @param string $CosBucket <p>cos桶路径，创建StarRocks存算分离集群时用到</p>
     * @param array $NodeMarks <p>节点标识信息，目前只提供给tf平台使用</p>
     * @param string $LoadBalancerId <p>clb id</p>
     * @param string $DefaultMetaVersion <p>数据库版本：mysql8/tdsql8/mysql5</p>
     * @param integer $NeedCdbAudit <p>是否开通数据库审计</p>
     * @param string $SgIP <p>安全指定来源ip</p>
     * @param integer $PartitionNumber <p>分区置放群组分区</p>
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

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("NodeMarks",$param) and $param["NodeMarks"] !== null) {
            $this->NodeMarks = [];
            foreach ($param["NodeMarks"] as $key => $value){
                $obj = new NodeMark();
                $obj->deserialize($value);
                array_push($this->NodeMarks, $obj);
            }
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("DefaultMetaVersion",$param) and $param["DefaultMetaVersion"] !== null) {
            $this->DefaultMetaVersion = $param["DefaultMetaVersion"];
        }

        if (array_key_exists("NeedCdbAudit",$param) and $param["NeedCdbAudit"] !== null) {
            $this->NeedCdbAudit = $param["NeedCdbAudit"];
        }

        if (array_key_exists("SgIP",$param) and $param["SgIP"] !== null) {
            $this->SgIP = $param["SgIP"];
        }

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }
    }
}

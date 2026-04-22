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
 * CreateCloudInstance请求参数结构体
 *
 * @method string getInstanceName() 获取<p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
 * @method string getClusterClass() 获取<p>容器集群类型，取值范围</p><li>EMR容器集群实例: EMR-TKE</li>
 * @method void setClusterClass(string $ClusterClass) 设置<p>容器集群类型，取值范围</p><li>EMR容器集群实例: EMR-TKE</li>
 * @method array getSoftware() 获取<p>部署的组件列表，不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：<a href="https://cloud.tencent.com/document/product/589/20279">组件版本</a> ；</p>
 * @method void setSoftware(array $Software) 设置<p>部署的组件列表，不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：<a href="https://cloud.tencent.com/document/product/589/20279">组件版本</a> ；</p>
 * @method string getPlatFormType() 获取<p>容器平台类型，取值范围</p><li>EMR容器集群实例: tke</li>
 * @method void setPlatFormType(string $PlatFormType) 设置<p>容器平台类型，取值范围</p><li>EMR容器集群实例: tke</li>
 * @method string getCosBucket() 获取<p>cos存储桶</p>
 * @method void setCosBucket(string $CosBucket) 设置<p>cos存储桶</p>
 * @method string getEksClusterId() 获取<p>容器集群id</p>
 * @method void setEksClusterId(string $EksClusterId) 设置<p>容器集群id</p>
 * @method integer getProductId() 获取<p>产品Id，不同产品ID表示不同的EMR产品版本。取值范围：</p><li>60:表示EMR-TKE-V1.1.0</li><li>55:表示EMR-TKE-V1.0.1</li><li>52:表示EMR-TKE-V1.0.0</li>
 * @method void setProductId(integer $ProductId) 设置<p>产品Id，不同产品ID表示不同的EMR产品版本。取值范围：</p><li>60:表示EMR-TKE-V1.1.0</li><li>55:表示EMR-TKE-V1.0.1</li><li>52:表示EMR-TKE-V1.0.0</li>
 * @method string getClientToken() 获取<p>客户端token，唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，小于等于64个字符，例如 a9a90aa6fae36063280<br>示例值：a9a90aa6fae36063280</p>
 * @method void setClientToken(string $ClientToken) 设置<p>客户端token，唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，小于等于64个字符，例如 a9a90aa6fae36063280<br>示例值：a9a90aa6fae36063280</p>
 * @method VPCSettings getVPCSettings() 获取<p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
 * @method void setVPCSettings(VPCSettings $VPCSettings) 设置<p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
 * @method array getCloudResources() 获取<p>所有组件角色及其对应的Pod资源请求信息</p>
 * @method void setCloudResources(array $CloudResources) 设置<p>所有组件角色及其对应的Pod资源请求信息</p>
 * @method string getSgId() 获取<p>安全组Id，为空默认创建新的安全组</p>
 * @method void setSgId(string $SgId) 设置<p>安全组Id，为空默认创建新的安全组</p>
 * @method CustomMetaDBInfo getMetaDBInfo() 获取<p>元数据库信息<br>MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填<br>当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId<br>当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass</p>
 * @method void setMetaDBInfo(CustomMetaDBInfo $MetaDBInfo) 设置<p>元数据库信息<br>MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填<br>当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId<br>当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 * @method LoginSettings getLoginSettings() 获取<p>登录密码，LoginSettings中的Password字段</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>登录密码，LoginSettings中的Password字段</p>
 * @method array getExternalService() 获取<p>共享服务信息</p>
 * @method void setExternalService(array $ExternalService) 设置<p>共享服务信息</p>
 * @method integer getZoneId() 获取<p>可用区id</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区id</p>
 * @method string getDefaultMetaVersion() 获取<p>数据库版本</p>
 * @method void setDefaultMetaVersion(string $DefaultMetaVersion) 设置<p>数据库版本</p>
 * @method integer getNeedCdbAudit() 获取<p>是否开通审计</p>
 * @method void setNeedCdbAudit(integer $NeedCdbAudit) 设置<p>是否开通审计</p>
 * @method string getSgIP() 获取<p>安全组来源IP</p>
 * @method void setSgIP(string $SgIP) 设置<p>安全组来源IP</p>
 * @method ContainerExtraConf getContainerExtraConf() 获取<p>额外容器相关配置</p>
 * @method void setContainerExtraConf(ContainerExtraConf $ContainerExtraConf) 设置<p>额外容器相关配置</p>
 */
class CreateCloudInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
     */
    public $InstanceName;

    /**
     * @var string <p>容器集群类型，取值范围</p><li>EMR容器集群实例: EMR-TKE</li>
     */
    public $ClusterClass;

    /**
     * @var array <p>部署的组件列表，不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：<a href="https://cloud.tencent.com/document/product/589/20279">组件版本</a> ；</p>
     */
    public $Software;

    /**
     * @var string <p>容器平台类型，取值范围</p><li>EMR容器集群实例: tke</li>
     */
    public $PlatFormType;

    /**
     * @var string <p>cos存储桶</p>
     */
    public $CosBucket;

    /**
     * @var string <p>容器集群id</p>
     */
    public $EksClusterId;

    /**
     * @var integer <p>产品Id，不同产品ID表示不同的EMR产品版本。取值范围：</p><li>60:表示EMR-TKE-V1.1.0</li><li>55:表示EMR-TKE-V1.0.1</li><li>52:表示EMR-TKE-V1.0.0</li>
     */
    public $ProductId;

    /**
     * @var string <p>客户端token，唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，小于等于64个字符，例如 a9a90aa6fae36063280<br>示例值：a9a90aa6fae36063280</p>
     */
    public $ClientToken;

    /**
     * @var VPCSettings <p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
     */
    public $VPCSettings;

    /**
     * @var array <p>所有组件角色及其对应的Pod资源请求信息</p>
     */
    public $CloudResources;

    /**
     * @var string <p>安全组Id，为空默认创建新的安全组</p>
     */
    public $SgId;

    /**
     * @var CustomMetaDBInfo <p>元数据库信息<br>MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填<br>当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId<br>当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass</p>
     */
    public $MetaDBInfo;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @var LoginSettings <p>登录密码，LoginSettings中的Password字段</p>
     */
    public $LoginSettings;

    /**
     * @var array <p>共享服务信息</p>
     */
    public $ExternalService;

    /**
     * @var integer <p>可用区id</p>
     */
    public $ZoneId;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DefaultMetaVersion;

    /**
     * @var integer <p>是否开通审计</p>
     */
    public $NeedCdbAudit;

    /**
     * @var string <p>安全组来源IP</p>
     */
    public $SgIP;

    /**
     * @var ContainerExtraConf <p>额外容器相关配置</p>
     */
    public $ContainerExtraConf;

    /**
     * @param string $InstanceName <p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
     * @param string $ClusterClass <p>容器集群类型，取值范围</p><li>EMR容器集群实例: EMR-TKE</li>
     * @param array $Software <p>部署的组件列表，不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：<a href="https://cloud.tencent.com/document/product/589/20279">组件版本</a> ；</p>
     * @param string $PlatFormType <p>容器平台类型，取值范围</p><li>EMR容器集群实例: tke</li>
     * @param string $CosBucket <p>cos存储桶</p>
     * @param string $EksClusterId <p>容器集群id</p>
     * @param integer $ProductId <p>产品Id，不同产品ID表示不同的EMR产品版本。取值范围：</p><li>60:表示EMR-TKE-V1.1.0</li><li>55:表示EMR-TKE-V1.0.1</li><li>52:表示EMR-TKE-V1.0.0</li>
     * @param string $ClientToken <p>客户端token，唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，小于等于64个字符，例如 a9a90aa6fae36063280<br>示例值：a9a90aa6fae36063280</p>
     * @param VPCSettings $VPCSettings <p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
     * @param array $CloudResources <p>所有组件角色及其对应的Pod资源请求信息</p>
     * @param string $SgId <p>安全组Id，为空默认创建新的安全组</p>
     * @param CustomMetaDBInfo $MetaDBInfo <p>元数据库信息<br>MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填<br>当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId<br>当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass</p>
     * @param array $Tags <p>标签信息</p>
     * @param LoginSettings $LoginSettings <p>登录密码，LoginSettings中的Password字段</p>
     * @param array $ExternalService <p>共享服务信息</p>
     * @param integer $ZoneId <p>可用区id</p>
     * @param string $DefaultMetaVersion <p>数据库版本</p>
     * @param integer $NeedCdbAudit <p>是否开通审计</p>
     * @param string $SgIP <p>安全组来源IP</p>
     * @param ContainerExtraConf $ContainerExtraConf <p>额外容器相关配置</p>
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClusterClass",$param) and $param["ClusterClass"] !== null) {
            $this->ClusterClass = $param["ClusterClass"];
        }

        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = $param["Software"];
        }

        if (array_key_exists("PlatFormType",$param) and $param["PlatFormType"] !== null) {
            $this->PlatFormType = $param["PlatFormType"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("EksClusterId",$param) and $param["EksClusterId"] !== null) {
            $this->EksClusterId = $param["EksClusterId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }

        if (array_key_exists("CloudResources",$param) and $param["CloudResources"] !== null) {
            $this->CloudResources = [];
            foreach ($param["CloudResources"] as $key => $value){
                $obj = new CloudResource();
                $obj->deserialize($value);
                array_push($this->CloudResources, $obj);
            }
        }

        if (array_key_exists("SgId",$param) and $param["SgId"] !== null) {
            $this->SgId = $param["SgId"];
        }

        if (array_key_exists("MetaDBInfo",$param) and $param["MetaDBInfo"] !== null) {
            $this->MetaDBInfo = new CustomMetaDBInfo();
            $this->MetaDBInfo->deserialize($param["MetaDBInfo"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("ExternalService",$param) and $param["ExternalService"] !== null) {
            $this->ExternalService = [];
            foreach ($param["ExternalService"] as $key => $value){
                $obj = new ExternalService();
                $obj->deserialize($value);
                array_push($this->ExternalService, $obj);
            }
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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

        if (array_key_exists("ContainerExtraConf",$param) and $param["ContainerExtraConf"] !== null) {
            $this->ContainerExtraConf = new ContainerExtraConf();
            $this->ContainerExtraConf->deserialize($param["ContainerExtraConf"]);
        }
    }
}

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
 * CreateCloudInstance请求参数结构体
 *
 * @method string getInstanceName() 获取实例名称。
<li>长度限制为6-36个字符。</li>
<li>只允许包含中文、字母、数字、-、_。</li>
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
<li>长度限制为6-36个字符。</li>
<li>只允许包含中文、字母、数字、-、_。</li>
 * @method string getClusterClass() 获取容器集群类型，取值范围
<li>EMR容器集群实例: EMR-TKE</li>
 * @method void setClusterClass(string $ClusterClass) 设置容器集群类型，取值范围
<li>EMR容器集群实例: EMR-TKE</li>
 * @method array getSoftware() 获取部署的组件列表，不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：[组件版本](https://cloud.tencent.com/document/product/589/20279) ；

 * @method void setSoftware(array $Software) 设置部署的组件列表，不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：[组件版本](https://cloud.tencent.com/document/product/589/20279) ；

 * @method string getPlatFormType() 获取容器平台类型，取值范围
<li>EMR容器集群实例: tke</li>
 * @method void setPlatFormType(string $PlatFormType) 设置容器平台类型，取值范围
<li>EMR容器集群实例: tke</li>
 * @method string getCosBucket() 获取cos存储桶
 * @method void setCosBucket(string $CosBucket) 设置cos存储桶
 * @method string getEksClusterId() 获取容器集群id
 * @method void setEksClusterId(string $EksClusterId) 设置容器集群id
 * @method integer getProductId() 获取产品Id，不同产品ID表示不同的EMR产品版本。取值范围：
<li>60:表示EMR-TKE-V1.1.0</li>
<li>55:表示EMR-TKE-V1.0.1</li>
<li>52:表示EMR-TKE-V1.0.0</li>
 * @method void setProductId(integer $ProductId) 设置产品Id，不同产品ID表示不同的EMR产品版本。取值范围：
<li>60:表示EMR-TKE-V1.1.0</li>
<li>55:表示EMR-TKE-V1.0.1</li>
<li>52:表示EMR-TKE-V1.0.0</li>
 * @method string getClientToken() 获取客户端token，唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，小于等于64个字符，例如 a9a90aa6----fae36063280
示例值：a9a90aa6----fae36063280
 * @method void setClientToken(string $ClientToken) 设置客户端token，唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，小于等于64个字符，例如 a9a90aa6----fae36063280
示例值：a9a90aa6----fae36063280
 * @method VPCSettings getVPCSettings() 获取私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。
 * @method void setVPCSettings(VPCSettings $VPCSettings) 设置私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。
 * @method array getCloudResources() 获取所有组件角色及其对应的Pod资源请求信息
 * @method void setCloudResources(array $CloudResources) 设置所有组件角色及其对应的Pod资源请求信息
 * @method string getSgId() 获取安全组Id，为空默认创建新的安全组
 * @method void setSgId(string $SgId) 设置安全组Id，为空默认创建新的安全组
 * @method CustomMetaDBInfo getMetaDBInfo() 获取元数据库信息
MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填
当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId
当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass
 * @method void setMetaDBInfo(CustomMetaDBInfo $MetaDBInfo) 设置元数据库信息
MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填
当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId
当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass
 * @method array getTags() 获取标签信息
 * @method void setTags(array $Tags) 设置标签信息
 * @method LoginSettings getLoginSettings() 获取登陆密码，LoginSettings中的Password字段
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置登陆密码，LoginSettings中的Password字段
 * @method array getExternalService() 获取共享服务信息
 * @method void setExternalService(array $ExternalService) 设置共享服务信息
 * @method integer getZoneId() 获取可用区id
 * @method void setZoneId(integer $ZoneId) 设置可用区id
 */
class CreateCloudInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例名称。
<li>长度限制为6-36个字符。</li>
<li>只允许包含中文、字母、数字、-、_。</li>
     */
    public $InstanceName;

    /**
     * @var string 容器集群类型，取值范围
<li>EMR容器集群实例: EMR-TKE</li>
     */
    public $ClusterClass;

    /**
     * @var array 部署的组件列表，不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：[组件版本](https://cloud.tencent.com/document/product/589/20279) ；

     */
    public $Software;

    /**
     * @var string 容器平台类型，取值范围
<li>EMR容器集群实例: tke</li>
     */
    public $PlatFormType;

    /**
     * @var string cos存储桶
     */
    public $CosBucket;

    /**
     * @var string 容器集群id
     */
    public $EksClusterId;

    /**
     * @var integer 产品Id，不同产品ID表示不同的EMR产品版本。取值范围：
<li>60:表示EMR-TKE-V1.1.0</li>
<li>55:表示EMR-TKE-V1.0.1</li>
<li>52:表示EMR-TKE-V1.0.0</li>
     */
    public $ProductId;

    /**
     * @var string 客户端token，唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，小于等于64个字符，例如 a9a90aa6----fae36063280
示例值：a9a90aa6----fae36063280
     */
    public $ClientToken;

    /**
     * @var VPCSettings 私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。
     */
    public $VPCSettings;

    /**
     * @var array 所有组件角色及其对应的Pod资源请求信息
     */
    public $CloudResources;

    /**
     * @var string 安全组Id，为空默认创建新的安全组
     */
    public $SgId;

    /**
     * @var CustomMetaDBInfo 元数据库信息
MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填
当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId
当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass
     */
    public $MetaDBInfo;

    /**
     * @var array 标签信息
     */
    public $Tags;

    /**
     * @var LoginSettings 登陆密码，LoginSettings中的Password字段
     */
    public $LoginSettings;

    /**
     * @var array 共享服务信息
     */
    public $ExternalService;

    /**
     * @var integer 可用区id
     */
    public $ZoneId;

    /**
     * @param string $InstanceName 实例名称。
<li>长度限制为6-36个字符。</li>
<li>只允许包含中文、字母、数字、-、_。</li>
     * @param string $ClusterClass 容器集群类型，取值范围
<li>EMR容器集群实例: EMR-TKE</li>
     * @param array $Software 部署的组件列表，不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：[组件版本](https://cloud.tencent.com/document/product/589/20279) ；

     * @param string $PlatFormType 容器平台类型，取值范围
<li>EMR容器集群实例: tke</li>
     * @param string $CosBucket cos存储桶
     * @param string $EksClusterId 容器集群id
     * @param integer $ProductId 产品Id，不同产品ID表示不同的EMR产品版本。取值范围：
<li>60:表示EMR-TKE-V1.1.0</li>
<li>55:表示EMR-TKE-V1.0.1</li>
<li>52:表示EMR-TKE-V1.0.0</li>
     * @param string $ClientToken 客户端token，唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，小于等于64个字符，例如 a9a90aa6----fae36063280
示例值：a9a90aa6----fae36063280
     * @param VPCSettings $VPCSettings 私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。
     * @param array $CloudResources 所有组件角色及其对应的Pod资源请求信息
     * @param string $SgId 安全组Id，为空默认创建新的安全组
     * @param CustomMetaDBInfo $MetaDBInfo 元数据库信息
MetaDB信息，当MetaType选择EMR_NEW_META时，MetaDataJdbcUrl MetaDataUser MetaDataPass UnifyMetaInstanceId不用填
当MetaType选择EMR_EXIT_META时，填写UnifyMetaInstanceId
当MetaType选择USER_CUSTOM_META时，填写MetaDataJdbcUrl MetaDataUser MetaDataPass
     * @param array $Tags 标签信息
     * @param LoginSettings $LoginSettings 登陆密码，LoginSettings中的Password字段
     * @param array $ExternalService 共享服务信息
     * @param integer $ZoneId 可用区id
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
    }
}

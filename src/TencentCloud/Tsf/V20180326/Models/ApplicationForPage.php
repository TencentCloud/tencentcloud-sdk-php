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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分页的应用描述信息字段
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getApplicationName() 获取应用名称
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
 * @method string getApplicationDesc() 获取应用描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationDesc(string $ApplicationDesc) 设置应用描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取应用类型
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
 * @method string getMicroserviceType() 获取微服务类型
 * @method void setMicroserviceType(string $MicroserviceType) 设置微服务类型
 * @method string getProgLang() 获取编程语言
 * @method void setProgLang(string $ProgLang) 设置编程语言
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getApplicationResourceType() 获取应用资源类型
 * @method void setApplicationResourceType(string $ApplicationResourceType) 设置应用资源类型
 * @method string getApplicationRuntimeType() 获取应用runtime类型
 * @method void setApplicationRuntimeType(string $ApplicationRuntimeType) 设置应用runtime类型
 * @method string getApigatewayServiceId() 获取Apigateway的serviceId
 * @method void setApigatewayServiceId(string $ApigatewayServiceId) 设置Apigateway的serviceId
 * @method string getApplicationRemarkName() 获取应用备注名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationRemarkName(string $ApplicationRemarkName) 设置应用备注名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceConfigList() 获取服务配置信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceConfigList(array $ServiceConfigList) 设置服务配置信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIgnoreCreateImageRepository() 获取IgnoreCreateImageRepository
 * @method void setIgnoreCreateImageRepository(boolean $IgnoreCreateImageRepository) 设置IgnoreCreateImageRepository
 * @method string getApmInstanceId() 获取Apm业务系统id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApmInstanceId(string $ApmInstanceId) 设置Apm业务系统id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApmInstanceName() 获取Apm业务系统Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApmInstanceName(string $ApmInstanceName) 设置Apm业务系统Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSyncDeleteImageRepository() 获取同步删除镜像仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSyncDeleteImageRepository(boolean $SyncDeleteImageRepository) 设置同步删除镜像仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceSubType() 获取应用微服务子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceSubType(string $MicroserviceSubType) 设置应用微服务子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProgramLanguage() 获取应用编程语言类型
 * @method void setProgramLanguage(string $ProgramLanguage) 设置应用编程语言类型
 * @method string getFrameworkType() 获取开发框架类型[SpringCloud，Dubbo，Go-GRPC，Other]
 * @method void setFrameworkType(string $FrameworkType) 设置开发框架类型[SpringCloud，Dubbo，Go-GRPC，Other]
 * @method ServiceGovernanceConfig getServiceGovernanceConfig() 获取注册配置治理信息
 * @method void setServiceGovernanceConfig(ServiceGovernanceConfig $ServiceGovernanceConfig) 设置注册配置治理信息
 * @method array getMicroserviceTypeList() 获取微服务类型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceTypeList(array $MicroserviceTypeList) 设置微服务类型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCreateSameNameImageRepository() 获取是否同时创建镜像仓库
 * @method void setCreateSameNameImageRepository(boolean $CreateSameNameImageRepository) 设置是否同时创建镜像仓库
 */
class ApplicationForPage extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
     */
    public $ApplicationName;

    /**
     * @var string 应用描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationDesc;

    /**
     * @var string 应用类型
     */
    public $ApplicationType;

    /**
     * @var string 微服务类型
     */
    public $MicroserviceType;

    /**
     * @var string 编程语言
     */
    public $ProgLang;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 应用资源类型
     */
    public $ApplicationResourceType;

    /**
     * @var string 应用runtime类型
     */
    public $ApplicationRuntimeType;

    /**
     * @var string Apigateway的serviceId
     */
    public $ApigatewayServiceId;

    /**
     * @var string 应用备注名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationRemarkName;

    /**
     * @var array 服务配置信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceConfigList;

    /**
     * @var boolean IgnoreCreateImageRepository
     */
    public $IgnoreCreateImageRepository;

    /**
     * @var string Apm业务系统id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApmInstanceId;

    /**
     * @var string Apm业务系统Name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApmInstanceName;

    /**
     * @var boolean 同步删除镜像仓库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SyncDeleteImageRepository;

    /**
     * @var string 应用微服务子类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceSubType;

    /**
     * @var string 应用编程语言类型
     */
    public $ProgramLanguage;

    /**
     * @var string 开发框架类型[SpringCloud，Dubbo，Go-GRPC，Other]
     */
    public $FrameworkType;

    /**
     * @var ServiceGovernanceConfig 注册配置治理信息
     */
    public $ServiceGovernanceConfig;

    /**
     * @var array 微服务类型列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceTypeList;

    /**
     * @var boolean 是否同时创建镜像仓库
     */
    public $CreateSameNameImageRepository;

    /**
     * @param string $ApplicationId 应用ID
     * @param string $ApplicationName 应用名称
     * @param string $ApplicationDesc 应用描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType 应用类型
     * @param string $MicroserviceType 微服务类型
     * @param string $ProgLang 编程语言
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $ApplicationResourceType 应用资源类型
     * @param string $ApplicationRuntimeType 应用runtime类型
     * @param string $ApigatewayServiceId Apigateway的serviceId
     * @param string $ApplicationRemarkName 应用备注名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceConfigList 服务配置信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IgnoreCreateImageRepository IgnoreCreateImageRepository
     * @param string $ApmInstanceId Apm业务系统id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApmInstanceName Apm业务系统Name
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SyncDeleteImageRepository 同步删除镜像仓库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceSubType 应用微服务子类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProgramLanguage 应用编程语言类型
     * @param string $FrameworkType 开发框架类型[SpringCloud，Dubbo，Go-GRPC，Other]
     * @param ServiceGovernanceConfig $ServiceGovernanceConfig 注册配置治理信息
     * @param array $MicroserviceTypeList 微服务类型列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CreateSameNameImageRepository 是否同时创建镜像仓库
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationDesc",$param) and $param["ApplicationDesc"] !== null) {
            $this->ApplicationDesc = $param["ApplicationDesc"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("ProgLang",$param) and $param["ProgLang"] !== null) {
            $this->ProgLang = $param["ProgLang"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ApplicationResourceType",$param) and $param["ApplicationResourceType"] !== null) {
            $this->ApplicationResourceType = $param["ApplicationResourceType"];
        }

        if (array_key_exists("ApplicationRuntimeType",$param) and $param["ApplicationRuntimeType"] !== null) {
            $this->ApplicationRuntimeType = $param["ApplicationRuntimeType"];
        }

        if (array_key_exists("ApigatewayServiceId",$param) and $param["ApigatewayServiceId"] !== null) {
            $this->ApigatewayServiceId = $param["ApigatewayServiceId"];
        }

        if (array_key_exists("ApplicationRemarkName",$param) and $param["ApplicationRemarkName"] !== null) {
            $this->ApplicationRemarkName = $param["ApplicationRemarkName"];
        }

        if (array_key_exists("ServiceConfigList",$param) and $param["ServiceConfigList"] !== null) {
            $this->ServiceConfigList = [];
            foreach ($param["ServiceConfigList"] as $key => $value){
                $obj = new ServiceConfig();
                $obj->deserialize($value);
                array_push($this->ServiceConfigList, $obj);
            }
        }

        if (array_key_exists("IgnoreCreateImageRepository",$param) and $param["IgnoreCreateImageRepository"] !== null) {
            $this->IgnoreCreateImageRepository = $param["IgnoreCreateImageRepository"];
        }

        if (array_key_exists("ApmInstanceId",$param) and $param["ApmInstanceId"] !== null) {
            $this->ApmInstanceId = $param["ApmInstanceId"];
        }

        if (array_key_exists("ApmInstanceName",$param) and $param["ApmInstanceName"] !== null) {
            $this->ApmInstanceName = $param["ApmInstanceName"];
        }

        if (array_key_exists("SyncDeleteImageRepository",$param) and $param["SyncDeleteImageRepository"] !== null) {
            $this->SyncDeleteImageRepository = $param["SyncDeleteImageRepository"];
        }

        if (array_key_exists("MicroserviceSubType",$param) and $param["MicroserviceSubType"] !== null) {
            $this->MicroserviceSubType = $param["MicroserviceSubType"];
        }

        if (array_key_exists("ProgramLanguage",$param) and $param["ProgramLanguage"] !== null) {
            $this->ProgramLanguage = $param["ProgramLanguage"];
        }

        if (array_key_exists("FrameworkType",$param) and $param["FrameworkType"] !== null) {
            $this->FrameworkType = $param["FrameworkType"];
        }

        if (array_key_exists("ServiceGovernanceConfig",$param) and $param["ServiceGovernanceConfig"] !== null) {
            $this->ServiceGovernanceConfig = new ServiceGovernanceConfig();
            $this->ServiceGovernanceConfig->deserialize($param["ServiceGovernanceConfig"]);
        }

        if (array_key_exists("MicroserviceTypeList",$param) and $param["MicroserviceTypeList"] !== null) {
            $this->MicroserviceTypeList = $param["MicroserviceTypeList"];
        }

        if (array_key_exists("CreateSameNameImageRepository",$param) and $param["CreateSameNameImageRepository"] !== null) {
            $this->CreateSameNameImageRepository = $param["CreateSameNameImageRepository"];
        }
    }
}

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
 * 简单应用
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getApplicationName() 获取应用名称
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
 * @method string getApplicationType() 获取应用类型
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
 * @method string getMicroserviceType() 获取应用微服务类型
 * @method void setMicroserviceType(string $MicroserviceType) 设置应用微服务类型
 * @method string getApplicationDesc() 获取ApplicationDesc
 * @method void setApplicationDesc(string $ApplicationDesc) 设置ApplicationDesc
 * @method string getProgLang() 获取ProgLang
 * @method void setProgLang(string $ProgLang) 设置ProgLang
 * @method string getApplicationResourceType() 获取ApplicationResourceType
 * @method void setApplicationResourceType(string $ApplicationResourceType) 设置ApplicationResourceType
 * @method string getCreateTime() 获取CreateTime
 * @method void setCreateTime(string $CreateTime) 设置CreateTime
 * @method string getUpdateTime() 获取UpdateTime
 * @method void setUpdateTime(string $UpdateTime) 设置UpdateTime
 * @method string getApigatewayServiceId() 获取ApigatewayServiceId
 * @method void setApigatewayServiceId(string $ApigatewayServiceId) 设置ApigatewayServiceId
 * @method string getApplicationRuntimeType() 获取ApplicationRuntimeType
 * @method void setApplicationRuntimeType(string $ApplicationRuntimeType) 设置ApplicationRuntimeType
 * @method string getAmpInstanceId() 获取Apm业务系统id
 * @method void setAmpInstanceId(string $AmpInstanceId) 设置Apm业务系统id
 * @method string getApmInstanceName() 获取Apm业务系统Name
 * @method void setApmInstanceName(string $ApmInstanceName) 设置Apm业务系统Name
 */
class SimpleApplication extends AbstractModel
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
     * @var string 应用类型
     */
    public $ApplicationType;

    /**
     * @var string 应用微服务类型
     */
    public $MicroserviceType;

    /**
     * @var string ApplicationDesc
     */
    public $ApplicationDesc;

    /**
     * @var string ProgLang
     */
    public $ProgLang;

    /**
     * @var string ApplicationResourceType
     */
    public $ApplicationResourceType;

    /**
     * @var string CreateTime
     */
    public $CreateTime;

    /**
     * @var string UpdateTime
     */
    public $UpdateTime;

    /**
     * @var string ApigatewayServiceId
     */
    public $ApigatewayServiceId;

    /**
     * @var string ApplicationRuntimeType
     */
    public $ApplicationRuntimeType;

    /**
     * @var string Apm业务系统id
     */
    public $AmpInstanceId;

    /**
     * @var string Apm业务系统Name
     */
    public $ApmInstanceName;

    /**
     * @param string $ApplicationId 应用ID
     * @param string $ApplicationName 应用名称
     * @param string $ApplicationType 应用类型
     * @param string $MicroserviceType 应用微服务类型
     * @param string $ApplicationDesc ApplicationDesc
     * @param string $ProgLang ProgLang
     * @param string $ApplicationResourceType ApplicationResourceType
     * @param string $CreateTime CreateTime
     * @param string $UpdateTime UpdateTime
     * @param string $ApigatewayServiceId ApigatewayServiceId
     * @param string $ApplicationRuntimeType ApplicationRuntimeType
     * @param string $AmpInstanceId Apm业务系统id
     * @param string $ApmInstanceName Apm业务系统Name
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

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("ApplicationDesc",$param) and $param["ApplicationDesc"] !== null) {
            $this->ApplicationDesc = $param["ApplicationDesc"];
        }

        if (array_key_exists("ProgLang",$param) and $param["ProgLang"] !== null) {
            $this->ProgLang = $param["ProgLang"];
        }

        if (array_key_exists("ApplicationResourceType",$param) and $param["ApplicationResourceType"] !== null) {
            $this->ApplicationResourceType = $param["ApplicationResourceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ApigatewayServiceId",$param) and $param["ApigatewayServiceId"] !== null) {
            $this->ApigatewayServiceId = $param["ApigatewayServiceId"];
        }

        if (array_key_exists("ApplicationRuntimeType",$param) and $param["ApplicationRuntimeType"] !== null) {
            $this->ApplicationRuntimeType = $param["ApplicationRuntimeType"];
        }

        if (array_key_exists("AmpInstanceId",$param) and $param["AmpInstanceId"] !== null) {
            $this->AmpInstanceId = $param["AmpInstanceId"];
        }

        if (array_key_exists("ApmInstanceName",$param) and $param["ApmInstanceName"] !== null) {
            $this->ApmInstanceName = $param["ApmInstanceName"];
        }
    }
}

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
 * ModifyApplication请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID，可通过调用[DescribeApplications](https://cloud.tencent.com/document/api/649/36090)查询已创建的应用列表或登录控制台进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/api/649/36094)创建新的应用。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，可通过调用[DescribeApplications](https://cloud.tencent.com/document/api/649/36090)查询已创建的应用列表或登录控制台进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/api/649/36094)创建新的应用。
 * @method string getApplicationName() 获取应用名称
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
 * @method string getApplicationDesc() 获取应用备注
 * @method void setApplicationDesc(string $ApplicationDesc) 设置应用备注
 * @method string getApplicationRemarkName() 获取应用备注名
 * @method void setApplicationRemarkName(string $ApplicationRemarkName) 设置应用备注名
 * @method array getServiceConfigList() 获取服务配置信息列表
 * @method void setServiceConfigList(array $ServiceConfigList) 设置服务配置信息列表
 * @method string getMicroserviceType() 获取应用的微服务类型，N表示普通应用，M表示Mesh应用，G表示网关应用，NATIVE表示原生应用，RAW表示裸应用
 * @method void setMicroserviceType(string $MicroserviceType) 设置应用的微服务类型，N表示普通应用，M表示Mesh应用，G表示网关应用，NATIVE表示原生应用，RAW表示裸应用
 * @method ServiceGovernanceConfig getServiceGovernanceConfig() 获取注册配置治理信息
 * @method void setServiceGovernanceConfig(ServiceGovernanceConfig $ServiceGovernanceConfig) 设置注册配置治理信息
 * @method string getFrameworkType() 获取应用开发框架，SpringCloud表示SpringCloud应用，Dubbo表示Dubbo应用，Go-GRPC表示Go-GRPC应用，Other表示其他应用
 * @method void setFrameworkType(string $FrameworkType) 设置应用开发框架，SpringCloud表示SpringCloud应用，Dubbo表示Dubbo应用，Go-GRPC表示Go-GRPC应用，Other表示其他应用
 */
class ModifyApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用ID，可通过调用[DescribeApplications](https://cloud.tencent.com/document/api/649/36090)查询已创建的应用列表或登录控制台进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/api/649/36094)创建新的应用。
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
     */
    public $ApplicationName;

    /**
     * @var string 应用备注
     */
    public $ApplicationDesc;

    /**
     * @var string 应用备注名
     */
    public $ApplicationRemarkName;

    /**
     * @var array 服务配置信息列表
     */
    public $ServiceConfigList;

    /**
     * @var string 应用的微服务类型，N表示普通应用，M表示Mesh应用，G表示网关应用，NATIVE表示原生应用，RAW表示裸应用
     */
    public $MicroserviceType;

    /**
     * @var ServiceGovernanceConfig 注册配置治理信息
     */
    public $ServiceGovernanceConfig;

    /**
     * @var string 应用开发框架，SpringCloud表示SpringCloud应用，Dubbo表示Dubbo应用，Go-GRPC表示Go-GRPC应用，Other表示其他应用
     */
    public $FrameworkType;

    /**
     * @param string $ApplicationId 应用ID，可通过调用[DescribeApplications](https://cloud.tencent.com/document/api/649/36090)查询已创建的应用列表或登录控制台进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/api/649/36094)创建新的应用。
     * @param string $ApplicationName 应用名称
     * @param string $ApplicationDesc 应用备注
     * @param string $ApplicationRemarkName 应用备注名
     * @param array $ServiceConfigList 服务配置信息列表
     * @param string $MicroserviceType 应用的微服务类型，N表示普通应用，M表示Mesh应用，G表示网关应用，NATIVE表示原生应用，RAW表示裸应用
     * @param ServiceGovernanceConfig $ServiceGovernanceConfig 注册配置治理信息
     * @param string $FrameworkType 应用开发框架，SpringCloud表示SpringCloud应用，Dubbo表示Dubbo应用，Go-GRPC表示Go-GRPC应用，Other表示其他应用
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

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("ServiceGovernanceConfig",$param) and $param["ServiceGovernanceConfig"] !== null) {
            $this->ServiceGovernanceConfig = new ServiceGovernanceConfig();
            $this->ServiceGovernanceConfig->deserialize($param["ServiceGovernanceConfig"]);
        }

        if (array_key_exists("FrameworkType",$param) and $param["FrameworkType"] !== null) {
            $this->FrameworkType = $param["FrameworkType"];
        }
    }
}

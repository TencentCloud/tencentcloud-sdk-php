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
 * CreateApplication请求参数结构体
 *
 * @method string getApplicationName() 获取<p>应用名称，最长60字符</p>
 * @method void setApplicationName(string $ApplicationName) 设置<p>应用名称，最长60字符</p>
 * @method string getApplicationType() 获取<p>应用类型，V：虚拟机应用；C：容器应用；S：serverless应用</p>
 * @method void setApplicationType(string $ApplicationType) 设置<p>应用类型，V：虚拟机应用；C：容器应用；S：serverless应用</p>
 * @method string getMicroserviceType() 获取<p>应用微服务类型，M：service mesh应用；N：普通应用；G：网关应用</p>
 * @method void setMicroserviceType(string $MicroserviceType) 设置<p>应用微服务类型，M：service mesh应用；N：普通应用；G：网关应用</p>
 * @method string getApplicationDesc() 获取<p>应用描述</p>
 * @method void setApplicationDesc(string $ApplicationDesc) 设置<p>应用描述</p>
 * @method string getApplicationLogConfig() 获取<p>应用日志配置项，废弃参数</p>
 * @method void setApplicationLogConfig(string $ApplicationLogConfig) 设置<p>应用日志配置项，废弃参数</p>
 * @method string getApplicationResourceType() 获取<p>应用资源类型，废弃参数</p>
 * @method void setApplicationResourceType(string $ApplicationResourceType) 设置<p>应用资源类型，废弃参数</p>
 * @method string getApplicationRuntimeType() 获取<p>应用runtime类型</p>
 * @method void setApplicationRuntimeType(string $ApplicationRuntimeType) 设置<p>应用runtime类型</p>
 * @method string getProgramId() 获取<p>【数据集ID】。可通过调用<a href="https://cloud.tencent.com/document/product/649/73477">DescribePrograms</a>查询已创建的数据集列表或登录<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program&amp;roleId=role-a26486wy">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/108544">CreateProgram</a>创建新的数据集。</p>
 * @method void setProgramId(string $ProgramId) 设置<p>【数据集ID】。可通过调用<a href="https://cloud.tencent.com/document/product/649/73477">DescribePrograms</a>查询已创建的数据集列表或登录<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program&amp;roleId=role-a26486wy">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/108544">CreateProgram</a>创建新的数据集。</p>
 * @method array getServiceConfigList() 获取<p>服务配置信息列表</p>
 * @method void setServiceConfigList(array $ServiceConfigList) 设置<p>服务配置信息列表</p>
 * @method boolean getIgnoreCreateImageRepository() 获取<p>忽略创建镜像仓库</p>
 * @method void setIgnoreCreateImageRepository(boolean $IgnoreCreateImageRepository) 设置<p>忽略创建镜像仓库</p>
 * @method array getProgramIdList() 获取<p>数据集id列表</p>
 * @method void setProgramIdList(array $ProgramIdList) 设置<p>数据集id列表</p>
 * @method string getApmInstanceId() 获取<p>apm业务系统id</p>
 * @method void setApmInstanceId(string $ApmInstanceId) 设置<p>apm业务系统id</p>
 * @method string getProgramLanguage() 获取<p>编程语言:  Java；C/C++；Python；Go；Other</p>
 * @method void setProgramLanguage(string $ProgramLanguage) 设置<p>编程语言:  Java；C/C++；Python；Go；Other</p>
 * @method string getFrameworkType() 获取<p>开发框架-SpringCloud/Dubbo/Go-GRPC/Other</p>
 * @method void setFrameworkType(string $FrameworkType) 设置<p>开发框架-SpringCloud/Dubbo/Go-GRPC/Other</p>
 * @method ServiceGovernanceConfig getServiceGovernanceConfig() 获取<p>注册配置治理，关闭注册配置治理或者使用北极星注册中心时必须传值</p>
 * @method void setServiceGovernanceConfig(ServiceGovernanceConfig $ServiceGovernanceConfig) 设置<p>注册配置治理，关闭注册配置治理或者使用北极星注册中心时必须传值</p>
 * @method boolean getCreateSameNameImageRepository() 获取<p>是否创建并关联同名镜像仓库</p>
 * @method void setCreateSameNameImageRepository(boolean $CreateSameNameImageRepository) 设置<p>是否创建并关联同名镜像仓库</p>
 */
class CreateApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>应用名称，最长60字符</p>
     */
    public $ApplicationName;

    /**
     * @var string <p>应用类型，V：虚拟机应用；C：容器应用；S：serverless应用</p>
     */
    public $ApplicationType;

    /**
     * @var string <p>应用微服务类型，M：service mesh应用；N：普通应用；G：网关应用</p>
     */
    public $MicroserviceType;

    /**
     * @var string <p>应用描述</p>
     */
    public $ApplicationDesc;

    /**
     * @var string <p>应用日志配置项，废弃参数</p>
     * @deprecated
     */
    public $ApplicationLogConfig;

    /**
     * @var string <p>应用资源类型，废弃参数</p>
     * @deprecated
     */
    public $ApplicationResourceType;

    /**
     * @var string <p>应用runtime类型</p>
     */
    public $ApplicationRuntimeType;

    /**
     * @var string <p>【数据集ID】。可通过调用<a href="https://cloud.tencent.com/document/product/649/73477">DescribePrograms</a>查询已创建的数据集列表或登录<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program&amp;roleId=role-a26486wy">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/108544">CreateProgram</a>创建新的数据集。</p>
     */
    public $ProgramId;

    /**
     * @var array <p>服务配置信息列表</p>
     */
    public $ServiceConfigList;

    /**
     * @var boolean <p>忽略创建镜像仓库</p>
     */
    public $IgnoreCreateImageRepository;

    /**
     * @var array <p>数据集id列表</p>
     */
    public $ProgramIdList;

    /**
     * @var string <p>apm业务系统id</p>
     */
    public $ApmInstanceId;

    /**
     * @var string <p>编程语言:  Java；C/C++；Python；Go；Other</p>
     */
    public $ProgramLanguage;

    /**
     * @var string <p>开发框架-SpringCloud/Dubbo/Go-GRPC/Other</p>
     */
    public $FrameworkType;

    /**
     * @var ServiceGovernanceConfig <p>注册配置治理，关闭注册配置治理或者使用北极星注册中心时必须传值</p>
     */
    public $ServiceGovernanceConfig;

    /**
     * @var boolean <p>是否创建并关联同名镜像仓库</p>
     */
    public $CreateSameNameImageRepository;

    /**
     * @param string $ApplicationName <p>应用名称，最长60字符</p>
     * @param string $ApplicationType <p>应用类型，V：虚拟机应用；C：容器应用；S：serverless应用</p>
     * @param string $MicroserviceType <p>应用微服务类型，M：service mesh应用；N：普通应用；G：网关应用</p>
     * @param string $ApplicationDesc <p>应用描述</p>
     * @param string $ApplicationLogConfig <p>应用日志配置项，废弃参数</p>
     * @param string $ApplicationResourceType <p>应用资源类型，废弃参数</p>
     * @param string $ApplicationRuntimeType <p>应用runtime类型</p>
     * @param string $ProgramId <p>【数据集ID】。可通过调用<a href="https://cloud.tencent.com/document/product/649/73477">DescribePrograms</a>查询已创建的数据集列表或登录<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program&amp;roleId=role-a26486wy">控制台</a>进行查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/108544">CreateProgram</a>创建新的数据集。</p>
     * @param array $ServiceConfigList <p>服务配置信息列表</p>
     * @param boolean $IgnoreCreateImageRepository <p>忽略创建镜像仓库</p>
     * @param array $ProgramIdList <p>数据集id列表</p>
     * @param string $ApmInstanceId <p>apm业务系统id</p>
     * @param string $ProgramLanguage <p>编程语言:  Java；C/C++；Python；Go；Other</p>
     * @param string $FrameworkType <p>开发框架-SpringCloud/Dubbo/Go-GRPC/Other</p>
     * @param ServiceGovernanceConfig $ServiceGovernanceConfig <p>注册配置治理，关闭注册配置治理或者使用北极星注册中心时必须传值</p>
     * @param boolean $CreateSameNameImageRepository <p>是否创建并关联同名镜像仓库</p>
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

        if (array_key_exists("ApplicationLogConfig",$param) and $param["ApplicationLogConfig"] !== null) {
            $this->ApplicationLogConfig = $param["ApplicationLogConfig"];
        }

        if (array_key_exists("ApplicationResourceType",$param) and $param["ApplicationResourceType"] !== null) {
            $this->ApplicationResourceType = $param["ApplicationResourceType"];
        }

        if (array_key_exists("ApplicationRuntimeType",$param) and $param["ApplicationRuntimeType"] !== null) {
            $this->ApplicationRuntimeType = $param["ApplicationRuntimeType"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
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

        if (array_key_exists("ProgramIdList",$param) and $param["ProgramIdList"] !== null) {
            $this->ProgramIdList = $param["ProgramIdList"];
        }

        if (array_key_exists("ApmInstanceId",$param) and $param["ApmInstanceId"] !== null) {
            $this->ApmInstanceId = $param["ApmInstanceId"];
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

        if (array_key_exists("CreateSameNameImageRepository",$param) and $param["CreateSameNameImageRepository"] !== null) {
            $this->CreateSameNameImageRepository = $param["CreateSameNameImageRepository"];
        }
    }
}

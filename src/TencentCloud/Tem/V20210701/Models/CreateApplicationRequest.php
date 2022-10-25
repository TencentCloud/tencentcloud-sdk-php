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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplication请求参数结构体
 *
 * @method string getApplicationName() 获取应用名
 * @method void setApplicationName(string $ApplicationName) 设置应用名
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method integer getUseDefaultImageService() 获取是否使用默认镜像服务 1-是，0-否
 * @method void setUseDefaultImageService(integer $UseDefaultImageService) 设置是否使用默认镜像服务 1-是，0-否
 * @method integer getRepoType() 获取如果是绑定仓库，绑定的仓库类型，0-个人版，1-企业版
 * @method void setRepoType(integer $RepoType) 设置如果是绑定仓库，绑定的仓库类型，0-个人版，1-企业版
 * @method string getInstanceId() 获取企业版镜像服务的实例id
 * @method void setInstanceId(string $InstanceId) 设置企业版镜像服务的实例id
 * @method string getRepoServer() 获取绑定镜像服务器地址
 * @method void setRepoServer(string $RepoServer) 设置绑定镜像服务器地址
 * @method string getRepoName() 获取绑定镜像仓库名
 * @method void setRepoName(string $RepoName) 设置绑定镜像仓库名
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method array getSubnetList() 获取应用所在子网
 * @method void setSubnetList(array $SubnetList) 设置应用所在子网
 * @method string getCodingLanguage() 获取编程语言 
- JAVA
- OTHER
 * @method void setCodingLanguage(string $CodingLanguage) 设置编程语言 
- JAVA
- OTHER
 * @method string getDeployMode() 获取部署方式 
- IMAGE
- JAR
- WAR
 * @method void setDeployMode(string $DeployMode) 设置部署方式 
- IMAGE
- JAR
- WAR
 * @method integer getEnableTracing() 获取是否开启 Java 应用的 APM 自动上报功能，1 表示启用；0 表示关闭
 * @method void setEnableTracing(integer $EnableTracing) 设置是否开启 Java 应用的 APM 自动上报功能，1 表示启用；0 表示关闭
 * @method UseDefaultRepoParameters getUseDefaultImageServiceParameters() 获取使用默认镜像服务额外参数
 * @method void setUseDefaultImageServiceParameters(UseDefaultRepoParameters $UseDefaultImageServiceParameters) 设置使用默认镜像服务额外参数
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class CreateApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用名
     */
    public $ApplicationName;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var integer 是否使用默认镜像服务 1-是，0-否
     */
    public $UseDefaultImageService;

    /**
     * @var integer 如果是绑定仓库，绑定的仓库类型，0-个人版，1-企业版
     */
    public $RepoType;

    /**
     * @var string 企业版镜像服务的实例id
     */
    public $InstanceId;

    /**
     * @var string 绑定镜像服务器地址
     */
    public $RepoServer;

    /**
     * @var string 绑定镜像仓库名
     */
    public $RepoName;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var array 应用所在子网
     */
    public $SubnetList;

    /**
     * @var string 编程语言 
- JAVA
- OTHER
     */
    public $CodingLanguage;

    /**
     * @var string 部署方式 
- IMAGE
- JAR
- WAR
     */
    public $DeployMode;

    /**
     * @var integer 是否开启 Java 应用的 APM 自动上报功能，1 表示启用；0 表示关闭
     */
    public $EnableTracing;

    /**
     * @var UseDefaultRepoParameters 使用默认镜像服务额外参数
     */
    public $UseDefaultImageServiceParameters;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param string $ApplicationName 应用名
     * @param string $Description 描述
     * @param integer $UseDefaultImageService 是否使用默认镜像服务 1-是，0-否
     * @param integer $RepoType 如果是绑定仓库，绑定的仓库类型，0-个人版，1-企业版
     * @param string $InstanceId 企业版镜像服务的实例id
     * @param string $RepoServer 绑定镜像服务器地址
     * @param string $RepoName 绑定镜像仓库名
     * @param integer $SourceChannel 来源渠道
     * @param array $SubnetList 应用所在子网
     * @param string $CodingLanguage 编程语言 
- JAVA
- OTHER
     * @param string $DeployMode 部署方式 
- IMAGE
- JAR
- WAR
     * @param integer $EnableTracing 是否开启 Java 应用的 APM 自动上报功能，1 表示启用；0 表示关闭
     * @param UseDefaultRepoParameters $UseDefaultImageServiceParameters 使用默认镜像服务额外参数
     * @param array $Tags 标签
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UseDefaultImageService",$param) and $param["UseDefaultImageService"] !== null) {
            $this->UseDefaultImageService = $param["UseDefaultImageService"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RepoServer",$param) and $param["RepoServer"] !== null) {
            $this->RepoServer = $param["RepoServer"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("SubnetList",$param) and $param["SubnetList"] !== null) {
            $this->SubnetList = $param["SubnetList"];
        }

        if (array_key_exists("CodingLanguage",$param) and $param["CodingLanguage"] !== null) {
            $this->CodingLanguage = $param["CodingLanguage"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("EnableTracing",$param) and $param["EnableTracing"] !== null) {
            $this->EnableTracing = $param["EnableTracing"];
        }

        if (array_key_exists("UseDefaultImageServiceParameters",$param) and $param["UseDefaultImageServiceParameters"] !== null) {
            $this->UseDefaultImageServiceParameters = new UseDefaultRepoParameters();
            $this->UseDefaultImageServiceParameters->deserialize($param["UseDefaultImageServiceParameters"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}

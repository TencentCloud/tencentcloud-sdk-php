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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudApp请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getServiceName() 获取<p>服务名</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名</p>
 * @method string getDeployType() 获取<p>部署类型</p>
 * @method void setDeployType(string $DeployType) 设置<p>部署类型</p>
 * @method string getBuildType() 获取<p>构建类型</p>
 * @method void setBuildType(string $BuildType) 设置<p>构建类型</p>
 * @method StaticConfig getStaticConfig() 获取<p>静态应用创建配置信息</p>
 * @method void setStaticConfig(StaticConfig $StaticConfig) 设置<p>静态应用创建配置信息</p>
 * @method BuildSource getSource() 获取<p>源码定义</p>
 * @method void setSource(BuildSource $Source) 设置<p>源码定义</p>
 * @method BuildCommands getCommands() 获取<p>Commands 与 CustomSteps 至少填一个</p>
 * @method void setCommands(BuildCommands $Commands) 设置<p>Commands 与 CustomSteps 至少填一个</p>
 * @method array getEnv() 获取<p>Commands 与 CustomSteps 至少填一个，docker 镜像构建场景强烈建议用 CustomSteps</p>
 * @method void setEnv(array $Env) 设置<p>Commands 与 CustomSteps 至少填一个，docker 镜像构建场景强烈建议用 CustomSteps</p>
 * @method array getCustomSteps() 获取<p>非敏感环境变量，构建容器中以 $KEY 引用</p>
 * @method void setCustomSteps(array $CustomSteps) 设置<p>非敏感环境变量，构建容器中以 $KEY 引用</p>
 * @method array getSecrets() 获取<p>敏感凭证（AES 加密落库），构建容器中以 $SECRET_NAME 引用</p>
 * @method void setSecrets(array $Secrets) 设置<p>敏感凭证（AES 加密落库），构建容器中以 $SECRET_NAME 引用</p>
 * @method string getNodeJsVersion() 获取<p>选择 NodeRuntime 版本: 16,18,20,22,24 等</p>
 * @method void setNodeJsVersion(string $NodeJsVersion) 设置<p>选择 NodeRuntime 版本: 16,18,20,22,24 等</p>
 */
class CreateCloudAppRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>服务名</p>
     */
    public $ServiceName;

    /**
     * @var string <p>部署类型</p>
     */
    public $DeployType;

    /**
     * @var string <p>构建类型</p>
     */
    public $BuildType;

    /**
     * @var StaticConfig <p>静态应用创建配置信息</p>
     */
    public $StaticConfig;

    /**
     * @var BuildSource <p>源码定义</p>
     */
    public $Source;

    /**
     * @var BuildCommands <p>Commands 与 CustomSteps 至少填一个</p>
     */
    public $Commands;

    /**
     * @var array <p>Commands 与 CustomSteps 至少填一个，docker 镜像构建场景强烈建议用 CustomSteps</p>
     */
    public $Env;

    /**
     * @var array <p>非敏感环境变量，构建容器中以 $KEY 引用</p>
     */
    public $CustomSteps;

    /**
     * @var array <p>敏感凭证（AES 加密落库），构建容器中以 $SECRET_NAME 引用</p>
     */
    public $Secrets;

    /**
     * @var string <p>选择 NodeRuntime 版本: 16,18,20,22,24 等</p>
     */
    public $NodeJsVersion;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $ServiceName <p>服务名</p>
     * @param string $DeployType <p>部署类型</p>
     * @param string $BuildType <p>构建类型</p>
     * @param StaticConfig $StaticConfig <p>静态应用创建配置信息</p>
     * @param BuildSource $Source <p>源码定义</p>
     * @param BuildCommands $Commands <p>Commands 与 CustomSteps 至少填一个</p>
     * @param array $Env <p>Commands 与 CustomSteps 至少填一个，docker 镜像构建场景强烈建议用 CustomSteps</p>
     * @param array $CustomSteps <p>非敏感环境变量，构建容器中以 $KEY 引用</p>
     * @param array $Secrets <p>敏感凭证（AES 加密落库），构建容器中以 $SECRET_NAME 引用</p>
     * @param string $NodeJsVersion <p>选择 NodeRuntime 版本: 16,18,20,22,24 等</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("BuildType",$param) and $param["BuildType"] !== null) {
            $this->BuildType = $param["BuildType"];
        }

        if (array_key_exists("StaticConfig",$param) and $param["StaticConfig"] !== null) {
            $this->StaticConfig = new StaticConfig();
            $this->StaticConfig->deserialize($param["StaticConfig"]);
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new BuildSource();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("Commands",$param) and $param["Commands"] !== null) {
            $this->Commands = new BuildCommands();
            $this->Commands->deserialize($param["Commands"]);
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = [];
            foreach ($param["Env"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Env, $obj);
            }
        }

        if (array_key_exists("CustomSteps",$param) and $param["CustomSteps"] !== null) {
            $this->CustomSteps = [];
            foreach ($param["CustomSteps"] as $key => $value){
                $obj = new BuildStep();
                $obj->deserialize($value);
                array_push($this->CustomSteps, $obj);
            }
        }

        if (array_key_exists("Secrets",$param) and $param["Secrets"] !== null) {
            $this->Secrets = [];
            foreach ($param["Secrets"] as $key => $value){
                $obj = new BuildSecret();
                $obj->deserialize($value);
                array_push($this->Secrets, $obj);
            }
        }

        if (array_key_exists("NodeJsVersion",$param) and $param["NodeJsVersion"] !== null) {
            $this->NodeJsVersion = $param["NodeJsVersion"];
        }
    }
}

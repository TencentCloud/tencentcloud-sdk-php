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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Docker容器创建时的配置
 *
 * @method string getContainerImage() 获取容器镜像地址
 * @method void setContainerImage(string $ContainerImage) 设置容器镜像地址
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method array getEnvs() 获取环境变量列表
 * @method void setEnvs(array $Envs) 设置环境变量列表
 * @method array getPublishPorts() 获取容器端口主机端口映射列表
 * @method void setPublishPorts(array $PublishPorts) 设置容器端口主机端口映射列表
 * @method array getVolumes() 获取容器加载本地卷列表
 * @method void setVolumes(array $Volumes) 设置容器加载本地卷列表
 * @method string getCommand() 获取运行的命令
 * @method void setCommand(string $Command) 设置运行的命令
 */
class DockerContainerConfiguration extends AbstractModel
{
    /**
     * @var string 容器镜像地址
     */
    public $ContainerImage;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var array 环境变量列表
     */
    public $Envs;

    /**
     * @var array 容器端口主机端口映射列表
     */
    public $PublishPorts;

    /**
     * @var array 容器加载本地卷列表
     */
    public $Volumes;

    /**
     * @var string 运行的命令
     */
    public $Command;

    /**
     * @param string $ContainerImage 容器镜像地址
     * @param string $ContainerName 容器名称
     * @param array $Envs 环境变量列表
     * @param array $PublishPorts 容器端口主机端口映射列表
     * @param array $Volumes 容器加载本地卷列表
     * @param string $Command 运行的命令
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
        if (array_key_exists("ContainerImage",$param) and $param["ContainerImage"] !== null) {
            $this->ContainerImage = $param["ContainerImage"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new ContainerEnv();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("PublishPorts",$param) and $param["PublishPorts"] !== null) {
            $this->PublishPorts = [];
            foreach ($param["PublishPorts"] as $key => $value){
                $obj = new DockerContainerPublishPort();
                $obj->deserialize($value);
                array_push($this->PublishPorts, $obj);
            }
        }

        if (array_key_exists("Volumes",$param) and $param["Volumes"] !== null) {
            $this->Volumes = [];
            foreach ($param["Volumes"] as $key => $value){
                $obj = new DockerContainerVolume();
                $obj->deserialize($value);
                array_push($this->Volumes, $obj);
            }
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }
    }
}

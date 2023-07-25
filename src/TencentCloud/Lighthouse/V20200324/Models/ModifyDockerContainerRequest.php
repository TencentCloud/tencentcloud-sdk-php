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
 * ModifyDockerContainer请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getContainerId() 获取容器ID。
 * @method void setContainerId(string $ContainerId) 设置容器ID。
 * @method array getEnvs() 获取环境变量列表
 * @method void setEnvs(array $Envs) 设置环境变量列表
 * @method array getPublishPorts() 获取容器端口主机端口映射列表
 * @method void setPublishPorts(array $PublishPorts) 设置容器端口主机端口映射列表
 * @method array getVolumes() 获取容器加载本地卷列表
 * @method void setVolumes(array $Volumes) 设置容器加载本地卷列表
 * @method string getCommand() 获取运行的命令
 * @method void setCommand(string $Command) 设置运行的命令
 * @method string getRestartPolicy() 获取容器重启策略，对应docker "--restart"参数。

枚举值:
no: 不自动重启。默认策略。
on-failure[:max-retries]: 当容器退出码非0时重启容器。使用max-retries限制重启次数，比如on-failure:10，限制最多重启10次。
always: 只要容器退出就重启。
unless-stopped: 始终重新启动容器，包括在守护进程启动时，除非容器在 Docker 守护进程停止之前进入停止状态。
 * @method void setRestartPolicy(string $RestartPolicy) 设置容器重启策略，对应docker "--restart"参数。

枚举值:
no: 不自动重启。默认策略。
on-failure[:max-retries]: 当容器退出码非0时重启容器。使用max-retries限制重启次数，比如on-failure:10，限制最多重启10次。
always: 只要容器退出就重启。
unless-stopped: 始终重新启动容器，包括在守护进程启动时，除非容器在 Docker 守护进程停止之前进入停止状态。
 */
class ModifyDockerContainerRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 容器ID。
     */
    public $ContainerId;

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
     * @var string 容器重启策略，对应docker "--restart"参数。

枚举值:
no: 不自动重启。默认策略。
on-failure[:max-retries]: 当容器退出码非0时重启容器。使用max-retries限制重启次数，比如on-failure:10，限制最多重启10次。
always: 只要容器退出就重启。
unless-stopped: 始终重新启动容器，包括在守护进程启动时，除非容器在 Docker 守护进程停止之前进入停止状态。
     */
    public $RestartPolicy;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $ContainerId 容器ID。
     * @param array $Envs 环境变量列表
     * @param array $PublishPorts 容器端口主机端口映射列表
     * @param array $Volumes 容器加载本地卷列表
     * @param string $Command 运行的命令
     * @param string $RestartPolicy 容器重启策略，对应docker "--restart"参数。

枚举值:
no: 不自动重启。默认策略。
on-failure[:max-retries]: 当容器退出码非0时重启容器。使用max-retries限制重启次数，比如on-failure:10，限制最多重启10次。
always: 只要容器退出就重启。
unless-stopped: 始终重新启动容器，包括在守护进程启动时，除非容器在 Docker 守护进程停止之前进入停止状态。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
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

        if (array_key_exists("RestartPolicy",$param) and $param["RestartPolicy"] !== null) {
            $this->RestartPolicy = $param["RestartPolicy"];
        }
    }
}

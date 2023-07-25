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
 * Docker容器信息
 *
 * @method string getContainerId() 获取容器ID
 * @method void setContainerId(string $ContainerId) 设置容器ID
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getContainerImage() 获取容器镜像地址
 * @method void setContainerImage(string $ContainerImage) 设置容器镜像地址
 * @method string getCommand() 获取容器Command
 * @method void setCommand(string $Command) 设置容器Command
 * @method string getStatus() 获取容器状态描述
 * @method void setStatus(string $Status) 设置容器状态描述
 * @method string getState() 获取容器状态，和docker的容器状态保持一致，当前取值有：created, restarting, running, removing, paused, exited, or dead
 * @method void setState(string $State) 设置容器状态，和docker的容器状态保持一致，当前取值有：created, restarting, running, removing, paused, exited, or dead
 * @method array getPublishPortSet() 获取容器端口主机端口映射列表
 * @method void setPublishPortSet(array $PublishPortSet) 设置容器端口主机端口映射列表
 * @method array getVolumeSet() 获取容器挂载本地卷列表
 * @method void setVolumeSet(array $VolumeSet) 设置容器挂载本地卷列表
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
 */
class DockerContainer extends AbstractModel
{
    /**
     * @var string 容器ID
     */
    public $ContainerId;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string 容器镜像地址
     */
    public $ContainerImage;

    /**
     * @var string 容器Command
     */
    public $Command;

    /**
     * @var string 容器状态描述
     */
    public $Status;

    /**
     * @var string 容器状态，和docker的容器状态保持一致，当前取值有：created, restarting, running, removing, paused, exited, or dead
     */
    public $State;

    /**
     * @var array 容器端口主机端口映射列表
     */
    public $PublishPortSet;

    /**
     * @var array 容器挂载本地卷列表
     */
    public $VolumeSet;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
     */
    public $CreatedTime;

    /**
     * @param string $ContainerId 容器ID
     * @param string $ContainerName 容器名称
     * @param string $ContainerImage 容器镜像地址
     * @param string $Command 容器Command
     * @param string $Status 容器状态描述
     * @param string $State 容器状态，和docker的容器状态保持一致，当前取值有：created, restarting, running, removing, paused, exited, or dead
     * @param array $PublishPortSet 容器端口主机端口映射列表
     * @param array $VolumeSet 容器挂载本地卷列表
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
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
        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerImage",$param) and $param["ContainerImage"] !== null) {
            $this->ContainerImage = $param["ContainerImage"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PublishPortSet",$param) and $param["PublishPortSet"] !== null) {
            $this->PublishPortSet = [];
            foreach ($param["PublishPortSet"] as $key => $value){
                $obj = new DockerContainerPublishPort();
                $obj->deserialize($value);
                array_push($this->PublishPortSet, $obj);
            }
        }

        if (array_key_exists("VolumeSet",$param) and $param["VolumeSet"] !== null) {
            $this->VolumeSet = [];
            foreach ($param["VolumeSet"] as $key => $value){
                $obj = new DockerContainerVolume();
                $obj->deserialize($value);
                array_push($this->VolumeSet, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}

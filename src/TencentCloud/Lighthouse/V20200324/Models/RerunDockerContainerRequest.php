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
 * RerunDockerContainer请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method DockerContainerConfiguration getContainerConfiguration() 获取重新创建的容器配置。
 * @method void setContainerConfiguration(DockerContainerConfiguration $ContainerConfiguration) 设置重新创建的容器配置。
 * @method string getContainerId() 获取容器ID。
 * @method void setContainerId(string $ContainerId) 设置容器ID。
 */
class RerunDockerContainerRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var DockerContainerConfiguration 重新创建的容器配置。
     */
    public $ContainerConfiguration;

    /**
     * @var string 容器ID。
     */
    public $ContainerId;

    /**
     * @param string $InstanceId 实例ID。
     * @param DockerContainerConfiguration $ContainerConfiguration 重新创建的容器配置。
     * @param string $ContainerId 容器ID。
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

        if (array_key_exists("ContainerConfiguration",$param) and $param["ContainerConfiguration"] !== null) {
            $this->ContainerConfiguration = new DockerContainerConfiguration();
            $this->ContainerConfiguration->deserialize($param["ContainerConfiguration"]);
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }
    }
}

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
 * Agent 创建云函数镜像配置
 *
 * @method string getImageType() 获取镜像仓库类型，个人版或者企业版：personal/enterprise
 * @method void setImageType(string $ImageType) 设置镜像仓库类型，个人版或者企业版：personal/enterprise
 * @method string getImageUri() 获取{domain}/{namespace}/{imageName}:{tag}@{digest}
 * @method void setImageUri(string $ImageUri) 设置{domain}/{namespace}/{imageName}:{tag}@{digest}
 * @method string getRegistryId() 获取用于企业版TCR获取镜像拉取临时凭证，ImageType为"enterprise"时必填
 * @method void setRegistryId(string $RegistryId) 设置用于企业版TCR获取镜像拉取临时凭证，ImageType为"enterprise"时必填
 * @method string getCommand() 获取容器的启动命令。该参数为可选参数，如果不填写，则默认使用 Dockerfile 中的 Entrypoint。传入规范，填写可运行的指令，例如 python
 * @method void setCommand(string $Command) 设置容器的启动命令。该参数为可选参数，如果不填写，则默认使用 Dockerfile 中的 Entrypoint。传入规范，填写可运行的指令，例如 python
 * @method string getArgs() 获取容器的启动参数。该参数为可选参数，如果不填写，则默认使用 Dockerfile 中的 CMD。传入规范，以“空格”作为参数的分割标识，例如 -u app.py
 * @method void setArgs(string $Args) 设置容器的启动参数。该参数为可选参数，如果不填写，则默认使用 Dockerfile 中的 CMD。传入规范，以“空格”作为参数的分割标识，例如 -u app.py
 * @method boolean getContainerImageAccelerate() 获取镜像加速开关，默认False
 * @method void setContainerImageAccelerate(boolean $ContainerImageAccelerate) 设置镜像加速开关，默认False
 */
class AgentRuntimeCodeImageConfig extends AbstractModel
{
    /**
     * @var string 镜像仓库类型，个人版或者企业版：personal/enterprise
     */
    public $ImageType;

    /**
     * @var string {domain}/{namespace}/{imageName}:{tag}@{digest}
     */
    public $ImageUri;

    /**
     * @var string 用于企业版TCR获取镜像拉取临时凭证，ImageType为"enterprise"时必填
     */
    public $RegistryId;

    /**
     * @var string 容器的启动命令。该参数为可选参数，如果不填写，则默认使用 Dockerfile 中的 Entrypoint。传入规范，填写可运行的指令，例如 python
     */
    public $Command;

    /**
     * @var string 容器的启动参数。该参数为可选参数，如果不填写，则默认使用 Dockerfile 中的 CMD。传入规范，以“空格”作为参数的分割标识，例如 -u app.py
     */
    public $Args;

    /**
     * @var boolean 镜像加速开关，默认False
     */
    public $ContainerImageAccelerate;

    /**
     * @param string $ImageType 镜像仓库类型，个人版或者企业版：personal/enterprise
     * @param string $ImageUri {domain}/{namespace}/{imageName}:{tag}@{digest}
     * @param string $RegistryId 用于企业版TCR获取镜像拉取临时凭证，ImageType为"enterprise"时必填
     * @param string $Command 容器的启动命令。该参数为可选参数，如果不填写，则默认使用 Dockerfile 中的 Entrypoint。传入规范，填写可运行的指令，例如 python
     * @param string $Args 容器的启动参数。该参数为可选参数，如果不填写，则默认使用 Dockerfile 中的 CMD。传入规范，以“空格”作为参数的分割标识，例如 -u app.py
     * @param boolean $ContainerImageAccelerate 镜像加速开关，默认False
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
        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("ImageUri",$param) and $param["ImageUri"] !== null) {
            $this->ImageUri = $param["ImageUri"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("ContainerImageAccelerate",$param) and $param["ContainerImageAccelerate"] !== null) {
            $this->ContainerImageAccelerate = $param["ContainerImageAccelerate"];
        }
    }
}

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
 * Docker容器挂载卷
 *
 * @method string getContainerPath() 获取容器路径
 * @method void setContainerPath(string $ContainerPath) 设置容器路径
 * @method string getHostPath() 获取主机路径
 * @method void setHostPath(string $HostPath) 设置主机路径
 */
class DockerContainerVolume extends AbstractModel
{
    /**
     * @var string 容器路径
     */
    public $ContainerPath;

    /**
     * @var string 主机路径
     */
    public $HostPath;

    /**
     * @param string $ContainerPath 容器路径
     * @param string $HostPath 主机路径
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
        if (array_key_exists("ContainerPath",$param) and $param["ContainerPath"] !== null) {
            $this->ContainerPath = $param["ContainerPath"];
        }

        if (array_key_exists("HostPath",$param) and $param["HostPath"] !== null) {
            $this->HostPath = $param["HostPath"];
        }
    }
}

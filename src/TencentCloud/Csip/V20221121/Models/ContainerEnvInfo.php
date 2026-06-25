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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器环境信息
 *
 * @method string getNodeType() 获取<p>节点类型</p>
 * @method void setNodeType(string $NodeType) 设置<p>节点类型</p>
 * @method string getDockerVersion() 获取<p>docker版本</p>
 * @method void setDockerVersion(string $DockerVersion) 设置<p>docker版本</p>
 * @method string getContainerdVersion() 获取<p>containerd版本</p>
 * @method void setContainerdVersion(string $ContainerdVersion) 设置<p>containerd版本</p>
 * @method string getFileSystemType() 获取<p>文件系统类型</p>
 * @method void setFileSystemType(string $FileSystemType) 设置<p>文件系统类型</p>
 */
class ContainerEnvInfo extends AbstractModel
{
    /**
     * @var string <p>节点类型</p>
     */
    public $NodeType;

    /**
     * @var string <p>docker版本</p>
     */
    public $DockerVersion;

    /**
     * @var string <p>containerd版本</p>
     */
    public $ContainerdVersion;

    /**
     * @var string <p>文件系统类型</p>
     */
    public $FileSystemType;

    /**
     * @param string $NodeType <p>节点类型</p>
     * @param string $DockerVersion <p>docker版本</p>
     * @param string $ContainerdVersion <p>containerd版本</p>
     * @param string $FileSystemType <p>文件系统类型</p>
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("ContainerdVersion",$param) and $param["ContainerdVersion"] !== null) {
            $this->ContainerdVersion = $param["ContainerdVersion"];
        }

        if (array_key_exists("FileSystemType",$param) and $param["FileSystemType"] !== null) {
            $this->FileSystemType = $param["FileSystemType"];
        }
    }
}

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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * containerd 镜像加速站点
 *
 * @method string getRegistry() 获取<p>源仓库，例如 docker.io / registry.k8s.io</p>
 * @method void setRegistry(string $Registry) 设置<p>源仓库，例如 docker.io / registry.k8s.io</p>
 * @method array getEndpoints() 获取<p>镜像加速地址列表，按顺序写入 hosts.toml</p>
 * @method void setEndpoints(array $Endpoints) 设置<p>镜像加速地址列表，按顺序写入 hosts.toml</p>
 * @method boolean getOverridePath() 获取<p>是否在 hosts.toml 中写入 override_path，为 true 时镜像 endpoints 路径不再追加 namespace 后缀</p>
 * @method void setOverridePath(boolean $OverridePath) 设置<p>是否在 hosts.toml 中写入 override_path，为 true 时镜像 endpoints 路径不再追加 namespace 后缀</p>
 */
class RegistryMirror extends AbstractModel
{
    /**
     * @var string <p>源仓库，例如 docker.io / registry.k8s.io</p>
     */
    public $Registry;

    /**
     * @var array <p>镜像加速地址列表，按顺序写入 hosts.toml</p>
     */
    public $Endpoints;

    /**
     * @var boolean <p>是否在 hosts.toml 中写入 override_path，为 true 时镜像 endpoints 路径不再追加 namespace 后缀</p>
     */
    public $OverridePath;

    /**
     * @param string $Registry <p>源仓库，例如 docker.io / registry.k8s.io</p>
     * @param array $Endpoints <p>镜像加速地址列表，按顺序写入 hosts.toml</p>
     * @param boolean $OverridePath <p>是否在 hosts.toml 中写入 override_path，为 true 时镜像 endpoints 路径不再追加 namespace 后缀</p>
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
        if (array_key_exists("Registry",$param) and $param["Registry"] !== null) {
            $this->Registry = $param["Registry"];
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = $param["Endpoints"];
        }

        if (array_key_exists("OverridePath",$param) and $param["OverridePath"] !== null) {
            $this->OverridePath = $param["OverridePath"];
        }
    }
}

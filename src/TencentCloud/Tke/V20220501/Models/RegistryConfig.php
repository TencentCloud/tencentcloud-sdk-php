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
 * containerd 镜像仓库定制（仅 containerd 1.6+ 生效）
 *
 * @method array getMirrors() 获取<p>镜像加速站点列表，按 registry 维度渲染独立的 hosts.toml</p>
 * @method void setMirrors(array $Mirrors) 设置<p>镜像加速站点列表，按 registry 维度渲染独立的 hosts.toml</p>
 * @method array getInsecureRegistries() 获取<p>不安全镜像仓库（跳过证书校验）</p>
 * @method void setInsecureRegistries(array $InsecureRegistries) 设置<p>不安全镜像仓库（跳过证书校验）</p>
 */
class RegistryConfig extends AbstractModel
{
    /**
     * @var array <p>镜像加速站点列表，按 registry 维度渲染独立的 hosts.toml</p>
     */
    public $Mirrors;

    /**
     * @var array <p>不安全镜像仓库（跳过证书校验）</p>
     */
    public $InsecureRegistries;

    /**
     * @param array $Mirrors <p>镜像加速站点列表，按 registry 维度渲染独立的 hosts.toml</p>
     * @param array $InsecureRegistries <p>不安全镜像仓库（跳过证书校验）</p>
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
        if (array_key_exists("Mirrors",$param) and $param["Mirrors"] !== null) {
            $this->Mirrors = [];
            foreach ($param["Mirrors"] as $key => $value){
                $obj = new RegistryMirror();
                $obj->deserialize($value);
                array_push($this->Mirrors, $obj);
            }
        }

        if (array_key_exists("InsecureRegistries",$param) and $param["InsecureRegistries"] !== null) {
            $this->InsecureRegistries = $param["InsecureRegistries"];
        }
    }
}

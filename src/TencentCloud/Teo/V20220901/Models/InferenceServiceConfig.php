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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务单次部署配置。
 *
 * @method integer getListenPort() 获取<p>模型服务需要监听的端口。</p>
 * @method void setListenPort(integer $ListenPort) 设置<p>模型服务需要监听的端口。</p>
 * @method array getRequestPaths() 获取<p>推理服务的请求路径列表。</p>
 * @method void setRequestPaths(array $RequestPaths) 设置<p>推理服务的请求路径列表。</p>
 * @method array getContainers() 获取<p>推理服务的容器配置。</p>
 * @method void setContainers(array $Containers) 设置<p>推理服务的容器配置。</p>
 * @method InferenceResourceConfig getResourceConfig() 获取<p>推理服务的资源配置。</p>
 * @method void setResourceConfig(InferenceResourceConfig $ResourceConfig) 设置<p>推理服务的资源配置。</p>
 * @method InferenceAffinityConfig getAffinityConfig() 获取<p>推理服务亲和性配置。</p>
 * @method void setAffinityConfig(InferenceAffinityConfig $AffinityConfig) 设置<p>推理服务亲和性配置。</p>
 */
class InferenceServiceConfig extends AbstractModel
{
    /**
     * @var integer <p>模型服务需要监听的端口。</p>
     */
    public $ListenPort;

    /**
     * @var array <p>推理服务的请求路径列表。</p>
     */
    public $RequestPaths;

    /**
     * @var array <p>推理服务的容器配置。</p>
     */
    public $Containers;

    /**
     * @var InferenceResourceConfig <p>推理服务的资源配置。</p>
     */
    public $ResourceConfig;

    /**
     * @var InferenceAffinityConfig <p>推理服务亲和性配置。</p>
     */
    public $AffinityConfig;

    /**
     * @param integer $ListenPort <p>模型服务需要监听的端口。</p>
     * @param array $RequestPaths <p>推理服务的请求路径列表。</p>
     * @param array $Containers <p>推理服务的容器配置。</p>
     * @param InferenceResourceConfig $ResourceConfig <p>推理服务的资源配置。</p>
     * @param InferenceAffinityConfig $AffinityConfig <p>推理服务亲和性配置。</p>
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
        if (array_key_exists("ListenPort",$param) and $param["ListenPort"] !== null) {
            $this->ListenPort = $param["ListenPort"];
        }

        if (array_key_exists("RequestPaths",$param) and $param["RequestPaths"] !== null) {
            $this->RequestPaths = $param["RequestPaths"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new InferenceContainerConfig();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new InferenceResourceConfig();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("AffinityConfig",$param) and $param["AffinityConfig"] !== null) {
            $this->AffinityConfig = new InferenceAffinityConfig();
            $this->AffinityConfig->deserialize($param["AffinityConfig"]);
        }
    }
}

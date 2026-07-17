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
 * @method integer getListenPort() 获取模型服务需要监听的端口。
 * @method void setListenPort(integer $ListenPort) 设置模型服务需要监听的端口。
 * @method array getRequestPaths() 获取推理服务的请求路径列表。
 * @method void setRequestPaths(array $RequestPaths) 设置推理服务的请求路径列表。
 * @method array getContainers() 获取推理服务的容器配置。
 * @method void setContainers(array $Containers) 设置推理服务的容器配置。
 * @method InferenceResourceConfig getResourceConfig() 获取推理服务的资源配置。
 * @method void setResourceConfig(InferenceResourceConfig $ResourceConfig) 设置推理服务的资源配置。
 */
class InferenceServiceConfig extends AbstractModel
{
    /**
     * @var integer 模型服务需要监听的端口。
     */
    public $ListenPort;

    /**
     * @var array 推理服务的请求路径列表。
     */
    public $RequestPaths;

    /**
     * @var array 推理服务的容器配置。
     */
    public $Containers;

    /**
     * @var InferenceResourceConfig 推理服务的资源配置。
     */
    public $ResourceConfig;

    /**
     * @param integer $ListenPort 模型服务需要监听的端口。
     * @param array $RequestPaths 推理服务的请求路径列表。
     * @param array $Containers 推理服务的容器配置。
     * @param InferenceResourceConfig $ResourceConfig 推理服务的资源配置。
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
    }
}

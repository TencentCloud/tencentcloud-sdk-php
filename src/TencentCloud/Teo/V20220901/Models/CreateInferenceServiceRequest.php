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
 * CreateInferenceService请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getName() 获取<p>推理服务的名称。长度限制不超过 30 个字符，仅支持小写字母、数字、连字符，以字母开头，数字或字母结尾，不支持重复。</p>
 * @method void setName(string $Name) 设置<p>推理服务的名称。长度限制不超过 30 个字符，仅支持小写字母、数字、连字符，以字母开头，数字或字母结尾，不支持重复。</p>
 * @method integer getListenPort() 获取<p>模型服务需要监听的端口。仅支持 1-65535 之间的整数。</p>
 * @method void setListenPort(integer $ListenPort) 设置<p>模型服务需要监听的端口。仅支持 1-65535 之间的整数。</p>
 * @method array getContainers() 获取<p>推理服务的容器配置。当前仅支持设置 1 个容器。</p>
 * @method void setContainers(array $Containers) 设置<p>推理服务的容器配置。当前仅支持设置 1 个容器。</p>
 * @method InferenceResourceConfig getResourceConfig() 获取<p>推理服务的资源配置。</p>
 * @method void setResourceConfig(InferenceResourceConfig $ResourceConfig) 设置<p>推理服务的资源配置。</p>
 * @method array getRequestPaths() 获取<p>推理服务的请求路径列表。最多支持 20 个路径。</p>
 * @method void setRequestPaths(array $RequestPaths) 设置<p>推理服务的请求路径列表。最多支持 20 个路径。</p>
 * @method string getDescription() 获取<p>描述信息。长度限制不超过 60 个字符。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息。长度限制不超过 60 个字符。</p>
 */
class CreateInferenceServiceRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>推理服务的名称。长度限制不超过 30 个字符，仅支持小写字母、数字、连字符，以字母开头，数字或字母结尾，不支持重复。</p>
     */
    public $Name;

    /**
     * @var integer <p>模型服务需要监听的端口。仅支持 1-65535 之间的整数。</p>
     */
    public $ListenPort;

    /**
     * @var array <p>推理服务的容器配置。当前仅支持设置 1 个容器。</p>
     */
    public $Containers;

    /**
     * @var InferenceResourceConfig <p>推理服务的资源配置。</p>
     */
    public $ResourceConfig;

    /**
     * @var array <p>推理服务的请求路径列表。最多支持 20 个路径。</p>
     */
    public $RequestPaths;

    /**
     * @var string <p>描述信息。长度限制不超过 60 个字符。</p>
     */
    public $Description;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $Name <p>推理服务的名称。长度限制不超过 30 个字符，仅支持小写字母、数字、连字符，以字母开头，数字或字母结尾，不支持重复。</p>
     * @param integer $ListenPort <p>模型服务需要监听的端口。仅支持 1-65535 之间的整数。</p>
     * @param array $Containers <p>推理服务的容器配置。当前仅支持设置 1 个容器。</p>
     * @param InferenceResourceConfig $ResourceConfig <p>推理服务的资源配置。</p>
     * @param array $RequestPaths <p>推理服务的请求路径列表。最多支持 20 个路径。</p>
     * @param string $Description <p>描述信息。长度限制不超过 60 个字符。</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ListenPort",$param) and $param["ListenPort"] !== null) {
            $this->ListenPort = $param["ListenPort"];
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

        if (array_key_exists("RequestPaths",$param) and $param["RequestPaths"] !== null) {
            $this->RequestPaths = $param["RequestPaths"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器信息
 *
 * @method ImageInfo getImage() 获取<p>镜像相关信息</p>
 * @method void setImage(ImageInfo $Image) 设置<p>镜像相关信息</p>
 * @method string getPort() 获取<p>服务监听端口</p>
 * @method void setPort(string $Port) 设置<p>服务监听端口</p>
 * @method array getScripts() 获取<p>启动命令</p>
 * @method void setScripts(array $Scripts) 设置<p>启动命令</p>
 * @method array getEnvs() 获取<p>环境变量列表</p>
 * @method void setEnvs(array $Envs) 设置<p>环境变量列表</p>
 * @method array getStorages() 获取<p>存储挂载配置</p>
 * @method void setStorages(array $Storages) 设置<p>存储挂载配置</p>
 * @method ProbeInfo getProbe() 获取<p>探针信息</p>
 * @method void setProbe(ProbeInfo $Probe) 设置<p>探针信息</p>
 */
class ContainerInfo extends AbstractModel
{
    /**
     * @var ImageInfo <p>镜像相关信息</p>
     */
    public $Image;

    /**
     * @var string <p>服务监听端口</p>
     */
    public $Port;

    /**
     * @var array <p>启动命令</p>
     */
    public $Scripts;

    /**
     * @var array <p>环境变量列表</p>
     */
    public $Envs;

    /**
     * @var array <p>存储挂载配置</p>
     */
    public $Storages;

    /**
     * @var ProbeInfo <p>探针信息</p>
     */
    public $Probe;

    /**
     * @param ImageInfo $Image <p>镜像相关信息</p>
     * @param string $Port <p>服务监听端口</p>
     * @param array $Scripts <p>启动命令</p>
     * @param array $Envs <p>环境变量列表</p>
     * @param array $Storages <p>存储挂载配置</p>
     * @param ProbeInfo $Probe <p>探针信息</p>
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new ImageInfo();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Scripts",$param) and $param["Scripts"] !== null) {
            $this->Scripts = $param["Scripts"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new EnvParam();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("Storages",$param) and $param["Storages"] !== null) {
            $this->Storages = [];
            foreach ($param["Storages"] as $key => $value){
                $obj = new StorageInfo();
                $obj->deserialize($value);
                array_push($this->Storages, $obj);
            }
        }

        if (array_key_exists("Probe",$param) and $param["Probe"] !== null) {
            $this->Probe = new ProbeInfo();
            $this->Probe->deserialize($param["Probe"]);
        }
    }
}

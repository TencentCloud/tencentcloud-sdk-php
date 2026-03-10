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
 * @method ImageInfo getImage() 获取镜像相关信息
 * @method void setImage(ImageInfo $Image) 设置镜像相关信息
 * @method string getPort() 获取服务监听端口
 * @method void setPort(string $Port) 设置服务监听端口
 * @method array getScripts() 获取启动命令
 * @method void setScripts(array $Scripts) 设置启动命令
 * @method array getEnvs() 获取环境变量列表
 * @method void setEnvs(array $Envs) 设置环境变量列表
 * @method array getStorages() 获取存储挂载配置
 * @method void setStorages(array $Storages) 设置存储挂载配置
 */
class ContainerInfo extends AbstractModel
{
    /**
     * @var ImageInfo 镜像相关信息
     */
    public $Image;

    /**
     * @var string 服务监听端口
     */
    public $Port;

    /**
     * @var array 启动命令
     */
    public $Scripts;

    /**
     * @var array 环境变量列表
     */
    public $Envs;

    /**
     * @var array 存储挂载配置
     */
    public $Storages;

    /**
     * @param ImageInfo $Image 镜像相关信息
     * @param string $Port 服务监听端口
     * @param array $Scripts 启动命令
     * @param array $Envs 环境变量列表
     * @param array $Storages 存储挂载配置
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
    }
}

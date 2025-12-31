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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 沙箱自定义配置详细信息
 *
 * @method string getImage() 获取镜像地址
 * @method void setImage(string $Image) 设置镜像地址
 * @method string getImageRegistryType() 获取镜像仓库类型：`TCR`、`CCR`。
 * @method void setImageRegistryType(string $ImageRegistryType) 设置镜像仓库类型：`TCR`、`CCR`。
 * @method string getImageDigest() 获取镜像 Digest
 * @method void setImageDigest(string $ImageDigest) 设置镜像 Digest
 * @method array getCommand() 获取启动命令
 * @method void setCommand(array $Command) 设置启动命令
 * @method array getArgs() 获取启动参数
 * @method void setArgs(array $Args) 设置启动参数
 * @method array getEnv() 获取环境变量
 * @method void setEnv(array $Env) 设置环境变量
 * @method array getPorts() 获取端口配置
 * @method void setPorts(array $Ports) 设置端口配置
 * @method ResourceConfiguration getResources() 获取资源配置
 * @method void setResources(ResourceConfiguration $Resources) 设置资源配置
 * @method ProbeConfiguration getProbe() 获取探针配置
 * @method void setProbe(ProbeConfiguration $Probe) 设置探针配置
 */
class CustomConfigurationDetail extends AbstractModel
{
    /**
     * @var string 镜像地址
     */
    public $Image;

    /**
     * @var string 镜像仓库类型：`TCR`、`CCR`。
     */
    public $ImageRegistryType;

    /**
     * @var string 镜像 Digest
     */
    public $ImageDigest;

    /**
     * @var array 启动命令
     */
    public $Command;

    /**
     * @var array 启动参数
     */
    public $Args;

    /**
     * @var array 环境变量
     */
    public $Env;

    /**
     * @var array 端口配置
     */
    public $Ports;

    /**
     * @var ResourceConfiguration 资源配置
     */
    public $Resources;

    /**
     * @var ProbeConfiguration 探针配置
     */
    public $Probe;

    /**
     * @param string $Image 镜像地址
     * @param string $ImageRegistryType 镜像仓库类型：`TCR`、`CCR`。
     * @param string $ImageDigest 镜像 Digest
     * @param array $Command 启动命令
     * @param array $Args 启动参数
     * @param array $Env 环境变量
     * @param array $Ports 端口配置
     * @param ResourceConfiguration $Resources 资源配置
     * @param ProbeConfiguration $Probe 探针配置
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
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ImageRegistryType",$param) and $param["ImageRegistryType"] !== null) {
            $this->ImageRegistryType = $param["ImageRegistryType"];
        }

        if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
            $this->ImageDigest = $param["ImageDigest"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = [];
            foreach ($param["Env"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->Env, $obj);
            }
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortConfiguration();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = new ResourceConfiguration();
            $this->Resources->deserialize($param["Resources"]);
        }

        if (array_key_exists("Probe",$param) and $param["Probe"] !== null) {
            $this->Probe = new ProbeConfiguration();
            $this->Probe->deserialize($param["Probe"]);
        }
    }
}

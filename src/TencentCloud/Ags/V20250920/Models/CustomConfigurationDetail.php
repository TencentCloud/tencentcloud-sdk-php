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
 * @method string getImage() 获取<p>镜像地址</p>
 * @method void setImage(string $Image) 设置<p>镜像地址</p>
 * @method string getImageRegistryType() 获取<p>镜像仓库类型：<code>TCR</code>、<code>CCR</code>。</p>
 * @method void setImageRegistryType(string $ImageRegistryType) 设置<p>镜像仓库类型：<code>TCR</code>、<code>CCR</code>。</p>
 * @method string getImageDigest() 获取<p>镜像 Digest</p>
 * @method void setImageDigest(string $ImageDigest) 设置<p>镜像 Digest</p>
 * @method array getCommand() 获取<p>启动命令</p>
 * @method void setCommand(array $Command) 设置<p>启动命令</p>
 * @method array getArgs() 获取<p>启动参数</p>
 * @method void setArgs(array $Args) 设置<p>启动参数</p>
 * @method array getEnv() 获取<p>环境变量</p>
 * @method void setEnv(array $Env) 设置<p>环境变量</p>
 * @method array getPorts() 获取<p>端口配置</p>
 * @method void setPorts(array $Ports) 设置<p>端口配置</p>
 * @method ResourceConfiguration getResources() 获取<p>资源配置</p>
 * @method void setResources(ResourceConfiguration $Resources) 设置<p>资源配置</p>
 * @method ProbeConfiguration getProbe() 获取<p>探针配置</p>
 * @method void setProbe(ProbeConfiguration $Probe) 设置<p>探针配置</p>
 * @method DNSConfig getDNSConfig() 获取<p>沙箱 DNS 配置</p>
 * @method void setDNSConfig(DNSConfig $DNSConfig) 设置<p>沙箱 DNS 配置</p>
 */
class CustomConfigurationDetail extends AbstractModel
{
    /**
     * @var string <p>镜像地址</p>
     */
    public $Image;

    /**
     * @var string <p>镜像仓库类型：<code>TCR</code>、<code>CCR</code>。</p>
     */
    public $ImageRegistryType;

    /**
     * @var string <p>镜像 Digest</p>
     */
    public $ImageDigest;

    /**
     * @var array <p>启动命令</p>
     */
    public $Command;

    /**
     * @var array <p>启动参数</p>
     */
    public $Args;

    /**
     * @var array <p>环境变量</p>
     */
    public $Env;

    /**
     * @var array <p>端口配置</p>
     */
    public $Ports;

    /**
     * @var ResourceConfiguration <p>资源配置</p>
     */
    public $Resources;

    /**
     * @var ProbeConfiguration <p>探针配置</p>
     */
    public $Probe;

    /**
     * @var DNSConfig <p>沙箱 DNS 配置</p>
     */
    public $DNSConfig;

    /**
     * @param string $Image <p>镜像地址</p>
     * @param string $ImageRegistryType <p>镜像仓库类型：<code>TCR</code>、<code>CCR</code>。</p>
     * @param string $ImageDigest <p>镜像 Digest</p>
     * @param array $Command <p>启动命令</p>
     * @param array $Args <p>启动参数</p>
     * @param array $Env <p>环境变量</p>
     * @param array $Ports <p>端口配置</p>
     * @param ResourceConfiguration $Resources <p>资源配置</p>
     * @param ProbeConfiguration $Probe <p>探针配置</p>
     * @param DNSConfig $DNSConfig <p>沙箱 DNS 配置</p>
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

        if (array_key_exists("DNSConfig",$param) and $param["DNSConfig"] !== null) {
            $this->DNSConfig = new DNSConfig();
            $this->DNSConfig->deserialize($param["DNSConfig"]);
        }
    }
}

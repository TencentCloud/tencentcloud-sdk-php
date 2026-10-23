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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent 云函数配置
 *
 * @method AgentRuntimeCode getCode() 获取函数代码. 注意：不能同时指定Cos和ZipFile
 * @method void setCode(AgentRuntimeCode $Code) 设置函数代码. 注意：不能同时指定Cos和ZipFile
 * @method string getRuntime() 获取函数运行环境，默认Python2.7
目前支持的运行环境：
- Python2.7
- Python3.6
- Python3.7
- Python3.9
- Python3.10
- Nodejs6.10
- Nodejs8.9
- Nodejs10.15
- Nodejs12.16
- Nodejs14.18
- Nodejs16.13
- Nodejs18.15
- Php5.6
- Php7(7.2版本)
- Php7.4
- Php8.0
- Go1
- Java8
- CustomRuntime
 * @method void setRuntime(string $Runtime) 设置函数运行环境，默认Python2.7
目前支持的运行环境：
- Python2.7
- Python3.6
- Python3.7
- Python3.9
- Python3.10
- Nodejs6.10
- Nodejs8.9
- Nodejs10.15
- Nodejs12.16
- Nodejs14.18
- Nodejs16.13
- Nodejs18.15
- Php5.6
- Php7(7.2版本)
- Php7.4
- Php8.0
- Go1
- Java8
- CustomRuntime
 * @method integer getMemorySize() 获取函数运行时内存大小，默认为 128M，可选范围 64、128MB-3072MB，并且以 128MB 为阶梯
 * @method void setMemorySize(integer $MemorySize) 设置函数运行时内存大小，默认为 128M，可选范围 64、128MB-3072MB，并且以 128MB 为阶梯
 * @method boolean getInstallDependency() 获取函数是否自动安装依赖
 * @method void setInstallDependency(boolean $InstallDependency) 设置函数是否自动安装依赖
 * @method integer getTimeout() 获取函数最长执行时间，单位为秒，可选值范围 1-900 秒，默认为 3 秒
 * @method void setTimeout(integer $Timeout) 设置函数最长执行时间，单位为秒，可选值范围 1-900 秒，默认为 3 秒
 * @method string getEnvironment() 获取函数的环境变量，满足json格式
 * @method void setEnvironment(string $Environment) 设置函数的环境变量，满足json格式
 * @method AgentRuntimeSessionConfig getSessionConfig() 获取Agent Session 配置
 * @method void setSessionConfig(AgentRuntimeSessionConfig $SessionConfig) 设置Agent Session 配置
 */
class AgentRuntimeConfig extends AbstractModel
{
    /**
     * @var AgentRuntimeCode 函数代码. 注意：不能同时指定Cos和ZipFile
     */
    public $Code;

    /**
     * @var string 函数运行环境，默认Python2.7
目前支持的运行环境：
- Python2.7
- Python3.6
- Python3.7
- Python3.9
- Python3.10
- Nodejs6.10
- Nodejs8.9
- Nodejs10.15
- Nodejs12.16
- Nodejs14.18
- Nodejs16.13
- Nodejs18.15
- Php5.6
- Php7(7.2版本)
- Php7.4
- Php8.0
- Go1
- Java8
- CustomRuntime
     */
    public $Runtime;

    /**
     * @var integer 函数运行时内存大小，默认为 128M，可选范围 64、128MB-3072MB，并且以 128MB 为阶梯
     */
    public $MemorySize;

    /**
     * @var boolean 函数是否自动安装依赖
     */
    public $InstallDependency;

    /**
     * @var integer 函数最长执行时间，单位为秒，可选值范围 1-900 秒，默认为 3 秒
     */
    public $Timeout;

    /**
     * @var string 函数的环境变量，满足json格式
     */
    public $Environment;

    /**
     * @var AgentRuntimeSessionConfig Agent Session 配置
     */
    public $SessionConfig;

    /**
     * @param AgentRuntimeCode $Code 函数代码. 注意：不能同时指定Cos和ZipFile
     * @param string $Runtime 函数运行环境，默认Python2.7
目前支持的运行环境：
- Python2.7
- Python3.6
- Python3.7
- Python3.9
- Python3.10
- Nodejs6.10
- Nodejs8.9
- Nodejs10.15
- Nodejs12.16
- Nodejs14.18
- Nodejs16.13
- Nodejs18.15
- Php5.6
- Php7(7.2版本)
- Php7.4
- Php8.0
- Go1
- Java8
- CustomRuntime
     * @param integer $MemorySize 函数运行时内存大小，默认为 128M，可选范围 64、128MB-3072MB，并且以 128MB 为阶梯
     * @param boolean $InstallDependency 函数是否自动安装依赖
     * @param integer $Timeout 函数最长执行时间，单位为秒，可选值范围 1-900 秒，默认为 3 秒
     * @param string $Environment 函数的环境变量，满足json格式
     * @param AgentRuntimeSessionConfig $SessionConfig Agent Session 配置
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = new AgentRuntimeCode();
            $this->Code->deserialize($param["Code"]);
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("InstallDependency",$param) and $param["InstallDependency"] !== null) {
            $this->InstallDependency = $param["InstallDependency"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("SessionConfig",$param) and $param["SessionConfig"] !== null) {
            $this->SessionConfig = new AgentRuntimeSessionConfig();
            $this->SessionConfig->deserialize($param["SessionConfig"]);
        }
    }
}

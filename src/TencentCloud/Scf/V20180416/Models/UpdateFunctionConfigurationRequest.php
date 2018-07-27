<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getFunctionName() 获取要修改的函数名称
 * @method void setFunctionName(string $FunctionName) 设置要修改的函数名称
 * @method string getDescription() 获取函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
 * @method void setDescription(string $Description) 设置函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
 * @method integer getMemorySize() 获取函数运行时内存大小，默认为 128 M，可选范 128 M-1536 M
 * @method void setMemorySize(integer $MemorySize) 设置函数运行时内存大小，默认为 128 M，可选范 128 M-1536 M
 * @method integer getTimeout() 获取函数最长执行时间，单位为秒，可选值范 1-300 秒，默认为 3 秒
 * @method void setTimeout(integer $Timeout) 设置函数最长执行时间，单位为秒，可选值范 1-300 秒，默认为 3 秒
 * @method string getRuntime() 获取函数运行环境，目前仅支持 Python2.7，Python3.6，Nodejs6.10，PHP5， PHP7，Golang1 和 Java8
 * @method void setRuntime(string $Runtime) 设置函数运行环境，目前仅支持 Python2.7，Python3.6，Nodejs6.10，PHP5， PHP7，Golang1 和 Java8
 * @method Environment getEnvironment() 获取函数的环境变量
 * @method void setEnvironment(Environment $Environment) 设置函数的环境变量
 * @method VpcConfig getVpcConfig() 获取函数的私有网络配置
 * @method void setVpcConfig(VpcConfig $VpcConfig) 设置函数的私有网络配置
 */

/**
 *UpdateFunctionConfiguration请求参数结构体
 */
class UpdateFunctionConfigurationRequest extends AbstractModel
{
    /**
     * @var string 要修改的函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
     */
    public $Description;

    /**
     * @var integer 函数运行时内存大小，默认为 128 M，可选范 128 M-1536 M
     */
    public $MemorySize;

    /**
     * @var integer 函数最长执行时间，单位为秒，可选值范 1-300 秒，默认为 3 秒
     */
    public $Timeout;

    /**
     * @var string 函数运行环境，目前仅支持 Python2.7，Python3.6，Nodejs6.10，PHP5， PHP7，Golang1 和 Java8
     */
    public $Runtime;

    /**
     * @var Environment 函数的环境变量
     */
    public $Environment;

    /**
     * @var VpcConfig 函数的私有网络配置
     */
    public $VpcConfig;
    /**
     * @param string $FunctionName 要修改的函数名称
     * @param string $Description 函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
     * @param integer $MemorySize 函数运行时内存大小，默认为 128 M，可选范 128 M-1536 M
     * @param integer $Timeout 函数最长执行时间，单位为秒，可选值范 1-300 秒，默认为 3 秒
     * @param string $Runtime 函数运行环境，目前仅支持 Python2.7，Python3.6，Nodejs6.10，PHP5， PHP7，Golang1 和 Java8
     * @param Environment $Environment 函数的环境变量
     * @param VpcConfig $VpcConfig 函数的私有网络配置
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new Environment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }
    }
}

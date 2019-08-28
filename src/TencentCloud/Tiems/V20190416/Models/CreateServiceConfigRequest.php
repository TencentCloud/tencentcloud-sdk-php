<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取配置名称
 * @method void setName(string $Name) 设置配置名称
 * @method string getRuntime() 获取运行环境
 * @method void setRuntime(string $Runtime) 设置运行环境
 * @method string getModelUri() 获取模型地址，支持cos路径，格式为 cos://bucket名-appid.cos.region名.myqcloud.com/模型文件夹路径。为模型文件的上一层文件夹地址。
 * @method void setModelUri(string $ModelUri) 设置模型地址，支持cos路径，格式为 cos://bucket名-appid.cos.region名.myqcloud.com/模型文件夹路径。为模型文件的上一层文件夹地址。
 * @method integer getCpu() 获取处理器配置, 单位为1/1000核；范围[100, 256000]
 * @method void setCpu(integer $Cpu) 设置处理器配置, 单位为1/1000核；范围[100, 256000]
 * @method integer getMemory() 获取内存配置, 单位为1M；范围[100, 256000]
 * @method void setMemory(integer $Memory) 设置内存配置, 单位为1M；范围[100, 256000]
 * @method integer getTflopUnits() 获取GPU算力配置，单位为1/100 tflops，范围 [0, 256000]
 * @method void setTflopUnits(integer $TflopUnits) 设置GPU算力配置，单位为1/100 tflops，范围 [0, 256000]
 * @method integer getGpuMemory() 获取显存配置, 单位为1M，范围 [0, 256000]
 * @method void setGpuMemory(integer $GpuMemory) 设置显存配置, 单位为1M，范围 [0, 256000]
 */

/**
 *CreateServiceConfig请求参数结构体
 */
class CreateServiceConfigRequest extends AbstractModel
{
    /**
     * @var string 配置名称
     */
    public $Name;

    /**
     * @var string 运行环境
     */
    public $Runtime;

    /**
     * @var string 模型地址，支持cos路径，格式为 cos://bucket名-appid.cos.region名.myqcloud.com/模型文件夹路径。为模型文件的上一层文件夹地址。
     */
    public $ModelUri;

    /**
     * @var integer 处理器配置, 单位为1/1000核；范围[100, 256000]
     */
    public $Cpu;

    /**
     * @var integer 内存配置, 单位为1M；范围[100, 256000]
     */
    public $Memory;

    /**
     * @var integer GPU算力配置，单位为1/100 tflops，范围 [0, 256000]
     */
    public $TflopUnits;

    /**
     * @var integer 显存配置, 单位为1M，范围 [0, 256000]
     */
    public $GpuMemory;
    /**
     * @param string $Name 配置名称
     * @param string $Runtime 运行环境
     * @param string $ModelUri 模型地址，支持cos路径，格式为 cos://bucket名-appid.cos.region名.myqcloud.com/模型文件夹路径。为模型文件的上一层文件夹地址。
     * @param integer $Cpu 处理器配置, 单位为1/1000核；范围[100, 256000]
     * @param integer $Memory 内存配置, 单位为1M；范围[100, 256000]
     * @param integer $TflopUnits GPU算力配置，单位为1/100 tflops，范围 [0, 256000]
     * @param integer $GpuMemory 显存配置, 单位为1M，范围 [0, 256000]
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("ModelUri",$param) and $param["ModelUri"] !== null) {
            $this->ModelUri = $param["ModelUri"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("TflopUnits",$param) and $param["TflopUnits"] !== null) {
            $this->TflopUnits = $param["TflopUnits"];
        }

        if (array_key_exists("GpuMemory",$param) and $param["GpuMemory"] !== null) {
            $this->GpuMemory = $param["GpuMemory"];
        }
    }
}

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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述一个推理引擎的能力
 *
 * @method boolean getGpuOptional() 获取<p>GPU 是否可选</p>
 * @method void setGpuOptional(boolean $GpuOptional) 设置<p>GPU 是否可选</p>
 * @method boolean getSupportsParallelConfig() 获取<p>是否支持并行配置</p>
 * @method void setSupportsParallelConfig(boolean $SupportsParallelConfig) 设置<p>是否支持并行配置</p>
 * @method boolean getSupportsRemoteCode() 获取<p>是否支持远程代码</p>
 * @method void setSupportsRemoteCode(boolean $SupportsRemoteCode) 设置<p>是否支持远程代码</p>
 * @method string getGpuMemoryKey() 获取<p>GPU 显存配置键名</p>
 * @method void setGpuMemoryKey(string $GpuMemoryKey) 设置<p>GPU 显存配置键名</p>
 * @method array getParallelKeys() 获取<p>并行配置键名列表</p>
 * @method void setParallelKeys(array $ParallelKeys) 设置<p>并行配置键名列表</p>
 */
class EngineCapabilities extends AbstractModel
{
    /**
     * @var boolean <p>GPU 是否可选</p>
     */
    public $GpuOptional;

    /**
     * @var boolean <p>是否支持并行配置</p>
     */
    public $SupportsParallelConfig;

    /**
     * @var boolean <p>是否支持远程代码</p>
     */
    public $SupportsRemoteCode;

    /**
     * @var string <p>GPU 显存配置键名</p>
     */
    public $GpuMemoryKey;

    /**
     * @var array <p>并行配置键名列表</p>
     */
    public $ParallelKeys;

    /**
     * @param boolean $GpuOptional <p>GPU 是否可选</p>
     * @param boolean $SupportsParallelConfig <p>是否支持并行配置</p>
     * @param boolean $SupportsRemoteCode <p>是否支持远程代码</p>
     * @param string $GpuMemoryKey <p>GPU 显存配置键名</p>
     * @param array $ParallelKeys <p>并行配置键名列表</p>
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
        if (array_key_exists("GpuOptional",$param) and $param["GpuOptional"] !== null) {
            $this->GpuOptional = $param["GpuOptional"];
        }

        if (array_key_exists("SupportsParallelConfig",$param) and $param["SupportsParallelConfig"] !== null) {
            $this->SupportsParallelConfig = $param["SupportsParallelConfig"];
        }

        if (array_key_exists("SupportsRemoteCode",$param) and $param["SupportsRemoteCode"] !== null) {
            $this->SupportsRemoteCode = $param["SupportsRemoteCode"];
        }

        if (array_key_exists("GpuMemoryKey",$param) and $param["GpuMemoryKey"] !== null) {
            $this->GpuMemoryKey = $param["GpuMemoryKey"];
        }

        if (array_key_exists("ParallelKeys",$param) and $param["ParallelKeys"] !== null) {
            $this->ParallelKeys = [];
            foreach ($param["ParallelKeys"] as $key => $value){
                $obj = new ParallelKeyMapping();
                $obj->deserialize($value);
                array_push($this->ParallelKeys, $obj);
            }
        }
    }
}

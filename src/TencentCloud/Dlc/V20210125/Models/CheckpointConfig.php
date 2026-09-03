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
 * 用于返回训练作业的checkpoint的配置信息
 *
 * @method string getCatalog() 获取<p>Checkpoint 产出存储的 Catalog 配置 JSON（结构同顶层 Catalog）</p>
 * @method void setCatalog(string $Catalog) 设置<p>Checkpoint 产出存储的 Catalog 配置 JSON（结构同顶层 Catalog）</p>
 * @method string getSaveStrategy() 获取<p>保存策略：steps / epoch / none，默认 steps；GRPO 仅支持 steps / none</p>
 * @method void setSaveStrategy(string $SaveStrategy) 设置<p>保存策略：steps / epoch / none，默认 steps；GRPO 仅支持 steps / none</p>
 * @method integer getSaveFreq() 获取<p>保存频率（每 N 步或每 N epoch），默认 500</p>
 * @method void setSaveFreq(integer $SaveFreq) 设置<p>保存频率（每 N 步或每 N epoch），默认 500</p>
 * @method integer getMaxKeep() 获取<p>最大保留数量，0 表示不限制，默认 3</p>
 * @method void setMaxKeep(integer $MaxKeep) 设置<p>最大保留数量，0 表示不限制，默认 3</p>
 * @method string getOutputDir() 获取<p>容器内输出目录回退值（可选；正常场景由 Checkpoint 挂载路径决定，仅在挂载路径为空时生效，默认 /workspace/output/{mode}）</p>
 * @method void setOutputDir(string $OutputDir) 设置<p>容器内输出目录回退值（可选；正常场景由 Checkpoint 挂载路径决定，仅在挂载路径为空时生效，默认 /workspace/output/{mode}）</p>
 */
class CheckpointConfig extends AbstractModel
{
    /**
     * @var string <p>Checkpoint 产出存储的 Catalog 配置 JSON（结构同顶层 Catalog）</p>
     */
    public $Catalog;

    /**
     * @var string <p>保存策略：steps / epoch / none，默认 steps；GRPO 仅支持 steps / none</p>
     */
    public $SaveStrategy;

    /**
     * @var integer <p>保存频率（每 N 步或每 N epoch），默认 500</p>
     */
    public $SaveFreq;

    /**
     * @var integer <p>最大保留数量，0 表示不限制，默认 3</p>
     */
    public $MaxKeep;

    /**
     * @var string <p>容器内输出目录回退值（可选；正常场景由 Checkpoint 挂载路径决定，仅在挂载路径为空时生效，默认 /workspace/output/{mode}）</p>
     */
    public $OutputDir;

    /**
     * @param string $Catalog <p>Checkpoint 产出存储的 Catalog 配置 JSON（结构同顶层 Catalog）</p>
     * @param string $SaveStrategy <p>保存策略：steps / epoch / none，默认 steps；GRPO 仅支持 steps / none</p>
     * @param integer $SaveFreq <p>保存频率（每 N 步或每 N epoch），默认 500</p>
     * @param integer $MaxKeep <p>最大保留数量，0 表示不限制，默认 3</p>
     * @param string $OutputDir <p>容器内输出目录回退值（可选；正常场景由 Checkpoint 挂载路径决定，仅在挂载路径为空时生效，默认 /workspace/output/{mode}）</p>
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
        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("SaveStrategy",$param) and $param["SaveStrategy"] !== null) {
            $this->SaveStrategy = $param["SaveStrategy"];
        }

        if (array_key_exists("SaveFreq",$param) and $param["SaveFreq"] !== null) {
            $this->SaveFreq = $param["SaveFreq"];
        }

        if (array_key_exists("MaxKeep",$param) and $param["MaxKeep"] !== null) {
            $this->MaxKeep = $param["MaxKeep"];
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }
    }
}

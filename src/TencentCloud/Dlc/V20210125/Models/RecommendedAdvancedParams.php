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
 * 推荐的推理高级参数
 *
 * @method boolean getEnableRemoteCode() 获取<p>是否启用 trust_remote_code</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRemoteCode(boolean $EnableRemoteCode) 设置<p>是否启用 trust_remote_code</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpuMemoryUtilization() 获取<p>GPU 显存利用率（百分比，例如 90 表示 90%）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuMemoryUtilization(integer $GpuMemoryUtilization) 设置<p>GPU 显存利用率（百分比，例如 90 表示 90%）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTensorParallelSize() 获取<p>Tensor 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTensorParallelSize(integer $TensorParallelSize) 设置<p>Tensor 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPipelineParallelSize() 获取<p>Pipeline 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPipelineParallelSize(integer $PipelineParallelSize) 设置<p>Pipeline 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataParallelSize() 获取<p>Data 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataParallelSize(integer $DataParallelSize) 设置<p>Data 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEngineArgs() 获取<p>推理引擎参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineArgs(array $EngineArgs) 设置<p>推理引擎参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnvVars() 获取<p>环境变量列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvVars(array $EnvVars) 设置<p>环境变量列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRayOptions() 获取<p>Ray Actor Options 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRayOptions(array $RayOptions) 设置<p>Ray Actor Options 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecommendedAdvancedParams extends AbstractModel
{
    /**
     * @var boolean <p>是否启用 trust_remote_code</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRemoteCode;

    /**
     * @var integer <p>GPU 显存利用率（百分比，例如 90 表示 90%）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuMemoryUtilization;

    /**
     * @var integer <p>Tensor 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TensorParallelSize;

    /**
     * @var integer <p>Pipeline 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PipelineParallelSize;

    /**
     * @var integer <p>Data 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataParallelSize;

    /**
     * @var array <p>推理引擎参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineArgs;

    /**
     * @var array <p>环境变量列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvVars;

    /**
     * @var array <p>Ray Actor Options 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RayOptions;

    /**
     * @param boolean $EnableRemoteCode <p>是否启用 trust_remote_code</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GpuMemoryUtilization <p>GPU 显存利用率（百分比，例如 90 表示 90%）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TensorParallelSize <p>Tensor 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PipelineParallelSize <p>Pipeline 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataParallelSize <p>Data 并行度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EngineArgs <p>推理引擎参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EnvVars <p>环境变量列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RayOptions <p>Ray Actor Options 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("EnableRemoteCode",$param) and $param["EnableRemoteCode"] !== null) {
            $this->EnableRemoteCode = $param["EnableRemoteCode"];
        }

        if (array_key_exists("GpuMemoryUtilization",$param) and $param["GpuMemoryUtilization"] !== null) {
            $this->GpuMemoryUtilization = $param["GpuMemoryUtilization"];
        }

        if (array_key_exists("TensorParallelSize",$param) and $param["TensorParallelSize"] !== null) {
            $this->TensorParallelSize = $param["TensorParallelSize"];
        }

        if (array_key_exists("PipelineParallelSize",$param) and $param["PipelineParallelSize"] !== null) {
            $this->PipelineParallelSize = $param["PipelineParallelSize"];
        }

        if (array_key_exists("DataParallelSize",$param) and $param["DataParallelSize"] !== null) {
            $this->DataParallelSize = $param["DataParallelSize"];
        }

        if (array_key_exists("EngineArgs",$param) and $param["EngineArgs"] !== null) {
            $this->EngineArgs = [];
            foreach ($param["EngineArgs"] as $key => $value){
                $obj = new RecommendedKeyValue();
                $obj->deserialize($value);
                array_push($this->EngineArgs, $obj);
            }
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new RecommendedKeyValue();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("RayOptions",$param) and $param["RayOptions"] !== null) {
            $this->RayOptions = [];
            foreach ($param["RayOptions"] as $key => $value){
                $obj = new RecommendedKeyValue();
                $obj->deserialize($value);
                array_push($this->RayOptions, $obj);
            }
        }
    }
}

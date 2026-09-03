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
 * MLFlow 实验追踪配置
 *
 * @method string getMlFlowMode() 获取<p>MlFlow 追踪模式：local=MlFlow Sidecar / remote=已有 MlFlow Server / none=不启用</p>
 * @method void setMlFlowMode(string $MlFlowMode) 设置<p>MlFlow 追踪模式：local=MlFlow Sidecar / remote=已有 MlFlow Server / none=不启用</p>
 * @method string getMlFlowServerId() 获取<p>已有MlFlow Server 的 ID（仅 mlFlowMode=remote 时填写，前端下拉选择后传入）</p>
 * @method void setMlFlowServerId(string $MlFlowServerId) 设置<p>已有MlFlow Server 的 ID（仅 mlFlowMode=remote 时填写，前端下拉选择后传入）</p>
 * @method string getMlFlowCosPath() 获取<p>MlFlow Sidecar 持久化存储的 COS 路径（仅 mlFlowMode=local 时填写）</p>
 * @method void setMlFlowCosPath(string $MlFlowCosPath) 设置<p>MlFlow Sidecar 持久化存储的 COS 路径（仅 mlFlowMode=local 时填写）</p>
 */
class MlFlowConfig extends AbstractModel
{
    /**
     * @var string <p>MlFlow 追踪模式：local=MlFlow Sidecar / remote=已有 MlFlow Server / none=不启用</p>
     */
    public $MlFlowMode;

    /**
     * @var string <p>已有MlFlow Server 的 ID（仅 mlFlowMode=remote 时填写，前端下拉选择后传入）</p>
     */
    public $MlFlowServerId;

    /**
     * @var string <p>MlFlow Sidecar 持久化存储的 COS 路径（仅 mlFlowMode=local 时填写）</p>
     */
    public $MlFlowCosPath;

    /**
     * @param string $MlFlowMode <p>MlFlow 追踪模式：local=MlFlow Sidecar / remote=已有 MlFlow Server / none=不启用</p>
     * @param string $MlFlowServerId <p>已有MlFlow Server 的 ID（仅 mlFlowMode=remote 时填写，前端下拉选择后传入）</p>
     * @param string $MlFlowCosPath <p>MlFlow Sidecar 持久化存储的 COS 路径（仅 mlFlowMode=local 时填写）</p>
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
        if (array_key_exists("MlFlowMode",$param) and $param["MlFlowMode"] !== null) {
            $this->MlFlowMode = $param["MlFlowMode"];
        }

        if (array_key_exists("MlFlowServerId",$param) and $param["MlFlowServerId"] !== null) {
            $this->MlFlowServerId = $param["MlFlowServerId"];
        }

        if (array_key_exists("MlFlowCosPath",$param) and $param["MlFlowCosPath"] !== null) {
            $this->MlFlowCosPath = $param["MlFlowCosPath"];
        }
    }
}

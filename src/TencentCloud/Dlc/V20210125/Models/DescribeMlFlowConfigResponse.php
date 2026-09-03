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
 * DescribeMlFlowConfig返回参数结构体
 *
 * @method string getExperimentID() 获取<p>MLflow 的实验 ID，对应训练作业配置</p>
 * @method void setExperimentID(string $ExperimentID) 设置<p>MLflow 的实验 ID，对应训练作业配置</p>
 * @method string getRunID() 获取<p>MLflow 的 RunID，对应训练作业实例 ID</p>
 * @method void setRunID(string $RunID) 设置<p>MLflow 的 RunID，对应训练作业实例 ID</p>
 * @method string getMlFlowMode() 获取<p>实例级 MLflow 模式：local / remote / none。云上一般为 Remote</p><p>枚举值：</p><ul><li>remote： 使用远程 MLflow </li><li>local： 使用本地启动的 MLflow</li><li>none： 不启用 MLflow</li></ul>
 * @method void setMlFlowMode(string $MlFlowMode) 设置<p>实例级 MLflow 模式：local / remote / none。云上一般为 Remote</p><p>枚举值：</p><ul><li>remote： 使用远程 MLflow </li><li>local： 使用本地启动的 MLflow</li><li>none： 不启用 MLflow</li></ul>
 * @method string getMlFlowUrl() 获取<p>实例级 MLflow 访问 URL</p>
 * @method void setMlFlowUrl(string $MlFlowUrl) 设置<p>实例级 MLflow 访问 URL</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMlFlowConfigResponse extends AbstractModel
{
    /**
     * @var string <p>MLflow 的实验 ID，对应训练作业配置</p>
     */
    public $ExperimentID;

    /**
     * @var string <p>MLflow 的 RunID，对应训练作业实例 ID</p>
     */
    public $RunID;

    /**
     * @var string <p>实例级 MLflow 模式：local / remote / none。云上一般为 Remote</p><p>枚举值：</p><ul><li>remote： 使用远程 MLflow </li><li>local： 使用本地启动的 MLflow</li><li>none： 不启用 MLflow</li></ul>
     */
    public $MlFlowMode;

    /**
     * @var string <p>实例级 MLflow 访问 URL</p>
     */
    public $MlFlowUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ExperimentID <p>MLflow 的实验 ID，对应训练作业配置</p>
     * @param string $RunID <p>MLflow 的 RunID，对应训练作业实例 ID</p>
     * @param string $MlFlowMode <p>实例级 MLflow 模式：local / remote / none。云上一般为 Remote</p><p>枚举值：</p><ul><li>remote： 使用远程 MLflow </li><li>local： 使用本地启动的 MLflow</li><li>none： 不启用 MLflow</li></ul>
     * @param string $MlFlowUrl <p>实例级 MLflow 访问 URL</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ExperimentID",$param) and $param["ExperimentID"] !== null) {
            $this->ExperimentID = $param["ExperimentID"];
        }

        if (array_key_exists("RunID",$param) and $param["RunID"] !== null) {
            $this->RunID = $param["RunID"];
        }

        if (array_key_exists("MlFlowMode",$param) and $param["MlFlowMode"] !== null) {
            $this->MlFlowMode = $param["MlFlowMode"];
        }

        if (array_key_exists("MlFlowUrl",$param) and $param["MlFlowUrl"] !== null) {
            $this->MlFlowUrl = $param["MlFlowUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

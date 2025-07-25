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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchRerunIntegrationTaskInstances返回参数结构体
 *
 * @method integer getSuccessCount() 获取操作成功的任务数
 * @method void setSuccessCount(integer $SuccessCount) 设置操作成功的任务数
 * @method integer getFailedCount() 获取操作失败的任务数
 * @method void setFailedCount(integer $FailedCount) 设置操作失败的任务数
 * @method integer getTotalCount() 获取任务总数
 * @method void setTotalCount(integer $TotalCount) 设置任务总数
 * @method array getTaskNames() 获取实际传的为taskId
 * @method void setTaskNames(array $TaskNames) 设置实际传的为taskId
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class BatchRerunIntegrationTaskInstancesResponse extends AbstractModel
{
    /**
     * @var integer 操作成功的任务数
     */
    public $SuccessCount;

    /**
     * @var integer 操作失败的任务数
     */
    public $FailedCount;

    /**
     * @var integer 任务总数
     */
    public $TotalCount;

    /**
     * @var array 实际传的为taskId
     */
    public $TaskNames;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SuccessCount 操作成功的任务数
     * @param integer $FailedCount 操作失败的任务数
     * @param integer $TotalCount 任务总数
     * @param array $TaskNames 实际传的为taskId
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
        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TaskNames",$param) and $param["TaskNames"] !== null) {
            $this->TaskNames = $param["TaskNames"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

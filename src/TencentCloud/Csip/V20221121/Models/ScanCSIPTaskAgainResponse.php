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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanCSIPTaskAgain返回参数结构体
 *
 * @method integer getSuccessCount() 获取<p>本次实际触发重扫的机器数（= 状态白名单过滤后的候选机器数）单位：个</p>
 * @method void setSuccessCount(integer $SuccessCount) 设置<p>本次实际触发重扫的机器数（= 状态白名单过滤后的候选机器数）单位：个</p>
 * @method integer getTaskId() 获取<p>原任务 ID（与入参一致；CWP 原版同样返回原 ID 而非新 ID，重扫为原地复用）</p>
 * @method void setTaskId(integer $TaskId) 设置<p>原任务 ID（与入参一致；CWP 原版同样返回原 ID 而非新 ID，重扫为原地复用）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ScanCSIPTaskAgainResponse extends AbstractModel
{
    /**
     * @var integer <p>本次实际触发重扫的机器数（= 状态白名单过滤后的候选机器数）单位：个</p>
     */
    public $SuccessCount;

    /**
     * @var integer <p>原任务 ID（与入参一致；CWP 原版同样返回原 ID 而非新 ID，重扫为原地复用）</p>
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SuccessCount <p>本次实际触发重扫的机器数（= 状态白名单过滤后的候选机器数）单位：个</p>
     * @param integer $TaskId <p>原任务 ID（与入参一致；CWP 原版同样返回原 ID 而非新 ID，重扫为原地复用）</p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

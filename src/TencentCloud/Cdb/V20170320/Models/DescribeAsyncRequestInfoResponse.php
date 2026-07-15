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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsyncRequestInfo返回参数结构体
 *
 * @method string getStatus() 获取<p>任务执行结果。</p><p>枚举值：</p><ul><li>INITIAL： 初始化。</li><li>RUNNING： 运行中。</li><li>SUCCESS： 执行成功。</li><li>FAILED： 执行失败。</li><li>KILLED： 已终止。</li><li>REMOVED： 已删除。</li><li>PAUSED： 终止中。</li><li>UNDEFINED： 任务已创建但未开始执行，在 WaitSwitch = true 场景下，表示任务正在等待维护时间窗到来。</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务执行结果。</p><p>枚举值：</p><ul><li>INITIAL： 初始化。</li><li>RUNNING： 运行中。</li><li>SUCCESS： 执行成功。</li><li>FAILED： 执行失败。</li><li>KILLED： 已终止。</li><li>REMOVED： 已删除。</li><li>PAUSED： 终止中。</li><li>UNDEFINED： 任务已创建但未开始执行，在 WaitSwitch = true 场景下，表示任务正在等待维护时间窗到来。</li></ul>
 * @method string getInfo() 获取<p>任务执行信息描述。</p>
 * @method void setInfo(string $Info) 设置<p>任务执行信息描述。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAsyncRequestInfoResponse extends AbstractModel
{
    /**
     * @var string <p>任务执行结果。</p><p>枚举值：</p><ul><li>INITIAL： 初始化。</li><li>RUNNING： 运行中。</li><li>SUCCESS： 执行成功。</li><li>FAILED： 执行失败。</li><li>KILLED： 已终止。</li><li>REMOVED： 已删除。</li><li>PAUSED： 终止中。</li><li>UNDEFINED： 任务已创建但未开始执行，在 WaitSwitch = true 场景下，表示任务正在等待维护时间窗到来。</li></ul>
     */
    public $Status;

    /**
     * @var string <p>任务执行信息描述。</p>
     */
    public $Info;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status <p>任务执行结果。</p><p>枚举值：</p><ul><li>INITIAL： 初始化。</li><li>RUNNING： 运行中。</li><li>SUCCESS： 执行成功。</li><li>FAILED： 执行失败。</li><li>KILLED： 已终止。</li><li>REMOVED： 已删除。</li><li>PAUSED： 终止中。</li><li>UNDEFINED： 任务已创建但未开始执行，在 WaitSwitch = true 场景下，表示任务正在等待维护时间窗到来。</li></ul>
     * @param string $Info <p>任务执行信息描述。</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

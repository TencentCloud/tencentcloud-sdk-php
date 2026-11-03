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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScheduledTaskLogList返回参数结构体
 *
 * @method integer getTotalCount() 获取<p>总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总数</p>
 * @method array getScheduledTaskLogSet() 获取<p>执行日志列表（分页后）</p>
 * @method void setScheduledTaskLogSet(array $ScheduledTaskLogSet) 设置<p>执行日志列表（分页后）</p>
 * @method ScheduledTaskLogStats getStats() 获取<p>聚合统计（WithStats=true 时返回）</p>
 * @method void setStats(ScheduledTaskLogStats $Stats) 设置<p>聚合统计（WithStats=true 时返回）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScheduledTaskLogListResponse extends AbstractModel
{
    /**
     * @var integer <p>总数</p>
     */
    public $TotalCount;

    /**
     * @var array <p>执行日志列表（分页后）</p>
     */
    public $ScheduledTaskLogSet;

    /**
     * @var ScheduledTaskLogStats <p>聚合统计（WithStats=true 时返回）</p>
     */
    public $Stats;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount <p>总数</p>
     * @param array $ScheduledTaskLogSet <p>执行日志列表（分页后）</p>
     * @param ScheduledTaskLogStats $Stats <p>聚合统计（WithStats=true 时返回）</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ScheduledTaskLogSet",$param) and $param["ScheduledTaskLogSet"] !== null) {
            $this->ScheduledTaskLogSet = [];
            foreach ($param["ScheduledTaskLogSet"] as $key => $value){
                $obj = new ScheduledTaskLogSummary();
                $obj->deserialize($value);
                array_push($this->ScheduledTaskLogSet, $obj);
            }
        }

        if (array_key_exists("Stats",$param) and $param["Stats"] !== null) {
            $this->Stats = new ScheduledTaskLogStats();
            $this->Stats->deserialize($param["Stats"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

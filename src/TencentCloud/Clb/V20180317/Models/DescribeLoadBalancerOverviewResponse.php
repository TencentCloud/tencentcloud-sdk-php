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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoadBalancerOverview返回参数结构体
 *
 * @method integer getTotalCount() 获取负载均衡总数
 * @method void setTotalCount(integer $TotalCount) 设置负载均衡总数
 * @method integer getRunningCount() 获取运行中的负载均衡数目
 * @method void setRunningCount(integer $RunningCount) 设置运行中的负载均衡数目
 * @method integer getIsolationCount() 获取隔离中的负载均衡数目
 * @method void setIsolationCount(integer $IsolationCount) 设置隔离中的负载均衡数目
 * @method integer getWillExpireCount() 获取即将到期的负载均衡数目
 * @method void setWillExpireCount(integer $WillExpireCount) 设置即将到期的负载均衡数目
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLoadBalancerOverviewResponse extends AbstractModel
{
    /**
     * @var integer 负载均衡总数
     */
    public $TotalCount;

    /**
     * @var integer 运行中的负载均衡数目
     */
    public $RunningCount;

    /**
     * @var integer 隔离中的负载均衡数目
     */
    public $IsolationCount;

    /**
     * @var integer 即将到期的负载均衡数目
     */
    public $WillExpireCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 负载均衡总数
     * @param integer $RunningCount 运行中的负载均衡数目
     * @param integer $IsolationCount 隔离中的负载均衡数目
     * @param integer $WillExpireCount 即将到期的负载均衡数目
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("IsolationCount",$param) and $param["IsolationCount"] !== null) {
            $this->IsolationCount = $param["IsolationCount"];
        }

        if (array_key_exists("WillExpireCount",$param) and $param["WillExpireCount"] !== null) {
            $this->WillExpireCount = $param["WillExpireCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

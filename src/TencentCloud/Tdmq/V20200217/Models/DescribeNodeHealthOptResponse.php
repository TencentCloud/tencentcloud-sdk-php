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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodeHealthOpt返回参数结构体
 *
 * @method integer getNodeState() 获取0-异常；1-正常
 * @method void setNodeState(integer $NodeState) 设置0-异常；1-正常
 * @method string getLatestHealthCheckTime() 获取最近一次健康检查的时间
 * @method void setLatestHealthCheckTime(string $LatestHealthCheckTime) 设置最近一次健康检查的时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNodeHealthOptResponse extends AbstractModel
{
    /**
     * @var integer 0-异常；1-正常
     */
    public $NodeState;

    /**
     * @var string 最近一次健康检查的时间
     */
    public $LatestHealthCheckTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $NodeState 0-异常；1-正常
     * @param string $LatestHealthCheckTime 最近一次健康检查的时间
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
        if (array_key_exists("NodeState",$param) and $param["NodeState"] !== null) {
            $this->NodeState = $param["NodeState"];
        }

        if (array_key_exists("LatestHealthCheckTime",$param) and $param["LatestHealthCheckTime"] !== null) {
            $this->LatestHealthCheckTime = $param["LatestHealthCheckTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

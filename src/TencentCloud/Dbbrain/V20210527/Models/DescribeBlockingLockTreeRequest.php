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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBlockingLockTree请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getProduct() 获取<p>服务产品类型，固定为sqlserver。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，固定为sqlserver。</p>
 * @method string getMonitorLoop() 获取<p>lock monitor 扫描轮次 ID（可从 DescribeBlockingTimeRange 返回的 MonitorLoops 列表选择，也可从 DescribeBlockingLogs / DescribeBlockingTrees 返回的 MonitorLoop 字段获取）。与 BlockingTime 二选一，MonitorLoop 优先。</p>
 * @method void setMonitorLoop(string $MonitorLoop) 设置<p>lock monitor 扫描轮次 ID（可从 DescribeBlockingTimeRange 返回的 MonitorLoops 列表选择，也可从 DescribeBlockingLogs / DescribeBlockingTrees 返回的 MonitorLoop 字段获取）。与 BlockingTime 二选一，MonitorLoop 优先。</p>
 * @method string getBlockingTime() 获取<p>阻塞时间点，格式：yyyy-MM-dd HH:mm:ss。当 MonitorLoop 为空时使用该字段定位：后端会在该时间点±1分钟范围内寻找最接近的 MonitorLoop 并下钻其阻塞树。与 MonitorLoop 二选一。BlockingTime 必须在最近 30 天内，否则返回 InvalidParameterValue。</p>
 * @method void setBlockingTime(string $BlockingTime) 设置<p>阻塞时间点，格式：yyyy-MM-dd HH:mm:ss。当 MonitorLoop 为空时使用该字段定位：后端会在该时间点±1分钟范围内寻找最接近的 MonitorLoop 并下钻其阻塞树。与 MonitorLoop 二选一。BlockingTime 必须在最近 30 天内，否则返回 InvalidParameterValue。</p>
 */
class DescribeBlockingLockTreeRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>服务产品类型，固定为sqlserver。</p>
     */
    public $Product;

    /**
     * @var string <p>lock monitor 扫描轮次 ID（可从 DescribeBlockingTimeRange 返回的 MonitorLoops 列表选择，也可从 DescribeBlockingLogs / DescribeBlockingTrees 返回的 MonitorLoop 字段获取）。与 BlockingTime 二选一，MonitorLoop 优先。</p>
     */
    public $MonitorLoop;

    /**
     * @var string <p>阻塞时间点，格式：yyyy-MM-dd HH:mm:ss。当 MonitorLoop 为空时使用该字段定位：后端会在该时间点±1分钟范围内寻找最接近的 MonitorLoop 并下钻其阻塞树。与 MonitorLoop 二选一。BlockingTime 必须在最近 30 天内，否则返回 InvalidParameterValue。</p>
     */
    public $BlockingTime;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $Product <p>服务产品类型，固定为sqlserver。</p>
     * @param string $MonitorLoop <p>lock monitor 扫描轮次 ID（可从 DescribeBlockingTimeRange 返回的 MonitorLoops 列表选择，也可从 DescribeBlockingLogs / DescribeBlockingTrees 返回的 MonitorLoop 字段获取）。与 BlockingTime 二选一，MonitorLoop 优先。</p>
     * @param string $BlockingTime <p>阻塞时间点，格式：yyyy-MM-dd HH:mm:ss。当 MonitorLoop 为空时使用该字段定位：后端会在该时间点±1分钟范围内寻找最接近的 MonitorLoop 并下钻其阻塞树。与 MonitorLoop 二选一。BlockingTime 必须在最近 30 天内，否则返回 InvalidParameterValue。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("MonitorLoop",$param) and $param["MonitorLoop"] !== null) {
            $this->MonitorLoop = $param["MonitorLoop"];
        }

        if (array_key_exists("BlockingTime",$param) and $param["BlockingTime"] !== null) {
            $this->BlockingTime = $param["BlockingTime"];
        }
    }
}

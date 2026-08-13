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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOffsetByTime请求参数结构体
 *
 * @method string getSubscribeId() 获取<p>数据订阅实例的 ID，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
 * @method void setSubscribeId(string $SubscribeId) 设置<p>数据订阅实例的 ID，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
 * @method string getTime() 获取<p>时间。当 <code>DateTimeISOFormat=true</code> 时按 RFC 3339 传入（如 <code>2026-04-23T20:21:35+08:00</code>），否则按 <code>Y-m-d h:m:s</code>（北京时间）传入。如果输入时间比当前时间晚的多，相当于查询最新 offset；如果输入时间比当前时间早的多，相当于查询最老 offset；如果输入空，默认 0 时间，等价于查询最老 offset。</p><p>参数格式：2026-04-23T20:21:35+08:00</p>
 * @method void setTime(string $Time) 设置<p>时间。当 <code>DateTimeISOFormat=true</code> 时按 RFC 3339 传入（如 <code>2026-04-23T20:21:35+08:00</code>），否则按 <code>Y-m-d h:m:s</code>（北京时间）传入。如果输入时间比当前时间晚的多，相当于查询最新 offset；如果输入时间比当前时间早的多，相当于查询最老 offset；如果输入空，默认 0 时间，等价于查询最老 offset。</p><p>参数格式：2026-04-23T20:21:35+08:00</p>
 */
class DescribeOffsetByTimeRequest extends AbstractModel
{
    /**
     * @var string <p>数据订阅实例的 ID，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
     */
    public $SubscribeId;

    /**
     * @var string <p>时间。当 <code>DateTimeISOFormat=true</code> 时按 RFC 3339 传入（如 <code>2026-04-23T20:21:35+08:00</code>），否则按 <code>Y-m-d h:m:s</code>（北京时间）传入。如果输入时间比当前时间晚的多，相当于查询最新 offset；如果输入时间比当前时间早的多，相当于查询最老 offset；如果输入空，默认 0 时间，等价于查询最老 offset。</p><p>参数格式：2026-04-23T20:21:35+08:00</p>
     */
    public $Time;

    /**
     * @param string $SubscribeId <p>数据订阅实例的 ID，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
     * @param string $Time <p>时间。当 <code>DateTimeISOFormat=true</code> 时按 RFC 3339 传入（如 <code>2026-04-23T20:21:35+08:00</code>），否则按 <code>Y-m-d h:m:s</code>（北京时间）传入。如果输入时间比当前时间晚的多，相当于查询最新 offset；如果输入时间比当前时间早的多，相当于查询最老 offset；如果输入空，默认 0 时间，等价于查询最老 offset。</p><p>参数格式：2026-04-23T20:21:35+08:00</p>
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}

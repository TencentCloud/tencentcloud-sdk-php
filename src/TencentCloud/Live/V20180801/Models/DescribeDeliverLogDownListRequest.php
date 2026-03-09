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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeliverLogDownList请求参数结构体
 *
 * @method string getStartTime() 获取<p>开始时间。UTC 格式，例如：2022-02-09T12:36:42Z。<br>注意：</p><ol><li>北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></ol>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间。UTC 格式，例如：2022-02-09T12:36:42Z。<br>注意：</p><ol><li>北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></ol>
 * @method string getEndTime() 获取<p>结束时间。UTC 格式，例如：2022-02-09T12:36:42Z。<br>注意：</p><ol><li>结束时间 - 开始时间 &lt;=7天。</li><li>北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></ol>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间。UTC 格式，例如：2022-02-09T12:36:42Z。<br>注意：</p><ol><li>结束时间 - 开始时间 &lt;=7天。</li><li>北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></ol>
 * @method array getDeliverDomains() 获取<p>域名列表。</p>
 * @method void setDeliverDomains(array $DeliverDomains) 设置<p>域名列表。</p>
 */
class DescribeDeliverLogDownListRequest extends AbstractModel
{
    /**
     * @var string <p>开始时间。UTC 格式，例如：2022-02-09T12:36:42Z。<br>注意：</p><ol><li>北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></ol>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间。UTC 格式，例如：2022-02-09T12:36:42Z。<br>注意：</p><ol><li>结束时间 - 开始时间 &lt;=7天。</li><li>北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></ol>
     */
    public $EndTime;

    /**
     * @var array <p>域名列表。</p>
     */
    public $DeliverDomains;

    /**
     * @param string $StartTime <p>开始时间。UTC 格式，例如：2022-02-09T12:36:42Z。<br>注意：</p><ol><li>北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></ol>
     * @param string $EndTime <p>结束时间。UTC 格式，例如：2022-02-09T12:36:42Z。<br>注意：</p><ol><li>结束时间 - 开始时间 &lt;=7天。</li><li>北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></ol>
     * @param array $DeliverDomains <p>域名列表。</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DeliverDomains",$param) and $param["DeliverDomains"] !== null) {
            $this->DeliverDomains = $param["DeliverDomains"];
        }
    }
}

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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwAnalysisData返回参数结构体
 *
 * @method string getData() 获取查询结果。Response.Data 是 UTF-8 JSON object 字符串，调用方需要二次 JSON 解析。status 取值为 success、partial 或 error。section 查询失败时，error 只返回固定安全摘要，不包含底层服务内部信息。示例仅展示一个代表性 section；实际返回包含当前场景全部未跳过的 section；summary 包含 total_findings、high_risk_count 和 data_coverage，metadata 包含 scenario、time_range、object 和 query_stats，query_stats 包含 total_queries、successful 和 failed。
 * @method void setData(string $Data) 设置查询结果。Response.Data 是 UTF-8 JSON object 字符串，调用方需要二次 JSON 解析。status 取值为 success、partial 或 error。section 查询失败时，error 只返回固定安全摘要，不包含底层服务内部信息。示例仅展示一个代表性 section；实际返回包含当前场景全部未跳过的 section；summary 包含 total_findings、high_risk_count 和 data_coverage，metadata 包含 scenario、time_range、object 和 query_stats，query_stats 包含 total_queries、successful 和 failed。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCfwAnalysisDataResponse extends AbstractModel
{
    /**
     * @var string 查询结果。Response.Data 是 UTF-8 JSON object 字符串，调用方需要二次 JSON 解析。status 取值为 success、partial 或 error。section 查询失败时，error 只返回固定安全摘要，不包含底层服务内部信息。示例仅展示一个代表性 section；实际返回包含当前场景全部未跳过的 section；summary 包含 total_findings、high_risk_count 和 data_coverage，metadata 包含 scenario、time_range、object 和 query_stats，query_stats 包含 total_queries、successful 和 failed。
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Data 查询结果。Response.Data 是 UTF-8 JSON object 字符串，调用方需要二次 JSON 解析。status 取值为 success、partial 或 error。section 查询失败时，error 只返回固定安全摘要，不包含底层服务内部信息。示例仅展示一个代表性 section；实际返回包含当前场景全部未跳过的 section；summary 包含 total_findings、high_risk_count 和 data_coverage，metadata 包含 scenario、time_range、object 和 query_stats，query_stats 包含 total_queries、successful 和 failed。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAppStatisticsOverview返回参数结构体
 *
 * @method string getAvgFirstTokenTime() 获取<p>首 tokens 平均耗时（毫秒）</p>
 * @method void setAvgFirstTokenTime(string $AvgFirstTokenTime) 设置<p>首 tokens 平均耗时（毫秒）</p>
 * @method string getAvgTotalTokenTime() 获取<p>总 tokens 平均耗时（毫秒）</p>
 * @method void setAvgTotalTokenTime(string $AvgTotalTokenTime) 设置<p>总 tokens 平均耗时（毫秒）</p>
 * @method float getCallSuccessRate() 获取<p>应用调用成功率（百分比，0~100）</p>
 * @method void setCallSuccessRate(float $CallSuccessRate) 设置<p>应用调用成功率（百分比，0~100）</p>
 * @method array getReplyTypeDistributionList() 获取<p>回复类型分布列表；按 app_type 统计，已补全所有回复方式并按固定顺序返回，无数据的回复方式 call_count 为 0</p>
 * @method void setReplyTypeDistributionList(array $ReplyTypeDistributionList) 设置<p>回复类型分布列表；按 app_type 统计，已补全所有回复方式并按固定顺序返回，无数据的回复方式 call_count 为 0</p>
 * @method string getTotalCallCount() 获取<p>总调用次数</p>
 * @method void setTotalCallCount(string $TotalCallCount) 设置<p>总调用次数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAppStatisticsOverviewResponse extends AbstractModel
{
    /**
     * @var string <p>首 tokens 平均耗时（毫秒）</p>
     */
    public $AvgFirstTokenTime;

    /**
     * @var string <p>总 tokens 平均耗时（毫秒）</p>
     */
    public $AvgTotalTokenTime;

    /**
     * @var float <p>应用调用成功率（百分比，0~100）</p>
     */
    public $CallSuccessRate;

    /**
     * @var array <p>回复类型分布列表；按 app_type 统计，已补全所有回复方式并按固定顺序返回，无数据的回复方式 call_count 为 0</p>
     */
    public $ReplyTypeDistributionList;

    /**
     * @var string <p>总调用次数</p>
     */
    public $TotalCallCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AvgFirstTokenTime <p>首 tokens 平均耗时（毫秒）</p>
     * @param string $AvgTotalTokenTime <p>总 tokens 平均耗时（毫秒）</p>
     * @param float $CallSuccessRate <p>应用调用成功率（百分比，0~100）</p>
     * @param array $ReplyTypeDistributionList <p>回复类型分布列表；按 app_type 统计，已补全所有回复方式并按固定顺序返回，无数据的回复方式 call_count 为 0</p>
     * @param string $TotalCallCount <p>总调用次数</p>
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
        if (array_key_exists("AvgFirstTokenTime",$param) and $param["AvgFirstTokenTime"] !== null) {
            $this->AvgFirstTokenTime = $param["AvgFirstTokenTime"];
        }

        if (array_key_exists("AvgTotalTokenTime",$param) and $param["AvgTotalTokenTime"] !== null) {
            $this->AvgTotalTokenTime = $param["AvgTotalTokenTime"];
        }

        if (array_key_exists("CallSuccessRate",$param) and $param["CallSuccessRate"] !== null) {
            $this->CallSuccessRate = $param["CallSuccessRate"];
        }

        if (array_key_exists("ReplyTypeDistributionList",$param) and $param["ReplyTypeDistributionList"] !== null) {
            $this->ReplyTypeDistributionList = [];
            foreach ($param["ReplyTypeDistributionList"] as $key => $value){
                $obj = new Distribution();
                $obj->deserialize($value);
                array_push($this->ReplyTypeDistributionList, $obj);
            }
        }

        if (array_key_exists("TotalCallCount",$param) and $param["TotalCallCount"] !== null) {
            $this->TotalCallCount = $param["TotalCallCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

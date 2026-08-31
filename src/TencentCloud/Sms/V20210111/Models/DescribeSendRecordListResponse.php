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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSendRecordList返回参数结构体
 *
 * @method array getSendRecordSet() 获取<p>短信下发记录集合。</p>
 * @method void setSendRecordSet(array $SendRecordSet) 设置<p>短信下发记录集合。</p>
 * @method integer getTotalCount() 获取<p>查询时间范围内的下发记录总数，注：最大支持查询单个下发手机号码 72 小时内的 1000 条记录。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>查询时间范围内的下发记录总数，注：最大支持查询单个下发手机号码 72 小时内的 1000 条记录。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSendRecordListResponse extends AbstractModel
{
    /**
     * @var array <p>短信下发记录集合。</p>
     */
    public $SendRecordSet;

    /**
     * @var integer <p>查询时间范围内的下发记录总数，注：最大支持查询单个下发手机号码 72 小时内的 1000 条记录。</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SendRecordSet <p>短信下发记录集合。</p>
     * @param integer $TotalCount <p>查询时间范围内的下发记录总数，注：最大支持查询单个下发手机号码 72 小时内的 1000 条记录。</p>
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
        if (array_key_exists("SendRecordSet",$param) and $param["SendRecordSet"] !== null) {
            $this->SendRecordSet = [];
            foreach ($param["SendRecordSet"] as $key => $value){
                $obj = new SendRecord();
                $obj->deserialize($value);
                array_push($this->SendRecordSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQuotaOverview返回参数结构体
 *
 * @method AccountQuotaOverview getAccountQuotaOverview() 获取<p>主账号配额上限及全账号当前用量</p>
 * @method void setAccountQuotaOverview(AccountQuotaOverview $AccountQuotaOverview) 设置<p>主账号配额上限及全账号当前用量</p>
 * @method array getQuotaGroupSet() 获取<p>当前分页下的配额组配额与用量列表。没有数据时返回空数组。</p>
 * @method void setQuotaGroupSet(array $QuotaGroupSet) 设置<p>当前分页下的配额组配额与用量列表。没有数据时返回空数组。</p>
 * @method integer getTotalCount() 获取<p>满足过滤条件的配额组总数，不受当前分页大小影响。</p><p>单位：个</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>满足过滤条件的配额组总数，不受当前分页大小影响。</p><p>单位：个</p>
 * @method string getDataTime() 获取<p>本次查询完成时间，格式为 RFC3339</p>
 * @method void setDataTime(string $DataTime) 设置<p>本次查询完成时间，格式为 RFC3339</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeQuotaOverviewResponse extends AbstractModel
{
    /**
     * @var AccountQuotaOverview <p>主账号配额上限及全账号当前用量</p>
     */
    public $AccountQuotaOverview;

    /**
     * @var array <p>当前分页下的配额组配额与用量列表。没有数据时返回空数组。</p>
     */
    public $QuotaGroupSet;

    /**
     * @var integer <p>满足过滤条件的配额组总数，不受当前分页大小影响。</p><p>单位：个</p>
     */
    public $TotalCount;

    /**
     * @var string <p>本次查询完成时间，格式为 RFC3339</p>
     */
    public $DataTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AccountQuotaOverview $AccountQuotaOverview <p>主账号配额上限及全账号当前用量</p>
     * @param array $QuotaGroupSet <p>当前分页下的配额组配额与用量列表。没有数据时返回空数组。</p>
     * @param integer $TotalCount <p>满足过滤条件的配额组总数，不受当前分页大小影响。</p><p>单位：个</p>
     * @param string $DataTime <p>本次查询完成时间，格式为 RFC3339</p>
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
        if (array_key_exists("AccountQuotaOverview",$param) and $param["AccountQuotaOverview"] !== null) {
            $this->AccountQuotaOverview = new AccountQuotaOverview();
            $this->AccountQuotaOverview->deserialize($param["AccountQuotaOverview"]);
        }

        if (array_key_exists("QuotaGroupSet",$param) and $param["QuotaGroupSet"] !== null) {
            $this->QuotaGroupSet = [];
            foreach ($param["QuotaGroupSet"] as $key => $value){
                $obj = new QuotaGroupOverview();
                $obj->deserialize($value);
                array_push($this->QuotaGroupSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

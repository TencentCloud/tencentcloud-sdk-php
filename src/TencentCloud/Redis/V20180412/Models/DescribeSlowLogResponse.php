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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLog返回参数结构体
 *
 * @method integer getTotalCount() 获取慢查询总数。
 * @method void setTotalCount(integer $TotalCount) 设置慢查询总数。
 * @method array getInstanceSlowlogDetail() 获取已废弃，该参数存在命名不规范问题，后续用参数InstanceSlowLogDetail取代。慢查询详情。
 * @method void setInstanceSlowlogDetail(array $InstanceSlowlogDetail) 设置已废弃，该参数存在命名不规范问题，后续用参数InstanceSlowLogDetail取代。慢查询详情。
 * @method array getInstanceSlowLogDetail() 获取慢查询详情，注意：TotalCount大于1W，即慢日志超过1万条，不支持返回日志详情，返回数据为空。 建议缩小BeginTime和EndTime的时间间隔，多次查询。
 * @method void setInstanceSlowLogDetail(array $InstanceSlowLogDetail) 设置慢查询详情，注意：TotalCount大于1W，即慢日志超过1万条，不支持返回日志详情，返回数据为空。 建议缩小BeginTime和EndTime的时间间隔，多次查询。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSlowLogResponse extends AbstractModel
{
    /**
     * @var integer 慢查询总数。
     */
    public $TotalCount;

    /**
     * @var array 已废弃，该参数存在命名不规范问题，后续用参数InstanceSlowLogDetail取代。慢查询详情。
     * @deprecated
     */
    public $InstanceSlowlogDetail;

    /**
     * @var array 慢查询详情，注意：TotalCount大于1W，即慢日志超过1万条，不支持返回日志详情，返回数据为空。 建议缩小BeginTime和EndTime的时间间隔，多次查询。
     */
    public $InstanceSlowLogDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 慢查询总数。
     * @param array $InstanceSlowlogDetail 已废弃，该参数存在命名不规范问题，后续用参数InstanceSlowLogDetail取代。慢查询详情。
     * @param array $InstanceSlowLogDetail 慢查询详情，注意：TotalCount大于1W，即慢日志超过1万条，不支持返回日志详情，返回数据为空。 建议缩小BeginTime和EndTime的时间间隔，多次查询。
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

        if (array_key_exists("InstanceSlowlogDetail",$param) and $param["InstanceSlowlogDetail"] !== null) {
            $this->InstanceSlowlogDetail = [];
            foreach ($param["InstanceSlowlogDetail"] as $key => $value){
                $obj = new InstanceSlowlogDetail();
                $obj->deserialize($value);
                array_push($this->InstanceSlowlogDetail, $obj);
            }
        }

        if (array_key_exists("InstanceSlowLogDetail",$param) and $param["InstanceSlowLogDetail"] !== null) {
            $this->InstanceSlowLogDetail = [];
            foreach ($param["InstanceSlowLogDetail"] as $key => $value){
                $obj = new InstanceSlowlogDetail();
                $obj->deserialize($value);
                array_push($this->InstanceSlowLogDetail, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsage返回参数结构体
 *
 * @method integer getTotal() 获取检索出相关使用详情总数
 * @method void setTotal(integer $Total) 设置检索出相关使用详情总数
 * @method string getQueryKey() 获取查询 key，作为翻页查询入参
 * @method void setQueryKey(string $QueryKey) 设置查询 key，作为翻页查询入参
 * @method array getUsageSet() 获取使用时长详情
 * @method void setUsageSet(array $UsageSet) 设置使用时长详情
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUsageResponse extends AbstractModel
{
    /**
     * @var integer 检索出相关使用详情总数
     */
    public $Total;

    /**
     * @var string 查询 key，作为翻页查询入参
     */
    public $QueryKey;

    /**
     * @var array 使用时长详情
     */
    public $UsageSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 检索出相关使用详情总数
     * @param string $QueryKey 查询 key，作为翻页查询入参
     * @param array $UsageSet 使用时长详情
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("QueryKey",$param) and $param["QueryKey"] !== null) {
            $this->QueryKey = $param["QueryKey"];
        }

        if (array_key_exists("UsageSet",$param) and $param["UsageSet"] !== null) {
            $this->UsageSet = [];
            foreach ($param["UsageSet"] as $key => $value){
                $obj = new Usage();
                $obj->deserialize($value);
                array_push($this->UsageSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

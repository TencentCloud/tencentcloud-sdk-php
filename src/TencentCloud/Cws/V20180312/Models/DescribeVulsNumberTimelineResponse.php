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
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulsNumberTimeline返回参数结构体
 *
 * @method integer getTotalCount() 获取统计数据记录数量。
 * @method void setTotalCount(integer $TotalCount) 设置统计数据记录数量。
 * @method array getVulsTimeline() 获取用户漏洞数随时间变化统计数据。
 * @method void setVulsTimeline(array $VulsTimeline) 设置用户漏洞数随时间变化统计数据。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulsNumberTimelineResponse extends AbstractModel
{
    /**
     * @var integer 统计数据记录数量。
     */
    public $TotalCount;

    /**
     * @var array 用户漏洞数随时间变化统计数据。
     */
    public $VulsTimeline;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 统计数据记录数量。
     * @param array $VulsTimeline 用户漏洞数随时间变化统计数据。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("VulsTimeline",$param) and $param["VulsTimeline"] !== null) {
            $this->VulsTimeline = [];
            foreach ($param["VulsTimeline"] as $key => $value){
                $obj = new VulsTimeline();
                $obj->deserialize($value);
                array_push($this->VulsTimeline, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

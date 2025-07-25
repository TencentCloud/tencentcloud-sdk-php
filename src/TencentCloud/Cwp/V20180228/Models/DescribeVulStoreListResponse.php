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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulStoreList返回参数结构体
 *
 * @method array getList() 获取漏洞信息
 * @method void setList(array $List) 设置漏洞信息
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method integer getRemaining() 获取今日剩余搜索此时
 * @method void setRemaining(integer $Remaining) 设置今日剩余搜索此时
 * @method integer getFreeSearchTimes() 获取免费搜索次数
 * @method void setFreeSearchTimes(integer $FreeSearchTimes) 设置免费搜索次数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulStoreListResponse extends AbstractModel
{
    /**
     * @var array 漏洞信息
     */
    public $List;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var integer 今日剩余搜索此时
     */
    public $Remaining;

    /**
     * @var integer 免费搜索次数
     */
    public $FreeSearchTimes;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $List 漏洞信息
     * @param integer $TotalCount 总数
     * @param integer $Remaining 今日剩余搜索此时
     * @param integer $FreeSearchTimes 免费搜索次数
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new VulStoreListInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Remaining",$param) and $param["Remaining"] !== null) {
            $this->Remaining = $param["Remaining"];
        }

        if (array_key_exists("FreeSearchTimes",$param) and $param["FreeSearchTimes"] !== null) {
            $this->FreeSearchTimes = $param["FreeSearchTimes"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

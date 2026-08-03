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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRayJobEventLog返回参数结构体
 *
 * @method integer getTotalCount() 获取事件总数
 * @method void setTotalCount(integer $TotalCount) 设置事件总数
 * @method array getEvents() 获取事件列表
 * @method void setEvents(array $Events) 设置事件列表
 * @method integer getPage() 获取当前页码（从1开始）
 * @method void setPage(integer $Page) 设置当前页码（从1开始）
 * @method integer getPageSize() 获取页数
 * @method void setPageSize(integer $PageSize) 设置页数
 * @method integer getTotalPages() 获取总页数
 * @method void setTotalPages(integer $TotalPages) 设置总页数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetRayJobEventLogResponse extends AbstractModel
{
    /**
     * @var integer 事件总数
     */
    public $TotalCount;

    /**
     * @var array 事件列表
     */
    public $Events;

    /**
     * @var integer 当前页码（从1开始）
     */
    public $Page;

    /**
     * @var integer 页数
     */
    public $PageSize;

    /**
     * @var integer 总页数
     */
    public $TotalPages;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 事件总数
     * @param array $Events 事件列表
     * @param integer $Page 当前页码（从1开始）
     * @param integer $PageSize 页数
     * @param integer $TotalPages 总页数
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

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new EventLogItem();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalPages",$param) and $param["TotalPages"] !== null) {
            $this->TotalPages = $param["TotalPages"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

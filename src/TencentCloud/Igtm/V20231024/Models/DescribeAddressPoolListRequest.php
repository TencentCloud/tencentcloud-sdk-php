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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAddressPoolList请求参数结构体
 *
 * @method array getFilters() 获取告警过滤条件：PoolName：地址池名称；MonitorId：监控器id
 * @method void setFilters(array $Filters) 设置告警过滤条件：PoolName：地址池名称；MonitorId：监控器id
 * @method integer getOffset() 获取页数
 * @method void setOffset(integer $Offset) 设置页数
 * @method integer getLimit() 获取每页数
 * @method void setLimit(integer $Limit) 设置每页数
 */
class DescribeAddressPoolListRequest extends AbstractModel
{
    /**
     * @var array 告警过滤条件：PoolName：地址池名称；MonitorId：监控器id
     */
    public $Filters;

    /**
     * @var integer 页数
     */
    public $Offset;

    /**
     * @var integer 每页数
     */
    public $Limit;

    /**
     * @param array $Filters 告警过滤条件：PoolName：地址池名称；MonitorId：监控器id
     * @param integer $Offset 页数
     * @param integer $Limit 每页数
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ResourceFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

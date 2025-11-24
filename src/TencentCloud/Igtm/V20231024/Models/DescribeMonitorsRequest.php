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
 * DescribeMonitors请求参数结构体
 *
 * @method integer getOffset() 获取分页，偏移值
 * @method void setOffset(integer $Offset) 设置分页，偏移值
 * @method integer getLimit() 获取分页，当前分页记录数
 * @method void setLimit(integer $Limit) 设置分页，当前分页记录数
 * @method array getFilters() 获取查询过滤条件：MonitorName：监控器名称；MonitorId：监控器id
 * @method void setFilters(array $Filters) 设置查询过滤条件：MonitorName：监控器名称；MonitorId：监控器id
 * @method integer getIsDetectNum() 获取是否查探测次数0否1是
 * @method void setIsDetectNum(integer $IsDetectNum) 设置是否查探测次数0否1是
 */
class DescribeMonitorsRequest extends AbstractModel
{
    /**
     * @var integer 分页，偏移值
     */
    public $Offset;

    /**
     * @var integer 分页，当前分页记录数
     */
    public $Limit;

    /**
     * @var array 查询过滤条件：MonitorName：监控器名称；MonitorId：监控器id
     */
    public $Filters;

    /**
     * @var integer 是否查探测次数0否1是
     */
    public $IsDetectNum;

    /**
     * @param integer $Offset 分页，偏移值
     * @param integer $Limit 分页，当前分页记录数
     * @param array $Filters 查询过滤条件：MonitorName：监控器名称；MonitorId：监控器id
     * @param integer $IsDetectNum 是否查探测次数0否1是
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ResourceFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IsDetectNum",$param) and $param["IsDetectNum"] !== null) {
            $this->IsDetectNum = $param["IsDetectNum"];
        }
    }
}

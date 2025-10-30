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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAndroidInstanceTasksStatus请求参数结构体
 *
 * @method array getTaskIds() 获取任务 ID 列表
 * @method void setTaskIds(array $TaskIds) 设置任务 ID 列表
 * @method array getFilter() 获取条件过滤器
 * @method void setFilter(array $Filter) 设置条件过滤器
 * @method integer getOffset() 获取偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0
 * @method integer getLimit() 获取限制量，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置限制量，默认为20，最大值为100
 * @method integer getRecentDays() 获取时间范围限制，以天数为单位
 * @method void setRecentDays(integer $RecentDays) 设置时间范围限制，以天数为单位
 */
class DescribeAndroidInstanceTasksStatusRequest extends AbstractModel
{
    /**
     * @var array 任务 ID 列表
     */
    public $TaskIds;

    /**
     * @var array 条件过滤器
     */
    public $Filter;

    /**
     * @var integer 偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 限制量，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @var integer 时间范围限制，以天数为单位
     */
    public $RecentDays;

    /**
     * @param array $TaskIds 任务 ID 列表
     * @param array $Filter 条件过滤器
     * @param integer $Offset 偏移量，默认为 0
     * @param integer $Limit 限制量，默认为20，最大值为100
     * @param integer $RecentDays 时间范围限制，以天数为单位
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RecentDays",$param) and $param["RecentDays"] !== null) {
            $this->RecentDays = $param["RecentDays"];
        }
    }
}

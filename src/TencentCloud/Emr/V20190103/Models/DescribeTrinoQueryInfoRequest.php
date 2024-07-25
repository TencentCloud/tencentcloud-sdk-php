<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrinoQueryInfo请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method integer getStartTime() 获取获取查询信息开始时间 (s)
 * @method void setStartTime(integer $StartTime) 设置获取查询信息开始时间 (s)
 * @method integer getEndTime() 获取获取查询信息结束时间 (s)
 * @method void setEndTime(integer $EndTime) 设置获取查询信息结束时间 (s)
 * @method integer getPageSize() 获取分页查询时的分页大小，最小1，最大100
 * @method void setPageSize(integer $PageSize) 设置分页查询时的分页大小，最小1，最大100
 * @method integer getPage() 获取分页查询时的页号，从1开始
 * @method void setPage(integer $Page) 设置分页查询时的页号，从1开始
 */
class DescribeTrinoQueryInfoRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var integer 获取查询信息开始时间 (s)
     */
    public $StartTime;

    /**
     * @var integer 获取查询信息结束时间 (s)
     */
    public $EndTime;

    /**
     * @var integer 分页查询时的分页大小，最小1，最大100
     */
    public $PageSize;

    /**
     * @var integer 分页查询时的页号，从1开始
     */
    public $Page;

    /**
     * @param string $InstanceId 集群ID
     * @param integer $StartTime 获取查询信息开始时间 (s)
     * @param integer $EndTime 获取查询信息结束时间 (s)
     * @param integer $PageSize 分页查询时的分页大小，最小1，最大100
     * @param integer $Page 分页查询时的页号，从1开始
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}

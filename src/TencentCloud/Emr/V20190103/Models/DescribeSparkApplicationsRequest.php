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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkApplications请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getStartTime() 获取查询开始时间
 * @method void setStartTime(integer $StartTime) 设置查询开始时间
 * @method integer getEndTime() 获取查询结束时间
 * @method void setEndTime(integer $EndTime) 设置查询结束时间
 * @method integer getPageSize() 获取每一页条数
 * @method void setPageSize(integer $PageSize) 设置每一页条数
 * @method integer getPage() 获取第几页
 * @method void setPage(integer $Page) 设置第几页
 */
class DescribeSparkApplicationsRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 查询开始时间
     */
    public $StartTime;

    /**
     * @var integer 查询结束时间
     */
    public $EndTime;

    /**
     * @var integer 每一页条数
     */
    public $PageSize;

    /**
     * @var integer 第几页
     */
    public $Page;

    /**
     * @param string $InstanceId 集群id
     * @param integer $StartTime 查询开始时间
     * @param integer $EndTime 查询结束时间
     * @param integer $PageSize 每一页条数
     * @param integer $Page 第几页
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

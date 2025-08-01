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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloneList请求参数结构体
 *
 * @method string getInstanceId() 获取查询指定源实例的克隆任务列表。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/api/236/15872) 接口获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置查询指定源实例的克隆任务列表。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/api/236/15872) 接口获取实例 ID。
 * @method integer getOffset() 获取分页查询时的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页查询时的偏移量，默认值为0。
 * @method integer getLimit() 获取分页查询时的每页条目数，默认值为20，建议最大取值100。
 * @method void setLimit(integer $Limit) 设置分页查询时的每页条目数，默认值为20，建议最大取值100。
 */
class DescribeCloneListRequest extends AbstractModel
{
    /**
     * @var string 查询指定源实例的克隆任务列表。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/api/236/15872) 接口获取实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 分页查询时的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 分页查询时的每页条目数，默认值为20，建议最大取值100。
     */
    public $Limit;

    /**
     * @param string $InstanceId 查询指定源实例的克隆任务列表。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/api/236/15872) 接口获取实例 ID。
     * @param integer $Offset 分页查询时的偏移量，默认值为0。
     * @param integer $Limit 分页查询时的每页条目数，默认值为20，建议最大取值100。
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

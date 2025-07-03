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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSourceClusterGroupList请求参数结构体
 *
 * @method string getTaskId() 获取任务ID，可在[DescribeSmoothMigrationTaskList](https://cloud.tencent.com/document/api/1493/119997)接口返回的[SmoothMigrationTaskItem](https://cloud.tencent.com/document/api/1493/96031#SmoothMigrationTaskItem)或控制台上获得。

 * @method void setTaskId(string $TaskId) 设置任务ID，可在[DescribeSmoothMigrationTaskList](https://cloud.tencent.com/document/api/1493/119997)接口返回的[SmoothMigrationTaskItem](https://cloud.tencent.com/document/api/1493/96031#SmoothMigrationTaskItem)或控制台上获得。

 * @method integer getLimit() 获取查询结果限制数量，默认20。
 * @method void setLimit(integer $Limit) 设置查询结果限制数量，默认20。
 * @method integer getOffset() 获取查询起始位置，默认为0。
 * @method void setOffset(integer $Offset) 设置查询起始位置，默认为0。
 * @method array getFilters() 获取过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
 * @method void setFilters(array $Filters) 设置过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
 */
class DescribeSourceClusterGroupListRequest extends AbstractModel
{
    /**
     * @var string 任务ID，可在[DescribeSmoothMigrationTaskList](https://cloud.tencent.com/document/api/1493/119997)接口返回的[SmoothMigrationTaskItem](https://cloud.tencent.com/document/api/1493/96031#SmoothMigrationTaskItem)或控制台上获得。

     */
    public $TaskId;

    /**
     * @var integer 查询结果限制数量，默认20。
     */
    public $Limit;

    /**
     * @var integer 查询起始位置，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
     */
    public $Filters;

    /**
     * @param string $TaskId 任务ID，可在[DescribeSmoothMigrationTaskList](https://cloud.tencent.com/document/api/1493/119997)接口返回的[SmoothMigrationTaskItem](https://cloud.tencent.com/document/api/1493/96031#SmoothMigrationTaskItem)或控制台上获得。

     * @param integer $Limit 查询结果限制数量，默认20。
     * @param integer $Offset 查询起始位置，默认为0。
     * @param array $Filters 过滤查询条件列表，请在引用此参数的API说明中了解使用方法。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

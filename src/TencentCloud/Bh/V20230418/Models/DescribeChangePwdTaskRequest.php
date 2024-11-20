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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeChangePwdTask请求参数结构体
 *
 * @method array getFilters() 获取过滤数组。过滤数组。Name支持以下值: OperationId 任务ID TaskName 任务名
 * @method void setFilters(array $Filters) 设置过滤数组。过滤数组。Name支持以下值: OperationId 任务ID TaskName 任务名
 * @method string getDepartmentId() 获取所属部门ID
 * @method void setDepartmentId(string $DepartmentId) 设置所属部门ID
 * @method integer getOffset() 获取分页偏移量，默认0
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认0
 * @method integer getLimit() 获取每页条目数量，默认20
 * @method void setLimit(integer $Limit) 设置每页条目数量，默认20
 */
class DescribeChangePwdTaskRequest extends AbstractModel
{
    /**
     * @var array 过滤数组。过滤数组。Name支持以下值: OperationId 任务ID TaskName 任务名
     */
    public $Filters;

    /**
     * @var string 所属部门ID
     */
    public $DepartmentId;

    /**
     * @var integer 分页偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 每页条目数量，默认20
     */
    public $Limit;

    /**
     * @param array $Filters 过滤数组。过滤数组。Name支持以下值: OperationId 任务ID TaskName 任务名
     * @param string $DepartmentId 所属部门ID
     * @param integer $Offset 分页偏移量，默认0
     * @param integer $Limit 每页条目数量，默认20
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

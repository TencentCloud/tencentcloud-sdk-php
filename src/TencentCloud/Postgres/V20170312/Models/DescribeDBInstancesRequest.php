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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getFilters() 获取过滤条件，目前支持：db-instance-id、db-instance-name两种。
 * @method void setFilters(array $Filters) 设置过滤条件，目前支持：db-instance-id、db-instance-name两种。
 * @method integer getLimit() 获取每页显示数量，默认返回10条。
 * @method void setLimit(integer $Limit) 设置每页显示数量，默认返回10条。
 * @method integer getOffset() 获取分页序号，从0开始。
 * @method void setOffset(integer $Offset) 设置分页序号，从0开始。
 */

/**
 *DescribeDBInstances请求参数结构体
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，目前支持：db-instance-id、db-instance-name两种。
     */
    public $Filters;

    /**
     * @var integer 每页显示数量，默认返回10条。
     */
    public $Limit;

    /**
     * @var integer 分页序号，从0开始。
     */
    public $Offset;
    /**
     * @param array $Filters 过滤条件，目前支持：db-instance-id、db-instance-name两种。
     * @param integer $Limit 每页显示数量，默认返回10条。
     * @param integer $Offset 分页序号，从0开始。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}

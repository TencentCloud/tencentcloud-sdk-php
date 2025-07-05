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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceTasks请求参数结构体
 *
 * @method string getInstanceId() 获取数据库实例ID，形如mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) 设置数据库实例ID，形如mssql-njj2mtpl
 * @method integer getLimit() 获取分页大小
 * @method void setLimit(integer $Limit) 设置分页大小
 * @method integer getStatus() 获取异步任务状态 1-运行中，2-运行成功，3-运行失败
 * @method void setStatus(integer $Status) 设置异步任务状态 1-运行中，2-运行成功，3-运行失败
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 */
class DescribeInstanceTasksRequest extends AbstractModel
{
    /**
     * @var string 数据库实例ID，形如mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var integer 分页大小
     */
    public $Limit;

    /**
     * @var integer 异步任务状态 1-运行中，2-运行成功，3-运行失败
     */
    public $Status;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @param string $InstanceId 数据库实例ID，形如mssql-njj2mtpl
     * @param integer $Limit 分页大小
     * @param integer $Status 异步任务状态 1-运行中，2-运行成功，3-运行失败
     * @param integer $Offset 分页偏移量
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}

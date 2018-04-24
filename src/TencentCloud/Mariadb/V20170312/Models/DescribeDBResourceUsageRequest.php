<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例 ID，形如：tdsql-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：tdsql-ow728lmc。
 * @method string getStartTime() 获取开始日期，格式yyyy-mm-dd
 * @method void setStartTime(string $StartTime) 设置开始日期，格式yyyy-mm-dd
 * @method string getEndTime() 获取结束日期，格式yyyy-mm-dd
 * @method void setEndTime(string $EndTime) 设置结束日期，格式yyyy-mm-dd
 */

/**
 *DescribeDBResourceUsage请求参数结构体
 */
class DescribeDBResourceUsageRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：tdsql-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var string 开始日期，格式yyyy-mm-dd
     */
    public $StartTime;

    /**
     * @var string 结束日期，格式yyyy-mm-dd
     */
    public $EndTime;
    /**
     * @param string $InstanceId 实例 ID，形如：tdsql-ow728lmc。
     * @param string $StartTime 开始日期，格式yyyy-mm-dd
     * @param string $EndTime 结束日期，格式yyyy-mm-dd
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

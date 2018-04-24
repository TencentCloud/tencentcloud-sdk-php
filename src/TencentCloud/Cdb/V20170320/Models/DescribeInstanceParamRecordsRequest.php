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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $instanceId) 设置实例ID
 * @method integer getOffset() 获取分页偏移
 * @method void setOffset(integer $offset) 设置分页偏移
 * @method integer getLimit() 获取分页容量
 * @method void setLimit(integer $limit) 设置分页容量
 */

/**
 *DescribeInstanceParamRecords请求参数结构体
 */
class DescribeInstanceParamRecordsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $instanceId;

    /**
     * @var integer 分页偏移
     */
    public $offset;

    /**
     * @var integer 分页容量
     */
    public $limit;
    /**
     * @param string $instanceId 实例ID
     * @param integer $offset 分页偏移
     * @param integer $limit 分页容量
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
            $this->instanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->limit = $param["Limit"];
        }
    }
}

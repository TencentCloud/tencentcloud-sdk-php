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
 * @method string getRoInstanceId() 获取只读实例ID
 * @method void setRoInstanceId(string $roInstanceId) 设置只读实例ID
 * @method string getMasterInstanceId() 获取主实例ID
 * @method void setMasterInstanceId(string $masterInstanceId) 设置主实例ID
 */

/**
 *DescribeRoMinScale请求参数结构体
 */
class DescribeRoMinScaleRequest extends AbstractModel
{
    /**
     * @var string 只读实例ID
     */
    public $roInstanceId;

    /**
     * @var string 主实例ID
     */
    public $masterInstanceId;
    /**
     * @param string $roInstanceId 只读实例ID
     * @param string $masterInstanceId 主实例ID
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
        if (array_key_exists("RoInstanceId",$param) and $param["RoInstanceId"] !== null) {
            $this->roInstanceId = $param["RoInstanceId"];
        }

        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->masterInstanceId = $param["MasterInstanceId"];
        }
    }
}

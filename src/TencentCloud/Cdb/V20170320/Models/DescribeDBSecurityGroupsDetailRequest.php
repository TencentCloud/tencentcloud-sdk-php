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
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $projectId) 设置项目ID
 * @method string getInstanceId() 获取实例短Id
 * @method void setInstanceId(string $instanceId) 设置实例短Id
 */

/**
 *DescribeDBSecurityGroupsDetail请求参数结构体
 */
class DescribeDBSecurityGroupsDetailRequest extends AbstractModel
{
    /**
     * @var integer 项目ID
     */
    public $projectId;

    /**
     * @var string 实例短Id
     */
    public $instanceId;
    /**
     * @param integer $projectId 项目ID
     * @param string $instanceId 实例短Id
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->projectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->instanceId = $param["InstanceId"];
        }
    }
}

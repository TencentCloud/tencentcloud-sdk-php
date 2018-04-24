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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getProjectId() 获取项目id，默认0。可在qcloud控制台项目管理页面查询到。
 * @method void setProjectId(string $ProjectId) 设置项目id，默认0。可在qcloud控制台项目管理页面查询到。
 * @method string getGroupName() 获取安全组名称，可任意命名，但不得超过60个字符。
 * @method void setGroupName(string $GroupName) 设置安全组名称，可任意命名，但不得超过60个字符。
 * @method string getGroupDescription() 获取安全组备注，最多100个字符。
 * @method void setGroupDescription(string $GroupDescription) 设置安全组备注，最多100个字符。
 */

/**
 *CreateSecurityGroup请求参数结构体
 */
class CreateSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string 项目id，默认0。可在qcloud控制台项目管理页面查询到。
     */
    public $ProjectId;

    /**
     * @var string 安全组名称，可任意命名，但不得超过60个字符。
     */
    public $GroupName;

    /**
     * @var string 安全组备注，最多100个字符。
     */
    public $GroupDescription;
    /**
     * @param string $ProjectId 项目id，默认0。可在qcloud控制台项目管理页面查询到。
     * @param string $GroupName 安全组名称，可任意命名，但不得超过60个字符。
     * @param string $GroupDescription 安全组备注，最多100个字符。
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
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupDescription",$param) and $param["GroupDescription"] !== null) {
            $this->GroupDescription = $param["GroupDescription"];
        }
    }
}

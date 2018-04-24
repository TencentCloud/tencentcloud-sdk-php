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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceFamilyConfigSet() 获取实例机型组配置的列表信息
 * @method void setInstanceFamilyConfigSet(array $InstanceFamilyConfigSet) 设置实例机型组配置的列表信息
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeInstanceFamilyConfigs返回参数结构体
 */
class DescribeInstanceFamilyConfigsResponse extends AbstractModel
{
    /**
     * @var array 实例机型组配置的列表信息
     */
    public $InstanceFamilyConfigSet;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param array $InstanceFamilyConfigSet 实例机型组配置的列表信息
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("InstanceFamilyConfigSet",$param) and $param["InstanceFamilyConfigSet"] !== null) {
            $this->InstanceFamilyConfigSet = [];
            foreach ($param["InstanceFamilyConfigSet"] as $key => $value){
                $obj = new InstanceFamilyConfig();
                $obj->deserialize($value);
                array_push($this->InstanceFamilyConfigSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

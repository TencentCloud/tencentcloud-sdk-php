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
 * @method array getFileIds() 获取文件ID数组
 * @method void setFileIds(array $fileIds) 设置文件ID数组
 * @method string getUser() 获取实例的用户名
 * @method void setUser(string $user) 设置实例的用户名
 * @method string getPassword() 获取实例的密码
 * @method void setPassword(string $password) 设置实例的密码
 * @method array getInstances() 获取实例数组
 * @method void setInstances(array $instances) 设置实例数组
 */

/**
 *SubmitBatchOperation请求参数结构体
 */
class SubmitBatchOperationRequest extends AbstractModel
{
    /**
     * @var array 文件ID数组
     */
    public $fileIds;

    /**
     * @var string 实例的用户名
     */
    public $user;

    /**
     * @var string 实例的密码
     */
    public $password;

    /**
     * @var array 实例数组
     */
    public $instances;
    /**
     * @param array $fileIds 文件ID数组
     * @param string $user 实例的用户名
     * @param string $password 实例的密码
     * @param array $instances 实例数组
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
        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->fileIds = [];
            foreach ($param["FileIds"] as $key => $value){
                $obj = new int64();
                $obj->deserialize($value);
                array_push($this->fileIds, $obj);
            }
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->user = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->password = $param["Password"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->instances = $param["Instances"];
        }
    }
}

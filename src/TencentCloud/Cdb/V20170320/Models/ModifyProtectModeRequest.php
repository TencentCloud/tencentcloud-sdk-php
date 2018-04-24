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
 * @method integer getProtectMode() 获取无
 * @method void setProtectMode(integer $protectMode) 设置无
 * @method string getInstanceId() 获取无
 * @method void setInstanceId(string $instanceId) 设置无
 */

/**
 *ModifyProtectMode请求参数结构体
 */
class ModifyProtectModeRequest extends AbstractModel
{
    /**
     * @var integer 无
     */
    public $protectMode;

    /**
     * @var string 无
     */
    public $instanceId;
    /**
     * @param integer $protectMode 无
     * @param string $instanceId 无
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
        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->protectMode = $param["ProtectMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->instanceId = $param["InstanceId"];
        }
    }
}

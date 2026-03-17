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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGPUInfo请求参数结构体
 *
 * @method string getInstanceType() 获取实例机型名称，默认值""
 * @method void setInstanceType(string $InstanceType) 设置实例机型名称，默认值""
 * @method string getOsName() 获取操作系统oskey，默认值""
 * @method void setOsName(string $OsName) 设置操作系统oskey，默认值""
 */
class DescribeGPUInfoRequest extends AbstractModel
{
    /**
     * @var string 实例机型名称，默认值""
     */
    public $InstanceType;

    /**
     * @var string 操作系统oskey，默认值""
     */
    public $OsName;

    /**
     * @param string $InstanceType 实例机型名称，默认值""
     * @param string $OsName 操作系统oskey，默认值""
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }
    }
}

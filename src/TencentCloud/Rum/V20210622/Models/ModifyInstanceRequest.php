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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstance请求参数结构体
 *
 * @method string getInstanceId() 获取要修改的实例id
 * @method void setInstanceId(string $InstanceId) 设置要修改的实例id
 * @method string getInstanceName() 获取新的实例名称(长度最大不超过255)
 * @method void setInstanceName(string $InstanceName) 设置新的实例名称(长度最大不超过255)
 * @method string getInstanceDesc() 获取新的实例描述(长度最大不超过1024)
 * @method void setInstanceDesc(string $InstanceDesc) 设置新的实例描述(长度最大不超过1024)
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string 要修改的实例id
     */
    public $InstanceId;

    /**
     * @var string 新的实例名称(长度最大不超过255)
     */
    public $InstanceName;

    /**
     * @var string 新的实例描述(长度最大不超过1024)
     */
    public $InstanceDesc;

    /**
     * @param string $InstanceId 要修改的实例id
     * @param string $InstanceName 新的实例名称(长度最大不超过255)
     * @param string $InstanceDesc 新的实例描述(长度最大不超过1024)
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }
    }
}

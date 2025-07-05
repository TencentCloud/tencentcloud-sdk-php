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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRegisterInstance请求参数结构体
 *
 * @method string getInstanceId() 获取托管实例ID。

可通过 [DescribeRegisterInstances(查询托管实例)](https://cloud.tencent.com/document/api/1340/96924) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置托管实例ID。

可通过 [DescribeRegisterInstances(查询托管实例)](https://cloud.tencent.com/document/api/1340/96924) 接口获取。
 * @method string getInstanceName() 获取实例名称。有效长度为 1～60 字符。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。有效长度为 1～60 字符。
 */
class ModifyRegisterInstanceRequest extends AbstractModel
{
    /**
     * @var string 托管实例ID。

可通过 [DescribeRegisterInstances(查询托管实例)](https://cloud.tencent.com/document/api/1340/96924) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。有效长度为 1～60 字符。
     */
    public $InstanceName;

    /**
     * @param string $InstanceId 托管实例ID。

可通过 [DescribeRegisterInstances(查询托管实例)](https://cloud.tencent.com/document/api/1340/96924) 接口获取。
     * @param string $InstanceName 实例名称。有效长度为 1～60 字符。
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
    }
}

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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesHealthState请求参数结构体
 *
 * @method string getInstanceID() 获取集群Id
 * @method void setInstanceID(string $InstanceID) 设置集群Id
 * @method string getInput() 获取为空：代表当前appId下所有集群 或者  某个集群Id
 * @method void setInput(string $Input) 设置为空：代表当前appId下所有集群 或者  某个集群Id
 */
class DescribeInstancesHealthStateRequest extends AbstractModel
{
    /**
     * @var string 集群Id
     * @deprecated
     */
    public $InstanceID;

    /**
     * @var string 为空：代表当前appId下所有集群 或者  某个集群Id
     */
    public $Input;

    /**
     * @param string $InstanceID 集群Id
     * @param string $Input 为空：代表当前appId下所有集群 或者  某个集群Id
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }
    }
}

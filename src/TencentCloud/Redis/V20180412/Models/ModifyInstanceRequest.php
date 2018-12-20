<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getOperation() 获取修改实例操作，如填写：rename（表示实例重命名）
 * @method void setOperation(string $Operation) 设置修改实例操作，如填写：rename（表示实例重命名）
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getInstanceName() 获取实例的新名称
 * @method void setInstanceName(string $InstanceName) 设置实例的新名称
 */

/**
 *ModifyInstance请求参数结构体
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string 修改实例操作，如填写：rename（表示实例重命名）
     */
    public $Operation;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 实例的新名称
     */
    public $InstanceName;
    /**
     * @param string $Operation 修改实例操作，如填写：rename（表示实例重命名）
     * @param string $InstanceId 实例Id
     * @param string $InstanceName 实例的新名称
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}

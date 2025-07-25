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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTmpDCDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取回档实例的ID
 * @method void setInstanceId(string $InstanceId) 设置回档实例的ID
 * @method string getRollbackTime() 获取回档时间点
 * @method void setRollbackTime(string $RollbackTime) 设置回档时间点
 */
class CreateTmpDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 回档实例的ID
     */
    public $InstanceId;

    /**
     * @var string 回档时间点
     */
    public $RollbackTime;

    /**
     * @param string $InstanceId 回档实例的ID
     * @param string $RollbackTime 回档时间点
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

        if (array_key_exists("RollbackTime",$param) and $param["RollbackTime"] !== null) {
            $this->RollbackTime = $param["RollbackTime"];
        }
    }
}

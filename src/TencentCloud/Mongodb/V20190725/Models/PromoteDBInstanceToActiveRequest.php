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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PromoteDBInstanceToActive请求参数结构体
 *
 * @method string getInstanceId() 获取灾备实例id
 * @method void setInstanceId(string $InstanceId) 设置灾备实例id
 * @method string getMasterId() 获取主实例id
 * @method void setMasterId(string $MasterId) 设置主实例id
 */
class PromoteDBInstanceToActiveRequest extends AbstractModel
{
    /**
     * @var string 灾备实例id
     */
    public $InstanceId;

    /**
     * @var string 主实例id
     */
    public $MasterId;

    /**
     * @param string $InstanceId 灾备实例id
     * @param string $MasterId 主实例id
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

        if (array_key_exists("MasterId",$param) and $param["MasterId"] !== null) {
            $this->MasterId = $param["MasterId"];
        }
    }
}

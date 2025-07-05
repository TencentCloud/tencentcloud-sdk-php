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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePolicyGroup请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method array getGroupId() 获取策略组id,即1.0的告警策略id,可以从策略详情获取
 * @method void setGroupId(array $GroupId) 设置策略组id,即1.0的告警策略id,可以从策略详情获取
 */
class DeletePolicyGroupRequest extends AbstractModel
{
    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var array 策略组id,即1.0的告警策略id,可以从策略详情获取
     */
    public $GroupId;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param array $GroupId 策略组id,即1.0的告警策略id,可以从策略详情获取
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}

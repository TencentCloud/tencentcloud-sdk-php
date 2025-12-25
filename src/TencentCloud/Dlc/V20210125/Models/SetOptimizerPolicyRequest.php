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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetOptimizerPolicy请求参数结构体
 *
 * @method SmartPolicy getSmartPolicy() 获取优化策略
 * @method void setSmartPolicy(SmartPolicy $SmartPolicy) 设置优化策略
 */
class SetOptimizerPolicyRequest extends AbstractModel
{
    /**
     * @var SmartPolicy 优化策略
     */
    public $SmartPolicy;

    /**
     * @param SmartPolicy $SmartPolicy 优化策略
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
        if (array_key_exists("SmartPolicy",$param) and $param["SmartPolicy"] !== null) {
            $this->SmartPolicy = new SmartPolicy();
            $this->SmartPolicy->deserialize($param["SmartPolicy"]);
        }
    }
}

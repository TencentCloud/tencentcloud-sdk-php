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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLifecyclePolicy请求参数结构体
 *
 * @method string getLifecyclePolicyName() 获取生命周期管理策略名称，中文/英文/数字/下划线/中划线的组合，不超过64个字符
 * @method void setLifecyclePolicyName(string $LifecyclePolicyName) 设置生命周期管理策略名称，中文/英文/数字/下划线/中划线的组合，不超过64个字符
 * @method array getLifecycleRules() 获取生命周期管理策略关联的管理规则列表
 * @method void setLifecycleRules(array $LifecycleRules) 设置生命周期管理策略关联的管理规则列表
 */
class CreateLifecyclePolicyRequest extends AbstractModel
{
    /**
     * @var string 生命周期管理策略名称，中文/英文/数字/下划线/中划线的组合，不超过64个字符
     */
    public $LifecyclePolicyName;

    /**
     * @var array 生命周期管理策略关联的管理规则列表
     */
    public $LifecycleRules;

    /**
     * @param string $LifecyclePolicyName 生命周期管理策略名称，中文/英文/数字/下划线/中划线的组合，不超过64个字符
     * @param array $LifecycleRules 生命周期管理策略关联的管理规则列表
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
        if (array_key_exists("LifecyclePolicyName",$param) and $param["LifecyclePolicyName"] !== null) {
            $this->LifecyclePolicyName = $param["LifecyclePolicyName"];
        }

        if (array_key_exists("LifecycleRules",$param) and $param["LifecycleRules"] !== null) {
            $this->LifecycleRules = [];
            foreach ($param["LifecycleRules"] as $key => $value){
                $obj = new LifecycleRule();
                $obj->deserialize($value);
                array_push($this->LifecycleRules, $obj);
            }
        }
    }
}

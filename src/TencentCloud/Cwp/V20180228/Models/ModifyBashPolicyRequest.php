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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBashPolicy请求参数结构体
 *
 * @method BashPolicy getPolicy() 获取具体的策略配置
 * @method void setPolicy(BashPolicy $Policy) 设置具体的策略配置
 */
class ModifyBashPolicyRequest extends AbstractModel
{
    /**
     * @var BashPolicy 具体的策略配置
     */
    public $Policy;

    /**
     * @param BashPolicy $Policy 具体的策略配置
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
        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new BashPolicy();
            $this->Policy->deserialize($param["Policy"]);
        }
    }
}

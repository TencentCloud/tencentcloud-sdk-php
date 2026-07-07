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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityPolicyRelations请求参数结构体
 *
 * @method array getSecurityPolicyIds() 获取安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
 * @method void setSecurityPolicyIds(array $SecurityPolicyIds) 设置安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
 */
class DescribeSecurityPolicyRelationsRequest extends AbstractModel
{
    /**
     * @var array 安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
     */
    public $SecurityPolicyIds;

    /**
     * @param array $SecurityPolicyIds 安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
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
        if (array_key_exists("SecurityPolicyIds",$param) and $param["SecurityPolicyIds"] !== null) {
            $this->SecurityPolicyIds = $param["SecurityPolicyIds"];
        }
    }
}

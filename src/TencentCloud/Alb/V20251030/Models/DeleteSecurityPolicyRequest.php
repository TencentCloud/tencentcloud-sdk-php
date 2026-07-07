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
 * DeleteSecurityPolicy请求参数结构体
 *
 * @method array getSecurityPolicyIds() 获取安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
 * @method void setSecurityPolicyIds(array $SecurityPolicyIds) 设置安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
 * @method boolean getDryRun() 获取是否仅执行预检请求。取值：
- **true**：仅执行预检请求，不实际删除资源。预检请求将验证参数格式、权限及安全策略是否被引用等，帮助您在正式操作前发现潜在问题。
- **false**（默认）：执行正常请求，通过预检后将直接删除安全策略。

 * @method void setDryRun(boolean $DryRun) 设置是否仅执行预检请求。取值：
- **true**：仅执行预检请求，不实际删除资源。预检请求将验证参数格式、权限及安全策略是否被引用等，帮助您在正式操作前发现潜在问题。
- **false**（默认）：执行正常请求，通过预检后将直接删除安全策略。
 */
class DeleteSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var array 安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
     */
    public $SecurityPolicyIds;

    /**
     * @var boolean 是否仅执行预检请求。取值：
- **true**：仅执行预检请求，不实际删除资源。预检请求将验证参数格式、权限及安全策略是否被引用等，帮助您在正式操作前发现潜在问题。
- **false**（默认）：执行正常请求，通过预检后将直接删除安全策略。

     */
    public $DryRun;

    /**
     * @param array $SecurityPolicyIds 安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
     * @param boolean $DryRun 是否仅执行预检请求。取值：
- **true**：仅执行预检请求，不实际删除资源。预检请求将验证参数格式、权限及安全策略是否被引用等，帮助您在正式操作前发现潜在问题。
- **false**（默认）：执行正常请求，通过预检后将直接删除安全策略。
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

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}

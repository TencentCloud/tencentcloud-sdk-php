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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于定义合同风险识别角色信息。
 *
 * @method string getName() 获取风险识别角色的名称。用于唯一标识和区分不同的风险识别角色。

注意：`最大长度应不超过200个字符`
 * @method void setName(string $Name) 设置风险识别角色的名称。用于唯一标识和区分不同的风险识别角色。

注意：`最大长度应不超过200个字符`
 * @method string getDescription() 获取风险识别角色的详细说明。

注意： `最大长度应不超过500个字符`
 * @method void setDescription(string $Description) 设置风险识别角色的详细说明。

注意： `最大长度应不超过500个字符`
 */
class RiskIdentificationRoleInfo extends AbstractModel
{
    /**
     * @var string 风险识别角色的名称。用于唯一标识和区分不同的风险识别角色。

注意：`最大长度应不超过200个字符`
     */
    public $Name;

    /**
     * @var string 风险识别角色的详细说明。

注意： `最大长度应不超过500个字符`
     */
    public $Description;

    /**
     * @param string $Name 风险识别角色的名称。用于唯一标识和区分不同的风险识别角色。

注意：`最大长度应不超过200个字符`
     * @param string $Description 风险识别角色的详细说明。

注意： `最大长度应不超过500个字符`
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

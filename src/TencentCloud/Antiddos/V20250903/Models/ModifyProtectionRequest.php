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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProtection请求参数结构体
 *
 * @method string getProtectionId() 获取<p>防护实例 ID。</p>
 * @method void setProtectionId(string $ProtectionId) 设置<p>防护实例 ID。</p>
 * @method string getName() 获取<p>防护实例名称。</p><p>入参限制：防护实例名称最多 60 个字符，同一主账号下不可重名。</p>
 * @method void setName(string $Name) 设置<p>防护实例名称。</p><p>入参限制：防护实例名称最多 60 个字符，同一主账号下不可重名。</p>
 */
class ModifyProtectionRequest extends AbstractModel
{
    /**
     * @var string <p>防护实例 ID。</p>
     */
    public $ProtectionId;

    /**
     * @var string <p>防护实例名称。</p><p>入参限制：防护实例名称最多 60 个字符，同一主账号下不可重名。</p>
     */
    public $Name;

    /**
     * @param string $ProtectionId <p>防护实例 ID。</p>
     * @param string $Name <p>防护实例名称。</p><p>入参限制：防护实例名称最多 60 个字符，同一主账号下不可重名。</p>
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
        if (array_key_exists("ProtectionId",$param) and $param["ProtectionId"] !== null) {
            $this->ProtectionId = $param["ProtectionId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}

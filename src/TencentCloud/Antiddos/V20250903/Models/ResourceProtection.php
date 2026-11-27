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
 * 防护资源及其绑定的防护实例。
 *
 * @method string getResource() 获取<p>防护资源的资源六段式标识。</p>
 * @method void setResource(string $Resource) 设置<p>防护资源的资源六段式标识。</p>
 * @method string getProtectionId() 获取<p>该资源绑定的防护实例 ID。</p>
 * @method void setProtectionId(string $ProtectionId) 设置<p>该资源绑定的防护实例 ID。</p>
 */
class ResourceProtection extends AbstractModel
{
    /**
     * @var string <p>防护资源的资源六段式标识。</p>
     */
    public $Resource;

    /**
     * @var string <p>该资源绑定的防护实例 ID。</p>
     */
    public $ProtectionId;

    /**
     * @param string $Resource <p>防护资源的资源六段式标识。</p>
     * @param string $ProtectionId <p>该资源绑定的防护实例 ID。</p>
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("ProtectionId",$param) and $param["ProtectionId"] !== null) {
            $this->ProtectionId = $param["ProtectionId"];
        }
    }
}

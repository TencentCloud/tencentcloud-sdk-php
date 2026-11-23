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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义组条目。
 *
 * @method string getContent() 获取<p>条目内容。</p>
 * @method void setContent(string $Content) 设置<p>条目内容。</p>
 * @method string getItemType() 获取<p>条目类型。</p><p>枚举值：</p><ul><li>JA3： JA3 指纹，仅当所属组 GroupType 为 TLSFingerprint 时可用</li><li>JA4： JA4 指纹，仅当所属组 GroupType 为 TLSFingerprint 时可用</li><li>UA： UA 值，仅当所属组 GroupType 为 UA 时可用</li><li>Referer： Referer 值，仅当所属组 GroupType 为 Referer 时可用</li></ul>
 * @method void setItemType(string $ItemType) 设置<p>条目类型。</p><p>枚举值：</p><ul><li>JA3： JA3 指纹，仅当所属组 GroupType 为 TLSFingerprint 时可用</li><li>JA4： JA4 指纹，仅当所属组 GroupType 为 TLSFingerprint 时可用</li><li>UA： UA 值，仅当所属组 GroupType 为 UA 时可用</li><li>Referer： Referer 值，仅当所属组 GroupType 为 Referer 时可用</li></ul>
 */
class CustomGroupItem extends AbstractModel
{
    /**
     * @var string <p>条目内容。</p>
     */
    public $Content;

    /**
     * @var string <p>条目类型。</p><p>枚举值：</p><ul><li>JA3： JA3 指纹，仅当所属组 GroupType 为 TLSFingerprint 时可用</li><li>JA4： JA4 指纹，仅当所属组 GroupType 为 TLSFingerprint 时可用</li><li>UA： UA 值，仅当所属组 GroupType 为 UA 时可用</li><li>Referer： Referer 值，仅当所属组 GroupType 为 Referer 时可用</li></ul>
     */
    public $ItemType;

    /**
     * @param string $Content <p>条目内容。</p>
     * @param string $ItemType <p>条目类型。</p><p>枚举值：</p><ul><li>JA3： JA3 指纹，仅当所属组 GroupType 为 TLSFingerprint 时可用</li><li>JA4： JA4 指纹，仅当所属组 GroupType 为 TLSFingerprint 时可用</li><li>UA： UA 值，仅当所属组 GroupType 为 UA 时可用</li><li>Referer： Referer 值，仅当所属组 GroupType 为 Referer 时可用</li></ul>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ItemType",$param) and $param["ItemType"] !== null) {
            $this->ItemType = $param["ItemType"];
        }
    }
}

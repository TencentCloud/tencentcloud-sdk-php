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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新建消费者时为消费者自动绑定API密钥时自动生成密钥的参数体。仅当 SecretBindType="AutoGenerate" 时必填，其他分支禁止携带，否则返回 InvalidParameterValue.CreateError。
 *
 * @method string getName() 获取<p>密钥名称，2-60 字符。</p><p>字符集与「密钥管理-新建密钥」一致（中英文、数字、下划线、短横线），禁止 -share 后缀，同网关内不可重名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>密钥名称，2-60 字符。</p><p>字符集与「密钥管理-新建密钥」一致（中英文、数字、下划线、短横线），禁止 -share 后缀，同网关内不可重名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>密钥描述。长度 ≤ 200，可为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>密钥描述。长度 ≤ 200，可为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoSecretKey extends AbstractModel
{
    /**
     * @var string <p>密钥名称，2-60 字符。</p><p>字符集与「密钥管理-新建密钥」一致（中英文、数字、下划线、短横线），禁止 -share 后缀，同网关内不可重名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>密钥描述。长度 ≤ 200，可为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $Name <p>密钥名称，2-60 字符。</p><p>字符集与「密钥管理-新建密钥」一致（中英文、数字、下划线、短横线），禁止 -share 后缀，同网关内不可重名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>密钥描述。长度 ≤ 200，可为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
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

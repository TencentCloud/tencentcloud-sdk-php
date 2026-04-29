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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像获取密钥
 *
 * @method string getSourceNamespace() 获取源密钥所在命名空间
 * @method void setSourceNamespace(string $SourceNamespace) 设置源密钥所在命名空间
 * @method array getSecretNames() 获取密钥名称列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretNames(array $SecretNames) 设置密钥名称列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImagePullSecret extends AbstractModel
{
    /**
     * @var string 源密钥所在命名空间
     */
    public $SourceNamespace;

    /**
     * @var array 密钥名称列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretNames;

    /**
     * @param string $SourceNamespace 源密钥所在命名空间
     * @param array $SecretNames 密钥名称列表
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
        if (array_key_exists("SourceNamespace",$param) and $param["SourceNamespace"] !== null) {
            $this->SourceNamespace = $param["SourceNamespace"];
        }

        if (array_key_exists("SecretNames",$param) and $param["SecretNames"] !== null) {
            $this->SecretNames = $param["SecretNames"];
        }
    }
}

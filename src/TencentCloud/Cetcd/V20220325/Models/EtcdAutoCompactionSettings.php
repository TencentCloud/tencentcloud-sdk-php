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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * etcd自动压缩设置
 *
 * @method string getAutoCompactionMode() 获取自动压缩模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoCompactionMode(string $AutoCompactionMode) 设置自动压缩模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoCompactionRetention() 获取自动压缩保留时间/revison数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoCompactionRetention(string $AutoCompactionRetention) 设置自动压缩保留时间/revison数
注意：此字段可能返回 null，表示取不到有效值。
 */
class EtcdAutoCompactionSettings extends AbstractModel
{
    /**
     * @var string 自动压缩模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoCompactionMode;

    /**
     * @var string 自动压缩保留时间/revison数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoCompactionRetention;

    /**
     * @param string $AutoCompactionMode 自动压缩模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoCompactionRetention 自动压缩保留时间/revison数
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
        if (array_key_exists("AutoCompactionMode",$param) and $param["AutoCompactionMode"] !== null) {
            $this->AutoCompactionMode = $param["AutoCompactionMode"];
        }

        if (array_key_exists("AutoCompactionRetention",$param) and $param["AutoCompactionRetention"] !== null) {
            $this->AutoCompactionRetention = $param["AutoCompactionRetention"];
        }
    }
}

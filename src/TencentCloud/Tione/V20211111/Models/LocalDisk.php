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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本地磁盘信息
 *
 * @method string getInstanceId() 获取节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocalPath() 获取本地路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalPath(string $LocalPath) 设置本地路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class LocalDisk extends AbstractModel
{
    /**
     * @var string 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 本地路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalPath;

    /**
     * @param string $InstanceId 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocalPath 本地路径
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }
    }
}

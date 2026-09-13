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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件删除结果
 *
 * @method string getFileId() 获取<p>被删除的文件 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileId(string $FileId) 设置<p>被删除的文件 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStatus() 获取<p>删除是否成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(boolean $Status) 设置<p>删除是否成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeleteFileResult extends AbstractModel
{
    /**
     * @var string <p>被删除的文件 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileId;

    /**
     * @var boolean <p>删除是否成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $FileId <p>被删除的文件 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Status <p>删除是否成功</p>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

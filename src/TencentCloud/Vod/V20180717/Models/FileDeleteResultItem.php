<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件删除结果信息
 *
 * @method string getFileId() 获取删除的文件 ID 。
 * @method void setFileId(string $FileId) 设置删除的文件 ID 。
 * @method array getDeleteParts() 获取本次删除的文件部分。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteParts(array $DeleteParts) 设置本次删除的文件部分。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileDeleteResultItem extends AbstractModel
{
    /**
     * @var string 删除的文件 ID 。
     */
    public $FileId;

    /**
     * @var array 本次删除的文件部分。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteParts;

    /**
     * @param string $FileId 删除的文件 ID 。
     * @param array $DeleteParts 本次删除的文件部分。
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

        if (array_key_exists("DeleteParts",$param) and $param["DeleteParts"] !== null) {
            $this->DeleteParts = [];
            foreach ($param["DeleteParts"] as $key => $value){
                $obj = new MediaDeleteItem();
                $obj->deserialize($value);
                array_push($this->DeleteParts, $obj);
            }
        }
    }
}

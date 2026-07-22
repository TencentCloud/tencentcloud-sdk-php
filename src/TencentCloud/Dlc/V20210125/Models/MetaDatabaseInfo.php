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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 元数据库基本信息
 *
 * @method string getDatabaseName() 获取数据库名称。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称。
 * @method string getComment() 获取数据库描述信息，长度 0~2048。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置数据库描述信息，长度 0~2048。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetaDatabaseInfo extends AbstractModel
{
    /**
     * @var string 数据库名称。
     */
    public $DatabaseName;

    /**
     * @var string 数据库描述信息，长度 0~2048。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @param string $DatabaseName 数据库名称。
     * @param string $Comment 数据库描述信息，长度 0~2048。
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}

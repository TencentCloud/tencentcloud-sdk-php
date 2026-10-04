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
 * 创建数据目录的响应
 *
 * @method string getCatalogId() 获取新创建的数据目录的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogId(string $CatalogId) 设置新创建的数据目录的id
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateCatalogRsp extends AbstractModel
{
    /**
     * @var string 新创建的数据目录的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogId;

    /**
     * @param string $CatalogId 新创建的数据目录的id
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
        if (array_key_exists("CatalogId",$param) and $param["CatalogId"] !== null) {
            $this->CatalogId = $param["CatalogId"];
        }
    }
}

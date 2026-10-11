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
 * 获取数据目录详情的响应
 *
 * @method Catalog getCatalog() 获取catalog详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalog(Catalog $Catalog) 设置catalog详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetCatalogRsp extends AbstractModel
{
    /**
     * @var Catalog catalog详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalog;

    /**
     * @param Catalog $Catalog catalog详情
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
        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = new Catalog();
            $this->Catalog->deserialize($param["Catalog"]);
        }
    }
}

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
 * 元数据责任人信息数据结构
 *
 * @method string getFullName() 获取元数据名称（全名）:catalog.schema.table
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullName(string $FullName) 设置元数据名称（全名）:catalog.schema.table
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerType() 获取所有者类型:User
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerType(string $OwnerType) 设置所有者类型:User
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取所有者:唯一标识(uin)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置所有者:唯一标识(uin)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerName() 获取所有者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerName(string $OwnerName) 设置所有者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogSource() 获取数据目录来源，取值参考 CatalogSourceEnum：METALAKE / CONNECTION / SETATS。ListMetaOwners 走新参数 Catalogs 查询时，按入参回填；走旧参数 FullNames 查询时，按请求顶层 CatalogSource 回填（默认 METALAKE）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogSource(string $CatalogSource) 设置数据目录来源，取值参考 CatalogSourceEnum：METALAKE / CONNECTION / SETATS。ListMetaOwners 走新参数 Catalogs 查询时，按入参回填；走旧参数 FullNames 查询时，按请求顶层 CatalogSource 回填（默认 METALAKE）
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetaOwner extends AbstractModel
{
    /**
     * @var string 元数据名称（全名）:catalog.schema.table
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullName;

    /**
     * @var string 所有者类型:User
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerType;

    /**
     * @var string 所有者:唯一标识(uin)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string 所有者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerName;

    /**
     * @var string 数据目录来源，取值参考 CatalogSourceEnum：METALAKE / CONNECTION / SETATS。ListMetaOwners 走新参数 Catalogs 查询时，按入参回填；走旧参数 FullNames 查询时，按请求顶层 CatalogSource 回填（默认 METALAKE）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogSource;

    /**
     * @param string $FullName 元数据名称（全名）:catalog.schema.table
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerType 所有者类型:User
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 所有者:唯一标识(uin)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerName 所有者名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogSource 数据目录来源，取值参考 CatalogSourceEnum：METALAKE / CONNECTION / SETATS。ListMetaOwners 走新参数 Catalogs 查询时，按入参回填；走旧参数 FullNames 查询时，按请求顶层 CatalogSource 回填（默认 METALAKE）
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
        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("OwnerType",$param) and $param["OwnerType"] !== null) {
            $this->OwnerType = $param["OwnerType"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }
    }
}

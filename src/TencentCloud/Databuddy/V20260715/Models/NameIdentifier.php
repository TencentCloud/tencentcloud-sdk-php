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
 * 名称标识符，用于各层级（catalog/schema/table/view等）名称列表接口的返回条目
 *
 * @method string getName() 获取<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNamespace() 获取<p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(array $Namespace) 设置<p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogSource() 获取<p>元数据来源，取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。响应体始终返回具体来源值，不会返回CATALOG_SOURCE_ALL。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogSource(string $CatalogSource) 设置<p>元数据来源，取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。响应体始终返回具体来源值，不会返回CATALOG_SOURCE_ALL。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>TCLAKE Catalog取值：（注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5）<br>SETATS Catalog取值：（Creating=30, Available=31, Deleted=32, Scaling=33, Isolated=34, Failed=35，未知=0）</p>
 * @method void setStatus(string $Status) 设置<p>TCLAKE Catalog取值：（注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5）<br>SETATS Catalog取值：（Creating=30, Available=31, Deleted=32, Scaling=33, Isolated=34, Failed=35，未知=0）</p>
 */
class NameIdentifier extends AbstractModel
{
    /**
     * @var string <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array <p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string <p>元数据来源，取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。响应体始终返回具体来源值，不会返回CATALOG_SOURCE_ALL。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogSource;

    /**
     * @var string <p>TCLAKE Catalog取值：（注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5）<br>SETATS Catalog取值：（Creating=30, Available=31, Deleted=32, Scaling=33, Isolated=34, Failed=35，未知=0）</p>
     */
    public $Status;

    /**
     * @param string $Name <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Namespace <p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogSource <p>元数据来源，取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。响应体始终返回具体来源值，不会返回CATALOG_SOURCE_ALL。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>TCLAKE Catalog取值：（注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5）<br>SETATS Catalog取值：（Creating=30, Available=31, Deleted=32, Scaling=33, Isolated=34, Failed=35，未知=0）</p>
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

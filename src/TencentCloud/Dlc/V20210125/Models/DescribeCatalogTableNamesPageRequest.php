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
 * DescribeCatalogTableNamesPage请求参数结构体
 *
 * @method string getCatalogName() 获取<p>catalog名称</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>catalog名称</p>
 * @method string getSchemaName() 获取<p>Schema名称</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>Schema名称</p>
 * @method integer getLimit() 获取<p>每页大小</p>
 * @method void setLimit(integer $Limit) 设置<p>每页大小</p>
 * @method integer getOffset() 获取<p>页数</p>
 * @method void setOffset(integer $Offset) 设置<p>页数</p>
 * @method boolean getSnapshotBased() 获取<p>是否基于快照</p>
 * @method void setSnapshotBased(boolean $SnapshotBased) 设置<p>是否基于快照</p>
 * @method string getSnapshotId() 获取<p>快照id</p>
 * @method void setSnapshotId(string $SnapshotId) 设置<p>快照id</p>
 * @method string getTableNamePattern() 获取<p>table匹配规则</p>
 * @method void setTableNamePattern(string $TableNamePattern) 设置<p>table匹配规则</p>
 */
class DescribeCatalogTableNamesPageRequest extends AbstractModel
{
    /**
     * @var string <p>catalog名称</p>
     */
    public $CatalogName;

    /**
     * @var string <p>Schema名称</p>
     */
    public $SchemaName;

    /**
     * @var integer <p>每页大小</p>
     */
    public $Limit;

    /**
     * @var integer <p>页数</p>
     */
    public $Offset;

    /**
     * @var boolean <p>是否基于快照</p>
     */
    public $SnapshotBased;

    /**
     * @var string <p>快照id</p>
     */
    public $SnapshotId;

    /**
     * @var string <p>table匹配规则</p>
     */
    public $TableNamePattern;

    /**
     * @param string $CatalogName <p>catalog名称</p>
     * @param string $SchemaName <p>Schema名称</p>
     * @param integer $Limit <p>每页大小</p>
     * @param integer $Offset <p>页数</p>
     * @param boolean $SnapshotBased <p>是否基于快照</p>
     * @param string $SnapshotId <p>快照id</p>
     * @param string $TableNamePattern <p>table匹配规则</p>
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
        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SnapshotBased",$param) and $param["SnapshotBased"] !== null) {
            $this->SnapshotBased = $param["SnapshotBased"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("TableNamePattern",$param) and $param["TableNamePattern"] !== null) {
            $this->TableNamePattern = $param["TableNamePattern"];
        }
    }
}

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
 * DescribeSchemaNamesPage请求参数结构体
 *
 * @method string getCatalogName() 获取<p>数据目录名称</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>数据目录名称</p>
 * @method integer getLimit() 获取<p>分页大小</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小</p>
 * @method integer getOffset() 获取<p>分页偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移</p>
 * @method boolean getSnapshotBased() 获取<p>是否快照分页</p>
 * @method void setSnapshotBased(boolean $SnapshotBased) 设置<p>是否快照分页</p>
 * @method string getSnapshotId() 获取<p>快照 ID</p>
 * @method void setSnapshotId(string $SnapshotId) 设置<p>快照 ID</p>
 * @method string getSchemaNamePattern() 获取<p>SQL查询格式匹配</p>
 * @method void setSchemaNamePattern(string $SchemaNamePattern) 设置<p>SQL查询格式匹配</p>
 */
class DescribeSchemaNamesPageRequest extends AbstractModel
{
    /**
     * @var string <p>数据目录名称</p>
     */
    public $CatalogName;

    /**
     * @var integer <p>分页大小</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移</p>
     */
    public $Offset;

    /**
     * @var boolean <p>是否快照分页</p>
     */
    public $SnapshotBased;

    /**
     * @var string <p>快照 ID</p>
     */
    public $SnapshotId;

    /**
     * @var string <p>SQL查询格式匹配</p>
     */
    public $SchemaNamePattern;

    /**
     * @param string $CatalogName <p>数据目录名称</p>
     * @param integer $Limit <p>分页大小</p>
     * @param integer $Offset <p>分页偏移</p>
     * @param boolean $SnapshotBased <p>是否快照分页</p>
     * @param string $SnapshotId <p>快照 ID</p>
     * @param string $SchemaNamePattern <p>SQL查询格式匹配</p>
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

        if (array_key_exists("SchemaNamePattern",$param) and $param["SchemaNamePattern"] !== null) {
            $this->SchemaNamePattern = $param["SchemaNamePattern"];
        }
    }
}

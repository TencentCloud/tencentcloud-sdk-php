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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmAssetFieldSamples请求参数结构体
 *
 * @method string getAssetId() 获取<p>资产实例ID</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产实例ID</p>
 * @method string getDbName() 获取<p>数据库名</p>
 * @method void setDbName(string $DbName) 设置<p>数据库名</p>
 * @method string getTableName() 获取<p>表名</p>
 * @method void setTableName(string $TableName) 设置<p>表名</p>
 * @method string getFieldName() 获取<p>字段名</p>
 * @method void setFieldName(string $FieldName) 设置<p>字段名</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getSchemaName() 获取<p>schema名</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>schema名</p>
 */
class DescribeDspmAssetFieldSamplesRequest extends AbstractModel
{
    /**
     * @var string <p>资产实例ID</p>
     */
    public $AssetId;

    /**
     * @var string <p>数据库名</p>
     */
    public $DbName;

    /**
     * @var string <p>表名</p>
     */
    public $TableName;

    /**
     * @var string <p>字段名</p>
     */
    public $FieldName;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>schema名</p>
     */
    public $SchemaName;

    /**
     * @param string $AssetId <p>资产实例ID</p>
     * @param string $DbName <p>数据库名</p>
     * @param string $TableName <p>表名</p>
     * @param string $FieldName <p>字段名</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $SchemaName <p>schema名</p>
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }
    }
}

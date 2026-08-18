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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Iceberg接入参数
 *
 * @method string getResource() 获取<p>Iceberg 连接资源 (EMR 实例)</p>
 * @method void setResource(string $Resource) 设置<p>Iceberg 连接资源 (EMR 实例)</p>
 * @method string getDatabase() 获取<p>目标数据库名（Hive catalog 下的 namespace），必填</p>
 * @method void setDatabase(string $Database) 设置<p>目标数据库名（Hive catalog 下的 namespace），必填</p>
 * @method string getTableName() 获取<p>目标表名</p>
 * @method void setTableName(string $TableName) 设置<p>目标表名</p>
 * @method string getSchemeType() 获取<p>消息解析格式，当前仅支持 JSON</p><p>枚举值：</p><ul><li>JSON： JSON解析格式</li></ul>
 * @method void setSchemeType(string $SchemeType) 设置<p>消息解析格式，当前仅支持 JSON</p><p>枚举值：</p><ul><li>JSON： JSON解析格式</li></ul>
 * @method boolean getEnableFieldExtension() 获取<p>表字段扩展开关</p><p>枚举值：</p><ul><li>true： 开</li><li>false： 关</li></ul>
 * @method void setEnableFieldExtension(boolean $EnableFieldExtension) 设置<p>表字段扩展开关</p><p>枚举值：</p><ul><li>true： 开</li><li>false： 关</li></ul>
 * @method string getUpsertMode() 获取<p>Upset/CDC 模式，默认off</p><p>枚举值：</p><ul><li>Off： Off</li><li>UPSERT： UPSERT</li><li>CDC： CDC</li></ul>
 * @method void setUpsertMode(string $UpsertMode) 设置<p>Upset/CDC 模式，默认off</p><p>枚举值：</p><ul><li>Off： Off</li><li>UPSERT： UPSERT</li><li>CDC： CDC</li></ul>
 * @method string getPrimaryKeys() 获取<p>主键字段：UPSERT / CDC 模式必填（多个字段以英文逗号分隔）</p>
 * @method void setPrimaryKeys(string $PrimaryKeys) 设置<p>主键字段：UPSERT / CDC 模式必填（多个字段以英文逗号分隔）</p>
 */
class IcebergParam extends AbstractModel
{
    /**
     * @var string <p>Iceberg 连接资源 (EMR 实例)</p>
     */
    public $Resource;

    /**
     * @var string <p>目标数据库名（Hive catalog 下的 namespace），必填</p>
     */
    public $Database;

    /**
     * @var string <p>目标表名</p>
     */
    public $TableName;

    /**
     * @var string <p>消息解析格式，当前仅支持 JSON</p><p>枚举值：</p><ul><li>JSON： JSON解析格式</li></ul>
     */
    public $SchemeType;

    /**
     * @var boolean <p>表字段扩展开关</p><p>枚举值：</p><ul><li>true： 开</li><li>false： 关</li></ul>
     */
    public $EnableFieldExtension;

    /**
     * @var string <p>Upset/CDC 模式，默认off</p><p>枚举值：</p><ul><li>Off： Off</li><li>UPSERT： UPSERT</li><li>CDC： CDC</li></ul>
     */
    public $UpsertMode;

    /**
     * @var string <p>主键字段：UPSERT / CDC 模式必填（多个字段以英文逗号分隔）</p>
     */
    public $PrimaryKeys;

    /**
     * @param string $Resource <p>Iceberg 连接资源 (EMR 实例)</p>
     * @param string $Database <p>目标数据库名（Hive catalog 下的 namespace），必填</p>
     * @param string $TableName <p>目标表名</p>
     * @param string $SchemeType <p>消息解析格式，当前仅支持 JSON</p><p>枚举值：</p><ul><li>JSON： JSON解析格式</li></ul>
     * @param boolean $EnableFieldExtension <p>表字段扩展开关</p><p>枚举值：</p><ul><li>true： 开</li><li>false： 关</li></ul>
     * @param string $UpsertMode <p>Upset/CDC 模式，默认off</p><p>枚举值：</p><ul><li>Off： Off</li><li>UPSERT： UPSERT</li><li>CDC： CDC</li></ul>
     * @param string $PrimaryKeys <p>主键字段：UPSERT / CDC 模式必填（多个字段以英文逗号分隔）</p>
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("SchemeType",$param) and $param["SchemeType"] !== null) {
            $this->SchemeType = $param["SchemeType"];
        }

        if (array_key_exists("EnableFieldExtension",$param) and $param["EnableFieldExtension"] !== null) {
            $this->EnableFieldExtension = $param["EnableFieldExtension"];
        }

        if (array_key_exists("UpsertMode",$param) and $param["UpsertMode"] !== null) {
            $this->UpsertMode = $param["UpsertMode"];
        }

        if (array_key_exists("PrimaryKeys",$param) and $param["PrimaryKeys"] !== null) {
            $this->PrimaryKeys = $param["PrimaryKeys"];
        }
    }
}

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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSqlExplainV2请求参数结构体
 *
 * @method string getProduct() 获取<p>服务产品类型。取值：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、dcdb（TDSQL MySQL 版）、mariadb（TDSQL MariaDB 版）。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型。取值：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、dcdb（TDSQL MySQL 版）、mariadb（TDSQL MariaDB 版）。</p>
 * @method string getSqlText() 获取<p>待分析的 SQL 语句。仅支持单条 SELECT 语句；若以 EXPLAIN 开头会自动剥离 EXPLAIN 前缀后分析。最大 4096 字符。</p>
 * @method void setSqlText(string $SqlText) 设置<p>待分析的 SQL 语句。仅支持单条 SELECT 语句；若以 EXPLAIN 开头会自动剥离 EXPLAIN 前缀后分析。最大 4096 字符。</p>
 * @method string getInstanceId() 获取<p>实例 ID。MySQL: cdb-xxxxxxx，TDSQL-C: cynosdbmysql-ins-xxxxxxx，MariaDB: tdsql-xxxxx，TDSQL-MySQL： '集群id&amp;分片id',如果TDSQL-MySQL数据库类型同时传入了集群id则instanceId字段只需要传入分片id。最大 64 字符。与 ClusterId 至少需传入其一。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。MySQL: cdb-xxxxxxx，TDSQL-C: cynosdbmysql-ins-xxxxxxx，MariaDB: tdsql-xxxxx，TDSQL-MySQL： '集群id&amp;分片id',如果TDSQL-MySQL数据库类型同时传入了集群id则instanceId字段只需要传入分片id。最大 64 字符。与 ClusterId 至少需传入其一。</p>
 * @method string getSchema() 获取<p>数据库名。可选；为空时按当前 SQL 上下文执行。最大 64 字符。</p>
 * @method void setSchema(string $Schema) 设置<p>数据库名。可选；为空时按当前 SQL 上下文执行。最大 64 字符。</p>
 * @method string getClusterId() 获取<p>集群 ID。仅 TDSQL-MySQL时使用，与 InstanceId 至少需传入其一。最大 64 字符。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID。仅 TDSQL-MySQL时使用，与 InstanceId 至少需传入其一。最大 64 字符。</p>
 * @method boolean getVisual() 获取<p>是否输出可视化执行树</p><p>默认值：false</p>
 * @method void setVisual(boolean $Visual) 设置<p>是否输出可视化执行树</p><p>默认值：false</p>
 */
class DescribeSqlExplainV2Request extends AbstractModel
{
    /**
     * @var string <p>服务产品类型。取值：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、dcdb（TDSQL MySQL 版）、mariadb（TDSQL MariaDB 版）。</p>
     */
    public $Product;

    /**
     * @var string <p>待分析的 SQL 语句。仅支持单条 SELECT 语句；若以 EXPLAIN 开头会自动剥离 EXPLAIN 前缀后分析。最大 4096 字符。</p>
     */
    public $SqlText;

    /**
     * @var string <p>实例 ID。MySQL: cdb-xxxxxxx，TDSQL-C: cynosdbmysql-ins-xxxxxxx，MariaDB: tdsql-xxxxx，TDSQL-MySQL： '集群id&amp;分片id',如果TDSQL-MySQL数据库类型同时传入了集群id则instanceId字段只需要传入分片id。最大 64 字符。与 ClusterId 至少需传入其一。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>数据库名。可选；为空时按当前 SQL 上下文执行。最大 64 字符。</p>
     */
    public $Schema;

    /**
     * @var string <p>集群 ID。仅 TDSQL-MySQL时使用，与 InstanceId 至少需传入其一。最大 64 字符。</p>
     */
    public $ClusterId;

    /**
     * @var boolean <p>是否输出可视化执行树</p><p>默认值：false</p>
     */
    public $Visual;

    /**
     * @param string $Product <p>服务产品类型。取值：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、dcdb（TDSQL MySQL 版）、mariadb（TDSQL MariaDB 版）。</p>
     * @param string $SqlText <p>待分析的 SQL 语句。仅支持单条 SELECT 语句；若以 EXPLAIN 开头会自动剥离 EXPLAIN 前缀后分析。最大 4096 字符。</p>
     * @param string $InstanceId <p>实例 ID。MySQL: cdb-xxxxxxx，TDSQL-C: cynosdbmysql-ins-xxxxxxx，MariaDB: tdsql-xxxxx，TDSQL-MySQL： '集群id&amp;分片id',如果TDSQL-MySQL数据库类型同时传入了集群id则instanceId字段只需要传入分片id。最大 64 字符。与 ClusterId 至少需传入其一。</p>
     * @param string $Schema <p>数据库名。可选；为空时按当前 SQL 上下文执行。最大 64 字符。</p>
     * @param string $ClusterId <p>集群 ID。仅 TDSQL-MySQL时使用，与 InstanceId 至少需传入其一。最大 64 字符。</p>
     * @param boolean $Visual <p>是否输出可视化执行树</p><p>默认值：false</p>
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Visual",$param) and $param["Visual"] !== null) {
            $this->Visual = $param["Visual"];
        }
    }
}

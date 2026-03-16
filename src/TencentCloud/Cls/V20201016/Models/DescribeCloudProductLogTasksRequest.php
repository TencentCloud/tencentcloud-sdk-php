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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudProductLogTasks请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页的偏移量，默认值为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页的偏移量，默认值为0。</p>
 * @method integer getLimit() 获取<p>分页单页限制数目，默认值为20，最大值100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页单页限制数目，默认值为20，最大值100。</p>
 * @method array getFilters() 获取<ul><li>assumerName<ul><li>按照【云产品标识】进行过滤。</li><li>类型：String</li><li>必选：否</li><li>枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS</li></ul></li><li>logType<ul><li>按照【日志类型】进行过滤。</li><li>类型：String</li><li>必选：否</li><li>枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</li></ul></li><li>instanceId<ul><li>按照【实例ID】进行过滤。</li><li>类型：String</li><li>必选：否</li></ul></li></ul>
 * @method void setFilters(array $Filters) 设置<ul><li>assumerName<ul><li>按照【云产品标识】进行过滤。</li><li>类型：String</li><li>必选：否</li><li>枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS</li></ul></li><li>logType<ul><li>按照【日志类型】进行过滤。</li><li>类型：String</li><li>必选：否</li><li>枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</li></ul></li><li>instanceId<ul><li>按照【实例ID】进行过滤。</li><li>类型：String</li><li>必选：否</li></ul></li></ul>
 */
class DescribeCloudProductLogTasksRequest extends AbstractModel
{
    /**
     * @var integer <p>分页的偏移量，默认值为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页单页限制数目，默认值为20，最大值100。</p>
     */
    public $Limit;

    /**
     * @var array <ul><li>assumerName<ul><li>按照【云产品标识】进行过滤。</li><li>类型：String</li><li>必选：否</li><li>枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS</li></ul></li><li>logType<ul><li>按照【日志类型】进行过滤。</li><li>类型：String</li><li>必选：否</li><li>枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</li></ul></li><li>instanceId<ul><li>按照【实例ID】进行过滤。</li><li>类型：String</li><li>必选：否</li></ul></li></ul>
     */
    public $Filters;

    /**
     * @param integer $Offset <p>分页的偏移量，默认值为0。</p>
     * @param integer $Limit <p>分页单页限制数目，默认值为20，最大值100。</p>
     * @param array $Filters <ul><li>assumerName<ul><li>按照【云产品标识】进行过滤。</li><li>类型：String</li><li>必选：否</li><li>枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS</li></ul></li><li>logType<ul><li>按照【日志类型】进行过滤。</li><li>类型：String</li><li>必选：否</li><li>枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</li></ul></li><li>instanceId<ul><li>按照【实例ID】进行过滤。</li><li>类型：String</li><li>必选：否</li></ul></li></ul>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPADiscoveryTaskResult请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method string getDataSourceType() 获取数据源类型，可取值如下：
cdb 表示云数据库 MySQL,
dcdb 表示TDSQL MySQL版,
mariadb 表示云数据库 MariaDB,
postgres 表示云数据库 PostgreSQL,
cynosdbpg 表示TDSQL-C PostgreSQL版,
cynosdbmysql 表示TDSQL-C MySQL版,
selfbuilt-db 表示自建数据库
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型，可取值如下：
cdb 表示云数据库 MySQL,
dcdb 表示TDSQL MySQL版,
mariadb 表示云数据库 MariaDB,
postgres 表示云数据库 PostgreSQL,
cynosdbpg 表示TDSQL-C PostgreSQL版,
cynosdbmysql 表示TDSQL-C MySQL版,
selfbuilt-db 表示自建数据库
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getDataSourceId() 获取数据源ID
 * @method void setDataSourceId(string $DataSourceId) 设置数据源ID
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method integer getOffset() 获取偏移量，默认值为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0
 * @method integer getLimit() 获取返回数量，默认值为20，最大值为100
 * @method void setLimit(integer $Limit) 设置返回数量，默认值为20，最大值为100
 * @method string getResourceRegion() 获取资源所在地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
 */
class DescribeDSPADiscoveryTaskResultRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var string 数据源类型，可取值如下：
cdb 表示云数据库 MySQL,
dcdb 表示TDSQL MySQL版,
mariadb 表示云数据库 MariaDB,
postgres 表示云数据库 PostgreSQL,
cynosdbpg 表示TDSQL-C PostgreSQL版,
cynosdbmysql 表示TDSQL-C MySQL版,
selfbuilt-db 表示自建数据库
     */
    public $DataSourceType;

    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 数据源ID
     */
    public $DataSourceId;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var integer 偏移量，默认值为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认值为20，最大值为100
     */
    public $Limit;

    /**
     * @var string 资源所在地域
     */
    public $ResourceRegion;

    /**
     * @param string $DspaId DSPA实例ID
     * @param string $DataSourceType 数据源类型，可取值如下：
cdb 表示云数据库 MySQL,
dcdb 表示TDSQL MySQL版,
mariadb 表示云数据库 MariaDB,
postgres 表示云数据库 PostgreSQL,
cynosdbpg 表示TDSQL-C PostgreSQL版,
cynosdbmysql 表示TDSQL-C MySQL版,
selfbuilt-db 表示自建数据库
     * @param integer $TaskId 任务ID
     * @param string $TaskName 任务名称
     * @param string $DataSourceId 数据源ID
     * @param string $DbName 数据库名称
     * @param integer $Offset 偏移量，默认值为0
     * @param integer $Limit 返回数量，默认值为20，最大值为100
     * @param string $ResourceRegion 资源所在地域
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }
    }
}

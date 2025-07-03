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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCloudProductLogCollection请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getAssumerName() 获取云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS
 * @method void setAssumerName(string $AssumerName) 设置云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS
 * @method string getLogType() 获取日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
 * @method void setLogType(string $LogType) 设置日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
 * @method string getCloudProductRegion() 获取云产品地域。 不同日志类型(LogType)地域入參格式存在差异， 请参考如下示例：
- CDS所有日志类型：ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT: gz
- MongoDB-AUDIT: gz
- MongoDB-SlowLog：ap-guangzhou
- MongoDB-ErrorLog：ap-guangzhou
- TDMYSQL-SLOW：gz
- DCDB所有日志类型：gz
- MariaDB所有日志类型：gz
- PostgreSQL所有日志类型：gz
- BH所有日志类型：overseas-polaris(国内站海外)/fsi-polaris(国内站金融)/general-polaris(国内站普通)/intl-sg-prod(国际站)
- APIS所有日志类型：gz
 * @method void setCloudProductRegion(string $CloudProductRegion) 设置云产品地域。 不同日志类型(LogType)地域入參格式存在差异， 请参考如下示例：
- CDS所有日志类型：ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT: gz
- MongoDB-AUDIT: gz
- MongoDB-SlowLog：ap-guangzhou
- MongoDB-ErrorLog：ap-guangzhou
- TDMYSQL-SLOW：gz
- DCDB所有日志类型：gz
- MariaDB所有日志类型：gz
- PostgreSQL所有日志类型：gz
- BH所有日志类型：overseas-polaris(国内站海外)/fsi-polaris(国内站金融)/general-polaris(国内站普通)/intl-sg-prod(国际站)
- APIS所有日志类型：gz
 */
class DeleteCloudProductLogCollectionRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS
     */
    public $AssumerName;

    /**
     * @var string 日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
     */
    public $LogType;

    /**
     * @var string 云产品地域。 不同日志类型(LogType)地域入參格式存在差异， 请参考如下示例：
- CDS所有日志类型：ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT: gz
- MongoDB-AUDIT: gz
- MongoDB-SlowLog：ap-guangzhou
- MongoDB-ErrorLog：ap-guangzhou
- TDMYSQL-SLOW：gz
- DCDB所有日志类型：gz
- MariaDB所有日志类型：gz
- PostgreSQL所有日志类型：gz
- BH所有日志类型：overseas-polaris(国内站海外)/fsi-polaris(国内站金融)/general-polaris(国内站普通)/intl-sg-prod(国际站)
- APIS所有日志类型：gz
     */
    public $CloudProductRegion;

    /**
     * @param string $InstanceId 实例ID
     * @param string $AssumerName 云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS
     * @param string $LogType 日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
     * @param string $CloudProductRegion 云产品地域。 不同日志类型(LogType)地域入參格式存在差异， 请参考如下示例：
- CDS所有日志类型：ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT: gz
- MongoDB-AUDIT: gz
- MongoDB-SlowLog：ap-guangzhou
- MongoDB-ErrorLog：ap-guangzhou
- TDMYSQL-SLOW：gz
- DCDB所有日志类型：gz
- MariaDB所有日志类型：gz
- PostgreSQL所有日志类型：gz
- BH所有日志类型：overseas-polaris(国内站海外)/fsi-polaris(国内站金融)/general-polaris(国内站普通)/intl-sg-prod(国际站)
- APIS所有日志类型：gz
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AssumerName",$param) and $param["AssumerName"] !== null) {
            $this->AssumerName = $param["AssumerName"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("CloudProductRegion",$param) and $param["CloudProductRegion"] !== null) {
            $this->CloudProductRegion = $param["CloudProductRegion"];
        }
    }
}

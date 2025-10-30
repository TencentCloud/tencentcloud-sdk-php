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
 * CreateCloudProductLogCollection请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
- 通过各个接入云产品官方文档获取
 * @method void setInstanceId(string $InstanceId) 设置实例ID
- 通过各个接入云产品官方文档获取
 * @method string getAssumerName() 获取云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS
 * @method void setAssumerName(string $AssumerName) 设置云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS
 * @method string getLogType() 获取日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
 * @method void setLogType(string $LogType) 设置日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
 * @method string getCloudProductRegion() 获取云产品地域。 不同日志类型(LogType)地域入参格式存在差异， 请参考如下示例：
- CDS所有日志类型：ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT:  gz
- MongoDB-AUDIT:  gz
- MongoDB-SlowLog：ap-guangzhou
- MongoDB-ErrorLog：ap-guangzhou
- TDMYSQL-SLOW：gz
- DCDB所有日志类型：gz
- MariaDB所有日志类型：gz
- PostgreSQL所有日志类型：gz
- BH所有日志类型：overseas-polaris(中国香港地区和其他)/fsi-polaris(金融区)/general-polaris(普通区)/intl-sg-prod(国际站)
- APIS所有日志类型：gz
 * @method void setCloudProductRegion(string $CloudProductRegion) 设置云产品地域。 不同日志类型(LogType)地域入参格式存在差异， 请参考如下示例：
- CDS所有日志类型：ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT:  gz
- MongoDB-AUDIT:  gz
- MongoDB-SlowLog：ap-guangzhou
- MongoDB-ErrorLog：ap-guangzhou
- TDMYSQL-SLOW：gz
- DCDB所有日志类型：gz
- MariaDB所有日志类型：gz
- PostgreSQL所有日志类型：gz
- BH所有日志类型：overseas-polaris(中国香港地区和其他)/fsi-polaris(金融区)/general-polaris(普通区)/intl-sg-prod(国际站)
- APIS所有日志类型：gz
 * @method string getClsRegion() 获取CLS目标地域
- 支持地域参考  [地域列表](https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) 文档   
 * @method void setClsRegion(string $ClsRegion) 设置CLS目标地域
- 支持地域参考  [地域列表](https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) 文档   
 * @method string getLogsetName() 获取日志集名称，未填LogsetId时必填。若日志集不存在, 将自动创建
 * @method void setLogsetName(string $LogsetName) 设置日志集名称，未填LogsetId时必填。若日志集不存在, 将自动创建
 * @method string getTopicName() 获取日志主题名称，在未填TopicId时必填。 若日志主题不存在，将自动创建
 * @method void setTopicName(string $TopicName) 设置日志主题名称，在未填TopicId时必填。 若日志主题不存在，将自动创建
 * @method string getExtend() 获取日志配置扩展信息， 一般用于存储额外的日志投递配置
 * @method void setExtend(string $Extend) 设置日志配置扩展信息， 一般用于存储额外的日志投递配置
 * @method string getLogsetId() 获取日志集id
- 通过[获取日志集列表](https://cloud.tencent.com/document/api/614/58624)获取日志集Id。
 * @method void setLogsetId(string $LogsetId) 设置日志集id
- 通过[获取日志集列表](https://cloud.tencent.com/document/api/614/58624)获取日志集Id。
 * @method string getTopicId() 获取日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 */
class CreateCloudProductLogCollectionRequest extends AbstractModel
{
    /**
     * @var string 实例ID
- 通过各个接入云产品官方文档获取
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
     * @var string 云产品地域。 不同日志类型(LogType)地域入参格式存在差异， 请参考如下示例：
- CDS所有日志类型：ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT:  gz
- MongoDB-AUDIT:  gz
- MongoDB-SlowLog：ap-guangzhou
- MongoDB-ErrorLog：ap-guangzhou
- TDMYSQL-SLOW：gz
- DCDB所有日志类型：gz
- MariaDB所有日志类型：gz
- PostgreSQL所有日志类型：gz
- BH所有日志类型：overseas-polaris(中国香港地区和其他)/fsi-polaris(金融区)/general-polaris(普通区)/intl-sg-prod(国际站)
- APIS所有日志类型：gz
     */
    public $CloudProductRegion;

    /**
     * @var string CLS目标地域
- 支持地域参考  [地域列表](https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) 文档   
     */
    public $ClsRegion;

    /**
     * @var string 日志集名称，未填LogsetId时必填。若日志集不存在, 将自动创建
     */
    public $LogsetName;

    /**
     * @var string 日志主题名称，在未填TopicId时必填。 若日志主题不存在，将自动创建
     */
    public $TopicName;

    /**
     * @var string 日志配置扩展信息， 一般用于存储额外的日志投递配置
     */
    public $Extend;

    /**
     * @var string 日志集id
- 通过[获取日志集列表](https://cloud.tencent.com/document/api/614/58624)获取日志集Id。
     */
    public $LogsetId;

    /**
     * @var string 日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     */
    public $TopicId;

    /**
     * @param string $InstanceId 实例ID
- 通过各个接入云产品官方文档获取
     * @param string $AssumerName 云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS
     * @param string $LogType 日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
     * @param string $CloudProductRegion 云产品地域。 不同日志类型(LogType)地域入参格式存在差异， 请参考如下示例：
- CDS所有日志类型：ap-guangzhou
- CDB-AUDIT: gz
- TDSQL-C-AUDIT:  gz
- MongoDB-AUDIT:  gz
- MongoDB-SlowLog：ap-guangzhou
- MongoDB-ErrorLog：ap-guangzhou
- TDMYSQL-SLOW：gz
- DCDB所有日志类型：gz
- MariaDB所有日志类型：gz
- PostgreSQL所有日志类型：gz
- BH所有日志类型：overseas-polaris(中国香港地区和其他)/fsi-polaris(金融区)/general-polaris(普通区)/intl-sg-prod(国际站)
- APIS所有日志类型：gz
     * @param string $ClsRegion CLS目标地域
- 支持地域参考  [地域列表](https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) 文档   
     * @param string $LogsetName 日志集名称，未填LogsetId时必填。若日志集不存在, 将自动创建
     * @param string $TopicName 日志主题名称，在未填TopicId时必填。 若日志主题不存在，将自动创建
     * @param string $Extend 日志配置扩展信息， 一般用于存储额外的日志投递配置
     * @param string $LogsetId 日志集id
- 通过[获取日志集列表](https://cloud.tencent.com/document/api/614/58624)获取日志集Id。
     * @param string $TopicId 日志主题id
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
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

        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Extend",$param) and $param["Extend"] !== null) {
            $this->Extend = $param["Extend"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}

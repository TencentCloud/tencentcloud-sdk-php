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
 * ModifyCloudProductLogCollection请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getAssumerName() 获取<p>云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS</p>
 * @method void setAssumerName(string $AssumerName) 设置<p>云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS</p>
 * @method string getLogType() 获取<p>日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</p>
 * @method string getCloudProductRegion() 获取<p>云产品地域。 不同日志类型(LogType)地域入參格式存在差异， 请参考如下示例：</p><ul><li>CDS所有日志类型：ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog：ap-guangzhou</li><li>MongoDB-ErrorLog：ap-guangzhou</li><li>TDMYSQL-SLOW：gz</li><li>DCDB所有日志类型：gz</li><li>MariaDB所有日志类型：gz</li><li>PostgreSQL所有日志类型：gz</li><li>BH所有日志类型：overseas-polaris(中国香港地区和其他)/fsi-polaris(金融区)/general-polaris(普通区)/intl-sg-prod(国际站)</li><li>APIS所有日志类型：gz</li></ul>
 * @method void setCloudProductRegion(string $CloudProductRegion) 设置<p>云产品地域。 不同日志类型(LogType)地域入參格式存在差异， 请参考如下示例：</p><ul><li>CDS所有日志类型：ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog：ap-guangzhou</li><li>MongoDB-ErrorLog：ap-guangzhou</li><li>TDMYSQL-SLOW：gz</li><li>DCDB所有日志类型：gz</li><li>MariaDB所有日志类型：gz</li><li>PostgreSQL所有日志类型：gz</li><li>BH所有日志类型：overseas-polaris(中国香港地区和其他)/fsi-polaris(金融区)/general-polaris(普通区)/intl-sg-prod(国际站)</li><li>APIS所有日志类型：gz</li></ul>
 * @method string getExtend() 获取<p>日志配置拓展信息， 一般用于存储额外的日志投递配置</p>
 * @method void setExtend(string $Extend) 设置<p>日志配置拓展信息， 一般用于存储额外的日志投递配置</p>
 * @method array getTags() 获取<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的logset和topic。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
 * @method void setTags(array $Tags) 设置<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的logset和topic。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
 */
class ModifyCloudProductLogCollectionRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS</p>
     */
    public $AssumerName;

    /**
     * @var string <p>日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</p>
     */
    public $LogType;

    /**
     * @var string <p>云产品地域。 不同日志类型(LogType)地域入參格式存在差异， 请参考如下示例：</p><ul><li>CDS所有日志类型：ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog：ap-guangzhou</li><li>MongoDB-ErrorLog：ap-guangzhou</li><li>TDMYSQL-SLOW：gz</li><li>DCDB所有日志类型：gz</li><li>MariaDB所有日志类型：gz</li><li>PostgreSQL所有日志类型：gz</li><li>BH所有日志类型：overseas-polaris(中国香港地区和其他)/fsi-polaris(金融区)/general-polaris(普通区)/intl-sg-prod(国际站)</li><li>APIS所有日志类型：gz</li></ul>
     */
    public $CloudProductRegion;

    /**
     * @var string <p>日志配置拓展信息， 一般用于存储额外的日志投递配置</p>
     */
    public $Extend;

    /**
     * @var array <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的logset和topic。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
     */
    public $Tags;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $AssumerName <p>云产品标识，支持枚举：CDS、CWP、CDB、TDSQL-C、MongoDB、TDStore、DCDB、MariaDB、PostgreSQL、BH、APIS</p>
     * @param string $LogType <p>日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</p>
     * @param string $CloudProductRegion <p>云产品地域。 不同日志类型(LogType)地域入參格式存在差异， 请参考如下示例：</p><ul><li>CDS所有日志类型：ap-guangzhou</li><li>CDB-AUDIT: gz</li><li>TDSQL-C-AUDIT: gz</li><li>MongoDB-AUDIT: gz</li><li>MongoDB-SlowLog：ap-guangzhou</li><li>MongoDB-ErrorLog：ap-guangzhou</li><li>TDMYSQL-SLOW：gz</li><li>DCDB所有日志类型：gz</li><li>MariaDB所有日志类型：gz</li><li>PostgreSQL所有日志类型：gz</li><li>BH所有日志类型：overseas-polaris(中国香港地区和其他)/fsi-polaris(金融区)/general-polaris(普通区)/intl-sg-prod(国际站)</li><li>APIS所有日志类型：gz</li></ul>
     * @param string $Extend <p>日志配置拓展信息， 一般用于存储额外的日志投递配置</p>
     * @param array $Tags <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的logset和topic。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
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

        if (array_key_exists("Extend",$param) and $param["Extend"] !== null) {
            $this->Extend = $param["Extend"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}

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
 * 云产品日志投递任务信息
 *
 * @method string getClsRegion() 获取日志服务地域
 * @method void setClsRegion(string $ClsRegion) 设置日志服务地域
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getExtend() 获取日志配置拓展信息， 一般用于存储额外的日志投递配置
 * @method void setExtend(string $Extend) 设置日志配置拓展信息， 一般用于存储额外的日志投递配置
 * @method string getLogType() 获取日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
 * @method void setLogType(string $LogType) 设置日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
 * @method integer getStatus() 获取任务状态， 0创建中 1创建完成 2 删除中 
 * @method void setStatus(integer $Status) 设置任务状态， 0创建中 1创建完成 2 删除中 
 */
class CloudProductLogTaskInfo extends AbstractModel
{
    /**
     * @var string 日志服务地域
     */
    public $ClsRegion;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var string 日志配置拓展信息， 一般用于存储额外的日志投递配置
     */
    public $Extend;

    /**
     * @var string 日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
     */
    public $LogType;

    /**
     * @var integer 任务状态， 0创建中 1创建完成 2 删除中 
     */
    public $Status;

    /**
     * @param string $ClsRegion 日志服务地域
     * @param string $InstanceId 实例ID
     * @param string $LogsetId 日志集ID
     * @param string $TopicId 日志主题ID
     * @param string $Extend 日志配置拓展信息， 一般用于存储额外的日志投递配置
     * @param string $LogType 日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS
     * @param integer $Status 任务状态， 0创建中 1创建完成 2 删除中 
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
        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Extend",$param) and $param["Extend"] !== null) {
            $this->Extend = $param["Extend"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

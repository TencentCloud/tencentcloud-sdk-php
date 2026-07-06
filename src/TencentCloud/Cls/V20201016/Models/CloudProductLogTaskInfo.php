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
 * @method string getClsRegion() 获取<p>日志服务地域</p>
 * @method void setClsRegion(string $ClsRegion) 设置<p>日志服务地域</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getLogsetId() 获取<p>日志集ID</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集ID</p>
 * @method string getTopicId() 获取<p>日志主题ID</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p>
 * @method string getExtend() 获取<p>日志配置拓展信息， 一般用于存储额外的日志投递配置</p>
 * @method void setExtend(string $Extend) 设置<p>日志配置拓展信息， 一般用于存储额外的日志投递配置</p>
 * @method string getLogType() 获取<p>日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</p>
 * @method integer getStatus() 获取<p>任务状态， 0创建中 1创建完成 2 删除中</p>
 * @method void setStatus(integer $Status) 设置<p>任务状态， 0创建中 1创建完成 2 删除中</p>
 * @method array getTopicTags() 获取<p>投递任务关联topic的标签信息</p>
 * @method void setTopicTags(array $TopicTags) 设置<p>投递任务关联topic的标签信息</p>
 * @method array getLogsetTags() 获取<p>投递任务关联logset的标签信息</p>
 * @method void setLogsetTags(array $LogsetTags) 设置<p>投递任务关联logset的标签信息</p>
 */
class CloudProductLogTaskInfo extends AbstractModel
{
    /**
     * @var string <p>日志服务地域</p>
     */
    public $ClsRegion;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志集ID</p>
     */
    public $LogsetId;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>日志配置拓展信息， 一般用于存储额外的日志投递配置</p>
     */
    public $Extend;

    /**
     * @var string <p>日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</p>
     */
    public $LogType;

    /**
     * @var integer <p>任务状态， 0创建中 1创建完成 2 删除中</p>
     */
    public $Status;

    /**
     * @var array <p>投递任务关联topic的标签信息</p>
     */
    public $TopicTags;

    /**
     * @var array <p>投递任务关联logset的标签信息</p>
     */
    public $LogsetTags;

    /**
     * @param string $ClsRegion <p>日志服务地域</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $LogsetId <p>日志集ID</p>
     * @param string $TopicId <p>日志主题ID</p>
     * @param string $Extend <p>日志配置拓展信息， 一般用于存储额外的日志投递配置</p>
     * @param string $LogType <p>日志类型，支持枚举：CDS-AUDIT、CDS-RISK、CDB-AUDIT、TDSQL-C-AUDIT、MongoDB-AUDIT、MongoDB-SlowLog、MongoDB-ErrorLog、TDMYSQL-SLOW、DCDB-AUDIT、DCDB-SLOW、DCDB-ERROR、MariaDB-AUDIT、MariaDB-SLOW、MariaDB-ERROR、PostgreSQL-SLOW、PostgreSQL-ERROR、PostgreSQL-AUDIT、BH-FILELOG、BH-COMMANDLOG、APIS-ACCESS</p>
     * @param integer $Status <p>任务状态， 0创建中 1创建完成 2 删除中</p>
     * @param array $TopicTags <p>投递任务关联topic的标签信息</p>
     * @param array $LogsetTags <p>投递任务关联logset的标签信息</p>
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

        if (array_key_exists("TopicTags",$param) and $param["TopicTags"] !== null) {
            $this->TopicTags = [];
            foreach ($param["TopicTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TopicTags, $obj);
            }
        }

        if (array_key_exists("LogsetTags",$param) and $param["LogsetTags"] !== null) {
            $this->LogsetTags = [];
            foreach ($param["LogsetTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->LogsetTags, $obj);
            }
        }
    }
}

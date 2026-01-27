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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 遗留备份列表
 *
 * @method integer getBackupId() 获取遗照备份id
 * @method void setBackupId(integer $BackupId) 设置遗照备份id
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getBackupTime() 获取备份时间
 * @method void setBackupTime(string $BackupTime) 设置备份时间
 * @method string getDbVersion() 获取数据库版本
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
 * @method string getDbMode() 获取Db类型(NORMAL, SERVERLESS)
 * @method void setDbMode(string $DbMode) 设置Db类型(NORMAL, SERVERLESS)
 * @method string getClusterStatus() 获取集群状态
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态
 * @method array getTasks() 获取任务列表
 * @method void setTasks(array $Tasks) 设置任务列表
 */
class SaveBackupClusterInfo extends AbstractModel
{
    /**
     * @var integer 遗照备份id
     */
    public $BackupId;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 备份时间
     */
    public $BackupTime;

    /**
     * @var string 数据库版本
     */
    public $DbVersion;

    /**
     * @var string Db类型(NORMAL, SERVERLESS)
     */
    public $DbMode;

    /**
     * @var string 集群状态
     */
    public $ClusterStatus;

    /**
     * @var array 任务列表
     */
    public $Tasks;

    /**
     * @param integer $BackupId 遗照备份id
     * @param string $ClusterId 集群id
     * @param string $ClusterName 集群名称
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param string $BackupTime 备份时间
     * @param string $DbVersion 数据库版本
     * @param string $DbMode Db类型(NORMAL, SERVERLESS)
     * @param string $ClusterStatus 集群状态
     * @param array $Tasks 任务列表
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }
    }
}

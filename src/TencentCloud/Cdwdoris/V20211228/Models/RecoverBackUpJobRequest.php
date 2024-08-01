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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecoverBackUpJob请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getBackUpJobId() 获取任务id
 * @method void setBackUpJobId(integer $BackUpJobId) 设置任务id
 * @method integer getReplicationNum() 获取恢复出来的新表副本数
 * @method void setReplicationNum(integer $ReplicationNum) 设置恢复出来的新表副本数
 * @method integer getReserveSourceConfig() 获取恢复是否保持源表中的配置，1时表示保留源表中的配置
 * @method void setReserveSourceConfig(integer $ReserveSourceConfig) 设置恢复是否保持源表中的配置，1时表示保留源表中的配置
 * @method integer getRecoverType() 获取0默认 1cos恢复
 * @method void setRecoverType(integer $RecoverType) 设置0默认 1cos恢复
 * @method CosSourceInfo getCosSourceInfo() 获取CosSourceInfo对象
 * @method void setCosSourceInfo(CosSourceInfo $CosSourceInfo) 设置CosSourceInfo对象
 * @method integer getScheduleType() 获取0默认 1定期执行
 * @method void setScheduleType(integer $ScheduleType) 设置0默认 1定期执行
 * @method string getNextTime() 获取年-月-日 时:分:秒
 * @method void setNextTime(string $NextTime) 设置年-月-日 时:分:秒
 * @method string getScheduleName() 获取调度名称
 * @method void setScheduleName(string $ScheduleName) 设置调度名称
 * @method string getOperationType() 获取create update
 * @method void setOperationType(string $OperationType) 设置create update
 * @method string getRecoverScope() 获取恢复粒度：All全量、Database按库、Table按表
 * @method void setRecoverScope(string $RecoverScope) 设置恢复粒度：All全量、Database按库、Table按表
 * @method string getRecoverDatabase() 获取恢复库：如果是按库备份，则需要该字段，库之间用","分割
 * @method void setRecoverDatabase(string $RecoverDatabase) 设置恢复库：如果是按库备份，则需要该字段，库之间用","分割
 */
class RecoverBackUpJobRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 任务id
     */
    public $BackUpJobId;

    /**
     * @var integer 恢复出来的新表副本数
     */
    public $ReplicationNum;

    /**
     * @var integer 恢复是否保持源表中的配置，1时表示保留源表中的配置
     */
    public $ReserveSourceConfig;

    /**
     * @var integer 0默认 1cos恢复
     */
    public $RecoverType;

    /**
     * @var CosSourceInfo CosSourceInfo对象
     */
    public $CosSourceInfo;

    /**
     * @var integer 0默认 1定期执行
     */
    public $ScheduleType;

    /**
     * @var string 年-月-日 时:分:秒
     */
    public $NextTime;

    /**
     * @var string 调度名称
     */
    public $ScheduleName;

    /**
     * @var string create update
     */
    public $OperationType;

    /**
     * @var string 恢复粒度：All全量、Database按库、Table按表
     */
    public $RecoverScope;

    /**
     * @var string 恢复库：如果是按库备份，则需要该字段，库之间用","分割
     */
    public $RecoverDatabase;

    /**
     * @param string $InstanceId 集群id
     * @param integer $BackUpJobId 任务id
     * @param integer $ReplicationNum 恢复出来的新表副本数
     * @param integer $ReserveSourceConfig 恢复是否保持源表中的配置，1时表示保留源表中的配置
     * @param integer $RecoverType 0默认 1cos恢复
     * @param CosSourceInfo $CosSourceInfo CosSourceInfo对象
     * @param integer $ScheduleType 0默认 1定期执行
     * @param string $NextTime 年-月-日 时:分:秒
     * @param string $ScheduleName 调度名称
     * @param string $OperationType create update
     * @param string $RecoverScope 恢复粒度：All全量、Database按库、Table按表
     * @param string $RecoverDatabase 恢复库：如果是按库备份，则需要该字段，库之间用","分割
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

        if (array_key_exists("BackUpJobId",$param) and $param["BackUpJobId"] !== null) {
            $this->BackUpJobId = $param["BackUpJobId"];
        }

        if (array_key_exists("ReplicationNum",$param) and $param["ReplicationNum"] !== null) {
            $this->ReplicationNum = $param["ReplicationNum"];
        }

        if (array_key_exists("ReserveSourceConfig",$param) and $param["ReserveSourceConfig"] !== null) {
            $this->ReserveSourceConfig = $param["ReserveSourceConfig"];
        }

        if (array_key_exists("RecoverType",$param) and $param["RecoverType"] !== null) {
            $this->RecoverType = $param["RecoverType"];
        }

        if (array_key_exists("CosSourceInfo",$param) and $param["CosSourceInfo"] !== null) {
            $this->CosSourceInfo = new CosSourceInfo();
            $this->CosSourceInfo->deserialize($param["CosSourceInfo"]);
        }

        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("NextTime",$param) and $param["NextTime"] !== null) {
            $this->NextTime = $param["NextTime"];
        }

        if (array_key_exists("ScheduleName",$param) and $param["ScheduleName"] !== null) {
            $this->ScheduleName = $param["ScheduleName"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("RecoverScope",$param) and $param["RecoverScope"] !== null) {
            $this->RecoverScope = $param["RecoverScope"];
        }

        if (array_key_exists("RecoverDatabase",$param) and $param["RecoverDatabase"] !== null) {
            $this->RecoverDatabase = $param["RecoverDatabase"];
        }
    }
}

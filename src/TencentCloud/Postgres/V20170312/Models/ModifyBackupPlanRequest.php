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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupPlan请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method string getMinBackupStartTime() 获取<p>实例最早开始备份时间</p>
 * @method void setMinBackupStartTime(string $MinBackupStartTime) 设置<p>实例最早开始备份时间</p>
 * @method string getMaxBackupStartTime() 获取<p>实例最晚开始备份时间</p>
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) 设置<p>实例最晚开始备份时间</p>
 * @method integer getBaseBackupRetentionPeriod() 获取<p>实例备份保留时长，取值范围为7-1830，单位是天</p>
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) 设置<p>实例备份保留时长，取值范围为7-1830，单位是天</p>
 * @method array getBackupPeriod() 获取<p>实例备份周期，若是星期维度，格式为小写星期英文单词，且至少设置两天备份；若是按月维度，格式为数字字符，如[&quot;1&quot;,&quot;2&quot;]。</p>
 * @method void setBackupPeriod(array $BackupPeriod) 设置<p>实例备份周期，若是星期维度，格式为小写星期英文单词，且至少设置两天备份；若是按月维度，格式为数字字符，如[&quot;1&quot;,&quot;2&quot;]。</p>
 * @method integer getLogBackupRetentionPeriod() 获取<p>实例日志备份保留时长，取值范围为7-1830，单位是天</p>
 * @method void setLogBackupRetentionPeriod(integer $LogBackupRetentionPeriod) 设置<p>实例日志备份保留时长，取值范围为7-1830，单位是天</p>
 * @method string getPlanId() 获取<p>备份计划ID，用于指明要修改哪个备份计划，不传则是修改默认备份计划。</p>
 * @method void setPlanId(string $PlanId) 设置<p>备份计划ID，用于指明要修改哪个备份计划，不传则是修改默认备份计划。</p>
 * @method string getPlanName() 获取<p>要修改的备份计划名称。</p>
 * @method void setPlanName(string $PlanName) 设置<p>要修改的备份计划名称。</p>
 * @method string getBackupMethod() 获取<p>备份方式</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>logical： 逻辑备份</li><li>snapshot： 快照备份</li></ul>
 * @method void setBackupMethod(string $BackupMethod) 设置<p>备份方式</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>logical： 逻辑备份</li><li>snapshot： 快照备份</li></ul>
 */
class ModifyBackupPlanRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>实例最早开始备份时间</p>
     */
    public $MinBackupStartTime;

    /**
     * @var string <p>实例最晚开始备份时间</p>
     */
    public $MaxBackupStartTime;

    /**
     * @var integer <p>实例备份保留时长，取值范围为7-1830，单位是天</p>
     */
    public $BaseBackupRetentionPeriod;

    /**
     * @var array <p>实例备份周期，若是星期维度，格式为小写星期英文单词，且至少设置两天备份；若是按月维度，格式为数字字符，如[&quot;1&quot;,&quot;2&quot;]。</p>
     */
    public $BackupPeriod;

    /**
     * @var integer <p>实例日志备份保留时长，取值范围为7-1830，单位是天</p>
     */
    public $LogBackupRetentionPeriod;

    /**
     * @var string <p>备份计划ID，用于指明要修改哪个备份计划，不传则是修改默认备份计划。</p>
     */
    public $PlanId;

    /**
     * @var string <p>要修改的备份计划名称。</p>
     */
    public $PlanName;

    /**
     * @var string <p>备份方式</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>logical： 逻辑备份</li><li>snapshot： 快照备份</li></ul>
     */
    public $BackupMethod;

    /**
     * @param string $DBInstanceId <p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     * @param string $MinBackupStartTime <p>实例最早开始备份时间</p>
     * @param string $MaxBackupStartTime <p>实例最晚开始备份时间</p>
     * @param integer $BaseBackupRetentionPeriod <p>实例备份保留时长，取值范围为7-1830，单位是天</p>
     * @param array $BackupPeriod <p>实例备份周期，若是星期维度，格式为小写星期英文单词，且至少设置两天备份；若是按月维度，格式为数字字符，如[&quot;1&quot;,&quot;2&quot;]。</p>
     * @param integer $LogBackupRetentionPeriod <p>实例日志备份保留时长，取值范围为7-1830，单位是天</p>
     * @param string $PlanId <p>备份计划ID，用于指明要修改哪个备份计划，不传则是修改默认备份计划。</p>
     * @param string $PlanName <p>要修改的备份计划名称。</p>
     * @param string $BackupMethod <p>备份方式</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>logical： 逻辑备份</li><li>snapshot： 快照备份</li></ul>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("MinBackupStartTime",$param) and $param["MinBackupStartTime"] !== null) {
            $this->MinBackupStartTime = $param["MinBackupStartTime"];
        }

        if (array_key_exists("MaxBackupStartTime",$param) and $param["MaxBackupStartTime"] !== null) {
            $this->MaxBackupStartTime = $param["MaxBackupStartTime"];
        }

        if (array_key_exists("BaseBackupRetentionPeriod",$param) and $param["BaseBackupRetentionPeriod"] !== null) {
            $this->BaseBackupRetentionPeriod = $param["BaseBackupRetentionPeriod"];
        }

        if (array_key_exists("BackupPeriod",$param) and $param["BackupPeriod"] !== null) {
            $this->BackupPeriod = $param["BackupPeriod"];
        }

        if (array_key_exists("LogBackupRetentionPeriod",$param) and $param["LogBackupRetentionPeriod"] !== null) {
            $this->LogBackupRetentionPeriod = $param["LogBackupRetentionPeriod"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }
    }
}

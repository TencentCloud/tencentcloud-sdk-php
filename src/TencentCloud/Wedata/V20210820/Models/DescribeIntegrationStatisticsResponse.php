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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntegrationStatistics返回参数结构体
 *
 * @method integer getTotalTask() 获取总任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTask(integer $TotalTask) 设置总任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProdTask() 获取生产态任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProdTask(integer $ProdTask) 设置生产态任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDevTask() 获取开发态任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevTask(integer $DevTask) 设置开发态任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalReadRecords() 获取总读取条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalReadRecords(integer $TotalReadRecords) 设置总读取条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalWriteRecords() 获取总写入条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalWriteRecords(integer $TotalWriteRecords) 设置总写入条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalErrorRecords() 获取总脏数据条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalErrorRecords(integer $TotalErrorRecords) 设置总脏数据条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalAlarmEvent() 获取总告警事件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalAlarmEvent(integer $TotalAlarmEvent) 设置总告警事件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIncreaseReadRecords() 获取当天读取增长条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncreaseReadRecords(integer $IncreaseReadRecords) 设置当天读取增长条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIncreaseWriteRecords() 获取当天写入增长条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncreaseWriteRecords(integer $IncreaseWriteRecords) 设置当天写入增长条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIncreaseErrorRecords() 获取当天脏数据增长条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncreaseErrorRecords(integer $IncreaseErrorRecords) 设置当天脏数据增长条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIncreaseAlarmEvent() 获取当天告警事件增长数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncreaseAlarmEvent(integer $IncreaseAlarmEvent) 设置当天告警事件增长数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmEvent() 获取告警事件统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmEvent(string $AlarmEvent) 设置告警事件统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIntegrationStatisticsResponse extends AbstractModel
{
    /**
     * @var integer 总任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTask;

    /**
     * @var integer 生产态任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProdTask;

    /**
     * @var integer 开发态任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevTask;

    /**
     * @var integer 总读取条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalReadRecords;

    /**
     * @var integer 总写入条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalWriteRecords;

    /**
     * @var integer 总脏数据条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalErrorRecords;

    /**
     * @var integer 总告警事件数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalAlarmEvent;

    /**
     * @var integer 当天读取增长条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncreaseReadRecords;

    /**
     * @var integer 当天写入增长条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncreaseWriteRecords;

    /**
     * @var integer 当天脏数据增长条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncreaseErrorRecords;

    /**
     * @var integer 当天告警事件增长数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncreaseAlarmEvent;

    /**
     * @var string 告警事件统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmEvent;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalTask 总任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProdTask 生产态任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DevTask 开发态任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalReadRecords 总读取条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalWriteRecords 总写入条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalErrorRecords 总脏数据条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalAlarmEvent 总告警事件数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IncreaseReadRecords 当天读取增长条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IncreaseWriteRecords 当天写入增长条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IncreaseErrorRecords 当天脏数据增长条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IncreaseAlarmEvent 当天告警事件增长数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmEvent 告警事件统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalTask",$param) and $param["TotalTask"] !== null) {
            $this->TotalTask = $param["TotalTask"];
        }

        if (array_key_exists("ProdTask",$param) and $param["ProdTask"] !== null) {
            $this->ProdTask = $param["ProdTask"];
        }

        if (array_key_exists("DevTask",$param) and $param["DevTask"] !== null) {
            $this->DevTask = $param["DevTask"];
        }

        if (array_key_exists("TotalReadRecords",$param) and $param["TotalReadRecords"] !== null) {
            $this->TotalReadRecords = $param["TotalReadRecords"];
        }

        if (array_key_exists("TotalWriteRecords",$param) and $param["TotalWriteRecords"] !== null) {
            $this->TotalWriteRecords = $param["TotalWriteRecords"];
        }

        if (array_key_exists("TotalErrorRecords",$param) and $param["TotalErrorRecords"] !== null) {
            $this->TotalErrorRecords = $param["TotalErrorRecords"];
        }

        if (array_key_exists("TotalAlarmEvent",$param) and $param["TotalAlarmEvent"] !== null) {
            $this->TotalAlarmEvent = $param["TotalAlarmEvent"];
        }

        if (array_key_exists("IncreaseReadRecords",$param) and $param["IncreaseReadRecords"] !== null) {
            $this->IncreaseReadRecords = $param["IncreaseReadRecords"];
        }

        if (array_key_exists("IncreaseWriteRecords",$param) and $param["IncreaseWriteRecords"] !== null) {
            $this->IncreaseWriteRecords = $param["IncreaseWriteRecords"];
        }

        if (array_key_exists("IncreaseErrorRecords",$param) and $param["IncreaseErrorRecords"] !== null) {
            $this->IncreaseErrorRecords = $param["IncreaseErrorRecords"];
        }

        if (array_key_exists("IncreaseAlarmEvent",$param) and $param["IncreaseAlarmEvent"] !== null) {
            $this->IncreaseAlarmEvent = $param["IncreaseAlarmEvent"];
        }

        if (array_key_exists("AlarmEvent",$param) and $param["AlarmEvent"] !== null) {
            $this->AlarmEvent = $param["AlarmEvent"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

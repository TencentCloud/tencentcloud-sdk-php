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
 * 离线任务实例运行指标概览
 *
 * @method integer getTotalReadRecords() 获取总读取记录数
 * @method void setTotalReadRecords(integer $TotalReadRecords) 设置总读取记录数
 * @method integer getTotalReadBytes() 获取总读取字节数
 * @method void setTotalReadBytes(integer $TotalReadBytes) 设置总读取字节数
 * @method integer getTotalWriteRecords() 获取总写入记录数
 * @method void setTotalWriteRecords(integer $TotalWriteRecords) 设置总写入记录数
 * @method integer getTotalWriteBytes() 获取总写入字节数
 * @method void setTotalWriteBytes(integer $TotalWriteBytes) 设置总写入字节数
 * @method integer getRecordSpeed() 获取速率（条/秒）
 * @method void setRecordSpeed(integer $RecordSpeed) 设置速率（条/秒）
 * @method float getByteSpeed() 获取流量（Byte/秒）
 * @method void setByteSpeed(float $ByteSpeed) 设置流量（Byte/秒）
 * @method integer getTotalErrorRecords() 获取脏数据记录数
 * @method void setTotalErrorRecords(integer $TotalErrorRecords) 设置脏数据记录数
 * @method integer getTotalErrorBytes() 获取脏数据字节数
 * @method void setTotalErrorBytes(integer $TotalErrorBytes) 设置脏数据字节数
 * @method integer getTotalRunDuration() 获取任务运行总时长
 * @method void setTotalRunDuration(integer $TotalRunDuration) 设置任务运行总时长
 * @method string getBeginRunTime() 获取任务开始运行时间
 * @method void setBeginRunTime(string $BeginRunTime) 设置任务开始运行时间
 * @method string getEndRunTime() 获取任务结束运行时间
 * @method void setEndRunTime(string $EndRunTime) 设置任务结束运行时间
 */
class InstanceReportSummary extends AbstractModel
{
    /**
     * @var integer 总读取记录数
     */
    public $TotalReadRecords;

    /**
     * @var integer 总读取字节数
     */
    public $TotalReadBytes;

    /**
     * @var integer 总写入记录数
     */
    public $TotalWriteRecords;

    /**
     * @var integer 总写入字节数
     */
    public $TotalWriteBytes;

    /**
     * @var integer 速率（条/秒）
     */
    public $RecordSpeed;

    /**
     * @var float 流量（Byte/秒）
     */
    public $ByteSpeed;

    /**
     * @var integer 脏数据记录数
     */
    public $TotalErrorRecords;

    /**
     * @var integer 脏数据字节数
     */
    public $TotalErrorBytes;

    /**
     * @var integer 任务运行总时长
     */
    public $TotalRunDuration;

    /**
     * @var string 任务开始运行时间
     */
    public $BeginRunTime;

    /**
     * @var string 任务结束运行时间
     */
    public $EndRunTime;

    /**
     * @param integer $TotalReadRecords 总读取记录数
     * @param integer $TotalReadBytes 总读取字节数
     * @param integer $TotalWriteRecords 总写入记录数
     * @param integer $TotalWriteBytes 总写入字节数
     * @param integer $RecordSpeed 速率（条/秒）
     * @param float $ByteSpeed 流量（Byte/秒）
     * @param integer $TotalErrorRecords 脏数据记录数
     * @param integer $TotalErrorBytes 脏数据字节数
     * @param integer $TotalRunDuration 任务运行总时长
     * @param string $BeginRunTime 任务开始运行时间
     * @param string $EndRunTime 任务结束运行时间
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
        if (array_key_exists("TotalReadRecords",$param) and $param["TotalReadRecords"] !== null) {
            $this->TotalReadRecords = $param["TotalReadRecords"];
        }

        if (array_key_exists("TotalReadBytes",$param) and $param["TotalReadBytes"] !== null) {
            $this->TotalReadBytes = $param["TotalReadBytes"];
        }

        if (array_key_exists("TotalWriteRecords",$param) and $param["TotalWriteRecords"] !== null) {
            $this->TotalWriteRecords = $param["TotalWriteRecords"];
        }

        if (array_key_exists("TotalWriteBytes",$param) and $param["TotalWriteBytes"] !== null) {
            $this->TotalWriteBytes = $param["TotalWriteBytes"];
        }

        if (array_key_exists("RecordSpeed",$param) and $param["RecordSpeed"] !== null) {
            $this->RecordSpeed = $param["RecordSpeed"];
        }

        if (array_key_exists("ByteSpeed",$param) and $param["ByteSpeed"] !== null) {
            $this->ByteSpeed = $param["ByteSpeed"];
        }

        if (array_key_exists("TotalErrorRecords",$param) and $param["TotalErrorRecords"] !== null) {
            $this->TotalErrorRecords = $param["TotalErrorRecords"];
        }

        if (array_key_exists("TotalErrorBytes",$param) and $param["TotalErrorBytes"] !== null) {
            $this->TotalErrorBytes = $param["TotalErrorBytes"];
        }

        if (array_key_exists("TotalRunDuration",$param) and $param["TotalRunDuration"] !== null) {
            $this->TotalRunDuration = $param["TotalRunDuration"];
        }

        if (array_key_exists("BeginRunTime",$param) and $param["BeginRunTime"] !== null) {
            $this->BeginRunTime = $param["BeginRunTime"];
        }

        if (array_key_exists("EndRunTime",$param) and $param["EndRunTime"] !== null) {
            $this->EndRunTime = $param["EndRunTime"];
        }
    }
}

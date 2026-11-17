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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份计划付费信息
 *
 * @method string getInstanceClass() 获取实例规格。
 * @method void setInstanceClass(string $InstanceClass) 设置实例规格。
 * @method string getPayType() 获取付费方式。取值：
- postPay：后付费
- prePay：预付费
 * @method void setPayType(string $PayType) 设置付费方式。取值：
- postPay：后付费
- prePay：预付费
 * @method integer getFreeSpace() 获取免费额度，单位：字节。取值为 -1 表示不限量。
 * @method void setFreeSpace(integer $FreeSpace) 设置免费额度，单位：字节。取值为 -1 表示不限量。
 * @method integer getTotalChargeSpace() 获取本月计费空间，单位：字节。
 * @method void setTotalChargeSpace(integer $TotalChargeSpace) 设置本月计费空间，单位：字节。
 * @method integer getFullChargeSpace() 获取全量计费空间，单位：字节。
 * @method void setFullChargeSpace(integer $FullChargeSpace) 设置全量计费空间，单位：字节。
 * @method integer getIncrementChargeSpace() 获取增量计费空间，单位：字节。
 * @method void setIncrementChargeSpace(integer $IncrementChargeSpace) 设置增量计费空间，单位：字节。
 * @method integer getFullBackupSetSize() 获取本月全量备份集大小，单位：字节。
 * @method void setFullBackupSetSize(integer $FullBackupSetSize) 设置本月全量备份集大小，单位：字节。
 * @method integer getIncrementBackupSetSize() 获取本月增量备份集大小，单位：字节。
 * @method void setIncrementBackupSetSize(integer $IncrementBackupSetSize) 设置本月增量备份集大小，单位：字节。
 * @method string getCreateTime() 获取创建时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00。
 * @method string getTimeRange() 获取统计周期，格式为“开始时间 - 结束时间”。
 * @method void setTimeRange(string $TimeRange) 设置统计周期，格式为“开始时间 - 结束时间”。
 */
class BackupPlanPayInfo extends AbstractModel
{
    /**
     * @var string 实例规格。
     */
    public $InstanceClass;

    /**
     * @var string 付费方式。取值：
- postPay：后付费
- prePay：预付费
     */
    public $PayType;

    /**
     * @var integer 免费额度，单位：字节。取值为 -1 表示不限量。
     */
    public $FreeSpace;

    /**
     * @var integer 本月计费空间，单位：字节。
     */
    public $TotalChargeSpace;

    /**
     * @var integer 全量计费空间，单位：字节。
     */
    public $FullChargeSpace;

    /**
     * @var integer 增量计费空间，单位：字节。
     */
    public $IncrementChargeSpace;

    /**
     * @var integer 本月全量备份集大小，单位：字节。
     */
    public $FullBackupSetSize;

    /**
     * @var integer 本月增量备份集大小，单位：字节。
     */
    public $IncrementBackupSetSize;

    /**
     * @var string 创建时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00。
     */
    public $CreateTime;

    /**
     * @var string 统计周期，格式为“开始时间 - 结束时间”。
     */
    public $TimeRange;

    /**
     * @param string $InstanceClass 实例规格。
     * @param string $PayType 付费方式。取值：
- postPay：后付费
- prePay：预付费
     * @param integer $FreeSpace 免费额度，单位：字节。取值为 -1 表示不限量。
     * @param integer $TotalChargeSpace 本月计费空间，单位：字节。
     * @param integer $FullChargeSpace 全量计费空间，单位：字节。
     * @param integer $IncrementChargeSpace 增量计费空间，单位：字节。
     * @param integer $FullBackupSetSize 本月全量备份集大小，单位：字节。
     * @param integer $IncrementBackupSetSize 本月增量备份集大小，单位：字节。
     * @param string $CreateTime 创建时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00。
     * @param string $TimeRange 统计周期，格式为“开始时间 - 结束时间”。
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
        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("FreeSpace",$param) and $param["FreeSpace"] !== null) {
            $this->FreeSpace = $param["FreeSpace"];
        }

        if (array_key_exists("TotalChargeSpace",$param) and $param["TotalChargeSpace"] !== null) {
            $this->TotalChargeSpace = $param["TotalChargeSpace"];
        }

        if (array_key_exists("FullChargeSpace",$param) and $param["FullChargeSpace"] !== null) {
            $this->FullChargeSpace = $param["FullChargeSpace"];
        }

        if (array_key_exists("IncrementChargeSpace",$param) and $param["IncrementChargeSpace"] !== null) {
            $this->IncrementChargeSpace = $param["IncrementChargeSpace"];
        }

        if (array_key_exists("FullBackupSetSize",$param) and $param["FullBackupSetSize"] !== null) {
            $this->FullBackupSetSize = $param["FullBackupSetSize"];
        }

        if (array_key_exists("IncrementBackupSetSize",$param) and $param["IncrementBackupSetSize"] !== null) {
            $this->IncrementBackupSetSize = $param["IncrementBackupSetSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }
    }
}

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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库超期备份配置
 *
 * @method boolean getEnableBackupPolicy() 获取备份策略是否启用。
 * @method void setEnableBackupPolicy(boolean $EnableBackupPolicy) 设置备份策略是否启用。
 * @method string getBeginDate() 获取超期保留开始日期，早于开始日期的超期备份不保留，格式：yyyy-mm-dd。
 * @method void setBeginDate(string $BeginDate) 设置超期保留开始日期，早于开始日期的超期备份不保留，格式：yyyy-mm-dd。
 * @method integer getMaxRetentionDays() 获取超期备份保留时长，超出保留时间的超期备份将被删除，可填写1-3650整数。
 * @method void setMaxRetentionDays(integer $MaxRetentionDays) 设置超期备份保留时长，超出保留时间的超期备份将被删除，可填写1-3650整数。
 * @method string getFrequency() 获取备份模式，可选择按年月周模式保存
* 按年：annually
* 按月：monthly
* 按周：weekly
 * @method void setFrequency(string $Frequency) 设置备份模式，可选择按年月周模式保存
* 按年：annually
* 按月：monthly
* 按周：weekly
 * @method array getWeekDays() 获取Frequency等于weekly时生效。
表示保留特定工作日备份。可选择周一到周日，支持多选，取星期英文：
* 星期一 ：Monday
* 星期二 ：Tuesday
* 星期三：Wednesday
* 星期四：Thursday
* 星期五：Friday
* 星期六：Saturday
* 星期日：Sunday
 * @method void setWeekDays(array $WeekDays) 设置Frequency等于weekly时生效。
表示保留特定工作日备份。可选择周一到周日，支持多选，取星期英文：
* 星期一 ：Monday
* 星期二 ：Tuesday
* 星期三：Wednesday
* 星期四：Thursday
* 星期五：Friday
* 星期六：Saturday
* 星期日：Sunday
 * @method integer getBackupCount() 获取保留备份个数，Frequency等于monthly或weekly时生效。
备份模式选择按月时，可填写1-28整数；
备份模式选择年时，可填写1-336整数。
 * @method void setBackupCount(integer $BackupCount) 设置保留备份个数，Frequency等于monthly或weekly时生效。
备份模式选择按月时，可填写1-28整数；
备份模式选择年时，可填写1-336整数。
 */
class BackupConfig extends AbstractModel
{
    /**
     * @var boolean 备份策略是否启用。
     */
    public $EnableBackupPolicy;

    /**
     * @var string 超期保留开始日期，早于开始日期的超期备份不保留，格式：yyyy-mm-dd。
     */
    public $BeginDate;

    /**
     * @var integer 超期备份保留时长，超出保留时间的超期备份将被删除，可填写1-3650整数。
     */
    public $MaxRetentionDays;

    /**
     * @var string 备份模式，可选择按年月周模式保存
* 按年：annually
* 按月：monthly
* 按周：weekly
     */
    public $Frequency;

    /**
     * @var array Frequency等于weekly时生效。
表示保留特定工作日备份。可选择周一到周日，支持多选，取星期英文：
* 星期一 ：Monday
* 星期二 ：Tuesday
* 星期三：Wednesday
* 星期四：Thursday
* 星期五：Friday
* 星期六：Saturday
* 星期日：Sunday
     */
    public $WeekDays;

    /**
     * @var integer 保留备份个数，Frequency等于monthly或weekly时生效。
备份模式选择按月时，可填写1-28整数；
备份模式选择年时，可填写1-336整数。
     */
    public $BackupCount;

    /**
     * @param boolean $EnableBackupPolicy 备份策略是否启用。
     * @param string $BeginDate 超期保留开始日期，早于开始日期的超期备份不保留，格式：yyyy-mm-dd。
     * @param integer $MaxRetentionDays 超期备份保留时长，超出保留时间的超期备份将被删除，可填写1-3650整数。
     * @param string $Frequency 备份模式，可选择按年月周模式保存
* 按年：annually
* 按月：monthly
* 按周：weekly
     * @param array $WeekDays Frequency等于weekly时生效。
表示保留特定工作日备份。可选择周一到周日，支持多选，取星期英文：
* 星期一 ：Monday
* 星期二 ：Tuesday
* 星期三：Wednesday
* 星期四：Thursday
* 星期五：Friday
* 星期六：Saturday
* 星期日：Sunday
     * @param integer $BackupCount 保留备份个数，Frequency等于monthly或weekly时生效。
备份模式选择按月时，可填写1-28整数；
备份模式选择年时，可填写1-336整数。
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
        if (array_key_exists("EnableBackupPolicy",$param) and $param["EnableBackupPolicy"] !== null) {
            $this->EnableBackupPolicy = $param["EnableBackupPolicy"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("MaxRetentionDays",$param) and $param["MaxRetentionDays"] !== null) {
            $this->MaxRetentionDays = $param["MaxRetentionDays"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("BackupCount",$param) and $param["BackupCount"] !== null) {
            $this->BackupCount = $param["BackupCount"];
        }
    }
}

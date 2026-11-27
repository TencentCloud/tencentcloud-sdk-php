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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupConfig返回参数结构体
 *
 * @method integer getStartTimeMin() 获取<p>自动备份开始的最早时间点，单位为时刻。例如，2 - 凌晨 2:00。（该字段已废弃，建议使用 BackupTimeWindow 字段）</p>
 * @method void setStartTimeMin(integer $StartTimeMin) 设置<p>自动备份开始的最早时间点，单位为时刻。例如，2 - 凌晨 2:00。（该字段已废弃，建议使用 BackupTimeWindow 字段）</p>
 * @method integer getStartTimeMax() 获取<p>自动备份开始的最晚时间点，单位为时刻。例如，6 - 凌晨 6:00。（该字段已废弃，建议使用 BackupTimeWindow 字段）</p>
 * @method void setStartTimeMax(integer $StartTimeMax) 设置<p>自动备份开始的最晚时间点，单位为时刻。例如，6 - 凌晨 6:00。（该字段已废弃，建议使用 BackupTimeWindow 字段）</p>
 * @method integer getBackupExpireDays() 获取<p>备份文件保留时间，单位为天。</p>
 * @method void setBackupExpireDays(integer $BackupExpireDays) 设置<p>备份文件保留时间，单位为天。</p>
 * @method string getBackupMethod() 获取<p>备份方式，可能的值为：physical - 物理备份，logical - 逻辑备份。</p>
 * @method void setBackupMethod(string $BackupMethod) 设置<p>备份方式，可能的值为：physical - 物理备份，logical - 逻辑备份。</p>
 * @method integer getBinlogExpireDays() 获取<p>Binlog 文件保留时间，单位为天。</p>
 * @method void setBinlogExpireDays(integer $BinlogExpireDays) 设置<p>Binlog 文件保留时间，单位为天。</p>
 * @method CommonTimeWindow getBackupTimeWindow() 获取<p>实例自动备份的时间窗。</p>
 * @method void setBackupTimeWindow(CommonTimeWindow $BackupTimeWindow) 设置<p>实例自动备份的时间窗。</p>
 * @method string getEnableBackupPeriodSave() 获取<p>定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off</p>
 * @method void setEnableBackupPeriodSave(string $EnableBackupPeriodSave) 设置<p>定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off</p>
 * @method integer getBackupPeriodSaveDays() 获取<p>定期保留最长天数，最小值：90，最大值：3650，默认值：1080</p>
 * @method void setBackupPeriodSaveDays(integer $BackupPeriodSaveDays) 设置<p>定期保留最长天数，最小值：90，最大值：3650，默认值：1080</p>
 * @method string getBackupPeriodSaveInterval() 获取<p>定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly</p>
 * @method void setBackupPeriodSaveInterval(string $BackupPeriodSaveInterval) 设置<p>定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly</p>
 * @method integer getBackupPeriodSaveCount() 获取<p>定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1</p>
 * @method void setBackupPeriodSaveCount(integer $BackupPeriodSaveCount) 设置<p>定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1</p>
 * @method string getStartBackupPeriodSaveDate() 获取<p>定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss</p>
 * @method void setStartBackupPeriodSaveDate(string $StartBackupPeriodSaveDate) 设置<p>定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss</p>
 * @method string getEnableBackupArchive() 获取<p>是否开启数据备份归档策略，off-关闭，on-打开，默认为off</p>
 * @method void setEnableBackupArchive(string $EnableBackupArchive) 设置<p>是否开启数据备份归档策略，off-关闭，on-打开，默认为off</p>
 * @method integer getBackupArchiveDays() 获取<p>数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数</p>
 * @method void setBackupArchiveDays(integer $BackupArchiveDays) 设置<p>数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数</p>
 * @method string getEnableBinlogArchive() 获取<p>是否开启日志备份归档策略，off-关闭，on-打开，默认为off</p>
 * @method void setEnableBinlogArchive(string $EnableBinlogArchive) 设置<p>是否开启日志备份归档策略，off-关闭，on-打开，默认为off</p>
 * @method integer getBinlogArchiveDays() 获取<p>日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数</p>
 * @method void setBinlogArchiveDays(integer $BinlogArchiveDays) 设置<p>日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数</p>
 * @method string getEnableBackupStandby() 获取<p>是否开启数据备份标准存储策略，off-关闭，on-打开，默认为off</p>
 * @method void setEnableBackupStandby(string $EnableBackupStandby) 设置<p>是否开启数据备份标准存储策略，off-关闭，on-打开，默认为off</p>
 * @method integer getBackupStandbyDays() 获取<p>数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
 * @method void setBackupStandbyDays(integer $BackupStandbyDays) 设置<p>数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
 * @method string getEnableBinlogStandby() 获取<p>是否开启日志备份标准存储策略，off-关闭，on-打开，默认为off</p>
 * @method void setEnableBinlogStandby(string $EnableBinlogStandby) 设置<p>是否开启日志备份标准存储策略，off-关闭，on-打开，默认为off</p>
 * @method integer getBinlogStandbyDays() 获取<p>日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
 * @method void setBinlogStandbyDays(integer $BinlogStandbyDays) 设置<p>日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer <p>自动备份开始的最早时间点，单位为时刻。例如，2 - 凌晨 2:00。（该字段已废弃，建议使用 BackupTimeWindow 字段）</p>
     * @deprecated
     */
    public $StartTimeMin;

    /**
     * @var integer <p>自动备份开始的最晚时间点，单位为时刻。例如，6 - 凌晨 6:00。（该字段已废弃，建议使用 BackupTimeWindow 字段）</p>
     * @deprecated
     */
    public $StartTimeMax;

    /**
     * @var integer <p>备份文件保留时间，单位为天。</p>
     */
    public $BackupExpireDays;

    /**
     * @var string <p>备份方式，可能的值为：physical - 物理备份，logical - 逻辑备份。</p>
     */
    public $BackupMethod;

    /**
     * @var integer <p>Binlog 文件保留时间，单位为天。</p>
     */
    public $BinlogExpireDays;

    /**
     * @var CommonTimeWindow <p>实例自动备份的时间窗。</p>
     */
    public $BackupTimeWindow;

    /**
     * @var string <p>定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off</p>
     */
    public $EnableBackupPeriodSave;

    /**
     * @var integer <p>定期保留最长天数，最小值：90，最大值：3650，默认值：1080</p>
     */
    public $BackupPeriodSaveDays;

    /**
     * @var string <p>定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly</p>
     */
    public $BackupPeriodSaveInterval;

    /**
     * @var integer <p>定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1</p>
     */
    public $BackupPeriodSaveCount;

    /**
     * @var string <p>定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss</p>
     */
    public $StartBackupPeriodSaveDate;

    /**
     * @var string <p>是否开启数据备份归档策略，off-关闭，on-打开，默认为off</p>
     */
    public $EnableBackupArchive;

    /**
     * @var integer <p>数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数</p>
     */
    public $BackupArchiveDays;

    /**
     * @var string <p>是否开启日志备份归档策略，off-关闭，on-打开，默认为off</p>
     */
    public $EnableBinlogArchive;

    /**
     * @var integer <p>日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数</p>
     */
    public $BinlogArchiveDays;

    /**
     * @var string <p>是否开启数据备份标准存储策略，off-关闭，on-打开，默认为off</p>
     */
    public $EnableBackupStandby;

    /**
     * @var integer <p>数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
     */
    public $BackupStandbyDays;

    /**
     * @var string <p>是否开启日志备份标准存储策略，off-关闭，on-打开，默认为off</p>
     */
    public $EnableBinlogStandby;

    /**
     * @var integer <p>日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
     */
    public $BinlogStandbyDays;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $StartTimeMin <p>自动备份开始的最早时间点，单位为时刻。例如，2 - 凌晨 2:00。（该字段已废弃，建议使用 BackupTimeWindow 字段）</p>
     * @param integer $StartTimeMax <p>自动备份开始的最晚时间点，单位为时刻。例如，6 - 凌晨 6:00。（该字段已废弃，建议使用 BackupTimeWindow 字段）</p>
     * @param integer $BackupExpireDays <p>备份文件保留时间，单位为天。</p>
     * @param string $BackupMethod <p>备份方式，可能的值为：physical - 物理备份，logical - 逻辑备份。</p>
     * @param integer $BinlogExpireDays <p>Binlog 文件保留时间，单位为天。</p>
     * @param CommonTimeWindow $BackupTimeWindow <p>实例自动备份的时间窗。</p>
     * @param string $EnableBackupPeriodSave <p>定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off</p>
     * @param integer $BackupPeriodSaveDays <p>定期保留最长天数，最小值：90，最大值：3650，默认值：1080</p>
     * @param string $BackupPeriodSaveInterval <p>定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly</p>
     * @param integer $BackupPeriodSaveCount <p>定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1</p>
     * @param string $StartBackupPeriodSaveDate <p>定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss</p>
     * @param string $EnableBackupArchive <p>是否开启数据备份归档策略，off-关闭，on-打开，默认为off</p>
     * @param integer $BackupArchiveDays <p>数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数</p>
     * @param string $EnableBinlogArchive <p>是否开启日志备份归档策略，off-关闭，on-打开，默认为off</p>
     * @param integer $BinlogArchiveDays <p>日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数</p>
     * @param string $EnableBackupStandby <p>是否开启数据备份标准存储策略，off-关闭，on-打开，默认为off</p>
     * @param integer $BackupStandbyDays <p>数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
     * @param string $EnableBinlogStandby <p>是否开启日志备份标准存储策略，off-关闭，on-打开，默认为off</p>
     * @param integer $BinlogStandbyDays <p>日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("StartTimeMin",$param) and $param["StartTimeMin"] !== null) {
            $this->StartTimeMin = $param["StartTimeMin"];
        }

        if (array_key_exists("StartTimeMax",$param) and $param["StartTimeMax"] !== null) {
            $this->StartTimeMax = $param["StartTimeMax"];
        }

        if (array_key_exists("BackupExpireDays",$param) and $param["BackupExpireDays"] !== null) {
            $this->BackupExpireDays = $param["BackupExpireDays"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BinlogExpireDays",$param) and $param["BinlogExpireDays"] !== null) {
            $this->BinlogExpireDays = $param["BinlogExpireDays"];
        }

        if (array_key_exists("BackupTimeWindow",$param) and $param["BackupTimeWindow"] !== null) {
            $this->BackupTimeWindow = new CommonTimeWindow();
            $this->BackupTimeWindow->deserialize($param["BackupTimeWindow"]);
        }

        if (array_key_exists("EnableBackupPeriodSave",$param) and $param["EnableBackupPeriodSave"] !== null) {
            $this->EnableBackupPeriodSave = $param["EnableBackupPeriodSave"];
        }

        if (array_key_exists("BackupPeriodSaveDays",$param) and $param["BackupPeriodSaveDays"] !== null) {
            $this->BackupPeriodSaveDays = $param["BackupPeriodSaveDays"];
        }

        if (array_key_exists("BackupPeriodSaveInterval",$param) and $param["BackupPeriodSaveInterval"] !== null) {
            $this->BackupPeriodSaveInterval = $param["BackupPeriodSaveInterval"];
        }

        if (array_key_exists("BackupPeriodSaveCount",$param) and $param["BackupPeriodSaveCount"] !== null) {
            $this->BackupPeriodSaveCount = $param["BackupPeriodSaveCount"];
        }

        if (array_key_exists("StartBackupPeriodSaveDate",$param) and $param["StartBackupPeriodSaveDate"] !== null) {
            $this->StartBackupPeriodSaveDate = $param["StartBackupPeriodSaveDate"];
        }

        if (array_key_exists("EnableBackupArchive",$param) and $param["EnableBackupArchive"] !== null) {
            $this->EnableBackupArchive = $param["EnableBackupArchive"];
        }

        if (array_key_exists("BackupArchiveDays",$param) and $param["BackupArchiveDays"] !== null) {
            $this->BackupArchiveDays = $param["BackupArchiveDays"];
        }

        if (array_key_exists("EnableBinlogArchive",$param) and $param["EnableBinlogArchive"] !== null) {
            $this->EnableBinlogArchive = $param["EnableBinlogArchive"];
        }

        if (array_key_exists("BinlogArchiveDays",$param) and $param["BinlogArchiveDays"] !== null) {
            $this->BinlogArchiveDays = $param["BinlogArchiveDays"];
        }

        if (array_key_exists("EnableBackupStandby",$param) and $param["EnableBackupStandby"] !== null) {
            $this->EnableBackupStandby = $param["EnableBackupStandby"];
        }

        if (array_key_exists("BackupStandbyDays",$param) and $param["BackupStandbyDays"] !== null) {
            $this->BackupStandbyDays = $param["BackupStandbyDays"];
        }

        if (array_key_exists("EnableBinlogStandby",$param) and $param["EnableBinlogStandby"] !== null) {
            $this->EnableBinlogStandby = $param["EnableBinlogStandby"];
        }

        if (array_key_exists("BinlogStandbyDays",$param) and $param["BinlogStandbyDays"] !== null) {
            $this->BinlogStandbyDays = $param["BinlogStandbyDays"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

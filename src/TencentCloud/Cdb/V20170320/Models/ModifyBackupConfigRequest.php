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
 * ModifyBackupConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method integer getExpireDays() 获取备份文件的保留时间，单位为天。最小值为7天，最大值为1830天。
 * @method void setExpireDays(integer $ExpireDays) 设置备份文件的保留时间，单位为天。最小值为7天，最大值为1830天。
 * @method string getStartTime() 获取(将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
 * @method void setStartTime(string $StartTime) 设置(将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
 * @method string getBackupMethod() 获取自动备份方式，仅支持：physical - 物理冷备
 * @method void setBackupMethod(string $BackupMethod) 设置自动备份方式，仅支持：physical - 物理冷备
 * @method integer getBinlogExpireDays() 获取binlog的保留时间，单位为天。最小值为7天，最大值为1830天。该值的设置不能大于备份文件的保留时间。
 * @method void setBinlogExpireDays(integer $BinlogExpireDays) 设置binlog的保留时间，单位为天。最小值为7天，最大值为1830天。该值的设置不能大于备份文件的保留时间。
 * @method CommonTimeWindow getBackupTimeWindow() 获取备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）
 * @method void setBackupTimeWindow(CommonTimeWindow $BackupTimeWindow) 设置备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）
 * @method string getEnableBackupPeriodSave() 获取定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off。首次开启定期保留策略时，BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount，StartBackupPeriodSaveDate参数为必填项，否则定期保留策略不会生效
 * @method void setEnableBackupPeriodSave(string $EnableBackupPeriodSave) 设置定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off。首次开启定期保留策略时，BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount，StartBackupPeriodSaveDate参数为必填项，否则定期保留策略不会生效
 * @method string getEnableBackupPeriodLongTermSave() 获取长期保留开关,该字段功能暂未上线，可忽略。off - 不开启长期保留策略，on - 开启长期保留策略，默认为off，如果开启，则BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount参数无效
 * @method void setEnableBackupPeriodLongTermSave(string $EnableBackupPeriodLongTermSave) 设置长期保留开关,该字段功能暂未上线，可忽略。off - 不开启长期保留策略，on - 开启长期保留策略，默认为off，如果开启，则BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount参数无效
 * @method integer getBackupPeriodSaveDays() 获取定期保留最长天数，最小值：90，最大值：3650，默认值：1080
 * @method void setBackupPeriodSaveDays(integer $BackupPeriodSaveDays) 设置定期保留最长天数，最小值：90，最大值：3650，默认值：1080
 * @method string getBackupPeriodSaveInterval() 获取定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly
 * @method void setBackupPeriodSaveInterval(string $BackupPeriodSaveInterval) 设置定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly
 * @method integer getBackupPeriodSaveCount() 获取定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1
 * @method void setBackupPeriodSaveCount(integer $BackupPeriodSaveCount) 设置定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1
 * @method string getStartBackupPeriodSaveDate() 获取定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss
 * @method void setStartBackupPeriodSaveDate(string $StartBackupPeriodSaveDate) 设置定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss
 * @method string getEnableBackupArchive() 获取是否开启数据备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
 * @method void setEnableBackupArchive(string $EnableBackupArchive) 设置是否开启数据备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
 * @method integer getBackupArchiveDays() 获取数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数
 * @method void setBackupArchiveDays(integer $BackupArchiveDays) 设置数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数
 * @method integer getBinlogArchiveDays() 获取日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数
 * @method void setBinlogArchiveDays(integer $BinlogArchiveDays) 设置日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数
 * @method string getEnableBinlogArchive() 获取是否开启日志备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
 * @method void setEnableBinlogArchive(string $EnableBinlogArchive) 设置是否开启日志备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
 * @method string getEnableBackupStandby() 获取是否开启数据备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
 * @method void setEnableBackupStandby(string $EnableBackupStandby) 设置是否开启数据备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
 * @method integer getBackupStandbyDays() 获取数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数
 * @method void setBackupStandbyDays(integer $BackupStandbyDays) 设置数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数
 * @method string getEnableBinlogStandby() 获取是否开启日志备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
 * @method void setEnableBinlogStandby(string $EnableBinlogStandby) 设置是否开启日志备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
 * @method integer getBinlogStandbyDays() 获取日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数
 * @method void setBinlogStandbyDays(integer $BinlogStandbyDays) 设置日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数
 */
class ModifyBackupConfigRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceId;

    /**
     * @var integer 备份文件的保留时间，单位为天。最小值为7天，最大值为1830天。
     */
    public $ExpireDays;

    /**
     * @var string (将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
     */
    public $StartTime;

    /**
     * @var string 自动备份方式，仅支持：physical - 物理冷备
     */
    public $BackupMethod;

    /**
     * @var integer binlog的保留时间，单位为天。最小值为7天，最大值为1830天。该值的设置不能大于备份文件的保留时间。
     */
    public $BinlogExpireDays;

    /**
     * @var CommonTimeWindow 备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）
     */
    public $BackupTimeWindow;

    /**
     * @var string 定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off。首次开启定期保留策略时，BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount，StartBackupPeriodSaveDate参数为必填项，否则定期保留策略不会生效
     */
    public $EnableBackupPeriodSave;

    /**
     * @var string 长期保留开关,该字段功能暂未上线，可忽略。off - 不开启长期保留策略，on - 开启长期保留策略，默认为off，如果开启，则BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount参数无效
     */
    public $EnableBackupPeriodLongTermSave;

    /**
     * @var integer 定期保留最长天数，最小值：90，最大值：3650，默认值：1080
     */
    public $BackupPeriodSaveDays;

    /**
     * @var string 定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly
     */
    public $BackupPeriodSaveInterval;

    /**
     * @var integer 定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1
     */
    public $BackupPeriodSaveCount;

    /**
     * @var string 定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss
     */
    public $StartBackupPeriodSaveDate;

    /**
     * @var string 是否开启数据备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
     */
    public $EnableBackupArchive;

    /**
     * @var integer 数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数
     */
    public $BackupArchiveDays;

    /**
     * @var integer 日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数
     */
    public $BinlogArchiveDays;

    /**
     * @var string 是否开启日志备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
     */
    public $EnableBinlogArchive;

    /**
     * @var string 是否开启数据备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
     */
    public $EnableBackupStandby;

    /**
     * @var integer 数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数
     */
    public $BackupStandbyDays;

    /**
     * @var string 是否开启日志备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
     */
    public $EnableBinlogStandby;

    /**
     * @var integer 日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数
     */
    public $BinlogStandbyDays;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     * @param integer $ExpireDays 备份文件的保留时间，单位为天。最小值为7天，最大值为1830天。
     * @param string $StartTime (将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
     * @param string $BackupMethod 自动备份方式，仅支持：physical - 物理冷备
     * @param integer $BinlogExpireDays binlog的保留时间，单位为天。最小值为7天，最大值为1830天。该值的设置不能大于备份文件的保留时间。
     * @param CommonTimeWindow $BackupTimeWindow 备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）
     * @param string $EnableBackupPeriodSave 定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off。首次开启定期保留策略时，BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount，StartBackupPeriodSaveDate参数为必填项，否则定期保留策略不会生效
     * @param string $EnableBackupPeriodLongTermSave 长期保留开关,该字段功能暂未上线，可忽略。off - 不开启长期保留策略，on - 开启长期保留策略，默认为off，如果开启，则BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount参数无效
     * @param integer $BackupPeriodSaveDays 定期保留最长天数，最小值：90，最大值：3650，默认值：1080
     * @param string $BackupPeriodSaveInterval 定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly
     * @param integer $BackupPeriodSaveCount 定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1
     * @param string $StartBackupPeriodSaveDate 定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss
     * @param string $EnableBackupArchive 是否开启数据备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
     * @param integer $BackupArchiveDays 数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数
     * @param integer $BinlogArchiveDays 日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数
     * @param string $EnableBinlogArchive 是否开启日志备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
     * @param string $EnableBackupStandby 是否开启数据备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
     * @param integer $BackupStandbyDays 数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数
     * @param string $EnableBinlogStandby 是否开启日志备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。
     * @param integer $BinlogStandbyDays 日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数
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

        if (array_key_exists("ExpireDays",$param) and $param["ExpireDays"] !== null) {
            $this->ExpireDays = $param["ExpireDays"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
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

        if (array_key_exists("EnableBackupPeriodLongTermSave",$param) and $param["EnableBackupPeriodLongTermSave"] !== null) {
            $this->EnableBackupPeriodLongTermSave = $param["EnableBackupPeriodLongTermSave"];
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

        if (array_key_exists("BinlogArchiveDays",$param) and $param["BinlogArchiveDays"] !== null) {
            $this->BinlogArchiveDays = $param["BinlogArchiveDays"];
        }

        if (array_key_exists("EnableBinlogArchive",$param) and $param["EnableBinlogArchive"] !== null) {
            $this->EnableBinlogArchive = $param["EnableBinlogArchive"];
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
    }
}

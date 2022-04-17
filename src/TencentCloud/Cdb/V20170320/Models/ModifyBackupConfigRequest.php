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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method integer getExpireDays() 获取备份文件的保留时间，单位为天。最小值为7天，最大值为732天。
 * @method void setExpireDays(integer $ExpireDays) 设置备份文件的保留时间，单位为天。最小值为7天，最大值为732天。
 * @method string getStartTime() 获取(将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
 * @method void setStartTime(string $StartTime) 设置(将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
 * @method string getBackupMethod() 获取自动备份方式，仅支持：physical - 物理冷备
 * @method void setBackupMethod(string $BackupMethod) 设置自动备份方式，仅支持：physical - 物理冷备
 * @method integer getBinlogExpireDays() 获取binlog的保留时间，单位为天。最小值为7天，最大值为732天。该值的设置不能大于备份文件的保留时间。
 * @method void setBinlogExpireDays(integer $BinlogExpireDays) 设置binlog的保留时间，单位为天。最小值为7天，最大值为732天。该值的设置不能大于备份文件的保留时间。
 * @method CommonTimeWindow getBackupTimeWindow() 获取备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）
 * @method void setBackupTimeWindow(CommonTimeWindow $BackupTimeWindow) 设置备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）
 * @method string getEnableBackupPeriodSave() 获取定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off
 * @method void setEnableBackupPeriodSave(string $EnableBackupPeriodSave) 设置定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off
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
 */
class ModifyBackupConfigRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceId;

    /**
     * @var integer 备份文件的保留时间，单位为天。最小值为7天，最大值为732天。
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
     * @var integer binlog的保留时间，单位为天。最小值为7天，最大值为732天。该值的设置不能大于备份文件的保留时间。
     */
    public $BinlogExpireDays;

    /**
     * @var CommonTimeWindow 备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）
     */
    public $BackupTimeWindow;

    /**
     * @var string 定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off
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
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     * @param integer $ExpireDays 备份文件的保留时间，单位为天。最小值为7天，最大值为732天。
     * @param string $StartTime (将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
     * @param string $BackupMethod 自动备份方式，仅支持：physical - 物理冷备
     * @param integer $BinlogExpireDays binlog的保留时间，单位为天。最小值为7天，最大值为732天。该值的设置不能大于备份文件的保留时间。
     * @param CommonTimeWindow $BackupTimeWindow 备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{"Monday": "", "Tuesday": "10:00-14:00", "Wednesday": "", "Thursday": "", "Friday": "", "Saturday": "", "Sunday": "10:00-14:00"}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）
     * @param string $EnableBackupPeriodSave 定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off
     * @param string $EnableBackupPeriodLongTermSave 长期保留开关,该字段功能暂未上线，可忽略。off - 不开启长期保留策略，on - 开启长期保留策略，默认为off，如果开启，则BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount参数无效
     * @param integer $BackupPeriodSaveDays 定期保留最长天数，最小值：90，最大值：3650，默认值：1080
     * @param string $BackupPeriodSaveInterval 定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly
     * @param integer $BackupPeriodSaveCount 定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1
     * @param string $StartBackupPeriodSaveDate 定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss
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
    }
}

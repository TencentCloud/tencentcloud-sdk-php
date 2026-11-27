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
 * @method string getInstanceId() 获取<p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method integer getExpireDays() 获取<p>数据备份文件的保留时间，单位为天。</p><ol><li>MySQL 双节点、三节点、云盘版数据备份文件可以保留7天 - 1830天。</li><li>MySQL 单节点（云盘）数据备份文件可以保留7天 - 30天。</li></ol>
 * @method void setExpireDays(integer $ExpireDays) 设置<p>数据备份文件的保留时间，单位为天。</p><ol><li>MySQL 双节点、三节点、云盘版数据备份文件可以保留7天 - 1830天。</li><li>MySQL 单节点（云盘）数据备份文件可以保留7天 - 30天。</li></ol>
 * @method string getStartTime() 获取<p>(将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。</p>
 * @method void setStartTime(string $StartTime) 设置<p>(将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。</p>
 * @method string getBackupMethod() 获取<p>自动备份方式，仅支持：physical - 物理冷备</p>
 * @method void setBackupMethod(string $BackupMethod) 设置<p>自动备份方式，仅支持：physical - 物理冷备</p>
 * @method integer getBinlogExpireDays() 获取<p>binlog 的保留时间，单位为天。</p><ol><li>MySQL 双节点、三节点、云盘版日志备份文件可以保留7天 - 3650天。</li><li>MySQL 单节点（云盘）日志备份文件可以保留7天 - 30天。</li></ol>
 * @method void setBinlogExpireDays(integer $BinlogExpireDays) 设置<p>binlog 的保留时间，单位为天。</p><ol><li>MySQL 双节点、三节点、云盘版日志备份文件可以保留7天 - 3650天。</li><li>MySQL 单节点（云盘）日志备份文件可以保留7天 - 30天。</li></ol>
 * @method CommonTimeWindow getBackupTimeWindow() 获取<p>备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{&quot;Monday&quot;: &quot;&quot;, &quot;Tuesday&quot;: &quot;10:00-14:00&quot;, &quot;Wednesday&quot;: &quot;&quot;, &quot;Thursday&quot;: &quot;&quot;, &quot;Friday&quot;: &quot;&quot;, &quot;Saturday&quot;: &quot;&quot;, &quot;Sunday&quot;: &quot;10:00-14:00&quot;}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）</p>
 * @method void setBackupTimeWindow(CommonTimeWindow $BackupTimeWindow) 设置<p>备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{&quot;Monday&quot;: &quot;&quot;, &quot;Tuesday&quot;: &quot;10:00-14:00&quot;, &quot;Wednesday&quot;: &quot;&quot;, &quot;Thursday&quot;: &quot;&quot;, &quot;Friday&quot;: &quot;&quot;, &quot;Saturday&quot;: &quot;&quot;, &quot;Sunday&quot;: &quot;10:00-14:00&quot;}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）</p>
 * @method string getEnableBackupPeriodSave() 获取<p>定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off。</p>
 * @method void setEnableBackupPeriodSave(string $EnableBackupPeriodSave) 设置<p>定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off。</p>
 * @method string getEnableBackupPeriodLongTermSave() 获取<p>长期保留开关,该字段功能暂未上线，可忽略。off - 不开启长期保留策略，on - 开启长期保留策略，默认为off，如果开启，则BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount参数无效</p>
 * @method void setEnableBackupPeriodLongTermSave(string $EnableBackupPeriodLongTermSave) 设置<p>长期保留开关,该字段功能暂未上线，可忽略。off - 不开启长期保留策略，on - 开启长期保留策略，默认为off，如果开启，则BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount参数无效</p>
 * @method integer getBackupPeriodSaveDays() 获取<p>定期保留最长天数，最小值：90，最大值：3650，默认值：1080</p>
 * @method void setBackupPeriodSaveDays(integer $BackupPeriodSaveDays) 设置<p>定期保留最长天数，最小值：90，最大值：3650，默认值：1080</p>
 * @method string getBackupPeriodSaveInterval() 获取<p>定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly</p>
 * @method void setBackupPeriodSaveInterval(string $BackupPeriodSaveInterval) 设置<p>定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly</p>
 * @method integer getBackupPeriodSaveCount() 获取<p>定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1</p>
 * @method void setBackupPeriodSaveCount(integer $BackupPeriodSaveCount) 设置<p>定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1</p>
 * @method string getStartBackupPeriodSaveDate() 获取<p>定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss</p>
 * @method void setStartBackupPeriodSaveDate(string $StartBackupPeriodSaveDate) 设置<p>定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss</p>
 * @method string getEnableBackupArchive() 获取<p>是否开启数据备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
 * @method void setEnableBackupArchive(string $EnableBackupArchive) 设置<p>是否开启数据备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
 * @method integer getBackupArchiveDays() 获取<p>数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数</p>
 * @method void setBackupArchiveDays(integer $BackupArchiveDays) 设置<p>数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数</p>
 * @method integer getBinlogArchiveDays() 获取<p>日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数</p>
 * @method void setBinlogArchiveDays(integer $BinlogArchiveDays) 设置<p>日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数</p>
 * @method string getEnableBinlogArchive() 获取<p>是否开启日志备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
 * @method void setEnableBinlogArchive(string $EnableBinlogArchive) 设置<p>是否开启日志备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
 * @method string getEnableBackupStandby() 获取<p>是否开启数据备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
 * @method void setEnableBackupStandby(string $EnableBackupStandby) 设置<p>是否开启数据备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
 * @method integer getBackupStandbyDays() 获取<p>数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
 * @method void setBackupStandbyDays(integer $BackupStandbyDays) 设置<p>数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
 * @method string getEnableBinlogStandby() 获取<p>是否开启日志备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
 * @method void setEnableBinlogStandby(string $EnableBinlogStandby) 设置<p>是否开启日志备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
 * @method integer getBinlogStandbyDays() 获取<p>日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
 * @method void setBinlogStandbyDays(integer $BinlogStandbyDays) 设置<p>日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
 */
class ModifyBackupConfigRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>数据备份文件的保留时间，单位为天。</p><ol><li>MySQL 双节点、三节点、云盘版数据备份文件可以保留7天 - 1830天。</li><li>MySQL 单节点（云盘）数据备份文件可以保留7天 - 30天。</li></ol>
     */
    public $ExpireDays;

    /**
     * @var string <p>(将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。</p>
     */
    public $StartTime;

    /**
     * @var string <p>自动备份方式，仅支持：physical - 物理冷备</p>
     */
    public $BackupMethod;

    /**
     * @var integer <p>binlog 的保留时间，单位为天。</p><ol><li>MySQL 双节点、三节点、云盘版日志备份文件可以保留7天 - 3650天。</li><li>MySQL 单节点（云盘）日志备份文件可以保留7天 - 30天。</li></ol>
     */
    public $BinlogExpireDays;

    /**
     * @var CommonTimeWindow <p>备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{&quot;Monday&quot;: &quot;&quot;, &quot;Tuesday&quot;: &quot;10:00-14:00&quot;, &quot;Wednesday&quot;: &quot;&quot;, &quot;Thursday&quot;: &quot;&quot;, &quot;Friday&quot;: &quot;&quot;, &quot;Saturday&quot;: &quot;&quot;, &quot;Sunday&quot;: &quot;10:00-14:00&quot;}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）</p>
     */
    public $BackupTimeWindow;

    /**
     * @var string <p>定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off。</p>
     */
    public $EnableBackupPeriodSave;

    /**
     * @var string <p>长期保留开关,该字段功能暂未上线，可忽略。off - 不开启长期保留策略，on - 开启长期保留策略，默认为off，如果开启，则BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount参数无效</p>
     */
    public $EnableBackupPeriodLongTermSave;

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
     * @var string <p>是否开启数据备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
     */
    public $EnableBackupArchive;

    /**
     * @var integer <p>数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数</p>
     */
    public $BackupArchiveDays;

    /**
     * @var integer <p>日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数</p>
     */
    public $BinlogArchiveDays;

    /**
     * @var string <p>是否开启日志备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
     */
    public $EnableBinlogArchive;

    /**
     * @var string <p>是否开启数据备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
     */
    public $EnableBackupStandby;

    /**
     * @var integer <p>数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
     */
    public $BackupStandbyDays;

    /**
     * @var string <p>是否开启日志备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
     */
    public $EnableBinlogStandby;

    /**
     * @var integer <p>日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
     */
    public $BinlogStandbyDays;

    /**
     * @param string $InstanceId <p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
     * @param integer $ExpireDays <p>数据备份文件的保留时间，单位为天。</p><ol><li>MySQL 双节点、三节点、云盘版数据备份文件可以保留7天 - 1830天。</li><li>MySQL 单节点（云盘）数据备份文件可以保留7天 - 30天。</li></ol>
     * @param string $StartTime <p>(将废弃，建议使用 BackupTimeWindow 参数) 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 00:00-12:00，02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。</p>
     * @param string $BackupMethod <p>自动备份方式，仅支持：physical - 物理冷备</p>
     * @param integer $BinlogExpireDays <p>binlog 的保留时间，单位为天。</p><ol><li>MySQL 双节点、三节点、云盘版日志备份文件可以保留7天 - 3650天。</li><li>MySQL 单节点（云盘）日志备份文件可以保留7天 - 30天。</li></ol>
     * @param CommonTimeWindow $BackupTimeWindow <p>备份时间窗，比如要设置每周二和周日 10:00-14:00之间备份，该参数如下：{&quot;Monday&quot;: &quot;&quot;, &quot;Tuesday&quot;: &quot;10:00-14:00&quot;, &quot;Wednesday&quot;: &quot;&quot;, &quot;Thursday&quot;: &quot;&quot;, &quot;Friday&quot;: &quot;&quot;, &quot;Saturday&quot;: &quot;&quot;, &quot;Sunday&quot;: &quot;10:00-14:00&quot;}    （注：可以设置一周的某几天备份，但是每天的备份时间需要设置为相同的时间段。 如果设置了该字段，将忽略StartTime字段的设置）</p>
     * @param string $EnableBackupPeriodSave <p>定期保留开关，off - 不开启定期保留策略，on - 开启定期保留策略，默认为off。</p>
     * @param string $EnableBackupPeriodLongTermSave <p>长期保留开关,该字段功能暂未上线，可忽略。off - 不开启长期保留策略，on - 开启长期保留策略，默认为off，如果开启，则BackupPeriodSaveDays，BackupPeriodSaveInterval，BackupPeriodSaveCount参数无效</p>
     * @param integer $BackupPeriodSaveDays <p>定期保留最长天数，最小值：90，最大值：3650，默认值：1080</p>
     * @param string $BackupPeriodSaveInterval <p>定期保留策略周期，可取值：weekly - 周，monthly - 月， quarterly - 季度，yearly - 年，默认为monthly</p>
     * @param integer $BackupPeriodSaveCount <p>定期保留的备份数量，最小值为1，最大值不超过定期保留策略周期内常规备份个数，默认值为1</p>
     * @param string $StartBackupPeriodSaveDate <p>定期保留策略周期起始日期，格式：YYYY-MM-dd HH:mm:ss</p>
     * @param string $EnableBackupArchive <p>是否开启数据备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
     * @param integer $BackupArchiveDays <p>数据备份归档起始天数，数据备份达到归档起始天数时进行归档，最小为180天，不得大于数据备份保留天数</p>
     * @param integer $BinlogArchiveDays <p>日志备份归档起始天数，日志备份达到归档起始天数时进行归档，最小为180天，不得大于日志备份保留天数</p>
     * @param string $EnableBinlogArchive <p>是否开启日志备份归档策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
     * @param string $EnableBackupStandby <p>是否开启数据备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
     * @param integer $BackupStandbyDays <p>数据备份标准存储起始天数，数据备份达到标准存储起始天数时进行转换，最小为30天，不得大于数据备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
     * @param string $EnableBinlogStandby <p>是否开启日志备份标准存储策略，off-关闭，on-打开，如果不指定该入参， 则保持不变。</p>
     * @param integer $BinlogStandbyDays <p>日志备份标准存储起始天数，日志备份达到标准存储起始天数时进行转换，最小为30天，不得大于日志备份保留天数。如果开启备份归档，不得大于等于备份归档天数</p>
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

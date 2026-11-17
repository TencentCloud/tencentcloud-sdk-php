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
 * DescribeBackupPlanDetail返回参数结构体
 *
 * @method string getRegion() 获取<p>地域。</p>
 * @method void setRegion(string $Region) 设置<p>地域。</p>
 * @method string getBackupPlanId() 获取<p>备份计划 ID。</p>
 * @method void setBackupPlanId(string $BackupPlanId) 设置<p>备份计划 ID。</p>
 * @method string getBackupPlanName() 获取<p>备份计划名称。</p>
 * @method void setBackupPlanName(string $BackupPlanName) 设置<p>备份计划名称。</p>
 * @method string getStatus() 获取<p>备份计划状态。取值：</p><ul><li>creating：创建中</li><li>notStarted：未启动</li><li>notConfigured：未配置</li><li>checkNotPass：校验未通过</li><li>checkPass：校验通过</li><li>checking：校验中</li><li>readyRun：待运行</li><li>running：运行中</li><li>fullBacking：全量备份中</li><li>paused：已暂停</li><li>isolating：隔离中</li><li>isolated：已隔离</li><li>offlining：下线中</li><li>offlined：已下线</li><li>completed：已完成</li></ul>
 * @method void setStatus(string $Status) 设置<p>备份计划状态。取值：</p><ul><li>creating：创建中</li><li>notStarted：未启动</li><li>notConfigured：未配置</li><li>checkNotPass：校验未通过</li><li>checkPass：校验通过</li><li>checking：校验中</li><li>readyRun：待运行</li><li>running：运行中</li><li>fullBacking：全量备份中</li><li>paused：已暂停</li><li>isolating：隔离中</li><li>isolated：已隔离</li><li>offlining：下线中</li><li>offlined：已下线</li><li>completed：已完成</li></ul>
 * @method array getSourceEndPoint() 获取<p>源库连接信息列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceEndPoint(array $SourceEndPoint) 设置<p>源库连接信息列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BackupObject getBackupObject() 获取<p>备份对象信息。</p>
 * @method void setBackupObject(BackupObject $BackupObject) 设置<p>备份对象信息。</p>
 * @method BackupStrategyItem getBackupStrategy() 获取<p>备份策略。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupStrategy(BackupStrategyItem $BackupStrategy) 设置<p>备份策略。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BackupProgress getProgress() 获取<p>备份进度信息。</p>
 * @method void setProgress(BackupProgress $Progress) 设置<p>备份进度信息。</p>
 * @method ErrorInfo getErrorInfo() 获取<p>错误异常信息。</p>
 * @method void setErrorInfo(ErrorInfo $ErrorInfo) 设置<p>错误异常信息。</p>
 * @method string getCreateTime() 获取<p>创建时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00。</p>
 * @method string getExpireTime() 获取<p>到期时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，后付费计划无到期时间时为空字符串。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>到期时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，后付费计划无到期时间时为空字符串。</p>
 * @method string getOfflineTime() 获取<p>下线时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未下线时为空字符串。</p>
 * @method void setOfflineTime(string $OfflineTime) 设置<p>下线时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未下线时为空字符串。</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标识。取值：</p><ul><li>0：不自动续费</li><li>1：自动续费</li></ul>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标识。取值：</p><ul><li>0：不自动续费</li><li>1：自动续费</li></ul>
 * @method array getSourceInfo() 获取<p>主节点连接信息。云数据库实例为实例 ID，云服务器自建为实例 ID:端口，其余为 ip:port。</p>
 * @method void setSourceInfo(array $SourceInfo) 设置<p>主节点连接信息。云数据库实例为实例 ID，云服务器自建为实例 ID:端口，其余为 ip:port。</p>
 * @method array getSetSourceInfo() 获取<p>从节点连接信息，格式同 SourceInfo。</p>
 * @method void setSetSourceInfo(array $SetSourceInfo) 设置<p>从节点连接信息，格式同 SourceInfo。</p>
 * @method array getTags() 获取<p>标签信息列表。未绑定标签时返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签信息列表。未绑定标签时返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastBackupJobTime() 获取<p>上次备份作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过备份作业时为空字符串。</p>
 * @method void setLastBackupJobTime(string $LastBackupJobTime) 设置<p>上次备份作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过备份作业时为空字符串。</p>
 * @method string getLastFullBackupJobStatus() 获取<p>上次全量备份作业状态。</p>
 * @method void setLastFullBackupJobStatus(string $LastFullBackupJobStatus) 设置<p>上次全量备份作业状态。</p>
 * @method string getLastIncBackupJobStatus() 获取<p>上次增量备份作业状态。</p>
 * @method void setLastIncBackupJobStatus(string $LastIncBackupJobStatus) 设置<p>上次增量备份作业状态。</p>
 * @method string getNextBackupJobTime() 获取<p>下次备份作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未确定时为空字符串。</p>
 * @method void setNextBackupJobTime(string $NextBackupJobTime) 设置<p>下次备份作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未确定时为空字符串。</p>
 * @method string getLastRestoreJobTime() 获取<p>上次恢复作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过恢复作业时为空字符串。</p>
 * @method void setLastRestoreJobTime(string $LastRestoreJobTime) 设置<p>上次恢复作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过恢复作业时为空字符串。</p>
 * @method string getLastRestoreJobStatus() 获取<p>上次恢复作业状态。</p>
 * @method void setLastRestoreJobStatus(string $LastRestoreJobStatus) 设置<p>上次恢复作业状态。</p>
 * @method BackupPlanPayInfo getPayInfo() 获取<p>付费信息。</p>
 * @method void setPayInfo(BackupPlanPayInfo $PayInfo) 设置<p>付费信息。</p>
 * @method integer getUpperParallel() 获取<p>全量备份并行数上限。</p>
 * @method void setUpperParallel(integer $UpperParallel) 设置<p>全量备份并行数上限。</p>
 * @method integer getUpperBandwidth() 获取<p>带宽上限，单位：MB/s。</p>
 * @method void setUpperBandwidth(integer $UpperBandwidth) 设置<p>带宽上限，单位：MB/s。</p>
 * @method array getAllowedActions() 获取<p>当前状态下允许的操作。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowedActions(array $AllowedActions) 设置<p>当前状态下允许的操作。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RestoreRange getRestoreRange() 获取<p>可恢复时间范围。</p>
 * @method void setRestoreRange(RestoreRange $RestoreRange) 设置<p>可恢复时间范围。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupPlanDetailResponse extends AbstractModel
{
    /**
     * @var string <p>地域。</p>
     */
    public $Region;

    /**
     * @var string <p>备份计划 ID。</p>
     */
    public $BackupPlanId;

    /**
     * @var string <p>备份计划名称。</p>
     */
    public $BackupPlanName;

    /**
     * @var string <p>备份计划状态。取值：</p><ul><li>creating：创建中</li><li>notStarted：未启动</li><li>notConfigured：未配置</li><li>checkNotPass：校验未通过</li><li>checkPass：校验通过</li><li>checking：校验中</li><li>readyRun：待运行</li><li>running：运行中</li><li>fullBacking：全量备份中</li><li>paused：已暂停</li><li>isolating：隔离中</li><li>isolated：已隔离</li><li>offlining：下线中</li><li>offlined：已下线</li><li>completed：已完成</li></ul>
     */
    public $Status;

    /**
     * @var array <p>源库连接信息列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceEndPoint;

    /**
     * @var BackupObject <p>备份对象信息。</p>
     */
    public $BackupObject;

    /**
     * @var BackupStrategyItem <p>备份策略。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupStrategy;

    /**
     * @var BackupProgress <p>备份进度信息。</p>
     */
    public $Progress;

    /**
     * @var ErrorInfo <p>错误异常信息。</p>
     */
    public $ErrorInfo;

    /**
     * @var string <p>创建时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>到期时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，后付费计划无到期时间时为空字符串。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>下线时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未下线时为空字符串。</p>
     */
    public $OfflineTime;

    /**
     * @var integer <p>自动续费标识。取值：</p><ul><li>0：不自动续费</li><li>1：自动续费</li></ul>
     */
    public $AutoRenewFlag;

    /**
     * @var array <p>主节点连接信息。云数据库实例为实例 ID，云服务器自建为实例 ID:端口，其余为 ip:port。</p>
     */
    public $SourceInfo;

    /**
     * @var array <p>从节点连接信息，格式同 SourceInfo。</p>
     */
    public $SetSourceInfo;

    /**
     * @var array <p>标签信息列表。未绑定标签时返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>上次备份作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过备份作业时为空字符串。</p>
     */
    public $LastBackupJobTime;

    /**
     * @var string <p>上次全量备份作业状态。</p>
     */
    public $LastFullBackupJobStatus;

    /**
     * @var string <p>上次增量备份作业状态。</p>
     */
    public $LastIncBackupJobStatus;

    /**
     * @var string <p>下次备份作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未确定时为空字符串。</p>
     */
    public $NextBackupJobTime;

    /**
     * @var string <p>上次恢复作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过恢复作业时为空字符串。</p>
     */
    public $LastRestoreJobTime;

    /**
     * @var string <p>上次恢复作业状态。</p>
     */
    public $LastRestoreJobStatus;

    /**
     * @var BackupPlanPayInfo <p>付费信息。</p>
     */
    public $PayInfo;

    /**
     * @var integer <p>全量备份并行数上限。</p>
     */
    public $UpperParallel;

    /**
     * @var integer <p>带宽上限，单位：MB/s。</p>
     */
    public $UpperBandwidth;

    /**
     * @var array <p>当前状态下允许的操作。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowedActions;

    /**
     * @var RestoreRange <p>可恢复时间范围。</p>
     */
    public $RestoreRange;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Region <p>地域。</p>
     * @param string $BackupPlanId <p>备份计划 ID。</p>
     * @param string $BackupPlanName <p>备份计划名称。</p>
     * @param string $Status <p>备份计划状态。取值：</p><ul><li>creating：创建中</li><li>notStarted：未启动</li><li>notConfigured：未配置</li><li>checkNotPass：校验未通过</li><li>checkPass：校验通过</li><li>checking：校验中</li><li>readyRun：待运行</li><li>running：运行中</li><li>fullBacking：全量备份中</li><li>paused：已暂停</li><li>isolating：隔离中</li><li>isolated：已隔离</li><li>offlining：下线中</li><li>offlined：已下线</li><li>completed：已完成</li></ul>
     * @param array $SourceEndPoint <p>源库连接信息列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BackupObject $BackupObject <p>备份对象信息。</p>
     * @param BackupStrategyItem $BackupStrategy <p>备份策略。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BackupProgress $Progress <p>备份进度信息。</p>
     * @param ErrorInfo $ErrorInfo <p>错误异常信息。</p>
     * @param string $CreateTime <p>创建时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00。</p>
     * @param string $ExpireTime <p>到期时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，后付费计划无到期时间时为空字符串。</p>
     * @param string $OfflineTime <p>下线时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未下线时为空字符串。</p>
     * @param integer $AutoRenewFlag <p>自动续费标识。取值：</p><ul><li>0：不自动续费</li><li>1：自动续费</li></ul>
     * @param array $SourceInfo <p>主节点连接信息。云数据库实例为实例 ID，云服务器自建为实例 ID:端口，其余为 ip:port。</p>
     * @param array $SetSourceInfo <p>从节点连接信息，格式同 SourceInfo。</p>
     * @param array $Tags <p>标签信息列表。未绑定标签时返回 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastBackupJobTime <p>上次备份作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过备份作业时为空字符串。</p>
     * @param string $LastFullBackupJobStatus <p>上次全量备份作业状态。</p>
     * @param string $LastIncBackupJobStatus <p>上次增量备份作业状态。</p>
     * @param string $NextBackupJobTime <p>下次备份作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未确定时为空字符串。</p>
     * @param string $LastRestoreJobTime <p>上次恢复作业时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过恢复作业时为空字符串。</p>
     * @param string $LastRestoreJobStatus <p>上次恢复作业状态。</p>
     * @param BackupPlanPayInfo $PayInfo <p>付费信息。</p>
     * @param integer $UpperParallel <p>全量备份并行数上限。</p>
     * @param integer $UpperBandwidth <p>带宽上限，单位：MB/s。</p>
     * @param array $AllowedActions <p>当前状态下允许的操作。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RestoreRange $RestoreRange <p>可恢复时间范围。</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BackupPlanId",$param) and $param["BackupPlanId"] !== null) {
            $this->BackupPlanId = $param["BackupPlanId"];
        }

        if (array_key_exists("BackupPlanName",$param) and $param["BackupPlanName"] !== null) {
            $this->BackupPlanName = $param["BackupPlanName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SourceEndPoint",$param) and $param["SourceEndPoint"] !== null) {
            $this->SourceEndPoint = [];
            foreach ($param["SourceEndPoint"] as $key => $value){
                $obj = new Endpoint();
                $obj->deserialize($value);
                array_push($this->SourceEndPoint, $obj);
            }
        }

        if (array_key_exists("BackupObject",$param) and $param["BackupObject"] !== null) {
            $this->BackupObject = new BackupObject();
            $this->BackupObject->deserialize($param["BackupObject"]);
        }

        if (array_key_exists("BackupStrategy",$param) and $param["BackupStrategy"] !== null) {
            $this->BackupStrategy = new BackupStrategyItem();
            $this->BackupStrategy->deserialize($param["BackupStrategy"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = new BackupProgress();
            $this->Progress->deserialize($param["Progress"]);
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = new ErrorInfo();
            $this->ErrorInfo->deserialize($param["ErrorInfo"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = $param["SourceInfo"];
        }

        if (array_key_exists("SetSourceInfo",$param) and $param["SetSourceInfo"] !== null) {
            $this->SetSourceInfo = $param["SetSourceInfo"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LastBackupJobTime",$param) and $param["LastBackupJobTime"] !== null) {
            $this->LastBackupJobTime = $param["LastBackupJobTime"];
        }

        if (array_key_exists("LastFullBackupJobStatus",$param) and $param["LastFullBackupJobStatus"] !== null) {
            $this->LastFullBackupJobStatus = $param["LastFullBackupJobStatus"];
        }

        if (array_key_exists("LastIncBackupJobStatus",$param) and $param["LastIncBackupJobStatus"] !== null) {
            $this->LastIncBackupJobStatus = $param["LastIncBackupJobStatus"];
        }

        if (array_key_exists("NextBackupJobTime",$param) and $param["NextBackupJobTime"] !== null) {
            $this->NextBackupJobTime = $param["NextBackupJobTime"];
        }

        if (array_key_exists("LastRestoreJobTime",$param) and $param["LastRestoreJobTime"] !== null) {
            $this->LastRestoreJobTime = $param["LastRestoreJobTime"];
        }

        if (array_key_exists("LastRestoreJobStatus",$param) and $param["LastRestoreJobStatus"] !== null) {
            $this->LastRestoreJobStatus = $param["LastRestoreJobStatus"];
        }

        if (array_key_exists("PayInfo",$param) and $param["PayInfo"] !== null) {
            $this->PayInfo = new BackupPlanPayInfo();
            $this->PayInfo->deserialize($param["PayInfo"]);
        }

        if (array_key_exists("UpperParallel",$param) and $param["UpperParallel"] !== null) {
            $this->UpperParallel = $param["UpperParallel"];
        }

        if (array_key_exists("UpperBandwidth",$param) and $param["UpperBandwidth"] !== null) {
            $this->UpperBandwidth = $param["UpperBandwidth"];
        }

        if (array_key_exists("AllowedActions",$param) and $param["AllowedActions"] !== null) {
            $this->AllowedActions = $param["AllowedActions"];
        }

        if (array_key_exists("RestoreRange",$param) and $param["RestoreRange"] !== null) {
            $this->RestoreRange = new RestoreRange();
            $this->RestoreRange->deserialize($param["RestoreRange"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快照策略信息
 *
 * @method string getAutoSnapshotPolicyId() 获取快照策略ID
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置快照策略ID
 * @method string getPolicyName() 获取快照策略ID
 * @method void setPolicyName(string $PolicyName) 设置快照策略ID
 * @method string getCreationTime() 获取快照策略创建时间
 * @method void setCreationTime(string $CreationTime) 设置快照策略创建时间
 * @method integer getFileSystemNums() 获取关联的文件系统个数
 * @method void setFileSystemNums(integer $FileSystemNums) 设置关联的文件系统个数
 * @method string getDayOfWeek() 获取快照定期备份在一星期哪一天，该参数与DayOfMonth,IntervalDays互斥
 * @method void setDayOfWeek(string $DayOfWeek) 设置快照定期备份在一星期哪一天，该参数与DayOfMonth,IntervalDays互斥
 * @method string getHour() 获取快照定期备份在一天的哪一小时
 * @method void setHour(string $Hour) 设置快照定期备份在一天的哪一小时
 * @method integer getIsActivated() 获取是否激活定期快照功能
 * @method void setIsActivated(integer $IsActivated) 设置是否激活定期快照功能
 * @method string getNextActiveTime() 获取下一次触发快照时间
 * @method void setNextActiveTime(string $NextActiveTime) 设置下一次触发快照时间
 * @method string getStatus() 获取快照策略状态
 * @method void setStatus(string $Status) 设置快照策略状态
 * @method integer getAppId() 获取帐号ID
 * @method void setAppId(integer $AppId) 设置帐号ID
 * @method integer getAliveDays() 获取保留时间
 * @method void setAliveDays(integer $AliveDays) 设置保留时间
 * @method string getRegionName() 获取地域
 * @method void setRegionName(string $RegionName) 设置地域
 * @method array getFileSystems() 获取文件系统信息
 * @method void setFileSystems(array $FileSystems) 设置文件系统信息
 * @method string getDayOfMonth() 获取快照定期备份在一个月的某个时间；该参数与DayOfWeek,IntervalDays互斥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDayOfMonth(string $DayOfMonth) 设置快照定期备份在一个月的某个时间；该参数与DayOfWeek,IntervalDays互斥
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntervalDays() 获取快照定期间隔天数，1-365 天；该参数与DayOfMonth,DayOfWeek互斥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntervalDays(integer $IntervalDays) 设置快照定期间隔天数，1-365 天；该参数与DayOfMonth,DayOfWeek互斥
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoSnapshotPolicyInfo extends AbstractModel
{
    /**
     * @var string 快照策略ID
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string 快照策略ID
     */
    public $PolicyName;

    /**
     * @var string 快照策略创建时间
     */
    public $CreationTime;

    /**
     * @var integer 关联的文件系统个数
     */
    public $FileSystemNums;

    /**
     * @var string 快照定期备份在一星期哪一天，该参数与DayOfMonth,IntervalDays互斥
     */
    public $DayOfWeek;

    /**
     * @var string 快照定期备份在一天的哪一小时
     */
    public $Hour;

    /**
     * @var integer 是否激活定期快照功能
     */
    public $IsActivated;

    /**
     * @var string 下一次触发快照时间
     */
    public $NextActiveTime;

    /**
     * @var string 快照策略状态
     */
    public $Status;

    /**
     * @var integer 帐号ID
     */
    public $AppId;

    /**
     * @var integer 保留时间
     */
    public $AliveDays;

    /**
     * @var string 地域
     */
    public $RegionName;

    /**
     * @var array 文件系统信息
     */
    public $FileSystems;

    /**
     * @var string 快照定期备份在一个月的某个时间；该参数与DayOfWeek,IntervalDays互斥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DayOfMonth;

    /**
     * @var integer 快照定期间隔天数，1-365 天；该参数与DayOfMonth,DayOfWeek互斥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntervalDays;

    /**
     * @param string $AutoSnapshotPolicyId 快照策略ID
     * @param string $PolicyName 快照策略ID
     * @param string $CreationTime 快照策略创建时间
     * @param integer $FileSystemNums 关联的文件系统个数
     * @param string $DayOfWeek 快照定期备份在一星期哪一天，该参数与DayOfMonth,IntervalDays互斥
     * @param string $Hour 快照定期备份在一天的哪一小时
     * @param integer $IsActivated 是否激活定期快照功能
     * @param string $NextActiveTime 下一次触发快照时间
     * @param string $Status 快照策略状态
     * @param integer $AppId 帐号ID
     * @param integer $AliveDays 保留时间
     * @param string $RegionName 地域
     * @param array $FileSystems 文件系统信息
     * @param string $DayOfMonth 快照定期备份在一个月的某个时间；该参数与DayOfWeek,IntervalDays互斥
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntervalDays 快照定期间隔天数，1-365 天；该参数与DayOfMonth,DayOfWeek互斥
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("FileSystemNums",$param) and $param["FileSystemNums"] !== null) {
            $this->FileSystemNums = $param["FileSystemNums"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("NextActiveTime",$param) and $param["NextActiveTime"] !== null) {
            $this->NextActiveTime = $param["NextActiveTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            $this->AliveDays = $param["AliveDays"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("FileSystems",$param) and $param["FileSystems"] !== null) {
            $this->FileSystems = [];
            foreach ($param["FileSystems"] as $key => $value){
                $obj = new FileSystemByPolicy();
                $obj->deserialize($value);
                array_push($this->FileSystems, $obj);
            }
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("IntervalDays",$param) and $param["IntervalDays"] !== null) {
            $this->IntervalDays = $param["IntervalDays"];
        }
    }
}

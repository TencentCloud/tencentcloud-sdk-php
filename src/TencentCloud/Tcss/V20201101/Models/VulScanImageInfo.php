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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞扫描的镜像信息
 *
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method float getSize() 获取镜像大小
 * @method void setSize(float $Size) 设置镜像大小
 * @method string getScanStatus() 获取任务状态:SCANNING:扫描中 FAILED:失败 FINISHED:完成 CANCELED:取消
 * @method void setScanStatus(string $ScanStatus) 设置任务状态:SCANNING:扫描中 FAILED:失败 FINISHED:完成 CANCELED:取消
 * @method float getScanDuration() 获取扫描时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanDuration(float $ScanDuration) 设置扫描时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHighLevelVulCount() 获取高危漏洞数
 * @method void setHighLevelVulCount(integer $HighLevelVulCount) 设置高危漏洞数
 * @method integer getMediumLevelVulCount() 获取中危漏洞数
 * @method void setMediumLevelVulCount(integer $MediumLevelVulCount) 设置中危漏洞数
 * @method integer getLowLevelVulCount() 获取低危漏洞数
 * @method void setLowLevelVulCount(integer $LowLevelVulCount) 设置低危漏洞数
 * @method integer getCriticalLevelVulCount() 获取严重漏洞数
 * @method void setCriticalLevelVulCount(integer $CriticalLevelVulCount) 设置严重漏洞数
 * @method integer getTaskID() 获取本地镜像漏洞扫描任务ID
 * @method void setTaskID(integer $TaskID) 设置本地镜像漏洞扫描任务ID
 * @method string getScanStartTime() 获取漏洞扫描的开始时间
 * @method void setScanStartTime(string $ScanStartTime) 设置漏洞扫描的开始时间
 * @method string getScanEndTime() 获取漏洞扫描的结束时间
 * @method void setScanEndTime(string $ScanEndTime) 设置漏洞扫描的结束时间
 * @method string getErrorStatus() 获取失败原因:TIMEOUT:超时 TOO_MANY:任务过多 OFFLINE:离线
 * @method void setErrorStatus(string $ErrorStatus) 设置失败原因:TIMEOUT:超时 TOO_MANY:任务过多 OFFLINE:离线
 */
class VulScanImageInfo extends AbstractModel
{
    /**
     * @var string 镜像ID
     */
    public $ImageID;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var float 镜像大小
     */
    public $Size;

    /**
     * @var string 任务状态:SCANNING:扫描中 FAILED:失败 FINISHED:完成 CANCELED:取消
     */
    public $ScanStatus;

    /**
     * @var float 扫描时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanDuration;

    /**
     * @var integer 高危漏洞数
     */
    public $HighLevelVulCount;

    /**
     * @var integer 中危漏洞数
     */
    public $MediumLevelVulCount;

    /**
     * @var integer 低危漏洞数
     */
    public $LowLevelVulCount;

    /**
     * @var integer 严重漏洞数
     */
    public $CriticalLevelVulCount;

    /**
     * @var integer 本地镜像漏洞扫描任务ID
     */
    public $TaskID;

    /**
     * @var string 漏洞扫描的开始时间
     */
    public $ScanStartTime;

    /**
     * @var string 漏洞扫描的结束时间
     */
    public $ScanEndTime;

    /**
     * @var string 失败原因:TIMEOUT:超时 TOO_MANY:任务过多 OFFLINE:离线
     */
    public $ErrorStatus;

    /**
     * @param string $ImageID 镜像ID
     * @param string $ImageName 镜像名称
     * @param float $Size 镜像大小
     * @param string $ScanStatus 任务状态:SCANNING:扫描中 FAILED:失败 FINISHED:完成 CANCELED:取消
     * @param float $ScanDuration 扫描时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HighLevelVulCount 高危漏洞数
     * @param integer $MediumLevelVulCount 中危漏洞数
     * @param integer $LowLevelVulCount 低危漏洞数
     * @param integer $CriticalLevelVulCount 严重漏洞数
     * @param integer $TaskID 本地镜像漏洞扫描任务ID
     * @param string $ScanStartTime 漏洞扫描的开始时间
     * @param string $ScanEndTime 漏洞扫描的结束时间
     * @param string $ErrorStatus 失败原因:TIMEOUT:超时 TOO_MANY:任务过多 OFFLINE:离线
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("ScanDuration",$param) and $param["ScanDuration"] !== null) {
            $this->ScanDuration = $param["ScanDuration"];
        }

        if (array_key_exists("HighLevelVulCount",$param) and $param["HighLevelVulCount"] !== null) {
            $this->HighLevelVulCount = $param["HighLevelVulCount"];
        }

        if (array_key_exists("MediumLevelVulCount",$param) and $param["MediumLevelVulCount"] !== null) {
            $this->MediumLevelVulCount = $param["MediumLevelVulCount"];
        }

        if (array_key_exists("LowLevelVulCount",$param) and $param["LowLevelVulCount"] !== null) {
            $this->LowLevelVulCount = $param["LowLevelVulCount"];
        }

        if (array_key_exists("CriticalLevelVulCount",$param) and $param["CriticalLevelVulCount"] !== null) {
            $this->CriticalLevelVulCount = $param["CriticalLevelVulCount"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("ScanStartTime",$param) and $param["ScanStartTime"] !== null) {
            $this->ScanStartTime = $param["ScanStartTime"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("ErrorStatus",$param) and $param["ErrorStatus"] !== null) {
            $this->ErrorStatus = $param["ErrorStatus"];
        }
    }
}

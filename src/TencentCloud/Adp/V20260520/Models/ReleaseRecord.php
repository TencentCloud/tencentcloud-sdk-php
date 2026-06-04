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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * [数据结构定义] 发布记录
 *
 * @method boolean getCanExport() 获取是否可导出
 * @method void setCanExport(boolean $CanExport) 设置是否可导出
 * @method boolean getCanRollback() 获取是否可回滚
 * @method void setCanRollback(boolean $CanRollback) 设置是否可回滚
 * @method string getDescription() 获取发布描述
 * @method void setDescription(string $Description) 设置发布描述
 * @method integer getFailCount() 获取发布失败数
 * @method void setFailCount(integer $FailCount) 设置发布失败数
 * @method string getReason() 获取失败原因
 * @method void setReason(string $Reason) 设置失败原因
 * @method string getReleaseId() 获取发布ID
 * @method void setReleaseId(string $ReleaseId) 设置发布ID
 * @method string getReleaseVersion() 获取发布版本
 * @method void setReleaseVersion(string $ReleaseVersion) 设置发布版本
 * @method integer getStatus() 获取发布状态。枚举值: 1:待发布, 2:发布中, 3:发布成功, 4:发布失败, 5:审核中, 6:审核成功, 7:审核失败, 8:发布成功回调处理中, 9:发布暂停, 10:申诉审核中, 11:申诉审核通过, 12:申诉审核不通过
 * @method void setStatus(integer $Status) 设置发布状态。枚举值: 1:待发布, 2:发布中, 3:发布成功, 4:发布失败, 5:审核中, 6:审核成功, 7:审核失败, 8:发布成功回调处理中, 9:发布暂停, 10:申诉审核中, 11:申诉审核通过, 12:申诉审核不通过
 * @method string getStatusDescription() 获取状态描述
 * @method void setStatusDescription(string $StatusDescription) 设置状态描述
 * @method integer getSuccessCount() 获取发布成功数
 * @method void setSuccessCount(integer $SuccessCount) 设置发布成功数
 * @method string getUpdateTime() 获取更新时间 (Unix时间戳,秒级)
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间 (Unix时间戳,秒级)
 * @method string getUpdater() 获取发布人
 * @method void setUpdater(string $Updater) 设置发布人
 */
class ReleaseRecord extends AbstractModel
{
    /**
     * @var boolean 是否可导出
     */
    public $CanExport;

    /**
     * @var boolean 是否可回滚
     */
    public $CanRollback;

    /**
     * @var string 发布描述
     */
    public $Description;

    /**
     * @var integer 发布失败数
     */
    public $FailCount;

    /**
     * @var string 失败原因
     */
    public $Reason;

    /**
     * @var string 发布ID
     */
    public $ReleaseId;

    /**
     * @var string 发布版本
     */
    public $ReleaseVersion;

    /**
     * @var integer 发布状态。枚举值: 1:待发布, 2:发布中, 3:发布成功, 4:发布失败, 5:审核中, 6:审核成功, 7:审核失败, 8:发布成功回调处理中, 9:发布暂停, 10:申诉审核中, 11:申诉审核通过, 12:申诉审核不通过
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDescription;

    /**
     * @var integer 发布成功数
     */
    public $SuccessCount;

    /**
     * @var string 更新时间 (Unix时间戳,秒级)
     */
    public $UpdateTime;

    /**
     * @var string 发布人
     */
    public $Updater;

    /**
     * @param boolean $CanExport 是否可导出
     * @param boolean $CanRollback 是否可回滚
     * @param string $Description 发布描述
     * @param integer $FailCount 发布失败数
     * @param string $Reason 失败原因
     * @param string $ReleaseId 发布ID
     * @param string $ReleaseVersion 发布版本
     * @param integer $Status 发布状态。枚举值: 1:待发布, 2:发布中, 3:发布成功, 4:发布失败, 5:审核中, 6:审核成功, 7:审核失败, 8:发布成功回调处理中, 9:发布暂停, 10:申诉审核中, 11:申诉审核通过, 12:申诉审核不通过
     * @param string $StatusDescription 状态描述
     * @param integer $SuccessCount 发布成功数
     * @param string $UpdateTime 更新时间 (Unix时间戳,秒级)
     * @param string $Updater 发布人
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
        if (array_key_exists("CanExport",$param) and $param["CanExport"] !== null) {
            $this->CanExport = $param["CanExport"];
        }

        if (array_key_exists("CanRollback",$param) and $param["CanRollback"] !== null) {
            $this->CanRollback = $param["CanRollback"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ReleaseId",$param) and $param["ReleaseId"] !== null) {
            $this->ReleaseId = $param["ReleaseId"];
        }

        if (array_key_exists("ReleaseVersion",$param) and $param["ReleaseVersion"] !== null) {
            $this->ReleaseVersion = $param["ReleaseVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDescription",$param) and $param["StatusDescription"] !== null) {
            $this->StatusDescription = $param["StatusDescription"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Updater",$param) and $param["Updater"] !== null) {
            $this->Updater = $param["Updater"];
        }
    }
}

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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupOverview返回参数结构体
 *
 * @method integer getTotalFreeSize() 获取总免费空间大小，单位byte。
 * @method void setTotalFreeSize(integer $TotalFreeSize) 设置总免费空间大小，单位byte。
 * @method integer getUsedFreeSize() 获取已使用免费空间大小，单位byte。
 * @method void setUsedFreeSize(integer $UsedFreeSize) 设置已使用免费空间大小，单位byte。
 * @method integer getUsedBillingSize() 获取已使用收费空间大小，单位byte。
 * @method void setUsedBillingSize(integer $UsedBillingSize) 设置已使用收费空间大小，单位byte。
 * @method integer getLogBackupCount() 获取日志备份数量。
 * @method void setLogBackupCount(integer $LogBackupCount) 设置日志备份数量。
 * @method integer getLogBackupSize() 获取日志备份大小，单位byte。
 * @method void setLogBackupSize(integer $LogBackupSize) 设置日志备份大小，单位byte。
 * @method integer getManualBaseBackupCount() 获取手动创建的基础备份数量。
 * @method void setManualBaseBackupCount(integer $ManualBaseBackupCount) 设置手动创建的基础备份数量。
 * @method integer getManualBaseBackupSize() 获取手动创建的基础备份大小，单位byte。
 * @method void setManualBaseBackupSize(integer $ManualBaseBackupSize) 设置手动创建的基础备份大小，单位byte。
 * @method integer getAutoBaseBackupCount() 获取自动创建的基础备份数量。
 * @method void setAutoBaseBackupCount(integer $AutoBaseBackupCount) 设置自动创建的基础备份数量。
 * @method integer getAutoBaseBackupSize() 获取自动创建的基础备份大小，单位byte。
 * @method void setAutoBaseBackupSize(integer $AutoBaseBackupSize) 设置自动创建的基础备份大小，单位byte。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupOverviewResponse extends AbstractModel
{
    /**
     * @var integer 总免费空间大小，单位byte。
     */
    public $TotalFreeSize;

    /**
     * @var integer 已使用免费空间大小，单位byte。
     */
    public $UsedFreeSize;

    /**
     * @var integer 已使用收费空间大小，单位byte。
     */
    public $UsedBillingSize;

    /**
     * @var integer 日志备份数量。
     */
    public $LogBackupCount;

    /**
     * @var integer 日志备份大小，单位byte。
     */
    public $LogBackupSize;

    /**
     * @var integer 手动创建的基础备份数量。
     */
    public $ManualBaseBackupCount;

    /**
     * @var integer 手动创建的基础备份大小，单位byte。
     */
    public $ManualBaseBackupSize;

    /**
     * @var integer 自动创建的基础备份数量。
     */
    public $AutoBaseBackupCount;

    /**
     * @var integer 自动创建的基础备份大小，单位byte。
     */
    public $AutoBaseBackupSize;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalFreeSize 总免费空间大小，单位byte。
     * @param integer $UsedFreeSize 已使用免费空间大小，单位byte。
     * @param integer $UsedBillingSize 已使用收费空间大小，单位byte。
     * @param integer $LogBackupCount 日志备份数量。
     * @param integer $LogBackupSize 日志备份大小，单位byte。
     * @param integer $ManualBaseBackupCount 手动创建的基础备份数量。
     * @param integer $ManualBaseBackupSize 手动创建的基础备份大小，单位byte。
     * @param integer $AutoBaseBackupCount 自动创建的基础备份数量。
     * @param integer $AutoBaseBackupSize 自动创建的基础备份大小，单位byte。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalFreeSize",$param) and $param["TotalFreeSize"] !== null) {
            $this->TotalFreeSize = $param["TotalFreeSize"];
        }

        if (array_key_exists("UsedFreeSize",$param) and $param["UsedFreeSize"] !== null) {
            $this->UsedFreeSize = $param["UsedFreeSize"];
        }

        if (array_key_exists("UsedBillingSize",$param) and $param["UsedBillingSize"] !== null) {
            $this->UsedBillingSize = $param["UsedBillingSize"];
        }

        if (array_key_exists("LogBackupCount",$param) and $param["LogBackupCount"] !== null) {
            $this->LogBackupCount = $param["LogBackupCount"];
        }

        if (array_key_exists("LogBackupSize",$param) and $param["LogBackupSize"] !== null) {
            $this->LogBackupSize = $param["LogBackupSize"];
        }

        if (array_key_exists("ManualBaseBackupCount",$param) and $param["ManualBaseBackupCount"] !== null) {
            $this->ManualBaseBackupCount = $param["ManualBaseBackupCount"];
        }

        if (array_key_exists("ManualBaseBackupSize",$param) and $param["ManualBaseBackupSize"] !== null) {
            $this->ManualBaseBackupSize = $param["ManualBaseBackupSize"];
        }

        if (array_key_exists("AutoBaseBackupCount",$param) and $param["AutoBaseBackupCount"] !== null) {
            $this->AutoBaseBackupCount = $param["AutoBaseBackupCount"];
        }

        if (array_key_exists("AutoBaseBackupSize",$param) and $param["AutoBaseBackupSize"] !== null) {
            $this->AutoBaseBackupSize = $param["AutoBaseBackupSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

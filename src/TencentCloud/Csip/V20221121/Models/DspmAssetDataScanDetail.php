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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dspm资产数据识别详情
 *
 * @method integer getStatus() 获取<p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
 * @method void setStatus(integer $Status) 设置<p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
 * @method string getStatusInfo() 获取<p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
 * @method void setStatusInfo(string $StatusInfo) 设置<p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
 * @method float getProgress() 获取<p>识别进度</p>
 * @method void setProgress(float $Progress) 设置<p>识别进度</p>
 * @method string getLatestScanTime() 获取<p>最近扫描时间</p>
 * @method void setLatestScanTime(string $LatestScanTime) 设置<p>最近扫描时间</p>
 * @method string getErrorInfo() 获取<p>识别失败信息</p>
 * @method void setErrorInfo(string $ErrorInfo) 设置<p>识别失败信息</p>
 * @method integer getDbCount() 获取<p>数据库数量</p>
 * @method void setDbCount(integer $DbCount) 设置<p>数据库数量</p>
 * @method array getCategoryIds() 获取<p>分类id集合</p>
 * @method void setCategoryIds(array $CategoryIds) 设置<p>分类id集合</p>
 * @method array getCategoryNames() 获取<p>分类名称集合</p>
 * @method void setCategoryNames(array $CategoryNames) 设置<p>分类名称集合</p>
 * @method DspmSensitiveScanTaskConfig getTaskConfig() 获取<p>扫描任务配置</p>
 * @method void setTaskConfig(DspmSensitiveScanTaskConfig $TaskConfig) 设置<p>扫描任务配置</p>
 * @method array getCategoryDetails() 获取<p>识别结果分类详情</p>
 * @method void setCategoryDetails(array $CategoryDetails) 设置<p>识别结果分类详情</p>
 * @method integer getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>任务ID</p>
 */
class DspmAssetDataScanDetail extends AbstractModel
{
    /**
     * @var integer <p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
     */
    public $Status;

    /**
     * @var string <p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
     */
    public $StatusInfo;

    /**
     * @var float <p>识别进度</p>
     */
    public $Progress;

    /**
     * @var string <p>最近扫描时间</p>
     */
    public $LatestScanTime;

    /**
     * @var string <p>识别失败信息</p>
     */
    public $ErrorInfo;

    /**
     * @var integer <p>数据库数量</p>
     */
    public $DbCount;

    /**
     * @var array <p>分类id集合</p>
     */
    public $CategoryIds;

    /**
     * @var array <p>分类名称集合</p>
     */
    public $CategoryNames;

    /**
     * @var DspmSensitiveScanTaskConfig <p>扫描任务配置</p>
     */
    public $TaskConfig;

    /**
     * @var array <p>识别结果分类详情</p>
     */
    public $CategoryDetails;

    /**
     * @var integer <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @param integer $Status <p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
     * @param string $StatusInfo <p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
     * @param float $Progress <p>识别进度</p>
     * @param string $LatestScanTime <p>最近扫描时间</p>
     * @param string $ErrorInfo <p>识别失败信息</p>
     * @param integer $DbCount <p>数据库数量</p>
     * @param array $CategoryIds <p>分类id集合</p>
     * @param array $CategoryNames <p>分类名称集合</p>
     * @param DspmSensitiveScanTaskConfig $TaskConfig <p>扫描任务配置</p>
     * @param array $CategoryDetails <p>识别结果分类详情</p>
     * @param integer $TaskId <p>任务ID</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusInfo",$param) and $param["StatusInfo"] !== null) {
            $this->StatusInfo = $param["StatusInfo"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("DbCount",$param) and $param["DbCount"] !== null) {
            $this->DbCount = $param["DbCount"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }

        if (array_key_exists("CategoryNames",$param) and $param["CategoryNames"] !== null) {
            $this->CategoryNames = $param["CategoryNames"];
        }

        if (array_key_exists("TaskConfig",$param) and $param["TaskConfig"] !== null) {
            $this->TaskConfig = new DspmSensitiveScanTaskConfig();
            $this->TaskConfig->deserialize($param["TaskConfig"]);
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new DspmIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}

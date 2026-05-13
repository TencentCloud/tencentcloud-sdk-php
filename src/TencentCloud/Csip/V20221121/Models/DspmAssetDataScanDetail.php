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
 * @method integer getStatus() 获取识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败
 * @method void setStatus(integer $Status) 设置识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败
 * @method string getStatusInfo() 获取识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败
 * @method void setStatusInfo(string $StatusInfo) 设置识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败
 * @method float getProgress() 获取识别进度
 * @method void setProgress(float $Progress) 设置识别进度
 * @method string getLatestScanTime() 获取最近扫描时间
 * @method void setLatestScanTime(string $LatestScanTime) 设置最近扫描时间
 * @method string getErrorInfo() 获取识别失败信息
 * @method void setErrorInfo(string $ErrorInfo) 设置识别失败信息
 * @method integer getDbCount() 获取数据库数量
 * @method void setDbCount(integer $DbCount) 设置数据库数量
 * @method array getCategoryIds() 获取分类id集合
 * @method void setCategoryIds(array $CategoryIds) 设置分类id集合
 * @method array getCategoryNames() 获取分类名称集合
 * @method void setCategoryNames(array $CategoryNames) 设置分类名称集合
 * @method DspmSensitiveScanTaskConfig getTaskConfig() 获取扫描任务配置
 * @method void setTaskConfig(DspmSensitiveScanTaskConfig $TaskConfig) 设置扫描任务配置
 * @method array getCategoryDetails() 获取识别结果分类详情
 * @method void setCategoryDetails(array $CategoryDetails) 设置识别结果分类详情
 */
class DspmAssetDataScanDetail extends AbstractModel
{
    /**
     * @var integer 识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败
     */
    public $Status;

    /**
     * @var string 识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败
     */
    public $StatusInfo;

    /**
     * @var float 识别进度
     */
    public $Progress;

    /**
     * @var string 最近扫描时间
     */
    public $LatestScanTime;

    /**
     * @var string 识别失败信息
     */
    public $ErrorInfo;

    /**
     * @var integer 数据库数量
     */
    public $DbCount;

    /**
     * @var array 分类id集合
     */
    public $CategoryIds;

    /**
     * @var array 分类名称集合
     */
    public $CategoryNames;

    /**
     * @var DspmSensitiveScanTaskConfig 扫描任务配置
     */
    public $TaskConfig;

    /**
     * @var array 识别结果分类详情
     */
    public $CategoryDetails;

    /**
     * @param integer $Status 识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败
     * @param string $StatusInfo 识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败
     * @param float $Progress 识别进度
     * @param string $LatestScanTime 最近扫描时间
     * @param string $ErrorInfo 识别失败信息
     * @param integer $DbCount 数据库数量
     * @param array $CategoryIds 分类id集合
     * @param array $CategoryNames 分类名称集合
     * @param DspmSensitiveScanTaskConfig $TaskConfig 扫描任务配置
     * @param array $CategoryDetails 识别结果分类详情
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
    }
}

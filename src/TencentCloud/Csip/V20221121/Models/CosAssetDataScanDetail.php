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
 * cos审计资产数据识别详情
 *
 * @method integer getStatus() 获取<p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
 * @method void setStatus(integer $Status) 设置<p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
 * @method float getProgress() 获取<p>识别进度</p>
 * @method void setProgress(float $Progress) 设置<p>识别进度</p>
 * @method integer getLatestScanTime() 获取<p>最近扫描时间</p>
 * @method void setLatestScanTime(integer $LatestScanTime) 设置<p>最近扫描时间</p>
 * @method string getErrorInfo() 获取<p>识别失败信息</p>
 * @method void setErrorInfo(string $ErrorInfo) 设置<p>识别失败信息</p>
 * @method array getCategoryDetails() 获取<p>识别结果分类详情</p>
 * @method void setCategoryDetails(array $CategoryDetails) 设置<p>识别结果分类详情</p>
 */
class CosAssetDataScanDetail extends AbstractModel
{
    /**
     * @var integer <p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
     */
    public $Status;

    /**
     * @var float <p>识别进度</p>
     */
    public $Progress;

    /**
     * @var integer <p>最近扫描时间</p>
     */
    public $LatestScanTime;

    /**
     * @var string <p>识别失败信息</p>
     */
    public $ErrorInfo;

    /**
     * @var array <p>识别结果分类详情</p>
     */
    public $CategoryDetails;

    /**
     * @param integer $Status <p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
     * @param float $Progress <p>识别进度</p>
     * @param integer $LatestScanTime <p>最近扫描时间</p>
     * @param string $ErrorInfo <p>识别失败信息</p>
     * @param array $CategoryDetails <p>识别结果分类详情</p>
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

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new CosIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
        }
    }
}

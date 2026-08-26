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
 * @method array getRuleDetails() 获取<p>无</p>
 * @method void setRuleDetails(array $RuleDetails) 设置<p>无</p>
 * @method array getLevelDetails() 获取<p>无</p>
 * @method void setLevelDetails(array $LevelDetails) 设置<p>无</p>
 * @method boolean getIsFullScanned() 获取<p>是否已发起全量扫描</p>
 * @method void setIsFullScanned(boolean $IsFullScanned) 设置<p>是否已发起全量扫描</p>
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
     * @var array <p>无</p>
     */
    public $RuleDetails;

    /**
     * @var array <p>无</p>
     */
    public $LevelDetails;

    /**
     * @var boolean <p>是否已发起全量扫描</p>
     */
    public $IsFullScanned;

    /**
     * @param integer $Status <p>识别任务状态 0:未识别 1:识别中 2:识别终止 3:识别成功 4:识别失败</p>
     * @param float $Progress <p>识别进度</p>
     * @param integer $LatestScanTime <p>最近扫描时间</p>
     * @param string $ErrorInfo <p>识别失败信息</p>
     * @param array $CategoryDetails <p>识别结果分类详情</p>
     * @param array $RuleDetails <p>无</p>
     * @param array $LevelDetails <p>无</p>
     * @param boolean $IsFullScanned <p>是否已发起全量扫描</p>
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

        if (array_key_exists("RuleDetails",$param) and $param["RuleDetails"] !== null) {
            $this->RuleDetails = [];
            foreach ($param["RuleDetails"] as $key => $value){
                $obj = new CosIdentifyRuleDetail();
                $obj->deserialize($value);
                array_push($this->RuleDetails, $obj);
            }
        }

        if (array_key_exists("LevelDetails",$param) and $param["LevelDetails"] !== null) {
            $this->LevelDetails = [];
            foreach ($param["LevelDetails"] as $key => $value){
                $obj = new CosIdentifyLevelDetail();
                $obj->deserialize($value);
                array_push($this->LevelDetails, $obj);
            }
        }

        if (array_key_exists("IsFullScanned",$param) and $param["IsFullScanned"] !== null) {
            $this->IsFullScanned = $param["IsFullScanned"];
        }
    }
}

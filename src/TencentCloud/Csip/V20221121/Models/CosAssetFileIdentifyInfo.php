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
 * 对象存储审计文件数据识别信息
 *
 * @method string getFileName() 获取<p>文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>文件名称</p>
 * @method string getDirName() 获取<p>文件路径</p>
 * @method void setDirName(string $DirName) 设置<p>文件路径</p>
 * @method array getCategoryDetails() 获取<p>分类数据项详情</p>
 * @method void setCategoryDetails(array $CategoryDetails) 设置<p>分类数据项详情</p>
 * @method CosBucketInfo getBucketInfo() 获取<p>存储桶信息</p>
 * @method void setBucketInfo(CosBucketInfo $BucketInfo) 设置<p>存储桶信息</p>
 * @method integer getLastScanTime() 获取<p>最后一次扫描时间</p>
 * @method void setLastScanTime(integer $LastScanTime) 设置<p>最后一次扫描时间</p>
 * @method integer getHandleStatus() 获取<p>处置状态</p>
 * @method void setHandleStatus(integer $HandleStatus) 设置<p>处置状态</p>
 * @method string getResultId() 获取<p>结果唯一标识</p>
 * @method void setResultId(string $ResultId) 设置<p>结果唯一标识</p>
 * @method array getRuleDetails() 获取<p>规则详情</p>
 * @method void setRuleDetails(array $RuleDetails) 设置<p>规则详情</p>
 * @method array getLevelDetails() 获取<p>级别详情</p>
 * @method void setLevelDetails(array $LevelDetails) 设置<p>级别详情</p>
 * @method integer getComplianceId() 获取<p>模板ID</p>
 * @method void setComplianceId(integer $ComplianceId) 设置<p>模板ID</p>
 */
class CosAssetFileIdentifyInfo extends AbstractModel
{
    /**
     * @var string <p>文件名称</p>
     */
    public $FileName;

    /**
     * @var string <p>文件路径</p>
     */
    public $DirName;

    /**
     * @var array <p>分类数据项详情</p>
     */
    public $CategoryDetails;

    /**
     * @var CosBucketInfo <p>存储桶信息</p>
     */
    public $BucketInfo;

    /**
     * @var integer <p>最后一次扫描时间</p>
     */
    public $LastScanTime;

    /**
     * @var integer <p>处置状态</p>
     */
    public $HandleStatus;

    /**
     * @var string <p>结果唯一标识</p>
     */
    public $ResultId;

    /**
     * @var array <p>规则详情</p>
     */
    public $RuleDetails;

    /**
     * @var array <p>级别详情</p>
     */
    public $LevelDetails;

    /**
     * @var integer <p>模板ID</p>
     */
    public $ComplianceId;

    /**
     * @param string $FileName <p>文件名称</p>
     * @param string $DirName <p>文件路径</p>
     * @param array $CategoryDetails <p>分类数据项详情</p>
     * @param CosBucketInfo $BucketInfo <p>存储桶信息</p>
     * @param integer $LastScanTime <p>最后一次扫描时间</p>
     * @param integer $HandleStatus <p>处置状态</p>
     * @param string $ResultId <p>结果唯一标识</p>
     * @param array $RuleDetails <p>规则详情</p>
     * @param array $LevelDetails <p>级别详情</p>
     * @param integer $ComplianceId <p>模板ID</p>
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("DirName",$param) and $param["DirName"] !== null) {
            $this->DirName = $param["DirName"];
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new CosIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
        }

        if (array_key_exists("BucketInfo",$param) and $param["BucketInfo"] !== null) {
            $this->BucketInfo = new CosBucketInfo();
            $this->BucketInfo->deserialize($param["BucketInfo"]);
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("ResultId",$param) and $param["ResultId"] !== null) {
            $this->ResultId = $param["ResultId"];
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

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }
    }
}

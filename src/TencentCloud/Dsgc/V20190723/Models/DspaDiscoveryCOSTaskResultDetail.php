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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS扫描任务结果详情
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method integer getFileResultId() 获取扫描File结果详情ID
 * @method void setFileResultId(integer $FileResultId) 设置扫描File结果详情ID
 * @method string getBucketName() 获取所属桶名
 * @method void setBucketName(string $BucketName) 设置所属桶名
 * @method string getFileName() 获取所属文件名
 * @method void setFileName(string $FileName) 设置所属文件名
 * @method integer getCategoryId() 获取敏感数据分类ID
 * @method void setCategoryId(integer $CategoryId) 设置敏感数据分类ID
 * @method string getCategoryName() 获取敏感数据分类名称
 * @method void setCategoryName(string $CategoryName) 设置敏感数据分类名称
 * @method integer getLevelId() 获取敏感数据分级ID
 * @method void setLevelId(integer $LevelId) 设置敏感数据分级ID
 * @method string getLevelName() 获取敏感数据分级名称
 * @method void setLevelName(string $LevelName) 设置敏感数据分级名称
 * @method boolean getKMSEncrypted() 获取KMS加密，true or false
 * @method void setKMSEncrypted(boolean $KMSEncrypted) 设置KMS加密，true or false
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method integer getLevelRiskScore() 获取敏感数据分级分数
 * @method void setLevelRiskScore(integer $LevelRiskScore) 设置敏感数据分级分数
 * @method integer getFileSize() 获取文件大小，单位为KB
 * @method void setFileSize(integer $FileSize) 设置文件大小，单位为KB
 * @method string getFileType() 获取文件类型，如csv，txt
 * @method void setFileType(string $FileType) 设置文件类型，如csv，txt
 * @method integer getSensitiveDataCount() 获取敏感数据出现次数
 * @method void setSensitiveDataCount(integer $SensitiveDataCount) 设置敏感数据出现次数
 * @method array getCategoryFullPath() 获取分类树路径
 * @method void setCategoryFullPath(array $CategoryFullPath) 设置分类树路径
 * @method array getCategoryArr() 获取分类树路径
 * @method void setCategoryArr(array $CategoryArr) 设置分类树路径
 * @method integer getComplianceId() 获取合规组ID
 * @method void setComplianceId(integer $ComplianceId) 设置合规组ID
 * @method integer getResultId() 获取结果id
 * @method void setResultId(integer $ResultId) 设置结果id
 */
class DspaDiscoveryCOSTaskResultDetail extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var integer 扫描File结果详情ID
     */
    public $FileResultId;

    /**
     * @var string 所属桶名
     */
    public $BucketName;

    /**
     * @var string 所属文件名
     */
    public $FileName;

    /**
     * @var integer 敏感数据分类ID
     */
    public $CategoryId;

    /**
     * @var string 敏感数据分类名称
     */
    public $CategoryName;

    /**
     * @var integer 敏感数据分级ID
     */
    public $LevelId;

    /**
     * @var string 敏感数据分级名称
     */
    public $LevelName;

    /**
     * @var boolean KMS加密，true or false
     */
    public $KMSEncrypted;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var integer 敏感数据分级分数
     */
    public $LevelRiskScore;

    /**
     * @var integer 文件大小，单位为KB
     */
    public $FileSize;

    /**
     * @var string 文件类型，如csv，txt
     */
    public $FileType;

    /**
     * @var integer 敏感数据出现次数
     */
    public $SensitiveDataCount;

    /**
     * @var array 分类树路径
     */
    public $CategoryFullPath;

    /**
     * @var array 分类树路径
     */
    public $CategoryArr;

    /**
     * @var integer 合规组ID
     */
    public $ComplianceId;

    /**
     * @var integer 结果id
     */
    public $ResultId;

    /**
     * @param integer $TaskId 任务ID
     * @param integer $FileResultId 扫描File结果详情ID
     * @param string $BucketName 所属桶名
     * @param string $FileName 所属文件名
     * @param integer $CategoryId 敏感数据分类ID
     * @param string $CategoryName 敏感数据分类名称
     * @param integer $LevelId 敏感数据分级ID
     * @param string $LevelName 敏感数据分级名称
     * @param boolean $KMSEncrypted KMS加密，true or false
     * @param string $RuleName 规则名称
     * @param integer $RuleId 规则ID
     * @param integer $LevelRiskScore 敏感数据分级分数
     * @param integer $FileSize 文件大小，单位为KB
     * @param string $FileType 文件类型，如csv，txt
     * @param integer $SensitiveDataCount 敏感数据出现次数
     * @param array $CategoryFullPath 分类树路径
     * @param array $CategoryArr 分类树路径
     * @param integer $ComplianceId 合规组ID
     * @param integer $ResultId 结果id
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FileResultId",$param) and $param["FileResultId"] !== null) {
            $this->FileResultId = $param["FileResultId"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("KMSEncrypted",$param) and $param["KMSEncrypted"] !== null) {
            $this->KMSEncrypted = $param["KMSEncrypted"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("LevelRiskScore",$param) and $param["LevelRiskScore"] !== null) {
            $this->LevelRiskScore = $param["LevelRiskScore"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("SensitiveDataCount",$param) and $param["SensitiveDataCount"] !== null) {
            $this->SensitiveDataCount = $param["SensitiveDataCount"];
        }

        if (array_key_exists("CategoryFullPath",$param) and $param["CategoryFullPath"] !== null) {
            $this->CategoryFullPath = $param["CategoryFullPath"];
        }

        if (array_key_exists("CategoryArr",$param) and $param["CategoryArr"] !== null) {
            $this->CategoryArr = $param["CategoryArr"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("ResultId",$param) and $param["ResultId"] !== null) {
            $this->ResultId = $param["ResultId"];
        }
    }
}

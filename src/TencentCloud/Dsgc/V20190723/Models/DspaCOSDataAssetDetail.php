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
 * COS对象存储数据资产详情
 *
 * @method string getBucketName() 获取对象桶
 * @method void setBucketName(string $BucketName) 设置对象桶
 * @method string getFileName() 获取对象名称
 * @method void setFileName(string $FileName) 设置对象名称
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getSensitiveDataCount() 获取出现次数
 * @method void setSensitiveDataCount(integer $SensitiveDataCount) 设置出现次数
 * @method string getCategoryName() 获取敏感数据分类
 * @method void setCategoryName(string $CategoryName) 设置敏感数据分类
 * @method string getLevelRiskName() 获取敏感等级
 * @method void setLevelRiskName(string $LevelRiskName) 设置敏感等级
 * @method boolean getKMSEncrypted() 获取KMS加密
 * @method void setKMSEncrypted(boolean $KMSEncrypted) 设置KMS加密
 * @method string getFileType() 获取文件类型
 * @method void setFileType(string $FileType) 设置文件类型
 * @method string getFileSize() 获取文件大小
 * @method void setFileSize(string $FileSize) 设置文件大小
 * @method integer getLevelRiskScore() 获取敏感数据分级分数
 * @method void setLevelRiskScore(integer $LevelRiskScore) 设置敏感数据分级分数
 * @method string getDataSourceId() 获取数据源ID
 * @method void setDataSourceId(string $DataSourceId) 设置数据源ID
 * @method integer getRuleId() 获取规则id
 * @method void setRuleId(integer $RuleId) 设置规则id
 * @method string getResourceRegion() 获取资源所在地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
 * @method integer getCategoryId() 获取分类ID
 * @method void setCategoryId(integer $CategoryId) 设置分类ID
 * @method integer getLevelId() 获取分级ID
 * @method void setLevelId(integer $LevelId) 设置分级ID
 * @method integer getFileResultId() 获取文件扫描结果ID
 * @method void setFileResultId(integer $FileResultId) 设置文件扫描结果ID
 * @method string getDataSourceName() 获取数据源名称
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
 * @method string getCategoryFullPath() 获取分类路径
 * @method void setCategoryFullPath(string $CategoryFullPath) 设置分类路径
 * @method integer getIdentifyType() 获取0-系统识别
1-人工识别
 * @method void setIdentifyType(integer $IdentifyType) 设置0-系统识别
1-人工识别
 * @method integer getCheckStatus() 获取0-系统识别
1-人工识别
 * @method void setCheckStatus(integer $CheckStatus) 设置0-系统识别
1-人工识别
 */
class DspaCOSDataAssetDetail extends AbstractModel
{
    /**
     * @var string 对象桶
     */
    public $BucketName;

    /**
     * @var string 对象名称
     */
    public $FileName;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 出现次数
     */
    public $SensitiveDataCount;

    /**
     * @var string 敏感数据分类
     */
    public $CategoryName;

    /**
     * @var string 敏感等级
     */
    public $LevelRiskName;

    /**
     * @var boolean KMS加密
     */
    public $KMSEncrypted;

    /**
     * @var string 文件类型
     */
    public $FileType;

    /**
     * @var string 文件大小
     */
    public $FileSize;

    /**
     * @var integer 敏感数据分级分数
     */
    public $LevelRiskScore;

    /**
     * @var string 数据源ID
     */
    public $DataSourceId;

    /**
     * @var integer 规则id
     */
    public $RuleId;

    /**
     * @var string 资源所在地域
     */
    public $ResourceRegion;

    /**
     * @var integer 分类ID
     */
    public $CategoryId;

    /**
     * @var integer 分级ID
     */
    public $LevelId;

    /**
     * @var integer 文件扫描结果ID
     */
    public $FileResultId;

    /**
     * @var string 数据源名称
     */
    public $DataSourceName;

    /**
     * @var string 分类路径
     */
    public $CategoryFullPath;

    /**
     * @var integer 0-系统识别
1-人工识别
     */
    public $IdentifyType;

    /**
     * @var integer 0-系统识别
1-人工识别
     */
    public $CheckStatus;

    /**
     * @param string $BucketName 对象桶
     * @param string $FileName 对象名称
     * @param string $RuleName 规则名称
     * @param integer $SensitiveDataCount 出现次数
     * @param string $CategoryName 敏感数据分类
     * @param string $LevelRiskName 敏感等级
     * @param boolean $KMSEncrypted KMS加密
     * @param string $FileType 文件类型
     * @param string $FileSize 文件大小
     * @param integer $LevelRiskScore 敏感数据分级分数
     * @param string $DataSourceId 数据源ID
     * @param integer $RuleId 规则id
     * @param string $ResourceRegion 资源所在地域
     * @param integer $CategoryId 分类ID
     * @param integer $LevelId 分级ID
     * @param integer $FileResultId 文件扫描结果ID
     * @param string $DataSourceName 数据源名称
     * @param string $CategoryFullPath 分类路径
     * @param integer $IdentifyType 0-系统识别
1-人工识别
     * @param integer $CheckStatus 0-系统识别
1-人工识别
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("SensitiveDataCount",$param) and $param["SensitiveDataCount"] !== null) {
            $this->SensitiveDataCount = $param["SensitiveDataCount"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("LevelRiskName",$param) and $param["LevelRiskName"] !== null) {
            $this->LevelRiskName = $param["LevelRiskName"];
        }

        if (array_key_exists("KMSEncrypted",$param) and $param["KMSEncrypted"] !== null) {
            $this->KMSEncrypted = $param["KMSEncrypted"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("LevelRiskScore",$param) and $param["LevelRiskScore"] !== null) {
            $this->LevelRiskScore = $param["LevelRiskScore"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("FileResultId",$param) and $param["FileResultId"] !== null) {
            $this->FileResultId = $param["FileResultId"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("CategoryFullPath",$param) and $param["CategoryFullPath"] !== null) {
            $this->CategoryFullPath = $param["CategoryFullPath"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }
    }
}

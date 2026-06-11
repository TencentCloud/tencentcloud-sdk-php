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
 * IaC检测文件
 *
 * @method integer getId() 获取<p>ID</p>
 * @method void setId(integer $Id) 设置<p>ID</p>
 * @method integer getAppId() 获取<p>appid</p>
 * @method void setAppId(integer $AppId) 设置<p>appid</p>
 * @method string getFileId() 获取<p>文件ID</p>
 * @method void setFileId(string $FileId) 设置<p>文件ID</p>
 * @method string getFileName() 获取<p>文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>文件名称</p>
 * @method string getCICDName() 获取<p>CI/CD名称</p>
 * @method void setCICDName(string $CICDName) 设置<p>CI/CD名称</p>
 * @method string getFilePath() 获取<p>文件路径</p>
 * @method void setFilePath(string $FilePath) 设置<p>文件路径</p>
 * @method integer getFileType() 获取<p>文件类型(1:Dockerfile,2:Terraform,3:KubernetesYaml)</p>
 * @method void setFileType(integer $FileType) 设置<p>文件类型(1:Dockerfile,2:Terraform,3:KubernetesYaml)</p>
 * @method integer getRiskTotalCnt() 获取<p>风险总计数量</p>
 * @method void setRiskTotalCnt(integer $RiskTotalCnt) 设置<p>风险总计数量</p>
 * @method array getRiskLevelCnt() 获取<p>风险等级数量(0:低危,1:中危,2:高危,3:严重)</p>
 * @method void setRiskLevelCnt(array $RiskLevelCnt) 设置<p>风险等级数量(0:低危,1:中危,2:高危,3:严重)</p>
 * @method string getScanTime() 获取<p>扫描时间</p>
 * @method void setScanTime(string $ScanTime) 设置<p>扫描时间</p>
 * @method integer getStatus() 获取<p>检测状态(0:待扫描,1:检测中,2:已完成,3:检测异常)</p>
 * @method void setStatus(integer $Status) 设置<p>检测状态(0:待扫描,1:检测中,2:已完成,3:检测异常)</p>
 * @method integer getFailType() 获取<p>扫描失败类型(0:无失败, 1:检测超时, 2:文件格式解析失败, 3:检测失败)</p>
 * @method void setFailType(integer $FailType) 设置<p>扫描失败类型(0:无失败, 1:检测超时, 2:文件格式解析失败, 3:检测失败)</p>
 */
class IaCFile extends AbstractModel
{
    /**
     * @var integer <p>ID</p>
     */
    public $Id;

    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>文件ID</p>
     */
    public $FileId;

    /**
     * @var string <p>文件名称</p>
     */
    public $FileName;

    /**
     * @var string <p>CI/CD名称</p>
     */
    public $CICDName;

    /**
     * @var string <p>文件路径</p>
     */
    public $FilePath;

    /**
     * @var integer <p>文件类型(1:Dockerfile,2:Terraform,3:KubernetesYaml)</p>
     */
    public $FileType;

    /**
     * @var integer <p>风险总计数量</p>
     */
    public $RiskTotalCnt;

    /**
     * @var array <p>风险等级数量(0:低危,1:中危,2:高危,3:严重)</p>
     */
    public $RiskLevelCnt;

    /**
     * @var string <p>扫描时间</p>
     */
    public $ScanTime;

    /**
     * @var integer <p>检测状态(0:待扫描,1:检测中,2:已完成,3:检测异常)</p>
     */
    public $Status;

    /**
     * @var integer <p>扫描失败类型(0:无失败, 1:检测超时, 2:文件格式解析失败, 3:检测失败)</p>
     */
    public $FailType;

    /**
     * @param integer $Id <p>ID</p>
     * @param integer $AppId <p>appid</p>
     * @param string $FileId <p>文件ID</p>
     * @param string $FileName <p>文件名称</p>
     * @param string $CICDName <p>CI/CD名称</p>
     * @param string $FilePath <p>文件路径</p>
     * @param integer $FileType <p>文件类型(1:Dockerfile,2:Terraform,3:KubernetesYaml)</p>
     * @param integer $RiskTotalCnt <p>风险总计数量</p>
     * @param array $RiskLevelCnt <p>风险等级数量(0:低危,1:中危,2:高危,3:严重)</p>
     * @param string $ScanTime <p>扫描时间</p>
     * @param integer $Status <p>检测状态(0:待扫描,1:检测中,2:已完成,3:检测异常)</p>
     * @param integer $FailType <p>扫描失败类型(0:无失败, 1:检测超时, 2:文件格式解析失败, 3:检测失败)</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CICDName",$param) and $param["CICDName"] !== null) {
            $this->CICDName = $param["CICDName"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("RiskTotalCnt",$param) and $param["RiskTotalCnt"] !== null) {
            $this->RiskTotalCnt = $param["RiskTotalCnt"];
        }

        if (array_key_exists("RiskLevelCnt",$param) and $param["RiskLevelCnt"] !== null) {
            $this->RiskLevelCnt = [];
            foreach ($param["RiskLevelCnt"] as $key => $value){
                $obj = new KeyValueInt();
                $obj->deserialize($value);
                array_push($this->RiskLevelCnt, $obj);
            }
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailType",$param) and $param["FailType"] !== null) {
            $this->FailType = $param["FailType"];
        }
    }
}

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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadLogByLine请求参数结构体
 *
 * @method integer getStartLine() 获取开始行
 * @method void setStartLine(integer $StartLine) 设置开始行
 * @method integer getLineCount() 获取读取行
 * @method void setLineCount(integer $LineCount) 设置读取行
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getCurRunDate() 获取实例运行时间
 * @method void setCurRunDate(string $CurRunDate) 设置实例运行时间
 * @method string getDetailId() 获取任务详情id，用于读取切分的日志文件
 * @method void setDetailId(string $DetailId) 设置任务详情id，用于读取切分的日志文件
 * @method string getFilePath() 获取base64编码的文件路径
 * @method void setFilePath(string $FilePath) 设置base64编码的文件路径
 * @method string getRecordId() 获取任务记录id
 * @method void setRecordId(string $RecordId) 设置任务记录id
 * @method string getSubJobId() 获取子job id
 * @method void setSubJobId(string $SubJobId) 设置子job id
 * @method string getJobType() 获取hiveSql:34,sparkSql:36 dlcSql: 32
 * @method void setJobType(string $JobType) 设置hiveSql:34,sparkSql:36 dlcSql: 32
 * @method boolean getParseErrorTip() 获取true:解析错误信息。false:不解析错误信息
 * @method void setParseErrorTip(boolean $ParseErrorTip) 设置true:解析错误信息。false:不解析错误信息
 * @method integer getFileType() 获取log 0 code 1 result 2 custo 3
 * @method void setFileType(integer $FileType) 设置log 0 code 1 result 2 custo 3
 * @method integer getQueryFileFlag() 获取查询文件标志：0: 从执行机获取，1: 从cos获取，获取不到会再从执行机获取
 * @method void setQueryFileFlag(integer $QueryFileFlag) 设置查询文件标志：0: 从执行机获取，1: 从cos获取，获取不到会再从执行机获取
 * @method string getExtInfo() 获取透传字段，如果queryFileFlag为1，则ext回作为上一页的分页标识offset
 * @method void setExtInfo(string $ExtInfo) 设置透传字段，如果queryFileFlag为1，则ext回作为上一页的分页标识offset
 */
class DownloadLogByLineRequest extends AbstractModel
{
    /**
     * @var integer 开始行
     */
    public $StartLine;

    /**
     * @var integer 读取行
     */
    public $LineCount;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 实例运行时间
     */
    public $CurRunDate;

    /**
     * @var string 任务详情id，用于读取切分的日志文件
     */
    public $DetailId;

    /**
     * @var string base64编码的文件路径
     */
    public $FilePath;

    /**
     * @var string 任务记录id
     */
    public $RecordId;

    /**
     * @var string 子job id
     */
    public $SubJobId;

    /**
     * @var string hiveSql:34,sparkSql:36 dlcSql: 32
     */
    public $JobType;

    /**
     * @var boolean true:解析错误信息。false:不解析错误信息
     */
    public $ParseErrorTip;

    /**
     * @var integer log 0 code 1 result 2 custo 3
     */
    public $FileType;

    /**
     * @var integer 查询文件标志：0: 从执行机获取，1: 从cos获取，获取不到会再从执行机获取
     */
    public $QueryFileFlag;

    /**
     * @var string 透传字段，如果queryFileFlag为1，则ext回作为上一页的分页标识offset
     */
    public $ExtInfo;

    /**
     * @param integer $StartLine 开始行
     * @param integer $LineCount 读取行
     * @param string $ProjectId 项目id
     * @param string $TaskId 任务id
     * @param string $CurRunDate 实例运行时间
     * @param string $DetailId 任务详情id，用于读取切分的日志文件
     * @param string $FilePath base64编码的文件路径
     * @param string $RecordId 任务记录id
     * @param string $SubJobId 子job id
     * @param string $JobType hiveSql:34,sparkSql:36 dlcSql: 32
     * @param boolean $ParseErrorTip true:解析错误信息。false:不解析错误信息
     * @param integer $FileType log 0 code 1 result 2 custo 3
     * @param integer $QueryFileFlag 查询文件标志：0: 从执行机获取，1: 从cos获取，获取不到会再从执行机获取
     * @param string $ExtInfo 透传字段，如果queryFileFlag为1，则ext回作为上一页的分页标识offset
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
        if (array_key_exists("StartLine",$param) and $param["StartLine"] !== null) {
            $this->StartLine = $param["StartLine"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("DetailId",$param) and $param["DetailId"] !== null) {
            $this->DetailId = $param["DetailId"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("SubJobId",$param) and $param["SubJobId"] !== null) {
            $this->SubJobId = $param["SubJobId"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("ParseErrorTip",$param) and $param["ParseErrorTip"] !== null) {
            $this->ParseErrorTip = $param["ParseErrorTip"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("QueryFileFlag",$param) and $param["QueryFileFlag"] !== null) {
            $this->QueryFileFlag = $param["QueryFileFlag"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}

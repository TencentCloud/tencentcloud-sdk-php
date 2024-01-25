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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordList请求参数结构体
 *
 * @method string getScriptId() 获取脚本文件id
 * @method void setScriptId(string $ScriptId) 设置脚本文件id
 * @method integer getPageIndex() 获取分页索引
 * @method void setPageIndex(integer $PageIndex) 设置分页索引
 * @method integer getPageSize() 获取单页大小
 * @method void setPageSize(integer $PageSize) 设置单页大小
 * @method string getScriptType() 获取脚本类型
 * @method void setScriptType(string $ScriptType) 设置脚本类型
 * @method string getSqlStatement() 获取sql语句
 * @method void setSqlStatement(string $SqlStatement) 设置sql语句
 * @method integer getStartTime() 获取开始时间(毫秒)
 * @method void setStartTime(integer $StartTime) 设置开始时间(毫秒)
 * @method integer getEndTime() 获取结束时间(毫秒)
 * @method void setEndTime(integer $EndTime) 设置结束时间(毫秒)
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method boolean getIsOnlyMyselfDebug() 获取是否只查看用户自身的调试记录,默认或者不填都为true，填为false的时候会显示其他用户的此脚本的调试记录
 * @method void setIsOnlyMyselfDebug(boolean $IsOnlyMyselfDebug) 设置是否只查看用户自身的调试记录,默认或者不填都为true，填为false的时候会显示其他用户的此脚本的调试记录
 */
class DescribeRecordListRequest extends AbstractModel
{
    /**
     * @var string 脚本文件id
     */
    public $ScriptId;

    /**
     * @var integer 分页索引
     */
    public $PageIndex;

    /**
     * @var integer 单页大小
     */
    public $PageSize;

    /**
     * @var string 脚本类型
     */
    public $ScriptType;

    /**
     * @var string sql语句
     */
    public $SqlStatement;

    /**
     * @var integer 开始时间(毫秒)
     */
    public $StartTime;

    /**
     * @var integer 结束时间(毫秒)
     */
    public $EndTime;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var boolean 是否只查看用户自身的调试记录,默认或者不填都为true，填为false的时候会显示其他用户的此脚本的调试记录
     */
    public $IsOnlyMyselfDebug;

    /**
     * @param string $ScriptId 脚本文件id
     * @param integer $PageIndex 分页索引
     * @param integer $PageSize 单页大小
     * @param string $ScriptType 脚本类型
     * @param string $SqlStatement sql语句
     * @param integer $StartTime 开始时间(毫秒)
     * @param integer $EndTime 结束时间(毫秒)
     * @param string $Status 任务状态
     * @param boolean $IsOnlyMyselfDebug 是否只查看用户自身的调试记录,默认或者不填都为true，填为false的时候会显示其他用户的此脚本的调试记录
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
        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ScriptType",$param) and $param["ScriptType"] !== null) {
            $this->ScriptType = $param["ScriptType"];
        }

        if (array_key_exists("SqlStatement",$param) and $param["SqlStatement"] !== null) {
            $this->SqlStatement = $param["SqlStatement"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsOnlyMyselfDebug",$param) and $param["IsOnlyMyselfDebug"] !== null) {
            $this->IsOnlyMyselfDebug = $param["IsOnlyMyselfDebug"];
        }
    }
}

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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoginEvent请求参数结构体
 *
 * @method string getUserName() 获取用户名，如果不包含其他条件时对user_name or real_name两个字段模糊查询
 * @method void setUserName(string $UserName) 设置用户名，如果不包含其他条件时对user_name or real_name两个字段模糊查询
 * @method string getRealName() 获取姓名，模糊查询
 * @method void setRealName(string $RealName) 设置姓名，模糊查询
 * @method string getStartTime() 获取查询时间范围，起始时间
 * @method void setStartTime(string $StartTime) 设置查询时间范围，起始时间
 * @method string getEndTime() 获取查询时间范围，结束时间
 * @method void setEndTime(string $EndTime) 设置查询时间范围，结束时间
 * @method string getSourceIp() 获取来源IP，模糊查询
 * @method void setSourceIp(string $SourceIp) 设置来源IP，模糊查询
 * @method integer getEntry() 获取登录入口：1-字符界面,2-图形界面，3-web页面, 4-API
 * @method void setEntry(integer $Entry) 设置登录入口：1-字符界面,2-图形界面，3-web页面, 4-API
 * @method integer getResult() 获取操作结果，1-成功，2-失败
 * @method void setResult(integer $Result) 设置操作结果，1-成功，2-失败
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 * @method integer getLimit() 获取分页每页记录数，默认20
 * @method void setLimit(integer $Limit) 设置分页每页记录数，默认20
 */
class DescribeLoginEventRequest extends AbstractModel
{
    /**
     * @var string 用户名，如果不包含其他条件时对user_name or real_name两个字段模糊查询
     */
    public $UserName;

    /**
     * @var string 姓名，模糊查询
     */
    public $RealName;

    /**
     * @var string 查询时间范围，起始时间
     */
    public $StartTime;

    /**
     * @var string 查询时间范围，结束时间
     */
    public $EndTime;

    /**
     * @var string 来源IP，模糊查询
     */
    public $SourceIp;

    /**
     * @var integer 登录入口：1-字符界面,2-图形界面，3-web页面, 4-API
     */
    public $Entry;

    /**
     * @var integer 操作结果，1-成功，2-失败
     */
    public $Result;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @var integer 分页每页记录数，默认20
     */
    public $Limit;

    /**
     * @param string $UserName 用户名，如果不包含其他条件时对user_name or real_name两个字段模糊查询
     * @param string $RealName 姓名，模糊查询
     * @param string $StartTime 查询时间范围，起始时间
     * @param string $EndTime 查询时间范围，结束时间
     * @param string $SourceIp 来源IP，模糊查询
     * @param integer $Entry 登录入口：1-字符界面,2-图形界面，3-web页面, 4-API
     * @param integer $Result 操作结果，1-成功，2-失败
     * @param integer $Offset 分页偏移位置，默认值为0
     * @param integer $Limit 分页每页记录数，默认20
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("Entry",$param) and $param["Entry"] !== null) {
            $this->Entry = $param["Entry"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

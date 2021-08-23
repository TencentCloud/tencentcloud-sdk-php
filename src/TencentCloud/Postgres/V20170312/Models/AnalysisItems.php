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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢查询分析接口返回的分析详情，按照参数抽象之后进行分类
 *
 * @method string getDatabaseName() 获取慢SQL查询的数据库名
 * @method void setDatabaseName(string $DatabaseName) 设置慢SQL查询的数据库名
 * @method string getUserName() 获取慢SQL执行的用户名
 * @method void setUserName(string $UserName) 设置慢SQL执行的用户名
 * @method string getNormalQuery() 获取抽象参数之后的慢SQL
 * @method void setNormalQuery(string $NormalQuery) 设置抽象参数之后的慢SQL
 * @method string getClientAddr() 获取慢SQL执行的客户端地址
 * @method void setClientAddr(string $ClientAddr) 设置慢SQL执行的客户端地址
 * @method integer getCallNum() 获取在选定时间范围内慢SQL语句执行的次数
 * @method void setCallNum(integer $CallNum) 设置在选定时间范围内慢SQL语句执行的次数
 * @method float getCallPercent() 获取在选定时间范围内，慢SQL语句执行的次数占所有慢SQL的比例（小数返回）
 * @method void setCallPercent(float $CallPercent) 设置在选定时间范围内，慢SQL语句执行的次数占所有慢SQL的比例（小数返回）
 * @method float getCostTime() 获取在选定时间范围内，慢SQL执行的总时间
 * @method void setCostTime(float $CostTime) 设置在选定时间范围内，慢SQL执行的总时间
 * @method float getCostPercent() 获取在选定时间范围内，慢SQL语句执行的总时间占所有慢SQL的比例（小数返回）
 * @method void setCostPercent(float $CostPercent) 设置在选定时间范围内，慢SQL语句执行的总时间占所有慢SQL的比例（小数返回）
 * @method float getMinCostTime() 获取在选定时间范围内，慢SQL语句执行的耗时最短的时间（单位：ms）
 * @method void setMinCostTime(float $MinCostTime) 设置在选定时间范围内，慢SQL语句执行的耗时最短的时间（单位：ms）
 * @method float getMaxCostTime() 获取在选定时间范围内，慢SQL语句执行的耗时最长的时间（单位：ms）
 * @method void setMaxCostTime(float $MaxCostTime) 设置在选定时间范围内，慢SQL语句执行的耗时最长的时间（单位：ms）
 * @method float getAvgCostTime() 获取在选定时间范围内，慢SQL语句执行的耗时平均时间（单位：ms）
 * @method void setAvgCostTime(float $AvgCostTime) 设置在选定时间范围内，慢SQL语句执行的耗时平均时间（单位：ms）
 * @method string getFirstTime() 获取在选定时间范围内，慢SQL第一条开始执行的时间戳
 * @method void setFirstTime(string $FirstTime) 设置在选定时间范围内，慢SQL第一条开始执行的时间戳
 * @method string getLastTime() 获取在选定时间范围内，慢SQL最后一条开始执行的时间戳
 * @method void setLastTime(string $LastTime) 设置在选定时间范围内，慢SQL最后一条开始执行的时间戳
 */
class AnalysisItems extends AbstractModel
{
    /**
     * @var string 慢SQL查询的数据库名
     */
    public $DatabaseName;

    /**
     * @var string 慢SQL执行的用户名
     */
    public $UserName;

    /**
     * @var string 抽象参数之后的慢SQL
     */
    public $NormalQuery;

    /**
     * @var string 慢SQL执行的客户端地址
     */
    public $ClientAddr;

    /**
     * @var integer 在选定时间范围内慢SQL语句执行的次数
     */
    public $CallNum;

    /**
     * @var float 在选定时间范围内，慢SQL语句执行的次数占所有慢SQL的比例（小数返回）
     */
    public $CallPercent;

    /**
     * @var float 在选定时间范围内，慢SQL执行的总时间
     */
    public $CostTime;

    /**
     * @var float 在选定时间范围内，慢SQL语句执行的总时间占所有慢SQL的比例（小数返回）
     */
    public $CostPercent;

    /**
     * @var float 在选定时间范围内，慢SQL语句执行的耗时最短的时间（单位：ms）
     */
    public $MinCostTime;

    /**
     * @var float 在选定时间范围内，慢SQL语句执行的耗时最长的时间（单位：ms）
     */
    public $MaxCostTime;

    /**
     * @var float 在选定时间范围内，慢SQL语句执行的耗时平均时间（单位：ms）
     */
    public $AvgCostTime;

    /**
     * @var string 在选定时间范围内，慢SQL第一条开始执行的时间戳
     */
    public $FirstTime;

    /**
     * @var string 在选定时间范围内，慢SQL最后一条开始执行的时间戳
     */
    public $LastTime;

    /**
     * @param string $DatabaseName 慢SQL查询的数据库名
     * @param string $UserName 慢SQL执行的用户名
     * @param string $NormalQuery 抽象参数之后的慢SQL
     * @param string $ClientAddr 慢SQL执行的客户端地址
     * @param integer $CallNum 在选定时间范围内慢SQL语句执行的次数
     * @param float $CallPercent 在选定时间范围内，慢SQL语句执行的次数占所有慢SQL的比例（小数返回）
     * @param float $CostTime 在选定时间范围内，慢SQL执行的总时间
     * @param float $CostPercent 在选定时间范围内，慢SQL语句执行的总时间占所有慢SQL的比例（小数返回）
     * @param float $MinCostTime 在选定时间范围内，慢SQL语句执行的耗时最短的时间（单位：ms）
     * @param float $MaxCostTime 在选定时间范围内，慢SQL语句执行的耗时最长的时间（单位：ms）
     * @param float $AvgCostTime 在选定时间范围内，慢SQL语句执行的耗时平均时间（单位：ms）
     * @param string $FirstTime 在选定时间范围内，慢SQL第一条开始执行的时间戳
     * @param string $LastTime 在选定时间范围内，慢SQL最后一条开始执行的时间戳
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("NormalQuery",$param) and $param["NormalQuery"] !== null) {
            $this->NormalQuery = $param["NormalQuery"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("CallNum",$param) and $param["CallNum"] !== null) {
            $this->CallNum = $param["CallNum"];
        }

        if (array_key_exists("CallPercent",$param) and $param["CallPercent"] !== null) {
            $this->CallPercent = $param["CallPercent"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("CostPercent",$param) and $param["CostPercent"] !== null) {
            $this->CostPercent = $param["CostPercent"];
        }

        if (array_key_exists("MinCostTime",$param) and $param["MinCostTime"] !== null) {
            $this->MinCostTime = $param["MinCostTime"];
        }

        if (array_key_exists("MaxCostTime",$param) and $param["MaxCostTime"] !== null) {
            $this->MaxCostTime = $param["MaxCostTime"];
        }

        if (array_key_exists("AvgCostTime",$param) and $param["AvgCostTime"] !== null) {
            $this->AvgCostTime = $param["AvgCostTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }
    }
}

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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢查询项目信息
 *
 * @method integer getCallTimes() 获取调用次数
 * @method void setCallTimes(integer $CallTimes) 设置调用次数
 * @method integer getSharedReadBlocks() 获取读共享内存块数
 * @method void setSharedReadBlocks(integer $SharedReadBlocks) 设置读共享内存块数
 * @method integer getSharedWriteBlocks() 获取写共享内存块数
 * @method void setSharedWriteBlocks(integer $SharedWriteBlocks) 设置写共享内存块数
 * @method string getDatabaseName() 获取数据库
 * @method void setDatabaseName(string $DatabaseName) 设置数据库
 * @method string getNormalQuery() 获取脱敏后语句
 * @method void setNormalQuery(string $NormalQuery) 设置脱敏后语句
 * @method string getMaxElapsedQuery() 获取执行时间最长的语句
 * @method void setMaxElapsedQuery(string $MaxElapsedQuery) 设置执行时间最长的语句
 * @method float getCostTime() 获取花费总时间
 * @method void setCostTime(float $CostTime) 设置花费总时间
 * @method string getClientIp() 获取客户端ip
 * @method void setClientIp(string $ClientIp) 设置客户端ip
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method float getTotalCallTimesPercent() 获取总次数占比
 * @method void setTotalCallTimesPercent(float $TotalCallTimesPercent) 设置总次数占比
 * @method float getTotalCostTimePercent() 获取总耗时占比
 * @method void setTotalCostTimePercent(float $TotalCostTimePercent) 设置总耗时占比
 * @method float getMinCostTime() 获取花费最小时间
 * @method void setMinCostTime(float $MinCostTime) 设置花费最小时间
 * @method float getMaxCostTime() 获取花费最大时间
 * @method void setMaxCostTime(float $MaxCostTime) 设置花费最大时间
 * @method string getFirstTime() 获取最早一条时间
 * @method void setFirstTime(string $FirstTime) 设置最早一条时间
 * @method string getLastTime() 获取最晚一条时间
 * @method void setLastTime(string $LastTime) 设置最晚一条时间
 * @method float getReadCostTime() 获取读io总耗时
 * @method void setReadCostTime(float $ReadCostTime) 设置读io总耗时
 * @method float getWriteCostTime() 获取写io总耗时
 * @method void setWriteCostTime(float $WriteCostTime) 设置写io总耗时
 */
class NormQueryItem extends AbstractModel
{
    /**
     * @var integer 调用次数
     */
    public $CallTimes;

    /**
     * @var integer 读共享内存块数
     */
    public $SharedReadBlocks;

    /**
     * @var integer 写共享内存块数
     */
    public $SharedWriteBlocks;

    /**
     * @var string 数据库
     */
    public $DatabaseName;

    /**
     * @var string 脱敏后语句
     */
    public $NormalQuery;

    /**
     * @var string 执行时间最长的语句
     */
    public $MaxElapsedQuery;

    /**
     * @var float 花费总时间
     */
    public $CostTime;

    /**
     * @var string 客户端ip
     */
    public $ClientIp;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var float 总次数占比
     */
    public $TotalCallTimesPercent;

    /**
     * @var float 总耗时占比
     */
    public $TotalCostTimePercent;

    /**
     * @var float 花费最小时间
     */
    public $MinCostTime;

    /**
     * @var float 花费最大时间
     */
    public $MaxCostTime;

    /**
     * @var string 最早一条时间
     */
    public $FirstTime;

    /**
     * @var string 最晚一条时间
     */
    public $LastTime;

    /**
     * @var float 读io总耗时
     */
    public $ReadCostTime;

    /**
     * @var float 写io总耗时
     */
    public $WriteCostTime;

    /**
     * @param integer $CallTimes 调用次数
     * @param integer $SharedReadBlocks 读共享内存块数
     * @param integer $SharedWriteBlocks 写共享内存块数
     * @param string $DatabaseName 数据库
     * @param string $NormalQuery 脱敏后语句
     * @param string $MaxElapsedQuery 执行时间最长的语句
     * @param float $CostTime 花费总时间
     * @param string $ClientIp 客户端ip
     * @param string $UserName 用户名
     * @param float $TotalCallTimesPercent 总次数占比
     * @param float $TotalCostTimePercent 总耗时占比
     * @param float $MinCostTime 花费最小时间
     * @param float $MaxCostTime 花费最大时间
     * @param string $FirstTime 最早一条时间
     * @param string $LastTime 最晚一条时间
     * @param float $ReadCostTime 读io总耗时
     * @param float $WriteCostTime 写io总耗时
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
        if (array_key_exists("CallTimes",$param) and $param["CallTimes"] !== null) {
            $this->CallTimes = $param["CallTimes"];
        }

        if (array_key_exists("SharedReadBlocks",$param) and $param["SharedReadBlocks"] !== null) {
            $this->SharedReadBlocks = $param["SharedReadBlocks"];
        }

        if (array_key_exists("SharedWriteBlocks",$param) and $param["SharedWriteBlocks"] !== null) {
            $this->SharedWriteBlocks = $param["SharedWriteBlocks"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("NormalQuery",$param) and $param["NormalQuery"] !== null) {
            $this->NormalQuery = $param["NormalQuery"];
        }

        if (array_key_exists("MaxElapsedQuery",$param) and $param["MaxElapsedQuery"] !== null) {
            $this->MaxElapsedQuery = $param["MaxElapsedQuery"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("TotalCallTimesPercent",$param) and $param["TotalCallTimesPercent"] !== null) {
            $this->TotalCallTimesPercent = $param["TotalCallTimesPercent"];
        }

        if (array_key_exists("TotalCostTimePercent",$param) and $param["TotalCostTimePercent"] !== null) {
            $this->TotalCostTimePercent = $param["TotalCostTimePercent"];
        }

        if (array_key_exists("MinCostTime",$param) and $param["MinCostTime"] !== null) {
            $this->MinCostTime = $param["MinCostTime"];
        }

        if (array_key_exists("MaxCostTime",$param) and $param["MaxCostTime"] !== null) {
            $this->MaxCostTime = $param["MaxCostTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("ReadCostTime",$param) and $param["ReadCostTime"] !== null) {
            $this->ReadCostTime = $param["ReadCostTime"];
        }

        if (array_key_exists("WriteCostTime",$param) and $param["WriteCostTime"] !== null) {
            $this->WriteCostTime = $param["WriteCostTime"];
        }
    }
}

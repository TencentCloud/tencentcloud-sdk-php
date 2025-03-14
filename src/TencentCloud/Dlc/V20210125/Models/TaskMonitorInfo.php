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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务监控信息
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getHouseName() 获取引擎名称
 * @method void setHouseName(string $HouseName) 设置引擎名称
 * @method string getQuerySQL() 获取sql语句
 * @method void setQuerySQL(string $QuerySQL) 设置sql语句
 * @method string getCreateTime() 获取任务时间
 * @method void setCreateTime(string $CreateTime) 设置任务时间
 * @method string getUsedTime() 获取执行时间
 * @method void setUsedTime(string $UsedTime) 设置执行时间
 * @method string getDataAmount() 获取数据扫描量
 * @method void setDataAmount(string $DataAmount) 设置数据扫描量
 * @method string getQueryStats() 获取指标信息
 * @method void setQueryStats(string $QueryStats) 设置指标信息
 */
class TaskMonitorInfo extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 引擎名称
     */
    public $HouseName;

    /**
     * @var string sql语句
     */
    public $QuerySQL;

    /**
     * @var string 任务时间
     */
    public $CreateTime;

    /**
     * @var string 执行时间
     */
    public $UsedTime;

    /**
     * @var string 数据扫描量
     */
    public $DataAmount;

    /**
     * @var string 指标信息
     */
    public $QueryStats;

    /**
     * @param string $TaskId 任务id
     * @param string $HouseName 引擎名称
     * @param string $QuerySQL sql语句
     * @param string $CreateTime 任务时间
     * @param string $UsedTime 执行时间
     * @param string $DataAmount 数据扫描量
     * @param string $QueryStats 指标信息
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

        if (array_key_exists("HouseName",$param) and $param["HouseName"] !== null) {
            $this->HouseName = $param["HouseName"];
        }

        if (array_key_exists("QuerySQL",$param) and $param["QuerySQL"] !== null) {
            $this->QuerySQL = $param["QuerySQL"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UsedTime",$param) and $param["UsedTime"] !== null) {
            $this->UsedTime = $param["UsedTime"];
        }

        if (array_key_exists("DataAmount",$param) and $param["DataAmount"] !== null) {
            $this->DataAmount = $param["DataAmount"];
        }

        if (array_key_exists("QueryStats",$param) and $param["QueryStats"] !== null) {
            $this->QueryStats = $param["QueryStats"];
        }
    }
}

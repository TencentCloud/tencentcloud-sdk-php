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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端用户登录新增统计
 *
 * @method string getStatisticalType() 获取统计类型 新增NEWUSER 和登录 LOGIN
 * @method void setStatisticalType(string $StatisticalType) 设置统计类型 新增NEWUSER 和登录 LOGIN
 * @method string getStatisticalCycle() 获取统计周期：日DAY，周WEEK，月MONTH
 * @method void setStatisticalCycle(string $StatisticalCycle) 设置统计周期：日DAY，周WEEK，月MONTH
 * @method integer getCount() 获取统计总量
 * @method void setCount(integer $Count) 设置统计总量
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class LoginStatistic extends AbstractModel
{
    /**
     * @var string 统计类型 新增NEWUSER 和登录 LOGIN
     */
    public $StatisticalType;

    /**
     * @var string 统计周期：日DAY，周WEEK，月MONTH
     */
    public $StatisticalCycle;

    /**
     * @var integer 统计总量
     */
    public $Count;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $StatisticalType 统计类型 新增NEWUSER 和登录 LOGIN
     * @param string $StatisticalCycle 统计周期：日DAY，周WEEK，月MONTH
     * @param integer $Count 统计总量
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("StatisticalType",$param) and $param["StatisticalType"] !== null) {
            $this->StatisticalType = $param["StatisticalType"];
        }

        if (array_key_exists("StatisticalCycle",$param) and $param["StatisticalCycle"] !== null) {
            $this->StatisticalCycle = $param["StatisticalCycle"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

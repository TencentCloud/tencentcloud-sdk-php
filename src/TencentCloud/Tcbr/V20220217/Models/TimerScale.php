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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时扩缩容配置
 *
 * @method string getCycleType() 获取循环类型
 * @method void setCycleType(string $CycleType) 设置循环类型
 * @method string getStartDate() 获取循环起始
 * @method void setStartDate(string $StartDate) 设置循环起始
 * @method string getEndDate() 获取循环结束
 * @method void setEndDate(string $EndDate) 设置循环结束
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getReplicaNum() 获取副本个数
 * @method void setReplicaNum(integer $ReplicaNum) 设置副本个数
 */
class TimerScale extends AbstractModel
{
    /**
     * @var string 循环类型
     */
    public $CycleType;

    /**
     * @var string 循环起始
     */
    public $StartDate;

    /**
     * @var string 循环结束
     */
    public $EndDate;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 副本个数
     */
    public $ReplicaNum;

    /**
     * @param string $CycleType 循环类型
     * @param string $StartDate 循环起始
     * @param string $EndDate 循环结束
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
     * @param integer $ReplicaNum 副本个数
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
        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }
    }
}

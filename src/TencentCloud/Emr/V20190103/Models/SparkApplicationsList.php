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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * spark任务列表
 *
 * @method string getID() 获取应用id
 * @method void setID(string $ID) 设置应用id
 * @method string getName() 获取应用名称
 * @method void setName(string $Name) 设置应用名称
 * @method string getUser() 获取用户
 * @method void setUser(string $User) 设置用户
 * @method integer getStartTime() 获取起始时间
 * @method void setStartTime(integer $StartTime) 设置起始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method integer getDuration() 获取持续时间
 * @method void setDuration(integer $Duration) 设置持续时间
 * @method string getState() 获取状态
 * @method void setState(string $State) 设置状态
 * @method string getApplicationType() 获取类型
 * @method void setApplicationType(string $ApplicationType) 设置类型
 * @method integer getCoreSeconds() 获取核数*秒
 * @method void setCoreSeconds(integer $CoreSeconds) 设置核数*秒
 * @method string getMemorySeconds() 获取内存MB*秒
 * @method void setMemorySeconds(string $MemorySeconds) 设置内存MB*秒
 * @method string getInsight() 获取洞察结果
 * @method void setInsight(string $Insight) 设置洞察结果
 */
class SparkApplicationsList extends AbstractModel
{
    /**
     * @var string 应用id
     */
    public $ID;

    /**
     * @var string 应用名称
     */
    public $Name;

    /**
     * @var string 用户
     */
    public $User;

    /**
     * @var integer 起始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var integer 持续时间
     */
    public $Duration;

    /**
     * @var string 状态
     */
    public $State;

    /**
     * @var string 类型
     */
    public $ApplicationType;

    /**
     * @var integer 核数*秒
     */
    public $CoreSeconds;

    /**
     * @var string 内存MB*秒
     */
    public $MemorySeconds;

    /**
     * @var string 洞察结果
     */
    public $Insight;

    /**
     * @param string $ID 应用id
     * @param string $Name 应用名称
     * @param string $User 用户
     * @param integer $StartTime 起始时间
     * @param integer $EndTime 结束时间
     * @param integer $Duration 持续时间
     * @param string $State 状态
     * @param string $ApplicationType 类型
     * @param integer $CoreSeconds 核数*秒
     * @param string $MemorySeconds 内存MB*秒
     * @param string $Insight 洞察结果
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("CoreSeconds",$param) and $param["CoreSeconds"] !== null) {
            $this->CoreSeconds = $param["CoreSeconds"];
        }

        if (array_key_exists("MemorySeconds",$param) and $param["MemorySeconds"] !== null) {
            $this->MemorySeconds = $param["MemorySeconds"];
        }

        if (array_key_exists("Insight",$param) and $param["Insight"] !== null) {
            $this->Insight = $param["Insight"];
        }
    }
}

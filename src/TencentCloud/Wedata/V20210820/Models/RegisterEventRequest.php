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
 * RegisterEvent请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getName() 获取事件名称，支持英文、数字和下划线，最长20个字符, 不能以数字下划线开头。
 * @method void setName(string $Name) 设置事件名称，支持英文、数字和下划线，最长20个字符, 不能以数字下划线开头。
 * @method string getEventSubType() 获取事件分割类型，周期类型: DAY，HOUR，MIN，SECOND
 * @method void setEventSubType(string $EventSubType) 设置事件分割类型，周期类型: DAY，HOUR，MIN，SECOND
 * @method string getEventBroadcastType() 获取广播：BROADCAST,单播：SINGLE
 * @method void setEventBroadcastType(string $EventBroadcastType) 设置广播：BROADCAST,单播：SINGLE
 * @method string getTimeUnit() 获取周期类型为天和小时为HOURS ，周期类型为分钟 ：MINUTES,周期类型为秒：SECONDS
 * @method void setTimeUnit(string $TimeUnit) 设置周期类型为天和小时为HOURS ，周期类型为分钟 ：MINUTES,周期类型为秒：SECONDS
 * @method string getOwner() 获取TBDS 事件所属人
 * @method void setOwner(string $Owner) 设置TBDS 事件所属人
 * @method string getEventType() 获取事件类型，默认值：TIME_SERIES
 * @method void setEventType(string $EventType) 设置事件类型，默认值：TIME_SERIES
 * @method string getDimensionFormat() 获取对应day： yyyyMMdd，对应HOUR：yyyyMMddHH，对应MIN：yyyyMMddHHmm，对应SECOND：yyyyMMddHHmmss
 * @method void setDimensionFormat(string $DimensionFormat) 设置对应day： yyyyMMdd，对应HOUR：yyyyMMddHH，对应MIN：yyyyMMddHHmm，对应SECOND：yyyyMMddHHmmss
 * @method integer getTimeToLive() 获取存活时间
 * @method void setTimeToLive(integer $TimeToLive) 设置存活时间
 * @method string getDescription() 获取事件描述
 * @method void setDescription(string $Description) 设置事件描述
 */
class RegisterEventRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 事件名称，支持英文、数字和下划线，最长20个字符, 不能以数字下划线开头。
     */
    public $Name;

    /**
     * @var string 事件分割类型，周期类型: DAY，HOUR，MIN，SECOND
     */
    public $EventSubType;

    /**
     * @var string 广播：BROADCAST,单播：SINGLE
     */
    public $EventBroadcastType;

    /**
     * @var string 周期类型为天和小时为HOURS ，周期类型为分钟 ：MINUTES,周期类型为秒：SECONDS
     */
    public $TimeUnit;

    /**
     * @var string TBDS 事件所属人
     */
    public $Owner;

    /**
     * @var string 事件类型，默认值：TIME_SERIES
     */
    public $EventType;

    /**
     * @var string 对应day： yyyyMMdd，对应HOUR：yyyyMMddHH，对应MIN：yyyyMMddHHmm，对应SECOND：yyyyMMddHHmmss
     */
    public $DimensionFormat;

    /**
     * @var integer 存活时间
     */
    public $TimeToLive;

    /**
     * @var string 事件描述
     */
    public $Description;

    /**
     * @param string $ProjectId 项目Id
     * @param string $Name 事件名称，支持英文、数字和下划线，最长20个字符, 不能以数字下划线开头。
     * @param string $EventSubType 事件分割类型，周期类型: DAY，HOUR，MIN，SECOND
     * @param string $EventBroadcastType 广播：BROADCAST,单播：SINGLE
     * @param string $TimeUnit 周期类型为天和小时为HOURS ，周期类型为分钟 ：MINUTES,周期类型为秒：SECONDS
     * @param string $Owner TBDS 事件所属人
     * @param string $EventType 事件类型，默认值：TIME_SERIES
     * @param string $DimensionFormat 对应day： yyyyMMdd，对应HOUR：yyyyMMddHH，对应MIN：yyyyMMddHHmm，对应SECOND：yyyyMMddHHmmss
     * @param integer $TimeToLive 存活时间
     * @param string $Description 事件描述
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("DimensionFormat",$param) and $param["DimensionFormat"] !== null) {
            $this->DimensionFormat = $param["DimensionFormat"];
        }

        if (array_key_exists("TimeToLive",$param) and $param["TimeToLive"] !== null) {
            $this->TimeToLive = $param["TimeToLive"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

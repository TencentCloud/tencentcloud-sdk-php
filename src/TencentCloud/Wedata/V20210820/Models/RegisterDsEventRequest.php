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
 * RegisterDsEvent请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getName() 获取事件名称
 * @method void setName(string $Name) 设置事件名称
 * @method string getEventSubType() 获取事件周期类型 1、分钟：MIN    2、小时 ：HOUR    3、天：DAY	
 * @method void setEventSubType(string $EventSubType) 设置事件周期类型 1、分钟：MIN    2、小时 ：HOUR    3、天：DAY	
 * @method string getTimeToLive() 获取事件存活时间，值为大于0的整数
 * @method void setTimeToLive(string $TimeToLive) 设置事件存活时间，值为大于0的整数
 * @method string getTimeUnit() 获取事件存活时间单位	1、天：DAYS    2、分钟：MINUTES
 * @method void setTimeUnit(string $TimeUnit) 设置事件存活时间单位	1、天：DAYS    2、分钟：MINUTES
 * @method string getOwner() 获取事件所属人，账号昵称	
 * @method void setOwner(string $Owner) 设置事件所属人，账号昵称	
 * @method string getDescription() 获取事件描述
 * @method void setDescription(string $Description) 设置事件描述
 * @method string getEventType() 获取事件类型GENERAL、TIME_SERIES
 * @method void setEventType(string $EventType) 设置事件类型GENERAL、TIME_SERIES
 * @method string getEventBroadcastType() 获取事件广播类型SINGLE、BROADCAST	
 * @method void setEventBroadcastType(string $EventBroadcastType) 设置事件广播类型SINGLE、BROADCAST	
 * @method string getDimensionFormat() 获取时间格式	
 * @method void setDimensionFormat(string $DimensionFormat) 设置时间格式	
 */
class RegisterDsEventRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 事件名称
     */
    public $Name;

    /**
     * @var string 事件周期类型 1、分钟：MIN    2、小时 ：HOUR    3、天：DAY	
     */
    public $EventSubType;

    /**
     * @var string 事件存活时间，值为大于0的整数
     */
    public $TimeToLive;

    /**
     * @var string 事件存活时间单位	1、天：DAYS    2、分钟：MINUTES
     */
    public $TimeUnit;

    /**
     * @var string 事件所属人，账号昵称	
     */
    public $Owner;

    /**
     * @var string 事件描述
     */
    public $Description;

    /**
     * @var string 事件类型GENERAL、TIME_SERIES
     * @deprecated
     */
    public $EventType;

    /**
     * @var string 事件广播类型SINGLE、BROADCAST	
     * @deprecated
     */
    public $EventBroadcastType;

    /**
     * @var string 时间格式	
     * @deprecated
     */
    public $DimensionFormat;

    /**
     * @param string $ProjectId 项目ID
     * @param string $Name 事件名称
     * @param string $EventSubType 事件周期类型 1、分钟：MIN    2、小时 ：HOUR    3、天：DAY	
     * @param string $TimeToLive 事件存活时间，值为大于0的整数
     * @param string $TimeUnit 事件存活时间单位	1、天：DAYS    2、分钟：MINUTES
     * @param string $Owner 事件所属人，账号昵称	
     * @param string $Description 事件描述
     * @param string $EventType 事件类型GENERAL、TIME_SERIES
     * @param string $EventBroadcastType 事件广播类型SINGLE、BROADCAST	
     * @param string $DimensionFormat 时间格式	
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

        if (array_key_exists("TimeToLive",$param) and $param["TimeToLive"] !== null) {
            $this->TimeToLive = $param["TimeToLive"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("DimensionFormat",$param) and $param["DimensionFormat"] !== null) {
            $this->DimensionFormat = $param["DimensionFormat"];
        }
    }
}

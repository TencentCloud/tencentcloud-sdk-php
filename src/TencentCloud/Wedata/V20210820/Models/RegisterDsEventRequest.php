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
 * RegisterDsEvent请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getName() 获取事件名称
 * @method void setName(string $Name) 设置事件名称
 * @method string getEventSubType() 获取事件分割类型 SECOND、MIN、HOUR、DAY	
 * @method void setEventSubType(string $EventSubType) 设置事件分割类型 SECOND、MIN、HOUR、DAY	
 * @method string getTimeToLive() 获取存活时间	
 * @method void setTimeToLive(string $TimeToLive) 设置存活时间	
 * @method string getTimeUnit() 获取存活时间单位	
 * @method void setTimeUnit(string $TimeUnit) 设置存活时间单位	
 * @method string getOwner() 获取事件所属人	
 * @method void setOwner(string $Owner) 设置事件所属人	
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
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
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 事件名称
     */
    public $Name;

    /**
     * @var string 事件分割类型 SECOND、MIN、HOUR、DAY	
     */
    public $EventSubType;

    /**
     * @var string 存活时间	
     */
    public $TimeToLive;

    /**
     * @var string 存活时间单位	
     */
    public $TimeUnit;

    /**
     * @var string 事件所属人	
     */
    public $Owner;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 事件类型GENERAL、TIME_SERIES
     */
    public $EventType;

    /**
     * @var string 事件广播类型SINGLE、BROADCAST	
     */
    public $EventBroadcastType;

    /**
     * @var string 时间格式	
     */
    public $DimensionFormat;

    /**
     * @param string $ProjectId 项目id
     * @param string $Name 事件名称
     * @param string $EventSubType 事件分割类型 SECOND、MIN、HOUR、DAY	
     * @param string $TimeToLive 存活时间	
     * @param string $TimeUnit 存活时间单位	
     * @param string $Owner 事件所属人	
     * @param string $Description 描述
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

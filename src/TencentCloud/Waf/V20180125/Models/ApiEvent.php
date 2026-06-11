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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * APi事件列表
 *
 * @method string getEventId() 获取事件id
 * @method void setEventId(string $EventId) 设置事件id
 * @method string getEventType() 获取事件类型
 * @method void setEventType(string $EventType) 设置事件类型
 * @method string getLevel() 获取事件等级，100,200,300对应低中高
 * @method void setLevel(string $Level) 设置事件等级，100,200,300对应低中高
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getMode() 获取处置状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
 * @method void setMode(string $Mode) 设置处置状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
 * @method integer getStartTime() 获取发现时间
 * @method void setStartTime(integer $StartTime) 设置发现时间
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method string getApiName() 获取关联的api
 * @method void setApiName(string $ApiName) 设置关联的api
 * @method string getMethod() 获取请求方式
 * @method void setMethod(string $Method) 设置请求方式
 * @method string getSource() 获取事件来源，custom标识自定义
 * @method void setSource(string $Source) 设置事件来源，custom标识自定义
 */
class ApiEvent extends AbstractModel
{
    /**
     * @var string 事件id
     */
    public $EventId;

    /**
     * @var string 事件类型
     */
    public $EventType;

    /**
     * @var string 事件等级，100,200,300对应低中高
     */
    public $Level;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 处置状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
     */
    public $Mode;

    /**
     * @var integer 发现时间
     */
    public $StartTime;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 关联的api
     */
    public $ApiName;

    /**
     * @var string 请求方式
     */
    public $Method;

    /**
     * @var string 事件来源，custom标识自定义
     */
    public $Source;

    /**
     * @param string $EventId 事件id
     * @param string $EventType 事件类型
     * @param string $Level 事件等级，100,200,300对应低中高
     * @param string $Domain 域名
     * @param string $Mode 处置状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
     * @param integer $StartTime 发现时间
     * @param integer $UpdateTime 更新时间
     * @param string $ApiName 关联的api
     * @param string $Method 请求方式
     * @param string $Source 事件来源，custom标识自定义
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}

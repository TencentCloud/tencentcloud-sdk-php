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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRule返回参数结构体
 *
 * @method string getEventBusId() 获取事件集id
 * @method void setEventBusId(string $EventBusId) 设置事件集id
 * @method string getRuleId() 获取事件规则id
 * @method void setRuleId(string $RuleId) 设置事件规则id
 * @method string getRuleName() 获取事件规则名称
 * @method void setRuleName(string $RuleName) 设置事件规则名称
 * @method string getStatus() 获取事件规则状态
 * @method void setStatus(string $Status) 设置事件规则状态
 * @method boolean getEnable() 获取使能开关
 * @method void setEnable(boolean $Enable) 设置使能开关
 * @method string getDescription() 获取事件规则描述
 * @method void setDescription(string $Description) 设置事件规则描述
 * @method string getEventPattern() 获取事件模式
 * @method void setEventPattern(string $EventPattern) 设置事件模式
 * @method string getAddTime() 获取创建时间
 * @method void setAddTime(string $AddTime) 设置创建时间
 * @method string getModTime() 获取更新时间
 * @method void setModTime(string $ModTime) 设置更新时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetRuleResponse extends AbstractModel
{
    /**
     * @var string 事件集id
     */
    public $EventBusId;

    /**
     * @var string 事件规则id
     */
    public $RuleId;

    /**
     * @var string 事件规则名称
     */
    public $RuleName;

    /**
     * @var string 事件规则状态
     */
    public $Status;

    /**
     * @var boolean 使能开关
     */
    public $Enable;

    /**
     * @var string 事件规则描述
     */
    public $Description;

    /**
     * @var string 事件模式
     */
    public $EventPattern;

    /**
     * @var string 创建时间
     */
    public $AddTime;

    /**
     * @var string 更新时间
     */
    public $ModTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $EventBusId 事件集id
     * @param string $RuleId 事件规则id
     * @param string $RuleName 事件规则名称
     * @param string $Status 事件规则状态
     * @param boolean $Enable 使能开关
     * @param string $Description 事件规则描述
     * @param string $EventPattern 事件模式
     * @param string $AddTime 创建时间
     * @param string $ModTime 更新时间
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EventPattern",$param) and $param["EventPattern"] !== null) {
            $this->EventPattern = $param["EventPattern"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

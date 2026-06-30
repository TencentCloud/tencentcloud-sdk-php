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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRule返回参数结构体
 *
 * @method string getEventBusId() 获取<p>事件集id</p>
 * @method void setEventBusId(string $EventBusId) 设置<p>事件集id</p>
 * @method string getRuleId() 获取<p>事件规则id</p>
 * @method void setRuleId(string $RuleId) 设置<p>事件规则id</p>
 * @method string getRuleName() 获取<p>事件规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>事件规则名称</p>
 * @method string getStatus() 获取<p>事件规则状态</p>
 * @method void setStatus(string $Status) 设置<p>事件规则状态</p>
 * @method boolean getEnable() 获取<p>使能开关</p>
 * @method void setEnable(boolean $Enable) 设置<p>使能开关</p>
 * @method string getDescription() 获取<p>事件规则描述</p>
 * @method void setDescription(string $Description) 设置<p>事件规则描述</p>
 * @method string getEventPattern() 获取<p>事件模式</p>
 * @method void setEventPattern(string $EventPattern) 设置<p>事件模式</p>
 * @method string getAddTime() 获取<p>创建时间</p>
 * @method void setAddTime(string $AddTime) 设置<p>创建时间</p>
 * @method string getModTime() 获取<p>更新时间</p>
 * @method void setModTime(string $ModTime) 设置<p>更新时间</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetRuleResponse extends AbstractModel
{
    /**
     * @var string <p>事件集id</p>
     */
    public $EventBusId;

    /**
     * @var string <p>事件规则id</p>
     */
    public $RuleId;

    /**
     * @var string <p>事件规则名称</p>
     */
    public $RuleName;

    /**
     * @var string <p>事件规则状态</p>
     */
    public $Status;

    /**
     * @var boolean <p>使能开关</p>
     */
    public $Enable;

    /**
     * @var string <p>事件规则描述</p>
     */
    public $Description;

    /**
     * @var string <p>事件模式</p>
     */
    public $EventPattern;

    /**
     * @var string <p>创建时间</p>
     */
    public $AddTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $ModTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $EventBusId <p>事件集id</p>
     * @param string $RuleId <p>事件规则id</p>
     * @param string $RuleName <p>事件规则名称</p>
     * @param string $Status <p>事件规则状态</p>
     * @param boolean $Enable <p>使能开关</p>
     * @param string $Description <p>事件规则描述</p>
     * @param string $EventPattern <p>事件模式</p>
     * @param string $AddTime <p>创建时间</p>
     * @param string $ModTime <p>更新时间</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

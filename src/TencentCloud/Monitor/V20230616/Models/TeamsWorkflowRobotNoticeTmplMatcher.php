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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Microsoft Teams 工作流通知模板的匹配器
 *
 * @method array getMatchingStatus() 获取<p>匹配状态 Invalid; Trigger 告警触发; Recovery 告警恢复</p><p>枚举值：</p><ul><li>Trigger： 告警触发</li><li>Recovery： 告警恢复</li></ul>
 * @method void setMatchingStatus(array $MatchingStatus) 设置<p>匹配状态 Invalid; Trigger 告警触发; Recovery 告警恢复</p><p>枚举值：</p><ul><li>Trigger： 告警触发</li><li>Recovery： 告警恢复</li></ul>
 * @method TeamsWorkflowRobotNoticeTmpl getTemplate() 获取<p>模板配置</p>
 * @method void setTemplate(TeamsWorkflowRobotNoticeTmpl $Template) 设置<p>模板配置</p>
 */
class TeamsWorkflowRobotNoticeTmplMatcher extends AbstractModel
{
    /**
     * @var array <p>匹配状态 Invalid; Trigger 告警触发; Recovery 告警恢复</p><p>枚举值：</p><ul><li>Trigger： 告警触发</li><li>Recovery： 告警恢复</li></ul>
     */
    public $MatchingStatus;

    /**
     * @var TeamsWorkflowRobotNoticeTmpl <p>模板配置</p>
     */
    public $Template;

    /**
     * @param array $MatchingStatus <p>匹配状态 Invalid; Trigger 告警触发; Recovery 告警恢复</p><p>枚举值：</p><ul><li>Trigger： 告警触发</li><li>Recovery： 告警恢复</li></ul>
     * @param TeamsWorkflowRobotNoticeTmpl $Template <p>模板配置</p>
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
        if (array_key_exists("MatchingStatus",$param) and $param["MatchingStatus"] !== null) {
            $this->MatchingStatus = $param["MatchingStatus"];
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new TeamsWorkflowRobotNoticeTmpl();
            $this->Template->deserialize($param["Template"]);
        }
    }
}

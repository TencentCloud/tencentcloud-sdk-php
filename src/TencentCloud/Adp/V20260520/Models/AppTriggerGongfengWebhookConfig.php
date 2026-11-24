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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工蜂 Webhook 来源配置。
 *
 * @method array getEventList() 获取监听的工蜂事件标识，原值传递，1 至 20 个，如 push、merge_request。
 * @method void setEventList(array $EventList) 设置监听的工蜂事件标识，原值传递，1 至 20 个，如 push、merge_request。
 * @method string getProjectId() 获取工蜂项目 ID 或项目路径，不能为空。
 * @method void setProjectId(string $ProjectId) 设置工蜂项目 ID 或项目路径，不能为空。
 * @method array getBranchRuleList() 获取分支规则列表，最多 20 个；空表示全部分支。
 * @method void setBranchRuleList(array $BranchRuleList) 设置分支规则列表，最多 20 个；空表示全部分支。
 * @method array getMRActionList() 获取合并请求动作标识，最多 20 个；监听 merge_request 时必填，如 open、merge。
 * @method void setMRActionList(array $MRActionList) 设置合并请求动作标识，最多 20 个；监听 merge_request 时必填，如 open、merge。
 */
class AppTriggerGongfengWebhookConfig extends AbstractModel
{
    /**
     * @var array 监听的工蜂事件标识，原值传递，1 至 20 个，如 push、merge_request。
     */
    public $EventList;

    /**
     * @var string 工蜂项目 ID 或项目路径，不能为空。
     */
    public $ProjectId;

    /**
     * @var array 分支规则列表，最多 20 个；空表示全部分支。
     */
    public $BranchRuleList;

    /**
     * @var array 合并请求动作标识，最多 20 个；监听 merge_request 时必填，如 open、merge。
     */
    public $MRActionList;

    /**
     * @param array $EventList 监听的工蜂事件标识，原值传递，1 至 20 个，如 push、merge_request。
     * @param string $ProjectId 工蜂项目 ID 或项目路径，不能为空。
     * @param array $BranchRuleList 分支规则列表，最多 20 个；空表示全部分支。
     * @param array $MRActionList 合并请求动作标识，最多 20 个；监听 merge_request 时必填，如 open、merge。
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
        if (array_key_exists("EventList",$param) and $param["EventList"] !== null) {
            $this->EventList = $param["EventList"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("BranchRuleList",$param) and $param["BranchRuleList"] !== null) {
            $this->BranchRuleList = $param["BranchRuleList"];
        }

        if (array_key_exists("MRActionList",$param) and $param["MRActionList"] !== null) {
            $this->MRActionList = $param["MRActionList"];
        }
    }
}

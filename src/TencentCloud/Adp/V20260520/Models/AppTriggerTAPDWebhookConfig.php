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
 * TAPD Webhook 来源配置。
 *
 * @method array getEventList() 获取监听的 TAPD 事件标识，原值传递，1 至 20 个，如 story::create、bug::update。
 * @method void setEventList(array $EventList) 设置监听的 TAPD 事件标识，原值传递，1 至 20 个，如 story::create、bug::update。
 * @method string getProjectId() 获取TAPD 项目 ID，不能为空。
 * @method void setProjectId(string $ProjectId) 设置TAPD 项目 ID，不能为空。
 */
class AppTriggerTAPDWebhookConfig extends AbstractModel
{
    /**
     * @var array 监听的 TAPD 事件标识，原值传递，1 至 20 个，如 story::create、bug::update。
     */
    public $EventList;

    /**
     * @var string TAPD 项目 ID，不能为空。
     */
    public $ProjectId;

    /**
     * @param array $EventList 监听的 TAPD 事件标识，原值传递，1 至 20 个，如 story::create、bug::update。
     * @param string $ProjectId TAPD 项目 ID，不能为空。
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
    }
}

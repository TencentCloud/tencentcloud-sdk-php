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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警规则监控白名单配置
 *
 * @method string getMonitorObjectId() 获取配置白名单的对应的工作流/项目的id
 * @method void setMonitorObjectId(string $MonitorObjectId) 设置配置白名单的对应的工作流/项目的id
 * @method array getTaskIds() 获取白名单任务列表
 * @method void setTaskIds(array $TaskIds) 设置白名单任务列表
 */
class MonitorWhiteTask extends AbstractModel
{
    /**
     * @var string 配置白名单的对应的工作流/项目的id
     */
    public $MonitorObjectId;

    /**
     * @var array 白名单任务列表
     */
    public $TaskIds;

    /**
     * @param string $MonitorObjectId 配置白名单的对应的工作流/项目的id
     * @param array $TaskIds 白名单任务列表
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
        if (array_key_exists("MonitorObjectId",$param) and $param["MonitorObjectId"] !== null) {
            $this->MonitorObjectId = $param["MonitorObjectId"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }
    }
}

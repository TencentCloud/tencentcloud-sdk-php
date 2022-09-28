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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLogTopicTask请求参数结构体
 *
 * @method string getTopicId() 获取待删除的推送任务ID。
 * @method void setTopicId(string $TopicId) 设置待删除的推送任务ID。
 * @method string getLogSetRegion() 获取推送任务所属日志集地域，此字段仅用于CLS推送任务。
 * @method void setLogSetRegion(string $LogSetRegion) 设置推送任务所属日志集地域，此字段仅用于CLS推送任务。
 */
class DeleteLogTopicTaskRequest extends AbstractModel
{
    /**
     * @var string 待删除的推送任务ID。
     */
    public $TopicId;

    /**
     * @var string 推送任务所属日志集地域，此字段仅用于CLS推送任务。
     */
    public $LogSetRegion;

    /**
     * @param string $TopicId 待删除的推送任务ID。
     * @param string $LogSetRegion 推送任务所属日志集地域，此字段仅用于CLS推送任务。
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }
    }
}

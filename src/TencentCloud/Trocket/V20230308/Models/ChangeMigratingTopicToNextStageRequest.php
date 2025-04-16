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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeMigratingTopicToNextStage请求参数结构体
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method array getTopicNameList() 获取主题名称列表
 * @method void setTopicNameList(array $TopicNameList) 设置主题名称列表
 * @method array getNamespaceList() 获取命名空间列表，仅4.x集群有效，与TopicNameList一一对应
 * @method void setNamespaceList(array $NamespaceList) 设置命名空间列表，仅4.x集群有效，与TopicNameList一一对应
 */
class ChangeMigratingTopicToNextStageRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var array 主题名称列表
     */
    public $TopicNameList;

    /**
     * @var array 命名空间列表，仅4.x集群有效，与TopicNameList一一对应
     */
    public $NamespaceList;

    /**
     * @param string $TaskId 任务ID
     * @param array $TopicNameList 主题名称列表
     * @param array $NamespaceList 命名空间列表，仅4.x集群有效，与TopicNameList一一对应
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TopicNameList",$param) and $param["TopicNameList"] !== null) {
            $this->TopicNameList = $param["TopicNameList"];
        }

        if (array_key_exists("NamespaceList",$param) and $param["NamespaceList"] !== null) {
            $this->NamespaceList = $param["NamespaceList"];
        }
    }
}

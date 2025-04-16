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
 * DescribeMigratingGroupStats请求参数结构体
 *
 * @method string getTaskId() 获取迁移任务ID
 * @method void setTaskId(string $TaskId) 设置迁移任务ID
 * @method string getGroupName() 获取消费组名称
 * @method void setGroupName(string $GroupName) 设置消费组名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 */
class DescribeMigratingGroupStatsRequest extends AbstractModel
{
    /**
     * @var string 迁移任务ID
     */
    public $TaskId;

    /**
     * @var string 消费组名称
     */
    public $GroupName;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @param string $TaskId 迁移任务ID
     * @param string $GroupName 消费组名称
     * @param string $Namespace 命名空间
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}

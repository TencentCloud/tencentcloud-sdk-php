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
 * UpdateOpsTriggerTasksOwner请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method array getOwnerIds() 获取负责人UIN
 * @method void setOwnerIds(array $OwnerIds) 设置负责人UIN
 * @method array getTaskIds() 获取将要修改的任务ID集合
 * @method void setTaskIds(array $TaskIds) 设置将要修改的任务ID集合
 */
class UpdateOpsTriggerTasksOwnerRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var array 负责人UIN
     */
    public $OwnerIds;

    /**
     * @var array 将要修改的任务ID集合
     */
    public $TaskIds;

    /**
     * @param string $ProjectId 项目ID
     * @param array $OwnerIds 负责人UIN
     * @param array $TaskIds 将要修改的任务ID集合
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OwnerIds",$param) and $param["OwnerIds"] !== null) {
            $this->OwnerIds = $param["OwnerIds"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }
    }
}

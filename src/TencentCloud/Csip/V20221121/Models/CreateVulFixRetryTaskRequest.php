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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVulFixRetryTask请求参数结构体
 *
 * @method integer getTaskId() 获取<p>需要重试的修复任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>需要重试的修复任务ID</p>
 * @method array getInstanceIds() 获取<p>指定需要重试的主机实例ID列表，不传则对所有失败主机进行重试</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>指定需要重试的主机实例ID列表，不传则对所有失败主机进行重试</p>
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 */
class CreateVulFixRetryTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>需要重试的修复任务ID</p>
     */
    public $TaskId;

    /**
     * @var array <p>指定需要重试的主机实例ID列表，不传则对所有失败主机进行重试</p>
     */
    public $InstanceIds;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @param integer $TaskId <p>需要重试的修复任务ID</p>
     * @param array $InstanceIds <p>指定需要重试的主机实例ID列表，不传则对所有失败主机进行重试</p>
     * @param array $MemberId 集团账号的成员id
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}

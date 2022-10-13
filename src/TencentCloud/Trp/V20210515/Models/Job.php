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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用调度任务
 *
 * @method integer getJobId() 获取调度ID
 * @method void setJobId(integer $JobId) 设置调度ID
 * @method string getStatus() 获取执行状态 init:初始化, pending: 执行中, done: 执行成功, error: 执行失败
 * @method void setStatus(string $Status) 设置执行状态 init:初始化, pending: 执行中, done: 执行成功, error: 执行失败
 */
class Job extends AbstractModel
{
    /**
     * @var integer 调度ID
     */
    public $JobId;

    /**
     * @var string 执行状态 init:初始化, pending: 执行中, done: 执行成功, error: 执行失败
     */
    public $Status;

    /**
     * @param integer $JobId 调度ID
     * @param string $Status 执行状态 init:初始化, pending: 执行中, done: 执行成功, error: 执行失败
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

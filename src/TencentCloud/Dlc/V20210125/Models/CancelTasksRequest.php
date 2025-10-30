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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelTasks请求参数结构体
 *
 * @method array getTaskId() 获取任务Id数组，全局唯一
 * @method void setTaskId(array $TaskId) 设置任务Id数组，全局唯一
 * @method array getConfig() 获取配置信息，key-value数组，对外不可见。key1：AuthorityRole（鉴权角色，默认传SubUin，base64加密，仅在jdbc提交任务时使用）
 * @method void setConfig(array $Config) 设置配置信息，key-value数组，对外不可见。key1：AuthorityRole（鉴权角色，默认传SubUin，base64加密，仅在jdbc提交任务时使用）
 */
class CancelTasksRequest extends AbstractModel
{
    /**
     * @var array 任务Id数组，全局唯一
     */
    public $TaskId;

    /**
     * @var array 配置信息，key-value数组，对外不可见。key1：AuthorityRole（鉴权角色，默认传SubUin，base64加密，仅在jdbc提交任务时使用）
     */
    public $Config;

    /**
     * @param array $TaskId 任务Id数组，全局唯一
     * @param array $Config 配置信息，key-value数组，对外不可见。key1：AuthorityRole（鉴权角色，默认传SubUin，base64加密，仅在jdbc提交任务时使用）
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }
    }
}

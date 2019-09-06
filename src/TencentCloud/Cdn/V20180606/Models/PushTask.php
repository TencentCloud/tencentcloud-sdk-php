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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTaskId() 获取预热任务Id，前十位为时间戳。
 * @method void setTaskId(string $TaskId) 设置预热任务Id，前十位为时间戳。
 * @method string getUrl() 获取预热Url。
 * @method void setUrl(string $Url) 设置预热Url。
 * @method string getStatus() 获取预热任务状态，fail表示失败，done表示成功，process表示预热中。
 * @method void setStatus(string $Status) 设置预热任务状态，fail表示失败，done表示成功，process表示预热中。
 * @method integer getPercent() 获取预热百分比。
 * @method void setPercent(integer $Percent) 设置预热百分比。
 * @method string getCreateTime() 获取预热任务提交时间。
 * @method void setCreateTime(string $CreateTime) 设置预热任务提交时间。
 */

/**
 *预热任务日志详情。
 */
class PushTask extends AbstractModel
{
    /**
     * @var string 预热任务Id，前十位为时间戳。
     */
    public $TaskId;

    /**
     * @var string 预热Url。
     */
    public $Url;

    /**
     * @var string 预热任务状态，fail表示失败，done表示成功，process表示预热中。
     */
    public $Status;

    /**
     * @var integer 预热百分比。
     */
    public $Percent;

    /**
     * @var string 预热任务提交时间。
     */
    public $CreateTime;
    /**
     * @param string $TaskId 预热任务Id，前十位为时间戳。
     * @param string $Url 预热Url。
     * @param string $Status 预热任务状态，fail表示失败，done表示成功，process表示预热中。
     * @param integer $Percent 预热百分比。
     * @param string $CreateTime 预热任务提交时间。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群操作描述
 *
 * @method integer getId() 获取操作名称，例如“create_instance"、“scaleout_instance”等
 * @method void setId(integer $Id) 设置操作名称，例如“create_instance"、“scaleout_instance”等
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method string getAction() 获取操作名称描述，例如“创建”，“修改集群名称”等
 * @method void setAction(string $Action) 设置操作名称描述，例如“创建”，“修改集群名称”等
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getStartTime() 获取操作开始时间
 * @method void setStartTime(string $StartTime) 设置操作开始时间
 * @method string getEndTime() 获取操作结束时间
 * @method void setEndTime(string $EndTime) 设置操作结束时间
 * @method string getContext() 获取操作上下文
 * @method void setContext(string $Context) 设置操作上下文
 * @method string getUpdateTime() 获取操作更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置操作更新时间
 * @method string getUin() 获取操作UIN
 * @method void setUin(string $Uin) 设置操作UIN
 */
class InstanceOperation extends AbstractModel
{
    /**
     * @var integer 操作名称，例如“create_instance"、“scaleout_instance”等
     */
    public $Id;

    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var string 操作名称描述，例如“创建”，“修改集群名称”等
     */
    public $Action;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 操作开始时间
     */
    public $StartTime;

    /**
     * @var string 操作结束时间
     */
    public $EndTime;

    /**
     * @var string 操作上下文
     */
    public $Context;

    /**
     * @var string 操作更新时间
     */
    public $UpdateTime;

    /**
     * @var string 操作UIN
     */
    public $Uin;

    /**
     * @param integer $Id 操作名称，例如“create_instance"、“scaleout_instance”等
     * @param string $InstanceId 集群ID
     * @param string $Action 操作名称描述，例如“创建”，“修改集群名称”等
     * @param integer $Status 状态
     * @param string $StartTime 操作开始时间
     * @param string $EndTime 操作结束时间
     * @param string $Context 操作上下文
     * @param string $UpdateTime 操作更新时间
     * @param string $Uin 操作UIN
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}

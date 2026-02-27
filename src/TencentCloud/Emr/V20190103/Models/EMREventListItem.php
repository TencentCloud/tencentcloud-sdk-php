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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件详情列表
 *
 * @method string getHost() 获取事件受影响ip
 * @method void setHost(string $Host) 设置事件受影响ip
 * @method string getRole() 获取事件受影响的服务角色
 * @method void setRole(string $Role) 设置事件受影响的服务角色
 * @method string getName() 获取事件名称
 * @method void setName(string $Name) 设置事件名称
 * @method string getDetail() 获取事件告警详情
 * @method void setDetail(string $Detail) 设置事件告警详情
 * @method string getCreateTime() 获取事件发生时间
 * @method void setCreateTime(string $CreateTime) 设置事件发生时间
 */
class EMREventListItem extends AbstractModel
{
    /**
     * @var string 事件受影响ip
     */
    public $Host;

    /**
     * @var string 事件受影响的服务角色
     */
    public $Role;

    /**
     * @var string 事件名称
     */
    public $Name;

    /**
     * @var string 事件告警详情
     */
    public $Detail;

    /**
     * @var string 事件发生时间
     */
    public $CreateTime;

    /**
     * @param string $Host 事件受影响ip
     * @param string $Role 事件受影响的服务角色
     * @param string $Name 事件名称
     * @param string $Detail 事件告警详情
     * @param string $CreateTime 事件发生时间
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

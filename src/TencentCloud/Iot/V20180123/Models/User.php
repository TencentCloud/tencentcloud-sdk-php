<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getAppId() 获取app_id
 * @method void setAppId(integer $AppId) 设置app_id
 * @method integer getArea() 获取用户类型（1：国内，2：国际）
 * @method void setArea(integer $Area) 设置用户类型（1：国内，2：国际）
 * @method string getBillingType() 获取计费类型（日结、月结）
 * @method void setBillingType(string $BillingType) 设置计费类型（日结、月结）
 * @method integer getStatus() 获取用户状态（0：正常，1：欠费，2：恶意）
 * @method void setStatus(integer $Status) 设置用户状态（0：正常，1：欠费，2：恶意）
 * @method string getMessage() 获取备注信息
 * @method void setMessage(string $Message) 设置备注信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 */

/**
 *用户
 */
class User extends AbstractModel
{
    /**
     * @var integer app_id
     */
    public $AppId;

    /**
     * @var integer 用户类型（1：国内，2：国际）
     */
    public $Area;

    /**
     * @var string 计费类型（日结、月结）
     */
    public $BillingType;

    /**
     * @var integer 用户状态（0：正常，1：欠费，2：恶意）
     */
    public $Status;

    /**
     * @var string 备注信息
     */
    public $Message;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;
    /**
     * @param integer $AppId app_id
     * @param integer $Area 用户类型（1：国内，2：国际）
     * @param string $BillingType 计费类型（日结、月结）
     * @param integer $Status 用户状态（0：正常，1：欠费，2：恶意）
     * @param string $Message 备注信息
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

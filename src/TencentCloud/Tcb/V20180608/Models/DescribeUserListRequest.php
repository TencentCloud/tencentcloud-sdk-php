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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserList请求参数结构体
 *
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method integer getPageNo() 获取页码，从1开始，默认1
 * @method void setPageNo(integer $PageNo) 设置页码，从1开始，默认1
 * @method integer getPageSize() 获取每页数量，默认20，最大100
 * @method void setPageSize(integer $PageSize) 设置每页数量，默认20，最大100
 * @method string getName() 获取用户名，模糊查询
 * @method void setName(string $Name) 设置用户名，模糊查询
 * @method string getNickName() 获取用户昵称，模糊查询
 * @method void setNickName(string $NickName) 设置用户昵称，模糊查询
 * @method string getPhone() 获取手机号，模糊查询
 * @method void setPhone(string $Phone) 设置手机号，模糊查询
 * @method string getEmail() 获取邮箱，模糊查询
 * @method void setEmail(string $Email) 设置邮箱，模糊查询
 */
class DescribeUserListRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var integer 页码，从1开始，默认1
     */
    public $PageNo;

    /**
     * @var integer 每页数量，默认20，最大100
     */
    public $PageSize;

    /**
     * @var string 用户名，模糊查询
     */
    public $Name;

    /**
     * @var string 用户昵称，模糊查询
     */
    public $NickName;

    /**
     * @var string 手机号，模糊查询
     */
    public $Phone;

    /**
     * @var string 邮箱，模糊查询
     */
    public $Email;

    /**
     * @param string $EnvId 环境id
     * @param integer $PageNo 页码，从1开始，默认1
     * @param integer $PageSize 每页数量，默认20，最大100
     * @param string $Name 用户名，模糊查询
     * @param string $NickName 用户昵称，模糊查询
     * @param string $Phone 手机号，模糊查询
     * @param string $Email 邮箱，模糊查询
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}

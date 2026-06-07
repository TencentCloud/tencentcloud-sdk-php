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
 * @method string getEnvId() 获取<p>环境id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境id</p>
 * @method integer getPageNo() 获取<p>页码，从1开始，默认1</p>
 * @method void setPageNo(integer $PageNo) 设置<p>页码，从1开始，默认1</p>
 * @method integer getPageSize() 获取<p>每页数量，默认20，最大100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量，默认20，最大100</p>
 * @method string getName() 获取<p>用户名，模糊查询</p>
 * @method void setName(string $Name) 设置<p>用户名，模糊查询</p>
 * @method string getNickName() 获取<p>用户昵称，模糊查询</p>
 * @method void setNickName(string $NickName) 设置<p>用户昵称，模糊查询</p>
 * @method string getPhone() 获取<p>手机号，模糊查询</p>
 * @method void setPhone(string $Phone) 设置<p>手机号，模糊查询</p>
 * @method string getEmail() 获取<p>邮箱，模糊查询</p>
 * @method void setEmail(string $Email) 设置<p>邮箱，模糊查询</p>
 * @method array getUidList() 获取<p>用户id列表，根据id过滤用户</p>
 * @method void setUidList(array $UidList) 设置<p>用户id列表，根据id过滤用户</p>
 */
class DescribeUserListRequest extends AbstractModel
{
    /**
     * @var string <p>环境id</p>
     */
    public $EnvId;

    /**
     * @var integer <p>页码，从1开始，默认1</p>
     */
    public $PageNo;

    /**
     * @var integer <p>每页数量，默认20，最大100</p>
     */
    public $PageSize;

    /**
     * @var string <p>用户名，模糊查询</p>
     */
    public $Name;

    /**
     * @var string <p>用户昵称，模糊查询</p>
     */
    public $NickName;

    /**
     * @var string <p>手机号，模糊查询</p>
     */
    public $Phone;

    /**
     * @var string <p>邮箱，模糊查询</p>
     */
    public $Email;

    /**
     * @var array <p>用户id列表，根据id过滤用户</p>
     */
    public $UidList;

    /**
     * @param string $EnvId <p>环境id</p>
     * @param integer $PageNo <p>页码，从1开始，默认1</p>
     * @param integer $PageSize <p>每页数量，默认20，最大100</p>
     * @param string $Name <p>用户名，模糊查询</p>
     * @param string $NickName <p>用户昵称，模糊查询</p>
     * @param string $Phone <p>手机号，模糊查询</p>
     * @param string $Email <p>邮箱，模糊查询</p>
     * @param array $UidList <p>用户id列表，根据id过滤用户</p>
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

        if (array_key_exists("UidList",$param) and $param["UidList"] !== null) {
            $this->UidList = $param["UidList"];
        }
    }
}

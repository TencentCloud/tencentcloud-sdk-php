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
 * 查询用户返回结果
 *
 * @method integer getTotal() 获取用户总数
 * @method void setTotal(integer $Total) 设置用户总数
 * @method array getUserList() 获取用户列表
 * @method void setUserList(array $UserList) 设置用户列表
 */
class DescribeUserListResp extends AbstractModel
{
    /**
     * @var integer 用户总数
     */
    public $Total;

    /**
     * @var array 用户列表
     */
    public $UserList;

    /**
     * @param integer $Total 用户总数
     * @param array $UserList 用户列表
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("UserList",$param) and $param["UserList"] !== null) {
            $this->UserList = [];
            foreach ($param["UserList"] as $key => $value){
                $obj = new User();
                $obj->deserialize($value);
                array_push($this->UserList, $obj);
            }
        }
    }
}

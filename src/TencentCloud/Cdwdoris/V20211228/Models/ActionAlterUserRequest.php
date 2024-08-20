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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActionAlterUser请求参数结构体
 *
 * @method UserInfo getUserInfo() 获取用户信息
 * @method void setUserInfo(UserInfo $UserInfo) 设置用户信息
 * @method string getApiType() 获取api接口类型
 * @method void setApiType(string $ApiType) 设置api接口类型
 * @method integer getUserPrivilege() 获取用户权限类型 0:普通用户 1:管理员
 * @method void setUserPrivilege(integer $UserPrivilege) 设置用户权限类型 0:普通用户 1:管理员
 */
class ActionAlterUserRequest extends AbstractModel
{
    /**
     * @var UserInfo 用户信息
     */
    public $UserInfo;

    /**
     * @var string api接口类型
     */
    public $ApiType;

    /**
     * @var integer 用户权限类型 0:普通用户 1:管理员
     */
    public $UserPrivilege;

    /**
     * @param UserInfo $UserInfo 用户信息
     * @param string $ApiType api接口类型
     * @param integer $UserPrivilege 用户权限类型 0:普通用户 1:管理员
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new UserInfo();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("UserPrivilege",$param) and $param["UserPrivilege"] !== null) {
            $this->UserPrivilege = $param["UserPrivilege"];
        }
    }
}

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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加的用户信息列表
 *
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getUserGroup() 获取用户所属的组
 * @method void setUserGroup(string $UserGroup) 设置用户所属的组
 * @method string getPassWord() 获取密码
 * @method void setPassWord(string $PassWord) 设置密码
 * @method string getReMark() 获取备注
 * @method void setReMark(string $ReMark) 设置备注
 */
class UserInfoForUserManager extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 用户所属的组
     */
    public $UserGroup;

    /**
     * @var string 密码
     */
    public $PassWord;

    /**
     * @var string 备注
     */
    public $ReMark;

    /**
     * @param string $UserName 用户名
     * @param string $UserGroup 用户所属的组
     * @param string $PassWord 密码
     * @param string $ReMark 备注
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("ReMark",$param) and $param["ReMark"] !== null) {
            $this->ReMark = $param["ReMark"];
        }
    }
}

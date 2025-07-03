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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新增或是修改ck用户
 *
 * @method string getInstanceId() 获取集群实例id
 * @method void setInstanceId(string $InstanceId) 设置集群实例id
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getPassWord() 获取base64加密后的密码
 * @method void setPassWord(string $PassWord) 设置base64加密后的密码
 * @method string getDescribe() 获取描述
 * @method void setDescribe(string $Describe) 设置描述
 */
class CkUserAlterInfo extends AbstractModel
{
    /**
     * @var string 集群实例id
     */
    public $InstanceId;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string base64加密后的密码
     */
    public $PassWord;

    /**
     * @var string 描述
     */
    public $Describe;

    /**
     * @param string $InstanceId 集群实例id
     * @param string $UserName 用户名
     * @param string $PassWord base64加密后的密码
     * @param string $Describe 描述
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }
    }
}

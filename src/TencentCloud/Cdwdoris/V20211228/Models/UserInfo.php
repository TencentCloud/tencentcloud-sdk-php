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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新增或是修改用户
 *
 * @method string getInstanceId() 获取集群实例id
 * @method void setInstanceId(string $InstanceId) 设置集群实例id
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getPassWord() 获取密码
 * @method void setPassWord(string $PassWord) 设置密码
 * @method string getWhiteHost() 获取用户链接来自的 IP
 * @method void setWhiteHost(string $WhiteHost) 设置用户链接来自的 IP
 * @method string getOldWhiteHost() 获取修改前用户链接来自的 IP
 * @method void setOldWhiteHost(string $OldWhiteHost) 设置修改前用户链接来自的 IP
 * @method string getDescribe() 获取描述
 * @method void setDescribe(string $Describe) 设置描述
 * @method string getOldPwd() 获取旧密码
 * @method void setOldPwd(string $OldPwd) 设置旧密码
 * @method string getCamUin() 获取绑定的子用户uin
 * @method void setCamUin(string $CamUin) 设置绑定的子用户uin
 * @method array getCamRangerGroupIds() 获取ranger group id列表
 * @method void setCamRangerGroupIds(array $CamRangerGroupIds) 设置ranger group id列表
 */
class UserInfo extends AbstractModel
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
     * @var string 密码
     */
    public $PassWord;

    /**
     * @var string 用户链接来自的 IP
     */
    public $WhiteHost;

    /**
     * @var string 修改前用户链接来自的 IP
     */
    public $OldWhiteHost;

    /**
     * @var string 描述
     */
    public $Describe;

    /**
     * @var string 旧密码
     */
    public $OldPwd;

    /**
     * @var string 绑定的子用户uin
     */
    public $CamUin;

    /**
     * @var array ranger group id列表
     */
    public $CamRangerGroupIds;

    /**
     * @param string $InstanceId 集群实例id
     * @param string $UserName 用户名
     * @param string $PassWord 密码
     * @param string $WhiteHost 用户链接来自的 IP
     * @param string $OldWhiteHost 修改前用户链接来自的 IP
     * @param string $Describe 描述
     * @param string $OldPwd 旧密码
     * @param string $CamUin 绑定的子用户uin
     * @param array $CamRangerGroupIds ranger group id列表
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

        if (array_key_exists("WhiteHost",$param) and $param["WhiteHost"] !== null) {
            $this->WhiteHost = $param["WhiteHost"];
        }

        if (array_key_exists("OldWhiteHost",$param) and $param["OldWhiteHost"] !== null) {
            $this->OldWhiteHost = $param["OldWhiteHost"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("OldPwd",$param) and $param["OldPwd"] !== null) {
            $this->OldPwd = $param["OldPwd"];
        }

        if (array_key_exists("CamUin",$param) and $param["CamUin"] !== null) {
            $this->CamUin = $param["CamUin"];
        }

        if (array_key_exists("CamRangerGroupIds",$param) and $param["CamRangerGroupIds"] !== null) {
            $this->CamRangerGroupIds = $param["CamRangerGroupIds"];
        }
    }
}

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
namespace TencentCloud\Trdp\V20220726\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EvaluateUserRisk请求参数结构体
 *
 * @method AccountInfo getAccount() 获取账号信息
 * @method void setAccount(AccountInfo $Account) 设置账号信息
 * @method UserInfo getUser() 获取用户信息
 * @method void setUser(UserInfo $User) 设置用户信息
 * @method string getModelId() 获取模型ID
 * @method void setModelId(string $ModelId) 设置模型ID
 * @method DeviceFingerprintInfo getDeviceFingerprint() 获取设备指纹信息
 * @method void setDeviceFingerprint(DeviceFingerprintInfo $DeviceFingerprint) 设置设备指纹信息
 * @method string getSceneCode() 获取场景Code，不传默认活动防刷；
e_activity_antirush；活动防刷场景
e_login_protection；登录保护场景
e_register_protection：注册保护场景
 * @method void setSceneCode(string $SceneCode) 设置场景Code，不传默认活动防刷；
e_activity_antirush；活动防刷场景
e_login_protection；登录保护场景
e_register_protection：注册保护场景
 * @method DeviceDetailInfo getDeviceDetail() 获取设备详情
 * @method void setDeviceDetail(DeviceDetailInfo $DeviceDetail) 设置设备详情
 * @method MarketingInfo getMarketing() 获取营销信息
 * @method void setMarketing(MarketingInfo $Marketing) 设置营销信息
 */
class EvaluateUserRiskRequest extends AbstractModel
{
    /**
     * @var AccountInfo 账号信息
     */
    public $Account;

    /**
     * @var UserInfo 用户信息
     */
    public $User;

    /**
     * @var string 模型ID
     */
    public $ModelId;

    /**
     * @var DeviceFingerprintInfo 设备指纹信息
     */
    public $DeviceFingerprint;

    /**
     * @var string 场景Code，不传默认活动防刷；
e_activity_antirush；活动防刷场景
e_login_protection；登录保护场景
e_register_protection：注册保护场景
     */
    public $SceneCode;

    /**
     * @var DeviceDetailInfo 设备详情
     */
    public $DeviceDetail;

    /**
     * @var MarketingInfo 营销信息
     */
    public $Marketing;

    /**
     * @param AccountInfo $Account 账号信息
     * @param UserInfo $User 用户信息
     * @param string $ModelId 模型ID
     * @param DeviceFingerprintInfo $DeviceFingerprint 设备指纹信息
     * @param string $SceneCode 场景Code，不传默认活动防刷；
e_activity_antirush；活动防刷场景
e_login_protection；登录保护场景
e_register_protection：注册保护场景
     * @param DeviceDetailInfo $DeviceDetail 设备详情
     * @param MarketingInfo $Marketing 营销信息
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new AccountInfo();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new UserInfo();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("DeviceFingerprint",$param) and $param["DeviceFingerprint"] !== null) {
            $this->DeviceFingerprint = new DeviceFingerprintInfo();
            $this->DeviceFingerprint->deserialize($param["DeviceFingerprint"]);
        }

        if (array_key_exists("SceneCode",$param) and $param["SceneCode"] !== null) {
            $this->SceneCode = $param["SceneCode"];
        }

        if (array_key_exists("DeviceDetail",$param) and $param["DeviceDetail"] !== null) {
            $this->DeviceDetail = new DeviceDetailInfo();
            $this->DeviceDetail->deserialize($param["DeviceDetail"]);
        }

        if (array_key_exists("Marketing",$param) and $param["Marketing"] !== null) {
            $this->Marketing = new MarketingInfo();
            $this->Marketing->deserialize($param["Marketing"]);
        }
    }
}

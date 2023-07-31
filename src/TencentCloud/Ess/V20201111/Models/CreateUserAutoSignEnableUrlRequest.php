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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserAutoSignEnableUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息,UserId必填
 * @method void setOperator(UserInfo $Operator) 设置操作人信息,UserId必填
 * @method string getSceneKey() 获取自动签场景:
E_PRESCRIPTION_AUTO_SIGN 电子处方
 * @method void setSceneKey(string $SceneKey) 设置自动签场景:
E_PRESCRIPTION_AUTO_SIGN 电子处方
 * @method AutoSignConfig getAutoSignConfig() 获取自动签开通，签署相关配置
 * @method void setAutoSignConfig(AutoSignConfig $AutoSignConfig) 设置自动签开通，签署相关配置
 * @method string getUrlType() 获取链接类型，
空-默认小程序端链接
H5SIGN-h5端链接
 * @method void setUrlType(string $UrlType) 设置链接类型，
空-默认小程序端链接
H5SIGN-h5端链接
 * @method string getNotifyType() 获取通知类型

默认不设置为不通知开通方，
SMS 为短信通知 , 此种方式需要NotifyAddress填写手机号。
 * @method void setNotifyType(string $NotifyType) 设置通知类型

默认不设置为不通知开通方，
SMS 为短信通知 , 此种方式需要NotifyAddress填写手机号。
 * @method string getNotifyAddress() 获取如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项
 * @method void setNotifyAddress(string $NotifyAddress) 设置如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项
 * @method integer getExpiredTime() 获取链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为30天。如果不传，默认有效期为7天。
 * @method void setExpiredTime(integer $ExpiredTime) 设置链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为30天。如果不传，默认有效期为7天。
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 */
class CreateUserAutoSignEnableUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息,UserId必填
     */
    public $Operator;

    /**
     * @var string 自动签场景:
E_PRESCRIPTION_AUTO_SIGN 电子处方
     */
    public $SceneKey;

    /**
     * @var AutoSignConfig 自动签开通，签署相关配置
     */
    public $AutoSignConfig;

    /**
     * @var string 链接类型，
空-默认小程序端链接
H5SIGN-h5端链接
     */
    public $UrlType;

    /**
     * @var string 通知类型

默认不设置为不通知开通方，
SMS 为短信通知 , 此种方式需要NotifyAddress填写手机号。
     */
    public $NotifyType;

    /**
     * @var string 如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项
     */
    public $NotifyAddress;

    /**
     * @var integer 链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为30天。如果不传，默认有效期为7天。
     */
    public $ExpiredTime;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 操作人信息,UserId必填
     * @param string $SceneKey 自动签场景:
E_PRESCRIPTION_AUTO_SIGN 电子处方
     * @param AutoSignConfig $AutoSignConfig 自动签开通，签署相关配置
     * @param string $UrlType 链接类型，
空-默认小程序端链接
H5SIGN-h5端链接
     * @param string $NotifyType 通知类型

默认不设置为不通知开通方，
SMS 为短信通知 , 此种方式需要NotifyAddress填写手机号。
     * @param string $NotifyAddress 如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项
     * @param integer $ExpiredTime 链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为30天。如果不传，默认有效期为7天。
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("SceneKey",$param) and $param["SceneKey"] !== null) {
            $this->SceneKey = $param["SceneKey"];
        }

        if (array_key_exists("AutoSignConfig",$param) and $param["AutoSignConfig"] !== null) {
            $this->AutoSignConfig = new AutoSignConfig();
            $this->AutoSignConfig->deserialize($param["AutoSignConfig"]);
        }

        if (array_key_exists("UrlType",$param) and $param["UrlType"] !== null) {
            $this->UrlType = $param["UrlType"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("NotifyAddress",$param) and $param["NotifyAddress"] !== null) {
            $this->NotifyAddress = $param["NotifyAddress"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}

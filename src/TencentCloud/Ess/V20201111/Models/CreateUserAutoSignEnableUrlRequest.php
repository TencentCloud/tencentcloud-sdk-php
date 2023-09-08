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
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getSceneKey() 获取自动签使用的场景值, 可以选择的场景值如下:
<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li></ul>

注: `现在仅支持电子处方场景`
 * @method void setSceneKey(string $SceneKey) 设置自动签使用的场景值, 可以选择的场景值如下:
<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li></ul>

注: `现在仅支持电子处方场景`
 * @method AutoSignConfig getAutoSignConfig() 获取自动签开通配置信息, 包括开通的人员的信息等
 * @method void setAutoSignConfig(AutoSignConfig $AutoSignConfig) 设置自动签开通配置信息, 包括开通的人员的信息等
 * @method string getUrlType() 获取生成的链接类型：
<ul><li> 不传(即为空值) 则会生成小程序端开通链接(默认)</li>
<li> **H5SIGN** : 生成H5端开通链接</li><ul>
 * @method void setUrlType(string $UrlType) 设置生成的链接类型：
<ul><li> 不传(即为空值) 则会生成小程序端开通链接(默认)</li>
<li> **H5SIGN** : 生成H5端开通链接</li><ul>
 * @method string getNotifyType() 获取是否通知开通方，通知类型:
<ul><li>默认不设置为不通知开通方</li>
<li>**SMS** :  短信通知 ,如果需要短信通知则NotifyAddress填写对方的手机号</li><ul>
 * @method void setNotifyType(string $NotifyType) 设置是否通知开通方，通知类型:
<ul><li>默认不设置为不通知开通方</li>
<li>**SMS** :  短信通知 ,如果需要短信通知则NotifyAddress填写对方的手机号</li><ul>
 * @method string getNotifyAddress() 获取如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项
 * @method void setNotifyAddress(string $NotifyAddress) 设置如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项
 * @method integer getExpiredTime() 获取链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为当前时间往后30天。`如果不传，默认过期时间为当前时间往后7天。`
 * @method void setExpiredTime(integer $ExpiredTime) 设置链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为当前时间往后30天。`如果不传，默认过期时间为当前时间往后7天。`
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 */
class CreateUserAutoSignEnableUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 自动签使用的场景值, 可以选择的场景值如下:
<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li></ul>

注: `现在仅支持电子处方场景`
     */
    public $SceneKey;

    /**
     * @var AutoSignConfig 自动签开通配置信息, 包括开通的人员的信息等
     */
    public $AutoSignConfig;

    /**
     * @var string 生成的链接类型：
<ul><li> 不传(即为空值) 则会生成小程序端开通链接(默认)</li>
<li> **H5SIGN** : 生成H5端开通链接</li><ul>
     */
    public $UrlType;

    /**
     * @var string 是否通知开通方，通知类型:
<ul><li>默认不设置为不通知开通方</li>
<li>**SMS** :  短信通知 ,如果需要短信通知则NotifyAddress填写对方的手机号</li><ul>
     */
    public $NotifyType;

    /**
     * @var string 如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项
     */
    public $NotifyAddress;

    /**
     * @var integer 链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为当前时间往后30天。`如果不传，默认过期时间为当前时间往后7天。`
     */
    public $ExpiredTime;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $SceneKey 自动签使用的场景值, 可以选择的场景值如下:
<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li></ul>

注: `现在仅支持电子处方场景`
     * @param AutoSignConfig $AutoSignConfig 自动签开通配置信息, 包括开通的人员的信息等
     * @param string $UrlType 生成的链接类型：
<ul><li> 不传(即为空值) 则会生成小程序端开通链接(默认)</li>
<li> **H5SIGN** : 生成H5端开通链接</li><ul>
     * @param string $NotifyType 是否通知开通方，通知类型:
<ul><li>默认不设置为不通知开通方</li>
<li>**SMS** :  短信通知 ,如果需要短信通知则NotifyAddress填写对方的手机号</li><ul>
     * @param string $NotifyAddress 如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项
     * @param integer $ExpiredTime 链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为当前时间往后30天。`如果不传，默认过期时间为当前时间往后7天。`
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
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

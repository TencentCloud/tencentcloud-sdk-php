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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserAutoSignEnableUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getSceneKey() 获取<p>自动签使用的场景值, 可以选择的场景值如下:</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>
 * @method void setSceneKey(string $SceneKey) 设置<p>自动签使用的场景值, 可以选择的场景值如下:</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>
 * @method AutoSignConfig getAutoSignConfig() 获取<p>自动签开通配置信息, 包括开通的人员的信息等</p>
 * @method void setAutoSignConfig(AutoSignConfig $AutoSignConfig) 设置<p>自动签开通配置信息, 包括开通的人员的信息等</p>
 * @method string getUrlType() 获取<p>生成的链接类型：</p><ul><li> 不传(即为空值) 则会生成小程序端开通链接(默认)</li><li> **H5SIGN** : 生成H5端开通链接</li></ul>
 * @method void setUrlType(string $UrlType) 设置<p>生成的链接类型：</p><ul><li> 不传(即为空值) 则会生成小程序端开通链接(默认)</li><li> **H5SIGN** : 生成H5端开通链接</li></ul>
 * @method string getNotifyType() 获取<p>是否通知开通方，通知类型:<ul><li>默认为不通知开通方</li><li><strong>SMS</strong> :  短信通知 ,如果需要短信通知则NotifyAddress填写对方的手机号</li></ul></p>
 * @method void setNotifyType(string $NotifyType) 设置<p>是否通知开通方，通知类型:<ul><li>默认为不通知开通方</li><li><strong>SMS</strong> :  短信通知 ,如果需要短信通知则NotifyAddress填写对方的手机号</li></ul></p>
 * @method string getNotifyAddress() 获取<p>如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项</p>
 * @method void setNotifyAddress(string $NotifyAddress) 设置<p>如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项</p>
 * @method integer getExpiredTime() 获取<p>链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为当前时间往后30天。<code>如果不传，默认过期时间为当前时间往后7天。</code></p>
 * @method void setExpiredTime(integer $ExpiredTime) 设置<p>链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为当前时间往后30天。<code>如果不传，默认过期时间为当前时间往后7天。</code></p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method string getUserData() 获取<p>调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。 在个人自动签的开通、关闭等回调信息场景中，该字段的信息将原封不动地透传给贵方。</p>
 * @method void setUserData(string $UserData) 设置<p>调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。 在个人自动签的开通、关闭等回调信息场景中，该字段的信息将原封不动地透传给贵方。</p>
 * @method string getEndPoint() 获取<p>要跳转的链接类型<ul><li> <strong>HTTP</strong>：跳转电子签小程序或者H5的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链</li><li><strong>HTTP_SHORT_URL</strong>：跳转电子签小程序或者H5的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li><li><strong>APP</strong>： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型，注意：仅UrlType为空，即获取小程序端开通链接时有效</li></ul></p>
 * @method void setEndPoint(string $EndPoint) 设置<p>要跳转的链接类型<ul><li> <strong>HTTP</strong>：跳转电子签小程序或者H5的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链</li><li><strong>HTTP_SHORT_URL</strong>：跳转电子签小程序或者H5的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li><li><strong>APP</strong>： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型，注意：仅UrlType为空，即获取小程序端开通链接时有效</li></ul></p>
 */
class CreateUserAutoSignEnableUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>自动签使用的场景值, 可以选择的场景值如下:</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>
     */
    public $SceneKey;

    /**
     * @var AutoSignConfig <p>自动签开通配置信息, 包括开通的人员的信息等</p>
     */
    public $AutoSignConfig;

    /**
     * @var string <p>生成的链接类型：</p><ul><li> 不传(即为空值) 则会生成小程序端开通链接(默认)</li><li> **H5SIGN** : 生成H5端开通链接</li></ul>
     */
    public $UrlType;

    /**
     * @var string <p>是否通知开通方，通知类型:<ul><li>默认为不通知开通方</li><li><strong>SMS</strong> :  短信通知 ,如果需要短信通知则NotifyAddress填写对方的手机号</li></ul></p>
     */
    public $NotifyType;

    /**
     * @var string <p>如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项</p>
     */
    public $NotifyAddress;

    /**
     * @var integer <p>链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为当前时间往后30天。<code>如果不传，默认过期时间为当前时间往后7天。</code></p>
     */
    public $ExpiredTime;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var string <p>调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。 在个人自动签的开通、关闭等回调信息场景中，该字段的信息将原封不动地透传给贵方。</p>
     */
    public $UserData;

    /**
     * @var string <p>要跳转的链接类型<ul><li> <strong>HTTP</strong>：跳转电子签小程序或者H5的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链</li><li><strong>HTTP_SHORT_URL</strong>：跳转电子签小程序或者H5的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li><li><strong>APP</strong>： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型，注意：仅UrlType为空，即获取小程序端开通链接时有效</li></ul></p>
     */
    public $EndPoint;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $SceneKey <p>自动签使用的场景值, 可以选择的场景值如下:</p><ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>
     * @param AutoSignConfig $AutoSignConfig <p>自动签开通配置信息, 包括开通的人员的信息等</p>
     * @param string $UrlType <p>生成的链接类型：</p><ul><li> 不传(即为空值) 则会生成小程序端开通链接(默认)</li><li> **H5SIGN** : 生成H5端开通链接</li></ul>
     * @param string $NotifyType <p>是否通知开通方，通知类型:<ul><li>默认为不通知开通方</li><li><strong>SMS</strong> :  短信通知 ,如果需要短信通知则NotifyAddress填写对方的手机号</li></ul></p>
     * @param string $NotifyAddress <p>如果通知类型NotifyType选择为SMS，则此处为手机号, 其他通知类型不需要设置此项</p>
     * @param integer $ExpiredTime <p>链接的过期时间，格式为Unix时间戳，不能早于当前时间，且最大为当前时间往后30天。<code>如果不传，默认过期时间为当前时间往后7天。</code></p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param string $UserData <p>调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。 在个人自动签的开通、关闭等回调信息场景中，该字段的信息将原封不动地透传给贵方。</p>
     * @param string $EndPoint <p>要跳转的链接类型<ul><li> <strong>HTTP</strong>：跳转电子签小程序或者H5的http_url, 短信通知或者H5跳转适合此类型  ，此时返回长链</li><li><strong>HTTP_SHORT_URL</strong>：跳转电子签小程序或者H5的http_url, 短信通知或者H5跳转适合此类型，此时返回短链</li><li><strong>APP</strong>： 第三方APP或小程序跳转电子签小程序的path,  APP或者小程序跳转适合此类型，注意：仅UrlType为空，即获取小程序端开通链接时有效</li></ul></p>
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

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("EndPoint",$param) and $param["EndPoint"] !== null) {
            $this->EndPoint = $param["EndPoint"];
        }
    }
}

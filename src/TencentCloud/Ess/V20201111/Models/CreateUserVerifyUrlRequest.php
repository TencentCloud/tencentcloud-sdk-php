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
 * CreateUserVerifyUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method string getName() 获取要实名的姓名
 * @method void setName(string $Name) 设置要实名的姓名
 * @method string getIdCardNumber() 获取要实名的身份证号码，
身份证号码如果有x的话，统一传大写X
 * @method void setIdCardNumber(string $IdCardNumber) 设置要实名的身份证号码，
身份证号码如果有x的话，统一传大写X
 * @method string getIdCardType() 获取证件类型，目前只支持身份证类型：ID_CARD
 * @method void setIdCardType(string $IdCardType) 设置证件类型，目前只支持身份证类型：ID_CARD
 * @method string getMobile() 获取要实名的手机号，兼容带+86的格式
 * @method void setMobile(string $Mobile) 设置要实名的手机号，兼容带+86的格式
 * @method string getEndpoint() 获取要跳转的链接类型

- HTTP：
跳转电子签小程序的http_url,短信通知或者H5跳转适合此类型 ，此时返回长链 (默认类型)

- HTTP_SHORT_URL：
跳转电子签小程序的http_url,短信通知或者H5跳转适合此类型，此时返回短链

- APP：
第三方APP或小程序跳转电子签小程序的path, APP或者小程序跳转适合此类型

如果不传递，默认值是 APP
 * @method void setEndpoint(string $Endpoint) 设置要跳转的链接类型

- HTTP：
跳转电子签小程序的http_url,短信通知或者H5跳转适合此类型 ，此时返回长链 (默认类型)

- HTTP_SHORT_URL：
跳转电子签小程序的http_url,短信通知或者H5跳转适合此类型，此时返回短链

- APP：
第三方APP或小程序跳转电子签小程序的path, APP或者小程序跳转适合此类型

如果不传递，默认值是 APP
 * @method boolean getAutoJumpBack() 获取签署完成后是否自动回跳
<ul><li>false：否, 实名完成不会自动跳转回来(默认)</li><li>true：是, 实名完成会自动跳转回来</li></ul>

注: 
1. 该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的实名链接有效
2. <font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考[这个](https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object)
3. <font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font> 
 * @method void setAutoJumpBack(boolean $AutoJumpBack) 设置签署完成后是否自动回跳
<ul><li>false：否, 实名完成不会自动跳转回来(默认)</li><li>true：是, 实名完成会自动跳转回来</li></ul>

注: 
1. 该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的实名链接有效
2. <font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考[这个](https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object)
3. <font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font> 
 * @method string getUserData() 获取在用户完成实名认证后，其自定义数据将通过[企业引导个人实名认证后回调](https://qian.tencent.com/developers/company/callback_types_staffs/#%E5%8D%81%E4%BA%8C-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83)返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。
 * @method void setUserData(string $UserData) 设置在用户完成实名认证后，其自定义数据将通过[企业引导个人实名认证后回调](https://qian.tencent.com/developers/company/callback_types_staffs/#%E5%8D%81%E4%BA%8C-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83)返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。
 */
class CreateUserVerifyUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var string 要实名的姓名
     */
    public $Name;

    /**
     * @var string 要实名的身份证号码，
身份证号码如果有x的话，统一传大写X
     */
    public $IdCardNumber;

    /**
     * @var string 证件类型，目前只支持身份证类型：ID_CARD
     */
    public $IdCardType;

    /**
     * @var string 要实名的手机号，兼容带+86的格式
     */
    public $Mobile;

    /**
     * @var string 要跳转的链接类型

- HTTP：
跳转电子签小程序的http_url,短信通知或者H5跳转适合此类型 ，此时返回长链 (默认类型)

- HTTP_SHORT_URL：
跳转电子签小程序的http_url,短信通知或者H5跳转适合此类型，此时返回短链

- APP：
第三方APP或小程序跳转电子签小程序的path, APP或者小程序跳转适合此类型

如果不传递，默认值是 APP
     */
    public $Endpoint;

    /**
     * @var boolean 签署完成后是否自动回跳
<ul><li>false：否, 实名完成不会自动跳转回来(默认)</li><li>true：是, 实名完成会自动跳转回来</li></ul>

注: 
1. 该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的实名链接有效
2. <font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考[这个](https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object)
3. <font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font> 
     */
    public $AutoJumpBack;

    /**
     * @var string 在用户完成实名认证后，其自定义数据将通过[企业引导个人实名认证后回调](https://qian.tencent.com/developers/company/callback_types_staffs/#%E5%8D%81%E4%BA%8C-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83)返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。
     */
    public $UserData;

    /**
     * @param UserInfo $Operator 操作人信息
     * @param string $Name 要实名的姓名
     * @param string $IdCardNumber 要实名的身份证号码，
身份证号码如果有x的话，统一传大写X
     * @param string $IdCardType 证件类型，目前只支持身份证类型：ID_CARD
     * @param string $Mobile 要实名的手机号，兼容带+86的格式
     * @param string $Endpoint 要跳转的链接类型

- HTTP：
跳转电子签小程序的http_url,短信通知或者H5跳转适合此类型 ，此时返回长链 (默认类型)

- HTTP_SHORT_URL：
跳转电子签小程序的http_url,短信通知或者H5跳转适合此类型，此时返回短链

- APP：
第三方APP或小程序跳转电子签小程序的path, APP或者小程序跳转适合此类型

如果不传递，默认值是 APP
     * @param boolean $AutoJumpBack 签署完成后是否自动回跳
<ul><li>false：否, 实名完成不会自动跳转回来(默认)</li><li>true：是, 实名完成会自动跳转回来</li></ul>

注: 
1. 该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的实名链接有效
2. <font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考[这个](https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object)
3. <font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font> 
     * @param string $UserData 在用户完成实名认证后，其自定义数据将通过[企业引导个人实名认证后回调](https://qian.tencent.com/developers/company/callback_types_staffs/#%E5%8D%81%E4%BA%8C-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83)返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("AutoJumpBack",$param) and $param["AutoJumpBack"] !== null) {
            $this->AutoJumpBack = $param["AutoJumpBack"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }
    }
}

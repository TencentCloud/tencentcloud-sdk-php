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
 * CreateUserVerifyUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>操作人信息</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>操作人信息</p>
 * @method string getName() 获取<p>要实名的姓名</p>
 * @method void setName(string $Name) 设置<p>要实名的姓名</p>
 * @method string getIdCardNumber() 获取<p>要实名的身份证号码，<br>身份证号码如果有x的话，统一传大写X</p>
 * @method void setIdCardNumber(string $IdCardNumber) 设置<p>要实名的身份证号码，<br>身份证号码如果有x的话，统一传大写X</p>
 * @method string getIdCardType() 获取<p>证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li></ul><p>注:  港澳居民来往内地通行证 和  港澳台居民居住证 类型的签署人<b>至少要过一次大陆的海关</b>才能使用。</p>
 * @method void setIdCardType(string $IdCardType) 设置<p>证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li></ul><p>注:  港澳居民来往内地通行证 和  港澳台居民居住证 类型的签署人<b>至少要过一次大陆的海关</b>才能使用。</p>
 * @method string getMobile() 获取<p>要实名的手机号，兼容带+86的格式</p>
 * @method void setMobile(string $Mobile) 设置<p>要实名的手机号，兼容带+86的格式</p>
 * @method string getJumpUrl() 获取<p>实名完之后的跳转链接，最大长度1000个字符。<br>链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>。</p><p>注：此参数仅支持 Endpoint 为 <font color="red">H5 或 H5_SHORT_URL </font>的时候传递</p>
 * @method void setJumpUrl(string $JumpUrl) 设置<p>实名完之后的跳转链接，最大长度1000个字符。<br>链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>。</p><p>注：此参数仅支持 Endpoint 为 <font color="red">H5 或 H5_SHORT_URL </font>的时候传递</p>
 * @method string getEndpoint() 获取<p>要跳转的链接类型</p><ul><li><strong>HTTP</strong>：适用于短信通知或H5跳转的电子签小程序HTTP长链接</li><li><strong>HTTP_SHORT_URL</strong>：适用于短信通知或H5跳转的电子签小程序HTTP短链接</li><li><strong>APP</strong>：（默认类型）适用于第三方APP或小程序跳转的电子签小程序路径</li><li><strong>H5</strong>：适用于跳转至电子签H5实名页面的长链接</li><li><strong>H5_SHORT_URL</strong>：适用于跳转至电子签H5实名页面的短链接</li></ul><p>注：如果不传递，默认值是 <font color="red"> APP </font></p>
 * @method void setEndpoint(string $Endpoint) 设置<p>要跳转的链接类型</p><ul><li><strong>HTTP</strong>：适用于短信通知或H5跳转的电子签小程序HTTP长链接</li><li><strong>HTTP_SHORT_URL</strong>：适用于短信通知或H5跳转的电子签小程序HTTP短链接</li><li><strong>APP</strong>：（默认类型）适用于第三方APP或小程序跳转的电子签小程序路径</li><li><strong>H5</strong>：适用于跳转至电子签H5实名页面的长链接</li><li><strong>H5_SHORT_URL</strong>：适用于跳转至电子签H5实名页面的短链接</li></ul><p>注：如果不传递，默认值是 <font color="red"> APP </font></p>
 * @method boolean getAutoJumpBack() 获取<p>签署完成后是否自动回跳</p><ul><li>false：否, 实名完成不会自动跳转回来(默认)</li><li>true：是, 实名完成会自动跳转回来</li></ul><p>注: </p><ol><li>该参数<font color="red">只针对APP类型（第三方APP或小程序跳转电子签小程序）场景</font> 的实名链接有效</li><li><font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考<a href="https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object">这个</a></li><li><font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font></li></ol>
 * @method void setAutoJumpBack(boolean $AutoJumpBack) 设置<p>签署完成后是否自动回跳</p><ul><li>false：否, 实名完成不会自动跳转回来(默认)</li><li>true：是, 实名完成会自动跳转回来</li></ul><p>注: </p><ol><li>该参数<font color="red">只针对APP类型（第三方APP或小程序跳转电子签小程序）场景</font> 的实名链接有效</li><li><font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考<a href="https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object">这个</a></li><li><font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font></li></ol>
 * @method string getUserData() 获取<p>在用户完成实名认证后，其自定义数据将通过<a href="https://qian.tencent.com/developers/company/callback_types_staffs/#%E5%8D%81%E4%BA%8C-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83">企业引导个人实名认证后回调</a>返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。</p>
 * @method void setUserData(string $UserData) 设置<p>在用户完成实名认证后，其自定义数据将通过<a href="https://qian.tencent.com/developers/company/callback_types_staffs/#%E5%8D%81%E4%BA%8C-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83">企业引导个人实名认证后回调</a>返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。</p>
 */
class CreateUserVerifyUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>操作人信息</p>
     */
    public $Operator;

    /**
     * @var string <p>要实名的姓名</p>
     */
    public $Name;

    /**
     * @var string <p>要实名的身份证号码，<br>身份证号码如果有x的话，统一传大写X</p>
     */
    public $IdCardNumber;

    /**
     * @var string <p>证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li></ul><p>注:  港澳居民来往内地通行证 和  港澳台居民居住证 类型的签署人<b>至少要过一次大陆的海关</b>才能使用。</p>
     */
    public $IdCardType;

    /**
     * @var string <p>要实名的手机号，兼容带+86的格式</p>
     */
    public $Mobile;

    /**
     * @var string <p>实名完之后的跳转链接，最大长度1000个字符。<br>链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>。</p><p>注：此参数仅支持 Endpoint 为 <font color="red">H5 或 H5_SHORT_URL </font>的时候传递</p>
     */
    public $JumpUrl;

    /**
     * @var string <p>要跳转的链接类型</p><ul><li><strong>HTTP</strong>：适用于短信通知或H5跳转的电子签小程序HTTP长链接</li><li><strong>HTTP_SHORT_URL</strong>：适用于短信通知或H5跳转的电子签小程序HTTP短链接</li><li><strong>APP</strong>：（默认类型）适用于第三方APP或小程序跳转的电子签小程序路径</li><li><strong>H5</strong>：适用于跳转至电子签H5实名页面的长链接</li><li><strong>H5_SHORT_URL</strong>：适用于跳转至电子签H5实名页面的短链接</li></ul><p>注：如果不传递，默认值是 <font color="red"> APP </font></p>
     */
    public $Endpoint;

    /**
     * @var boolean <p>签署完成后是否自动回跳</p><ul><li>false：否, 实名完成不会自动跳转回来(默认)</li><li>true：是, 实名完成会自动跳转回来</li></ul><p>注: </p><ol><li>该参数<font color="red">只针对APP类型（第三方APP或小程序跳转电子签小程序）场景</font> 的实名链接有效</li><li><font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考<a href="https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object">这个</a></li><li><font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font></li></ol>
     */
    public $AutoJumpBack;

    /**
     * @var string <p>在用户完成实名认证后，其自定义数据将通过<a href="https://qian.tencent.com/developers/company/callback_types_staffs/#%E5%8D%81%E4%BA%8C-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83">企业引导个人实名认证后回调</a>返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。</p>
     */
    public $UserData;

    /**
     * @param UserInfo $Operator <p>操作人信息</p>
     * @param string $Name <p>要实名的姓名</p>
     * @param string $IdCardNumber <p>要实名的身份证号码，<br>身份证号码如果有x的话，统一传大写X</p>
     * @param string $IdCardType <p>证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li></ul><p>注:  港澳居民来往内地通行证 和  港澳台居民居住证 类型的签署人<b>至少要过一次大陆的海关</b>才能使用。</p>
     * @param string $Mobile <p>要实名的手机号，兼容带+86的格式</p>
     * @param string $JumpUrl <p>实名完之后的跳转链接，最大长度1000个字符。<br>链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>。</p><p>注：此参数仅支持 Endpoint 为 <font color="red">H5 或 H5_SHORT_URL </font>的时候传递</p>
     * @param string $Endpoint <p>要跳转的链接类型</p><ul><li><strong>HTTP</strong>：适用于短信通知或H5跳转的电子签小程序HTTP长链接</li><li><strong>HTTP_SHORT_URL</strong>：适用于短信通知或H5跳转的电子签小程序HTTP短链接</li><li><strong>APP</strong>：（默认类型）适用于第三方APP或小程序跳转的电子签小程序路径</li><li><strong>H5</strong>：适用于跳转至电子签H5实名页面的长链接</li><li><strong>H5_SHORT_URL</strong>：适用于跳转至电子签H5实名页面的短链接</li></ul><p>注：如果不传递，默认值是 <font color="red"> APP </font></p>
     * @param boolean $AutoJumpBack <p>签署完成后是否自动回跳</p><ul><li>false：否, 实名完成不会自动跳转回来(默认)</li><li>true：是, 实名完成会自动跳转回来</li></ul><p>注: </p><ol><li>该参数<font color="red">只针对APP类型（第三方APP或小程序跳转电子签小程序）场景</font> 的实名链接有效</li><li><font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考<a href="https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object">这个</a></li><li><font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font></li></ol>
     * @param string $UserData <p>在用户完成实名认证后，其自定义数据将通过<a href="https://qian.tencent.com/developers/company/callback_types_staffs/#%E5%8D%81%E4%BA%8C-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83">企业引导个人实名认证后回调</a>返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。</p>
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

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
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

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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号保护配置。
 *
 * @method string getEnabled() 获取<p>账号保护功能开关。</p><p>枚举值：</p><ul><li>on： 开启；</li><li>off： 关闭。</li></ul><p>默认值：off。</p>
 * @method void setEnabled(string $Enabled) 设置<p>账号保护功能开关。</p><p>枚举值：</p><ul><li>on： 开启；</li><li>off： 关闭。</li></ul><p>默认值：off。</p>
 * @method string getRequestPurpose() 获取<p>请求目的。用于标识请求所属的业务操作场景。</p> <p>枚举值：</p> <ul> <li>ACCOUNT.CHANGE_PASSWORD：在已知原密码的情况下修改密码的请求；</li> <li>ACCOUNT.CHANGE_SECURITY_QUESTION：修改账号安全问题的请求；</li> <li>ACCOUNT.CHECK_EXISTENCE：校验账号是否已存在的请求，常见于登录或注册页面输入邮箱、手机号后的预校验；</li> <li>ACCOUNT.LOGIN：登录账号的请求；</li> <li>ACCOUNT.REGISTER：注册新账号的请求；</li> <li>ACCOUNT.RESET_PASSWORD：重置密码的请求，通常通过邮箱或短信验证身份后设置新密码；</li> <li>ACCOUNT.UPDATE：修改账号关联信息的请求，例如手机号、邮箱、支付卡号、收货地址等；</li> <li>ASSET.CHECK_GIFTCARD_BALANCE：通过卡号等信息查询礼品卡余额的请求；</li> <li>ASSET.CHECK_LOYALTY_POINTS：查询账号积分余额的请求；</li> <li>ASSET.REDEEM_CODE：使用兑换码兑换权益的请求；</li> <li>BROWSE.QUERY：站内搜索商品或服务的请求；</li> <li>PAYMENT.ADD_TO_CART：将商品加入购物车的请求；</li> <li>PAYMENT.GET_METHODS：获取账号已绑定支付方式列表的请求；</li> <li>PAYMENT.MAKE_PAYMENT：提交支付、结算或转账的请求。</li> </ul>
 * @method void setRequestPurpose(string $RequestPurpose) 设置<p>请求目的。用于标识请求所属的业务操作场景。</p> <p>枚举值：</p> <ul> <li>ACCOUNT.CHANGE_PASSWORD：在已知原密码的情况下修改密码的请求；</li> <li>ACCOUNT.CHANGE_SECURITY_QUESTION：修改账号安全问题的请求；</li> <li>ACCOUNT.CHECK_EXISTENCE：校验账号是否已存在的请求，常见于登录或注册页面输入邮箱、手机号后的预校验；</li> <li>ACCOUNT.LOGIN：登录账号的请求；</li> <li>ACCOUNT.REGISTER：注册新账号的请求；</li> <li>ACCOUNT.RESET_PASSWORD：重置密码的请求，通常通过邮箱或短信验证身份后设置新密码；</li> <li>ACCOUNT.UPDATE：修改账号关联信息的请求，例如手机号、邮箱、支付卡号、收货地址等；</li> <li>ASSET.CHECK_GIFTCARD_BALANCE：通过卡号等信息查询礼品卡余额的请求；</li> <li>ASSET.CHECK_LOYALTY_POINTS：查询账号积分余额的请求；</li> <li>ASSET.REDEEM_CODE：使用兑换码兑换权益的请求；</li> <li>BROWSE.QUERY：站内搜索商品或服务的请求；</li> <li>PAYMENT.ADD_TO_CART：将商品加入购物车的请求；</li> <li>PAYMENT.GET_METHODS：获取账号已绑定支付方式列表的请求；</li> <li>PAYMENT.MAKE_PAYMENT：提交支付、结算或转账的请求。</li> </ul>
 * @method string getUserIDSource() 获取<p>用户标识在请求来源中的位置，其中 key 替换为实际的参数名称。</p><p>取值有：</p><ul><li>http.request.cookies["key"]：从 Cookie 中获取名称为 key 的 Cookie 值；</li><li>http.request.headers["key"]：从请求头中获取名称为 key 的头部值；</li><li>http.request.uri.args["key"]：从 URL 查询参数中获取名称为 key 的参数值。</li></ul>
 * @method void setUserIDSource(string $UserIDSource) 设置<p>用户标识在请求来源中的位置，其中 key 替换为实际的参数名称。</p><p>取值有：</p><ul><li>http.request.cookies["key"]：从 Cookie 中获取名称为 key 的 Cookie 值；</li><li>http.request.headers["key"]：从请求头中获取名称为 key 的头部值；</li><li>http.request.uri.args["key"]：从 URL 查询参数中获取名称为 key 的参数值。</li></ul>
 * @method UserRiskProfile getUserRiskProfile() 获取<p>用户风险等级配置。</p>
 * @method void setUserRiskProfile(UserRiskProfile $UserRiskProfile) 设置<p>用户风险等级配置。</p>
 */
class AccountProtectionSettings extends AbstractModel
{
    /**
     * @var string <p>账号保护功能开关。</p><p>枚举值：</p><ul><li>on： 开启；</li><li>off： 关闭。</li></ul><p>默认值：off。</p>
     */
    public $Enabled;

    /**
     * @var string <p>请求目的。用于标识请求所属的业务操作场景。</p> <p>枚举值：</p> <ul> <li>ACCOUNT.CHANGE_PASSWORD：在已知原密码的情况下修改密码的请求；</li> <li>ACCOUNT.CHANGE_SECURITY_QUESTION：修改账号安全问题的请求；</li> <li>ACCOUNT.CHECK_EXISTENCE：校验账号是否已存在的请求，常见于登录或注册页面输入邮箱、手机号后的预校验；</li> <li>ACCOUNT.LOGIN：登录账号的请求；</li> <li>ACCOUNT.REGISTER：注册新账号的请求；</li> <li>ACCOUNT.RESET_PASSWORD：重置密码的请求，通常通过邮箱或短信验证身份后设置新密码；</li> <li>ACCOUNT.UPDATE：修改账号关联信息的请求，例如手机号、邮箱、支付卡号、收货地址等；</li> <li>ASSET.CHECK_GIFTCARD_BALANCE：通过卡号等信息查询礼品卡余额的请求；</li> <li>ASSET.CHECK_LOYALTY_POINTS：查询账号积分余额的请求；</li> <li>ASSET.REDEEM_CODE：使用兑换码兑换权益的请求；</li> <li>BROWSE.QUERY：站内搜索商品或服务的请求；</li> <li>PAYMENT.ADD_TO_CART：将商品加入购物车的请求；</li> <li>PAYMENT.GET_METHODS：获取账号已绑定支付方式列表的请求；</li> <li>PAYMENT.MAKE_PAYMENT：提交支付、结算或转账的请求。</li> </ul>
     */
    public $RequestPurpose;

    /**
     * @var string <p>用户标识在请求来源中的位置，其中 key 替换为实际的参数名称。</p><p>取值有：</p><ul><li>http.request.cookies["key"]：从 Cookie 中获取名称为 key 的 Cookie 值；</li><li>http.request.headers["key"]：从请求头中获取名称为 key 的头部值；</li><li>http.request.uri.args["key"]：从 URL 查询参数中获取名称为 key 的参数值。</li></ul>
     */
    public $UserIDSource;

    /**
     * @var UserRiskProfile <p>用户风险等级配置。</p>
     */
    public $UserRiskProfile;

    /**
     * @param string $Enabled <p>账号保护功能开关。</p><p>枚举值：</p><ul><li>on： 开启；</li><li>off： 关闭。</li></ul><p>默认值：off。</p>
     * @param string $RequestPurpose <p>请求目的。用于标识请求所属的业务操作场景。</p> <p>枚举值：</p> <ul> <li>ACCOUNT.CHANGE_PASSWORD：在已知原密码的情况下修改密码的请求；</li> <li>ACCOUNT.CHANGE_SECURITY_QUESTION：修改账号安全问题的请求；</li> <li>ACCOUNT.CHECK_EXISTENCE：校验账号是否已存在的请求，常见于登录或注册页面输入邮箱、手机号后的预校验；</li> <li>ACCOUNT.LOGIN：登录账号的请求；</li> <li>ACCOUNT.REGISTER：注册新账号的请求；</li> <li>ACCOUNT.RESET_PASSWORD：重置密码的请求，通常通过邮箱或短信验证身份后设置新密码；</li> <li>ACCOUNT.UPDATE：修改账号关联信息的请求，例如手机号、邮箱、支付卡号、收货地址等；</li> <li>ASSET.CHECK_GIFTCARD_BALANCE：通过卡号等信息查询礼品卡余额的请求；</li> <li>ASSET.CHECK_LOYALTY_POINTS：查询账号积分余额的请求；</li> <li>ASSET.REDEEM_CODE：使用兑换码兑换权益的请求；</li> <li>BROWSE.QUERY：站内搜索商品或服务的请求；</li> <li>PAYMENT.ADD_TO_CART：将商品加入购物车的请求；</li> <li>PAYMENT.GET_METHODS：获取账号已绑定支付方式列表的请求；</li> <li>PAYMENT.MAKE_PAYMENT：提交支付、结算或转账的请求。</li> </ul>
     * @param string $UserIDSource <p>用户标识在请求来源中的位置，其中 key 替换为实际的参数名称。</p><p>取值有：</p><ul><li>http.request.cookies["key"]：从 Cookie 中获取名称为 key 的 Cookie 值；</li><li>http.request.headers["key"]：从请求头中获取名称为 key 的头部值；</li><li>http.request.uri.args["key"]：从 URL 查询参数中获取名称为 key 的参数值。</li></ul>
     * @param UserRiskProfile $UserRiskProfile <p>用户风险等级配置。</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RequestPurpose",$param) and $param["RequestPurpose"] !== null) {
            $this->RequestPurpose = $param["RequestPurpose"];
        }

        if (array_key_exists("UserIDSource",$param) and $param["UserIDSource"] !== null) {
            $this->UserIDSource = $param["UserIDSource"];
        }

        if (array_key_exists("UserRiskProfile",$param) and $param["UserRiskProfile"] !== null) {
            $this->UserRiskProfile = new UserRiskProfile();
            $this->UserRiskProfile->deserialize($param["UserRiskProfile"]);
        }
    }
}

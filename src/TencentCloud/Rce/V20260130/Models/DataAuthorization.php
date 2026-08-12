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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据授权信息
 *
 * @method string getDataProviderName() 获取<p>数据委托方，客户主体名称</p>
 * @method void setDataProviderName(string $DataProviderName) 设置<p>数据委托方，客户主体名称</p>
 * @method string getDataRecipientName() 获取<p>数据受托方，腾讯云主体名称，固定填：腾讯云计算（北京）有限责任公司</p>
 * @method void setDataRecipientName(string $DataRecipientName) 设置<p>数据受托方，腾讯云主体名称，固定填：腾讯云计算（北京）有限责任公司</p>
 * @method array getUserDataType() 获取<p>客户请求RCE所提供的用户数据类型，支持多选</p><p>枚举值：</p><ul><li>1： 手机号</li><li>2： 微信开放账号</li><li>3： QQ开放账号</li><li>4： IP地址</li><li>5： URL网址</li><li>999： 其他</li></ul>
 * @method void setUserDataType(array $UserDataType) 设置<p>客户请求RCE所提供的用户数据类型，支持多选</p><p>枚举值：</p><ul><li>1： 手机号</li><li>2： 微信开放账号</li><li>3： QQ开放账号</li><li>4： IP地址</li><li>5： URL网址</li><li>999： 其他</li></ul>
 * @method boolean getIsAuthorized() 获取<p>客户是否已按合规指南要求获取用户授权，同意客户委托腾讯云处理入参信息</p><p>枚举值：</p><ul><li>true： 已授权</li><li>false： 未授权</li></ul>
 * @method void setIsAuthorized(boolean $IsAuthorized) 设置<p>客户是否已按合规指南要求获取用户授权，同意客户委托腾讯云处理入参信息</p><p>枚举值：</p><ul><li>true： 已授权</li><li>false： 未授权</li></ul>
 * @method boolean getIsOrderHanding() 获取<p>客户是否已按合规指南要求获取用户授权，同意腾讯云结合客户提供的信息，对已合法收集的用户数据进行必要处理得出服务结果，并返回给客户</p><p>枚举值：</p><ul><li>true： 已授权</li><li>false： 未授权</li></ul>
 * @method void setIsOrderHanding(boolean $IsOrderHanding) 设置<p>客户是否已按合规指南要求获取用户授权，同意腾讯云结合客户提供的信息，对已合法收集的用户数据进行必要处理得出服务结果，并返回给客户</p><p>枚举值：</p><ul><li>true： 已授权</li><li>false： 未授权</li></ul>
 * @method integer getAuthorizationDeadline() 获取<p>客户获得的用户授权期限Unix时间戳（单位秒），不填默认无固定期限</p>
 * @method void setAuthorizationDeadline(integer $AuthorizationDeadline) 设置<p>客户获得的用户授权期限Unix时间戳（单位秒），不填默认无固定期限</p>
 * @method string getPrivacyPolicyLink() 获取<p>客户获得用户授权所依赖的协议地址</p>
 * @method void setPrivacyPolicyLink(string $PrivacyPolicyLink) 设置<p>客户获得用户授权所依赖的协议地址</p>
 */
class DataAuthorization extends AbstractModel
{
    /**
     * @var string <p>数据委托方，客户主体名称</p>
     */
    public $DataProviderName;

    /**
     * @var string <p>数据受托方，腾讯云主体名称，固定填：腾讯云计算（北京）有限责任公司</p>
     */
    public $DataRecipientName;

    /**
     * @var array <p>客户请求RCE所提供的用户数据类型，支持多选</p><p>枚举值：</p><ul><li>1： 手机号</li><li>2： 微信开放账号</li><li>3： QQ开放账号</li><li>4： IP地址</li><li>5： URL网址</li><li>999： 其他</li></ul>
     */
    public $UserDataType;

    /**
     * @var boolean <p>客户是否已按合规指南要求获取用户授权，同意客户委托腾讯云处理入参信息</p><p>枚举值：</p><ul><li>true： 已授权</li><li>false： 未授权</li></ul>
     */
    public $IsAuthorized;

    /**
     * @var boolean <p>客户是否已按合规指南要求获取用户授权，同意腾讯云结合客户提供的信息，对已合法收集的用户数据进行必要处理得出服务结果，并返回给客户</p><p>枚举值：</p><ul><li>true： 已授权</li><li>false： 未授权</li></ul>
     */
    public $IsOrderHanding;

    /**
     * @var integer <p>客户获得的用户授权期限Unix时间戳（单位秒），不填默认无固定期限</p>
     */
    public $AuthorizationDeadline;

    /**
     * @var string <p>客户获得用户授权所依赖的协议地址</p>
     */
    public $PrivacyPolicyLink;

    /**
     * @param string $DataProviderName <p>数据委托方，客户主体名称</p>
     * @param string $DataRecipientName <p>数据受托方，腾讯云主体名称，固定填：腾讯云计算（北京）有限责任公司</p>
     * @param array $UserDataType <p>客户请求RCE所提供的用户数据类型，支持多选</p><p>枚举值：</p><ul><li>1： 手机号</li><li>2： 微信开放账号</li><li>3： QQ开放账号</li><li>4： IP地址</li><li>5： URL网址</li><li>999： 其他</li></ul>
     * @param boolean $IsAuthorized <p>客户是否已按合规指南要求获取用户授权，同意客户委托腾讯云处理入参信息</p><p>枚举值：</p><ul><li>true： 已授权</li><li>false： 未授权</li></ul>
     * @param boolean $IsOrderHanding <p>客户是否已按合规指南要求获取用户授权，同意腾讯云结合客户提供的信息，对已合法收集的用户数据进行必要处理得出服务结果，并返回给客户</p><p>枚举值：</p><ul><li>true： 已授权</li><li>false： 未授权</li></ul>
     * @param integer $AuthorizationDeadline <p>客户获得的用户授权期限Unix时间戳（单位秒），不填默认无固定期限</p>
     * @param string $PrivacyPolicyLink <p>客户获得用户授权所依赖的协议地址</p>
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
        if (array_key_exists("DataProviderName",$param) and $param["DataProviderName"] !== null) {
            $this->DataProviderName = $param["DataProviderName"];
        }

        if (array_key_exists("DataRecipientName",$param) and $param["DataRecipientName"] !== null) {
            $this->DataRecipientName = $param["DataRecipientName"];
        }

        if (array_key_exists("UserDataType",$param) and $param["UserDataType"] !== null) {
            $this->UserDataType = $param["UserDataType"];
        }

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("IsOrderHanding",$param) and $param["IsOrderHanding"] !== null) {
            $this->IsOrderHanding = $param["IsOrderHanding"];
        }

        if (array_key_exists("AuthorizationDeadline",$param) and $param["AuthorizationDeadline"] !== null) {
            $this->AuthorizationDeadline = $param["AuthorizationDeadline"];
        }

        if (array_key_exists("PrivacyPolicyLink",$param) and $param["PrivacyPolicyLink"] !== null) {
            $this->PrivacyPolicyLink = $param["PrivacyPolicyLink"];
        }
    }
}

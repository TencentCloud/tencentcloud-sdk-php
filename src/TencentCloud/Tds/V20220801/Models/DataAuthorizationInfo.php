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
namespace TencentCloud\Tds\V20220801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据授权信息
 *
 * @method string getDataProviderName() 获取数据委托方、需求方：客户主体名称。
 * @method void setDataProviderName(string $DataProviderName) 设置数据委托方、需求方：客户主体名称。
 * @method string getDataRecipientName() 获取数据受托方、提供方：腾讯云主体名称。

固定填：腾讯云计算（北京）有限责任公司
 * @method void setDataRecipientName(string $DataRecipientName) 设置数据受托方、提供方：腾讯云主体名称。

固定填：腾讯云计算（北京）有限责任公司
 * @method array getUserDataType() 获取客户请求所涉及的用户个人信息类型，支持多选。实际以接口请求传参为准。
1-手机号；
2-微信开放账号；
3-QQ开放账号；
4-IP地址；
 * @method void setUserDataType(array $UserDataType) 设置客户请求所涉及的用户个人信息类型，支持多选。实际以接口请求传参为准。
1-手机号；
2-微信开放账号；
3-QQ开放账号；
4-IP地址；
 * @method integer getIsAuthorize() 获取客户是否已按合规指南要求获取用户授权，同意客户委托腾讯云处理入参信息，结合已合法收集的用户数据进行必要处理得出服务结果，并返回给客户。

1-已授权；其它值为未授权。
 * @method void setIsAuthorize(integer $IsAuthorize) 设置客户是否已按合规指南要求获取用户授权，同意客户委托腾讯云处理入参信息，结合已合法收集的用户数据进行必要处理得出服务结果，并返回给客户。

1-已授权；其它值为未授权。
 * @method integer getAuthorizationTerm() 获取客户获得的用户授权期限时间戳（单位秒）。

不填或0默认无固定期限。
 * @method void setAuthorizationTerm(integer $AuthorizationTerm) 设置客户获得的用户授权期限时间戳（单位秒）。

不填或0默认无固定期限。
 * @method string getPrivacyPolicyLink() 获取客户获得用户授权所依赖的协议地址。
 * @method void setPrivacyPolicyLink(string $PrivacyPolicyLink) 设置客户获得用户授权所依赖的协议地址。
 */
class DataAuthorizationInfo extends AbstractModel
{
    /**
     * @var string 数据委托方、需求方：客户主体名称。
     */
    public $DataProviderName;

    /**
     * @var string 数据受托方、提供方：腾讯云主体名称。

固定填：腾讯云计算（北京）有限责任公司
     */
    public $DataRecipientName;

    /**
     * @var array 客户请求所涉及的用户个人信息类型，支持多选。实际以接口请求传参为准。
1-手机号；
2-微信开放账号；
3-QQ开放账号；
4-IP地址；
     */
    public $UserDataType;

    /**
     * @var integer 客户是否已按合规指南要求获取用户授权，同意客户委托腾讯云处理入参信息，结合已合法收集的用户数据进行必要处理得出服务结果，并返回给客户。

1-已授权；其它值为未授权。
     */
    public $IsAuthorize;

    /**
     * @var integer 客户获得的用户授权期限时间戳（单位秒）。

不填或0默认无固定期限。
     */
    public $AuthorizationTerm;

    /**
     * @var string 客户获得用户授权所依赖的协议地址。
     */
    public $PrivacyPolicyLink;

    /**
     * @param string $DataProviderName 数据委托方、需求方：客户主体名称。
     * @param string $DataRecipientName 数据受托方、提供方：腾讯云主体名称。

固定填：腾讯云计算（北京）有限责任公司
     * @param array $UserDataType 客户请求所涉及的用户个人信息类型，支持多选。实际以接口请求传参为准。
1-手机号；
2-微信开放账号；
3-QQ开放账号；
4-IP地址；
     * @param integer $IsAuthorize 客户是否已按合规指南要求获取用户授权，同意客户委托腾讯云处理入参信息，结合已合法收集的用户数据进行必要处理得出服务结果，并返回给客户。

1-已授权；其它值为未授权。
     * @param integer $AuthorizationTerm 客户获得的用户授权期限时间戳（单位秒）。

不填或0默认无固定期限。
     * @param string $PrivacyPolicyLink 客户获得用户授权所依赖的协议地址。
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

        if (array_key_exists("IsAuthorize",$param) and $param["IsAuthorize"] !== null) {
            $this->IsAuthorize = $param["IsAuthorize"];
        }

        if (array_key_exists("AuthorizationTerm",$param) and $param["AuthorizationTerm"] !== null) {
            $this->AuthorizationTerm = $param["AuthorizationTerm"];
        }

        if (array_key_exists("PrivacyPolicyLink",$param) and $param["PrivacyPolicyLink"] !== null) {
            $this->PrivacyPolicyLink = $param["PrivacyPolicyLink"];
        }
    }
}

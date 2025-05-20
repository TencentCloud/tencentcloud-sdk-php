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
 * CreateUserNameChangeUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method string getEndpoint() 获取要跳转的链接类型

<ul>
<li><strong>HTTP</strong>：适用于短信通知或H5跳转的电子签小程序HTTP长链接</li>
<li><strong>HTTP_SHORT_URL</strong>：适用于短信通知或H5跳转的电子签小程序HTTP短链接</li>
<li><strong>APP</strong>：（默认类型）适用于第三方APP或小程序跳转的电子签小程序路径</li>
</ul>

注：如果不传递，默认值是 <font color="red"> HTTP </font>
 * @method void setEndpoint(string $Endpoint) 设置要跳转的链接类型

<ul>
<li><strong>HTTP</strong>：适用于短信通知或H5跳转的电子签小程序HTTP长链接</li>
<li><strong>HTTP_SHORT_URL</strong>：适用于短信通知或H5跳转的电子签小程序HTTP短链接</li>
<li><strong>APP</strong>：（默认类型）适用于第三方APP或小程序跳转的电子签小程序路径</li>
</ul>

注：如果不传递，默认值是 <font color="red"> HTTP </font>
 * @method string getUserData() 获取在用户完成改名后，其自定义数据将通过[企业引导个人更名后回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E5%85%AB-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E6%9B%B4%E5%90%8D%E5%90%8E%E5%9B%9E%E8%B0%83)返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。
 * @method void setUserData(string $UserData) 设置在用户完成改名后，其自定义数据将通过[企业引导个人更名后回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E5%85%AB-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E6%9B%B4%E5%90%8D%E5%90%8E%E5%9B%9E%E8%B0%83)返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。
 */
class CreateUserNameChangeUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var string 要跳转的链接类型

<ul>
<li><strong>HTTP</strong>：适用于短信通知或H5跳转的电子签小程序HTTP长链接</li>
<li><strong>HTTP_SHORT_URL</strong>：适用于短信通知或H5跳转的电子签小程序HTTP短链接</li>
<li><strong>APP</strong>：（默认类型）适用于第三方APP或小程序跳转的电子签小程序路径</li>
</ul>

注：如果不传递，默认值是 <font color="red"> HTTP </font>
     */
    public $Endpoint;

    /**
     * @var string 在用户完成改名后，其自定义数据将通过[企业引导个人更名后回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E5%85%AB-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E6%9B%B4%E5%90%8D%E5%90%8E%E5%9B%9E%E8%B0%83)返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。
     */
    public $UserData;

    /**
     * @param UserInfo $Operator 操作人信息
     * @param string $Endpoint 要跳转的链接类型

<ul>
<li><strong>HTTP</strong>：适用于短信通知或H5跳转的电子签小程序HTTP长链接</li>
<li><strong>HTTP_SHORT_URL</strong>：适用于短信通知或H5跳转的电子签小程序HTTP短链接</li>
<li><strong>APP</strong>：（默认类型）适用于第三方APP或小程序跳转的电子签小程序路径</li>
</ul>

注：如果不传递，默认值是 <font color="red"> HTTP </font>
     * @param string $UserData 在用户完成改名后，其自定义数据将通过[企业引导个人更名后回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E5%85%AB-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E6%9B%B4%E5%90%8D%E5%90%8E%E5%9B%9E%E8%B0%83)返回，以便用户确认其个人数据信息。请注意，自定义数据的字符长度上限为1000，且必须采用base64编码格式。
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

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }
    }
}

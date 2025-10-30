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
 * 企业批量注册链接信息
 *
 * @method string getAuthUrl() 获取企业批量注册链接，根据Endpoint的不同设置，返回不同的链接地址。失效时间：7天
跳转链接, 链接的有效期根据企业,员工状态和终端等有区别, 可以参考下表
<table> <thead> <tr> <th>Endpoint</th> <th>示例</th> <th>链接有效期限</th> </tr> </thead>  <tbody>
 <tr> <td>PC</td> <td>https://qian.tencent.com/console/batch-register?token=yDSx0UUgtjuaf4UEfd2MjCnfI1iuXFE6&orgName=批量认证线上测试企业9</td> <td>7天</td> </tr> 
<tr> <td>PC_SHORT_URL</td> <td>https://test.essurl.cn/8gDKUBAWK8</td> <td>7天</td> </tr> 
<tr> <td>APP</td> <td>/pages/guide/index?to=REGISTER_ENTERPRISE_FOR_BATCH&urlAuthToken=yDSx0UUgtjuaf4UEfd2MjCnfI1iuXFE6&orgName=批量认证线上测试企业9</td> <td>7天</td> </tr> </tbody> </table>
注： 
`1.创建的链接应避免被转义，如：&被转义为\u0026；如使用Postman请求后，请选择响应类型为 JSON，否则链接将被转义`

 * @method void setAuthUrl(string $AuthUrl) 设置企业批量注册链接，根据Endpoint的不同设置，返回不同的链接地址。失效时间：7天
跳转链接, 链接的有效期根据企业,员工状态和终端等有区别, 可以参考下表
<table> <thead> <tr> <th>Endpoint</th> <th>示例</th> <th>链接有效期限</th> </tr> </thead>  <tbody>
 <tr> <td>PC</td> <td>https://qian.tencent.com/console/batch-register?token=yDSx0UUgtjuaf4UEfd2MjCnfI1iuXFE6&orgName=批量认证线上测试企业9</td> <td>7天</td> </tr> 
<tr> <td>PC_SHORT_URL</td> <td>https://test.essurl.cn/8gDKUBAWK8</td> <td>7天</td> </tr> 
<tr> <td>APP</td> <td>/pages/guide/index?to=REGISTER_ENTERPRISE_FOR_BATCH&urlAuthToken=yDSx0UUgtjuaf4UEfd2MjCnfI1iuXFE6&orgName=批量认证线上测试企业9</td> <td>7天</td> </tr> </tbody> </table>
注： 
`1.创建的链接应避免被转义，如：&被转义为\u0026；如使用Postman请求后，请选择响应类型为 JSON，否则链接将被转义`

 * @method string getErrorMessage() 获取企业批量注册的错误信息，例如：企业三要素不通过	
 * @method void setErrorMessage(string $ErrorMessage) 设置企业批量注册的错误信息，例如：企业三要素不通过	
 * @method string getSubTaskId() 获取企业批量注册的唯一 Id， 此 Id 可以用在[创建企业批量认证链接-单链接](https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationAuthorizationUrl)。
 * @method void setSubTaskId(string $SubTaskId) 设置企业批量注册的唯一 Id， 此 Id 可以用在[创建企业批量认证链接-单链接](https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationAuthorizationUrl)。
 * @method string getOrganizationName() 获取企业批量注册 传递过来的企业名称，方便客户定位企业
 * @method void setOrganizationName(string $OrganizationName) 设置企业批量注册 传递过来的企业名称，方便客户定位企业
 */
class OrganizationAuthUrl extends AbstractModel
{
    /**
     * @var string 企业批量注册链接，根据Endpoint的不同设置，返回不同的链接地址。失效时间：7天
跳转链接, 链接的有效期根据企业,员工状态和终端等有区别, 可以参考下表
<table> <thead> <tr> <th>Endpoint</th> <th>示例</th> <th>链接有效期限</th> </tr> </thead>  <tbody>
 <tr> <td>PC</td> <td>https://qian.tencent.com/console/batch-register?token=yDSx0UUgtjuaf4UEfd2MjCnfI1iuXFE6&orgName=批量认证线上测试企业9</td> <td>7天</td> </tr> 
<tr> <td>PC_SHORT_URL</td> <td>https://test.essurl.cn/8gDKUBAWK8</td> <td>7天</td> </tr> 
<tr> <td>APP</td> <td>/pages/guide/index?to=REGISTER_ENTERPRISE_FOR_BATCH&urlAuthToken=yDSx0UUgtjuaf4UEfd2MjCnfI1iuXFE6&orgName=批量认证线上测试企业9</td> <td>7天</td> </tr> </tbody> </table>
注： 
`1.创建的链接应避免被转义，如：&被转义为\u0026；如使用Postman请求后，请选择响应类型为 JSON，否则链接将被转义`

     */
    public $AuthUrl;

    /**
     * @var string 企业批量注册的错误信息，例如：企业三要素不通过	
     */
    public $ErrorMessage;

    /**
     * @var string 企业批量注册的唯一 Id， 此 Id 可以用在[创建企业批量认证链接-单链接](https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationAuthorizationUrl)。
     */
    public $SubTaskId;

    /**
     * @var string 企业批量注册 传递过来的企业名称，方便客户定位企业
     */
    public $OrganizationName;

    /**
     * @param string $AuthUrl 企业批量注册链接，根据Endpoint的不同设置，返回不同的链接地址。失效时间：7天
跳转链接, 链接的有效期根据企业,员工状态和终端等有区别, 可以参考下表
<table> <thead> <tr> <th>Endpoint</th> <th>示例</th> <th>链接有效期限</th> </tr> </thead>  <tbody>
 <tr> <td>PC</td> <td>https://qian.tencent.com/console/batch-register?token=yDSx0UUgtjuaf4UEfd2MjCnfI1iuXFE6&orgName=批量认证线上测试企业9</td> <td>7天</td> </tr> 
<tr> <td>PC_SHORT_URL</td> <td>https://test.essurl.cn/8gDKUBAWK8</td> <td>7天</td> </tr> 
<tr> <td>APP</td> <td>/pages/guide/index?to=REGISTER_ENTERPRISE_FOR_BATCH&urlAuthToken=yDSx0UUgtjuaf4UEfd2MjCnfI1iuXFE6&orgName=批量认证线上测试企业9</td> <td>7天</td> </tr> </tbody> </table>
注： 
`1.创建的链接应避免被转义，如：&被转义为\u0026；如使用Postman请求后，请选择响应类型为 JSON，否则链接将被转义`

     * @param string $ErrorMessage 企业批量注册的错误信息，例如：企业三要素不通过	
     * @param string $SubTaskId 企业批量注册的唯一 Id， 此 Id 可以用在[创建企业批量认证链接-单链接](https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationAuthorizationUrl)。
     * @param string $OrganizationName 企业批量注册 传递过来的企业名称，方便客户定位企业
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
        if (array_key_exists("AuthUrl",$param) and $param["AuthUrl"] !== null) {
            $this->AuthUrl = $param["AuthUrl"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("SubTaskId",$param) and $param["SubTaskId"] !== null) {
            $this->SubTaskId = $param["SubTaskId"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }
    }
}

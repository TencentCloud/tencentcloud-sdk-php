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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConsoleLoginUrl返回参数结构体
 *
 * @method string getConsoleUrl() 获取子客Web控制台url注意事项：
1. 所有类型的链接在企业未认证/员工未认证完成时，只要在有效期内（一年）都可以访问
2. 若企业认证完成且员工认证完成后，重新获取pc端的链接5分钟之内有效，且只能访问一次
3. 若企业认证完成且员工认证完成后，重新获取H5/APP的链接只要在有效期内（一年）都可以访问
4. 此链接仅单次有效，使用后需要再次创建新的链接（部分聊天软件，如企业微信默认会对链接进行解析，此时需要使用类似“代码片段”的方式或者放到txt文件里发送链接）
5. 创建的链接应避免被转义，如：&被转义为\u0026；如使用Postman请求后，请选择响应类型为 JSON，否则链接将被转义
 * @method void setConsoleUrl(string $ConsoleUrl) 设置子客Web控制台url注意事项：
1. 所有类型的链接在企业未认证/员工未认证完成时，只要在有效期内（一年）都可以访问
2. 若企业认证完成且员工认证完成后，重新获取pc端的链接5分钟之内有效，且只能访问一次
3. 若企业认证完成且员工认证完成后，重新获取H5/APP的链接只要在有效期内（一年）都可以访问
4. 此链接仅单次有效，使用后需要再次创建新的链接（部分聊天软件，如企业微信默认会对链接进行解析，此时需要使用类似“代码片段”的方式或者放到txt文件里发送链接）
5. 创建的链接应避免被转义，如：&被转义为\u0026；如使用Postman请求后，请选择响应类型为 JSON，否则链接将被转义
 * @method boolean getIsActivated() 获取渠道子客企业是否已开通腾讯电子签
 * @method void setIsActivated(boolean $IsActivated) 设置渠道子客企业是否已开通腾讯电子签
 * @method boolean getProxyOperatorIsVerified() 获取当前经办人是否已认证（false:未认证 true:已认证）
 * @method void setProxyOperatorIsVerified(boolean $ProxyOperatorIsVerified) 设置当前经办人是否已认证（false:未认证 true:已认证）
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateConsoleLoginUrlResponse extends AbstractModel
{
    /**
     * @var string 子客Web控制台url注意事项：
1. 所有类型的链接在企业未认证/员工未认证完成时，只要在有效期内（一年）都可以访问
2. 若企业认证完成且员工认证完成后，重新获取pc端的链接5分钟之内有效，且只能访问一次
3. 若企业认证完成且员工认证完成后，重新获取H5/APP的链接只要在有效期内（一年）都可以访问
4. 此链接仅单次有效，使用后需要再次创建新的链接（部分聊天软件，如企业微信默认会对链接进行解析，此时需要使用类似“代码片段”的方式或者放到txt文件里发送链接）
5. 创建的链接应避免被转义，如：&被转义为\u0026；如使用Postman请求后，请选择响应类型为 JSON，否则链接将被转义
     */
    public $ConsoleUrl;

    /**
     * @var boolean 渠道子客企业是否已开通腾讯电子签
     */
    public $IsActivated;

    /**
     * @var boolean 当前经办人是否已认证（false:未认证 true:已认证）
     */
    public $ProxyOperatorIsVerified;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ConsoleUrl 子客Web控制台url注意事项：
1. 所有类型的链接在企业未认证/员工未认证完成时，只要在有效期内（一年）都可以访问
2. 若企业认证完成且员工认证完成后，重新获取pc端的链接5分钟之内有效，且只能访问一次
3. 若企业认证完成且员工认证完成后，重新获取H5/APP的链接只要在有效期内（一年）都可以访问
4. 此链接仅单次有效，使用后需要再次创建新的链接（部分聊天软件，如企业微信默认会对链接进行解析，此时需要使用类似“代码片段”的方式或者放到txt文件里发送链接）
5. 创建的链接应避免被转义，如：&被转义为\u0026；如使用Postman请求后，请选择响应类型为 JSON，否则链接将被转义
     * @param boolean $IsActivated 渠道子客企业是否已开通腾讯电子签
     * @param boolean $ProxyOperatorIsVerified 当前经办人是否已认证（false:未认证 true:已认证）
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ConsoleUrl",$param) and $param["ConsoleUrl"] !== null) {
            $this->ConsoleUrl = $param["ConsoleUrl"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("ProxyOperatorIsVerified",$param) and $param["ProxyOperatorIsVerified"] !== null) {
            $this->ProxyOperatorIsVerified = $param["ProxyOperatorIsVerified"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

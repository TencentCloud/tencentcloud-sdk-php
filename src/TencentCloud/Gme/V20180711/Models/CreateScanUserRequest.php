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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScanUser请求参数结构体
 *
 * @method integer getBizId() 获取应用ID，登录控制台 - 服务管理创建应用得到的AppID
 * @method void setBizId(integer $BizId) 设置应用ID，登录控制台 - 服务管理创建应用得到的AppID
 * @method integer getUserId() 获取需要新增送检的用户号。示例：1234
(若UserId不填，则UserIdString必填；两者选其一；两者都填以UserIdString为准)
 * @method void setUserId(integer $UserId) 设置需要新增送检的用户号。示例：1234
(若UserId不填，则UserIdString必填；两者选其一；两者都填以UserIdString为准)
 * @method string getUserIdString() 获取需要新增送检的用户号。示例："1234"
(若UserIdString不填，则UserId必填；两者选其一；两者都填以UserIdString为准)
 * @method void setUserIdString(string $UserIdString) 设置需要新增送检的用户号。示例："1234"
(若UserIdString不填，则UserId必填；两者选其一；两者都填以UserIdString为准)
 * @method integer getExpirationTime() 获取当前用户送检过期时间，单位：秒。
若参数不为0，则在过期时间之后，用户不会被送检。
若参数为0，则送检配置不会自动失效。 
 * @method void setExpirationTime(integer $ExpirationTime) 设置当前用户送检过期时间，单位：秒。
若参数不为0，则在过期时间之后，用户不会被送检。
若参数为0，则送检配置不会自动失效。 
 */
class CreateScanUserRequest extends AbstractModel
{
    /**
     * @var integer 应用ID，登录控制台 - 服务管理创建应用得到的AppID
     */
    public $BizId;

    /**
     * @var integer 需要新增送检的用户号。示例：1234
(若UserId不填，则UserIdString必填；两者选其一；两者都填以UserIdString为准)
     */
    public $UserId;

    /**
     * @var string 需要新增送检的用户号。示例："1234"
(若UserIdString不填，则UserId必填；两者选其一；两者都填以UserIdString为准)
     */
    public $UserIdString;

    /**
     * @var integer 当前用户送检过期时间，单位：秒。
若参数不为0，则在过期时间之后，用户不会被送检。
若参数为0，则送检配置不会自动失效。 
     */
    public $ExpirationTime;

    /**
     * @param integer $BizId 应用ID，登录控制台 - 服务管理创建应用得到的AppID
     * @param integer $UserId 需要新增送检的用户号。示例：1234
(若UserId不填，则UserIdString必填；两者选其一；两者都填以UserIdString为准)
     * @param string $UserIdString 需要新增送检的用户号。示例："1234"
(若UserIdString不填，则UserId必填；两者选其一；两者都填以UserIdString为准)
     * @param integer $ExpirationTime 当前用户送检过期时间，单位：秒。
若参数不为0，则在过期时间之后，用户不会被送检。
若参数为0，则送检配置不会自动失效。 
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserIdString",$param) and $param["UserIdString"] !== null) {
            $this->UserIdString = $param["UserIdString"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
        }
    }
}

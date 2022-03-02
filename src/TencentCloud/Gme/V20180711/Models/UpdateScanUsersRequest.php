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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateScanUsers请求参数结构体
 *
 * @method integer getBizId() 获取应用ID
 * @method void setBizId(integer $BizId) 设置应用ID
 * @method string getUserIdString() 获取需要送检的所有用户号。多个用户号之间用","分隔。示例："0001,0002,0003"
 * @method void setUserIdString(string $UserIdString) 设置需要送检的所有用户号。多个用户号之间用","分隔。示例："0001,0002,0003"
 * @method array getUserIdRegex() 获取符合此正则表达式规则的用户号将被送检。示例：["^6.*"] 表示所有以6开头的用户号将被送检
 * @method void setUserIdRegex(array $UserIdRegex) 设置符合此正则表达式规则的用户号将被送检。示例：["^6.*"] 表示所有以6开头的用户号将被送检
 */
class UpdateScanUsersRequest extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $BizId;

    /**
     * @var string 需要送检的所有用户号。多个用户号之间用","分隔。示例："0001,0002,0003"
     */
    public $UserIdString;

    /**
     * @var array 符合此正则表达式规则的用户号将被送检。示例：["^6.*"] 表示所有以6开头的用户号将被送检
     */
    public $UserIdRegex;

    /**
     * @param integer $BizId 应用ID
     * @param string $UserIdString 需要送检的所有用户号。多个用户号之间用","分隔。示例："0001,0002,0003"
     * @param array $UserIdRegex 符合此正则表达式规则的用户号将被送检。示例：["^6.*"] 表示所有以6开头的用户号将被送检
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

        if (array_key_exists("UserIdString",$param) and $param["UserIdString"] !== null) {
            $this->UserIdString = $param["UserIdString"];
        }

        if (array_key_exists("UserIdRegex",$param) and $param["UserIdRegex"] !== null) {
            $this->UserIdRegex = $param["UserIdRegex"];
        }
    }
}

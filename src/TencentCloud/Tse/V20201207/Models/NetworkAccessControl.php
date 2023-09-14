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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络访问策略
 *
 * @method string getMode() 获取访问模式：Whitelist|Blacklist
 * @method void setMode(string $Mode) 设置访问模式：Whitelist|Blacklist
 * @method array getCidrWhiteList() 获取白名单列表
 * @method void setCidrWhiteList(array $CidrWhiteList) 设置白名单列表
 * @method array getCidrBlackList() 获取黑名单列表
 * @method void setCidrBlackList(array $CidrBlackList) 设置黑名单列表
 */
class NetworkAccessControl extends AbstractModel
{
    /**
     * @var string 访问模式：Whitelist|Blacklist
     */
    public $Mode;

    /**
     * @var array 白名单列表
     */
    public $CidrWhiteList;

    /**
     * @var array 黑名单列表
     */
    public $CidrBlackList;

    /**
     * @param string $Mode 访问模式：Whitelist|Blacklist
     * @param array $CidrWhiteList 白名单列表
     * @param array $CidrBlackList 黑名单列表
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("CidrWhiteList",$param) and $param["CidrWhiteList"] !== null) {
            $this->CidrWhiteList = $param["CidrWhiteList"];
        }

        if (array_key_exists("CidrBlackList",$param) and $param["CidrBlackList"] !== null) {
            $this->CidrBlackList = $param["CidrBlackList"];
        }
    }
}

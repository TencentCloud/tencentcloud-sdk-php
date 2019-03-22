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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getPushDomainName() 获取推流域名。
 * @method void setPushDomainName(string $PushDomainName) 设置推流域名。
 * @method string getPlayDomainName() 获取播放域名。
 * @method void setPlayDomainName(string $PlayDomainName) 设置播放域名。
 */

/**
 *DeleteLiveDomainStrategy请求参数结构体
 */
class DeleteLiveDomainStrategyRequest extends AbstractModel
{
    /**
     * @var string 推流域名。
     */
    public $PushDomainName;

    /**
     * @var string 播放域名。
     */
    public $PlayDomainName;
    /**
     * @param string $PushDomainName 推流域名。
     * @param string $PlayDomainName 播放域名。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PushDomainName",$param) and $param["PushDomainName"] !== null) {
            $this->PushDomainName = $param["PushDomainName"];
        }

        if (array_key_exists("PlayDomainName",$param) and $param["PlayDomainName"] !== null) {
            $this->PlayDomainName = $param["PlayDomainName"];
        }
    }
}

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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLiveCallbackRule请求参数结构体
 *
 * @method string getDomainName() 获取推流域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
 * @method string getAppName() 获取推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。
 */
class DeleteLiveCallbackRuleRequest extends AbstractModel
{
    /**
     * @var string 推流域名。
     */
    public $DomainName;

    /**
     * @var string 推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。
     */
    public $AppName;

    /**
     * @param string $DomainName 推流域名。
     * @param string $AppName 推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }
    }
}

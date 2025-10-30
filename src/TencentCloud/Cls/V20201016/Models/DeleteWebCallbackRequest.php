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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteWebCallback请求参数结构体
 *
 * @method string getWebCallbackId() 获取告警渠道回调配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/api/614/115229)获取告警渠道回调配置ID
 * @method void setWebCallbackId(string $WebCallbackId) 设置告警渠道回调配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/api/614/115229)获取告警渠道回调配置ID
 */
class DeleteWebCallbackRequest extends AbstractModel
{
    /**
     * @var string 告警渠道回调配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/api/614/115229)获取告警渠道回调配置ID
     */
    public $WebCallbackId;

    /**
     * @param string $WebCallbackId 告警渠道回调配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/api/614/115229)获取告警渠道回调配置ID
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
        if (array_key_exists("WebCallbackId",$param) and $param["WebCallbackId"] !== null) {
            $this->WebCallbackId = $param["WebCallbackId"];
        }
    }
}

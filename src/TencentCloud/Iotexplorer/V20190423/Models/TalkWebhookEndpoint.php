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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Webhook工具配置列表
 *
 * @method string getUrl() 获取<p>Webhook地址，仅支持 80 和 443 端口</p>
 * @method void setUrl(string $Url) 设置<p>Webhook地址，仅支持 80 和 443 端口</p>
 * @method integer getTimeout() 获取<p>超时时间，0~30 秒</p><p>取值范围：[0, 30]</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间，0~30 秒</p><p>取值范围：[0, 30]</p>
 */
class TalkWebhookEndpoint extends AbstractModel
{
    /**
     * @var string <p>Webhook地址，仅支持 80 和 443 端口</p>
     */
    public $Url;

    /**
     * @var integer <p>超时时间，0~30 秒</p><p>取值范围：[0, 30]</p>
     */
    public $Timeout;

    /**
     * @param string $Url <p>Webhook地址，仅支持 80 和 443 端口</p>
     * @param integer $Timeout <p>超时时间，0~30 秒</p><p>取值范围：[0, 30]</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}

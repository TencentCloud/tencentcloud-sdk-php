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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档外部链接信息
 *
 * @method string getExternalUrl() 获取<p>外部链接地址</p>
 * @method void setExternalUrl(string $ExternalUrl) 设置<p>外部链接地址</p>
 * @method boolean getReplaceOriginEnabled() 获取<p>是否替换原文展示</p>
 * @method void setReplaceOriginEnabled(boolean $ReplaceOriginEnabled) 设置<p>是否替换原文展示</p>
 */
class DocExternalLink extends AbstractModel
{
    /**
     * @var string <p>外部链接地址</p>
     */
    public $ExternalUrl;

    /**
     * @var boolean <p>是否替换原文展示</p>
     */
    public $ReplaceOriginEnabled;

    /**
     * @param string $ExternalUrl <p>外部链接地址</p>
     * @param boolean $ReplaceOriginEnabled <p>是否替换原文展示</p>
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
        if (array_key_exists("ExternalUrl",$param) and $param["ExternalUrl"] !== null) {
            $this->ExternalUrl = $param["ExternalUrl"];
        }

        if (array_key_exists("ReplaceOriginEnabled",$param) and $param["ReplaceOriginEnabled"] !== null) {
            $this->ReplaceOriginEnabled = $param["ReplaceOriginEnabled"];
        }
    }
}

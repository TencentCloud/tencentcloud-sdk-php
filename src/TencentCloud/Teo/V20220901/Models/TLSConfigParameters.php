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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SSL/TLS 安全配置参数。
 *
 * @method array getVersion() 获取TLS 版本。至少填写一个，如果是多个时，需要为连续版本号，例如：开启 TLS1、1.1、1.2 和 1.3，不可仅开启 1 和 1.2 而关闭 1.1。取值有：<li>TLSv1：TLSv1 版本；</li><li>TLSv1.1：TLSv1.1 版本；</li><li>TLSv1.2：TLSv1.2 版本；</li><li>TLSv1.3：TLSv1.3 版本。</li>
 * @method void setVersion(array $Version) 设置TLS 版本。至少填写一个，如果是多个时，需要为连续版本号，例如：开启 TLS1、1.1、1.2 和 1.3，不可仅开启 1 和 1.2 而关闭 1.1。取值有：<li>TLSv1：TLSv1 版本；</li><li>TLSv1.1：TLSv1.1 版本；</li><li>TLSv1.2：TLSv1.2 版本；</li><li>TLSv1.3：TLSv1.3 版本。</li>
 * @method string getCipherSuite() 获取密码套件。详细介绍请参考 [TLS 版本及密码套件说明](https://cloud.tencent.com/document/product/1552/86545)。取值有：<li>loose-v2023：loose-v2023 密码套件；</li><li>general-v2023：general-v2023 密码套件；</li><li>strict-v2023：strict-v2023 密码套件。</li>
 * @method void setCipherSuite(string $CipherSuite) 设置密码套件。详细介绍请参考 [TLS 版本及密码套件说明](https://cloud.tencent.com/document/product/1552/86545)。取值有：<li>loose-v2023：loose-v2023 密码套件；</li><li>general-v2023：general-v2023 密码套件；</li><li>strict-v2023：strict-v2023 密码套件。</li>
 */
class TLSConfigParameters extends AbstractModel
{
    /**
     * @var array TLS 版本。至少填写一个，如果是多个时，需要为连续版本号，例如：开启 TLS1、1.1、1.2 和 1.3，不可仅开启 1 和 1.2 而关闭 1.1。取值有：<li>TLSv1：TLSv1 版本；</li><li>TLSv1.1：TLSv1.1 版本；</li><li>TLSv1.2：TLSv1.2 版本；</li><li>TLSv1.3：TLSv1.3 版本。</li>
     */
    public $Version;

    /**
     * @var string 密码套件。详细介绍请参考 [TLS 版本及密码套件说明](https://cloud.tencent.com/document/product/1552/86545)。取值有：<li>loose-v2023：loose-v2023 密码套件；</li><li>general-v2023：general-v2023 密码套件；</li><li>strict-v2023：strict-v2023 密码套件。</li>
     */
    public $CipherSuite;

    /**
     * @param array $Version TLS 版本。至少填写一个，如果是多个时，需要为连续版本号，例如：开启 TLS1、1.1、1.2 和 1.3，不可仅开启 1 和 1.2 而关闭 1.1。取值有：<li>TLSv1：TLSv1 版本；</li><li>TLSv1.1：TLSv1.1 版本；</li><li>TLSv1.2：TLSv1.2 版本；</li><li>TLSv1.3：TLSv1.3 版本。</li>
     * @param string $CipherSuite 密码套件。详细介绍请参考 [TLS 版本及密码套件说明](https://cloud.tencent.com/document/product/1552/86545)。取值有：<li>loose-v2023：loose-v2023 密码套件；</li><li>general-v2023：general-v2023 密码套件；</li><li>strict-v2023：strict-v2023 密码套件。</li>
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CipherSuite",$param) and $param["CipherSuite"] !== null) {
            $this->CipherSuite = $param["CipherSuite"];
        }
    }
}

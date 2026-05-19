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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillSecScanResult请求参数结构体
 *
 * @method string getServiceId() 获取<p>服务ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务ID</p>
 * @method string getContentHash() 获取<p>ZIP 文件的 SHA256 哈希值，格式为 sha256:hex_digest，请严格遵循文档中的zip打包规范</p>
 * @method void setContentHash(string $ContentHash) 设置<p>ZIP 文件的 SHA256 哈希值，格式为 sha256:hex_digest，请严格遵循文档中的zip打包规范</p>
 * @method string getLang() 获取<p>返回语言。支持 zh / en，默认 zh</p>
 * @method void setLang(string $Lang) 设置<p>返回语言。支持 zh / en，默认 zh</p>
 */
class DescribeSkillSecScanResultRequest extends AbstractModel
{
    /**
     * @var string <p>服务ID</p>
     */
    public $ServiceId;

    /**
     * @var string <p>ZIP 文件的 SHA256 哈希值，格式为 sha256:hex_digest，请严格遵循文档中的zip打包规范</p>
     */
    public $ContentHash;

    /**
     * @var string <p>返回语言。支持 zh / en，默认 zh</p>
     */
    public $Lang;

    /**
     * @param string $ServiceId <p>服务ID</p>
     * @param string $ContentHash <p>ZIP 文件的 SHA256 哈希值，格式为 sha256:hex_digest，请严格遵循文档中的zip打包规范</p>
     * @param string $Lang <p>返回语言。支持 zh / en，默认 zh</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ContentHash",$param) and $param["ContentHash"] !== null) {
            $this->ContentHash = $param["ContentHash"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }
    }
}

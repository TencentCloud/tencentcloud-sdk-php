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
 * 投递日志的压缩配置
 *
 * @method string getFormat() 获取压缩格式，支持gzip、lzop、snappy和none不压缩
 * @method void setFormat(string $Format) 设置压缩格式，支持gzip、lzop、snappy和none不压缩
 */
class CompressInfo extends AbstractModel
{
    /**
     * @var string 压缩格式，支持gzip、lzop、snappy和none不压缩
     */
    public $Format;

    /**
     * @param string $Format 压缩格式，支持gzip、lzop、snappy和none不压缩
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}

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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 入站下载信息（结果集 / 日志通用）.
 *
 * @method string getUrl() 获取<p>下载链接地址.</p>
 * @method void setUrl(string $Url) 设置<p>下载链接地址.</p>
 * @method string getFormat() 获取<p>文件格式（如 CSV / JSON）.</p>
 * @method void setFormat(string $Format) 设置<p>文件格式（如 CSV / JSON）.</p>
 * @method integer getSize() 获取<p>文件大小（字节）.</p>
 * @method void setSize(integer $Size) 设置<p>文件大小（字节）.</p>
 * @method integer getExpireSeconds() 获取<p>链接有效时长（秒）.</p>
 * @method void setExpireSeconds(integer $ExpireSeconds) 设置<p>链接有效时长（秒）.</p>
 */
class DownloadInfo extends AbstractModel
{
    /**
     * @var string <p>下载链接地址.</p>
     */
    public $Url;

    /**
     * @var string <p>文件格式（如 CSV / JSON）.</p>
     */
    public $Format;

    /**
     * @var integer <p>文件大小（字节）.</p>
     */
    public $Size;

    /**
     * @var integer <p>链接有效时长（秒）.</p>
     */
    public $ExpireSeconds;

    /**
     * @param string $Url <p>下载链接地址.</p>
     * @param string $Format <p>文件格式（如 CSV / JSON）.</p>
     * @param integer $Size <p>文件大小（字节）.</p>
     * @param integer $ExpireSeconds <p>链接有效时长（秒）.</p>
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

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ExpireSeconds",$param) and $param["ExpireSeconds"] !== null) {
            $this->ExpireSeconds = $param["ExpireSeconds"];
        }
    }
}

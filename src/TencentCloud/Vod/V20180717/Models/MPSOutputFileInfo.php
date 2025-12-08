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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MPS输出文件信息
 *
 * @method string getFileType() 获取MPS输出文件类型
 * @method void setFileType(string $FileType) 设置MPS输出文件类型
 * @method string getUrl() 获取MPS输出文件的URL
 * @method void setUrl(string $Url) 设置MPS输出文件的URL
 */
class MPSOutputFileInfo extends AbstractModel
{
    /**
     * @var string MPS输出文件类型
     */
    public $FileType;

    /**
     * @var string MPS输出文件的URL
     */
    public $Url;

    /**
     * @param string $FileType MPS输出文件类型
     * @param string $Url MPS输出文件的URL
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}

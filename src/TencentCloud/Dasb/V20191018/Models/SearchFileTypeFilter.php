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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于搜索文件传输记录等日志时按照protocol和method进行过滤
 *
 * @method string getProtocol() 获取需要查询的文件传输类型，如SFTP/CLIP/RDP/RZSZ
 * @method void setProtocol(string $Protocol) 设置需要查询的文件传输类型，如SFTP/CLIP/RDP/RZSZ
 * @method array getMethod() 获取在当前指定的protocol下进一步过滤具体操作类型,如剪贴板文件上传，剪贴板文件下载等
 * @method void setMethod(array $Method) 设置在当前指定的protocol下进一步过滤具体操作类型,如剪贴板文件上传，剪贴板文件下载等
 */
class SearchFileTypeFilter extends AbstractModel
{
    /**
     * @var string 需要查询的文件传输类型，如SFTP/CLIP/RDP/RZSZ
     */
    public $Protocol;

    /**
     * @var array 在当前指定的protocol下进一步过滤具体操作类型,如剪贴板文件上传，剪贴板文件下载等
     */
    public $Method;

    /**
     * @param string $Protocol 需要查询的文件传输类型，如SFTP/CLIP/RDP/RZSZ
     * @param array $Method 在当前指定的protocol下进一步过滤具体操作类型,如剪贴板文件上传，剪贴板文件下载等
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}

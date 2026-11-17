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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 伴生输入文件登记（多输入）。与主视频同桶同凭证，Name 为文件引用名，Path 为相对主视频所在目录的 COS 路径。
 *
 * @method string getName() 获取<p>伴生文件的引用名。只允许 [A-Za-z0-9._-] 路径段，可含子目录（深度 ≤3 层）；不能以 / 开头，不能包含 ..；同一请求内不重复</p>
 * @method void setName(string $Name) 设置<p>伴生文件的引用名。只允许 [A-Za-z0-9._-] 路径段，可含子目录（深度 ≤3 层）；不能以 / 开头，不能包含 ..；同一请求内不重复</p>
 * @method string getPath() 获取<p>伴生文件相对主视频所在目录（含文件名）的 COS 相对路径。必须为相对路径（不能以 / 开头），长度 ≤128 字节，允许 ../ 上溯最多 2 层；批量接口支持 ${FileName} 占位符（替换为该处理项主视频文件名，不含扩展名</p>
 * @method void setPath(string $Path) 设置<p>伴生文件相对主视频所在目录（含文件名）的 COS 相对路径。必须为相对路径（不能以 / 开头），长度 ≤128 字节，允许 ../ 上溯最多 2 层；批量接口支持 ${FileName} 占位符（替换为该处理项主视频文件名，不含扩展名</p>
 */
class ExtraSourceInfo extends AbstractModel
{
    /**
     * @var string <p>伴生文件的引用名。只允许 [A-Za-z0-9._-] 路径段，可含子目录（深度 ≤3 层）；不能以 / 开头，不能包含 ..；同一请求内不重复</p>
     */
    public $Name;

    /**
     * @var string <p>伴生文件相对主视频所在目录（含文件名）的 COS 相对路径。必须为相对路径（不能以 / 开头），长度 ≤128 字节，允许 ../ 上溯最多 2 层；批量接口支持 ${FileName} 占位符（替换为该处理项主视频文件名，不含扩展名</p>
     */
    public $Path;

    /**
     * @param string $Name <p>伴生文件的引用名。只允许 [A-Za-z0-9._-] 路径段，可含子目录（深度 ≤3 层）；不能以 / 开头，不能包含 ..；同一请求内不重复</p>
     * @param string $Path <p>伴生文件相对主视频所在目录（含文件名）的 COS 相对路径。必须为相对路径（不能以 / 开头），长度 ≤128 字节，允许 ../ 上溯最多 2 层；批量接口支持 ${FileName} 占位符（替换为该处理项主视频文件名，不含扩展名</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}

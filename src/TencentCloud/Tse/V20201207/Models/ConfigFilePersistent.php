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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置文件持久化
 *
 * @method string getEncoding() 获取文件编码
 * @method void setEncoding(string $Encoding) 设置文件编码
 * @method string getPath() 获取文件下发路径
 * @method void setPath(string $Path) 设置文件下发路径
 * @method string getPostCmd() 获取文件后置命令
 * @method void setPostCmd(string $PostCmd) 设置文件后置命令
 */
class ConfigFilePersistent extends AbstractModel
{
    /**
     * @var string 文件编码
     */
    public $Encoding;

    /**
     * @var string 文件下发路径
     */
    public $Path;

    /**
     * @var string 文件后置命令
     */
    public $PostCmd;

    /**
     * @param string $Encoding 文件编码
     * @param string $Path 文件下发路径
     * @param string $PostCmd 文件后置命令
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
        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("PostCmd",$param) and $param["PostCmd"] !== null) {
            $this->PostCmd = $param["PostCmd"];
        }
    }
}

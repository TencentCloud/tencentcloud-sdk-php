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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTKEEdgeScript返回参数结构体
 *
 * @method string getLink() 获取下载链接
 * @method void setLink(string $Link) 设置下载链接
 * @method string getToken() 获取下载需要的token
 * @method void setToken(string $Token) 设置下载需要的token
 * @method string getCommand() 获取下载命令
 * @method void setCommand(string $Command) 设置下载命令
 * @method string getScriptVersion() 获取edgectl脚本版本，默认拉取最新版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptVersion(string $ScriptVersion) 设置edgectl脚本版本，默认拉取最新版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTKEEdgeScriptResponse extends AbstractModel
{
    /**
     * @var string 下载链接
     */
    public $Link;

    /**
     * @var string 下载需要的token
     */
    public $Token;

    /**
     * @var string 下载命令
     */
    public $Command;

    /**
     * @var string edgectl脚本版本，默认拉取最新版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Link 下载链接
     * @param string $Token 下载需要的token
     * @param string $Command 下载命令
     * @param string $ScriptVersion edgectl脚本版本，默认拉取最新版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Link",$param) and $param["Link"] !== null) {
            $this->Link = $param["Link"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("ScriptVersion",$param) and $param["ScriptVersion"] !== null) {
            $this->ScriptVersion = $param["ScriptVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

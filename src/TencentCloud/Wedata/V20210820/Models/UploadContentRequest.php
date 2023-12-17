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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadContent请求参数结构体
 *
 * @method ScriptRequestInfo getScriptRequestInfo() 获取脚本上传信息
 * @method void setScriptRequestInfo(ScriptRequestInfo $ScriptRequestInfo) 设置脚本上传信息
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 */
class UploadContentRequest extends AbstractModel
{
    /**
     * @var ScriptRequestInfo 脚本上传信息
     */
    public $ScriptRequestInfo;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @param ScriptRequestInfo $ScriptRequestInfo 脚本上传信息
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
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
        if (array_key_exists("ScriptRequestInfo",$param) and $param["ScriptRequestInfo"] !== null) {
            $this->ScriptRequestInfo = new ScriptRequestInfo();
            $this->ScriptRequestInfo->deserialize($param["ScriptRequestInfo"]);
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }
    }
}

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
 * CreateCmdTemplate请求参数结构体
 *
 * @method string getName() 获取模板名，最大长度32字符，不能包含空白字符
 * @method void setName(string $Name) 设置模板名，最大长度32字符，不能包含空白字符
 * @method string getCmdList() 获取命令列表，\n分隔，最大长度32768字节
 * @method void setCmdList(string $CmdList) 设置命令列表，\n分隔，最大长度32768字节
 * @method integer getEncoding() 获取标识cmdlist字段前端是否为base64加密传值.
0:表示非base64加密
1:表示是base64加密
 * @method void setEncoding(integer $Encoding) 设置标识cmdlist字段前端是否为base64加密传值.
0:表示非base64加密
1:表示是base64加密
 */
class CreateCmdTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名，最大长度32字符，不能包含空白字符
     */
    public $Name;

    /**
     * @var string 命令列表，\n分隔，最大长度32768字节
     */
    public $CmdList;

    /**
     * @var integer 标识cmdlist字段前端是否为base64加密传值.
0:表示非base64加密
1:表示是base64加密
     */
    public $Encoding;

    /**
     * @param string $Name 模板名，最大长度32字符，不能包含空白字符
     * @param string $CmdList 命令列表，\n分隔，最大长度32768字节
     * @param integer $Encoding 标识cmdlist字段前端是否为base64加密传值.
0:表示非base64加密
1:表示是base64加密
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

        if (array_key_exists("CmdList",$param) and $param["CmdList"] !== null) {
            $this->CmdList = $param["CmdList"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }
    }
}

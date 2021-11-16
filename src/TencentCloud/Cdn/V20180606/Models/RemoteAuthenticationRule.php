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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 远程鉴权规则。
 *
 * @method string getServer() 获取远程鉴权Server。
默认值:和上层配置的"Server"一致；
 * @method void setServer(string $Server) 设置远程鉴权Server。
默认值:和上层配置的"Server"一致；
 * @method string getAuthMethod() 获取请求远程鉴权服务器的http方法；取值范围[get,post,head,all]; 
all: 表示"遵循终端用户请求方法"
默认值: all
 * @method void setAuthMethod(string $AuthMethod) 设置请求远程鉴权服务器的http方法；取值范围[get,post,head,all]; 
all: 表示"遵循终端用户请求方法"
默认值: all
 * @method string getRuleType() 获取规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定目录生效
path：指定文件绝对路径生效
默认值:all
 * @method void setRuleType(string $RuleType) 设置规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定目录生效
path：指定文件绝对路径生效
默认值:all
 * @method array getRulePaths() 获取对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
index 时填充 /
默认值:*
 * @method void setRulePaths(array $RulePaths) 设置对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
index 时填充 /
默认值:*
 * @method integer getAuthTimeout() 获取请求远程鉴权服务器超时时间，单位毫秒；
取值范围：[1,30 000]
默认值:20000
 * @method void setAuthTimeout(integer $AuthTimeout) 设置请求远程鉴权服务器超时时间，单位毫秒；
取值范围：[1,30 000]
默认值:20000
 * @method string getAuthTimeoutAction() 获取请求远程鉴权服务器超时后执行拦截或者放行；
RETURN_200: 超时后放行；
RETURN_403:超时拦截；
默认值:RETURN_200
 * @method void setAuthTimeoutAction(string $AuthTimeoutAction) 设置请求远程鉴权服务器超时后执行拦截或者放行；
RETURN_200: 超时后放行；
RETURN_403:超时拦截；
默认值:RETURN_200
 */
class RemoteAuthenticationRule extends AbstractModel
{
    /**
     * @var string 远程鉴权Server。
默认值:和上层配置的"Server"一致；
     */
    public $Server;

    /**
     * @var string 请求远程鉴权服务器的http方法；取值范围[get,post,head,all]; 
all: 表示"遵循终端用户请求方法"
默认值: all
     */
    public $AuthMethod;

    /**
     * @var string 规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定目录生效
path：指定文件绝对路径生效
默认值:all
     */
    public $RuleType;

    /**
     * @var array 对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
index 时填充 /
默认值:*
     */
    public $RulePaths;

    /**
     * @var integer 请求远程鉴权服务器超时时间，单位毫秒；
取值范围：[1,30 000]
默认值:20000
     */
    public $AuthTimeout;

    /**
     * @var string 请求远程鉴权服务器超时后执行拦截或者放行；
RETURN_200: 超时后放行；
RETURN_403:超时拦截；
默认值:RETURN_200
     */
    public $AuthTimeoutAction;

    /**
     * @param string $Server 远程鉴权Server。
默认值:和上层配置的"Server"一致；
     * @param string $AuthMethod 请求远程鉴权服务器的http方法；取值范围[get,post,head,all]; 
all: 表示"遵循终端用户请求方法"
默认值: all
     * @param string $RuleType 规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定目录生效
path：指定文件绝对路径生效
默认值:all
     * @param array $RulePaths 对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
index 时填充 /
默认值:*
     * @param integer $AuthTimeout 请求远程鉴权服务器超时时间，单位毫秒；
取值范围：[1,30 000]
默认值:20000
     * @param string $AuthTimeoutAction 请求远程鉴权服务器超时后执行拦截或者放行；
RETURN_200: 超时后放行；
RETURN_403:超时拦截；
默认值:RETURN_200
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
        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("AuthMethod",$param) and $param["AuthMethod"] !== null) {
            $this->AuthMethod = $param["AuthMethod"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }

        if (array_key_exists("AuthTimeout",$param) and $param["AuthTimeout"] !== null) {
            $this->AuthTimeout = $param["AuthTimeout"];
        }

        if (array_key_exists("AuthTimeoutAction",$param) and $param["AuthTimeoutAction"] !== null) {
            $this->AuthTimeoutAction = $param["AuthTimeoutAction"];
        }
    }
}

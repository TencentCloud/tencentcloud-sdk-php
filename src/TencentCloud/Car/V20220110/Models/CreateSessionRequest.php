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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSession请求参数结构体
 *
 * @method string getUserId() 获取唯一用户身份标识，由业务方自定义，平台不予理解。（可根据业务需要决定使用用户的唯一身份标识或是使用时间戳随机生成；在用户重连时应保持UserId不变）
 * @method void setUserId(string $UserId) 设置唯一用户身份标识，由业务方自定义，平台不予理解。（可根据业务需要决定使用用户的唯一身份标识或是使用时间戳随机生成；在用户重连时应保持UserId不变）
 * @method string getUserIp() 获取用户IP，用户客户端的公网IP，用于就近调度
 * @method void setUserIp(string $UserIp) 设置用户IP，用户客户端的公网IP，用于就近调度
 * @method string getClientSession() 获取客户端session信息，从SDK请求中获得。特殊的，当 RunMode 参数为 RunWithoutClient 时，该字段可以为空
 * @method void setClientSession(string $ClientSession) 设置客户端session信息，从SDK请求中获得。特殊的，当 RunMode 参数为 RunWithoutClient 时，该字段可以为空
 * @method string getRunMode() 获取云端运行模式。
RunWithoutClient：允许无客户端连接的情况下仍保持云端 App 运行
默认值（空）：要求必须有客户端连接才会保持云端 App 运行。
 * @method void setRunMode(string $RunMode) 设置云端运行模式。
RunWithoutClient：允许无客户端连接的情况下仍保持云端 App 运行
默认值（空）：要求必须有客户端连接才会保持云端 App 运行。
 * @method string getHostUserId() 获取【多人互动】房主用户ID，在多人互动模式下为必填字段。
如果该用户是房主，HostUserId需要和UserId保持一致；
如果该用户非房主，HostUserId需要填写房主的HostUserId。
 * @method void setHostUserId(string $HostUserId) 设置【多人互动】房主用户ID，在多人互动模式下为必填字段。
如果该用户是房主，HostUserId需要和UserId保持一致；
如果该用户非房主，HostUserId需要填写房主的HostUserId。
 * @method string getRole() 获取【多人互动】角色。
Player：玩家（可通过键鼠等操作应用）
Viewer：观察者（只能观看，无法操作）
 * @method void setRole(string $Role) 设置【多人互动】角色。
Player：玩家（可通过键鼠等操作应用）
Viewer：观察者（只能观看，无法操作）
 */
class CreateSessionRequest extends AbstractModel
{
    /**
     * @var string 唯一用户身份标识，由业务方自定义，平台不予理解。（可根据业务需要决定使用用户的唯一身份标识或是使用时间戳随机生成；在用户重连时应保持UserId不变）
     */
    public $UserId;

    /**
     * @var string 用户IP，用户客户端的公网IP，用于就近调度
     */
    public $UserIp;

    /**
     * @var string 客户端session信息，从SDK请求中获得。特殊的，当 RunMode 参数为 RunWithoutClient 时，该字段可以为空
     */
    public $ClientSession;

    /**
     * @var string 云端运行模式。
RunWithoutClient：允许无客户端连接的情况下仍保持云端 App 运行
默认值（空）：要求必须有客户端连接才会保持云端 App 运行。
     */
    public $RunMode;

    /**
     * @var string 【多人互动】房主用户ID，在多人互动模式下为必填字段。
如果该用户是房主，HostUserId需要和UserId保持一致；
如果该用户非房主，HostUserId需要填写房主的HostUserId。
     */
    public $HostUserId;

    /**
     * @var string 【多人互动】角色。
Player：玩家（可通过键鼠等操作应用）
Viewer：观察者（只能观看，无法操作）
     */
    public $Role;

    /**
     * @param string $UserId 唯一用户身份标识，由业务方自定义，平台不予理解。（可根据业务需要决定使用用户的唯一身份标识或是使用时间戳随机生成；在用户重连时应保持UserId不变）
     * @param string $UserIp 用户IP，用户客户端的公网IP，用于就近调度
     * @param string $ClientSession 客户端session信息，从SDK请求中获得。特殊的，当 RunMode 参数为 RunWithoutClient 时，该字段可以为空
     * @param string $RunMode 云端运行模式。
RunWithoutClient：允许无客户端连接的情况下仍保持云端 App 运行
默认值（空）：要求必须有客户端连接才会保持云端 App 运行。
     * @param string $HostUserId 【多人互动】房主用户ID，在多人互动模式下为必填字段。
如果该用户是房主，HostUserId需要和UserId保持一致；
如果该用户非房主，HostUserId需要填写房主的HostUserId。
     * @param string $Role 【多人互动】角色。
Player：玩家（可通过键鼠等操作应用）
Viewer：观察者（只能观看，无法操作）
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("ClientSession",$param) and $param["ClientSession"] !== null) {
            $this->ClientSession = $param["ClientSession"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("HostUserId",$param) and $param["HostUserId"] !== null) {
            $this->HostUserId = $param["HostUserId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}

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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelDisableUserAutoSign请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
 * @method string getSceneKey() 获取<p>授权签使用的场景值, 可以选择的场景值如下:</p><p>枚举值：</p><ul><li>E_PRESCRIPTION_AUTO_SIGN： 电子处方场景</li><li>OTHER： 通用场景</li></ul>
 * @method void setSceneKey(string $SceneKey) 设置<p>授权签使用的场景值, 可以选择的场景值如下:</p><p>枚举值：</p><ul><li>E_PRESCRIPTION_AUTO_SIGN： 电子处方场景</li><li>OTHER： 通用场景</li></ul>
 * @method UserThreeFactor getUserInfo() 获取<p>需要关闭授权签的个人的信息，如姓名，证件信息等。</p>
 * @method void setUserInfo(UserThreeFactor $UserInfo) 设置<p>需要关闭授权签的个人的信息，如姓名，证件信息等。</p>
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 */
class ChannelDisableUserAutoSignRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
     */
    public $Agent;

    /**
     * @var string <p>授权签使用的场景值, 可以选择的场景值如下:</p><p>枚举值：</p><ul><li>E_PRESCRIPTION_AUTO_SIGN： 电子处方场景</li><li>OTHER： 通用场景</li></ul>
     */
    public $SceneKey;

    /**
     * @var UserThreeFactor <p>需要关闭授权签的个人的信息，如姓名，证件信息等。</p>
     */
    public $UserInfo;

    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
     * @param string $SceneKey <p>授权签使用的场景值, 可以选择的场景值如下:</p><p>枚举值：</p><ul><li>E_PRESCRIPTION_AUTO_SIGN： 电子处方场景</li><li>OTHER： 通用场景</li></ul>
     * @param UserThreeFactor $UserInfo <p>需要关闭授权签的个人的信息，如姓名，证件信息等。</p>
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("SceneKey",$param) and $param["SceneKey"] !== null) {
            $this->SceneKey = $param["SceneKey"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new UserThreeFactor();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}

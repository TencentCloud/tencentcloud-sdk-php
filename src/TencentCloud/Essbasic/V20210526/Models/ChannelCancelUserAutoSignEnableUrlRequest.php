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
 * ChannelCancelUserAutoSignEnableUrl请求参数结构体
 *
 * @method Agent getAgent() 获取<p>渠道应用相关信息</p>
 * @method void setAgent(Agent $Agent) 设置<p>渠道应用相关信息</p>
 * @method UserInfo getOperator() 获取<p>操作人信息</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>操作人信息</p>
 * @method string getSceneKey() 获取<p>授权签使用的场景值, 可以选择的场景值如下:</p><p>枚举值：</p><ul><li>E_PRESCRIPTION_AUTO_SIGN： 电子处方场景</li><li>OTHER： 通用场景</li></ul>
 * @method void setSceneKey(string $SceneKey) 设置<p>授权签使用的场景值, 可以选择的场景值如下:</p><p>枚举值：</p><ul><li>E_PRESCRIPTION_AUTO_SIGN： 电子处方场景</li><li>OTHER： 通用场景</li></ul>
 * @method UserThreeFactor getUserInfo() 获取<p>指定撤销链接的用户信息，包含姓名、证件类型、证件号码。</p>
 * @method void setUserInfo(UserThreeFactor $UserInfo) 设置<p>指定撤销链接的用户信息，包含姓名、证件类型、证件号码。</p>
 */
class ChannelCancelUserAutoSignEnableUrlRequest extends AbstractModel
{
    /**
     * @var Agent <p>渠道应用相关信息</p>
     */
    public $Agent;

    /**
     * @var UserInfo <p>操作人信息</p>
     */
    public $Operator;

    /**
     * @var string <p>授权签使用的场景值, 可以选择的场景值如下:</p><p>枚举值：</p><ul><li>E_PRESCRIPTION_AUTO_SIGN： 电子处方场景</li><li>OTHER： 通用场景</li></ul>
     */
    public $SceneKey;

    /**
     * @var UserThreeFactor <p>指定撤销链接的用户信息，包含姓名、证件类型、证件号码。</p>
     */
    public $UserInfo;

    /**
     * @param Agent $Agent <p>渠道应用相关信息</p>
     * @param UserInfo $Operator <p>操作人信息</p>
     * @param string $SceneKey <p>授权签使用的场景值, 可以选择的场景值如下:</p><p>枚举值：</p><ul><li>E_PRESCRIPTION_AUTO_SIGN： 电子处方场景</li><li>OTHER： 通用场景</li></ul>
     * @param UserThreeFactor $UserInfo <p>指定撤销链接的用户信息，包含姓名、证件类型、证件号码。</p>
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("SceneKey",$param) and $param["SceneKey"] !== null) {
            $this->SceneKey = $param["SceneKey"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new UserThreeFactor();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }
    }
}

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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelUserAutoSignEnableUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getSceneKey() 获取<p>“授权签”使用的场景值, 可以选择的场景值如下:<ul><li> <strong>E_PRESCRIPTION_AUTO_SIGN</strong> :  电子处方场景</li><li> <strong>OTHER</strong> :  通用场景</li></ul></p>
 * @method void setSceneKey(string $SceneKey) 设置<p>“授权签”使用的场景值, 可以选择的场景值如下:<ul><li> <strong>E_PRESCRIPTION_AUTO_SIGN</strong> :  电子处方场景</li><li> <strong>OTHER</strong> :  通用场景</li></ul></p>
 * @method UserThreeFactor getUserInfo() 获取<p>预撤销链接的用户信息，包含姓名、证件类型、证件号码等信息。</p>
 * @method void setUserInfo(UserThreeFactor $UserInfo) 设置<p>预撤销链接的用户信息，包含姓名、证件类型、证件号码等信息。</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 */
class CancelUserAutoSignEnableUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>“授权签”使用的场景值, 可以选择的场景值如下:<ul><li> <strong>E_PRESCRIPTION_AUTO_SIGN</strong> :  电子处方场景</li><li> <strong>OTHER</strong> :  通用场景</li></ul></p>
     */
    public $SceneKey;

    /**
     * @var UserThreeFactor <p>预撤销链接的用户信息，包含姓名、证件类型、证件号码等信息。</p>
     */
    public $UserInfo;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $SceneKey <p>“授权签”使用的场景值, 可以选择的场景值如下:<ul><li> <strong>E_PRESCRIPTION_AUTO_SIGN</strong> :  电子处方场景</li><li> <strong>OTHER</strong> :  通用场景</li></ul></p>
     * @param UserThreeFactor $UserInfo <p>预撤销链接的用户信息，包含姓名、证件类型、证件号码等信息。</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
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

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}

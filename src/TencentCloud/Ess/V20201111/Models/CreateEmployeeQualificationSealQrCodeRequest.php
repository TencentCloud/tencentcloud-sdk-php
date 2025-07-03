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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmployeeQualificationSealQrCode请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。使用此接口时，必须填写userId。 支持填入集团子公司经办人 userId 代发合同。  注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。使用此接口时，必须填写userId。 支持填入集团子公司经办人 userId 代发合同。  注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method Agent getAgent() 获取代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method string getHintText() 获取提示信息，扫码后此信息会展示给扫描用户，用来提示用户授权操作的目的，会在授权界面下面的位置展示。

![image](https://qcloudimg.tencent-cloud.cn/raw/8436ffd78c20605e6b133ff4bc4d2ac7.png)
 * @method void setHintText(string $HintText) 设置提示信息，扫码后此信息会展示给扫描用户，用来提示用户授权操作的目的，会在授权界面下面的位置展示。

![image](https://qcloudimg.tencent-cloud.cn/raw/8436ffd78c20605e6b133ff4bc4d2ac7.png)
 */
class CreateEmployeeQualificationSealQrCodeRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。使用此接口时，必须填写userId。 支持填入集团子公司经办人 userId 代发合同。  注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var Agent 代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var string 提示信息，扫码后此信息会展示给扫描用户，用来提示用户授权操作的目的，会在授权界面下面的位置展示。

![image](https://qcloudimg.tencent-cloud.cn/raw/8436ffd78c20605e6b133ff4bc4d2ac7.png)
     */
    public $HintText;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。使用此接口时，必须填写userId。 支持填入集团子公司经办人 userId 代发合同。  注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param Agent $Agent 代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $HintText 提示信息，扫码后此信息会展示给扫描用户，用来提示用户授权操作的目的，会在授权界面下面的位置展示。

![image](https://qcloudimg.tencent-cloud.cn/raw/8436ffd78c20605e6b133ff4bc4d2ac7.png)
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

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("HintText",$param) and $param["HintText"] !== null) {
            $this->HintText = $param["HintText"];
        }
    }
}

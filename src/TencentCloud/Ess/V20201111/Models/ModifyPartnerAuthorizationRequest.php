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
 * ModifyPartnerAuthorization请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getBusinessId() 获取腾讯电子签平台分配的生态集成业务的**业务标识**，**需要联系接入产品经理提供**。
 * @method void setBusinessId(string $BusinessId) 设置腾讯电子签平台分配的生态集成业务的**业务标识**，**需要联系接入产品经理提供**。
 * @method string getPartnerApplicationId() 获取合作方企业通过集成方创建的应用id, 必须与业务标记（Business）保持对应。
![image](https://qcloudimg.tencent-cloud.cn/raw/9bc4ee2bd5972035d12033608df157c9.png)

 * @method void setPartnerApplicationId(string $PartnerApplicationId) 设置合作方企业通过集成方创建的应用id, 必须与业务标记（Business）保持对应。
![image](https://qcloudimg.tencent-cloud.cn/raw/9bc4ee2bd5972035d12033608df157c9.png)

 * @method CallbackInfo getApplicationInfo() 获取第三方应用的配置信息。其中包括 回调地址，加密KEY等信息。
执行成功后会覆盖掉对应的第三方应用的回调相关配置。
 * @method void setApplicationInfo(CallbackInfo $ApplicationInfo) 设置第三方应用的配置信息。其中包括 回调地址，加密KEY等信息。
执行成功后会覆盖掉对应的第三方应用的回调相关配置。
 */
class ModifyPartnerAuthorizationRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 腾讯电子签平台分配的生态集成业务的**业务标识**，**需要联系接入产品经理提供**。
     */
    public $BusinessId;

    /**
     * @var string 合作方企业通过集成方创建的应用id, 必须与业务标记（Business）保持对应。
![image](https://qcloudimg.tencent-cloud.cn/raw/9bc4ee2bd5972035d12033608df157c9.png)

     */
    public $PartnerApplicationId;

    /**
     * @var CallbackInfo 第三方应用的配置信息。其中包括 回调地址，加密KEY等信息。
执行成功后会覆盖掉对应的第三方应用的回调相关配置。
     */
    public $ApplicationInfo;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $BusinessId 腾讯电子签平台分配的生态集成业务的**业务标识**，**需要联系接入产品经理提供**。
     * @param string $PartnerApplicationId 合作方企业通过集成方创建的应用id, 必须与业务标记（Business）保持对应。
![image](https://qcloudimg.tencent-cloud.cn/raw/9bc4ee2bd5972035d12033608df157c9.png)

     * @param CallbackInfo $ApplicationInfo 第三方应用的配置信息。其中包括 回调地址，加密KEY等信息。
执行成功后会覆盖掉对应的第三方应用的回调相关配置。
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

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("PartnerApplicationId",$param) and $param["PartnerApplicationId"] !== null) {
            $this->PartnerApplicationId = $param["PartnerApplicationId"];
        }

        if (array_key_exists("ApplicationInfo",$param) and $param["ApplicationInfo"] !== null) {
            $this->ApplicationInfo = new CallbackInfo();
            $this->ApplicationInfo->deserialize($param["ApplicationInfo"]);
        }
    }
}

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
 * CreatePartnerAuthorizationLink请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getBusinessId() 获取腾讯电子签平台给生态集成方分配的**生态集成业务标识**，
<font color="red">**此生态集成业务标识需要提前联系产品经理配置**。</font>
 * @method void setBusinessId(string $BusinessId) 设置腾讯电子签平台给生态集成方分配的**生态集成业务标识**，
<font color="red">**此生态集成业务标识需要提前联系产品经理配置**。</font>
 * @method string getPartnerOrganizationId() 获取合作方企业在腾讯电子签注册企业后生成的企业id，需要合作方企业登录
<a href="https://qian.tencent.com/console/company-settings/company-center" target="_blank">电子签控制台</a>获取

![image](https://qcloudimg.tencent-cloud.cn/raw/20ce774cf8118b9f3742b8519ef935db.png)

 * @method void setPartnerOrganizationId(string $PartnerOrganizationId) 设置合作方企业在腾讯电子签注册企业后生成的企业id，需要合作方企业登录
<a href="https://qian.tencent.com/console/company-settings/company-center" target="_blank">电子签控制台</a>获取

![image](https://qcloudimg.tencent-cloud.cn/raw/20ce774cf8118b9f3742b8519ef935db.png)

 * @method CallbackInfo getApplicationInfo() 获取第三方应用的配置信息。
其中包括 回调地址，加密KEY等信息。
 * @method void setApplicationInfo(CallbackInfo $ApplicationInfo) 设置第三方应用的配置信息。
其中包括 回调地址，加密KEY等信息。
 * @method ProxyOrganizationInfo getProxyOrganizationInfo() 获取第三方应用下企业用户信息。
其中包括企业的OrganizationOpenId和超管的UserOpenId。
具体含义请参考结构体解释
 * @method void setProxyOrganizationInfo(ProxyOrganizationInfo $ProxyOrganizationInfo) 设置第三方应用下企业用户信息。
其中包括企业的OrganizationOpenId和超管的UserOpenId。
具体含义请参考结构体解释
 * @method string getPartnerApplicationId() 获取若未填写，则会创建一个生态集成应用。
若填写， 则必须是生态集成企业给合作方企业通过此接口**CreatePartnerAuthorizationLink**创建的应用号。
应用号可以从下图位置获取。
![image](https://qcloudimg.tencent-cloud.cn/raw/9bc4ee2bd5972035d12033608df157c9.png)
 * @method void setPartnerApplicationId(string $PartnerApplicationId) 设置若未填写，则会创建一个生态集成应用。
若填写， 则必须是生态集成企业给合作方企业通过此接口**CreatePartnerAuthorizationLink**创建的应用号。
应用号可以从下图位置获取。
![image](https://qcloudimg.tencent-cloud.cn/raw/9bc4ee2bd5972035d12033608df157c9.png)
 */
class CreatePartnerAuthorizationLinkRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 腾讯电子签平台给生态集成方分配的**生态集成业务标识**，
<font color="red">**此生态集成业务标识需要提前联系产品经理配置**。</font>
     */
    public $BusinessId;

    /**
     * @var string 合作方企业在腾讯电子签注册企业后生成的企业id，需要合作方企业登录
<a href="https://qian.tencent.com/console/company-settings/company-center" target="_blank">电子签控制台</a>获取

![image](https://qcloudimg.tencent-cloud.cn/raw/20ce774cf8118b9f3742b8519ef935db.png)

     */
    public $PartnerOrganizationId;

    /**
     * @var CallbackInfo 第三方应用的配置信息。
其中包括 回调地址，加密KEY等信息。
     */
    public $ApplicationInfo;

    /**
     * @var ProxyOrganizationInfo 第三方应用下企业用户信息。
其中包括企业的OrganizationOpenId和超管的UserOpenId。
具体含义请参考结构体解释
     */
    public $ProxyOrganizationInfo;

    /**
     * @var string 若未填写，则会创建一个生态集成应用。
若填写， 则必须是生态集成企业给合作方企业通过此接口**CreatePartnerAuthorizationLink**创建的应用号。
应用号可以从下图位置获取。
![image](https://qcloudimg.tencent-cloud.cn/raw/9bc4ee2bd5972035d12033608df157c9.png)
     */
    public $PartnerApplicationId;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $BusinessId 腾讯电子签平台给生态集成方分配的**生态集成业务标识**，
<font color="red">**此生态集成业务标识需要提前联系产品经理配置**。</font>
     * @param string $PartnerOrganizationId 合作方企业在腾讯电子签注册企业后生成的企业id，需要合作方企业登录
<a href="https://qian.tencent.com/console/company-settings/company-center" target="_blank">电子签控制台</a>获取

![image](https://qcloudimg.tencent-cloud.cn/raw/20ce774cf8118b9f3742b8519ef935db.png)

     * @param CallbackInfo $ApplicationInfo 第三方应用的配置信息。
其中包括 回调地址，加密KEY等信息。
     * @param ProxyOrganizationInfo $ProxyOrganizationInfo 第三方应用下企业用户信息。
其中包括企业的OrganizationOpenId和超管的UserOpenId。
具体含义请参考结构体解释
     * @param string $PartnerApplicationId 若未填写，则会创建一个生态集成应用。
若填写， 则必须是生态集成企业给合作方企业通过此接口**CreatePartnerAuthorizationLink**创建的应用号。
应用号可以从下图位置获取。
![image](https://qcloudimg.tencent-cloud.cn/raw/9bc4ee2bd5972035d12033608df157c9.png)
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

        if (array_key_exists("PartnerOrganizationId",$param) and $param["PartnerOrganizationId"] !== null) {
            $this->PartnerOrganizationId = $param["PartnerOrganizationId"];
        }

        if (array_key_exists("ApplicationInfo",$param) and $param["ApplicationInfo"] !== null) {
            $this->ApplicationInfo = new CallbackInfo();
            $this->ApplicationInfo->deserialize($param["ApplicationInfo"]);
        }

        if (array_key_exists("ProxyOrganizationInfo",$param) and $param["ProxyOrganizationInfo"] !== null) {
            $this->ProxyOrganizationInfo = new ProxyOrganizationInfo();
            $this->ProxyOrganizationInfo->deserialize($param["ProxyOrganizationInfo"]);
        }

        if (array_key_exists("PartnerApplicationId",$param) and $param["PartnerApplicationId"] !== null) {
            $this->PartnerApplicationId = $param["PartnerApplicationId"];
        }
    }
}

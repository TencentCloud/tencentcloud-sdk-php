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

namespace TencentCloud\Intlpartnersmgt\V20220928;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Intlpartnersmgt\V20220928\Models as Models;

/**
 * @method Models\AllocateCustomerCreditResponse AllocateCustomerCredit(Models\AllocateCustomerCreditRequest $req) 合作伙伴可以为关联客户设置信用额度，包括调高额度、降低额度、设置额度为0
1、信用额度长期有效，不会定期清0；
2、可用信用额度为0，会触发客户停服，请谨慎操作；
3、如需限制客户新购，但不影响已购产品使用，可与渠道经理申请客户欠费不停服特权后，设置可用信用额度为0；
4、设置的额度，为当前可用信用额度的增量，最大不能超过合作伙伴可分配的剩余额度，设置负数代表回收额度，可用信用额度最低设置为0。
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) 在合作伙伴平台，创建腾讯云账号，子客户注册完成后，自动与合作伙伴账号绑定。

注意事项：<br>
1、创建腾讯云账号，输入的邮箱、手机号，需要合作伙伴做有效性验证。<br>
2、客户首次登录需要补充个人信息
 * @method Models\GetCountryCodesResponse GetCountryCodes(Models\GetCountryCodesRequest $req) 获取国家和地区的代码
 * @method Models\QueryCreditAllocationHistoryResponse QueryCreditAllocationHistory(Models\QueryCreditAllocationHistoryRequest $req) 查询单个客户的全部历史分配记录
 * @method Models\QueryCreditByUinListResponse QueryCreditByUinList(Models\QueryCreditByUinListRequest $req) 查询用户列表信用
 * @method Models\QueryCustomersCreditResponse QueryCustomersCredit(Models\QueryCustomersCreditRequest $req) 合作伙伴可以查询关联客户的信用额度，以及客户的基础信息
 * @method Models\QueryDirectCustomersCreditResponse QueryDirectCustomersCredit(Models\QueryDirectCustomersCreditRequest $req) 查询直接子客信用
 * @method Models\QueryPartnerCreditResponse QueryPartnerCredit(Models\QueryPartnerCreditRequest $req) 查询合作伙伴自己的总信用额度、可用信用额度、已使用信用额度，单位为美元
 * @method Models\QueryVoucherAmountByUinResponse QueryVoucherAmountByUin(Models\QueryVoucherAmountByUinRequest $req) 根据客户uin查询代金券额度
 * @method Models\QueryVoucherListByUinResponse QueryVoucherListByUin(Models\QueryVoucherListByUinRequest $req) 根据客户uin查询代金券列表
 * @method Models\QueryVoucherPoolResponse QueryVoucherPool(Models\QueryVoucherPoolRequest $req) 查询代金券额度池
 */

class IntlpartnersmgtClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "intlpartnersmgt.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "intlpartnersmgt";

    /**
     * @var string
     */
    protected $version = "2022-09-28";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("intlpartnersmgt")."\\"."V20220928\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

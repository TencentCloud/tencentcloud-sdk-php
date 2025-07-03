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

namespace TencentCloud\Partners\V20180321;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Partners\V20180321\Models as Models;

/**
 * @method Models\AgentPayDealsResponse AgentPayDeals(Models\AgentPayDealsRequest $req) 代理商支付订单接口，支持自付/代付
 * @method Models\AgentTransferMoneyResponse AgentTransferMoney(Models\AgentTransferMoneyRequest $req) 为合作伙伴提供转账给客户能力。仅支持合作伙伴为自己名下客户转账。
 * @method Models\AssignClientsToSalesResponse AssignClientsToSales(Models\AssignClientsToSalesRequest $req) 为代客or申请中代客分派跟进人（业务员），入参可从以下API获取
- 代客列表获取API： [DescribeAgentAuditedClients](https://cloud.tencent.com/document/product/563/19184)
- 申请中代客列表获取API：[DescribeAgentClients](https://cloud.tencent.com/document/product/563/16046)
- 业务员列表获取API：[DescribeSalesmans](https://cloud.tencent.com/document/product/563/35196) <br><br>
 * @method Models\AuditApplyClientResponse AuditApplyClient(Models\AuditApplyClientRequest $req) 代理商可以审核其名下申请中代客
 * @method Models\CreatePayRelationForClientResponse CreatePayRelationForClient(Models\CreatePayRelationForClientRequest $req) 合作伙伴为客户创建强代付关系
 * @method Models\DescribeAgentAuditedClientsResponse DescribeAgentAuditedClients(Models\DescribeAgentAuditedClientsRequest $req) 查询已审核客户列表
 * @method Models\DescribeAgentBillsResponse DescribeAgentBills(Models\DescribeAgentBillsRequest $req) 代理商可查询自己及名下代客所有业务明细
 * @method Models\DescribeAgentClientGradeResponse DescribeAgentClientGrade(Models\DescribeAgentClientGradeRequest $req) 传入代客uin，查客户级别，客户审核状态，客户实名认证状态
 * @method Models\DescribeAgentClientsResponse DescribeAgentClients(Models\DescribeAgentClientsRequest $req) 代理商可查询自己名下待审核客户列表
 * @method Models\DescribeAgentDealsByCacheResponse DescribeAgentDealsByCache(Models\DescribeAgentDealsByCacheRequest $req) 供代理商拉取缓存的全量预付费客户订单
 * @method Models\DescribeAgentDealsPriceDetailByDealNameResponse DescribeAgentDealsPriceDetailByDealName(Models\DescribeAgentDealsPriceDetailByDealNameRequest $req) 供代理商使用名下有效普通代客的预付费子订单号查询订单费用详情
 * @method Models\DescribeAgentPayDealsV2Response DescribeAgentPayDealsV2(Models\DescribeAgentPayDealsV2Request $req) 可以查询代理商代付的预付费订单
 * @method Models\DescribeAgentRelateBigDealIdsResponse DescribeAgentRelateBigDealIds(Models\DescribeAgentRelateBigDealIdsRequest $req) 根据大订单号查询关联申请合并支付的其他订单号
 * @method Models\DescribeAgentSelfPayDealsV2Response DescribeAgentSelfPayDealsV2(Models\DescribeAgentSelfPayDealsV2Request $req) 查询代理商名下指定代客的自付订单（预付费）
 * @method Models\DescribeClientBalanceNewResponse DescribeClientBalanceNew(Models\DescribeClientBalanceNewRequest $req) 为合作伙伴提供查询客户余额能力。调用者必须是合作伙伴，只能查询自己名下客户余额
 * @method Models\DescribeClientJoinIncreaseListResponse DescribeClientJoinIncreaseList(Models\DescribeClientJoinIncreaseListRequest $req) 查询合作伙伴名下客户的参与增量激励考核信息列表
 * @method Models\DescribeClientSwitchTraTaskInfoResponse DescribeClientSwitchTraTaskInfo(Models\DescribeClientSwitchTraTaskInfoRequest $req) 查询客户的交易类型切换任务的信息，查询成功则获取当前用户的切换链接，查询失败则返回失败的原因
 * @method Models\DescribeRebateInfosResponse DescribeRebateInfos(Models\DescribeRebateInfosRequest $req) 【该接口已下线，请切换使用升级版本DescribeRebateInfosNew】代理商可查询自己名下全部返佣信息
 * @method Models\DescribeRebateInfosNewResponse DescribeRebateInfosNew(Models\DescribeRebateInfosNewRequest $req) 代理商可查询自己名下全部返佣信息
 * @method Models\DescribeSalesmansResponse DescribeSalesmans(Models\DescribeSalesmansRequest $req) 代理商查询名下业务员列表信息
 * @method Models\DescribeUnbindClientListResponse DescribeUnbindClientList(Models\DescribeUnbindClientListRequest $req) 代理商名下客户解绑记录查询接口
 * @method Models\ModifyClientRemarkResponse ModifyClientRemark(Models\ModifyClientRemarkRequest $req) 代理商可以对名下客户添加备注、修改备注
 * @method Models\RemovePayRelationForClientResponse RemovePayRelationForClient(Models\RemovePayRelationForClientRequest $req) 合作伙伴为客户消除强代付关系
 */

class PartnersClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "partners.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "partners";

    /**
     * @var string
     */
    protected $version = "2018-03-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("partners")."\\"."V20180321\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

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

namespace TencentCloud\Tbaas\V20180416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tbaas\V20180416\Models as Models;

/**
 * @method Models\ApplyChainMakerBatchUserCertResponse ApplyChainMakerBatchUserCert(Models\ApplyChainMakerBatchUserCertRequest $req) 批量申请长安链用户签名证书
 * @method Models\ApplyUserCertResponse ApplyUserCert(Models\ApplyUserCertRequest $req) 申请用户证书
 * @method Models\DownloadUserCertResponse DownloadUserCert(Models\DownloadUserCertRequest $req) 下载用户证书
 * @method Models\GetBlockListResponse GetBlockList(Models\GetBlockListRequest $req) 查看当前网络下的所有区块列表，分页展示
 * @method Models\GetBlockTransactionListForUserResponse GetBlockTransactionListForUser(Models\GetBlockTransactionListForUserRequest $req) 获取区块内的交易列表
 * @method Models\GetClusterSummaryResponse GetClusterSummary(Models\GetClusterSummaryRequest $req) 获取区块链网络概要
 * @method Models\GetInvokeTxResponse GetInvokeTx(Models\GetInvokeTxRequest $req) Invoke异步调用结果查询
 * @method Models\GetLatesdTransactionListResponse GetLatesdTransactionList(Models\GetLatesdTransactionListRequest $req) 获取最新交易列表（已废弃）
 * @method Models\GetLatestTransactionListResponse GetLatestTransactionList(Models\GetLatestTransactionListRequest $req) 获取fabric最新交易列表
 * @method Models\GetTransactionDetailForUserResponse GetTransactionDetailForUser(Models\GetTransactionDetailForUserRequest $req) 获取交易详情
 * @method Models\InvokeResponse Invoke(Models\InvokeRequest $req) 新增交易
 * @method Models\InvokeChainMakerContractResponse InvokeChainMakerContract(Models\InvokeChainMakerContractRequest $req) 调用长安链合约执行交易
 * @method Models\InvokeChainMakerDemoContractResponse InvokeChainMakerDemoContract(Models\InvokeChainMakerDemoContractRequest $req) 调用长安链体验网络合约执行交易
 * @method Models\QueryResponse Query(Models\QueryRequest $req) 查询交易
 * @method Models\QueryChainMakerBlockTransactionResponse QueryChainMakerBlockTransaction(Models\QueryChainMakerBlockTransactionRequest $req) 查询长安链指定高度区块的交易
 * @method Models\QueryChainMakerContractResponse QueryChainMakerContract(Models\QueryChainMakerContractRequest $req) 调用长安链合约查询
 * @method Models\QueryChainMakerDemoBlockTransactionResponse QueryChainMakerDemoBlockTransaction(Models\QueryChainMakerDemoBlockTransactionRequest $req) 查询长安链体验网络指定高度区块的交易
 * @method Models\QueryChainMakerDemoContractResponse QueryChainMakerDemoContract(Models\QueryChainMakerDemoContractRequest $req) 调用长安链体验网络合约查询
 * @method Models\QueryChainMakerDemoTransactionResponse QueryChainMakerDemoTransaction(Models\QueryChainMakerDemoTransactionRequest $req) 通过交易ID查询长安链体验网络交易
 * @method Models\QueryChainMakerTransactionResponse QueryChainMakerTransaction(Models\QueryChainMakerTransactionRequest $req) 通过交易ID查询长安链交易
 * @method Models\SrvInvokeResponse SrvInvoke(Models\SrvInvokeRequest $req) trustsql服务统一接口
 */

class TbaasClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tbaas.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tbaas";

    /**
     * @var string
     */
    protected $version = "2018-04-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("tbaas")."\\"."V20180416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

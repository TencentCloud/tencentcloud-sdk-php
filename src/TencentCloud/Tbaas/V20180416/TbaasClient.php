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
* @method Models\GetBlockListResponse GetBlockList(Models\GetBlockListRequest $req) 查看当前网络下的所有区块列表，分页展示
* @method Models\GetClusterSummaryResponse GetClusterSummary(Models\GetClusterSummaryRequest $req) 获取区块链网络概要
* @method Models\GetInvokeTxResponse GetInvokeTx(Models\GetInvokeTxRequest $req) Invoke异步调用结果查询
* @method Models\GetLatesdTransactionListResponse GetLatesdTransactionList(Models\GetLatesdTransactionListRequest $req) 获取最新交易列表
* @method Models\InvokeResponse Invoke(Models\InvokeRequest $req) 新增交易
* @method Models\QueryResponse Query(Models\QueryRequest $req) 查询交易
 */

class TbaasClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "tbaas.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-04-16";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
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

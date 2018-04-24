<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Partners\V20180321;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Partners\V20180321\Models as Models;

/**
* @method Models\AuditApplyClientResponse AuditApplyClient(Models\AuditApplyClientRequest $req) 代理商可以审核其名下申请中代客
* @method Models\DescribeAgentBillsResponse DescribeAgentBills(Models\DescribeAgentBillsRequest $req) 代理商可查询自己及名下代客所有业务明细
* @method Models\DescribeAgentClientsResponse DescribeAgentClients(Models\DescribeAgentClientsRequest $req) 代理商可查询自己名下待审核客户列表
* @method Models\DescribeRebateInfosResponse DescribeRebateInfos(Models\DescribeRebateInfosRequest $req) 代理商可查询自己名下全部返佣信息
* @method Models\ModifyClientRemarkResponse ModifyClientRemark(Models\ModifyClientRemarkRequest $req) 代理商可以对名下客户添加备注、修改备注
 */

class PartnersClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "partners.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-03-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("partners")."\\"."V20180321\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

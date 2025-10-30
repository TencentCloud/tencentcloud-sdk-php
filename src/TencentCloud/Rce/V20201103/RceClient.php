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

namespace TencentCloud\Rce\V20201103;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Rce\V20201103\Models as Models;

/**
 * @method Models\CreateNameListResponse CreateNameList(Models\CreateNameListRequest $req) 创建黑白名单，黑白名单数量上限为100
 * @method Models\DeleteNameListResponse DeleteNameList(Models\DeleteNameListRequest $req) 修改黑白名单状态 关闭 开启 删除
 * @method Models\DeleteNameListDataResponse DeleteNameListData(Models\DeleteNameListDataRequest $req) 删除黑白名单数据
 * @method Models\DescribeNameListResponse DescribeNameList(Models\DescribeNameListRequest $req) 列表展示黑白名单列表数据, 包含列表名称, 名单类型, 数据类型, 数据来源, 描述, 状态等
 * @method Models\DescribeNameListDataListResponse DescribeNameListDataList(Models\DescribeNameListDataListRequest $req) 黑白名单详情数据展示 名单id 客户appid uin 数据内容 开始时间和结束时间 状态 描述
 * @method Models\DescribeNameListDetailResponse DescribeNameListDetail(Models\DescribeNameListDetailRequest $req) 查询黑白名单列表详情
 * @method Models\DescribeUserUsageCntResponse DescribeUserUsageCnt(Models\DescribeUserUsageCntRequest $req) RCE控制台预付费和后付费次数展示
 * @method Models\ImportNameListDataResponse ImportNameListData(Models\ImportNameListDataRequest $req) 新增黑白名单数据，所有黑白名单数据总量上限为10000
 * @method Models\ManageMarketingRiskResponse ManageMarketingRisk(Models\ManageMarketingRiskRequest $req) 通用业务欺诈保护是基于人工智能技术和腾讯20年风控实战沉淀，依托腾讯海量业务构建的风控引擎，以轻量级的 SaaS 服务方式接入，帮助您快速解决注册、登录、营销活动等关键场景遇到的欺诈问题，实时防御黑灰产作恶。
 * @method Models\ModifyNameListResponse ModifyNameList(Models\ModifyNameListRequest $req) 修改列表数据 列表名称 列表类型 数据类型 状态 备注
 * @method Models\ModifyNameListDataResponse ModifyNameListData(Models\ModifyNameListDataRequest $req) 修改黑白名单列表详情 详情内容 开始和结束时间 状态 备注等
 */

class RceClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "rce.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "rce";

    /**
     * @var string
     */
    protected $version = "2020-11-03";

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
        $respClass = "TencentCloud"."\\".ucfirst("rce")."\\"."V20201103\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

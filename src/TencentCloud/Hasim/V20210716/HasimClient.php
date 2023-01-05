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

namespace TencentCloud\Hasim\V20210716;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Hasim\V20210716\Models as Models;

/**
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 创建自动化规则
 * @method Models\CreateTacticResponse CreateTactic(Models\CreateTacticRequest $req) 创建云兔切换策略
 * @method Models\CreateTagResponse CreateTag(Models\CreateTagRequest $req) 创建标签
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) 删除自动化规则
 * @method Models\DeleteTacticResponse DeleteTactic(Models\DeleteTacticRequest $req) 删除策略
 * @method Models\DeleteTagResponse DeleteTag(Models\DeleteTagRequest $req) 删除标签
 * @method Models\DescribeLinkResponse DescribeLink(Models\DescribeLinkRequest $req) 查询云兔连接详细信息
 * @method Models\DescribeLinksResponse DescribeLinks(Models\DescribeLinksRequest $req) 查询云兔连接列表
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) 查询订单列表
 * @method Models\DescribeRuleResponse DescribeRule(Models\DescribeRuleRequest $req) 查询自动化规则
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) 查询自动化规则列表
 * @method Models\DescribeTacticResponse DescribeTactic(Models\DescribeTacticRequest $req) 查询云兔切换策略信息
 * @method Models\DescribeTacticsResponse DescribeTactics(Models\DescribeTacticsRequest $req) 查询云兔切换策略列表
 * @method Models\DescribeTagsResponse DescribeTags(Models\DescribeTagsRequest $req) 查询标签列表
 * @method Models\ModifyLinkAdvancedLogResponse ModifyLinkAdvancedLog(Models\ModifyLinkAdvancedLogRequest $req) 编辑云兔高级日志状态
 * @method Models\ModifyLinkTacticResponse ModifyLinkTactic(Models\ModifyLinkTacticRequest $req) 编辑云兔策略
 * @method Models\ModifyLinkTeleResponse ModifyLinkTele(Models\ModifyLinkTeleRequest $req) 修改云兔运营商
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) 编辑自动化规则
 * @method Models\ModifyRuleStatusResponse ModifyRuleStatus(Models\ModifyRuleStatusRequest $req) 编辑自动化规则状态
 * @method Models\ModifyTacticResponse ModifyTactic(Models\ModifyTacticRequest $req) 修改云兔切换策略
 * @method Models\ModifyTagResponse ModifyTag(Models\ModifyTagRequest $req) 编辑标签
 * @method Models\RenewLinkInfoResponse RenewLinkInfo(Models\RenewLinkInfoRequest $req) 刷新云兔连接信息同步
 */

class HasimClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "hasim.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "hasim";

    /**
     * @var string
     */
    protected $version = "2021-07-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("hasim")."\\"."V20210716\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

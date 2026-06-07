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

namespace TencentCloud\Tokenhub\V20260322;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tokenhub\V20260322\Models as Models;

/**
 * @method Models\CreateTokenPlanApiKeysResponse CreateTokenPlanApiKeys(Models\CreateTokenPlanApiKeysRequest $req) 批量创建 TokenPlan APIKey。

传入名称前缀和数量，自动按 {ApiKeyName}-{序号} 格式生成名称（如 aaa-1, aaa-2）。允许同名。支持部分成功，最多 100 条。
 * @method Models\CreateTokenPlanTeamOrderAndBuyResponse CreateTokenPlanTeamOrderAndBuy(Models\CreateTokenPlanTeamOrderAndBuyRequest $req) 购买套餐。

发起 TokenPlan 套餐下单并完成支付，成功后返回大订单 ID 及关联的子订单、资源信息。
 * @method Models\DeleteTokenPlanApiKeyResponse DeleteTokenPlanApiKey(Models\DeleteTokenPlanApiKeyRequest $req) 删除 TokenPlan APIKey。

同时删除额度中心子额度包并通知网关清除缓存。
 * @method Models\DescribeApiKeyResponse DescribeApiKey(Models\DescribeApiKeyRequest $req) 根据 API 密钥 ID 或密钥值查询 API 密钥详情，返回明文密钥。ApiKeyId 和 ApiKey 至少需传入其一，优先使用 ApiKeyId。
 * @method Models\DescribeApiKeyListResponse DescribeApiKeyList(Models\DescribeApiKeyListRequest $req) 查询 API 密钥列表。

查询当前用户的 API 密钥列表，密钥值脱敏展示。支持分页、过滤和排序。
 * @method Models\DescribeModelListResponse DescribeModelList(Models\DescribeModelListRequest $req) 查询模型列表。

支持按模型 ID、模型名称、模型能力等条件筛选，支持分页和排序。
 * @method Models\DescribeTokenPlanResponse DescribeTokenPlan(Models\DescribeTokenPlanRequest $req) 查询 TokenPlan 套餐详情。

返回套餐基本信息及额度中心主额度包余量。
 * @method Models\DescribeTokenPlanApiKeyResponse DescribeTokenPlanApiKey(Models\DescribeTokenPlanApiKeyRequest $req) 查询 TokenPlan APIKey 详情。

返回 APIKey 完整信息（含明文密钥）及子额度包余量。
 * @method Models\DescribeTokenPlanApiKeyListResponse DescribeTokenPlanApiKeyList(Models\DescribeTokenPlanApiKeyListRequest $req) 查询 TokenPlan APIKey 列表。

返回指定套餐下的 APIKey 列表，密钥已脱敏。主账号可查看全部，子账号仅可查看自己创建的。
 * @method Models\DescribeTokenPlanApiKeySecretResponse DescribeTokenPlanApiKeySecret(Models\DescribeTokenPlanApiKeySecretRequest $req) 查询 TokenPlan APIKey 密钥（明文）。

返回指定 APIKey 的明文密钥值，请妥善保管。
 * @method Models\DescribeTokenPlanApiKeyUsageDetailResponse DescribeTokenPlanApiKeyUsageDetail(Models\DescribeTokenPlanApiKeyUsageDetailRequest $req) 查询 TokenPlan APIKey 调用明细。

从 CLS 日志服务查询套餐下的调用明细，按 pkg_id 过滤，支持游标分页。
 * @method Models\DescribeTokenPlanListResponse DescribeTokenPlanList(Models\DescribeTokenPlanListRequest $req) 查询 TokenPlan 套餐列表。

支持分页、过滤和排序。主账号可查看全部，子账号仅可查看自己创建的。返回结果包含每个套餐关联的额度中心主额度包详情。
 * @method Models\DescribeUsageRankListResponse DescribeUsageRankList(Models\DescribeUsageRankListRequest $req) 查询用量排行列表。

按 apikey、endpoint、model 三个维度统计指定时间窗内的用量排行，返回顶部数据卡所需的 PageStats/TotalStats、左侧 Top 列表（含每对象整段累计值）、右侧色块趋势图所需的逐点曲线。前端通过 Offset 翻页、ShowAll 切换 CSV 全量导出模式。

MetricType 字段用于切换指标族，本期支持 tokens；接口预留以支持后续指标族扩展。响应回显 MetricType 与 MetricKeys（实际参与渲染的 metric key 列表，顺序固定 [Total, Input, Output]），前端按此渲染顶部数据卡与趋势图，无需硬编码 key 名。
 * @method Models\ModifyTokenPlanApiKeyResponse ModifyTokenPlanApiKey(Models\ModifyTokenPlanApiKeyRequest $req) 修改 TokenPlan APIKey 配置（网关关注字段）。

修改后自动通知网关更新缓存并同步额度中心。
 * @method Models\ModifyTokenPlanApiKeySecretResponse ModifyTokenPlanApiKeySecret(Models\ModifyTokenPlanApiKeySecretRequest $req) 重置 TokenPlan APIKey 密钥。

重新生成密钥值，密钥版本号递增，旧密钥立即失效。APIKey ID 不变。重置后需通过 DescribeTokenPlanApiKeySecret 查询新密钥。
 * @method Models\RenewTokenPlanTeamOrderResponse RenewTokenPlanTeamOrder(Models\RenewTokenPlanTeamOrderRequest $req) 续费套餐。

对已有的 TokenPlan 套餐发起续费下单并完成支付，成功后返回大订单 ID 及关联的子订单、资源信息。
 * @method Models\UpgradeTokenPlanTeamOrderResponse UpgradeTokenPlanTeamOrder(Models\UpgradeTokenPlanTeamOrderRequest $req) 升配套餐。

对已有的 TokenPlan 套餐发起升配下单并完成支付，扩容积分或 Token 额度，成功后返回大订单 ID 及关联的子订单、资源信息。新额度必须大于当前额度。
 */

class TokenhubClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tokenhub.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tokenhub";

    /**
     * @var string
     */
    protected $version = "2026-03-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("tokenhub")."\\"."V20260322\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

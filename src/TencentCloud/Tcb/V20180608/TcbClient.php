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

namespace TencentCloud\Tcb\V20180608;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcb\V20180608\Models as Models;

/**
 * @method Models\BindCloudBaseAccessDomainResponse BindCloudBaseAccessDomain(Models\BindCloudBaseAccessDomainRequest $req) 绑定云开发自定义域名，用于云接入和静态托管
 * @method Models\BindCloudBaseGWDomainResponse BindCloudBaseGWDomain(Models\BindCloudBaseGWDomainRequest $req) 绑定自定义域名
 * @method Models\CheckTcbServiceResponse CheckTcbService(Models\CheckTcbServiceRequest $req) 检查是否开通Tcb服务
 * @method Models\CreateAuthDomainResponse CreateAuthDomain(Models\CreateAuthDomainRequest $req) 增加安全域名。
云开发会校验网页应用请求的来源域名，您需要将来源域名加入到WEB安全域名列表中。
可以通过接口 [DescribeAuthDomains](https://cloud.tencent.com/document/product/876/42151) 获取当前已绑定生效的安全域名。

注意⚠️
  安全域名绑定成功之后，需要几分钟时间逐步生效。
 * @method Models\CreateBillDealResponse CreateBillDeal(Models\CreateBillDealRequest $req) 创建云开发产品计费订单，用于以下几种场景：
1. 购买云开发环境
2. 续费云开发环境
3. 变更云开发环境套餐
4. 购买云开发资源包
5. 购买云开发大促包

该接口支持下单并支付(CreateAndPay=true时)，此时会自动在腾讯云账户中扣除余额（余额不足会下单失败）。
该接口支持自动扣除代金券（AutoVoucher=true时），符合条件的代金券会被自动扣除。
 * @method Models\CreateCloudBaseGWAPIResponse CreateCloudBaseGWAPI(Models\CreateCloudBaseGWAPIRequest $req) 创建云开发网关API
 * @method Models\CreateEnvResponse CreateEnv(Models\CreateEnvRequest $req) 本接口用于购买云开发环境。
该接口会自动下单并支付，会在腾讯云账户中扣除余额（余额不足会下单失败）。
该接口支持自动扣除代金券（AutoVoucher=true时），符合条件的代金券会被自动扣除。
环境下单成功之后会返回EnvId。EnvId是全局唯一表示。
环境发货是异步行为，后续可以通过接口 [DescribeEnvs ](https://cloud.tencent.com/document/product/876/34820) 查询环境状态和各项资源信息；通过 [DescribeBillingInfo](https://cloud.tencent.com/document/product/876/94390) 查询环境套餐信息，包括 到期时间、当前套餐等。
 * @method Models\CreateHostingDomainResponse CreateHostingDomain(Models\CreateHostingDomainRequest $req) 创建托管域名
 * @method Models\CreateMySQLResponse CreateMySQL(Models\CreateMySQLRequest $req) 开通Mysql

开通后，可通过 [DescribeCreateMySQLResult ](https://cloud.tencent.com/document/api/876/128185) 查询开通结果
 * @method Models\CreateStaticStoreResponse CreateStaticStore(Models\CreateStaticStoreRequest $req) 创建静态托管资源，包括COS和CDN，异步任务创建，查看创建结果需要根据DescribeStaticStore接口来查看
 * @method Models\CreateTableResponse CreateTable(Models\CreateTableRequest $req) 本接口(CreateTable)用于创建表，支持创建capped类型集合，暂时不支持分片表
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 创建tcb用户
 * @method Models\DeleteAuthDomainResponse DeleteAuthDomain(Models\DeleteAuthDomainRequest $req) 删除合法域名。
云开发会校验网页应用请求的来源域名，您需要将来源域名加入到WEB安全域名列表中。
可以通过接口 [DescribeAuthDomains](https://cloud.tencent.com/document/product/876/42151) 获取当前已绑定生效的安全域名。

注意⚠️
安全域名被删除之后，可能会引起跨域问题，请谨慎操作。
 * @method Models\DeleteCloudBaseGWAPIResponse DeleteCloudBaseGWAPI(Models\DeleteCloudBaseGWAPIRequest $req) 删除网关API
 * @method Models\DeleteCloudBaseGWDomainResponse DeleteCloudBaseGWDomain(Models\DeleteCloudBaseGWDomainRequest $req) 删除网关域名
 * @method Models\DeleteTableResponse DeleteTable(Models\DeleteTableRequest $req) 本接口(DeleteTable)用于删除表，删除表后表中数据将会被删除且无法恢复，请谨慎操作

接口入参中的 Tag 为 flexdb 的实例 Id，可以通过 [DescribeEnvs](https://cloud.tencent.com/document/api/876/34820) 接口返回的 EnvList[0].Databases[0].InstanceId 获取
 * @method Models\DeleteUsersResponse DeleteUsers(Models\DeleteUsersRequest $req) 删除tcb用户
 * @method Models\DescribeAuthDomainsResponse DescribeAuthDomains(Models\DescribeAuthDomainsRequest $req) 本接口用于获取当前环境的安全域名列表。
云开发会校验网页应用请求的来源域名，您需要将来源域名加入到WEB安全域名列表中。
可以通过接口 [CreateAuthDomain](https://cloud.tencent.com/document/product/876/42764) 增加安全域名。
 * @method Models\DescribeBaasPackageListResponse DescribeBaasPackageList(Models\DescribeBaasPackageListRequest $req) 获取新套餐列表，含详情，如果传了PackageId，则只获取指定套餐详情
 * @method Models\DescribeCloudBaseBuildServiceResponse DescribeCloudBaseBuildService(Models\DescribeCloudBaseBuildServiceRequest $req) 获取云托管代码上传url
 * @method Models\DescribeCloudBaseGWAPIResponse DescribeCloudBaseGWAPI(Models\DescribeCloudBaseGWAPIRequest $req) 获取网关API列表
 * @method Models\DescribeCloudBaseGWServiceResponse DescribeCloudBaseGWService(Models\DescribeCloudBaseGWServiceRequest $req) 获取网关服务
 * @method Models\DescribeCreateMySQLResultResponse DescribeCreateMySQLResult(Models\DescribeCreateMySQLResultRequest $req) 查询开通Mysql结果，`Response.Data.Status = "notexist"` 表示未开通，如果未开通，可以调用 [CreateMySQL](https://cloud.tencent.com/document/api/876/128186) 来开通
 `Response.Data. Status = "success"` 表示开通成功，Mysql开通成功后，可通过接口设置数据库账号相关功能包括但不限于【创建账号、删除账号、查询可授权权限列表、查询账号已有权限、修改主机、修改配置、修改账号库表权限】、集群操作相关【查询集群参数、修改集群参数】，连接设置相关【关闭外网、开通外网、查询集群信息】，备份回档相关【创建手动回档、删除手动回档、修改自动备份配置信息、查询备份文件列表、集群回档、查询任务列表、获取table列表、获取集群数据库列表、查询备份下载地址】，相关功能接口文档：[TDSQL-C MySQL API文档](https://cloud.tencent.com/document/product/1003/48106)
 * @method Models\DescribeDatabaseACLResponse DescribeDatabaseACL(Models\DescribeDatabaseACLRequest $req) 获取数据库权限
 * @method Models\DescribeEnvAccountCircleResponse DescribeEnvAccountCircle(Models\DescribeEnvAccountCircleRequest $req) 查询环境计费周期。
云开发环境的资源点都是按月结算的，每个月都有一定的抵扣额度。

例如：
  某个环境在 2026-01-05 购买了3个月个人版(到期时间: 2026-04-05)，则他可以在以下3个周期内，分别享有40000资源点的额度：
  1. 2026-01-05 ~ 2026-02-05 23:59:59
  2. 2026-02-06 ~ 2026-03-05 23:59:59
  3. 2026-03-06 ~ 2026-04-05 23:59:59

本接口，用于获取环境当前属于哪个计费周期内。
 * @method Models\DescribeEnvLimitResponse DescribeEnvLimit(Models\DescribeEnvLimitRequest $req) 查询环境个数上限
 * @method Models\DescribeEnvsResponse DescribeEnvs(Models\DescribeEnvsRequest $req) 获取环境列表，含环境下的各个资源信息。尤其是各资源的唯一标识，是请求各资源的关键参数
 * @method Models\DescribeHostingDomainTaskResponse DescribeHostingDomainTask(Models\DescribeHostingDomainTaskRequest $req) 查询静态托管域名任务状态
 * @method Models\DescribeMySQLClusterDetailResponse DescribeMySQLClusterDetail(Models\DescribeMySQLClusterDetailRequest $req) 查询Mysql集群信息

调用该接口前需要先查询Mysql是否开通，可通过 [DescribeCreateMySQLResult ](https://cloud.tencent.com/document/api/876/128185) 查询，只有已开通的才能查到集群信息
 * @method Models\DescribeMySQLTaskStatusResponse DescribeMySQLTaskStatus(Models\DescribeMySQLTaskStatusRequest $req) 查询Mysql任务状态
 * @method Models\DescribeQuotaDataResponse DescribeQuotaData(Models\DescribeQuotaDataRequest $req) 查询指定指标的配额使用量
 * @method Models\DescribeSafeRuleResponse DescribeSafeRule(Models\DescribeSafeRuleRequest $req) 查询数据库安全规则。
安全规则，用于控制C端用户的访问权限。详见 [安全规则介绍](https://cloud.tencent.com/document/product/876/123478) 。
 * @method Models\DescribeStaticStoreResponse DescribeStaticStore(Models\DescribeStaticStoreRequest $req) 查看当前环境下静态托管资源信息，根据返回结果判断静态资源的状态
 * @method Models\DescribeTableResponse DescribeTable(Models\DescribeTableRequest $req) 查询表的相关信息，包括索引等信息

接口入参中的 Tag 为 flexdb 的实例 Id，可以通过 [DescribeEnvs](https://cloud.tencent.com/document/api/876/34820) 接口返回的 EnvList[0].Databases[0].InstanceId 获取
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) 本接口(DescribeTables)用于查询所有表信息，包括表名、表中数据条数、表中数据量、索引个数及索引的大小等
 * @method Models\DescribeUserListResponse DescribeUserList(Models\DescribeUserListRequest $req) 查询tcb用户列表
 * @method Models\DestroyEnvResponse DestroyEnv(Models\DestroyEnvRequest $req) 本接口用于销毁云开发环境。
云开发环境遵循腾讯云包年包月预付费产品生命周期，因此环境销毁需要分两步：
1. 资源退费。此时会根据当前环境剩余有效期，自动退还相关费用(代金券不退)。退款后，环境进入隔离期。
2. 环境删除。环境在进入隔离期后15天会自动删除。也可以通过本接口，指定 IsForce=true 来强制删除隔离期环境。

**注意**⚠️
  1. 环境退费后进入隔离期，则所有资源均无法访问，控制台无法操作和管理。
  2. 环境被彻底删除后，所有数据均无法找回。请谨慎操作。

可以通过接口 [tcb:DescribeBillingInfo](https://cloud.tencent.com/document/product/876/94390) 查询环境计费状态。
 * @method Models\DestroyMySQLResponse DestroyMySQL(Models\DestroyMySQLRequest $req) 销毁Mysql

销毁后可以通过 [DescribeMySQLTaskStatus](https://cloud.tencent.com/document/api/876/128183) 接口查询销毁结果，如果 `Response.Data. Status = FAILED ` 表示销毁失败，可以重新调用销毁接口重试
 * @method Models\DestroyStaticStoreResponse DestroyStaticStore(Models\DestroyStaticStoreRequest $req) 销毁静态托管资源，该接口创建异步销毁任务，资源最终状态可从DestroyStaticStore接口查看
 * @method Models\EditAuthConfigResponse EditAuthConfig(Models\EditAuthConfigRequest $req) 修改登录配置
 * @method Models\ListTablesResponse ListTables(Models\ListTablesRequest $req) 本接口(ListTables)用于查询所有表信息，包括表名、表中数据条数、表中数据量、索引个数及索引的大小等
 * @method Models\ModifyCloudBaseGWAPIResponse ModifyCloudBaseGWAPI(Models\ModifyCloudBaseGWAPIRequest $req) 修改云开发网关API
 * @method Models\ModifyClsTopicResponse ModifyClsTopic(Models\ModifyClsTopicRequest $req) 修改日志主题
 * @method Models\ModifyDatabaseACLResponse ModifyDatabaseACL(Models\ModifyDatabaseACLRequest $req) 修改数据库权限
 * @method Models\ModifyEnvResponse ModifyEnv(Models\ModifyEnvRequest $req) 更新环境信息
 * @method Models\ModifyEnvPlanResponse ModifyEnvPlan(Models\ModifyEnvPlanRequest $req) 本接口用于变更云开发环境套餐。
该接口会自动下单并支付，会在腾讯云账户中扣除余额（余额不足会下单失败）。
该接口支持自动扣除代金券（AutoVoucher=true时），符合条件的代金券会被自动扣除。
 * @method Models\ModifySafeRuleResponse ModifySafeRule(Models\ModifySafeRuleRequest $req) 设置数据库安全规则。
安全规则，用于控制C端用户的访问权限。详见 [安全规则介绍 ](https://cloud.tencent.com/document/product/876/123478)。
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) 修改tcb用户
 * @method Models\ReinstateEnvResponse ReinstateEnv(Models\ReinstateEnvRequest $req) 针对已隔离的免费环境，可以通过本接口将其恢复访问。
 * @method Models\RenewEnvResponse RenewEnv(Models\RenewEnvRequest $req) 本接口用于云开发环境套餐续费。
该接口会自动下单并支付，会在腾讯云账户中扣除余额（余额不足会下单失败）。
该接口支持自动扣除代金券（AutoVoucher=true时），符合条件的代金券会被自动扣除。
 * @method Models\RunCommandsResponse RunCommands(Models\RunCommandsRequest $req) 本接口用于执行数据库命令
 * @method Models\RunSqlResponse RunSql(Models\RunSqlRequest $req) 执行SQL语句

调用该接口前需要先查询Mysql是否开通，可通过 [DescribeCreateMySQLResult ](https://cloud.tencent.com/document/api/876/128185) 查询，只有开通成功才能操作
 * @method Models\SearchClsLogResponse SearchClsLog(Models\SearchClsLogRequest $req) 搜索用户调用日志
 * @method Models\UpdateTableResponse UpdateTable(Models\UpdateTableRequest $req) 本接口(UpdateTable)用于修改表信息，当前可以支持创建和删除索引
 */

class TcbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcb";

    /**
     * @var string
     */
    protected $version = "2018-06-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcb")."\\"."V20180608\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

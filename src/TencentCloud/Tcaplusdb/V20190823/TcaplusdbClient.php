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

namespace TencentCloud\Tcaplusdb\V20190823;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcaplusdb\V20190823\Models as Models;

/**
* @method Models\ClearTablesResponse ClearTables(Models\ClearTablesRequest $req) 根据给定的表信息，清除表数据。
* @method Models\CompareIdlFilesResponse CompareIdlFiles(Models\CompareIdlFilesRequest $req) 选中目标表，上传并校验改表文件，返回是否允许修改表结构
* @method Models\CreateAppResponse CreateApp(Models\CreateAppRequest $req) 本接口用于创建TcaplusDB应用
* @method Models\CreateTablesResponse CreateTables(Models\CreateTablesRequest $req) 根据选择的IDL文件列表，批量创建表
* @method Models\CreateZoneResponse CreateZone(Models\CreateZoneRequest $req) 在TcaplusDB应用下创建大区
* @method Models\DeleteAppResponse DeleteApp(Models\DeleteAppRequest $req) 删除TcaplusDB应用实例，必须在应用实例所属所有资源（包括大区，表）都已经释放的情况下才会成功。
* @method Models\DeleteIdlFilesResponse DeleteIdlFiles(Models\DeleteIdlFilesRequest $req) 指定应用ID和待删除IDL文件的信息，删除目标文件，如果文件正在被表关联则删除失败。
* @method Models\DeleteTablesResponse DeleteTables(Models\DeleteTablesRequest $req) 根据指定的表信息删除目标表
* @method Models\DeleteZoneResponse DeleteZone(Models\DeleteZoneRequest $req) 删除大区
* @method Models\DescribeAppsResponse DescribeApps(Models\DescribeAppsRequest $req) 查询TcaplusDB应用列表，包含应用详细信息。
* @method Models\DescribeIdlFileInfosResponse DescribeIdlFileInfos(Models\DescribeIdlFileInfosRequest $req) 查询表描述文件详情
* @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 查询TcaplusDB服务支持的地域列表
* @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) 查询表详情
* @method Models\DescribeTablesInRecycleResponse DescribeTablesInRecycle(Models\DescribeTablesInRecycleRequest $req) 查询回收站中的表详情
* @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 查询任务列表
* @method Models\DescribeUinInWhitelistResponse DescribeUinInWhitelist(Models\DescribeUinInWhitelistRequest $req) 查询本用户是否在白名单中，控制是否能创建TDR类型的APP或表
* @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 查询大区列表
* @method Models\ModifyAppNameResponse ModifyAppName(Models\ModifyAppNameRequest $req) 修改指定的应用名称
* @method Models\ModifyAppPasswordResponse ModifyAppPassword(Models\ModifyAppPasswordRequest $req) 修改指定AppInstanceId的实例密码，后台将在旧密码失效之前同时支持TcaplusDB SDK使用旧密码和新密码访问数据库。在旧密码失效之前不能提交新的密码修改请求，在旧密码失效之后不能提交修改旧密码过期时间的请求。
* @method Models\ModifyTableMemosResponse ModifyTableMemos(Models\ModifyTableMemosRequest $req) 修改表备注信息
* @method Models\ModifyTableQuotasResponse ModifyTableQuotas(Models\ModifyTableQuotasRequest $req) 表扩缩容
* @method Models\ModifyTablesResponse ModifyTables(Models\ModifyTablesRequest $req) 根据用户选定的表定义IDL文件，批量修改指定的表
* @method Models\ModifyZoneNameResponse ModifyZoneName(Models\ModifyZoneNameRequest $req) 修改TcaplusDB大区名称
* @method Models\RecoverRecycleTablesResponse RecoverRecycleTables(Models\RecoverRecycleTablesRequest $req) 恢复回收站中，用户自行删除的表。对欠费待释放的表无效。
* @method Models\RollbackTablesResponse RollbackTables(Models\RollbackTablesRequest $req) 表数据回档
* @method Models\VerifyIdlFilesResponse VerifyIdlFiles(Models\VerifyIdlFilesRequest $req) 上传并校验加表文件，返回校验合法的表定义
 */

class TcaplusdbClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "tcaplusdb.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-08-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcaplusdb")."\\"."V20190823\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

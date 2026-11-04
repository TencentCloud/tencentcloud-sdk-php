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

namespace TencentCloud\Tione\V20211111;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tione\V20211111\Models as Models;

/**
 * @method Models\ChatCompletionResponse ChatCompletion(Models\ChatCompletionRequest $req) 该接口支持与自行部署的大模型的聊天。

使用该接口调用时需要携带腾讯云的密钥信息用于身份信息鉴权，建议通过腾讯云的云 API SDK调用，具体可以参考
https://cloud.tencent.com/document/product/1278/85305
 * @method Models\CreateDataSourceResponse CreateDataSource(Models\CreateDataSourceRequest $req) 创建数据源
 * @method Models\CreateDatasetResponse CreateDataset(Models\CreateDatasetRequest $req) 创建数据集
 * @method Models\CreateExportResponse CreateExport(Models\CreateExportRequest $req) 创建任务式建模训练任务，Notebook，在线服务和批量预测任务日志下载任务API
 * @method Models\CreateModelServiceResponse CreateModelService(Models\CreateModelServiceRequest $req) 用于创建、发布一个新的模型服务
 * @method Models\CreateModelServiceAuthTokenResponse CreateModelServiceAuthToken(Models\CreateModelServiceAuthTokenRequest $req) 创建一个 AuthToken
 * @method Models\CreateMountLimitResponse CreateMountLimit(Models\CreateMountLimitRequest $req) 创建挂载限制
 * @method Models\CreateNotebookResponse CreateNotebook(Models\CreateNotebookRequest $req) 创建Notebook
 * @method Models\CreateNotebookImageResponse CreateNotebookImage(Models\CreateNotebookImageRequest $req) 保存镜像
 * @method Models\CreatePresignedNotebookUrlResponse CreatePresignedNotebookUrl(Models\CreatePresignedNotebookUrlRequest $req) 生成Notebook访问链接
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) 创建自定义角色
 * @method Models\CreateTrainingModelResponse CreateTrainingModel(Models\CreateTrainingModelRequest $req) 导入模型
 * @method Models\CreateTrainingTaskResponse CreateTrainingTask(Models\CreateTrainingTaskRequest $req) 创建模型训练任务
 * @method Models\DeleteDataSourceResponse DeleteDataSource(Models\DeleteDataSourceRequest $req) 删除数据源
 * @method Models\DeleteDatasetResponse DeleteDataset(Models\DeleteDatasetRequest $req) 删除数据集
 * @method Models\DeleteExportResponse DeleteExport(Models\DeleteExportRequest $req) 删除任务式建模训练任务，Notebook，在线服务和批量预测任务日志导出任务API
 * @method Models\DeleteModelServiceResponse DeleteModelService(Models\DeleteModelServiceRequest $req) 根据服务id删除模型服务
 * @method Models\DeleteModelServiceAuthTokenResponse DeleteModelServiceAuthToken(Models\DeleteModelServiceAuthTokenRequest $req) 删除一个 AuthToken
 * @method Models\DeleteModelServiceGroupResponse DeleteModelServiceGroup(Models\DeleteModelServiceGroupRequest $req) 根据服务组id删除服务组下所有模型服务
 * @method Models\DeleteMountLimitResponse DeleteMountLimit(Models\DeleteMountLimitRequest $req) 删除挂载限制。注意：删除挂载限制后，该存储对应的所有数据源也会被删除
 * @method Models\DeleteNotebookResponse DeleteNotebook(Models\DeleteNotebookRequest $req) 删除Notebook
 * @method Models\DeleteRoleResponse DeleteRole(Models\DeleteRoleRequest $req) 删除权限角色
 * @method Models\DeleteTrainingModelResponse DeleteTrainingModel(Models\DeleteTrainingModelRequest $req) 删除模型
 * @method Models\DeleteTrainingModelVersionResponse DeleteTrainingModelVersion(Models\DeleteTrainingModelVersionRequest $req) 删除模型版本
 * @method Models\DeleteTrainingTaskResponse DeleteTrainingTask(Models\DeleteTrainingTaskRequest $req) 删除训练任务
 * @method Models\DescribeAccessRulesResponse DescribeAccessRules(Models\DescribeAccessRulesRequest $req) 列取访问权限规则列表
 * @method Models\DescribeAnnotatedTaskListResponse DescribeAnnotatedTaskList(Models\DescribeAnnotatedTaskListRequest $req) 本接口（DescribeAnnotatedTaskList）用于查询用户标注任务详细信息列表；支持各种过滤条件；
 * @method Models\DescribeBillingResourceGroupResponse DescribeBillingResourceGroup(Models\DescribeBillingResourceGroupRequest $req) 查询资源组节点列表
 * @method Models\DescribeBillingResourceGroupAttachedWorkspacesResponse DescribeBillingResourceGroupAttachedWorkspaces(Models\DescribeBillingResourceGroupAttachedWorkspacesRequest $req) 查询资源组关联的工作空间列表
 * @method Models\DescribeBillingResourceGroupsResponse DescribeBillingResourceGroups(Models\DescribeBillingResourceGroupsRequest $req) 查询资源组列表
 * @method Models\DescribeBillingResourceInstanceRunningJobsResponse DescribeBillingResourceInstanceRunningJobs(Models\DescribeBillingResourceInstanceRunningJobsRequest $req) 查询资源组节点运行中的任务
 * @method Models\DescribeBillingSpecsResponse DescribeBillingSpecs(Models\DescribeBillingSpecsRequest $req) 本接口(DescribeBillingSpecs) 提供查询计费项列表
 * @method Models\DescribeBillingSpecsPriceResponse DescribeBillingSpecsPrice(Models\DescribeBillingSpecsPriceRequest $req) 本接口(DescribeBillingSpecsPrice)用于查询按量计费计费项价格。
 * @method Models\DescribeBuildInImagesResponse DescribeBuildInImages(Models\DescribeBuildInImagesRequest $req) 获取内置镜像列表
 * @method Models\DescribeDataSourceResponse DescribeDataSource(Models\DescribeDataSourceRequest $req) 获取数据源详情
 * @method Models\DescribeDataSourcesResponse DescribeDataSources(Models\DescribeDataSourcesRequest $req) 获取数据源列表
 * @method Models\DescribeDatasetsResponse DescribeDatasets(Models\DescribeDatasetsRequest $req) 查询数据集列表
 * @method Models\DescribeEventsResponse DescribeEvents(Models\DescribeEventsRequest $req) 获取任务式建模训练任务，Notebook，在线服务和批量预测任务的事件API
 * @method Models\DescribeExportResponse DescribeExport(Models\DescribeExportRequest $req) 查看任务式建模训练任务，Notebook，在线服务和批量预测任务日志下载任务状态API
 * @method Models\DescribeInferTemplatesResponse DescribeInferTemplates(Models\DescribeInferTemplatesRequest $req) 已废弃，收敛到统一接口

查询推理镜像模板
 * @method Models\DescribeLogsResponse DescribeLogs(Models\DescribeLogsRequest $req) 获取任务式建模训练任务，Notebook，在线服务和批量预测任务的日志API
 * @method Models\DescribeModelAccelerateTaskResponse DescribeModelAccelerateTask(Models\DescribeModelAccelerateTaskRequest $req) 查询模型优化任务详情
 * @method Models\DescribeModelAccelerateVersionsResponse DescribeModelAccelerateVersions(Models\DescribeModelAccelerateVersionsRequest $req) 模型加速之后的模型版本列表
 * @method Models\DescribeModelServiceResponse DescribeModelService(Models\DescribeModelServiceRequest $req) 查询单个服务
 * @method Models\DescribeModelServiceCallInfoResponse DescribeModelServiceCallInfo(Models\DescribeModelServiceCallInfoRequest $req) 展示服务的调用信息
 * @method Models\DescribeModelServiceGroupResponse DescribeModelServiceGroup(Models\DescribeModelServiceGroupRequest $req) 查询单个服务组
 * @method Models\DescribeModelServiceGroupsResponse DescribeModelServiceGroups(Models\DescribeModelServiceGroupsRequest $req) 列举在线推理服务组
 * @method Models\DescribeModelServiceHotUpdatedResponse DescribeModelServiceHotUpdated(Models\DescribeModelServiceHotUpdatedRequest $req) 用于查询模型服务能否开启热更新
 * @method Models\DescribeMountInstanceResponse DescribeMountInstance(Models\DescribeMountInstanceRequest $req) DescribeMountInstance
 * @method Models\DescribeMountInstancesResponse DescribeMountInstances(Models\DescribeMountInstancesRequest $req) 非数据源挂载时获取实例列表
 * @method Models\DescribeMountLimitsResponse DescribeMountLimits(Models\DescribeMountLimitsRequest $req) 获取挂载限制列表
 * @method Models\DescribeNotebookResponse DescribeNotebook(Models\DescribeNotebookRequest $req) Notebook详情
 * @method Models\DescribeNotebooksResponse DescribeNotebooks(Models\DescribeNotebooksRequest $req) Notebook列表
 * @method Models\DescribePlatformImagesResponse DescribePlatformImages(Models\DescribePlatformImagesRequest $req) 查询平台镜像信息
 * @method Models\DescribePresetImageListResponse DescribePresetImageList(Models\DescribePresetImageListRequest $req) 该接口用于查询内置镜像列表
 * @method Models\DescribePublicAlgoVersionListResponse DescribePublicAlgoVersionList(Models\DescribePublicAlgoVersionListRequest $req) 公共算法版本列表
 * @method Models\DescribeRoleResponse DescribeRole(Models\DescribeRoleRequest $req) 获取角色详情
 * @method Models\DescribeRoleUsersResponse DescribeRoleUsers(Models\DescribeRoleUsersRequest $req) 获取角色下已授权的用户列表
 * @method Models\DescribeRolesResponse DescribeRoles(Models\DescribeRolesRequest $req) 获取角色列表
 * @method Models\DescribeSubAccountLinuxUserInfosResponse DescribeSubAccountLinuxUserInfos(Models\DescribeSubAccountLinuxUserInfosRequest $req) 批量查询子账号Linux用户信息
 * @method Models\DescribeTrainingModelVersionResponse DescribeTrainingModelVersion(Models\DescribeTrainingModelVersionRequest $req) 查询模型版本
 * @method Models\DescribeTrainingModelVersionsResponse DescribeTrainingModelVersions(Models\DescribeTrainingModelVersionsRequest $req) 模型版本列表
 * @method Models\DescribeTrainingTaskResponse DescribeTrainingTask(Models\DescribeTrainingTaskRequest $req) 训练任务详情
 * @method Models\DescribeTrainingTaskPodUrlResponse DescribeTrainingTaskPodUrl(Models\DescribeTrainingTaskPodUrlRequest $req) 获取单个训练任务实例的登录链接
 * @method Models\DescribeTrainingTaskPodsResponse DescribeTrainingTaskPods(Models\DescribeTrainingTaskPodsRequest $req) 训练任务pod列表
 * @method Models\DescribeTrainingTasksResponse DescribeTrainingTasks(Models\DescribeTrainingTasksRequest $req) 训练任务列表
 * @method Models\DescribeWorkspaceResponse DescribeWorkspace(Models\DescribeWorkspaceRequest $req) 查询工作空间详情
 * @method Models\DescribeWorkspaceMembersResponse DescribeWorkspaceMembers(Models\DescribeWorkspaceMembersRequest $req) 查询空间成员列表
 * @method Models\DescribeWorkspaceQuotaUsageResponse DescribeWorkspaceQuotaUsage(Models\DescribeWorkspaceQuotaUsageRequest $req) ## DescribeWorkspaceQuotaUsage 接口文档

### 接口描述
查询工作空间配额用量信息。该接口用于查询指定工作空间下某个子账号的配额使用情况，支持多种配额类型（CBS存储配额、Notebook开发机数量配额、托管按量资源规格限制）。

### 错误码

| 错误码 | 说明 |
|--------|------|
| InvalidParameterValue | 参数值无效（如必填参数为空、QuotaType不在枚举范围内） |
| FailedOperation.QueryDatabaseFail | 数据库查询失败 |

### 示例

**请求示例**：
```json
{
  "QuotaType": "Notebook",
  "SupervisorUin": "100012345678",
  "SupervisorSubUin": "100012345679",
  "TiProjectId": "ti-proj-123456"
}
```

**响应示例**：
```json
{
  "QuotaType": "Notebook",
  "QuotaEnabled": true,
  "TotalQuota": 10,
  "UsedQuota": 3,
}
```
 * @method Models\DescribeWorkspaceQuotasResponse DescribeWorkspaceQuotas(Models\DescribeWorkspaceQuotasRequest $req) # DescribeWorkspaceQuotas 接口文档

## 接口描述

查询指定工作空间下的配额配置和配额列表。该接口用于获取主账号在某个工作空间下的配额管理配置，包括是否启用配额管理、默认配额值以及针对子账号或用户组的具体配额分配情况。

支持三种配额类型：
- **CBS**：CBS存储配额管理
- **Notebook**：开发机数量配额管理
- **PostPaySpec**：托管按量资源规格限制



## 请求参数

### 公共参数（HTTP Header）
| 参数名 | 类型 | 必填 | 描述 |
|--------|------|------|------|
| X-TC-Uin | string | 是 | 主账号Uin |
| X-TC-ProjectId | uint32 | 是 | 工作空间ID |

### 请求体参数
| 参数名 | 类型 | 必填 | 描述 |
|--------|------|------|------|
| QuotaType | string | 是 | 配额类型，可选值：<br>- `CBS`：CBS存储配额<br>- `Notebook`：开发机数量配额<br>- `PostPaySpec`：托管按量资源规格限制 |

## 响应参数

| 参数名 | 类型 | 描述 |
|--------|------|------|
| QuotaType | string | 配额类型 |
| QuotaEnabled | bool | 是否启用配额管理功能 |
| DefaultQuota | WorkspaceQuota | 默认配额配置（当QuotaEnabled为false时为空对象） |
| Quotas | ][WorkspaceQuota | 配额列表，包含所有子账号或用户组的配额配置（仅当QuotaEnabled为true时返回） |

### WorkspaceQuota

| 参数名 | 类型 | 描述 |
|--------|------|------|
| Id | string | 配额ID，格式：<br>- 用户配额：`{quota_type}-{uin}-{subuin}-{TiProjectId}`<br>- 用户组配额：`{quota_type}-{uin}-{groupid}-{TiProjectId}`<br>- 默认配额：`{quota_type}-{uin}-default-{TiProjectId}` |
| QuotaType | string | 配额类型 |
| Uin | string | 主账号Uin |
| SubUin | string | 子账号Uin（当TargetType为USER时有值） |
| SubUinName | string | 子账号名称（当TargetType为USER时有值） |
| QuotaValue | uint32 | 配额值：<br>- CBS：容量（GiB），默认100，范围10-10000<br>- Notebook：数量（个），默认1，范围1-999<br>- PostPaySpec：无意义，关注QuotaData字段 |
| QuotaData | []string | 配额数据（JSON数组格式）：<br>- 当QuotaType为PostPaySpec时，存储允许使用的规格ID列表 |
| TargetType | string | 配额目标类型：<br>- `USER`：用户配额<br>- `USER_GROUP`：用户组配额 |
| GroupId | string | 用户组ID（当TargetType为USER_GROUP时有值） |
| GroupName | string | 用户组名称（当TargetType为USER_GROUP时有值） |
| TiProjectId | string | 工作空间ID |

## 业务逻辑

1. **参数校验**：验证QuotaType参数是否合法
2. **查询配额配置**：根据主账号Uin、工作空间ID和配额类型查询配额配置
3. **配置不存在**：
   - 返回系统默认的配额启用状态和默认配额值
   - CBS默认启用，默认值100GiB
   - Notebook默认启用，默认值1个
   - PostPaySpec默认不启用
4. **配置存在但未启用**：
   - QuotaEnabled返回false
   - DefaultQuota返回空对象
   - Quotas不返回
5. **配置存在且已启用**：
   - QuotaEnabled返回true
   - DefaultQuota返回配置的默认配额值
   - Quotas返回所有子账号或用户组的配额列表
   - 自动反序列化QuotaData字段（JSON数组）

## 使用场景

1. **配额管理页面初始化**：获取当前工作空间的配额配置状态
2. **配额列表展示**：展示所有子账号或用户组的配额分配情况
3. **配额编辑前查询**：在修改配额前获取当前配置
4. **权限控制判断**：判断是否启用了配额管理功能

## 错误码

| 错误码 | 描述 | 解决方案 |
|--------|------|----------|
| InvalidParameterValue | 参数值错误 | 检查QuotaType参数是否为合法值（CBS/Notebook/PostPaySpec） |
| FailedOperation.QueryDatabaseFail | 数据库查询失败 | 稍后重试或联系管理员 |

## 请求示例

```json
{
  "QuotaType": "CBS"
}
```

**HTTP Header:**
```
X-TC-Uin: 100012345678
X-TC-ProjectId: 123456
```

## 响应示例

### 示例1：配额已启用且有配额列表

```json
{
  "QuotaType": "CBS",
  "QuotaEnabled": true,
  "DefaultQuota": {
    "Id": "CBS-100012345678-default-123456",
    "QuotaType": "CBS",
    "Uin": "100012345678",
    "SubUin": "",
    "SubUinName": "",
    "QuotaValue": 100,
    "QuotaData": [],
    "TargetType": "",
    "GroupId": "",
    "GroupName": "",
    "TiProjectId": "123456"
  },
  "Quotas": [
    {
      "Id": "CBS-100012345678-100012345679-123456",
      "QuotaType": "CBS",
      "Uin": "100012345678",
      "SubUin": "100012345679",
      "SubUinName": "张三",
      "QuotaValue": 200,
      "QuotaData": [],
      "TargetType": "USER",
      "GroupId": "",
      "GroupName": "",
      "TiProjectId": "123456"
    },
    {
      "Id": "CBS-100012345678-group001-123456",
      "QuotaType": "CBS",
      "Uin": "100012345678",
      "SubUin": "",
      "SubUinName": "",
      "QuotaValue": 500,
      "QuotaData": [],
      "TargetType": "USER_GROUP",
      "GroupId": "group001",
      "GroupName": "开发组",
      "TiProjectId": "123456"
    }
  ]
}
```

### 示例2：配额未启用

```json
{
  "QuotaType": "PostPaySpec",
  "QuotaEnabled": false,
  "DefaultQuota": {},
  "Quotas": []
}
```

### 示例3：PostPaySpec类型配额（带QuotaData）

```json
{
  "QuotaType": "PostPaySpec",
  "QuotaEnabled": true,
  "DefaultQuota": {
    "Id": "PostPaySpec-100012345678-default-123456",
    "QuotaType": "PostPaySpec",
    "Uin": "100012345678",
    "SubUin": "",
    "SubUinName": "",
    "QuotaValue": 0,
    "QuotaData": ["spec-001", "spec-002", "spec-003"],
    "TargetType": "",
    "GroupId": "",
    "GroupName": "",
    "TiProjectId": "123456"
  },
  "Quotas": [
    {
      "Id": "PostPaySpec-100012345678-100012345679-123456",
      "QuotaType": "PostPaySpec",
      "Uin": "100012345678",
      "SubUin": "100012345679",
      "SubUinName": "李四",
      "QuotaValue": 0,
      "QuotaData": ["spec-001", "spec-002"],
      "TargetType": "USER",
      "GroupId": "",
      "GroupName": "",
      "TiProjectId": "123456"
    }
  ]
}
```

## 注意事项

1. **配额继承规则**：
   - 如果子账号或用户组没有单独配置配额，则使用DefaultQuota的值
   - 用户组配额优先级高于默认配额，用户配额优先级最高

2. **QuotaData字段**：
   - 仅在QuotaType为PostPaySpec时有实际意义
   - 存储的是允许使用的规格ID列表
   - 其他类型的配额该字段为空数组

3. **TargetType字段**：
   - DefaultQuota的TargetType为空字符串
   - Quotas列表中的每个配额都有明确的TargetType

4. **配额值单位**：
   - CBS配额：GiB（1 GiB = 1024 MiB）
   - Notebook配额：个数

5. **性能优化**：
   - 接口会一次性返回所有配额列表，避免多次查询
   - 建议前端做好缓存，减少重复请求
 * @method Models\DescribeWorkspacesResponse DescribeWorkspaces(Models\DescribeWorkspacesRequest $req) 查询工作空间列表
 * @method Models\EnableTrainingTaskClsConfigResponse EnableTrainingTaskClsConfig(Models\EnableTrainingTaskClsConfigRequest $req) 开启CLS日志投递
 * @method Models\ModifyModelServiceResponse ModifyModelService(Models\ModifyModelServiceRequest $req) 用于更新模型服务
 * @method Models\ModifyModelServiceAuthTokenResponse ModifyModelServiceAuthToken(Models\ModifyModelServiceAuthTokenRequest $req) 修改一个 AuthToken
 * @method Models\ModifyModelServiceAuthorizationResponse ModifyModelServiceAuthorization(Models\ModifyModelServiceAuthorizationRequest $req) 修改服务鉴权配置
 * @method Models\ModifyNotebookResponse ModifyNotebook(Models\ModifyNotebookRequest $req) 修改Notebook
 * @method Models\ModifyNotebookTagsResponse ModifyNotebookTags(Models\ModifyNotebookTagsRequest $req) 修改Notebook标签
 * @method Models\ModifyRoleResponse ModifyRole(Models\ModifyRoleRequest $req) 修改自定义角色
 * @method Models\ModifyRoleAccessRulesResponse ModifyRoleAccessRules(Models\ModifyRoleAccessRulesRequest $req) 修改自定义角色的权限规则
 * @method Models\ModifyRoleUserGrantResponse ModifyRoleUserGrant(Models\ModifyRoleUserGrantRequest $req) 修改角色下用户的授权状态
 * @method Models\ModifyServiceGroupWeightsResponse ModifyServiceGroupWeights(Models\ModifyServiceGroupWeightsRequest $req) 更新推理服务组流量分配
 * @method Models\ModifyUserGrantResponse ModifyUserGrant(Models\ModifyUserGrantRequest $req) 更新用户授权
 * @method Models\ModifyWorkspaceMembersResponse ModifyWorkspaceMembers(Models\ModifyWorkspaceMembersRequest $req) 更新空间用户列表
 * @method Models\PushTrainingMetricsResponse PushTrainingMetrics(Models\PushTrainingMetricsRequest $req) 上报训练自定义指标
 * @method Models\StartNotebookResponse StartNotebook(Models\StartNotebookRequest $req) 启动Notebook
 * @method Models\StartTrainingTaskResponse StartTrainingTask(Models\StartTrainingTaskRequest $req) 启动模型训练任务
 * @method Models\StopModelAccelerateTaskResponse StopModelAccelerateTask(Models\StopModelAccelerateTaskRequest $req) 停止模型加速任务
 * @method Models\StopNotebookResponse StopNotebook(Models\StopNotebookRequest $req) 停止Notebook
 * @method Models\StopTrainingTaskResponse StopTrainingTask(Models\StopTrainingTaskRequest $req) 停止模型训练任务
 * @method Models\UpdateDataSourceResponse UpdateDataSource(Models\UpdateDataSourceRequest $req) 更新数据源
 * @method Models\UpdateMountLimitResponse UpdateMountLimit(Models\UpdateMountLimitRequest $req) 创建挂载限制
 * @method Models\UpdateSubAccountLinuxUserInfoResponse UpdateSubAccountLinuxUserInfo(Models\UpdateSubAccountLinuxUserInfoRequest $req) 更新子账号Linux用户信息
 */

class TioneClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tione.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tione";

    /**
     * @var string
     */
    protected $version = "2021-11-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("tione")."\\"."V20211111\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

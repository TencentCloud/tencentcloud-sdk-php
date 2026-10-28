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

namespace TencentCloud\Databuddy\V20260715;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Databuddy\V20260715\Models as Models;

/**
 * @method Models\AddConsoleUsersResponse AddConsoleUsers(Models\AddConsoleUsersRequest $req) 添加控制台用户，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\AddWorkspaceGroupsResponse AddWorkspaceGroups(Models\AddWorkspaceGroupsRequest $req) 添加工作空间用户组
 * @method Models\AddWorkspaceUsersResponse AddWorkspaceUsers(Models\AddWorkspaceUsersRequest $req) 创建用户组
 * @method Models\CreateCatalogResponse CreateCatalog(Models\CreateCatalogRequest $req) 创建数据目录接口
 * @method Models\CreateConsoleGroupResponse CreateConsoleGroup(Models\CreateConsoleGroupRequest $req) 创建控制台用户组，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\CreateFileResponse CreateFile(Models\CreateFileRequest $req) 在Studio（统一开发 IDE）的工作空间文件树中新建一个文件（Notebook/SQL/Python等），创建成功后返回文件的完整元信息。

**前置条件**
1. WorkspaceId 对应工作空间存在，且调用方为该工作空间成员；
2. ParentFolderPath 对应的父文件夹必须存在，且调用方对其有写权限（根目录传 `/`）；
3. FileName 在同一父文件夹下不能重名（含后缀比较）；
4. FileName 后缀必须与 FileType 匹配（`.ipynb`↔`NOTEBOOK_FILE`、`.sql`↔`SQL_FILE`）；
5. 需带文件内容创建时通过 Storage 传入（大文件走 COS 中转，小文件放 Storage.Content）。
 * @method Models\CreateFolderResponse CreateFolder(Models\CreateFolderRequest $req) 创建文件夹
 * @method Models\CreateLocationResponse CreateLocation(Models\CreateLocationRequest $req) 创建存储位置
使用场景：在数据湖仓库中创建新的存储位置
 * @method Models\CreateModelResponse CreateModel(Models\CreateModelRequest $req) 创建模型接口
 * @method Models\CreateModelVersionResponse CreateModelVersion(Models\CreateModelVersionRequest $req) 创建模型版本
 * @method Models\CreateSchemaResponse CreateSchema(Models\CreateSchemaRequest $req) 创建schema
 * @method Models\CreateVolumeResponse CreateVolume(Models\CreateVolumeRequest $req) 创建数据卷接口
 * @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) 创建工作流
 * @method Models\CreateWorkspaceResponse CreateWorkspace(Models\CreateWorkspaceRequest $req) 创建工作空间，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\CreateWorkspaceRoleResponse CreateWorkspaceRole(Models\CreateWorkspaceRoleRequest $req) 创建工作空间角色
 * @method Models\DeleteCatalogResponse DeleteCatalog(Models\DeleteCatalogRequest $req) 删除catalog
 * @method Models\DeleteConsoleGroupsResponse DeleteConsoleGroups(Models\DeleteConsoleGroupsRequest $req) 删除控制台用户组，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\DeleteFileResponse DeleteFile(Models\DeleteFileRequest $req) 将文件移入回收站（软删除），同时清理该文件的版本记录与执行结果快照。

**前置条件**
1. FileId 对应文件必须存在且为活跃状态；
2. 调用方对该文件有删除权限；
3. 文件未被工作流任务引用。

**错误码（Module 均为 `Studio`）**

| 错误码（Code） | InnerCode | 描述 | 处理建议 |
| --- | --- | --- | --- |
| `MissingParameter.WorkspaceId` | 1030001 | 缺少 WorkspaceId | 请传入 WorkspaceId |
| `MissingParameter.FileId` | 1030003 | 缺少 FileId | 请传入 FileId  |
| `InvalidParameterValue.FileType` | 1030102 | FileType 取值不支持 | FileType 取 FILE/NOTEBOOK_FILE/SQL_FILE |
| `ResourceNotFound.FileNotFound` | 1030203 | 文件不存在或已删除 | 请确认 FileId |
| `ResourceInUse.FileReferencedByTask` | 1030204 | 文件被工作流任务引用，不允许删除 | 请先解除任务引用后再删除 |
| `UnauthorizedOperation.FileDeleteDenied` | 1030303 | 对该文件无删除权限 | 请联系文件负责人或空间管理员授权 |
| `InternalError` | 1030900 | 服务内部异常 | 请携带 RequestId 联系支持 |
 * @method Models\DeleteFolderResponse DeleteFolder(Models\DeleteFolderRequest $req) 删除文件夹
 * @method Models\DeleteLocationResponse DeleteLocation(Models\DeleteLocationRequest $req) 删除存储位置
使用场景：删除指定的存储位置
前置条件：存储位置名称必须存在
错误码：MetaLakeNotFound - 存储位置不存在
 * @method Models\DeleteModelResponse DeleteModel(Models\DeleteModelRequest $req) 删除模型
 * @method Models\DeleteSchemaResponse DeleteSchema(Models\DeleteSchemaRequest $req) 删除schema
 * @method Models\DeleteTableResponse DeleteTable(Models\DeleteTableRequest $req) 删除table
 * @method Models\DeleteViewResponse DeleteView(Models\DeleteViewRequest $req) 删除view
 * @method Models\DeleteVolumeResponse DeleteVolume(Models\DeleteVolumeRequest $req) 删除数据卷
 * @method Models\DeleteWorkflowResponse DeleteWorkflow(Models\DeleteWorkflowRequest $req) 删除工作流
 * @method Models\DeleteWorkspaceResponse DeleteWorkspace(Models\DeleteWorkspaceRequest $req) 删除工作空间
 * @method Models\DeleteWorkspaceRoleResponse DeleteWorkspaceRole(Models\DeleteWorkspaceRoleRequest $req) 删除工作空间角色
 * @method Models\GetCatalogResponse GetCatalog(Models\GetCatalogRequest $req) 查询catalog详情
 * @method Models\GetFileResponse GetFile(Models\GetFileRequest $req) 获取文件的元信息，可选包含文件内容，支持按版本读取历史快照。

**前置条件**
1. FileId 与 FilePath 二选一，至少传一个；同时传时以 FileId 为准；
2. 对应文件必须存在，且调用方对该文件有读权限；
3. 传 VersionId 时该版本必须存在。

**错误码（Module 均为 `Studio`）**

| 错误码（Code） | InnerCode | 描述 | 处理建议 |
| --- | --- | --- | --- |
| `MissingParameter.WorkspaceId` | 1030001 | 缺少 WorkspaceId | 请传入 WorkspaceId |
| `MissingParameter.FileId` | 1030003 | FileId 与 FilePath 同时为空 | FileId 与 FilePath 二选一，至少传一个 |
| `InvalidParameterValue.FileType` | 1030102 | FileType 取值不支持 | FileType 取 FILE/NOTEBOOK_FILE/SQL_FILE |
| `ResourceNotFound.FileNotFound` | 1030203 | 文件不存在或已删除 | 请确认 FileId 或 FilePath |
| `ResourceNotFound.FileVersionNotFound` | 1030205 | 指定的文件版本不存在 | 请确认 VersionId，或调用 ListFileVersions 获取 |
| `UnauthorizedOperation.FileReadDenied` | 1030304 | 对该文件无读权限 | 请联系文件负责人或空间管理员授权 |
| `InternalError` | 1030900 | 服务内部异常 | 请携带 RequestId 联系支持 |
 * @method Models\GetFolderResponse GetFolder(Models\GetFolderRequest $req) 获取文件夹详情
 * @method Models\GetLocationResponse GetLocation(Models\GetLocationRequest $req) 查询存储位置详情
使用场景：根据存储位置名获取单个存储位置的详细信息
前置条件：存储位置名称必须存在
错误码：MetaLakeNotFound - 存储位置不存在
 * @method Models\GetModelResponse GetModel(Models\GetModelRequest $req) 获取模型详情
 * @method Models\GetModelVersionResponse GetModelVersion(Models\GetModelVersionRequest $req) 获取模型版本详情
 * @method Models\GetSchemaResponse GetSchema(Models\GetSchemaRequest $req) 查询schema详情
 * @method Models\GetTableResponse GetTable(Models\GetTableRequest $req) 查询table详情
 * @method Models\GetTablesResponse GetTables(Models\GetTablesRequest $req) 批量获取表的元数据。使用场景：根据表的全名列表（catalogName.schemaName.tableName）批量获取表的详细元数据信息。前置条件：需要有对应workspace的读权限，仅返回当前workspace有权限的catalog下的表。权限校验：通过getAuthedCatalogNames获取有权限的catalogName进行过滤，不在权限范围内的表会被静默跳过。限制：FullNames最大支持20个表全名
 * @method Models\GetViewResponse GetView(Models\GetViewRequest $req) 查询view详情
 * @method Models\GetVolumeResponse GetVolume(Models\GetVolumeRequest $req) 获取模型详情
 * @method Models\GetWorkflowResponse GetWorkflow(Models\GetWorkflowRequest $req) 获取工作流详细信息
 * @method Models\GetWorkflowRunResponse GetWorkflowRun(Models\GetWorkflowRunRequest $req) 查询工作流运行详情
 * @method Models\GetWorkflowTaskRunResponse GetWorkflowTaskRun(Models\GetWorkflowTaskRunRequest $req) 查询任务运行详情
 * @method Models\GetWorkspaceResponse GetWorkspace(Models\GetWorkspaceRequest $req) 查询工作空间详情
 * @method Models\KillWorkflowRunResponse KillWorkflowRun(Models\KillWorkflowRunRequest $req) 终止工作流的运行
 * @method Models\ListCatalogNamesResponse ListCatalogNames(Models\ListCatalogNamesRequest $req) 分页查询数据目录名称列表
 * @method Models\ListCatalogsResponse ListCatalogs(Models\ListCatalogsRequest $req) 分页获取数据目录列表
 * @method Models\ListConsoleGroupUsersResponse ListConsoleGroupUsers(Models\ListConsoleGroupUsersRequest $req) 查询控制台用户组成员列表，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\ListConsoleGroupsResponse ListConsoleGroups(Models\ListConsoleGroupsRequest $req) 查询控制台用户组列表，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\ListConsoleRolesResponse ListConsoleRoles(Models\ListConsoleRolesRequest $req) 查询控制台角色列表，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\ListConsoleUsersResponse ListConsoleUsers(Models\ListConsoleUsersRequest $req) 查询控制台用户列表，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\ListFeatureTablesResponse ListFeatureTables(Models\ListFeatureTablesRequest $req) 查询特征表列表
 * @method Models\ListFilesResponse ListFiles(Models\ListFilesRequest $req) 获取文件夹和文件列表
 * @method Models\ListLocationsResponse ListLocations(Models\ListLocationsRequest $req) 分页查询存储位置列表
使用场景：分页查询数据湖仓库中的存储位置详情列表，支持模式匹配和快照分页
 * @method Models\ListModelsResponse ListModels(Models\ListModelsRequest $req) 分页获取模型信息
 * @method Models\ListSchemaNamesResponse ListSchemaNames(Models\ListSchemaNamesRequest $req) 分页查询数据库名称列表
 * @method Models\ListSchemasResponse ListSchemas(Models\ListSchemasRequest $req) 获取schema列表
 * @method Models\ListTableNamesResponse ListTableNames(Models\ListTableNamesRequest $req) 分页查询数据表名称列表
 * @method Models\ListTablesResponse ListTables(Models\ListTablesRequest $req) 获取table列表
 * @method Models\ListViewNamesResponse ListViewNames(Models\ListViewNamesRequest $req) 分页查询视图名称列表
 * @method Models\ListViewsResponse ListViews(Models\ListViewsRequest $req) 获取view列表
 * @method Models\ListVolumesResponse ListVolumes(Models\ListVolumesRequest $req) 分页获取数据卷信息
 * @method Models\ListWorkflowRunsResponse ListWorkflowRuns(Models\ListWorkflowRunsRequest $req) 工作流运行列表
 * @method Models\ListWorkflowTaskRunsResponse ListWorkflowTaskRuns(Models\ListWorkflowTaskRunsRequest $req) 查询工作流任务历史运行列表
 * @method Models\ListWorkflowsResponse ListWorkflows(Models\ListWorkflowsRequest $req) 查询工作流列表
 * @method Models\ListWorkspaceGroupUsersResponse ListWorkspaceGroupUsers(Models\ListWorkspaceGroupUsersRequest $req) 查询工作空间用户组用户列表
 * @method Models\ListWorkspaceGroupsResponse ListWorkspaceGroups(Models\ListWorkspaceGroupsRequest $req) 查询工作空间用户组列表
 * @method Models\ListWorkspaceUsersResponse ListWorkspaceUsers(Models\ListWorkspaceUsersRequest $req) 查询工作空间用户列表
 * @method Models\ListWorkspacesResponse ListWorkspaces(Models\ListWorkspacesRequest $req) 查询工作空间列表，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\RemoveConsoleUsersResponse RemoveConsoleUsers(Models\RemoveConsoleUsersRequest $req) <p>批量移除控制台用户（单次最多10个；前置校验任一不满足整体拒绝；执行阶段单个失败不中断后续删除，成败以 SuccessUins/FailItems 为准），该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。</p>
 * @method Models\RemoveWorkspaceGroupsResponse RemoveWorkspaceGroups(Models\RemoveWorkspaceGroupsRequest $req) 移除工作空间用户组
 * @method Models\RemoveWorkspaceUsersResponse RemoveWorkspaceUsers(Models\RemoveWorkspaceUsersRequest $req) <p>批量移除工作空间用户（单次最多10个；单个 UIN 失败不影响其他 UIN 移除，成败以 SuccessUins/FailItems 为准）</p>
 * @method Models\RerunWorkflowRunResponse RerunWorkflowRun(Models\RerunWorkflowRunRequest $req) 重跑工作流
 * @method Models\RunWorkflowResponse RunWorkflow(Models\RunWorkflowRequest $req) 运行工作流
 * @method Models\SearchAssetResponse SearchAsset(Models\SearchAssetRequest $req) 资产统一搜索
 * @method Models\StartComputeResponse StartCompute(Models\StartComputeRequest $req) 启动计算资源
 * @method Models\StopComputeResponse StopCompute(Models\StopComputeRequest $req) 停止计算资源
 * @method Models\UnbindWorkflowBundleResponse UnbindWorkflowBundle(Models\UnbindWorkflowBundleRequest $req) 解绑工作流Bundle信息
说明：本接口语义等同于规范动词清单中的 Detach，因兼容既有产品形态保留 Unbind 命名
 * @method Models\UpdateCatalogResponse UpdateCatalog(Models\UpdateCatalogRequest $req) 修改数据目录信息
使用场景：修改数据目录的注释，按需传入NewComment字段
前置条件：数据目录必须存在
 * @method Models\UpdateConsoleGroupResponse UpdateConsoleGroup(Models\UpdateConsoleGroupRequest $req) 修改控制台用户组，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\UpdateConsoleUsersResponse UpdateConsoleUsers(Models\UpdateConsoleUsersRequest $req) 修改控制台用户角色，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\UpdateFileResponse UpdateFile(Models\UpdateFileRequest $req) 更新文件内容与运行配置（计算资源、默认 catalog/schema、参数等），返回更新后的文件元信息。

**前置条件**
1. FileId 对应文件必须存在且为活跃状态；
2. 调用方对该文件有写权限；
3. 仅更新配置时不传 Storage；仅更新内容时不传 FileConfig；
4. FileConfig.ResourceId 非空时会校验资源类型与文件类型的匹配性。

**错误码（Module 均为 `Studio`）**

| 错误码（Code） | InnerCode | 描述 | 处理建议 |
| --- | --- | --- | --- |
| `MissingParameter.WorkspaceId` | 1030001 | 缺少 WorkspaceId | 请传入 WorkspaceId |
| `MissingParameter.FileId` | 1030003 | 缺少 FileId | 请传入 FileId |
| `InvalidParameterValue.FileType` | 1030102 | FileType 取值不支持 | FileType 取 FILE/NOTEBOOK_FILE/SQL_FILE |
| `InvalidParameterValue.ResourceId` | 1030104 | 计算资源类型与文件类型不匹配 | Python/Notebook 选数据计算资源，SQL 选数据分析资源 |
| `ResourceNotFound.FileNotFound` | 1030203 | 文件不存在或已删除 | 请确认 FileId，或调用 GetFile 校验文件状态 |
| `UnauthorizedOperation.FileWriteDenied` | 1030302 | 对该文件无写权限 | 请联系文件负责人或空间管理员授权 |
| `FailedOperation.FileStorageUpdateFailed` | 1030401 | 文件内容写入存储失败 | 请稍后重试，持续失败请携带 RequestId 联系支持 |
| `InternalError` | 1030900 | 服务内部异常 | 请携带 RequestId 联系支持 |
 * @method Models\UpdateFolderResponse UpdateFolder(Models\UpdateFolderRequest $req) 更新文件夹（支持重命名+移动）
 * @method Models\UpdateFunctionResponse UpdateFunction(Models\UpdateFunctionRequest $req) 修改函数信息
使用场景：修改函数的注释，按需传入NewComment字段
前置条件：函数必须存在
 * @method Models\UpdateLocationResponse UpdateLocation(Models\UpdateLocationRequest $req) 修改存储位置
使用场景：修改存储位置的名称、描述或属性信息
前置条件：存储位置名称必须存在
错误码：MetaLakeNotFound - 存储位置不存在
 * @method Models\UpdateModelResponse UpdateModel(Models\UpdateModelRequest $req) 修改模型信息
使用场景：修改模型的名称或注释，按需传入NewName/NewComment字段
前置条件：模型必须存在
 * @method Models\UpdateModelVersionResponse UpdateModelVersion(Models\UpdateModelVersionRequest $req) 修改模型版本信息
使用场景：修改模型版本的别名或注释，按需传入对应字段
前置条件：模型版本必须存在
 * @method Models\UpdateSchemaResponse UpdateSchema(Models\UpdateSchemaRequest $req) 修改schema信息
使用场景：修改schema的注释，按需传入NewComment字段
前置条件：schema必须存在
 * @method Models\UpdateTableResponse UpdateTable(Models\UpdateTableRequest $req) 修改表信息
使用场景：修改表的名称或注释，按需传入NewName/NewComment字段
前置条件：表必须存在
 * @method Models\UpdateTableColumnResponse UpdateTableColumn(Models\UpdateTableColumnRequest $req) 修改表字段描述
使用场景：修改表中一个或多个字段的注释
前置条件：用户需对目标表有写权限；字段名必须存在于目标表中
 * @method Models\UpdateViewResponse UpdateView(Models\UpdateViewRequest $req) 修改视图信息
使用场景：修改视图的名称或注释，按需传入NewName/NewComment字段
前置条件：视图必须存在
 * @method Models\UpdateVolumeResponse UpdateVolume(Models\UpdateVolumeRequest $req) 修改数据卷信息
使用场景：修改数据卷的名称或注释，按需传入NewName/NewComment字段
前置条件：数据卷必须存在
 * @method Models\UpdateWorkflowResponse UpdateWorkflow(Models\UpdateWorkflowRequest $req) 更新工作流
 * @method Models\UpdateWorkspaceResponse UpdateWorkspace(Models\UpdateWorkspaceRequest $req) 修改工作空间，该接口为控制台级接口，仅支持在中心地域调用：国内站请传入 ap-guangzhou，国际站请传入 ap-singapore；其他地域调用将返回 UnsupportedRegion。
 * @method Models\UpdateWorkspaceGroupsRolesResponse UpdateWorkspaceGroupsRoles(Models\UpdateWorkspaceGroupsRolesRequest $req) 更新工作空间用户组角色
 * @method Models\UpdateWorkspaceGroupsTagsResponse UpdateWorkspaceGroupsTags(Models\UpdateWorkspaceGroupsTagsRequest $req) 修改工作空间用户组标签
 * @method Models\UpdateWorkspaceRoleResponse UpdateWorkspaceRole(Models\UpdateWorkspaceRoleRequest $req) 更新工作空间角色
 * @method Models\UpdateWorkspaceUsersRolesResponse UpdateWorkspaceUsersRoles(Models\UpdateWorkspaceUsersRolesRequest $req) 修改工作空间用户角色
 * @method Models\UpdateWorkspaceUsersTagsResponse UpdateWorkspaceUsersTags(Models\UpdateWorkspaceUsersTagsRequest $req) 修改工作空间用户标签
本接口为整体覆盖式修改：每次调用以请求中的 Tags 为准，替换指定用户的全部直绑标签，而非增量追加。
1、传入 Tags（含 TagId/TagValueId）：替换为该批标签
2、不传 Tags 或传入空数组（"Tags": []）：将清除 UserUins 中所有用户的全部直绑标签，且操作不可逆，请谨慎调用
3、多个用户将共享同一批 Tags；仅修改单个用户时，UserUins 请只传该用户
4、仅清除用户直绑（Source=1）的标签，用户从用户组继承的标签（Source=2）不受影响
 */

class DatabuddyClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "databuddy.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "databuddy";

    /**
     * @var string
     */
    protected $version = "2026-07-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("databuddy")."\\"."V20260715\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

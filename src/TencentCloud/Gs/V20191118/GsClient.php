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

namespace TencentCloud\Gs\V20191118;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gs\V20191118\Models as Models;

/**
 * @method Models\BackUpAndroidInstanceResponse BackUpAndroidInstance(Models\BackUpAndroidInstanceRequest $req) 备份安卓实例。该接口需要联系我们开通内网存储才能使用。
 * @method Models\BackUpAndroidInstanceToStorageResponse BackUpAndroidInstanceToStorage(Models\BackUpAndroidInstanceToStorageRequest $req) 备份云手机数据到指定存储，支持 COS 和兼容 AWS S3 协议的对象存储服务。如果是备份到 COS 时，会使用公网流量，授权 COS bucket 请在控制台中操作。
 * @method Models\CleanAndroidInstancesAppDataResponse CleanAndroidInstancesAppData(Models\CleanAndroidInstancesAppDataRequest $req) 批量清理安卓实例应用数据
 * @method Models\ConnectAndroidInstanceResponse ConnectAndroidInstance(Models\ConnectAndroidInstanceRequest $req) 连接安卓实例
 * @method Models\CopyAndroidInstanceResponse CopyAndroidInstance(Models\CopyAndroidInstanceRequest $req) 复制安卓实例：
1. 排除和包含文件只能指定 /data 下的文件，不指定时复制整个 /data 目录
2. 源实例和目的实例必须在同一区域
3. 复制时，源实例和目的实例都会停机，复制完后实例会自动启动
4. 复制时会产生大量内网流量，请限制并发
 * @method Models\CreateAndroidAppResponse CreateAndroidApp(Models\CreateAndroidAppRequest $req) 创建安卓应用
 * @method Models\CreateAndroidAppVersionResponse CreateAndroidAppVersion(Models\CreateAndroidAppVersionRequest $req) 创建安卓应用版本
 * @method Models\CreateAndroidInstanceADBResponse CreateAndroidInstanceADB(Models\CreateAndroidInstanceADBRequest $req) 创建云手机实例 ADB 连接信息，请将返回结果的 PrivateKey 字段保存为 pem 文件，并将 pem 文件权限设置为 600，再参考返回结果的 ConnectCommand 使用 adb 连接实例。
 * @method Models\CreateAndroidInstanceAcceleratorTokenResponse CreateAndroidInstanceAcceleratorToken(Models\CreateAndroidInstanceAcceleratorTokenRequest $req) 创建安卓实例加速Token
 * @method Models\CreateAndroidInstanceImageResponse CreateAndroidInstanceImage(Models\CreateAndroidInstanceImageRequest $req) 使用指定的安卓实例创建镜像，创建镜像时指定的实例会关机，镜像创建完成后实例会自动开机。当镜像的 AndroidInstanceImageState 为 NORMAL 时，镜像创建完成处于可用状态。
 * @method Models\CreateAndroidInstanceLabelResponse CreateAndroidInstanceLabel(Models\CreateAndroidInstanceLabelRequest $req) 创建安卓实例标签
 * @method Models\CreateAndroidInstanceSSHResponse CreateAndroidInstanceSSH(Models\CreateAndroidInstanceSSHRequest $req) 创建安卓实例 SSH 连接信息，请将返回结果的 PrivateKey 字段保存为 pem 文件，并将 pem 文件权限设置为 600，再参考返回结果的 ConnectCommand 使用 ssh 连接实例。
 * @method Models\CreateAndroidInstanceWebShellResponse CreateAndroidInstanceWebShell(Models\CreateAndroidInstanceWebShellRequest $req) 创建安卓实例 WebShell 连接信息，返回的 ConnectUrl 可通过浏览器直接打开访问，链接有效期 1 小时，链接打开后可持续使用。
 * @method Models\CreateAndroidInstancesResponse CreateAndroidInstances(Models\CreateAndroidInstancesRequest $req) 创建安卓实例
 * @method Models\CreateAndroidInstancesAccessTokenResponse CreateAndroidInstancesAccessToken(Models\CreateAndroidInstancesAccessTokenRequest $req) 创建安卓实例访问Token
 * @method Models\CreateAndroidInstancesScreenshotResponse CreateAndroidInstancesScreenshot(Models\CreateAndroidInstancesScreenshotRequest $req) 安卓实例截图
 * @method Models\CreateCosCredentialResponse CreateCosCredential(Models\CreateCosCredentialRequest $req) 用于创建 Cos 临时密钥
 * @method Models\CreateSessionResponse CreateSession(Models\CreateSessionRequest $req) 创建会话
 * @method Models\DeleteAndroidAppResponse DeleteAndroidApp(Models\DeleteAndroidAppRequest $req) 删除安卓应用
 * @method Models\DeleteAndroidAppVersionResponse DeleteAndroidAppVersion(Models\DeleteAndroidAppVersionRequest $req) 删除安卓应用版本
 * @method Models\DeleteAndroidInstanceBackupFilesResponse DeleteAndroidInstanceBackupFiles(Models\DeleteAndroidInstanceBackupFilesRequest $req) 删除安卓实例备份文件
 * @method Models\DeleteAndroidInstanceBackupsResponse DeleteAndroidInstanceBackups(Models\DeleteAndroidInstanceBackupsRequest $req) 批量删除安卓实例备份
 * @method Models\DeleteAndroidInstanceImagesResponse DeleteAndroidInstanceImages(Models\DeleteAndroidInstanceImagesRequest $req) 删除安卓实例镜像
 * @method Models\DeleteAndroidInstanceLabelResponse DeleteAndroidInstanceLabel(Models\DeleteAndroidInstanceLabelRequest $req) 删除安卓实例标签
 * @method Models\DescribeAndroidAppsResponse DescribeAndroidApps(Models\DescribeAndroidAppsRequest $req) 查询安卓应用信息
 * @method Models\DescribeAndroidInstanceAppsResponse DescribeAndroidInstanceApps(Models\DescribeAndroidInstanceAppsRequest $req) 查询安卓实例应用
 * @method Models\DescribeAndroidInstanceBackupsResponse DescribeAndroidInstanceBackups(Models\DescribeAndroidInstanceBackupsRequest $req) 查询安卓实例备份列表
 * @method Models\DescribeAndroidInstanceImagesResponse DescribeAndroidInstanceImages(Models\DescribeAndroidInstanceImagesRequest $req) 查询安卓实例镜像信息，当镜像的 AndroidInstanceImageState 为 NORMAL 时，镜像处于可用状态。
 * @method Models\DescribeAndroidInstanceLabelsResponse DescribeAndroidInstanceLabels(Models\DescribeAndroidInstanceLabelsRequest $req) 查询安卓实例标签
 * @method Models\DescribeAndroidInstanceTasksStatusResponse DescribeAndroidInstanceTasksStatus(Models\DescribeAndroidInstanceTasksStatusRequest $req) 查询安卓实例任务状态
 * @method Models\DescribeAndroidInstancesResponse DescribeAndroidInstances(Models\DescribeAndroidInstancesRequest $req) 查询安卓实例
 * @method Models\DescribeAndroidInstancesAppBlacklistResponse DescribeAndroidInstancesAppBlacklist(Models\DescribeAndroidInstancesAppBlacklistRequest $req) 查询安卓实例黑名单
 * @method Models\DescribeAndroidInstancesByAppsResponse DescribeAndroidInstancesByApps(Models\DescribeAndroidInstancesByAppsRequest $req) 批量查询安装指定应用的安卓实例
 * @method Models\DescribeInstancesCountResponse DescribeInstancesCount(Models\DescribeInstancesCountRequest $req) 获取并发总数和运行数
 * @method Models\DestroyAndroidInstancesResponse DestroyAndroidInstances(Models\DestroyAndroidInstancesRequest $req) 销毁安卓实例
 * @method Models\DisableAndroidInstancesAppResponse DisableAndroidInstancesApp(Models\DisableAndroidInstancesAppRequest $req) 批量禁用安卓实例应用
 * @method Models\DisconnectAndroidInstanceResponse DisconnectAndroidInstance(Models\DisconnectAndroidInstanceRequest $req) 断开安卓实例
 * @method Models\DisconnectAndroidInstanceAcceleratorResponse DisconnectAndroidInstanceAccelerator(Models\DisconnectAndroidInstanceAcceleratorRequest $req) 断开安卓实例加速节点
 * @method Models\DistributeAndroidInstanceImageToHostsResponse DistributeAndroidInstanceImageToHosts(Models\DistributeAndroidInstanceImageToHostsRequest $req) 分发安卓实例镜像至宿主机
 * @method Models\DistributeFileToAndroidInstancesResponse DistributeFileToAndroidInstances(Models\DistributeFileToAndroidInstancesRequest $req) 将一个文件批量分发到多个实例，一次接口调用触发一次文件分发，一次文件分发只会从公网下载一次，然后文件会走内网分发到实例列表中的实例。
 * @method Models\DistributePhotoToAndroidInstancesResponse DistributePhotoToAndroidInstances(Models\DistributePhotoToAndroidInstancesRequest $req) 将一张照片批量分发到多个实例的相册中，一次接口调用触发一次照片分发，一次照片分发只会从公网下载一次，然后照片会走内网分发到实例列表中的实例。
 * @method Models\EnableAndroidInstancesAppResponse EnableAndroidInstancesApp(Models\EnableAndroidInstancesAppRequest $req) 批量启用安卓实例应用
 * @method Models\ExecuteCommandOnAndroidInstancesResponse ExecuteCommandOnAndroidInstances(Models\ExecuteCommandOnAndroidInstancesRequest $req) 在安卓实例上异步执行命令，命令输出结果如果内容过长会被截断
 * @method Models\FetchAndroidInstancesLogsResponse FetchAndroidInstancesLogs(Models\FetchAndroidInstancesLogsRequest $req) 批量将实例的 logcat 日志文件上传到您已授权的 COS bucket 中，授权 COS bucket 请在控制台中操作。
 * @method Models\ImportAndroidInstanceImageResponse ImportAndroidInstanceImage(Models\ImportAndroidInstanceImageRequest $req) 导入安卓实例镜像，当镜像的 AndroidInstanceImageState 为 NORMAL 时，镜像导入完成处于可用状态。
 * @method Models\InstallAndroidInstancesAppResponse InstallAndroidInstancesApp(Models\InstallAndroidInstancesAppRequest $req) 安装安卓实例应用
 * @method Models\InstallAndroidInstancesAppWithURLResponse InstallAndroidInstancesAppWithURL(Models\InstallAndroidInstancesAppWithURLRequest $req) 通过 URL 安装安卓实例应用
 * @method Models\ModifyAndroidAppResponse ModifyAndroidApp(Models\ModifyAndroidAppRequest $req) 修改安卓应用信息
 * @method Models\ModifyAndroidAppVersionResponse ModifyAndroidAppVersion(Models\ModifyAndroidAppVersionRequest $req) 修改安卓应用版本
 * @method Models\ModifyAndroidInstanceInformationResponse ModifyAndroidInstanceInformation(Models\ModifyAndroidInstanceInformationRequest $req) 修改安卓实例的信息
 * @method Models\ModifyAndroidInstanceResolutionResponse ModifyAndroidInstanceResolution(Models\ModifyAndroidInstanceResolutionRequest $req) 修改安卓实例分辨率。需要注意的是该接口可能导致正在运行的应用出现闪退，所以建议在实例维护时期才进行调用。
 * @method Models\ModifyAndroidInstancesAppBlacklistResponse ModifyAndroidInstancesAppBlacklist(Models\ModifyAndroidInstancesAppBlacklistRequest $req) 修改安卓实例应用黑名单
 * @method Models\ModifyAndroidInstancesInformationResponse ModifyAndroidInstancesInformation(Models\ModifyAndroidInstancesInformationRequest $req) 批量修改安卓实例信息
 * @method Models\ModifyAndroidInstancesLabelsResponse ModifyAndroidInstancesLabels(Models\ModifyAndroidInstancesLabelsRequest $req) 批量修改安卓实例的标签
 * @method Models\ModifyAndroidInstancesPropertiesResponse ModifyAndroidInstancesProperties(Models\ModifyAndroidInstancesPropertiesRequest $req) 批量修改安卓实例属性
 * @method Models\ModifyAndroidInstancesResolutionResponse ModifyAndroidInstancesResolution(Models\ModifyAndroidInstancesResolutionRequest $req) 修改安卓实例分辨率。需要注意的是该接口需要重启才能生效。
 * @method Models\ModifyAndroidInstancesResourcesResponse ModifyAndroidInstancesResources(Models\ModifyAndroidInstancesResourcesRequest $req) 批量修改安卓实例资源限制
 * @method Models\ModifyAndroidInstancesUserIdResponse ModifyAndroidInstancesUserId(Models\ModifyAndroidInstancesUserIdRequest $req) 批量修改安卓实例的用户ID
 * @method Models\RebootAndroidInstanceHostsResponse RebootAndroidInstanceHosts(Models\RebootAndroidInstanceHostsRequest $req) 重启安卓实例宿主机。请注意：

- 当前每 15 分钟只能重启一次
- 一个宿主机可能有多个云手机实例，重启宿主机会影响运行在上面的所有实例，请确保该宿主机上的所有云手机实例未投入业务使用
 * @method Models\RebootAndroidInstancesResponse RebootAndroidInstances(Models\RebootAndroidInstancesRequest $req) 重启安卓实例
 * @method Models\RenewAndroidInstancesAccessTokenResponse RenewAndroidInstancesAccessToken(Models\RenewAndroidInstancesAccessTokenRequest $req) 续期安卓实例访问Token
 * @method Models\ResetAndroidInstancesResponse ResetAndroidInstances(Models\ResetAndroidInstancesRequest $req) 重置安卓实例
 * @method Models\RestartAndroidInstancesAppResponse RestartAndroidInstancesApp(Models\RestartAndroidInstancesAppRequest $req) 重启安卓实例应用
 * @method Models\RestoreAndroidInstanceResponse RestoreAndroidInstance(Models\RestoreAndroidInstanceRequest $req) 还原安卓实例。该接口需要联系我们开通内网存储才能使用。
 * @method Models\RestoreAndroidInstanceFromStorageResponse RestoreAndroidInstanceFromStorage(Models\RestoreAndroidInstanceFromStorageRequest $req) 使用指定存储数据还原云手机，支持 COS 和兼容 AWS S3 协议的对象存储服务。如果还原数据来自 COS 时，会使用公网流量，授权 COS bucket 请在控制台中操作。
 * @method Models\SaveGameArchiveResponse SaveGameArchive(Models\SaveGameArchiveRequest $req) 保存游戏存档
 * @method Models\SetAndroidInstancesBGAppKeepAliveResponse SetAndroidInstancesBGAppKeepAlive(Models\SetAndroidInstancesBGAppKeepAliveRequest $req) 批量设置安卓实例应用后台保活，开启应用保活，只是降低应用被杀死或回收的优先级，并不能保证应用不会被杀死或回收（如出现内存不足等资源限制时，应用也有概率被杀死或回收）
 * @method Models\SetAndroidInstancesFGAppKeepAliveResponse SetAndroidInstancesFGAppKeepAlive(Models\SetAndroidInstancesFGAppKeepAliveRequest $req) 批量设置安卓实例应用前台保活，开启应用保活，只是降低应用被杀死或回收的优先级，并不能保证应用不会被杀死或回收（如出现内存不足等资源限制时，应用也有概率被杀死或回收）
 * @method Models\StartAndroidInstancesResponse StartAndroidInstances(Models\StartAndroidInstancesRequest $req) 开机安卓实例
 * @method Models\StartAndroidInstancesAppResponse StartAndroidInstancesApp(Models\StartAndroidInstancesAppRequest $req) 启动安卓实例应用
 * @method Models\StartPublishStreamResponse StartPublishStream(Models\StartPublishStreamRequest $req) 开始云端推流
 * @method Models\StartPublishStreamToCSSResponse StartPublishStreamToCSS(Models\StartPublishStreamToCSSRequest $req) 开始云端推流
 * @method Models\StopAndroidInstancesResponse StopAndroidInstances(Models\StopAndroidInstancesRequest $req) 关机安卓实例
 * @method Models\StopAndroidInstancesAppResponse StopAndroidInstancesApp(Models\StopAndroidInstancesAppRequest $req) 停止安卓实例应用
 * @method Models\StopGameResponse StopGame(Models\StopGameRequest $req) 强制退出游戏
 * @method Models\StopPublishStreamResponse StopPublishStream(Models\StopPublishStreamRequest $req) 停止云端推流
 * @method Models\SwitchGameArchiveResponse SwitchGameArchive(Models\SwitchGameArchiveRequest $req) 切换游戏存档
 * @method Models\SyncAndroidInstanceImageResponse SyncAndroidInstanceImage(Models\SyncAndroidInstanceImageRequest $req) 同步安卓实例镜像到其他区域，当镜像的 AndroidInstanceImageState 为 NORMAL 时，镜像已经同步完成处于可用状态。
 * @method Models\SyncExecuteCommandOnAndroidInstancesResponse SyncExecuteCommandOnAndroidInstances(Models\SyncExecuteCommandOnAndroidInstancesRequest $req) 在安卓实例上同步执行命令，仅支持1秒内可以返回结果的命令，例如：ls、cd。同时执行的实例数量不能过多，否则可能云api返回超时。不支持超过1秒无法返回或无法自主结束的命令，例如：top、vim，执行结果最大1KB
 * @method Models\TrylockWorkerResponse TrylockWorker(Models\TrylockWorkerRequest $req) 尝试锁定机器
 * @method Models\UninstallAndroidInstancesAppResponse UninstallAndroidInstancesApp(Models\UninstallAndroidInstancesAppRequest $req) 卸载安卓实例应用
 * @method Models\UploadFileToAndroidInstancesResponse UploadFileToAndroidInstances(Models\UploadFileToAndroidInstancesRequest $req) 将文件下载到指定实例列表的实例上，每个实例都会从公网下载文件。如果您需要将同一个文件分发到多个实例，建议使用 DistributeFileToAndroidInstances 接口减少公网下载的流量。如果您需要将不同的文件下载到不同的实例，可考虑使用 UploadFilesToAndroidInstances 接口批量将不同文件下载到不同的实例。
 * @method Models\UploadFilesToAndroidInstancesResponse UploadFilesToAndroidInstances(Models\UploadFilesToAndroidInstancesRequest $req) 批量将不同的文件下载到不同的实例，每个实例下载文件都是从公网下载，建议只用在文件下载使用一次的场景。如果您需要将同一个文件分发到不同实例，建议使用 DistributeFileToAndroidInstances 接口。
 */

class GsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "gs";

    /**
     * @var string
     */
    protected $version = "2019-11-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("gs")."\\"."V20191118\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

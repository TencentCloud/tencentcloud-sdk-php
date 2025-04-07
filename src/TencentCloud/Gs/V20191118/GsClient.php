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

namespace TencentCloud\Gs\V20191118;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gs\V20191118\Models as Models;

/**
 * @method Models\BackUpAndroidInstanceToStorageResponse BackUpAndroidInstanceToStorage(Models\BackUpAndroidInstanceToStorageRequest $req) 备份云手机到指定存储
 * @method Models\ConnectAndroidInstanceResponse ConnectAndroidInstance(Models\ConnectAndroidInstanceRequest $req) 连接安卓实例
 * @method Models\CopyAndroidInstanceResponse CopyAndroidInstance(Models\CopyAndroidInstanceRequest $req) 复制安卓实例：
1. 排除和包含文件只能指定/data下的文件，不指定时复制整个/data目录
2. 源实例和目的实例必须在同一区域
3. 复制时，源实例和目的实例都会停机，复制完后实例会自动启动
4. 复制时会产生大量内网流量，请限制并发
 * @method Models\CreateAndroidInstanceImageResponse CreateAndroidInstanceImage(Models\CreateAndroidInstanceImageRequest $req) 创建安卓实例镜像
 * @method Models\CreateAndroidInstanceLabelResponse CreateAndroidInstanceLabel(Models\CreateAndroidInstanceLabelRequest $req) 创建安卓实例
 * @method Models\CreateAndroidInstanceSSHResponse CreateAndroidInstanceSSH(Models\CreateAndroidInstanceSSHRequest $req) 创建安卓实例 SSH 连接
 * @method Models\CreateAndroidInstanceWebShellResponse CreateAndroidInstanceWebShell(Models\CreateAndroidInstanceWebShellRequest $req) 创建安卓实例 WebShell 连接
 * @method Models\CreateAndroidInstancesResponse CreateAndroidInstances(Models\CreateAndroidInstancesRequest $req) 创建安卓实例
 * @method Models\CreateAndroidInstancesScreenshotResponse CreateAndroidInstancesScreenshot(Models\CreateAndroidInstancesScreenshotRequest $req) 安卓实例截图
 * @method Models\CreateSessionResponse CreateSession(Models\CreateSessionRequest $req) 创建会话
 * @method Models\DeleteAndroidInstanceImagesResponse DeleteAndroidInstanceImages(Models\DeleteAndroidInstanceImagesRequest $req) 删除安卓实例镜像
 * @method Models\DeleteAndroidInstanceLabelResponse DeleteAndroidInstanceLabel(Models\DeleteAndroidInstanceLabelRequest $req) 创建安卓实例
 * @method Models\DescribeAndroidAppsResponse DescribeAndroidApps(Models\DescribeAndroidAppsRequest $req) 查询安卓应用信息
 * @method Models\DescribeAndroidInstanceAppsResponse DescribeAndroidInstanceApps(Models\DescribeAndroidInstanceAppsRequest $req) 查询安卓实例应用
 * @method Models\DescribeAndroidInstanceImagesResponse DescribeAndroidInstanceImages(Models\DescribeAndroidInstanceImagesRequest $req) 查询安卓实例镜像
 * @method Models\DescribeAndroidInstanceLabelsResponse DescribeAndroidInstanceLabels(Models\DescribeAndroidInstanceLabelsRequest $req) 创建安卓实例
 * @method Models\DescribeAndroidInstanceTasksStatusResponse DescribeAndroidInstanceTasksStatus(Models\DescribeAndroidInstanceTasksStatusRequest $req) 查询安卓实例任务状态
 * @method Models\DescribeAndroidInstancesResponse DescribeAndroidInstances(Models\DescribeAndroidInstancesRequest $req) 查询安卓实例
 * @method Models\DescribeInstancesCountResponse DescribeInstancesCount(Models\DescribeInstancesCountRequest $req) 获取并发总数和运行数
 * @method Models\DestroyAndroidInstancesResponse DestroyAndroidInstances(Models\DestroyAndroidInstancesRequest $req) 销毁安卓实例
 * @method Models\ExecuteCommandOnAndroidInstancesResponse ExecuteCommandOnAndroidInstances(Models\ExecuteCommandOnAndroidInstancesRequest $req) 在安卓实例上异步执行命令，命令输出结果如果内容过长会被截断
 * @method Models\InstallAndroidInstancesAppResponse InstallAndroidInstancesApp(Models\InstallAndroidInstancesAppRequest $req) 安装安卓实例应用
 * @method Models\ModifyAndroidInstanceInformationResponse ModifyAndroidInstanceInformation(Models\ModifyAndroidInstanceInformationRequest $req) 修改安卓实例的信息
 * @method Models\ModifyAndroidInstanceResolutionResponse ModifyAndroidInstanceResolution(Models\ModifyAndroidInstanceResolutionRequest $req) 修改安卓实例分辨率。需要注意的是该接口可能导致正在运行的应用出现闪退，所以建议在实例维护时期才进行调用。
 * @method Models\ModifyAndroidInstancesLabelsResponse ModifyAndroidInstancesLabels(Models\ModifyAndroidInstancesLabelsRequest $req) 修改安卓实例分辨率。需要注意的是该接口可能导致正在运行的应用出现闪退，所以建议在实例维护时期才进行调用。
 * @method Models\ModifyAndroidInstancesUserIdResponse ModifyAndroidInstancesUserId(Models\ModifyAndroidInstancesUserIdRequest $req) 批量修改安卓实例的用户ID
 * @method Models\RebootAndroidInstancesResponse RebootAndroidInstances(Models\RebootAndroidInstancesRequest $req) 重启安卓实例
 * @method Models\ResetAndroidInstancesResponse ResetAndroidInstances(Models\ResetAndroidInstancesRequest $req) 重置安卓实例
 * @method Models\RestartAndroidInstancesAppResponse RestartAndroidInstancesApp(Models\RestartAndroidInstancesAppRequest $req) 启动安卓实例应用
 * @method Models\RestoreAndroidInstanceFromStorageResponse RestoreAndroidInstanceFromStorage(Models\RestoreAndroidInstanceFromStorageRequest $req) 指定存储还原云手机
 * @method Models\SaveGameArchiveResponse SaveGameArchive(Models\SaveGameArchiveRequest $req) 保存游戏存档
 * @method Models\StartAndroidInstancesResponse StartAndroidInstances(Models\StartAndroidInstancesRequest $req) 重启安卓实例
 * @method Models\StartAndroidInstancesAppResponse StartAndroidInstancesApp(Models\StartAndroidInstancesAppRequest $req) 启动安卓实例应用
 * @method Models\StartPublishStreamResponse StartPublishStream(Models\StartPublishStreamRequest $req) 开始云端推流
 * @method Models\StartPublishStreamToCSSResponse StartPublishStreamToCSS(Models\StartPublishStreamToCSSRequest $req) 开始云端推流
 * @method Models\StopAndroidInstancesResponse StopAndroidInstances(Models\StopAndroidInstancesRequest $req) 重启安卓实例
 * @method Models\StopAndroidInstancesAppResponse StopAndroidInstancesApp(Models\StopAndroidInstancesAppRequest $req) 停止安卓实例应用
 * @method Models\StopGameResponse StopGame(Models\StopGameRequest $req) 强制退出游戏
 * @method Models\StopPublishStreamResponse StopPublishStream(Models\StopPublishStreamRequest $req) 停止云端推流
 * @method Models\SwitchGameArchiveResponse SwitchGameArchive(Models\SwitchGameArchiveRequest $req) 切换游戏存档
 * @method Models\SyncAndroidInstanceImageResponse SyncAndroidInstanceImage(Models\SyncAndroidInstanceImageRequest $req) 同步安卓实例镜像
 * @method Models\SyncExecuteCommandOnAndroidInstancesResponse SyncExecuteCommandOnAndroidInstances(Models\SyncExecuteCommandOnAndroidInstancesRequest $req) 在安卓实例上同步执行命令，仅支持1秒内可以返回结果的命令，例如：ls、cd。同时执行的实例数量不能过多，否则可能云api返回超时。不支持超过1秒无法返回或无法自主结束的命令，例如：top、vim，执行结果最大1KB
 * @method Models\TrylockWorkerResponse TrylockWorker(Models\TrylockWorkerRequest $req) 尝试锁定机器
 * @method Models\UninstallAndroidInstancesAppResponse UninstallAndroidInstancesApp(Models\UninstallAndroidInstancesAppRequest $req) 卸载安卓实例应用
 * @method Models\UploadFileToAndroidInstancesResponse UploadFileToAndroidInstances(Models\UploadFileToAndroidInstancesRequest $req) 上传文件到安卓实例
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

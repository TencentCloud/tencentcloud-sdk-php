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

namespace TencentCloud\Goosefs\V20220519;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Goosefs\V20220519\Models as Models;

/**
 * @method Models\AddCrossVpcSubnetSupportForClientNodeResponse AddCrossVpcSubnetSupportForClientNode(Models\AddCrossVpcSubnetSupportForClientNodeRequest $req) 为客户端节点添加跨vpc或子网访问能力
 * @method Models\AttachFileSystemBucketResponse AttachFileSystemBucket(Models\AttachFileSystemBucketRequest $req) 为文件系统关联Bucket
 * @method Models\BatchAddClientNodesResponse BatchAddClientNodes(Models\BatchAddClientNodesRequest $req) 批量添加客户端节点
 * @method Models\BatchDeleteClientNodesResponse BatchDeleteClientNodes(Models\BatchDeleteClientNodesRequest $req) 批量删除客户端节点
 * @method Models\BuildClientNodeMountCommandResponse BuildClientNodeMountCommand(Models\BuildClientNodeMountCommandRequest $req) 生成客户端的挂载命令
 * @method Models\CreateDataRepositoryTaskResponse CreateDataRepositoryTask(Models\CreateDataRepositoryTaskRequest $req) 创建数据流通任务,包括从将文件系统的数据上传到存储桶下, 以及从存储桶下载到文件系统里。
 * @method Models\CreateFileSystemResponse CreateFileSystem(Models\CreateFileSystemRequest $req) 创建文件系统
 * @method Models\CreateFilesetResponse CreateFileset(Models\CreateFilesetRequest $req) 创建Fileset
 * @method Models\DeleteCrossVpcSubnetSupportForClientNodeResponse DeleteCrossVpcSubnetSupportForClientNode(Models\DeleteCrossVpcSubnetSupportForClientNodeRequest $req) 为客户端节点删除跨vpc子网访问能力
 * @method Models\DeleteFileSystemResponse DeleteFileSystem(Models\DeleteFileSystemRequest $req) 删除文件系统
 * @method Models\DeleteFilesetResponse DeleteFileset(Models\DeleteFilesetRequest $req) 删除Fileset
 * @method Models\DescribeClientNodesResponse DescribeClientNodes(Models\DescribeClientNodesRequest $req) 列出集群中所有的客户端节点
 * @method Models\DescribeClusterClientTokenResponse DescribeClusterClientToken(Models\DescribeClusterClientTokenRequest $req) 查询GooseFS集群客户端凭证
 * @method Models\DescribeClusterRoleTokenResponse DescribeClusterRoleToken(Models\DescribeClusterRoleTokenRequest $req) 查询GooseFS集群角色凭证
 * @method Models\DescribeClusterRolesResponse DescribeClusterRoles(Models\DescribeClusterRolesRequest $req) 接口废弃

查询GooseFS集群角色
 * @method Models\DescribeDataRepositoryTaskStatusResponse DescribeDataRepositoryTaskStatus(Models\DescribeDataRepositoryTaskStatusRequest $req) 获取数据流通任务实时状态，用作客户端控制
 * @method Models\DescribeFileSystemBucketsResponse DescribeFileSystemBuckets(Models\DescribeFileSystemBucketsRequest $req) 罗列文件系统关联的Bucket映射
 * @method Models\DescribeFileSystemsResponse DescribeFileSystems(Models\DescribeFileSystemsRequest $req) 列出所有的文件系统
 * @method Models\DescribeFilesetGeneralConfigResponse DescribeFilesetGeneralConfig(Models\DescribeFilesetGeneralConfigRequest $req) 查询Fileset通用配置
 * @method Models\DescribeFilesetsResponse DescribeFilesets(Models\DescribeFilesetsRequest $req) 查询Fileset列表
 * @method Models\DetachFileSystemBucketResponse DetachFileSystemBucket(Models\DetachFileSystemBucketRequest $req) 解绑文件系统与Bucket的映射
 * @method Models\ExpandCapacityResponse ExpandCapacity(Models\ExpandCapacityRequest $req) 扩展文件系统容量
 * @method Models\ModifyDataRepositoryBandwidthResponse ModifyDataRepositoryBandwidth(Models\ModifyDataRepositoryBandwidthRequest $req) 修改数据流动带宽
 * @method Models\QueryCrossVpcSubnetSupportForClientNodeResponse QueryCrossVpcSubnetSupportForClientNode(Models\QueryCrossVpcSubnetSupportForClientNodeRequest $req) 查询客户端节点跨vpc子网访问能力
 * @method Models\QueryDataRepositoryBandwidthResponse QueryDataRepositoryBandwidth(Models\QueryDataRepositoryBandwidthRequest $req) 查询数据流动带宽
 * @method Models\UpdateFilesetResponse UpdateFileset(Models\UpdateFilesetRequest $req) 修改FIleset
 * @method Models\UpdateFilesetGeneralConfigResponse UpdateFilesetGeneralConfig(Models\UpdateFilesetGeneralConfigRequest $req) 修改Fileset通用配置
 */

class GoosefsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "goosefs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "goosefs";

    /**
     * @var string
     */
    protected $version = "2022-05-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("goosefs")."\\"."V20220519\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

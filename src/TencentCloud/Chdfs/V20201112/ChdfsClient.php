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

namespace TencentCloud\Chdfs\V20201112;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Chdfs\V20201112\Models as Models;

/**
 * @method Models\AssociateAccessGroupsResponse AssociateAccessGroups(Models\AssociateAccessGroupsRequest $req) 给挂载点绑定多个权限组。
 * @method Models\CreateAccessGroupResponse CreateAccessGroup(Models\CreateAccessGroupRequest $req) 创建权限组。
 * @method Models\CreateFileSystemResponse CreateFileSystem(Models\CreateFileSystemRequest $req) 创建文件系统（异步）。
 * @method Models\CreateMountPointResponse CreateMountPoint(Models\CreateMountPointRequest $req) 创建文件系统挂载点，仅限于创建成功的文件系统。
 * @method Models\DescribeAccessGroupResponse DescribeAccessGroup(Models\DescribeAccessGroupRequest $req) 查看权限组详细信息。
 * @method Models\DescribeAccessGroupsResponse DescribeAccessGroups(Models\DescribeAccessGroupsRequest $req) 查看权限组列表。
 * @method Models\DescribeAccessRulesResponse DescribeAccessRules(Models\DescribeAccessRulesRequest $req) 通过权限组ID查看权限规则列表。
 * @method Models\DescribeFileSystemResponse DescribeFileSystem(Models\DescribeFileSystemRequest $req) 查看文件系统详细信息。
 * @method Models\DescribeFileSystemsResponse DescribeFileSystems(Models\DescribeFileSystemsRequest $req) 查看文件系统列表。
 * @method Models\DescribeMountPointResponse DescribeMountPoint(Models\DescribeMountPointRequest $req) 查看挂载点详细信息。
 * @method Models\DescribeMountPointsResponse DescribeMountPoints(Models\DescribeMountPointsRequest $req) 查看挂载点列表。
 * @method Models\DisassociateAccessGroupsResponse DisassociateAccessGroups(Models\DisassociateAccessGroupsRequest $req) 给挂载点解绑多个权限组。
 * @method Models\ModifyAccessGroupResponse ModifyAccessGroup(Models\ModifyAccessGroupRequest $req) 修改权限组属性。
 * @method Models\ModifyFileSystemResponse ModifyFileSystem(Models\ModifyFileSystemRequest $req) 修改文件系统属性，仅限于创建成功的文件系统。
 * @method Models\ModifyMountPointResponse ModifyMountPoint(Models\ModifyMountPointRequest $req) 修改挂载点属性。
 * @method Models\ModifyResourceTagsResponse ModifyResourceTags(Models\ModifyResourceTagsRequest $req) 修改资源标签列表，全量覆盖。
 */

class ChdfsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "chdfs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "chdfs";

    /**
     * @var string
     */
    protected $version = "2020-11-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("chdfs")."\\"."V20201112\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

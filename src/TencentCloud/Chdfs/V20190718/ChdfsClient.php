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

namespace TencentCloud\Chdfs\V20190718;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;

/**
* @method Models\CreateAccessGroupResponse CreateAccessGroup(Models\CreateAccessGroupRequest $req) 创建权限组。
* @method Models\CreateAccessRulesResponse CreateAccessRules(Models\CreateAccessRulesRequest $req) 批量创建权限规则，权限规则ID和创建时间无需填写。
* @method Models\CreateFileSystemResponse CreateFileSystem(Models\CreateFileSystemRequest $req) 创建文件系统（异步）。
* @method Models\CreateMountPointResponse CreateMountPoint(Models\CreateMountPointRequest $req) 创建文件系统挂载点，仅限于创建成功的文件系统。
* @method Models\DeleteAccessGroupResponse DeleteAccessGroup(Models\DeleteAccessGroupRequest $req) 删除权限组。
* @method Models\DeleteAccessRulesResponse DeleteAccessRules(Models\DeleteAccessRulesRequest $req) 批量删除权限规则。
* @method Models\DeleteFileSystemResponse DeleteFileSystem(Models\DeleteFileSystemRequest $req) 删除文件系统，不允许删除非空文件系统。
* @method Models\DeleteMountPointResponse DeleteMountPoint(Models\DeleteMountPointRequest $req) 删除挂载点。
* @method Models\DescribeAccessGroupsResponse DescribeAccessGroups(Models\DescribeAccessGroupsRequest $req) 查看权限组列表。
* @method Models\DescribeAccessRulesResponse DescribeAccessRules(Models\DescribeAccessRulesRequest $req) 通过权限组ID查看权限规则列表。
* @method Models\DescribeFileSystemResponse DescribeFileSystem(Models\DescribeFileSystemRequest $req) 查看文件系统详细信息。
* @method Models\DescribeFileSystemsResponse DescribeFileSystems(Models\DescribeFileSystemsRequest $req) 查看文件系统列表。
* @method Models\DescribeMountPointResponse DescribeMountPoint(Models\DescribeMountPointRequest $req) 查看挂载点详细信息。
* @method Models\DescribeMountPointsResponse DescribeMountPoints(Models\DescribeMountPointsRequest $req) 通过文件系统ID或者权限组ID查看挂载点列表。
* @method Models\ModifyAccessGroupResponse ModifyAccessGroup(Models\ModifyAccessGroupRequest $req) 修改权限组属性。
* @method Models\ModifyAccessRulesResponse ModifyAccessRules(Models\ModifyAccessRulesRequest $req) 批量修改权限规则属性，需要指定权限规则ID。
* @method Models\ModifyFileSystemResponse ModifyFileSystem(Models\ModifyFileSystemRequest $req) 修改文件系统属性，仅限于创建成功的文件系统。
* @method Models\ModifyMountPointResponse ModifyMountPoint(Models\ModifyMountPointRequest $req) 修改挂载点属性。
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
    protected $version = "2019-07-18";

    /**
     * Constructor.
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws \TencentCloud\Common\Exception\TencentCloudSDKException
     */
    public function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    /**
     * @param string $action
     * @param array|null $response
     * @return \TencentCloud\Common\AbstractModel
     */
    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("chdfs")."\\"."V20190718\\Models"."\\".ucfirst($action)."Response";
        /** @var \TencentCloud\Common\AbstractModel $obj */
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

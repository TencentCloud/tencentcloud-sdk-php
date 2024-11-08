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

namespace TencentCloud\Ioa\V20220601;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ioa\V20220601\Models as Models;

/**
 * @method Models\CreateDeviceVirtualGroupResponse CreateDeviceVirtualGroup(Models\CreateDeviceVirtualGroupRequest $req) 创建终端自定义分组，私有化调用path为：/capi/Assets/Device/CreateDeviceVirtualGroup
 * @method Models\DescribeAccountGroupsResponse DescribeAccountGroups(Models\DescribeAccountGroupsRequest $req) 以分页的方式查询账号分组列表，私有化调用path为：/capi/Assets/DescribeAccountGroups
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 查询满足条件的终端数据详情，私有化调用path为：/capi/Assets/Device/DescribeDevices
 * @method Models\DescribeLocalAccountsResponse DescribeLocalAccounts(Models\DescribeLocalAccountsRequest $req) 获取账号列表，支持分页，模糊搜索，私有化调用path为：/capi/Assets/Account/DescribeLocalAccounts
 * @method Models\DescribeRootAccountGroupResponse DescribeRootAccountGroup(Models\DescribeRootAccountGroupRequest $req) 查询账号根分组详情。对应“用户与授权管理”里内置不可见的全网根账号组，所有新建的目录，都挂在该全网根账号组下。
 */

class IoaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ioa.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ioa";

    /**
     * @var string
     */
    protected $version = "2022-06-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("ioa")."\\"."V20220601\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

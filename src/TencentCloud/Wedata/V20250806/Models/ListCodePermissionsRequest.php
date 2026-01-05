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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListCodePermissions请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getPageNumber() 获取页码，默认1
 * @method void setPageNumber(integer $PageNumber) 设置页码，默认1
 * @method integer getPageSize() 获取返回数量，默认为20，最大值为100。要求500、1000或者更大
 * @method void setPageSize(integer $PageSize) 设置返回数量，默认为20，最大值为100。要求500、1000或者更大
 * @method ExploreFileResource getResource() 获取授权资源
 * @method void setResource(ExploreFileResource $Resource) 设置授权资源
 * @method array getUsers() 获取用户筛选条件
 * @method void setUsers(array $Users) 设置用户筛选条件
 */
class ListCodePermissionsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 页码，默认1
     */
    public $PageNumber;

    /**
     * @var integer 返回数量，默认为20，最大值为100。要求500、1000或者更大
     */
    public $PageSize;

    /**
     * @var ExploreFileResource 授权资源
     */
    public $Resource;

    /**
     * @var array 用户筛选条件
     */
    public $Users;

    /**
     * @param string $ProjectId 项目ID
     * @param integer $PageNumber 页码，默认1
     * @param integer $PageSize 返回数量，默认为20，最大值为100。要求500、1000或者更大
     * @param ExploreFileResource $Resource 授权资源
     * @param array $Users 用户筛选条件
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new ExploreFileResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }
    }
}

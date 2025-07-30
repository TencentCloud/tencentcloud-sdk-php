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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLifecyclePolicies请求参数结构体
 *
 * @method string getLifecyclePolicyName() 获取生命周期管理策略名称
 * @method void setLifecyclePolicyName(string $LifecyclePolicyName) 设置生命周期管理策略名称
 * @method integer getPageSize() 获取每个分页包含的生命周期管理策略个数
 * @method void setPageSize(integer $PageSize) 设置每个分页包含的生命周期管理策略个数
 * @method integer getPageNumber() 获取列表的分页页码
 * @method void setPageNumber(integer $PageNumber) 设置列表的分页页码
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method string getLifecyclePolicyID() 获取生命周期管理策略ID
 * @method void setLifecyclePolicyID(string $LifecyclePolicyID) 设置生命周期管理策略ID
 */
class DescribeLifecyclePoliciesRequest extends AbstractModel
{
    /**
     * @var string 生命周期管理策略名称
     */
    public $LifecyclePolicyName;

    /**
     * @var integer 每个分页包含的生命周期管理策略个数
     */
    public $PageSize;

    /**
     * @var integer 列表的分页页码
     */
    public $PageNumber;

    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var string 生命周期管理策略ID
     */
    public $LifecyclePolicyID;

    /**
     * @param string $LifecyclePolicyName 生命周期管理策略名称
     * @param integer $PageSize 每个分页包含的生命周期管理策略个数
     * @param integer $PageNumber 列表的分页页码
     * @param string $FileSystemId 文件系统ID
     * @param string $LifecyclePolicyID 生命周期管理策略ID
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
        if (array_key_exists("LifecyclePolicyName",$param) and $param["LifecyclePolicyName"] !== null) {
            $this->LifecyclePolicyName = $param["LifecyclePolicyName"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("LifecyclePolicyID",$param) and $param["LifecyclePolicyID"] !== null) {
            $this->LifecyclePolicyID = $param["LifecyclePolicyID"];
        }
    }
}

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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGovernanceNamespaces请求参数结构体
 *
 * @method string getInstanceId() 获取tse实例id
 * @method void setInstanceId(string $InstanceId) 设置tse实例id
 * @method string getName() 获取根据命名空间名称过滤。
 * @method void setName(string $Name) 设置根据命名空间名称过滤。
 * @method string getSyncToGlobalRegistry() 获取是否开启同步到全局注册中心	
 * @method void setSyncToGlobalRegistry(string $SyncToGlobalRegistry) 设置是否开启同步到全局注册中心	
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 */
class DescribeGovernanceNamespacesRequest extends AbstractModel
{
    /**
     * @var string tse实例id
     */
    public $InstanceId;

    /**
     * @var string 根据命名空间名称过滤。
     */
    public $Name;

    /**
     * @var string 是否开启同步到全局注册中心	
     */
    public $SyncToGlobalRegistry;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @param string $InstanceId tse实例id
     * @param string $Name 根据命名空间名称过滤。
     * @param string $SyncToGlobalRegistry 是否开启同步到全局注册中心	
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SyncToGlobalRegistry",$param) and $param["SyncToGlobalRegistry"] !== null) {
            $this->SyncToGlobalRegistry = $param["SyncToGlobalRegistry"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

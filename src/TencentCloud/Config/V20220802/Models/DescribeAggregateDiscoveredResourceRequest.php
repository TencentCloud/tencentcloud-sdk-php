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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAggregateDiscoveredResource请求参数结构体
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 * @method string getResourceRegion() 获取资源地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源地域
 * @method string getAccountGroupId() 获取账号组ID
 * @method void setAccountGroupId(string $AccountGroupId) 设置账号组ID
 * @method integer getResourceOwnerId() 获取资源所属用户ID
 * @method void setResourceOwnerId(integer $ResourceOwnerId) 设置资源所属用户ID
 */
class DescribeAggregateDiscoveredResourceRequest extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @var string 资源地域
     */
    public $ResourceRegion;

    /**
     * @var string 账号组ID
     */
    public $AccountGroupId;

    /**
     * @var integer 资源所属用户ID
     */
    public $ResourceOwnerId;

    /**
     * @param string $ResourceId 资源ID
     * @param string $ResourceType 资源类型
     * @param string $ResourceRegion 资源地域
     * @param string $AccountGroupId 账号组ID
     * @param integer $ResourceOwnerId 资源所属用户ID
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("ResourceOwnerId",$param) and $param["ResourceOwnerId"] !== null) {
            $this->ResourceOwnerId = $param["ResourceOwnerId"];
        }
    }
}

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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceRoleList请求参数结构体
 *
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 * @method string getEnvType() 获取预览：pre；非预览：prod
 * @method void setEnvType(string $EnvType) 设置预览：pre；非预览：prod
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getSubType() 获取子资源类型
 * @method void setSubType(string $SubType) 设置子资源类型
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 */
class DescribeResourceRoleListRequest extends AbstractModel
{
    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @var string 预览：pre；非预览：prod
     */
    public $EnvType;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 子资源类型
     */
    public $SubType;

    /**
     * @var integer 页码
     */
    public $PageNo;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @param string $ResourceId 资源id
     * @param string $ResourceType 资源类型
     * @param string $EnvType 预览：pre；非预览：prod
     * @param string $EnvId 环境id
     * @param string $SubType 子资源类型
     * @param integer $PageNo 页码
     * @param integer $PageSize 分页大小
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

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}

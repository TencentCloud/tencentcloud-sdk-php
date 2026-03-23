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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentApps请求参数结构体
 *
 * @method integer getLimit() 获取分页大小
 * @method void setLimit(integer $Limit) 设置分页大小
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method array getIDs() 获取服务ID数组
 * @method void setIDs(array $IDs) 设置服务ID数组
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method array getNotIDs() 获取notID列表
 * @method void setNotIDs(array $NotIDs) 设置notID列表
 * @method string getStatus() 获取状态：normal正常状态，disabled下线状态
 * @method void setStatus(string $Status) 设置状态：normal正常状态，disabled下线状态
 * @method string getKeyword() 获取关键词
 * @method void setKeyword(string $Keyword) 设置关键词
 * @method string getAuthType() 获取认证类型：apiKey，secretKey
 * @method void setAuthType(string $AuthType) 设置认证类型：apiKey，secretKey
 * @method DescribeAgentAppsSortDTO getSort() 获取排序
 * @method void setSort(DescribeAgentAppsSortDTO $Sort) 设置排序
 * @method string getAgentCredentialID() 获取凭据ID
 * @method void setAgentCredentialID(string $AgentCredentialID) 设置凭据ID
 */
class DescribeAgentAppsRequest extends AbstractModel
{
    /**
     * @var integer 分页大小
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var array 服务ID数组
     */
    public $IDs;

    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var array notID列表
     */
    public $NotIDs;

    /**
     * @var string 状态：normal正常状态，disabled下线状态
     */
    public $Status;

    /**
     * @var string 关键词
     */
    public $Keyword;

    /**
     * @var string 认证类型：apiKey，secretKey
     */
    public $AuthType;

    /**
     * @var DescribeAgentAppsSortDTO 排序
     */
    public $Sort;

    /**
     * @var string 凭据ID
     */
    public $AgentCredentialID;

    /**
     * @param integer $Limit 分页大小
     * @param integer $Offset 分页偏移量
     * @param array $IDs 服务ID数组
     * @param string $InstanceID 实例ID
     * @param array $NotIDs notID列表
     * @param string $Status 状态：normal正常状态，disabled下线状态
     * @param string $Keyword 关键词
     * @param string $AuthType 认证类型：apiKey，secretKey
     * @param DescribeAgentAppsSortDTO $Sort 排序
     * @param string $AgentCredentialID 凭据ID
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("NotIDs",$param) and $param["NotIDs"] !== null) {
            $this->NotIDs = $param["NotIDs"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new DescribeAgentAppsSortDTO();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("AgentCredentialID",$param) and $param["AgentCredentialID"] !== null) {
            $this->AgentCredentialID = $param["AgentCredentialID"];
        }
    }
}

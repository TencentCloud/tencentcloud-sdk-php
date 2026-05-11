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
 * DescribeGovernanceServices请求参数结构体
 *
 * @method string getName() 获取<p>按照服务名过滤，精确匹配。</p>
 * @method void setName(string $Name) 设置<p>按照服务名过滤，精确匹配。</p>
 * @method string getNamespace() 获取<p>按照命名空间过滤，精确匹配。</p>
 * @method void setNamespace(string $Namespace) 设置<p>按照命名空间过滤，精确匹配。</p>
 * @method array getMetadatas() 获取<p>使用元数据过滤，目前只支持一组元组数，若传了多条，只会使用第一条元数据过滤。</p>
 * @method void setMetadatas(array $Metadatas) 设置<p>使用元数据过滤，目前只支持一组元组数，若传了多条，只会使用第一条元数据过滤。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 * @method string getInstanceId() 获取<p>tse 实例 id。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>tse 实例 id。</p>
 * @method string getDepartment() 获取<p>服务所属部门。</p>
 * @method void setDepartment(string $Department) 设置<p>服务所属部门。</p>
 * @method string getBusiness() 获取<p>服务所属业务。</p>
 * @method void setBusiness(string $Business) 设置<p>服务所属业务。</p>
 * @method string getHost() 获取<p>服务中实例的ip，用来过滤服务。</p>
 * @method void setHost(string $Host) 设置<p>服务中实例的ip，用来过滤服务。</p>
 * @method boolean getOnlyExistHealthyInstance() 获取<p>是否只查询存在健康实例的服务</p>
 * @method void setOnlyExistHealthyInstance(boolean $OnlyExistHealthyInstance) 设置<p>是否只查询存在健康实例的服务</p>
 * @method string getSyncToGlobalRegistry() 获取<p>是否开启同步到全局注册中心</p>
 * @method void setSyncToGlobalRegistry(string $SyncToGlobalRegistry) 设置<p>是否开启同步到全局注册中心</p>
 * @method array getStatusFilter() 获取<p>过滤筛选条件</p>
 * @method void setStatusFilter(array $StatusFilter) 设置<p>过滤筛选条件</p>
 * @method integer getType() 获取<p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul>
 * @method void setType(integer $Type) 设置<p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul>
 */
class DescribeGovernanceServicesRequest extends AbstractModel
{
    /**
     * @var string <p>按照服务名过滤，精确匹配。</p>
     */
    public $Name;

    /**
     * @var string <p>按照命名空间过滤，精确匹配。</p>
     */
    public $Namespace;

    /**
     * @var array <p>使用元数据过滤，目前只支持一组元组数，若传了多条，只会使用第一条元数据过滤。</p>
     */
    public $Metadatas;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var string <p>tse 实例 id。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>服务所属部门。</p>
     */
    public $Department;

    /**
     * @var string <p>服务所属业务。</p>
     */
    public $Business;

    /**
     * @var string <p>服务中实例的ip，用来过滤服务。</p>
     */
    public $Host;

    /**
     * @var boolean <p>是否只查询存在健康实例的服务</p>
     */
    public $OnlyExistHealthyInstance;

    /**
     * @var string <p>是否开启同步到全局注册中心</p>
     */
    public $SyncToGlobalRegistry;

    /**
     * @var array <p>过滤筛选条件</p>
     */
    public $StatusFilter;

    /**
     * @var integer <p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul>
     */
    public $Type;

    /**
     * @param string $Name <p>按照服务名过滤，精确匹配。</p>
     * @param string $Namespace <p>按照命名空间过滤，精确匹配。</p>
     * @param array $Metadatas <p>使用元数据过滤，目前只支持一组元组数，若传了多条，只会使用第一条元数据过滤。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。</p>
     * @param string $InstanceId <p>tse 实例 id。</p>
     * @param string $Department <p>服务所属部门。</p>
     * @param string $Business <p>服务所属业务。</p>
     * @param string $Host <p>服务中实例的ip，用来过滤服务。</p>
     * @param boolean $OnlyExistHealthyInstance <p>是否只查询存在健康实例的服务</p>
     * @param string $SyncToGlobalRegistry <p>是否开启同步到全局注册中心</p>
     * @param array $StatusFilter <p>过滤筛选条件</p>
     * @param integer $Type <p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new Metadata();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = $param["Department"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("OnlyExistHealthyInstance",$param) and $param["OnlyExistHealthyInstance"] !== null) {
            $this->OnlyExistHealthyInstance = $param["OnlyExistHealthyInstance"];
        }

        if (array_key_exists("SyncToGlobalRegistry",$param) and $param["SyncToGlobalRegistry"] !== null) {
            $this->SyncToGlobalRegistry = $param["SyncToGlobalRegistry"];
        }

        if (array_key_exists("StatusFilter",$param) and $param["StatusFilter"] !== null) {
            $this->StatusFilter = [];
            foreach ($param["StatusFilter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->StatusFilter, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

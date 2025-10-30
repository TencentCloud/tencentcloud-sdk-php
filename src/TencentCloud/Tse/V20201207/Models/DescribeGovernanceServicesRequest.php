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
 * @method string getName() 获取按照服务名过滤，精确匹配。
 * @method void setName(string $Name) 设置按照服务名过滤，精确匹配。
 * @method string getNamespace() 获取按照命名空间过滤，精确匹配。
 * @method void setNamespace(string $Namespace) 设置按照命名空间过滤，精确匹配。
 * @method array getMetadatas() 获取使用元数据过滤，目前只支持一组元组数，若传了多条，只会使用第一条元数据过滤。
 * @method void setMetadatas(array $Metadatas) 设置使用元数据过滤，目前只支持一组元组数，若传了多条，只会使用第一条元数据过滤。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method string getInstanceId() 获取tse 实例 id。
 * @method void setInstanceId(string $InstanceId) 设置tse 实例 id。
 * @method string getDepartment() 获取服务所属部门。
 * @method void setDepartment(string $Department) 设置服务所属部门。
 * @method string getBusiness() 获取服务所属业务。
 * @method void setBusiness(string $Business) 设置服务所属业务。
 * @method string getHost() 获取服务中实例的ip，用来过滤服务。
 * @method void setHost(string $Host) 设置服务中实例的ip，用来过滤服务。
 * @method boolean getOnlyExistHealthyInstance() 获取是否只查询存在健康实例的服务
 * @method void setOnlyExistHealthyInstance(boolean $OnlyExistHealthyInstance) 设置是否只查询存在健康实例的服务
 * @method string getSyncToGlobalRegistry() 获取是否开启同步到全局注册中心	
 * @method void setSyncToGlobalRegistry(string $SyncToGlobalRegistry) 设置是否开启同步到全局注册中心	
 * @method array getStatusFilter() 获取过滤筛选条件
 * @method void setStatusFilter(array $StatusFilter) 设置过滤筛选条件
 */
class DescribeGovernanceServicesRequest extends AbstractModel
{
    /**
     * @var string 按照服务名过滤，精确匹配。
     */
    public $Name;

    /**
     * @var string 按照命名空间过滤，精确匹配。
     */
    public $Namespace;

    /**
     * @var array 使用元数据过滤，目前只支持一组元组数，若传了多条，只会使用第一条元数据过滤。
     */
    public $Metadatas;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var string tse 实例 id。
     */
    public $InstanceId;

    /**
     * @var string 服务所属部门。
     */
    public $Department;

    /**
     * @var string 服务所属业务。
     */
    public $Business;

    /**
     * @var string 服务中实例的ip，用来过滤服务。
     */
    public $Host;

    /**
     * @var boolean 是否只查询存在健康实例的服务
     */
    public $OnlyExistHealthyInstance;

    /**
     * @var string 是否开启同步到全局注册中心	
     */
    public $SyncToGlobalRegistry;

    /**
     * @var array 过滤筛选条件
     */
    public $StatusFilter;

    /**
     * @param string $Name 按照服务名过滤，精确匹配。
     * @param string $Namespace 按照命名空间过滤，精确匹配。
     * @param array $Metadatas 使用元数据过滤，目前只支持一组元组数，若传了多条，只会使用第一条元数据过滤。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param string $InstanceId tse 实例 id。
     * @param string $Department 服务所属部门。
     * @param string $Business 服务所属业务。
     * @param string $Host 服务中实例的ip，用来过滤服务。
     * @param boolean $OnlyExistHealthyInstance 是否只查询存在健康实例的服务
     * @param string $SyncToGlobalRegistry 是否开启同步到全局注册中心	
     * @param array $StatusFilter 过滤筛选条件
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
    }
}

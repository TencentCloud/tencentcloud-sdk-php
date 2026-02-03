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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLibraDBClusterTableMapping请求参数结构体
 *
 * @method string getClusterId() 获取分析集群ID
 * @method void setClusterId(string $ClusterId) 设置分析集群ID
 * @method string getInstanceId() 获取分析引擎实例ID
 * @method void setInstanceId(string $InstanceId) 设置分析引擎实例ID
 * @method string getNodeId() 获取节点ID
 * @method void setNodeId(string $NodeId) 设置节点ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取页面记录限制
 * @method void setLimit(integer $Limit) 设置页面记录限制
 * @method array getSrcSchemas() 获取源端schema列表
 * @method void setSrcSchemas(array $SrcSchemas) 设置源端schema列表
 * @method array getSrcTableName() 获取源端表列表
 * @method void setSrcTableName(array $SrcTableName) 设置源端表列表
 * @method array getStatusList() 获取状态列表
 * @method void setStatusList(array $StatusList) 设置状态列表
 * @method array getMapSchemas() 获取映射数据库名称
 * @method void setMapSchemas(array $MapSchemas) 设置映射数据库名称
 * @method array getMapTableName() 获取映射表名
 * @method void setMapTableName(array $MapTableName) 设置映射表名
 * @method boolean getMapSchemaNotEmpty() 获取是否查询映射数据库名称不为空的记录
 * @method void setMapSchemaNotEmpty(boolean $MapSchemaNotEmpty) 设置是否查询映射数据库名称不为空的记录
 * @method boolean getMapTableNameNotEmpty() 获取是否查询映射表名不为空的记录
 * @method void setMapTableNameNotEmpty(boolean $MapTableNameNotEmpty) 设置是否查询映射表名不为空的记录
 */
class DescribeLibraDBClusterTableMappingRequest extends AbstractModel
{
    /**
     * @var string 分析集群ID
     */
    public $ClusterId;

    /**
     * @var string 分析引擎实例ID
     */
    public $InstanceId;

    /**
     * @var string 节点ID
     */
    public $NodeId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 页面记录限制
     */
    public $Limit;

    /**
     * @var array 源端schema列表
     */
    public $SrcSchemas;

    /**
     * @var array 源端表列表
     */
    public $SrcTableName;

    /**
     * @var array 状态列表
     */
    public $StatusList;

    /**
     * @var array 映射数据库名称
     */
    public $MapSchemas;

    /**
     * @var array 映射表名
     */
    public $MapTableName;

    /**
     * @var boolean 是否查询映射数据库名称不为空的记录
     */
    public $MapSchemaNotEmpty;

    /**
     * @var boolean 是否查询映射表名不为空的记录
     */
    public $MapTableNameNotEmpty;

    /**
     * @param string $ClusterId 分析集群ID
     * @param string $InstanceId 分析引擎实例ID
     * @param string $NodeId 节点ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 页面记录限制
     * @param array $SrcSchemas 源端schema列表
     * @param array $SrcTableName 源端表列表
     * @param array $StatusList 状态列表
     * @param array $MapSchemas 映射数据库名称
     * @param array $MapTableName 映射表名
     * @param boolean $MapSchemaNotEmpty 是否查询映射数据库名称不为空的记录
     * @param boolean $MapTableNameNotEmpty 是否查询映射表名不为空的记录
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SrcSchemas",$param) and $param["SrcSchemas"] !== null) {
            $this->SrcSchemas = $param["SrcSchemas"];
        }

        if (array_key_exists("SrcTableName",$param) and $param["SrcTableName"] !== null) {
            $this->SrcTableName = $param["SrcTableName"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("MapSchemas",$param) and $param["MapSchemas"] !== null) {
            $this->MapSchemas = $param["MapSchemas"];
        }

        if (array_key_exists("MapTableName",$param) and $param["MapTableName"] !== null) {
            $this->MapTableName = $param["MapTableName"];
        }

        if (array_key_exists("MapSchemaNotEmpty",$param) and $param["MapSchemaNotEmpty"] !== null) {
            $this->MapSchemaNotEmpty = $param["MapSchemaNotEmpty"];
        }

        if (array_key_exists("MapTableNameNotEmpty",$param) and $param["MapTableNameNotEmpty"] !== null) {
            $this->MapTableNameNotEmpty = $param["MapTableNameNotEmpty"];
        }
    }
}

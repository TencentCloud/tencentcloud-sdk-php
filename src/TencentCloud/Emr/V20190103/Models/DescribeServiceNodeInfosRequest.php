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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceNodeInfos请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method integer getLimit() 获取页大小
 * @method void setLimit(integer $Limit) 设置页大小
 * @method string getSearchText() 获取搜索字段
 * @method void setSearchText(string $SearchText) 设置搜索字段
 * @method integer getConfStatus() 获取'配置状态，-2：配置失败，-1:配置过期，1：已同步', -99 '全部'
 * @method void setConfStatus(integer $ConfStatus) 设置'配置状态，-2：配置失败，-1:配置过期，1：已同步', -99 '全部'
 * @method integer getMaintainStateId() 获取过滤条件：维护状态
0代表所有状态
1代表正常模式
2代表维护模式

 * @method void setMaintainStateId(integer $MaintainStateId) 设置过滤条件：维护状态
0代表所有状态
1代表正常模式
2代表维护模式

 * @method integer getOperatorStateId() 获取过滤条件：操作状态
0代表所有状态
1代表已启动
2代表已停止
 * @method void setOperatorStateId(integer $OperatorStateId) 设置过滤条件：操作状态
0代表所有状态
1代表已启动
2代表已停止
 * @method string getHealthStateId() 获取过滤条件：健康状态
"0"代表不可用
"1"代表良好
"-2"代表未知
"-99"代表所有
"-3"代表存在隐患
"-4"代表未探测
 * @method void setHealthStateId(string $HealthStateId) 设置过滤条件：健康状态
"0"代表不可用
"1"代表良好
"-2"代表未知
"-99"代表所有
"-3"代表存在隐患
"-4"代表未探测
 * @method string getServiceName() 获取服务组件名称，都是大写例如YARN
 * @method void setServiceName(string $ServiceName) 设置服务组件名称，都是大写例如YARN
 * @method string getNodeTypeName() 获取节点名称
master
core
task
common
router

 * @method void setNodeTypeName(string $NodeTypeName) 设置节点名称
master
core
task
common
router

 * @method integer getDataNodeMaintenanceId() 获取过滤条件：dn是否处于维护状态
0代表所有状态
1代表处于维护状态
 * @method void setDataNodeMaintenanceId(integer $DataNodeMaintenanceId) 设置过滤条件：dn是否处于维护状态
0代表所有状态
1代表处于维护状态
 * @method array getSearchFields() 获取支持搜索的字段
 * @method void setSearchFields(array $SearchFields) 设置支持搜索的字段
 */
class DescribeServiceNodeInfosRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var integer 页大小
     */
    public $Limit;

    /**
     * @var string 搜索字段
     */
    public $SearchText;

    /**
     * @var integer '配置状态，-2：配置失败，-1:配置过期，1：已同步', -99 '全部'
     */
    public $ConfStatus;

    /**
     * @var integer 过滤条件：维护状态
0代表所有状态
1代表正常模式
2代表维护模式

     */
    public $MaintainStateId;

    /**
     * @var integer 过滤条件：操作状态
0代表所有状态
1代表已启动
2代表已停止
     */
    public $OperatorStateId;

    /**
     * @var string 过滤条件：健康状态
"0"代表不可用
"1"代表良好
"-2"代表未知
"-99"代表所有
"-3"代表存在隐患
"-4"代表未探测
     */
    public $HealthStateId;

    /**
     * @var string 服务组件名称，都是大写例如YARN
     */
    public $ServiceName;

    /**
     * @var string 节点名称
master
core
task
common
router

     */
    public $NodeTypeName;

    /**
     * @var integer 过滤条件：dn是否处于维护状态
0代表所有状态
1代表处于维护状态
     */
    public $DataNodeMaintenanceId;

    /**
     * @var array 支持搜索的字段
     */
    public $SearchFields;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $Offset 页码
     * @param integer $Limit 页大小
     * @param string $SearchText 搜索字段
     * @param integer $ConfStatus '配置状态，-2：配置失败，-1:配置过期，1：已同步', -99 '全部'
     * @param integer $MaintainStateId 过滤条件：维护状态
0代表所有状态
1代表正常模式
2代表维护模式

     * @param integer $OperatorStateId 过滤条件：操作状态
0代表所有状态
1代表已启动
2代表已停止
     * @param string $HealthStateId 过滤条件：健康状态
"0"代表不可用
"1"代表良好
"-2"代表未知
"-99"代表所有
"-3"代表存在隐患
"-4"代表未探测
     * @param string $ServiceName 服务组件名称，都是大写例如YARN
     * @param string $NodeTypeName 节点名称
master
core
task
common
router

     * @param integer $DataNodeMaintenanceId 过滤条件：dn是否处于维护状态
0代表所有状态
1代表处于维护状态
     * @param array $SearchFields 支持搜索的字段
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchText",$param) and $param["SearchText"] !== null) {
            $this->SearchText = $param["SearchText"];
        }

        if (array_key_exists("ConfStatus",$param) and $param["ConfStatus"] !== null) {
            $this->ConfStatus = $param["ConfStatus"];
        }

        if (array_key_exists("MaintainStateId",$param) and $param["MaintainStateId"] !== null) {
            $this->MaintainStateId = $param["MaintainStateId"];
        }

        if (array_key_exists("OperatorStateId",$param) and $param["OperatorStateId"] !== null) {
            $this->OperatorStateId = $param["OperatorStateId"];
        }

        if (array_key_exists("HealthStateId",$param) and $param["HealthStateId"] !== null) {
            $this->HealthStateId = $param["HealthStateId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("NodeTypeName",$param) and $param["NodeTypeName"] !== null) {
            $this->NodeTypeName = $param["NodeTypeName"];
        }

        if (array_key_exists("DataNodeMaintenanceId",$param) and $param["DataNodeMaintenanceId"] !== null) {
            $this->DataNodeMaintenanceId = $param["DataNodeMaintenanceId"];
        }

        if (array_key_exists("SearchFields",$param) and $param["SearchFields"] !== null) {
            $this->SearchFields = [];
            foreach ($param["SearchFields"] as $key => $value){
                $obj = new SearchItem();
                $obj->deserialize($value);
                array_push($this->SearchFields, $obj);
            }
        }
    }
}

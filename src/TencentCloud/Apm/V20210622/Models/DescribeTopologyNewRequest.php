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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopologyNew请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统 ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统 ID
 * @method integer getStartTime() 获取查询开始时间
 * @method void setStartTime(integer $StartTime) 设置查询开始时间
 * @method integer getEndTime() 获取查询结束时间
 * @method void setEndTime(integer $EndTime) 设置查询结束时间
 * @method string getServiceName() 获取应用名
 * @method void setServiceName(string $ServiceName) 设置应用名
 * @method integer getUpLevel() 获取上游层级
 * @method void setUpLevel(integer $UpLevel) 设置上游层级
 * @method string getServiceInstance() 获取应用实例信息
 * @method void setServiceInstance(string $ServiceInstance) 设置应用实例信息
 * @method integer getDownLevel() 获取下游层级
 * @method void setDownLevel(integer $DownLevel) 设置下游层级
 * @method string getView() 获取视角
 * @method void setView(string $View) 设置视角
 * @method array getFilters() 获取过滤器
 * @method void setFilters(array $Filters) 设置过滤器
 * @method string getTopic() 获取表示Topic（MQ拓扑图用）
 * @method void setTopic(string $Topic) 设置表示Topic（MQ拓扑图用）
 * @method Selectors getSelectors() 获取视图筛选列表
 * @method void setSelectors(Selectors $Selectors) 设置视图筛选列表
 * @method string getId() 获取视图ID
 * @method void setId(string $Id) 设置视图ID
 * @method string getTraceID() 获取TraceID
 * @method void setTraceID(string $TraceID) 设置TraceID
 * @method boolean getIsSlowTopFive() 获取查询top5慢响应节点
 * @method void setIsSlowTopFive(boolean $IsSlowTopFive) 设置查询top5慢响应节点
 * @method boolean getGetResource() 获取是否获取资源层信息
 * @method void setGetResource(boolean $GetResource) 设置是否获取资源层信息
 * @method array getTags() 获取根据应用标签过滤
 * @method void setTags(array $Tags) 设置根据应用标签过滤
 * @method Selectors getHidden() 获取不显示的节点类型
 * @method void setHidden(Selectors $Hidden) 设置不显示的节点类型
 */
class DescribeTopologyNewRequest extends AbstractModel
{
    /**
     * @var string 业务系统 ID
     */
    public $InstanceId;

    /**
     * @var integer 查询开始时间
     */
    public $StartTime;

    /**
     * @var integer 查询结束时间
     */
    public $EndTime;

    /**
     * @var string 应用名
     */
    public $ServiceName;

    /**
     * @var integer 上游层级
     */
    public $UpLevel;

    /**
     * @var string 应用实例信息
     */
    public $ServiceInstance;

    /**
     * @var integer 下游层级
     */
    public $DownLevel;

    /**
     * @var string 视角
     */
    public $View;

    /**
     * @var array 过滤器
     */
    public $Filters;

    /**
     * @var string 表示Topic（MQ拓扑图用）
     */
    public $Topic;

    /**
     * @var Selectors 视图筛选列表
     */
    public $Selectors;

    /**
     * @var string 视图ID
     */
    public $Id;

    /**
     * @var string TraceID
     */
    public $TraceID;

    /**
     * @var boolean 查询top5慢响应节点
     */
    public $IsSlowTopFive;

    /**
     * @var boolean 是否获取资源层信息
     */
    public $GetResource;

    /**
     * @var array 根据应用标签过滤
     */
    public $Tags;

    /**
     * @var Selectors 不显示的节点类型
     */
    public $Hidden;

    /**
     * @param string $InstanceId 业务系统 ID
     * @param integer $StartTime 查询开始时间
     * @param integer $EndTime 查询结束时间
     * @param string $ServiceName 应用名
     * @param integer $UpLevel 上游层级
     * @param string $ServiceInstance 应用实例信息
     * @param integer $DownLevel 下游层级
     * @param string $View 视角
     * @param array $Filters 过滤器
     * @param string $Topic 表示Topic（MQ拓扑图用）
     * @param Selectors $Selectors 视图筛选列表
     * @param string $Id 视图ID
     * @param string $TraceID TraceID
     * @param boolean $IsSlowTopFive 查询top5慢响应节点
     * @param boolean $GetResource 是否获取资源层信息
     * @param array $Tags 根据应用标签过滤
     * @param Selectors $Hidden 不显示的节点类型
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("UpLevel",$param) and $param["UpLevel"] !== null) {
            $this->UpLevel = $param["UpLevel"];
        }

        if (array_key_exists("ServiceInstance",$param) and $param["ServiceInstance"] !== null) {
            $this->ServiceInstance = $param["ServiceInstance"];
        }

        if (array_key_exists("DownLevel",$param) and $param["DownLevel"] !== null) {
            $this->DownLevel = $param["DownLevel"];
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Selectors",$param) and $param["Selectors"] !== null) {
            $this->Selectors = new Selectors();
            $this->Selectors->deserialize($param["Selectors"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TraceID",$param) and $param["TraceID"] !== null) {
            $this->TraceID = $param["TraceID"];
        }

        if (array_key_exists("IsSlowTopFive",$param) and $param["IsSlowTopFive"] !== null) {
            $this->IsSlowTopFive = $param["IsSlowTopFive"];
        }

        if (array_key_exists("GetResource",$param) and $param["GetResource"] !== null) {
            $this->GetResource = $param["GetResource"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Hidden",$param) and $param["Hidden"] !== null) {
            $this->Hidden = new Selectors();
            $this->Hidden->deserialize($param["Hidden"]);
        }
    }
}

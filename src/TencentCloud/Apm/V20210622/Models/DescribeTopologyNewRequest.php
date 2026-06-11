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
 * @method string getInstanceId() 获取<p>业务系统 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID</p>
 * @method integer getStartTime() 获取<p>查询开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>查询开始时间</p>
 * @method integer getEndTime() 获取<p>查询结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>查询结束时间</p>
 * @method string getServiceName() 获取<p>应用名</p>
 * @method void setServiceName(string $ServiceName) 设置<p>应用名</p>
 * @method integer getUpLevel() 获取<p>上游层级</p>
 * @method void setUpLevel(integer $UpLevel) 设置<p>上游层级</p>
 * @method string getServiceInstance() 获取<p>应用实例信息</p>
 * @method void setServiceInstance(string $ServiceInstance) 设置<p>应用实例信息</p>
 * @method integer getDownLevel() 获取<p>下游层级</p>
 * @method void setDownLevel(integer $DownLevel) 设置<p>下游层级</p>
 * @method string getView() 获取<p>视角</p>
 * @method void setView(string $View) 设置<p>视角</p>
 * @method array getFilters() 获取<p>过滤器</p>
 * @method void setFilters(array $Filters) 设置<p>过滤器</p>
 * @method string getTopic() 获取<p>表示Topic（MQ拓扑图用）</p>
 * @method void setTopic(string $Topic) 设置<p>表示Topic（MQ拓扑图用）</p>
 * @method Selectors getSelectors() 获取<p>视图筛选列表</p>
 * @method void setSelectors(Selectors $Selectors) 设置<p>视图筛选列表</p>
 * @method string getId() 获取<p>视图ID</p>
 * @method void setId(string $Id) 设置<p>视图ID</p>
 * @method string getTraceID() 获取<p>TraceID</p>
 * @method void setTraceID(string $TraceID) 设置<p>TraceID</p>
 * @method boolean getIsSlowTopFive() 获取<p>查询top5慢响应节点</p>
 * @method void setIsSlowTopFive(boolean $IsSlowTopFive) 设置<p>查询top5慢响应节点</p>
 * @method boolean getGetResource() 获取<p>是否获取资源层信息</p>
 * @method void setGetResource(boolean $GetResource) 设置<p>是否获取资源层信息</p>
 * @method array getTags() 获取<p>根据应用标签过滤</p>
 * @method void setTags(array $Tags) 设置<p>根据应用标签过滤</p>
 * @method Selectors getHidden() 获取<p>不显示的节点类型</p>
 * @method void setHidden(Selectors $Hidden) 设置<p>不显示的节点类型</p>
 * @method boolean getEnableResourceLink() 获取<p>是否开启云资源关联</p>
 * @method void setEnableResourceLink(boolean $EnableResourceLink) 设置<p>是否开启云资源关联</p>
 */
class DescribeTopologyNewRequest extends AbstractModel
{
    /**
     * @var string <p>业务系统 ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>查询开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>查询结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>应用名</p>
     */
    public $ServiceName;

    /**
     * @var integer <p>上游层级</p>
     */
    public $UpLevel;

    /**
     * @var string <p>应用实例信息</p>
     */
    public $ServiceInstance;

    /**
     * @var integer <p>下游层级</p>
     */
    public $DownLevel;

    /**
     * @var string <p>视角</p>
     */
    public $View;

    /**
     * @var array <p>过滤器</p>
     */
    public $Filters;

    /**
     * @var string <p>表示Topic（MQ拓扑图用）</p>
     */
    public $Topic;

    /**
     * @var Selectors <p>视图筛选列表</p>
     */
    public $Selectors;

    /**
     * @var string <p>视图ID</p>
     */
    public $Id;

    /**
     * @var string <p>TraceID</p>
     */
    public $TraceID;

    /**
     * @var boolean <p>查询top5慢响应节点</p>
     */
    public $IsSlowTopFive;

    /**
     * @var boolean <p>是否获取资源层信息</p>
     */
    public $GetResource;

    /**
     * @var array <p>根据应用标签过滤</p>
     */
    public $Tags;

    /**
     * @var Selectors <p>不显示的节点类型</p>
     */
    public $Hidden;

    /**
     * @var boolean <p>是否开启云资源关联</p>
     */
    public $EnableResourceLink;

    /**
     * @param string $InstanceId <p>业务系统 ID</p>
     * @param integer $StartTime <p>查询开始时间</p>
     * @param integer $EndTime <p>查询结束时间</p>
     * @param string $ServiceName <p>应用名</p>
     * @param integer $UpLevel <p>上游层级</p>
     * @param string $ServiceInstance <p>应用实例信息</p>
     * @param integer $DownLevel <p>下游层级</p>
     * @param string $View <p>视角</p>
     * @param array $Filters <p>过滤器</p>
     * @param string $Topic <p>表示Topic（MQ拓扑图用）</p>
     * @param Selectors $Selectors <p>视图筛选列表</p>
     * @param string $Id <p>视图ID</p>
     * @param string $TraceID <p>TraceID</p>
     * @param boolean $IsSlowTopFive <p>查询top5慢响应节点</p>
     * @param boolean $GetResource <p>是否获取资源层信息</p>
     * @param array $Tags <p>根据应用标签过滤</p>
     * @param Selectors $Hidden <p>不显示的节点类型</p>
     * @param boolean $EnableResourceLink <p>是否开启云资源关联</p>
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

        if (array_key_exists("EnableResourceLink",$param) and $param["EnableResourceLink"] !== null) {
            $this->EnableResourceLink = $param["EnableResourceLink"];
        }
    }
}

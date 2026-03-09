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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建后付费接口返回的 Data 数据结构
 *
 * @method integer getFlowId() 获取<p>CreateInstancePre返回固定为0，不能作为CheckTaskStatus的查询条件。只是为了保证和后台数据结构对齐。</p>
 * @method void setFlowId(integer $FlowId) 设置<p>CreateInstancePre返回固定为0，不能作为CheckTaskStatus的查询条件。只是为了保证和后台数据结构对齐。</p>
 * @method array getDealNames() 获取<p>订单号列表</p>
 * @method void setDealNames(array $DealNames) 设置<p>订单号列表</p>
 * @method string getInstanceId() 获取<p>ckafka集群实例Id，当购买多个实例时，默认返回购买的第一个实例 id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id，当购买多个实例时，默认返回购买的第一个实例 id</p>
 * @method array getDealNameInstanceIdMapping() 获取<p>订单和购买实例对应映射列表</p>
 * @method void setDealNameInstanceIdMapping(array $DealNameInstanceIdMapping) 设置<p>订单和购买实例对应映射列表</p>
 * @method string getEventId() 获取<p>CAM鉴权返回的eventId</p>
 * @method void setEventId(string $EventId) 设置<p>CAM鉴权返回的eventId</p>
 */
class CreateInstancePostData extends AbstractModel
{
    /**
     * @var integer <p>CreateInstancePre返回固定为0，不能作为CheckTaskStatus的查询条件。只是为了保证和后台数据结构对齐。</p>
     */
    public $FlowId;

    /**
     * @var array <p>订单号列表</p>
     */
    public $DealNames;

    /**
     * @var string <p>ckafka集群实例Id，当购买多个实例时，默认返回购买的第一个实例 id</p>
     */
    public $InstanceId;

    /**
     * @var array <p>订单和购买实例对应映射列表</p>
     */
    public $DealNameInstanceIdMapping;

    /**
     * @var string <p>CAM鉴权返回的eventId</p>
     */
    public $EventId;

    /**
     * @param integer $FlowId <p>CreateInstancePre返回固定为0，不能作为CheckTaskStatus的查询条件。只是为了保证和后台数据结构对齐。</p>
     * @param array $DealNames <p>订单号列表</p>
     * @param string $InstanceId <p>ckafka集群实例Id，当购买多个实例时，默认返回购买的第一个实例 id</p>
     * @param array $DealNameInstanceIdMapping <p>订单和购买实例对应映射列表</p>
     * @param string $EventId <p>CAM鉴权返回的eventId</p>
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DealNameInstanceIdMapping",$param) and $param["DealNameInstanceIdMapping"] !== null) {
            $this->DealNameInstanceIdMapping = [];
            foreach ($param["DealNameInstanceIdMapping"] as $key => $value){
                $obj = new DealInstanceDTO();
                $obj->deserialize($value);
                array_push($this->DealNameInstanceIdMapping, $obj);
            }
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}

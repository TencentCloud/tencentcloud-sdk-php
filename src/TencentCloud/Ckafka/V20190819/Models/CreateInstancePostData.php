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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建后付费接口返回的 Data 数据结构
 *
 * @method integer getFlowId() 获取CreateInstancePre返回固定为0，不能作为CheckTaskStatus的查询条件。只是为了保证和后台数据结构对齐。
 * @method void setFlowId(integer $FlowId) 设置CreateInstancePre返回固定为0，不能作为CheckTaskStatus的查询条件。只是为了保证和后台数据结构对齐。
 * @method array getDealNames() 获取订单号列表
 * @method void setDealNames(array $DealNames) 设置订单号列表
 * @method string getInstanceId() 获取ckafka集群实例Id，当购买多个实例时，默认返回购买的第一个实例 id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id，当购买多个实例时，默认返回购买的第一个实例 id
 * @method array getDealNameInstanceIdMapping() 获取订单和购买实例对应映射列表
 * @method void setDealNameInstanceIdMapping(array $DealNameInstanceIdMapping) 设置订单和购买实例对应映射列表
 */
class CreateInstancePostData extends AbstractModel
{
    /**
     * @var integer CreateInstancePre返回固定为0，不能作为CheckTaskStatus的查询条件。只是为了保证和后台数据结构对齐。
     */
    public $FlowId;

    /**
     * @var array 订单号列表
     */
    public $DealNames;

    /**
     * @var string ckafka集群实例Id，当购买多个实例时，默认返回购买的第一个实例 id
     */
    public $InstanceId;

    /**
     * @var array 订单和购买实例对应映射列表
     */
    public $DealNameInstanceIdMapping;

    /**
     * @param integer $FlowId CreateInstancePre返回固定为0，不能作为CheckTaskStatus的查询条件。只是为了保证和后台数据结构对齐。
     * @param array $DealNames 订单号列表
     * @param string $InstanceId ckafka集群实例Id，当购买多个实例时，默认返回购买的第一个实例 id
     * @param array $DealNameInstanceIdMapping 订单和购买实例对应映射列表
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
    }
}

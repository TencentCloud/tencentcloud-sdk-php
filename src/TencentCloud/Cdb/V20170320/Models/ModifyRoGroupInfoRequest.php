<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getUGroupId() 获取RO组的实例ID
 * @method void setUGroupId(string $uGroupId) 设置RO组的实例ID
 * @method RoGroupInfo getGroupInfo() 获取RO组的详细信息
 * @method void setGroupInfo(RoGroupInfo $groupInfo) 设置RO组的详细信息
 * @method array getWeightValues() 获取RO组内实例的权重
 * @method void setWeightValues(array $weightValues) 设置RO组内实例的权重
 * @method integer getIsBalanceRoLoad() 获取是否重新均衡RO组内的RO实例的负载
 * @method void setIsBalanceRoLoad(integer $isBalanceRoLoad) 设置是否重新均衡RO组内的RO实例的负载
 */

/**
 *ModifyRoGroupInfo请求参数结构体
 */
class ModifyRoGroupInfoRequest extends AbstractModel
{
    /**
     * @var string RO组的实例ID
     */
    public $uGroupId;

    /**
     * @var RoGroupInfo RO组的详细信息
     */
    public $groupInfo;

    /**
     * @var array RO组内实例的权重
     */
    public $weightValues;

    /**
     * @var integer 是否重新均衡RO组内的RO实例的负载
     */
    public $isBalanceRoLoad;
    /**
     * @param string $uGroupId RO组的实例ID
     * @param RoGroupInfo $groupInfo RO组的详细信息
     * @param array $weightValues RO组内实例的权重
     * @param integer $isBalanceRoLoad 是否重新均衡RO组内的RO实例的负载
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UGroupId",$param) and $param["UGroupId"] !== null) {
            $this->uGroupId = $param["UGroupId"];
        }

        if (array_key_exists("GroupInfo",$param) and $param["GroupInfo"] !== null) {
            $this->groupInfo = new RoGroupInfo();
            $this->groupInfo->deserialize($param["GroupInfo"]);
        }

        if (array_key_exists("WeightValues",$param) and $param["WeightValues"] !== null) {
            $this->weightValues = [];
            foreach ($param["WeightValues"] as $key => $value){
                $obj = new int64();
                $obj->deserialize($value);
                array_push($this->weightValues, $obj);
            }
        }

        if (array_key_exists("IsBalanceRoLoad",$param) and $param["IsBalanceRoLoad"] !== null) {
            $this->isBalanceRoLoad = $param["IsBalanceRoLoad"];
        }
    }
}

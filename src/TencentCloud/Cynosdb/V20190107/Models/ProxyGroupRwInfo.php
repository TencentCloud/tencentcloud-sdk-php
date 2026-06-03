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
 * 数据库代理组读写分离信息
 *
 * @method string getConsistencyType() 获取<p>一致性类型 eventual-最终一致性,global-全局一致性,session-会话一致性</p>
 * @method void setConsistencyType(string $ConsistencyType) 设置<p>一致性类型 eventual-最终一致性,global-全局一致性,session-会话一致性</p>
 * @method integer getConsistencyTimeOut() 获取<p>一致性超时时间</p>
 * @method void setConsistencyTimeOut(integer $ConsistencyTimeOut) 设置<p>一致性超时时间</p>
 * @method string getWeightMode() 获取<p>权重模式 system-系统分配，custom-自定义</p>
 * @method void setWeightMode(string $WeightMode) 设置<p>权重模式 system-系统分配，custom-自定义</p>
 * @method string getFailOver() 获取<p>是否开启故障转移</p>
 * @method void setFailOver(string $FailOver) 设置<p>是否开启故障转移</p>
 * @method string getAutoAddRo() 获取<p>是否自动添加只读实例，yes-是，no-不自动添加</p>
 * @method void setAutoAddRo(string $AutoAddRo) 设置<p>是否自动添加只读实例，yes-是，no-不自动添加</p>
 * @method array getInstanceWeights() 获取<p>实例权重数组</p>
 * @method void setInstanceWeights(array $InstanceWeights) 设置<p>实例权重数组</p>
 * @method string getOpenRw() 获取<p>是否开通读写节点，yse-是，no-否</p>
 * @method void setOpenRw(string $OpenRw) 设置<p>是否开通读写节点，yse-是，no-否</p>
 * @method string getRwType() 获取<p>读写属性，可选值：READWRITE,READONLY</p>
 * @method void setRwType(string $RwType) 设置<p>读写属性，可选值：READWRITE,READONLY</p>
 * @method boolean getTransSplit() 获取<p>事务拆分</p>
 * @method void setTransSplit(boolean $TransSplit) 设置<p>事务拆分</p>
 * @method string getAccessMode() 获取<p>连接模式，可选值：balance，nearby</p>
 * @method void setAccessMode(string $AccessMode) 设置<p>连接模式，可选值：balance，nearby</p>
 * @method boolean getApNodeAsRoNode() 获取<p>是否将libra节点当作普通RO节点</p>
 * @method void setApNodeAsRoNode(boolean $ApNodeAsRoNode) 设置<p>是否将libra节点当作普通RO节点</p>
 * @method boolean getApQueryToOtherNode() 获取<p>libra节点故障，是否转发给其他节点</p>
 * @method void setApQueryToOtherNode(boolean $ApQueryToOtherNode) 设置<p>libra节点故障，是否转发给其他节点</p>
 */
class ProxyGroupRwInfo extends AbstractModel
{
    /**
     * @var string <p>一致性类型 eventual-最终一致性,global-全局一致性,session-会话一致性</p>
     */
    public $ConsistencyType;

    /**
     * @var integer <p>一致性超时时间</p>
     */
    public $ConsistencyTimeOut;

    /**
     * @var string <p>权重模式 system-系统分配，custom-自定义</p>
     */
    public $WeightMode;

    /**
     * @var string <p>是否开启故障转移</p>
     */
    public $FailOver;

    /**
     * @var string <p>是否自动添加只读实例，yes-是，no-不自动添加</p>
     */
    public $AutoAddRo;

    /**
     * @var array <p>实例权重数组</p>
     */
    public $InstanceWeights;

    /**
     * @var string <p>是否开通读写节点，yse-是，no-否</p>
     */
    public $OpenRw;

    /**
     * @var string <p>读写属性，可选值：READWRITE,READONLY</p>
     */
    public $RwType;

    /**
     * @var boolean <p>事务拆分</p>
     */
    public $TransSplit;

    /**
     * @var string <p>连接模式，可选值：balance，nearby</p>
     */
    public $AccessMode;

    /**
     * @var boolean <p>是否将libra节点当作普通RO节点</p>
     */
    public $ApNodeAsRoNode;

    /**
     * @var boolean <p>libra节点故障，是否转发给其他节点</p>
     */
    public $ApQueryToOtherNode;

    /**
     * @param string $ConsistencyType <p>一致性类型 eventual-最终一致性,global-全局一致性,session-会话一致性</p>
     * @param integer $ConsistencyTimeOut <p>一致性超时时间</p>
     * @param string $WeightMode <p>权重模式 system-系统分配，custom-自定义</p>
     * @param string $FailOver <p>是否开启故障转移</p>
     * @param string $AutoAddRo <p>是否自动添加只读实例，yes-是，no-不自动添加</p>
     * @param array $InstanceWeights <p>实例权重数组</p>
     * @param string $OpenRw <p>是否开通读写节点，yse-是，no-否</p>
     * @param string $RwType <p>读写属性，可选值：READWRITE,READONLY</p>
     * @param boolean $TransSplit <p>事务拆分</p>
     * @param string $AccessMode <p>连接模式，可选值：balance，nearby</p>
     * @param boolean $ApNodeAsRoNode <p>是否将libra节点当作普通RO节点</p>
     * @param boolean $ApQueryToOtherNode <p>libra节点故障，是否转发给其他节点</p>
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
        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }

        if (array_key_exists("ConsistencyTimeOut",$param) and $param["ConsistencyTimeOut"] !== null) {
            $this->ConsistencyTimeOut = $param["ConsistencyTimeOut"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("InstanceWeights",$param) and $param["InstanceWeights"] !== null) {
            $this->InstanceWeights = [];
            foreach ($param["InstanceWeights"] as $key => $value){
                $obj = new ProxyInstanceWeight();
                $obj->deserialize($value);
                array_push($this->InstanceWeights, $obj);
            }
        }

        if (array_key_exists("OpenRw",$param) and $param["OpenRw"] !== null) {
            $this->OpenRw = $param["OpenRw"];
        }

        if (array_key_exists("RwType",$param) and $param["RwType"] !== null) {
            $this->RwType = $param["RwType"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("ApNodeAsRoNode",$param) and $param["ApNodeAsRoNode"] !== null) {
            $this->ApNodeAsRoNode = $param["ApNodeAsRoNode"];
        }

        if (array_key_exists("ApQueryToOtherNode",$param) and $param["ApQueryToOtherNode"] !== null) {
            $this->ApQueryToOtherNode = $param["ApQueryToOtherNode"];
        }
    }
}

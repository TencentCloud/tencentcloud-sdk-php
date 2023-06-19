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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库代理组读写分离信息
 *
 * @method string getConsistencyType() 获取一致性类型 eventual-最终一致性,global-全局一致性,session-会话一致性
 * @method void setConsistencyType(string $ConsistencyType) 设置一致性类型 eventual-最终一致性,global-全局一致性,session-会话一致性
 * @method integer getConsistencyTimeOut() 获取一致性超时时间
 * @method void setConsistencyTimeOut(integer $ConsistencyTimeOut) 设置一致性超时时间
 * @method string getWeightMode() 获取权重模式 system-系统分配，custom-自定义
 * @method void setWeightMode(string $WeightMode) 设置权重模式 system-系统分配，custom-自定义
 * @method string getFailOver() 获取是否开启故障转移
 * @method void setFailOver(string $FailOver) 设置是否开启故障转移
 * @method string getAutoAddRo() 获取是否自动添加只读实例，yes-是，no-不自动添加
 * @method void setAutoAddRo(string $AutoAddRo) 设置是否自动添加只读实例，yes-是，no-不自动添加
 * @method array getInstanceWeights() 获取实例权重数组
 * @method void setInstanceWeights(array $InstanceWeights) 设置实例权重数组
 * @method string getOpenRw() 获取是否开通读写节点，yse-是，no-否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenRw(string $OpenRw) 设置是否开通读写节点，yse-是，no-否
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRwType() 获取读写属性，可选值：READWRITE,READONLY
 * @method void setRwType(string $RwType) 设置读写属性，可选值：READWRITE,READONLY
 * @method boolean getTransSplit() 获取事务拆分
 * @method void setTransSplit(boolean $TransSplit) 设置事务拆分
 * @method string getAccessMode() 获取连接模式，可选值：balance，nearby
 * @method void setAccessMode(string $AccessMode) 设置连接模式，可选值：balance，nearby
 */
class ProxyGroupRwInfo extends AbstractModel
{
    /**
     * @var string 一致性类型 eventual-最终一致性,global-全局一致性,session-会话一致性
     */
    public $ConsistencyType;

    /**
     * @var integer 一致性超时时间
     */
    public $ConsistencyTimeOut;

    /**
     * @var string 权重模式 system-系统分配，custom-自定义
     */
    public $WeightMode;

    /**
     * @var string 是否开启故障转移
     */
    public $FailOver;

    /**
     * @var string 是否自动添加只读实例，yes-是，no-不自动添加
     */
    public $AutoAddRo;

    /**
     * @var array 实例权重数组
     */
    public $InstanceWeights;

    /**
     * @var string 是否开通读写节点，yse-是，no-否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenRw;

    /**
     * @var string 读写属性，可选值：READWRITE,READONLY
     */
    public $RwType;

    /**
     * @var boolean 事务拆分
     */
    public $TransSplit;

    /**
     * @var string 连接模式，可选值：balance，nearby
     */
    public $AccessMode;

    /**
     * @param string $ConsistencyType 一致性类型 eventual-最终一致性,global-全局一致性,session-会话一致性
     * @param integer $ConsistencyTimeOut 一致性超时时间
     * @param string $WeightMode 权重模式 system-系统分配，custom-自定义
     * @param string $FailOver 是否开启故障转移
     * @param string $AutoAddRo 是否自动添加只读实例，yes-是，no-不自动添加
     * @param array $InstanceWeights 实例权重数组
     * @param string $OpenRw 是否开通读写节点，yse-是，no-否
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RwType 读写属性，可选值：READWRITE,READONLY
     * @param boolean $TransSplit 事务拆分
     * @param string $AccessMode 连接模式，可选值：balance，nearby
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
    }
}

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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCDBProxy请求参数结构体
 *
 * @method string getProxyGroupId() 获取数据库代理组唯一ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置数据库代理组唯一ID
 * @method boolean getIsKickout() 获取是否开始延迟剔除，取值："true" | "false"
 * @method void setIsKickout(boolean $IsKickout) 设置是否开始延迟剔除，取值："true" | "false"
 * @method integer getMinCount() 获取最少保留数
 * @method void setMinCount(integer $MinCount) 设置最少保留数
 * @method integer getMaxDelay() 获取延迟剔除的阈值；如果IsKickOut="true", 该字段必填
 * @method void setMaxDelay(integer $MaxDelay) 设置延迟剔除的阈值；如果IsKickOut="true", 该字段必填
 * @method string getWeightMode() 获取读写权重分配模式；系统自动分配："system"， 自定义："custom"
 * @method void setWeightMode(string $WeightMode) 设置读写权重分配模式；系统自动分配："system"， 自定义："custom"
 * @method RoWeight getRoWeightValues() 获取实例只读权重
 * @method void setRoWeightValues(RoWeight $RoWeightValues) 设置实例只读权重
 * @method boolean getFailOver() 获取是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值："true" | "false"
 * @method void setFailOver(boolean $FailOver) 设置是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值："true" | "false"
 * @method boolean getAutoAddRo() 获取是否自动添加只读实例，取值："true" | "false"
 * @method void setAutoAddRo(boolean $AutoAddRo) 设置是否自动添加只读实例，取值："true" | "false"
 */
class ModifyCDBProxyRequest extends AbstractModel
{
    /**
     * @var string 数据库代理组唯一ID
     */
    public $ProxyGroupId;

    /**
     * @var boolean 是否开始延迟剔除，取值："true" | "false"
     */
    public $IsKickout;

    /**
     * @var integer 最少保留数
     */
    public $MinCount;

    /**
     * @var integer 延迟剔除的阈值；如果IsKickOut="true", 该字段必填
     */
    public $MaxDelay;

    /**
     * @var string 读写权重分配模式；系统自动分配："system"， 自定义："custom"
     */
    public $WeightMode;

    /**
     * @var RoWeight 实例只读权重
     */
    public $RoWeightValues;

    /**
     * @var boolean 是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值："true" | "false"
     */
    public $FailOver;

    /**
     * @var boolean 是否自动添加只读实例，取值："true" | "false"
     */
    public $AutoAddRo;

    /**
     * @param string $ProxyGroupId 数据库代理组唯一ID
     * @param boolean $IsKickout 是否开始延迟剔除，取值："true" | "false"
     * @param integer $MinCount 最少保留数
     * @param integer $MaxDelay 延迟剔除的阈值；如果IsKickOut="true", 该字段必填
     * @param string $WeightMode 读写权重分配模式；系统自动分配："system"， 自定义："custom"
     * @param RoWeight $RoWeightValues 实例只读权重
     * @param boolean $FailOver 是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值："true" | "false"
     * @param boolean $AutoAddRo 是否自动添加只读实例，取值："true" | "false"
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("IsKickout",$param) and $param["IsKickout"] !== null) {
            $this->IsKickout = $param["IsKickout"];
        }

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->MinCount = $param["MinCount"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("RoWeightValues",$param) and $param["RoWeightValues"] !== null) {
            $this->RoWeightValues = new RoWeight();
            $this->RoWeightValues->deserialize($param["RoWeightValues"]);
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }
    }
}

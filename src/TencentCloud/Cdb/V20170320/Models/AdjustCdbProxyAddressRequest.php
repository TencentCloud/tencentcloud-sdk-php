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
 * AdjustCdbProxyAddress请求参数结构体
 *
 * @method string getProxyGroupId() 获取代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method string getWeightMode() 获取权重分配模式，
系统自动分配："system"， 自定义："custom"
 * @method void setWeightMode(string $WeightMode) 设置权重分配模式，
系统自动分配："system"， 自定义："custom"
 * @method boolean getIsKickOut() 获取是否开启延迟剔除，取值："true" | "false"
 * @method void setIsKickOut(boolean $IsKickOut) 设置是否开启延迟剔除，取值："true" | "false"
 * @method integer getMinCount() 获取最小保留数量，最小取值：0。
说明：当 IsKickOut 为 true 时才有效。
 * @method void setMinCount(integer $MinCount) 设置最小保留数量，最小取值：0。
说明：当 IsKickOut 为 true 时才有效。
 * @method integer getMaxDelay() 获取延迟剔除阈值，最小取值：1，取值范围：[1,10000]，整数。
 * @method void setMaxDelay(integer $MaxDelay) 设置延迟剔除阈值，最小取值：1，取值范围：[1,10000]，整数。
 * @method boolean getFailOver() 获取是否开启故障转移，取值："true" | "false"
 * @method void setFailOver(boolean $FailOver) 设置是否开启故障转移，取值："true" | "false"
 * @method boolean getAutoAddRo() 获取是否自动添加RO，取值："true" | "false"
 * @method void setAutoAddRo(boolean $AutoAddRo) 设置是否自动添加RO，取值："true" | "false"
 * @method boolean getReadOnly() 获取是否是只读，取值："true" | "false"
 * @method void setReadOnly(boolean $ReadOnly) 设置是否是只读，取值："true" | "false"
 * @method string getProxyAddressId() 获取代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method void setProxyAddressId(string $ProxyAddressId) 设置代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method boolean getTransSplit() 获取是否开启事务分离，取值："true" | "false"，默认值 false。
 * @method void setTransSplit(boolean $TransSplit) 设置是否开启事务分离，取值："true" | "false"，默认值 false。
 * @method boolean getConnectionPool() 获取是否开启连接池。默认关闭。
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
 * @method void setConnectionPool(boolean $ConnectionPool) 设置是否开启连接池。默认关闭。
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
 * @method array getProxyAllocation() 获取读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。
 * @method void setProxyAllocation(array $ProxyAllocation) 设置读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。
 * @method boolean getAutoLoadBalance() 获取是否开启自适应负载均衡。默认关闭。
 * @method void setAutoLoadBalance(boolean $AutoLoadBalance) 设置是否开启自适应负载均衡。默认关闭。
 * @method string getAccessMode() 获取访问模式：nearby - 就近访问，balance - 均衡分配，默认就近访问。
 * @method void setAccessMode(string $AccessMode) 设置访问模式：nearby - 就近访问，balance - 均衡分配，默认就近访问。
 */
class AdjustCdbProxyAddressRequest extends AbstractModel
{
    /**
     * @var string 代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     */
    public $ProxyGroupId;

    /**
     * @var string 权重分配模式，
系统自动分配："system"， 自定义："custom"
     */
    public $WeightMode;

    /**
     * @var boolean 是否开启延迟剔除，取值："true" | "false"
     */
    public $IsKickOut;

    /**
     * @var integer 最小保留数量，最小取值：0。
说明：当 IsKickOut 为 true 时才有效。
     */
    public $MinCount;

    /**
     * @var integer 延迟剔除阈值，最小取值：1，取值范围：[1,10000]，整数。
     */
    public $MaxDelay;

    /**
     * @var boolean 是否开启故障转移，取值："true" | "false"
     */
    public $FailOver;

    /**
     * @var boolean 是否自动添加RO，取值："true" | "false"
     */
    public $AutoAddRo;

    /**
     * @var boolean 是否是只读，取值："true" | "false"
     */
    public $ReadOnly;

    /**
     * @var string 代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     */
    public $ProxyAddressId;

    /**
     * @var boolean 是否开启事务分离，取值："true" | "false"，默认值 false。
     */
    public $TransSplit;

    /**
     * @var boolean 是否开启连接池。默认关闭。
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
     */
    public $ConnectionPool;

    /**
     * @var array 读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。
     */
    public $ProxyAllocation;

    /**
     * @var boolean 是否开启自适应负载均衡。默认关闭。
     */
    public $AutoLoadBalance;

    /**
     * @var string 访问模式：nearby - 就近访问，balance - 均衡分配，默认就近访问。
     */
    public $AccessMode;

    /**
     * @param string $ProxyGroupId 代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     * @param string $WeightMode 权重分配模式，
系统自动分配："system"， 自定义："custom"
     * @param boolean $IsKickOut 是否开启延迟剔除，取值："true" | "false"
     * @param integer $MinCount 最小保留数量，最小取值：0。
说明：当 IsKickOut 为 true 时才有效。
     * @param integer $MaxDelay 延迟剔除阈值，最小取值：1，取值范围：[1,10000]，整数。
     * @param boolean $FailOver 是否开启故障转移，取值："true" | "false"
     * @param boolean $AutoAddRo 是否自动添加RO，取值："true" | "false"
     * @param boolean $ReadOnly 是否是只读，取值："true" | "false"
     * @param string $ProxyAddressId 代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     * @param boolean $TransSplit 是否开启事务分离，取值："true" | "false"，默认值 false。
     * @param boolean $ConnectionPool 是否开启连接池。默认关闭。
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
     * @param array $ProxyAllocation 读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。
     * @param boolean $AutoLoadBalance 是否开启自适应负载均衡。默认关闭。
     * @param string $AccessMode 访问模式：nearby - 就近访问，balance - 均衡分配，默认就近访问。
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

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("IsKickOut",$param) and $param["IsKickOut"] !== null) {
            $this->IsKickOut = $param["IsKickOut"];
        }

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->MinCount = $param["MinCount"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("ProxyAddressId",$param) and $param["ProxyAddressId"] !== null) {
            $this->ProxyAddressId = $param["ProxyAddressId"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = $param["ConnectionPool"];
        }

        if (array_key_exists("ProxyAllocation",$param) and $param["ProxyAllocation"] !== null) {
            $this->ProxyAllocation = [];
            foreach ($param["ProxyAllocation"] as $key => $value){
                $obj = new ProxyAllocation();
                $obj->deserialize($value);
                array_push($this->ProxyAllocation, $obj);
            }
        }

        if (array_key_exists("AutoLoadBalance",$param) and $param["AutoLoadBalance"] !== null) {
            $this->AutoLoadBalance = $param["AutoLoadBalance"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }
    }
}

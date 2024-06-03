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
 * DescribeProxySupportParam返回参数结构体
 *
 * @method string getProxyVersion() 获取支持最大代理版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyVersion(string $ProxyVersion) 设置支持最大代理版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportPool() 获取是否支持连接池
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportPool(boolean $SupportPool) 设置是否支持连接池
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPoolMin() 获取连接池最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoolMin(integer $PoolMin) 设置连接池最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPoolMax() 获取连接池最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoolMax(integer $PoolMax) 设置连接池最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportTransSplit() 获取是否支持事务拆分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportTransSplit(boolean $SupportTransSplit) 设置是否支持事务拆分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSupportPoolMinVersion() 获取支持连接池的最小代理版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportPoolMinVersion(string $SupportPoolMinVersion) 设置支持连接池的最小代理版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSupportTransSplitMinVersion() 获取支持事务拆分的最小代理版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportTransSplitMinVersion(string $SupportTransSplitMinVersion) 设置支持事务拆分的最小代理版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportReadOnly() 获取是否支持设置只读
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportReadOnly(boolean $SupportReadOnly) 设置是否支持设置只读
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportAutoLoadBalance() 获取是否自动均衡负载
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportAutoLoadBalance(boolean $SupportAutoLoadBalance) 设置是否自动均衡负载
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportAccessMode() 获取是否支持接入模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportAccessMode(boolean $SupportAccessMode) 设置是否支持接入模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProxySupportParamResponse extends AbstractModel
{
    /**
     * @var string 支持最大代理版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyVersion;

    /**
     * @var boolean 是否支持连接池
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportPool;

    /**
     * @var integer 连接池最小值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoolMin;

    /**
     * @var integer 连接池最大值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoolMax;

    /**
     * @var boolean 是否支持事务拆分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportTransSplit;

    /**
     * @var string 支持连接池的最小代理版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportPoolMinVersion;

    /**
     * @var string 支持事务拆分的最小代理版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportTransSplitMinVersion;

    /**
     * @var boolean 是否支持设置只读
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportReadOnly;

    /**
     * @var boolean 是否自动均衡负载
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportAutoLoadBalance;

    /**
     * @var boolean 是否支持接入模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportAccessMode;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ProxyVersion 支持最大代理版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportPool 是否支持连接池
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PoolMin 连接池最小值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PoolMax 连接池最大值
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportTransSplit 是否支持事务拆分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SupportPoolMinVersion 支持连接池的最小代理版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SupportTransSplitMinVersion 支持事务拆分的最小代理版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportReadOnly 是否支持设置只读
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportAutoLoadBalance 是否自动均衡负载
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportAccessMode 是否支持接入模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("SupportPool",$param) and $param["SupportPool"] !== null) {
            $this->SupportPool = $param["SupportPool"];
        }

        if (array_key_exists("PoolMin",$param) and $param["PoolMin"] !== null) {
            $this->PoolMin = $param["PoolMin"];
        }

        if (array_key_exists("PoolMax",$param) and $param["PoolMax"] !== null) {
            $this->PoolMax = $param["PoolMax"];
        }

        if (array_key_exists("SupportTransSplit",$param) and $param["SupportTransSplit"] !== null) {
            $this->SupportTransSplit = $param["SupportTransSplit"];
        }

        if (array_key_exists("SupportPoolMinVersion",$param) and $param["SupportPoolMinVersion"] !== null) {
            $this->SupportPoolMinVersion = $param["SupportPoolMinVersion"];
        }

        if (array_key_exists("SupportTransSplitMinVersion",$param) and $param["SupportTransSplitMinVersion"] !== null) {
            $this->SupportTransSplitMinVersion = $param["SupportTransSplitMinVersion"];
        }

        if (array_key_exists("SupportReadOnly",$param) and $param["SupportReadOnly"] !== null) {
            $this->SupportReadOnly = $param["SupportReadOnly"];
        }

        if (array_key_exists("SupportAutoLoadBalance",$param) and $param["SupportAutoLoadBalance"] !== null) {
            $this->SupportAutoLoadBalance = $param["SupportAutoLoadBalance"];
        }

        if (array_key_exists("SupportAccessMode",$param) and $param["SupportAccessMode"] !== null) {
            $this->SupportAccessMode = $param["SupportAccessMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

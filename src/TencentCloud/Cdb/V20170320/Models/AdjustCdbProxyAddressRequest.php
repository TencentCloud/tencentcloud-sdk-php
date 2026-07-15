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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AdjustCdbProxyAddress请求参数结构体
 *
 * @method string getProxyGroupId() 获取<p>代理组 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>代理组 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
 * @method string getWeightMode() 获取<p>权重分配模式，<br>系统自动分配：&quot;system&quot;， 自定义：&quot;custom&quot;</p>
 * @method void setWeightMode(string $WeightMode) 设置<p>权重分配模式，<br>系统自动分配：&quot;system&quot;， 自定义：&quot;custom&quot;</p>
 * @method boolean getIsKickOut() 获取<p>是否开启延迟剔除，取值：&quot;true&quot; | &quot;false&quot;</p>
 * @method void setIsKickOut(boolean $IsKickOut) 设置<p>是否开启延迟剔除，取值：&quot;true&quot; | &quot;false&quot;</p>
 * @method integer getMinCount() 获取<p>最小保留数量，最小取值：0。<br>说明：当 IsKickOut 为 true 时才有效。</p>
 * @method void setMinCount(integer $MinCount) 设置<p>最小保留数量，最小取值：0。<br>说明：当 IsKickOut 为 true 时才有效。</p>
 * @method integer getMaxDelay() 获取<p>延迟剔除阈值，最小取值：1，取值范围：[1,10000]，整数。</p>
 * @method void setMaxDelay(integer $MaxDelay) 设置<p>延迟剔除阈值，最小取值：1，取值范围：[1,10000]，整数。</p>
 * @method boolean getFailOver() 获取<p>是否开启故障转移，取值：&quot;true&quot; | &quot;false&quot;</p>
 * @method void setFailOver(boolean $FailOver) 设置<p>是否开启故障转移，取值：&quot;true&quot; | &quot;false&quot;</p>
 * @method boolean getAutoAddRo() 获取<p>是否自动添加RO，取值：&quot;true&quot; | &quot;false&quot;</p>
 * @method void setAutoAddRo(boolean $AutoAddRo) 设置<p>是否自动添加RO，取值：&quot;true&quot; | &quot;false&quot;</p>
 * @method boolean getReadOnly() 获取<p>是否是只读，取值：&quot;true&quot; | &quot;false&quot;</p>
 * @method void setReadOnly(boolean $ReadOnly) 设置<p>是否是只读，取值：&quot;true&quot; | &quot;false&quot;</p>
 * @method string getProxyAddressId() 获取<p>代理组地址 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
 * @method void setProxyAddressId(string $ProxyAddressId) 设置<p>代理组地址 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
 * @method boolean getTransSplit() 获取<p>是否开启事务分离，取值：&quot;true&quot; | &quot;false&quot;，默认值 false。</p>
 * @method void setTransSplit(boolean $TransSplit) 设置<p>是否开启事务分离，取值：&quot;true&quot; | &quot;false&quot;，默认值 false。</p>
 * @method boolean getConnectionPool() 获取<p>是否开启连接池。默认关闭。<br>注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。</p>
 * @method void setConnectionPool(boolean $ConnectionPool) 设置<p>是否开启连接池。默认关闭。<br>注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。</p>
 * @method array getProxyAllocation() 获取<p>读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。</p>
 * @method void setProxyAllocation(array $ProxyAllocation) 设置<p>读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。</p>
 * @method boolean getAutoLoadBalance() 获取<p>是否开启自适应负载均衡。默认关闭。</p>
 * @method void setAutoLoadBalance(boolean $AutoLoadBalance) 设置<p>是否开启自适应负载均衡。默认关闭。</p>
 * @method string getAccessMode() 获取<p>访问模式。</p><p>枚举值：</p><ul><li>nearby： 就近访问</li><li>balance： 均衡分配</li><li>direct_nearby： 纯网络转发就近访问</li><li>direct_balance： 纯网络转发均衡分配</li></ul>
 * @method void setAccessMode(string $AccessMode) 设置<p>访问模式。</p><p>枚举值：</p><ul><li>nearby： 就近访问</li><li>balance： 均衡分配</li><li>direct_nearby： 纯网络转发就近访问</li><li>direct_balance： 纯网络转发均衡分配</li></ul>
 * @method boolean getApNodeAsRoNode() 获取<p>是否将libra节点当作普通RO节点</p>
 * @method void setApNodeAsRoNode(boolean $ApNodeAsRoNode) 设置<p>是否将libra节点当作普通RO节点</p>
 * @method boolean getApQueryToOtherNode() 获取<p>libra节点故障，是否转发给其他节点</p>
 * @method void setApQueryToOtherNode(boolean $ApQueryToOtherNode) 设置<p>libra节点故障，是否转发给其他节点</p>
 */
class AdjustCdbProxyAddressRequest extends AbstractModel
{
    /**
     * @var string <p>代理组 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>权重分配模式，<br>系统自动分配：&quot;system&quot;， 自定义：&quot;custom&quot;</p>
     */
    public $WeightMode;

    /**
     * @var boolean <p>是否开启延迟剔除，取值：&quot;true&quot; | &quot;false&quot;</p>
     */
    public $IsKickOut;

    /**
     * @var integer <p>最小保留数量，最小取值：0。<br>说明：当 IsKickOut 为 true 时才有效。</p>
     */
    public $MinCount;

    /**
     * @var integer <p>延迟剔除阈值，最小取值：1，取值范围：[1,10000]，整数。</p>
     */
    public $MaxDelay;

    /**
     * @var boolean <p>是否开启故障转移，取值：&quot;true&quot; | &quot;false&quot;</p>
     */
    public $FailOver;

    /**
     * @var boolean <p>是否自动添加RO，取值：&quot;true&quot; | &quot;false&quot;</p>
     */
    public $AutoAddRo;

    /**
     * @var boolean <p>是否是只读，取值：&quot;true&quot; | &quot;false&quot;</p>
     */
    public $ReadOnly;

    /**
     * @var string <p>代理组地址 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
     */
    public $ProxyAddressId;

    /**
     * @var boolean <p>是否开启事务分离，取值：&quot;true&quot; | &quot;false&quot;，默认值 false。</p>
     */
    public $TransSplit;

    /**
     * @var boolean <p>是否开启连接池。默认关闭。<br>注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。</p>
     */
    public $ConnectionPool;

    /**
     * @var array <p>读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。</p>
     */
    public $ProxyAllocation;

    /**
     * @var boolean <p>是否开启自适应负载均衡。默认关闭。</p>
     */
    public $AutoLoadBalance;

    /**
     * @var string <p>访问模式。</p><p>枚举值：</p><ul><li>nearby： 就近访问</li><li>balance： 均衡分配</li><li>direct_nearby： 纯网络转发就近访问</li><li>direct_balance： 纯网络转发均衡分配</li></ul>
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
     * @param string $ProxyGroupId <p>代理组 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
     * @param string $WeightMode <p>权重分配模式，<br>系统自动分配：&quot;system&quot;， 自定义：&quot;custom&quot;</p>
     * @param boolean $IsKickOut <p>是否开启延迟剔除，取值：&quot;true&quot; | &quot;false&quot;</p>
     * @param integer $MinCount <p>最小保留数量，最小取值：0。<br>说明：当 IsKickOut 为 true 时才有效。</p>
     * @param integer $MaxDelay <p>延迟剔除阈值，最小取值：1，取值范围：[1,10000]，整数。</p>
     * @param boolean $FailOver <p>是否开启故障转移，取值：&quot;true&quot; | &quot;false&quot;</p>
     * @param boolean $AutoAddRo <p>是否自动添加RO，取值：&quot;true&quot; | &quot;false&quot;</p>
     * @param boolean $ReadOnly <p>是否是只读，取值：&quot;true&quot; | &quot;false&quot;</p>
     * @param string $ProxyAddressId <p>代理组地址 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
     * @param boolean $TransSplit <p>是否开启事务分离，取值：&quot;true&quot; | &quot;false&quot;，默认值 false。</p>
     * @param boolean $ConnectionPool <p>是否开启连接池。默认关闭。<br>注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。</p>
     * @param array $ProxyAllocation <p>读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。</p>
     * @param boolean $AutoLoadBalance <p>是否开启自适应负载均衡。默认关闭。</p>
     * @param string $AccessMode <p>访问模式。</p><p>枚举值：</p><ul><li>nearby： 就近访问</li><li>balance： 均衡分配</li><li>direct_nearby： 纯网络转发就近访问</li><li>direct_balance： 纯网络转发均衡分配</li></ul>
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

        if (array_key_exists("ApNodeAsRoNode",$param) and $param["ApNodeAsRoNode"] !== null) {
            $this->ApNodeAsRoNode = $param["ApNodeAsRoNode"];
        }

        if (array_key_exists("ApQueryToOtherNode",$param) and $param["ApQueryToOtherNode"] !== null) {
            $this->ApQueryToOtherNode = $param["ApQueryToOtherNode"];
        }
    }
}

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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAddressPool请求参数结构体
 *
 * @method integer getPoolId() 获取<p>地址池id</p>
 * @method void setPoolId(integer $PoolId) 设置<p>地址池id</p>
 * @method string getPoolName() 获取<p>地址池名称，不允许重复</p>
 * @method void setPoolName(string $PoolName) 设置<p>地址池名称，不允许重复</p>
 * @method string getTrafficStrategy() 获取<p>流量策略: WEIGHT负载均衡，ALL解析全部</p>
 * @method void setTrafficStrategy(string $TrafficStrategy) 设置<p>流量策略: WEIGHT负载均衡，ALL解析全部</p>
 * @method integer getMonitorId() 获取<p>监控器id，当监控器已关联策略时，此字段必传</p>
 * @method void setMonitorId(integer $MonitorId) 设置<p>监控器id，当监控器已关联策略时，此字段必传</p>
 * @method array getAddressSet() 获取<p>地址列表，全量更新逻辑，对于存量不需要修改的地址信息也需要带上(其中参数里的AddressId需传入正确的值)，否则会被删除。</p>
 * @method void setAddressSet(array $AddressSet) 设置<p>地址列表，全量更新逻辑，对于存量不需要修改的地址信息也需要带上(其中参数里的AddressId需传入正确的值)，否则会被删除。</p>
 * @method boolean getKeepResource() 获取<p>是否保留资源</p><p>枚举值：</p><ul><li>false： 全量操作，会有删除逻辑</li><li>true： 不会删除原有资源</li></ul>
 * @method void setKeepResource(boolean $KeepResource) 设置<p>是否保留资源</p><p>枚举值：</p><ul><li>false： 全量操作，会有删除逻辑</li><li>true： 不会删除原有资源</li></ul>
 */
class ModifyAddressPoolRequest extends AbstractModel
{
    /**
     * @var integer <p>地址池id</p>
     */
    public $PoolId;

    /**
     * @var string <p>地址池名称，不允许重复</p>
     */
    public $PoolName;

    /**
     * @var string <p>流量策略: WEIGHT负载均衡，ALL解析全部</p>
     */
    public $TrafficStrategy;

    /**
     * @var integer <p>监控器id，当监控器已关联策略时，此字段必传</p>
     */
    public $MonitorId;

    /**
     * @var array <p>地址列表，全量更新逻辑，对于存量不需要修改的地址信息也需要带上(其中参数里的AddressId需传入正确的值)，否则会被删除。</p>
     */
    public $AddressSet;

    /**
     * @var boolean <p>是否保留资源</p><p>枚举值：</p><ul><li>false： 全量操作，会有删除逻辑</li><li>true： 不会删除原有资源</li></ul>
     */
    public $KeepResource;

    /**
     * @param integer $PoolId <p>地址池id</p>
     * @param string $PoolName <p>地址池名称，不允许重复</p>
     * @param string $TrafficStrategy <p>流量策略: WEIGHT负载均衡，ALL解析全部</p>
     * @param integer $MonitorId <p>监控器id，当监控器已关联策略时，此字段必传</p>
     * @param array $AddressSet <p>地址列表，全量更新逻辑，对于存量不需要修改的地址信息也需要带上(其中参数里的AddressId需传入正确的值)，否则会被删除。</p>
     * @param boolean $KeepResource <p>是否保留资源</p><p>枚举值：</p><ul><li>false： 全量操作，会有删除逻辑</li><li>true： 不会删除原有资源</li></ul>
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
        if (array_key_exists("PoolId",$param) and $param["PoolId"] !== null) {
            $this->PoolId = $param["PoolId"];
        }

        if (array_key_exists("PoolName",$param) and $param["PoolName"] !== null) {
            $this->PoolName = $param["PoolName"];
        }

        if (array_key_exists("TrafficStrategy",$param) and $param["TrafficStrategy"] !== null) {
            $this->TrafficStrategy = $param["TrafficStrategy"];
        }

        if (array_key_exists("MonitorId",$param) and $param["MonitorId"] !== null) {
            $this->MonitorId = $param["MonitorId"];
        }

        if (array_key_exists("AddressSet",$param) and $param["AddressSet"] !== null) {
            $this->AddressSet = [];
            foreach ($param["AddressSet"] as $key => $value){
                $obj = new Address();
                $obj->deserialize($value);
                array_push($this->AddressSet, $obj);
            }
        }

        if (array_key_exists("KeepResource",$param) and $param["KeepResource"] !== null) {
            $this->KeepResource = $param["KeepResource"];
        }
    }
}

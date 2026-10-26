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
 * TransferClusterZone请求参数结构体
 *
 * @method string getClusterId() 获取<p>源集群Id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>源集群Id</p>
 * @method string getDstZone() 获取<p>目标可用区</p>
 * @method void setDstZone(string $DstZone) 设置<p>目标可用区</p>
 * @method integer getMaxLag() 获取<p>跨可用区迁移主从数据延迟校验阈值，单位毫秒(ms)</p>
 * @method void setMaxLag(integer $MaxLag) 设置<p>跨可用区迁移主从数据延迟校验阈值，单位毫秒(ms)</p>
 * @method string getTransferType() 获取<p>Immediate:立即执行，InMaintain:时间窗口执行</p>
 * @method void setTransferType(string $TransferType) 设置<p>Immediate:立即执行，InMaintain:时间窗口执行</p>
 * @method string getDstSlaveZone() 获取<p>多可用区备区</p>
 * @method void setDstSlaveZone(string $DstSlaveZone) 设置<p>多可用区备区</p>
 * @method array getProxyZones() 获取<p>proxy迁移的目标可用区信息</p>
 * @method void setProxyZones(array $ProxyZones) 设置<p>proxy迁移的目标可用区信息</p>
 */
class TransferClusterZoneRequest extends AbstractModel
{
    /**
     * @var string <p>源集群Id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>目标可用区</p>
     */
    public $DstZone;

    /**
     * @var integer <p>跨可用区迁移主从数据延迟校验阈值，单位毫秒(ms)</p>
     */
    public $MaxLag;

    /**
     * @var string <p>Immediate:立即执行，InMaintain:时间窗口执行</p>
     */
    public $TransferType;

    /**
     * @var string <p>多可用区备区</p>
     */
    public $DstSlaveZone;

    /**
     * @var array <p>proxy迁移的目标可用区信息</p>
     */
    public $ProxyZones;

    /**
     * @param string $ClusterId <p>源集群Id</p>
     * @param string $DstZone <p>目标可用区</p>
     * @param integer $MaxLag <p>跨可用区迁移主从数据延迟校验阈值，单位毫秒(ms)</p>
     * @param string $TransferType <p>Immediate:立即执行，InMaintain:时间窗口执行</p>
     * @param string $DstSlaveZone <p>多可用区备区</p>
     * @param array $ProxyZones <p>proxy迁移的目标可用区信息</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DstZone",$param) and $param["DstZone"] !== null) {
            $this->DstZone = $param["DstZone"];
        }

        if (array_key_exists("MaxLag",$param) and $param["MaxLag"] !== null) {
            $this->MaxLag = $param["MaxLag"];
        }

        if (array_key_exists("TransferType",$param) and $param["TransferType"] !== null) {
            $this->TransferType = $param["TransferType"];
        }

        if (array_key_exists("DstSlaveZone",$param) and $param["DstSlaveZone"] !== null) {
            $this->DstSlaveZone = $param["DstSlaveZone"];
        }

        if (array_key_exists("ProxyZones",$param) and $param["ProxyZones"] !== null) {
            $this->ProxyZones = [];
            foreach ($param["ProxyZones"] as $key => $value){
                $obj = new ProxyZone();
                $obj->deserialize($value);
                array_push($this->ProxyZones, $obj);
            }
        }
    }
}

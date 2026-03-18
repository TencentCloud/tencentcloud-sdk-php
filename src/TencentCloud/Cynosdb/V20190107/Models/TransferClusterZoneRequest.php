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
 * @method string getClusterId() 获取源集群Id
 * @method void setClusterId(string $ClusterId) 设置源集群Id
 * @method string getDstZone() 获取目标可用区
 * @method void setDstZone(string $DstZone) 设置目标可用区
 * @method integer getMaxLag() 获取跨可用区迁移主从数据延迟校验阈值，单位毫秒(ms)
 * @method void setMaxLag(integer $MaxLag) 设置跨可用区迁移主从数据延迟校验阈值，单位毫秒(ms)
 * @method string getTransferType() 获取Immediate:立即执行，InMaintain:时间窗口执行
 * @method void setTransferType(string $TransferType) 设置Immediate:立即执行，InMaintain:时间窗口执行
 * @method string getDstSlaveZone() 获取多可用区备区
 * @method void setDstSlaveZone(string $DstSlaveZone) 设置多可用区备区
 * @method array getProxyZones() 获取proxy迁移的目标可用区信息
 * @method void setProxyZones(array $ProxyZones) 设置proxy迁移的目标可用区信息
 */
class TransferClusterZoneRequest extends AbstractModel
{
    /**
     * @var string 源集群Id
     */
    public $ClusterId;

    /**
     * @var string 目标可用区
     */
    public $DstZone;

    /**
     * @var integer 跨可用区迁移主从数据延迟校验阈值，单位毫秒(ms)
     */
    public $MaxLag;

    /**
     * @var string Immediate:立即执行，InMaintain:时间窗口执行
     */
    public $TransferType;

    /**
     * @var string 多可用区备区
     */
    public $DstSlaveZone;

    /**
     * @var array proxy迁移的目标可用区信息
     */
    public $ProxyZones;

    /**
     * @param string $ClusterId 源集群Id
     * @param string $DstZone 目标可用区
     * @param integer $MaxLag 跨可用区迁移主从数据延迟校验阈值，单位毫秒(ms)
     * @param string $TransferType Immediate:立即执行，InMaintain:时间窗口执行
     * @param string $DstSlaveZone 多可用区备区
     * @param array $ProxyZones proxy迁移的目标可用区信息
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

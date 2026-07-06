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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSerialRegion返回参数结构体
 *
 * @method array getSerialRegionLst() 获取<p>串行地域带宽分配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialRegionLst(array $SerialRegionLst) 设置<p>串行地域带宽分配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnUsedWidth() 获取<p>剩余可分配通用带宽 单位M</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnUsedWidth(integer $UnUsedWidth) 设置<p>剩余可分配通用带宽 单位M</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnUsedQuota() 获取<p>可配置实例个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnUsedQuota(integer $UnUsedQuota) 设置<p>可配置实例个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBypassWidth() 获取<p>旁路带宽数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBypassWidth(integer $BypassWidth) 设置<p>旁路带宽数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSendBypassWidth() 获取<p>赠送的旁路带宽数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendBypassWidth(integer $SendBypassWidth) 设置<p>赠送的旁路带宽数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEdgeWidth() 获取<p>互联网边界防火墙总带宽</p>
 * @method void setEdgeWidth(integer $EdgeWidth) 设置<p>互联网边界防火墙总带宽</p>
 * @method integer getEdgeElasticSwitch() 获取<p>互联网边界弹性开关</p>
 * @method void setEdgeElasticSwitch(integer $EdgeElasticSwitch) 设置<p>互联网边界弹性开关</p>
 * @method integer getEdgeElasticBandwidth() 获取<p>互联网边界弹性带宽值</p>
 * @method void setEdgeElasticBandwidth(integer $EdgeElasticBandwidth) 设置<p>互联网边界弹性带宽值</p>
 * @method integer getEdgeElasticBandwidthLimit() 获取<p>互联网边界弹性带宽上限</p>
 * @method void setEdgeElasticBandwidthLimit(integer $EdgeElasticBandwidthLimit) 设置<p>互联网边界弹性带宽上限</p>
 * @method integer getEdgeElasticTrafficSwitch() 获取<p>互联网边界防火墙计量开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 打开</li></ul>
 * @method void setEdgeElasticTrafficSwitch(integer $EdgeElasticTrafficSwitch) 设置<p>互联网边界防火墙计量开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 打开</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSerialRegionResponse extends AbstractModel
{
    /**
     * @var array <p>串行地域带宽分配</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialRegionLst;

    /**
     * @var integer <p>剩余可分配通用带宽 单位M</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnUsedWidth;

    /**
     * @var integer <p>可配置实例个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnUsedQuota;

    /**
     * @var integer <p>旁路带宽数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BypassWidth;

    /**
     * @var integer <p>赠送的旁路带宽数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendBypassWidth;

    /**
     * @var integer <p>互联网边界防火墙总带宽</p>
     */
    public $EdgeWidth;

    /**
     * @var integer <p>互联网边界弹性开关</p>
     */
    public $EdgeElasticSwitch;

    /**
     * @var integer <p>互联网边界弹性带宽值</p>
     */
    public $EdgeElasticBandwidth;

    /**
     * @var integer <p>互联网边界弹性带宽上限</p>
     */
    public $EdgeElasticBandwidthLimit;

    /**
     * @var integer <p>互联网边界防火墙计量开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 打开</li></ul>
     */
    public $EdgeElasticTrafficSwitch;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SerialRegionLst <p>串行地域带宽分配</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnUsedWidth <p>剩余可分配通用带宽 单位M</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnUsedQuota <p>可配置实例个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BypassWidth <p>旁路带宽数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SendBypassWidth <p>赠送的旁路带宽数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EdgeWidth <p>互联网边界防火墙总带宽</p>
     * @param integer $EdgeElasticSwitch <p>互联网边界弹性开关</p>
     * @param integer $EdgeElasticBandwidth <p>互联网边界弹性带宽值</p>
     * @param integer $EdgeElasticBandwidthLimit <p>互联网边界弹性带宽上限</p>
     * @param integer $EdgeElasticTrafficSwitch <p>互联网边界防火墙计量开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 打开</li></ul>
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
        if (array_key_exists("SerialRegionLst",$param) and $param["SerialRegionLst"] !== null) {
            $this->SerialRegionLst = [];
            foreach ($param["SerialRegionLst"] as $key => $value){
                $obj = new SerialRegionInfo();
                $obj->deserialize($value);
                array_push($this->SerialRegionLst, $obj);
            }
        }

        if (array_key_exists("UnUsedWidth",$param) and $param["UnUsedWidth"] !== null) {
            $this->UnUsedWidth = $param["UnUsedWidth"];
        }

        if (array_key_exists("UnUsedQuota",$param) and $param["UnUsedQuota"] !== null) {
            $this->UnUsedQuota = $param["UnUsedQuota"];
        }

        if (array_key_exists("BypassWidth",$param) and $param["BypassWidth"] !== null) {
            $this->BypassWidth = $param["BypassWidth"];
        }

        if (array_key_exists("SendBypassWidth",$param) and $param["SendBypassWidth"] !== null) {
            $this->SendBypassWidth = $param["SendBypassWidth"];
        }

        if (array_key_exists("EdgeWidth",$param) and $param["EdgeWidth"] !== null) {
            $this->EdgeWidth = $param["EdgeWidth"];
        }

        if (array_key_exists("EdgeElasticSwitch",$param) and $param["EdgeElasticSwitch"] !== null) {
            $this->EdgeElasticSwitch = $param["EdgeElasticSwitch"];
        }

        if (array_key_exists("EdgeElasticBandwidth",$param) and $param["EdgeElasticBandwidth"] !== null) {
            $this->EdgeElasticBandwidth = $param["EdgeElasticBandwidth"];
        }

        if (array_key_exists("EdgeElasticBandwidthLimit",$param) and $param["EdgeElasticBandwidthLimit"] !== null) {
            $this->EdgeElasticBandwidthLimit = $param["EdgeElasticBandwidthLimit"];
        }

        if (array_key_exists("EdgeElasticTrafficSwitch",$param) and $param["EdgeElasticTrafficSwitch"] !== null) {
            $this->EdgeElasticTrafficSwitch = $param["EdgeElasticTrafficSwitch"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

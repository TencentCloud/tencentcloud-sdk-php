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
 * @method array getSerialRegionLst() 获取串行地域带宽分配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialRegionLst(array $SerialRegionLst) 设置串行地域带宽分配
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnUsedWidth() 获取剩余可分配通用带宽 单位M
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnUsedWidth(integer $UnUsedWidth) 设置剩余可分配通用带宽 单位M
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnUsedQuota() 获取可配置实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnUsedQuota(integer $UnUsedQuota) 设置可配置实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBypassWidth() 获取旁路带宽数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBypassWidth(integer $BypassWidth) 设置旁路带宽数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSendBypassWidth() 获取赠送的旁路带宽数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendBypassWidth(integer $SendBypassWidth) 设置赠送的旁路带宽数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSerialRegionResponse extends AbstractModel
{
    /**
     * @var array 串行地域带宽分配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialRegionLst;

    /**
     * @var integer 剩余可分配通用带宽 单位M
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnUsedWidth;

    /**
     * @var integer 可配置实例个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnUsedQuota;

    /**
     * @var integer 旁路带宽数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BypassWidth;

    /**
     * @var integer 赠送的旁路带宽数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendBypassWidth;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SerialRegionLst 串行地域带宽分配
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnUsedWidth 剩余可分配通用带宽 单位M
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnUsedQuota 可配置实例个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BypassWidth 旁路带宽数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SendBypassWidth 赠送的旁路带宽数据
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

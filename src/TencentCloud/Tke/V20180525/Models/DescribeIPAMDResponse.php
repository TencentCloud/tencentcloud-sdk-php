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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIPAMD返回参数结构体
 *
 * @method boolean getEnableIPAMD() 获取是否安装了eniipamd组件
 * @method void setEnableIPAMD(boolean $EnableIPAMD) 设置是否安装了eniipamd组件
 * @method boolean getEnableCustomizedPodCidr() 获取是否开启自定义podcidr，默认为false，已安装eniipamd组件才意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableCustomizedPodCidr(boolean $EnableCustomizedPodCidr) 设置是否开启自定义podcidr，默认为false，已安装eniipamd组件才意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDisableVpcCniMode() 获取是否不开启vpccni模式，默认为false，已安装eniipamd组件才意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisableVpcCniMode(boolean $DisableVpcCniMode) 设置是否不开启vpccni模式，默认为false，已安装eniipamd组件才意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhase() 获取组件状态，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhase(string $Phase) 设置组件状态，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取错误信息，已安装eniipamd组件且状态为非running才会有错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置错误信息，已安装eniipamd组件且状态为非running才会有错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubnetIds() 获取子网信息，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetIds(array $SubnetIds) 设置子网信息，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClaimExpiredDuration() 获取固定ip回收时间，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClaimExpiredDuration(string $ClaimExpiredDuration) 设置固定ip回收时间，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIPAMDResponse extends AbstractModel
{
    /**
     * @var boolean 是否安装了eniipamd组件
     */
    public $EnableIPAMD;

    /**
     * @var boolean 是否开启自定义podcidr，默认为false，已安装eniipamd组件才意义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableCustomizedPodCidr;

    /**
     * @var boolean 是否不开启vpccni模式，默认为false，已安装eniipamd组件才意义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisableVpcCniMode;

    /**
     * @var string 组件状态，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phase;

    /**
     * @var string 错误信息，已安装eniipamd组件且状态为非running才会有错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var array 子网信息，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetIds;

    /**
     * @var string 固定ip回收时间，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClaimExpiredDuration;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $EnableIPAMD 是否安装了eniipamd组件
     * @param boolean $EnableCustomizedPodCidr 是否开启自定义podcidr，默认为false，已安装eniipamd组件才意义
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DisableVpcCniMode 是否不开启vpccni模式，默认为false，已安装eniipamd组件才意义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phase 组件状态，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 错误信息，已安装eniipamd组件且状态为非running才会有错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubnetIds 子网信息，已安装eniipamd组件才会有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClaimExpiredDuration 固定ip回收时间，已安装eniipamd组件才会有值
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
        if (array_key_exists("EnableIPAMD",$param) and $param["EnableIPAMD"] !== null) {
            $this->EnableIPAMD = $param["EnableIPAMD"];
        }

        if (array_key_exists("EnableCustomizedPodCidr",$param) and $param["EnableCustomizedPodCidr"] !== null) {
            $this->EnableCustomizedPodCidr = $param["EnableCustomizedPodCidr"];
        }

        if (array_key_exists("DisableVpcCniMode",$param) and $param["DisableVpcCniMode"] !== null) {
            $this->DisableVpcCniMode = $param["DisableVpcCniMode"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("ClaimExpiredDuration",$param) and $param["ClaimExpiredDuration"] !== null) {
            $this->ClaimExpiredDuration = $param["ClaimExpiredDuration"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

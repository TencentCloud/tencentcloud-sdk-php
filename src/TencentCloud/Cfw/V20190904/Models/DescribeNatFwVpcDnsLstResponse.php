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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatFwVpcDnsLst返回参数结构体
 *
 * @method array getVpcDnsSwitchLst() 获取nat防火墙vpc dns 信息数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcDnsSwitchLst(array $VpcDnsSwitchLst) 设置nat防火墙vpc dns 信息数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReturnMsg() 获取返回参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnMsg(string $ReturnMsg) 设置返回参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取开关总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置开关总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNatFwVpcDnsLstResponse extends AbstractModel
{
    /**
     * @var array nat防火墙vpc dns 信息数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcDnsSwitchLst;

    /**
     * @var string 返回参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnMsg;

    /**
     * @var integer 开关总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $VpcDnsSwitchLst nat防火墙vpc dns 信息数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReturnMsg 返回参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 开关总条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("VpcDnsSwitchLst",$param) and $param["VpcDnsSwitchLst"] !== null) {
            $this->VpcDnsSwitchLst = [];
            foreach ($param["VpcDnsSwitchLst"] as $key => $value){
                $obj = new VpcDnsInfo();
                $obj->deserialize($value);
                array_push($this->VpcDnsSwitchLst, $obj);
            }
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

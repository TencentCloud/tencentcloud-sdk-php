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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQPublicAccessPoint返回参数结构体
 *
 * @method integer getStatus() 获取公网接入点状态：
0， 已开启
1， 已关闭
2，开启中
3，关闭中
4，修改中
 * @method void setStatus(integer $Status) 设置公网接入点状态：
0， 已开启
1， 已关闭
2，开启中
3，关闭中
4，修改中
 * @method integer getPayStatus() 获取支付状态：
0, 未知
1，正常
2，欠费
 * @method void setPayStatus(integer $PayStatus) 设置支付状态：
0, 未知
1，正常
2，欠费
 * @method string getAccessUrl() 获取接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessUrl(string $AccessUrl) 设置接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRules() 获取安全访问规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置安全访问规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBandwidth() 获取带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidth(integer $Bandwidth) 设置带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取付费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置付费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRocketMQPublicAccessPointResponse extends AbstractModel
{
    /**
     * @var integer 公网接入点状态：
0， 已开启
1， 已关闭
2，开启中
3，关闭中
4，修改中
     */
    public $Status;

    /**
     * @var integer 支付状态：
0, 未知
1，正常
2，欠费
     */
    public $PayStatus;

    /**
     * @var string 接入点地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessUrl;

    /**
     * @var array 安全访问规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var integer 带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bandwidth;

    /**
     * @var integer 付费模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 公网接入点状态：
0， 已开启
1， 已关闭
2，开启中
3，关闭中
4，修改中
     * @param integer $PayStatus 支付状态：
0, 未知
1，正常
2，欠费
     * @param string $AccessUrl 接入点地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rules 安全访问规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bandwidth 带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode 付费模式
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PayStatus",$param) and $param["PayStatus"] !== null) {
            $this->PayStatus = $param["PayStatus"];
        }

        if (array_key_exists("AccessUrl",$param) and $param["AccessUrl"] !== null) {
            $this->AccessUrl = $param["AccessUrl"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PublicAccessRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

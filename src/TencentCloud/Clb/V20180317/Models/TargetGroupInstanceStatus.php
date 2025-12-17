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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于目标组后端rs健康检查状态。
 *
 * @method string getInstanceIp() 获取后端rs的IP
 * @method void setInstanceIp(string $InstanceIp) 设置后端rs的IP
 * @method string getStatus() 获取健康检查状态，参数值及含义如下：
● on：表示探测中。
● off：表示健康检查关闭。
● health：表示健康。
● unhealth：表示异常。
 * @method void setStatus(string $Status) 设置健康检查状态，参数值及含义如下：
● on：表示探测中。
● off：表示健康检查关闭。
● health：表示健康。
● unhealth：表示异常。
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getEniId() 获取网卡ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEniId(string $EniId) 设置网卡ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TargetGroupInstanceStatus extends AbstractModel
{
    /**
     * @var string 后端rs的IP
     */
    public $InstanceIp;

    /**
     * @var string 健康检查状态，参数值及含义如下：
● on：表示探测中。
● off：表示健康检查关闭。
● health：表示健康。
● unhealth：表示异常。
     */
    public $Status;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 网卡ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EniId;

    /**
     * @param string $InstanceIp 后端rs的IP
     * @param string $Status 健康检查状态，参数值及含义如下：
● on：表示探测中。
● off：表示健康检查关闭。
● health：表示健康。
● unhealth：表示异常。
     * @param string $InstanceId 实例ID
     * @param integer $Port 端口
     * @param string $EniId 网卡ID
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceIp",$param) and $param["InstanceIp"] !== null) {
            $this->InstanceIp = $param["InstanceIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("EniId",$param) and $param["EniId"] !== null) {
            $this->EniId = $param["EniId"];
        }
    }
}

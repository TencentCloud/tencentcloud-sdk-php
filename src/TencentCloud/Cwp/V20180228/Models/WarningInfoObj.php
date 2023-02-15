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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警设置列表
 *
 * @method integer getType() 获取事件告警类型；1：离线，2：木马，3：异常登录，4：爆破，5：漏洞（已拆分为9-12四种类型）6：高危命令，7：反弹sell，8：本地提权，9：应用漏洞，10：web-cms漏洞，11：应急漏洞，12：安全基线 ,13: 防篡改，14：恶意请求，15: 网络攻击，16：Windows系统漏洞，17：Linux软件漏洞，18：核心文件监控告警，19：客户端卸载告警。20：客户端离线告警
 * @method void setType(integer $Type) 设置事件告警类型；1：离线，2：木马，3：异常登录，4：爆破，5：漏洞（已拆分为9-12四种类型）6：高危命令，7：反弹sell，8：本地提权，9：应用漏洞，10：web-cms漏洞，11：应急漏洞，12：安全基线 ,13: 防篡改，14：恶意请求，15: 网络攻击，16：Windows系统漏洞，17：Linux软件漏洞，18：核心文件监控告警，19：客户端卸载告警。20：客户端离线告警
 * @method integer getDisablePhoneWarning() 获取1: 关闭告警 0: 开启告警
 * @method void setDisablePhoneWarning(integer $DisablePhoneWarning) 设置1: 关闭告警 0: 开启告警
 * @method string getBeginTime() 获取开始时间，格式: HH:mm
 * @method void setBeginTime(string $BeginTime) 设置开始时间，格式: HH:mm
 * @method string getEndTime() 获取结束时间，格式: HH:mm
 * @method void setEndTime(string $EndTime) 设置结束时间，格式: HH:mm
 * @method string getTimeZone() 获取时区信息
 * @method void setTimeZone(string $TimeZone) 设置时区信息
 * @method integer getControlBit() 获取漏洞等级控制位（对应DB的十进制存储）
 * @method void setControlBit(integer $ControlBit) 设置漏洞等级控制位（对应DB的十进制存储）
 * @method string getControlBits() 获取漏洞等级控制位二进制，每一位对应页面漏洞等级的开启关闭：低中高（0:关闭；1：开启），例如：101 → 同时勾选低+高
 * @method void setControlBits(string $ControlBits) 设置漏洞等级控制位二进制，每一位对应页面漏洞等级的开启关闭：低中高（0:关闭；1：开启），例如：101 → 同时勾选低+高
 * @method integer getHostRange() 获取告警主机范围类型，0:全部主机，1:按所属项目选，2:按腾讯云标签选，3:按主机安全标签选，4:自选主机
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostRange(integer $HostRange) 设置告警主机范围类型，0:全部主机，1:按所属项目选，2:按腾讯云标签选，3:按主机安全标签选，4:自选主机
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取配置的告警范围主机个数，前端用此判断展示提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置配置的告警范围主机个数，前端用此判断展示提示信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class WarningInfoObj extends AbstractModel
{
    /**
     * @var integer 事件告警类型；1：离线，2：木马，3：异常登录，4：爆破，5：漏洞（已拆分为9-12四种类型）6：高危命令，7：反弹sell，8：本地提权，9：应用漏洞，10：web-cms漏洞，11：应急漏洞，12：安全基线 ,13: 防篡改，14：恶意请求，15: 网络攻击，16：Windows系统漏洞，17：Linux软件漏洞，18：核心文件监控告警，19：客户端卸载告警。20：客户端离线告警
     */
    public $Type;

    /**
     * @var integer 1: 关闭告警 0: 开启告警
     */
    public $DisablePhoneWarning;

    /**
     * @var string 开始时间，格式: HH:mm
     */
    public $BeginTime;

    /**
     * @var string 结束时间，格式: HH:mm
     */
    public $EndTime;

    /**
     * @var string 时区信息
     */
    public $TimeZone;

    /**
     * @var integer 漏洞等级控制位（对应DB的十进制存储）
     */
    public $ControlBit;

    /**
     * @var string 漏洞等级控制位二进制，每一位对应页面漏洞等级的开启关闭：低中高（0:关闭；1：开启），例如：101 → 同时勾选低+高
     */
    public $ControlBits;

    /**
     * @var integer 告警主机范围类型，0:全部主机，1:按所属项目选，2:按腾讯云标签选，3:按主机安全标签选，4:自选主机
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostRange;

    /**
     * @var integer 配置的告警范围主机个数，前端用此判断展示提示信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param integer $Type 事件告警类型；1：离线，2：木马，3：异常登录，4：爆破，5：漏洞（已拆分为9-12四种类型）6：高危命令，7：反弹sell，8：本地提权，9：应用漏洞，10：web-cms漏洞，11：应急漏洞，12：安全基线 ,13: 防篡改，14：恶意请求，15: 网络攻击，16：Windows系统漏洞，17：Linux软件漏洞，18：核心文件监控告警，19：客户端卸载告警。20：客户端离线告警
     * @param integer $DisablePhoneWarning 1: 关闭告警 0: 开启告警
     * @param string $BeginTime 开始时间，格式: HH:mm
     * @param string $EndTime 结束时间，格式: HH:mm
     * @param string $TimeZone 时区信息
     * @param integer $ControlBit 漏洞等级控制位（对应DB的十进制存储）
     * @param string $ControlBits 漏洞等级控制位二进制，每一位对应页面漏洞等级的开启关闭：低中高（0:关闭；1：开启），例如：101 → 同时勾选低+高
     * @param integer $HostRange 告警主机范围类型，0:全部主机，1:按所属项目选，2:按腾讯云标签选，3:按主机安全标签选，4:自选主机
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 配置的告警范围主机个数，前端用此判断展示提示信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DisablePhoneWarning",$param) and $param["DisablePhoneWarning"] !== null) {
            $this->DisablePhoneWarning = $param["DisablePhoneWarning"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("ControlBit",$param) and $param["ControlBit"] !== null) {
            $this->ControlBit = $param["ControlBit"];
        }

        if (array_key_exists("ControlBits",$param) and $param["ControlBits"] !== null) {
            $this->ControlBits = $param["ControlBits"];
        }

        if (array_key_exists("HostRange",$param) and $param["HostRange"] !== null) {
            $this->HostRange = $param["HostRange"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}

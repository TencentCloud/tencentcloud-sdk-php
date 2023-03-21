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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstanceKernelVersion请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID
 * @method string getTargetDBKernelVersion() 获取升级的目标内核版本号。可以通过接口DescribeDBVersions的返回字段AvailableUpgradeTarget获取。
 * @method void setTargetDBKernelVersion(string $TargetDBKernelVersion) 设置升级的目标内核版本号。可以通过接口DescribeDBVersions的返回字段AvailableUpgradeTarget获取。
 * @method integer getSwitchTag() 获取指定实例升级内核版本号完成后的切换时间。可选值，
0：立即切换（默认值）。
1：指定时间切换。
2：维护时间窗口内切换。
 * @method void setSwitchTag(integer $SwitchTag) 设置指定实例升级内核版本号完成后的切换时间。可选值，
0：立即切换（默认值）。
1：指定时间切换。
2：维护时间窗口内切换。
 * @method string getSwitchStartTime() 获取切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。
 * @method string getSwitchEndTime() 获取切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。SwitchStartTime和SwitchEndTime时间窗口不能小于30分钟。
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。SwitchStartTime和SwitchEndTime时间窗口不能小于30分钟。
 * @method boolean getDryRun() 获取是否对本次升级实例内核版本号操作执行预检查。可选值，
true：执行预检查操作，不升级内核版本号。检查项目包含请求参数、内核版本号兼容性、实例参数等。
false：发送正常请求（默认值），通过检查后直接升级内核版本号。
 * @method void setDryRun(boolean $DryRun) 设置是否对本次升级实例内核版本号操作执行预检查。可选值，
true：执行预检查操作，不升级内核版本号。检查项目包含请求参数、内核版本号兼容性、实例参数等。
false：发送正常请求（默认值），通过检查后直接升级内核版本号。
 */
class UpgradeDBInstanceKernelVersionRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $DBInstanceId;

    /**
     * @var string 升级的目标内核版本号。可以通过接口DescribeDBVersions的返回字段AvailableUpgradeTarget获取。
     */
    public $TargetDBKernelVersion;

    /**
     * @var integer 指定实例升级内核版本号完成后的切换时间。可选值，
0：立即切换（默认值）。
1：指定时间切换。
2：维护时间窗口内切换。
     */
    public $SwitchTag;

    /**
     * @var string 切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。
     */
    public $SwitchStartTime;

    /**
     * @var string 切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。SwitchStartTime和SwitchEndTime时间窗口不能小于30分钟。
     */
    public $SwitchEndTime;

    /**
     * @var boolean 是否对本次升级实例内核版本号操作执行预检查。可选值，
true：执行预检查操作，不升级内核版本号。检查项目包含请求参数、内核版本号兼容性、实例参数等。
false：发送正常请求（默认值），通过检查后直接升级内核版本号。
     */
    public $DryRun;

    /**
     * @param string $DBInstanceId 实例ID
     * @param string $TargetDBKernelVersion 升级的目标内核版本号。可以通过接口DescribeDBVersions的返回字段AvailableUpgradeTarget获取。
     * @param integer $SwitchTag 指定实例升级内核版本号完成后的切换时间。可选值，
0：立即切换（默认值）。
1：指定时间切换。
2：维护时间窗口内切换。
     * @param string $SwitchStartTime 切换开始时间，时间格式：HH:MM:SS，例如：01:00:00。当SwitchTag为0或2时，该参数失效。
     * @param string $SwitchEndTime 切换截止时间，时间格式：HH:MM:SS，例如：01:30:00。当SwitchTag为0或2时，该参数失效。SwitchStartTime和SwitchEndTime时间窗口不能小于30分钟。
     * @param boolean $DryRun 是否对本次升级实例内核版本号操作执行预检查。可选值，
true：执行预检查操作，不升级内核版本号。检查项目包含请求参数、内核版本号兼容性、实例参数等。
false：发送正常请求（默认值），通过检查后直接升级内核版本号。
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("TargetDBKernelVersion",$param) and $param["TargetDBKernelVersion"] !== null) {
            $this->TargetDBKernelVersion = $param["TargetDBKernelVersion"];
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}

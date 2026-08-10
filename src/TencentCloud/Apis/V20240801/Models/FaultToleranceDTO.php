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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API Key容错策略配置
 *
 * @method boolean getEnabled() 获取<p>是否启用API Key容错配置</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用API Key容错配置</p>
 * @method array getErrorCodes() 获取<p>异常判定状态码，固定3位数字或字母</p>
 * @method void setErrorCodes(array $ErrorCodes) 设置<p>异常判定状态码，固定3位数字或字母</p>
 * @method integer getErrorCount() 获取<p>连续异常次数</p><p>单位：次</p>
 * @method void setErrorCount(integer $ErrorCount) 设置<p>连续异常次数</p><p>单位：次</p>
 * @method integer getIsolationTime() 获取<p>隔离时长</p><p>单位：秒</p>
 * @method void setIsolationTime(integer $IsolationTime) 设置<p>隔离时长</p><p>单位：秒</p>
 * @method integer getMaxSwitchCount() 获取<p>最多切换次数</p><p>置0为不开启自动切换</p>
 * @method void setMaxSwitchCount(integer $MaxSwitchCount) 设置<p>最多切换次数</p><p>置0为不开启自动切换</p>
 * @method integer getSwitchTimeout() 获取<p>切换总时间预算</p><p>单位：秒</p>
 * @method void setSwitchTimeout(integer $SwitchTimeout) 设置<p>切换总时间预算</p><p>单位：秒</p>
 */
class FaultToleranceDTO extends AbstractModel
{
    /**
     * @var boolean <p>是否启用API Key容错配置</p>
     */
    public $Enabled;

    /**
     * @var array <p>异常判定状态码，固定3位数字或字母</p>
     */
    public $ErrorCodes;

    /**
     * @var integer <p>连续异常次数</p><p>单位：次</p>
     */
    public $ErrorCount;

    /**
     * @var integer <p>隔离时长</p><p>单位：秒</p>
     */
    public $IsolationTime;

    /**
     * @var integer <p>最多切换次数</p><p>置0为不开启自动切换</p>
     */
    public $MaxSwitchCount;

    /**
     * @var integer <p>切换总时间预算</p><p>单位：秒</p>
     */
    public $SwitchTimeout;

    /**
     * @param boolean $Enabled <p>是否启用API Key容错配置</p>
     * @param array $ErrorCodes <p>异常判定状态码，固定3位数字或字母</p>
     * @param integer $ErrorCount <p>连续异常次数</p><p>单位：次</p>
     * @param integer $IsolationTime <p>隔离时长</p><p>单位：秒</p>
     * @param integer $MaxSwitchCount <p>最多切换次数</p><p>置0为不开启自动切换</p>
     * @param integer $SwitchTimeout <p>切换总时间预算</p><p>单位：秒</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ErrorCodes",$param) and $param["ErrorCodes"] !== null) {
            $this->ErrorCodes = $param["ErrorCodes"];
        }

        if (array_key_exists("ErrorCount",$param) and $param["ErrorCount"] !== null) {
            $this->ErrorCount = $param["ErrorCount"];
        }

        if (array_key_exists("IsolationTime",$param) and $param["IsolationTime"] !== null) {
            $this->IsolationTime = $param["IsolationTime"];
        }

        if (array_key_exists("MaxSwitchCount",$param) and $param["MaxSwitchCount"] !== null) {
            $this->MaxSwitchCount = $param["MaxSwitchCount"];
        }

        if (array_key_exists("SwitchTimeout",$param) and $param["SwitchTimeout"] !== null) {
            $this->SwitchTimeout = $param["SwitchTimeout"];
        }
    }
}

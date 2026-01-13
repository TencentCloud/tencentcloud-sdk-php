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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoCalloutTask请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method integer getNotBefore() 获取任务起始时间戳，Unix 秒级时间戳
 * @method void setNotBefore(integer $NotBefore) 设置任务起始时间戳，Unix 秒级时间戳
 * @method array getCallees() 获取被叫号码列表
 * @method void setCallees(array $Callees) 设置被叫号码列表
 * @method array getCallers() 获取主叫号码列表
 * @method void setCallers(array $Callers) 设置主叫号码列表
 * @method integer getIvrId() 获取呼叫使用的 IVR Id，不填时需要填写 AIAgentId
 * @method void setIvrId(integer $IvrId) 设置呼叫使用的 IVR Id，不填时需要填写 AIAgentId
 * @method string getName() 获取任务名
 * @method void setName(string $Name) 设置任务名
 * @method string getDescription() 获取任务描述
 * @method void setDescription(string $Description) 设置任务描述
 * @method integer getNotAfter() 获取任务停止时间戳，Unix 秒级时间戳
 * @method void setNotAfter(integer $NotAfter) 设置任务停止时间戳，Unix 秒级时间戳
 * @method integer getTries() 获取最大尝试次数，1-3 次
 * @method void setTries(integer $Tries) 设置最大尝试次数，1-3 次
 * @method array getVariables() 获取自定义变量（仅高级版支持），CalleeAttributes 字段中使用相同变量会覆盖此处
 * @method void setVariables(array $Variables) 设置自定义变量（仅高级版支持），CalleeAttributes 字段中使用相同变量会覆盖此处
 * @method string getUUI() 获取用户自定义数据，CalleeAttributes 字段中使用 UUI 会覆盖此处
 * @method void setUUI(string $UUI) 设置用户自定义数据，CalleeAttributes 字段中使用 UUI 会覆盖此处
 * @method array getCalleeAttributes() 获取被叫属性
 * @method void setCalleeAttributes(array $CalleeAttributes) 设置被叫属性
 * @method string getTimeZone() 获取IANA 时区名称，参考 https://datatracker.ietf.org/doc/html/draft-ietf-netmod-iana-timezones
 * @method void setTimeZone(string $TimeZone) 设置IANA 时区名称，参考 https://datatracker.ietf.org/doc/html/draft-ietf-netmod-iana-timezones
 * @method array getAvailableTime() 获取可用时间段
 * @method void setAvailableTime(array $AvailableTime) 设置可用时间段
 * @method integer getAIAgentId() 获取智能体 ID，不填写时需要填写 IvrId
 * @method void setAIAgentId(integer $AIAgentId) 设置智能体 ID，不填写时需要填写 IvrId
 * @method integer getRetryInterval() 获取任务失败重试时间间隔，重试间隔 600秒～86400 秒
 * @method void setRetryInterval(integer $RetryInterval) 设置任务失败重试时间间隔，重试间隔 600秒～86400 秒
 * @method integer getMaxRingTimeoutSecond() 获取最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
 * @method void setMaxRingTimeoutSecond(integer $MaxRingTimeoutSecond) 设置最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
 */
class CreateAutoCalloutTaskRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var integer 任务起始时间戳，Unix 秒级时间戳
     */
    public $NotBefore;

    /**
     * @var array 被叫号码列表
     */
    public $Callees;

    /**
     * @var array 主叫号码列表
     */
    public $Callers;

    /**
     * @var integer 呼叫使用的 IVR Id，不填时需要填写 AIAgentId
     */
    public $IvrId;

    /**
     * @var string 任务名
     */
    public $Name;

    /**
     * @var string 任务描述
     */
    public $Description;

    /**
     * @var integer 任务停止时间戳，Unix 秒级时间戳
     */
    public $NotAfter;

    /**
     * @var integer 最大尝试次数，1-3 次
     */
    public $Tries;

    /**
     * @var array 自定义变量（仅高级版支持），CalleeAttributes 字段中使用相同变量会覆盖此处
     */
    public $Variables;

    /**
     * @var string 用户自定义数据，CalleeAttributes 字段中使用 UUI 会覆盖此处
     */
    public $UUI;

    /**
     * @var array 被叫属性
     */
    public $CalleeAttributes;

    /**
     * @var string IANA 时区名称，参考 https://datatracker.ietf.org/doc/html/draft-ietf-netmod-iana-timezones
     */
    public $TimeZone;

    /**
     * @var array 可用时间段
     */
    public $AvailableTime;

    /**
     * @var integer 智能体 ID，不填写时需要填写 IvrId
     */
    public $AIAgentId;

    /**
     * @var integer 任务失败重试时间间隔，重试间隔 600秒～86400 秒
     */
    public $RetryInterval;

    /**
     * @var integer 最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
     */
    public $MaxRingTimeoutSecond;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param integer $NotBefore 任务起始时间戳，Unix 秒级时间戳
     * @param array $Callees 被叫号码列表
     * @param array $Callers 主叫号码列表
     * @param integer $IvrId 呼叫使用的 IVR Id，不填时需要填写 AIAgentId
     * @param string $Name 任务名
     * @param string $Description 任务描述
     * @param integer $NotAfter 任务停止时间戳，Unix 秒级时间戳
     * @param integer $Tries 最大尝试次数，1-3 次
     * @param array $Variables 自定义变量（仅高级版支持），CalleeAttributes 字段中使用相同变量会覆盖此处
     * @param string $UUI 用户自定义数据，CalleeAttributes 字段中使用 UUI 会覆盖此处
     * @param array $CalleeAttributes 被叫属性
     * @param string $TimeZone IANA 时区名称，参考 https://datatracker.ietf.org/doc/html/draft-ietf-netmod-iana-timezones
     * @param array $AvailableTime 可用时间段
     * @param integer $AIAgentId 智能体 ID，不填写时需要填写 IvrId
     * @param integer $RetryInterval 任务失败重试时间间隔，重试间隔 600秒～86400 秒
     * @param integer $MaxRingTimeoutSecond 最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("NotBefore",$param) and $param["NotBefore"] !== null) {
            $this->NotBefore = $param["NotBefore"];
        }

        if (array_key_exists("Callees",$param) and $param["Callees"] !== null) {
            $this->Callees = $param["Callees"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("IvrId",$param) and $param["IvrId"] !== null) {
            $this->IvrId = $param["IvrId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NotAfter",$param) and $param["NotAfter"] !== null) {
            $this->NotAfter = $param["NotAfter"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }

        if (array_key_exists("CalleeAttributes",$param) and $param["CalleeAttributes"] !== null) {
            $this->CalleeAttributes = [];
            foreach ($param["CalleeAttributes"] as $key => $value){
                $obj = new CalleeAttribute();
                $obj->deserialize($value);
                array_push($this->CalleeAttributes, $obj);
            }
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("AvailableTime",$param) and $param["AvailableTime"] !== null) {
            $this->AvailableTime = [];
            foreach ($param["AvailableTime"] as $key => $value){
                $obj = new TimeRange();
                $obj->deserialize($value);
                array_push($this->AvailableTime, $obj);
            }
        }

        if (array_key_exists("AIAgentId",$param) and $param["AIAgentId"] !== null) {
            $this->AIAgentId = $param["AIAgentId"];
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("MaxRingTimeoutSecond",$param) and $param["MaxRingTimeoutSecond"] !== null) {
            $this->MaxRingTimeoutSecond = $param["MaxRingTimeoutSecond"];
        }
    }
}

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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源调用时序明细
 *
 * @method CallSource getCallSource() 获取<p>调用来源</p>
 * @method void setCallSource(CallSource $CallSource) 设置<p>调用来源</p>
 * @method string getDosageId() 获取<p>计量 ID，用于对账/回溯</p>
 * @method void setDosageId(string $DosageId) 设置<p>计量 ID，用于对账/回溯</p>
 * @method string getEventTime() 获取<p>调用时间戳（Unix 秒）</p>
 * @method void setEventTime(string $EventTime) 设置<p>调用时间戳（Unix 秒）</p>
 * @method ModelUsageDetail getModel() 获取<p>MODEL 域专属</p>
 * @method void setModel(ModelUsageDetail $Model) 设置<p>MODEL 域专属</p>
 * @method PluginUsageDetail getPlugin() 获取<p>PLUGIN 域专属</p>
 * @method void setPlugin(PluginUsageDetail $Plugin) 设置<p>PLUGIN 域专属</p>
 * @method string getTraceId() 获取<p>调用链路追踪 ID</p>
 * @method void setTraceId(string $TraceId) 设置<p>调用链路追踪 ID</p>
 * @method string getUserId() 获取<p>用户 ID</p>
 * @method void setUserId(string $UserId) 设置<p>用户 ID</p>
 */
class UsageDetail extends AbstractModel
{
    /**
     * @var CallSource <p>调用来源</p>
     */
    public $CallSource;

    /**
     * @var string <p>计量 ID，用于对账/回溯</p>
     */
    public $DosageId;

    /**
     * @var string <p>调用时间戳（Unix 秒）</p>
     */
    public $EventTime;

    /**
     * @var ModelUsageDetail <p>MODEL 域专属</p>
     */
    public $Model;

    /**
     * @var PluginUsageDetail <p>PLUGIN 域专属</p>
     */
    public $Plugin;

    /**
     * @var string <p>调用链路追踪 ID</p>
     */
    public $TraceId;

    /**
     * @var string <p>用户 ID</p>
     */
    public $UserId;

    /**
     * @param CallSource $CallSource <p>调用来源</p>
     * @param string $DosageId <p>计量 ID，用于对账/回溯</p>
     * @param string $EventTime <p>调用时间戳（Unix 秒）</p>
     * @param ModelUsageDetail $Model <p>MODEL 域专属</p>
     * @param PluginUsageDetail $Plugin <p>PLUGIN 域专属</p>
     * @param string $TraceId <p>调用链路追踪 ID</p>
     * @param string $UserId <p>用户 ID</p>
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
        if (array_key_exists("CallSource",$param) and $param["CallSource"] !== null) {
            $this->CallSource = new CallSource();
            $this->CallSource->deserialize($param["CallSource"]);
        }

        if (array_key_exists("DosageId",$param) and $param["DosageId"] !== null) {
            $this->DosageId = $param["DosageId"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new ModelUsageDetail();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("Plugin",$param) and $param["Plugin"] !== null) {
            $this->Plugin = new PluginUsageDetail();
            $this->Plugin->deserialize($param["Plugin"]);
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}

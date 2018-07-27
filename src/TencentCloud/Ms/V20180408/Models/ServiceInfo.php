<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getServiceEdition() 获取服务版本，基础版basic,专业版Professional
 * @method void setServiceEdition(string $ServiceEdition) 设置服务版本，基础版basic,专业版Professional
 * @method string getCallbackUrl() 获取任务处理完成后的反向通知回调地址,通知为POST请求，post信息{ItemId:"xxxduuyt-ugusg"}
 * @method void setCallbackUrl(string $CallbackUrl) 设置任务处理完成后的反向通知回调地址,通知为POST请求，post信息{ItemId:"xxxduuyt-ugusg"}
 * @method string getSubmitSource() 获取提交来源 YYB-应用宝 RDM-rdm MC-控制台 MAC_TOOL-mac工具 WIN_TOOL-window工具
 * @method void setSubmitSource(string $SubmitSource) 设置提交来源 YYB-应用宝 RDM-rdm MC-控制台 MAC_TOOL-mac工具 WIN_TOOL-window工具
 * @method integer getPlanId() 获取加固策略编号，如果不传则使用系统默认加固策略。如果指定的plan不存在会返回错误。
 * @method void setPlanId(integer $PlanId) 设置加固策略编号，如果不传则使用系统默认加固策略。如果指定的plan不存在会返回错误。
 */

/**
 *提交app加固的服务信息
 */
class ServiceInfo extends AbstractModel
{
    /**
     * @var string 服务版本，基础版basic,专业版Professional
     */
    public $ServiceEdition;

    /**
     * @var string 任务处理完成后的反向通知回调地址,通知为POST请求，post信息{ItemId:"xxxduuyt-ugusg"}
     */
    public $CallbackUrl;

    /**
     * @var string 提交来源 YYB-应用宝 RDM-rdm MC-控制台 MAC_TOOL-mac工具 WIN_TOOL-window工具
     */
    public $SubmitSource;

    /**
     * @var integer 加固策略编号，如果不传则使用系统默认加固策略。如果指定的plan不存在会返回错误。
     */
    public $PlanId;
    /**
     * @param string $ServiceEdition 服务版本，基础版basic,专业版Professional
     * @param string $CallbackUrl 任务处理完成后的反向通知回调地址,通知为POST请求，post信息{ItemId:"xxxduuyt-ugusg"}
     * @param string $SubmitSource 提交来源 YYB-应用宝 RDM-rdm MC-控制台 MAC_TOOL-mac工具 WIN_TOOL-window工具
     * @param integer $PlanId 加固策略编号，如果不传则使用系统默认加固策略。如果指定的plan不存在会返回错误。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ServiceEdition",$param) and $param["ServiceEdition"] !== null) {
            $this->ServiceEdition = $param["ServiceEdition"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("SubmitSource",$param) and $param["SubmitSource"] !== null) {
            $this->SubmitSource = $param["SubmitSource"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }
    }
}

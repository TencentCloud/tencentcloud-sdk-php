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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防火墙模板应用记录详情。
 *
 * @method InstanceIdentifier getInstance() 获取实例标识信息。
 * @method void setInstance(InstanceIdentifier $Instance) 设置实例标识信息。
 * @method string getApplyState() 获取防火墙模板应用状态。
 * @method void setApplyState(string $ApplyState) 设置防火墙模板应用状态。
 * @method string getErrorMessage() 获取防火墙模板应用错误信息。
 * @method void setErrorMessage(string $ErrorMessage) 设置防火墙模板应用错误信息。
 */
class FirewallTemplateApplyRecordDetail extends AbstractModel
{
    /**
     * @var InstanceIdentifier 实例标识信息。
     */
    public $Instance;

    /**
     * @var string 防火墙模板应用状态。
     */
    public $ApplyState;

    /**
     * @var string 防火墙模板应用错误信息。
     */
    public $ErrorMessage;

    /**
     * @param InstanceIdentifier $Instance 实例标识信息。
     * @param string $ApplyState 防火墙模板应用状态。
     * @param string $ErrorMessage 防火墙模板应用错误信息。
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
        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new InstanceIdentifier();
            $this->Instance->deserialize($param["Instance"]);
        }

        if (array_key_exists("ApplyState",$param) and $param["ApplyState"] !== null) {
            $this->ApplyState = $param["ApplyState"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}

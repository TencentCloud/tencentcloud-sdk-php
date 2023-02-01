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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 催办接口返回详细信息
 *
 * @method boolean getCanRemind() 获取是否能够催办
 * @method void setCanRemind(boolean $CanRemind) 设置是否能够催办
 * @method string getFlowId() 获取合同id
 * @method void setFlowId(string $FlowId) 设置合同id
 * @method string getRemindMessage() 获取催办详情
 * @method void setRemindMessage(string $RemindMessage) 设置催办详情
 */
class RemindFlowRecords extends AbstractModel
{
    /**
     * @var boolean 是否能够催办
     */
    public $CanRemind;

    /**
     * @var string 合同id
     */
    public $FlowId;

    /**
     * @var string 催办详情
     */
    public $RemindMessage;

    /**
     * @param boolean $CanRemind 是否能够催办
     * @param string $FlowId 合同id
     * @param string $RemindMessage 催办详情
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
        if (array_key_exists("CanRemind",$param) and $param["CanRemind"] !== null) {
            $this->CanRemind = $param["CanRemind"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("RemindMessage",$param) and $param["RemindMessage"] !== null) {
            $this->RemindMessage = $param["RemindMessage"];
        }
    }
}

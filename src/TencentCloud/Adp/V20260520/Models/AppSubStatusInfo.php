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
 * 应用子状态信息
 *
 * @method string getApprovalId() 获取审批记录ID (当sub_status_list包含PUBLISH_APPROVING时有效)
 * @method void setApprovalId(string $ApprovalId) 设置审批记录ID (当sub_status_list包含PUBLISH_APPROVING时有效)
 * @method array getSubStatusList() 获取应用子状态列表 (可能同时处于多个子状态)
 * @method void setSubStatusList(array $SubStatusList) 设置应用子状态列表 (可能同时处于多个子状态)
 */
class AppSubStatusInfo extends AbstractModel
{
    /**
     * @var string 审批记录ID (当sub_status_list包含PUBLISH_APPROVING时有效)
     */
    public $ApprovalId;

    /**
     * @var array 应用子状态列表 (可能同时处于多个子状态)
     */
    public $SubStatusList;

    /**
     * @param string $ApprovalId 审批记录ID (当sub_status_list包含PUBLISH_APPROVING时有效)
     * @param array $SubStatusList 应用子状态列表 (可能同时处于多个子状态)
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
        if (array_key_exists("ApprovalId",$param) and $param["ApprovalId"] !== null) {
            $this->ApprovalId = $param["ApprovalId"];
        }

        if (array_key_exists("SubStatusList",$param) and $param["SubStatusList"] !== null) {
            $this->SubStatusList = $param["SubStatusList"];
        }
    }
}

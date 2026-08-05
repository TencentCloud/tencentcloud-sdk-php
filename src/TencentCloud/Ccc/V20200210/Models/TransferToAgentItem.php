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
 * 转接智能体配置
 *
 * @method string getTransferToAgentName() 获取<p>转智能体的function calling 名称</p>
 * @method void setTransferToAgentName(string $TransferToAgentName) 设置<p>转智能体的function calling 名称</p>
 * @method string getTransferToAgentDesc() 获取<p>转智能体描述</p>
 * @method void setTransferToAgentDesc(string $TransferToAgentDesc) 设置<p>转智能体描述</p>
 * @method integer getTransferToAgentId() 获取<p>目标智能体ID</p>
 * @method void setTransferToAgentId(integer $TransferToAgentId) 设置<p>目标智能体ID</p>
 */
class TransferToAgentItem extends AbstractModel
{
    /**
     * @var string <p>转智能体的function calling 名称</p>
     */
    public $TransferToAgentName;

    /**
     * @var string <p>转智能体描述</p>
     */
    public $TransferToAgentDesc;

    /**
     * @var integer <p>目标智能体ID</p>
     */
    public $TransferToAgentId;

    /**
     * @param string $TransferToAgentName <p>转智能体的function calling 名称</p>
     * @param string $TransferToAgentDesc <p>转智能体描述</p>
     * @param integer $TransferToAgentId <p>目标智能体ID</p>
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
        if (array_key_exists("TransferToAgentName",$param) and $param["TransferToAgentName"] !== null) {
            $this->TransferToAgentName = $param["TransferToAgentName"];
        }

        if (array_key_exists("TransferToAgentDesc",$param) and $param["TransferToAgentDesc"] !== null) {
            $this->TransferToAgentDesc = $param["TransferToAgentDesc"];
        }

        if (array_key_exists("TransferToAgentId",$param) and $param["TransferToAgentId"] !== null) {
            $this->TransferToAgentId = $param["TransferToAgentId"];
        }
    }
}

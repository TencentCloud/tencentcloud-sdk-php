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
 * Agent发布项目详情
 *
 * @method string getItemName() 获取<p>名称</p>
 * @method void setItemName(string $ItemName) 设置<p>名称</p>
 * @method string getUpdateTime() 获取<p>更新时间, unix 秒时间戳 (s)</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间, unix 秒时间戳 (s)</p>
 * @method string getActionDescription() 获取<p>动作描述</p>
 * @method void setActionDescription(string $ActionDescription) 设置<p>动作描述</p>
 * @method string getReleaseMessage() 获取<p>变更为 测试</p>
 * @method void setReleaseMessage(string $ReleaseMessage) 设置<p>变更为 测试</p>
 */
class AgentRelease extends AbstractModel
{
    /**
     * @var string <p>名称</p>
     */
    public $ItemName;

    /**
     * @var string <p>更新时间, unix 秒时间戳 (s)</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>动作描述</p>
     */
    public $ActionDescription;

    /**
     * @var string <p>变更为 测试</p>
     */
    public $ReleaseMessage;

    /**
     * @param string $ItemName <p>名称</p>
     * @param string $UpdateTime <p>更新时间, unix 秒时间戳 (s)</p>
     * @param string $ActionDescription <p>动作描述</p>
     * @param string $ReleaseMessage <p>变更为 测试</p>
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
        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ActionDescription",$param) and $param["ActionDescription"] !== null) {
            $this->ActionDescription = $param["ActionDescription"];
        }

        if (array_key_exists("ReleaseMessage",$param) and $param["ReleaseMessage"] !== null) {
            $this->ReleaseMessage = $param["ReleaseMessage"];
        }
    }
}

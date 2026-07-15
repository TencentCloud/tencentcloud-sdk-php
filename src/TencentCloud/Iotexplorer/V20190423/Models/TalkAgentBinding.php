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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能体绑定配置
 *
 * @method string getBindingScope() 获取product 或 device
 * @method void setBindingScope(string $BindingScope) 设置product 或 device
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getAgentId() 获取智能体ID
 * @method void setAgentId(string $AgentId) 设置智能体ID
 * @method integer getPriority() 获取绑定优先级
 * @method void setPriority(integer $Priority) 设置绑定优先级
 * @method integer getCreateTime() 获取创建时间，Unix 秒
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，Unix 秒
 * @method integer getUpdateTime() 获取更新时间，Unix 秒
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，Unix 秒
 */
class TalkAgentBinding extends AbstractModel
{
    /**
     * @var string product 或 device
     */
    public $BindingScope;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 智能体ID
     */
    public $AgentId;

    /**
     * @var integer 绑定优先级
     */
    public $Priority;

    /**
     * @var integer 创建时间，Unix 秒
     */
    public $CreateTime;

    /**
     * @var integer 更新时间，Unix 秒
     */
    public $UpdateTime;

    /**
     * @param string $BindingScope product 或 device
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $AgentId 智能体ID
     * @param integer $Priority 绑定优先级
     * @param integer $CreateTime 创建时间，Unix 秒
     * @param integer $UpdateTime 更新时间，Unix 秒
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
        if (array_key_exists("BindingScope",$param) and $param["BindingScope"] !== null) {
            $this->BindingScope = $param["BindingScope"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

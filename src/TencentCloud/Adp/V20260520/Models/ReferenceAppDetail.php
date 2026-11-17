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
 * 引用的来源应用详情
 *
 * @method string getName() 获取<p>来源应用当前名称</p>
 * @method void setName(string $Name) 设置<p>来源应用当前名称</p>
 * @method integer getAppMode() 获取<p>来源应用模式</p><p>枚举值：</p><ul><li>1： 标准模式</li><li>2： Multi-Agent模式</li><li>3： 单工作流模式</li><li>4： Claw模式</li></ul>
 * @method void setAppMode(integer $AppMode) 设置<p>来源应用模式</p><p>枚举值：</p><ul><li>1： 标准模式</li><li>2： Multi-Agent模式</li><li>3： 单工作流模式</li><li>4： Claw模式</li></ul>
 * @method string getMainAgentName() 获取<p>主 Agent 名称</p>
 * @method void setMainAgentName(string $MainAgentName) 设置<p>主 Agent 名称</p>
 * @method array getSubAgentNameList() 获取<p>子 Agent 名称列表</p>
 * @method void setSubAgentNameList(array $SubAgentNameList) 设置<p>子 Agent 名称列表</p>
 * @method string getCreator() 获取<p>来源应用创建人</p>
 * @method void setCreator(string $Creator) 设置<p>来源应用创建人</p>
 * @method string getUpdateTime() 获取<p>来源应用修改时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>来源应用修改时间</p>
 */
class ReferenceAppDetail extends AbstractModel
{
    /**
     * @var string <p>来源应用当前名称</p>
     */
    public $Name;

    /**
     * @var integer <p>来源应用模式</p><p>枚举值：</p><ul><li>1： 标准模式</li><li>2： Multi-Agent模式</li><li>3： 单工作流模式</li><li>4： Claw模式</li></ul>
     */
    public $AppMode;

    /**
     * @var string <p>主 Agent 名称</p>
     */
    public $MainAgentName;

    /**
     * @var array <p>子 Agent 名称列表</p>
     */
    public $SubAgentNameList;

    /**
     * @var string <p>来源应用创建人</p>
     */
    public $Creator;

    /**
     * @var string <p>来源应用修改时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $Name <p>来源应用当前名称</p>
     * @param integer $AppMode <p>来源应用模式</p><p>枚举值：</p><ul><li>1： 标准模式</li><li>2： Multi-Agent模式</li><li>3： 单工作流模式</li><li>4： Claw模式</li></ul>
     * @param string $MainAgentName <p>主 Agent 名称</p>
     * @param array $SubAgentNameList <p>子 Agent 名称列表</p>
     * @param string $Creator <p>来源应用创建人</p>
     * @param string $UpdateTime <p>来源应用修改时间</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AppMode",$param) and $param["AppMode"] !== null) {
            $this->AppMode = $param["AppMode"];
        }

        if (array_key_exists("MainAgentName",$param) and $param["MainAgentName"] !== null) {
            $this->MainAgentName = $param["MainAgentName"];
        }

        if (array_key_exists("SubAgentNameList",$param) and $param["SubAgentNameList"] !== null) {
            $this->SubAgentNameList = $param["SubAgentNameList"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

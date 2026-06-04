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
 * Agent 发布预览信息
 *
 * @method string getAgentId() 获取<p>AgentID</p>
 * @method void setAgentId(string $AgentId) 设置<p>AgentID</p>
 * @method string getName() 获取<p>Agent名称</p>
 * @method void setName(string $Name) 设置<p>Agent名称</p>
 * @method string getUpdateTime() 获取<p>更新时间, unix 秒时间戳 (s)</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间, unix 秒时间戳 (s)</p>
 * @method integer getAction() 获取<p>状态, 状态值：1:新增, 2:修改, 3:删除</p>
 * @method void setAction(integer $Action) 设置<p>状态, 状态值：1:新增, 2:修改, 3:删除</p>
 * @method string getActionDescription() 获取<p>动作描述</p>
 * @method void setActionDescription(string $ActionDescription) 设置<p>动作描述</p>
 * @method string getMessage() 获取<p>发布消息</p>
 * @method void setMessage(string $Message) 设置<p>发布消息</p>
 * @method array getReleaseList() 获取<p>发布详情</p>
 * @method void setReleaseList(array $ReleaseList) 设置<p>发布详情</p>
 */
class AgentReleasePreview extends AbstractModel
{
    /**
     * @var string <p>AgentID</p>
     */
    public $AgentId;

    /**
     * @var string <p>Agent名称</p>
     */
    public $Name;

    /**
     * @var string <p>更新时间, unix 秒时间戳 (s)</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>状态, 状态值：1:新增, 2:修改, 3:删除</p>
     */
    public $Action;

    /**
     * @var string <p>动作描述</p>
     */
    public $ActionDescription;

    /**
     * @var string <p>发布消息</p>
     */
    public $Message;

    /**
     * @var array <p>发布详情</p>
     */
    public $ReleaseList;

    /**
     * @param string $AgentId <p>AgentID</p>
     * @param string $Name <p>Agent名称</p>
     * @param string $UpdateTime <p>更新时间, unix 秒时间戳 (s)</p>
     * @param integer $Action <p>状态, 状态值：1:新增, 2:修改, 3:删除</p>
     * @param string $ActionDescription <p>动作描述</p>
     * @param string $Message <p>发布消息</p>
     * @param array $ReleaseList <p>发布详情</p>
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionDescription",$param) and $param["ActionDescription"] !== null) {
            $this->ActionDescription = $param["ActionDescription"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ReleaseList",$param) and $param["ReleaseList"] !== null) {
            $this->ReleaseList = [];
            foreach ($param["ReleaseList"] as $key => $value){
                $obj = new AgentRelease();
                $obj->deserialize($value);
                array_push($this->ReleaseList, $obj);
            }
        }
    }
}

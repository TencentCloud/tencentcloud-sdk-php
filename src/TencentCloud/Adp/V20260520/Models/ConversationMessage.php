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
 * Message 消息信息
 *
 * @method string getConversationId() 获取<p>会话 ID</p>
 * @method void setConversationId(string $ConversationId) 设置<p>会话 ID</p>
 * @method string getIcon() 获取<p>消息图标</p>
 * @method void setIcon(string $Icon) 设置<p>消息图标</p>
 * @method string getMessageId() 获取<p>消息 ID</p>
 * @method void setMessageId(string $MessageId) 设置<p>消息 ID</p>
 * @method string getName() 获取<p>消息名称</p>
 * @method void setName(string $Name) 设置<p>消息名称</p>
 * @method string getRecordId() 获取<p>记录 ID</p>
 * @method void setRecordId(string $RecordId) 设置<p>记录 ID</p>
 * @method string getRole() 获取<p>消息角色</p>
 * @method void setRole(string $Role) 设置<p>消息角色</p>
 * @method string getStatus() 获取<p>消息状态，pending:待执行，processing:处理中，success:已完成，failed:处理失败，stop:已取消</p>
 * @method void setStatus(string $Status) 设置<p>消息状态，pending:待执行，processing:处理中，success:已完成，failed:处理失败，stop:已取消</p>
 * @method string getStatusDesc() 获取<p>状态描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>状态描述</p>
 * @method string getTitle() 获取<p>消息标题</p>
 * @method void setTitle(string $Title) 设置<p>消息标题</p>
 * @method array getContentList() 获取<p>消息内容列表</p>
 * @method void setContentList(array $ContentList) 设置<p>消息内容列表</p>
 * @method array getContents() 获取<p>消息内容列表</p>
 * @method void setContents(array $Contents) 设置<p>消息内容列表</p>
 * @method string getType() 获取<p>类型</p>
 * @method void setType(string $Type) 设置<p>类型</p>
 */
class ConversationMessage extends AbstractModel
{
    /**
     * @var string <p>会话 ID</p>
     */
    public $ConversationId;

    /**
     * @var string <p>消息图标</p>
     */
    public $Icon;

    /**
     * @var string <p>消息 ID</p>
     */
    public $MessageId;

    /**
     * @var string <p>消息名称</p>
     */
    public $Name;

    /**
     * @var string <p>记录 ID</p>
     */
    public $RecordId;

    /**
     * @var string <p>消息角色</p>
     */
    public $Role;

    /**
     * @var string <p>消息状态，pending:待执行，processing:处理中，success:已完成，failed:处理失败，stop:已取消</p>
     */
    public $Status;

    /**
     * @var string <p>状态描述</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>消息标题</p>
     */
    public $Title;

    /**
     * @var array <p>消息内容列表</p>
     */
    public $ContentList;

    /**
     * @var array <p>消息内容列表</p>
     */
    public $Contents;

    /**
     * @var string <p>类型</p>
     */
    public $Type;

    /**
     * @param string $ConversationId <p>会话 ID</p>
     * @param string $Icon <p>消息图标</p>
     * @param string $MessageId <p>消息 ID</p>
     * @param string $Name <p>消息名称</p>
     * @param string $RecordId <p>记录 ID</p>
     * @param string $Role <p>消息角色</p>
     * @param string $Status <p>消息状态，pending:待执行，processing:处理中，success:已完成，failed:处理失败，stop:已取消</p>
     * @param string $StatusDesc <p>状态描述</p>
     * @param string $Title <p>消息标题</p>
     * @param array $ContentList <p>消息内容列表</p>
     * @param array $Contents <p>消息内容列表</p>
     * @param string $Type <p>类型</p>
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
        if (array_key_exists("ConversationId",$param) and $param["ConversationId"] !== null) {
            $this->ConversationId = $param["ConversationId"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("ContentList",$param) and $param["ContentList"] !== null) {
            $this->ContentList = [];
            foreach ($param["ContentList"] as $key => $value){
                $obj = new ConversationContent();
                $obj->deserialize($value);
                array_push($this->ContentList, $obj);
            }
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = [];
            foreach ($param["Contents"] as $key => $value){
                $obj = new ConversationContent();
                $obj->deserialize($value);
                array_push($this->Contents, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

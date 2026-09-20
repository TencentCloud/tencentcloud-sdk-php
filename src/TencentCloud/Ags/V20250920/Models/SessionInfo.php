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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话信息
 *
 * @method string getSessionId() 获取<p>会话 ID。</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID。</p>
 * @method string getSpaceId() 获取<p>会话所属空间 ID。</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>会话所属空间 ID。</p>
 * @method SessionState getState() 获取<p>Session 快照状态</p>
 * @method void setState(SessionState $State) 设置<p>Session 快照状态</p>
 * @method array getMetadata() 获取<p>会话元数据，以键值对数组形式表示。每个元素包含 Metadata 名称和对应值，最多支持 64 项。</p>
 * @method void setMetadata(array $Metadata) 设置<p>会话元数据，以键值对数组形式表示。每个元素包含 Metadata 名称和对应值，最多支持 64 项。</p>
 * @method string getAgentId() 获取<p>Agent ID。</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent ID。</p>
 * @method string getUserId() 获取<p>用户 ID。</p>
 * @method void setUserId(string $UserId) 设置<p>用户 ID。</p>
 * @method string getTitle() 获取<p>会话标题。</p>
 * @method void setTitle(string $Title) 设置<p>会话标题。</p>
 * @method integer getEventCount() 获取<p>事件数量。</p>
 * @method void setEventCount(integer $EventCount) 设置<p>事件数量。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
 * @method string getUpdateTime() 获取<p>更新时间。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间。</p>
 */
class SessionInfo extends AbstractModel
{
    /**
     * @var string <p>会话 ID。</p>
     */
    public $SessionId;

    /**
     * @var string <p>会话所属空间 ID。</p>
     */
    public $SpaceId;

    /**
     * @var SessionState <p>Session 快照状态</p>
     */
    public $State;

    /**
     * @var array <p>会话元数据，以键值对数组形式表示。每个元素包含 Metadata 名称和对应值，最多支持 64 项。</p>
     */
    public $Metadata;

    /**
     * @var string <p>Agent ID。</p>
     * @deprecated
     */
    public $AgentId;

    /**
     * @var string <p>用户 ID。</p>
     */
    public $UserId;

    /**
     * @var string <p>会话标题。</p>
     */
    public $Title;

    /**
     * @var integer <p>事件数量。</p>
     */
    public $EventCount;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间。</p>
     */
    public $UpdateTime;

    /**
     * @param string $SessionId <p>会话 ID。</p>
     * @param string $SpaceId <p>会话所属空间 ID。</p>
     * @param SessionState $State <p>Session 快照状态</p>
     * @param array $Metadata <p>会话元数据，以键值对数组形式表示。每个元素包含 Metadata 名称和对应值，最多支持 64 项。</p>
     * @param string $AgentId <p>Agent ID。</p>
     * @param string $UserId <p>用户 ID。</p>
     * @param string $Title <p>会话标题。</p>
     * @param integer $EventCount <p>事件数量。</p>
     * @param string $CreateTime <p>创建时间。</p>
     * @param string $UpdateTime <p>更新时间。</p>
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = new SessionState();
            $this->State->deserialize($param["State"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = [];
            foreach ($param["Metadata"] as $key => $value){
                $obj = new MetadataVar();
                $obj->deserialize($value);
                array_push($this->Metadata, $obj);
            }
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

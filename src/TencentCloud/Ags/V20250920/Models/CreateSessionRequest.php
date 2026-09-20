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
 * CreateSession请求参数结构体
 *
 * @method string getSpaceId() 获取<p>会话所属空间 ID。</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>会话所属空间 ID。</p>
 * @method string getUserId() 获取<p>用户 ID。可通过调用方业务系统接口获取。</p>
 * @method void setUserId(string $UserId) 设置<p>用户 ID。可通过调用方业务系统接口获取。</p>
 * @method string getAgentId() 获取<p>Agent ID。可选。</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent ID。可选。</p>
 * @method string getSessionId() 获取<p>会话 ID。可通过 CreateSession 或 DescribeSessions 接口获取。</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID。可通过 CreateSession 或 DescribeSessions 接口获取。</p>
 * @method string getTitle() 获取<p>会话标题，最大长度 256 字符。</p>
 * @method void setTitle(string $Title) 设置<p>会话标题，最大长度 256 字符。</p>
 * @method SessionState getState() 获取<p>初始会话状态。</p>
 * @method void setState(SessionState $State) 设置<p>初始会话状态。</p>
 * @method array getMetadata() 获取<p>创建会话时设置的初始元数据，以键值对数组形式表示。每个元素包含 Metadata 名称和对应值。</p><p>入参限制：本参数可选，最多支持 64 项。Name 不能为空或重复，最大长度为 253 字节；Value 最大长度为 1024 字节，允许为空字符串。Metadata 序列化后的总大小不能超过 64 KiB。</p>
 * @method void setMetadata(array $Metadata) 设置<p>创建会话时设置的初始元数据，以键值对数组形式表示。每个元素包含 Metadata 名称和对应值。</p><p>入参限制：本参数可选，最多支持 64 项。Name 不能为空或重复，最大长度为 253 字节；Value 最大长度为 1024 字节，允许为空字符串。Metadata 序列化后的总大小不能超过 64 KiB。</p>
 */
class CreateSessionRequest extends AbstractModel
{
    /**
     * @var string <p>会话所属空间 ID。</p>
     */
    public $SpaceId;

    /**
     * @var string <p>用户 ID。可通过调用方业务系统接口获取。</p>
     */
    public $UserId;

    /**
     * @var string <p>Agent ID。可选。</p>
     * @deprecated
     */
    public $AgentId;

    /**
     * @var string <p>会话 ID。可通过 CreateSession 或 DescribeSessions 接口获取。</p>
     */
    public $SessionId;

    /**
     * @var string <p>会话标题，最大长度 256 字符。</p>
     */
    public $Title;

    /**
     * @var SessionState <p>初始会话状态。</p>
     */
    public $State;

    /**
     * @var array <p>创建会话时设置的初始元数据，以键值对数组形式表示。每个元素包含 Metadata 名称和对应值。</p><p>入参限制：本参数可选，最多支持 64 项。Name 不能为空或重复，最大长度为 253 字节；Value 最大长度为 1024 字节，允许为空字符串。Metadata 序列化后的总大小不能超过 64 KiB。</p>
     */
    public $Metadata;

    /**
     * @param string $SpaceId <p>会话所属空间 ID。</p>
     * @param string $UserId <p>用户 ID。可通过调用方业务系统接口获取。</p>
     * @param string $AgentId <p>Agent ID。可选。</p>
     * @param string $SessionId <p>会话 ID。可通过 CreateSession 或 DescribeSessions 接口获取。</p>
     * @param string $Title <p>会话标题，最大长度 256 字符。</p>
     * @param SessionState $State <p>初始会话状态。</p>
     * @param array $Metadata <p>创建会话时设置的初始元数据，以键值对数组形式表示。每个元素包含 Metadata 名称和对应值。</p><p>入参限制：本参数可选，最多支持 64 项。Name 不能为空或重复，最大长度为 253 字节；Value 最大长度为 1024 字节，允许为空字符串。Metadata 序列化后的总大小不能超过 64 KiB。</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
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
    }
}

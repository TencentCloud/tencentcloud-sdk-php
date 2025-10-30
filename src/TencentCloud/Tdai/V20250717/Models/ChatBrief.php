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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话信息
 *
 * @method integer getAppId() 获取主账号Id
 * @method void setAppId(integer $AppId) 设置主账号Id
 * @method string getUin() 获取主账号uin
 * @method void setUin(string $Uin) 设置主账号uin
 * @method string getOwnerUin() 获取子账号uin
 * @method void setOwnerUin(string $OwnerUin) 设置子账号uin
 * @method string getInstanceId() 获取智能体实例ID
 * @method void setInstanceId(string $InstanceId) 设置智能体实例ID
 * @method string getChatId() 获取会话ID
 * @method void setChatId(string $ChatId) 设置会话ID
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method string getTitle() 获取会话标题
 * @method void setTitle(string $Title) 设置会话标题
 * @method string getStatus() 获取会话状态
 * @method void setStatus(string $Status) 设置会话状态
 * @method string getLastStreamingId() 获取最后一条流式ID
 * @method void setLastStreamingId(string $LastStreamingId) 设置最后一条流式ID
 * @method integer getLastStreamingTokenId() 获取最后一条流式TokenID
 * @method void setLastStreamingTokenId(integer $LastStreamingTokenId) 设置最后一条流式TokenID
 */
class ChatBrief extends AbstractModel
{
    /**
     * @var integer 主账号Id
     */
    public $AppId;

    /**
     * @var string 主账号uin
     */
    public $Uin;

    /**
     * @var string 子账号uin
     */
    public $OwnerUin;

    /**
     * @var string 智能体实例ID
     */
    public $InstanceId;

    /**
     * @var string 会话ID
     */
    public $ChatId;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var string 会话标题
     */
    public $Title;

    /**
     * @var string 会话状态
     */
    public $Status;

    /**
     * @var string 最后一条流式ID
     */
    public $LastStreamingId;

    /**
     * @var integer 最后一条流式TokenID
     */
    public $LastStreamingTokenId;

    /**
     * @param integer $AppId 主账号Id
     * @param string $Uin 主账号uin
     * @param string $OwnerUin 子账号uin
     * @param string $InstanceId 智能体实例ID
     * @param string $ChatId 会话ID
     * @param integer $CreateTime 创建时间
     * @param string $Title 会话标题
     * @param string $Status 会话状态
     * @param string $LastStreamingId 最后一条流式ID
     * @param integer $LastStreamingTokenId 最后一条流式TokenID
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastStreamingId",$param) and $param["LastStreamingId"] !== null) {
            $this->LastStreamingId = $param["LastStreamingId"];
        }

        if (array_key_exists("LastStreamingTokenId",$param) and $param["LastStreamingTokenId"] !== null) {
            $this->LastStreamingTokenId = $param["LastStreamingTokenId"];
        }
    }
}

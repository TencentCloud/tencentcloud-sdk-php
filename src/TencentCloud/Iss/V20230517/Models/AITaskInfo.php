<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI任务信息
 *
 * @method string getTaskId() 获取AI 任务 ID
 * @method void setTaskId(string $TaskId) 设置AI 任务 ID
 * @method string getName() 获取AI 任务名称
 * @method void setName(string $Name) 设置AI 任务名称
 * @method string getDesc() 获取AI 任务描述
 * @method void setDesc(string $Desc) 设置AI 任务描述
 * @method string getStatus() 获取AI 任务状态。"on"代表开启了 AI 分析任务，"off"代表停止 AI 分析任务
 * @method void setStatus(string $Status) 设置AI 任务状态。"on"代表开启了 AI 分析任务，"off"代表停止 AI 分析任务
 * @method array getChannelList() 获取通道 ID 列表
 * @method void setChannelList(array $ChannelList) 设置通道 ID 列表
 * @method string getCallbackUrl() 获取AI 结果回调地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置AI 结果回调地址
 * @method array getTemplates() 获取AI 配置列表
 * @method void setTemplates(array $Templates) 设置AI 配置列表
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getUpdatedTime() 获取更新时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
 */
class AITaskInfo extends AbstractModel
{
    /**
     * @var string AI 任务 ID
     */
    public $TaskId;

    /**
     * @var string AI 任务名称
     */
    public $Name;

    /**
     * @var string AI 任务描述
     */
    public $Desc;

    /**
     * @var string AI 任务状态。"on"代表开启了 AI 分析任务，"off"代表停止 AI 分析任务
     */
    public $Status;

    /**
     * @var array 通道 ID 列表
     */
    public $ChannelList;

    /**
     * @var string AI 结果回调地址
     */
    public $CallbackUrl;

    /**
     * @var array AI 配置列表
     */
    public $Templates;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
     */
    public $UpdatedTime;

    /**
     * @param string $TaskId AI 任务 ID
     * @param string $Name AI 任务名称
     * @param string $Desc AI 任务描述
     * @param string $Status AI 任务状态。"on"代表开启了 AI 分析任务，"off"代表停止 AI 分析任务
     * @param array $ChannelList 通道 ID 列表
     * @param string $CallbackUrl AI 结果回调地址
     * @param array $Templates AI 配置列表
     * @param string $CreatedTime 创建时间
     * @param string $UpdatedTime 更新时间
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ChannelList",$param) and $param["ChannelList"] !== null) {
            $this->ChannelList = $param["ChannelList"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Templates",$param) and $param["Templates"] !== null) {
            $this->Templates = [];
            foreach ($param["Templates"] as $key => $value){
                $obj = new AITemplates();
                $obj->deserialize($value);
                array_push($this->Templates, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}

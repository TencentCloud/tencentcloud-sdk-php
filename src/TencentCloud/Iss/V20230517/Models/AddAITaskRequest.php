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
 * AddAITask请求参数结构体
 *
 * @method string getName() 获取AI 任务名称。仅支持中文、英文、数字、_、-，长度不超过32个字符
 * @method void setName(string $Name) 设置AI 任务名称。仅支持中文、英文、数字、_、-，长度不超过32个字符
 * @method array getChannelList() 获取通道 ID 列表。不能添加存在于其他 AI 任务的通道，限制1000个通道。
 * @method void setChannelList(array $ChannelList) 设置通道 ID 列表。不能添加存在于其他 AI 任务的通道，限制1000个通道。
 * @method array getTemplates() 获取AI 配置列表
 * @method void setTemplates(array $Templates) 设置AI 配置列表
 * @method string getDesc() 获取AI 任务描述。仅支持中文、英文、数字、_、-，长度不超过128个字符
 * @method void setDesc(string $Desc) 设置AI 任务描述。仅支持中文、英文、数字、_、-，长度不超过128个字符
 * @method string getCallbackUrl() 获取AI 结果回调地址。类似 "http://ip:port/xxx或者https://domain/xxx
 * @method void setCallbackUrl(string $CallbackUrl) 设置AI 结果回调地址。类似 "http://ip:port/xxx或者https://domain/xxx
 * @method boolean getIsStartTheTask() 获取是否立即开启 AI 任务。"true"代表立即开启 AI 任务，"false"代表暂不开启 AI 任务，默认为 false。
 * @method void setIsStartTheTask(boolean $IsStartTheTask) 设置是否立即开启 AI 任务。"true"代表立即开启 AI 任务，"false"代表暂不开启 AI 任务，默认为 false。
 */
class AddAITaskRequest extends AbstractModel
{
    /**
     * @var string AI 任务名称。仅支持中文、英文、数字、_、-，长度不超过32个字符
     */
    public $Name;

    /**
     * @var array 通道 ID 列表。不能添加存在于其他 AI 任务的通道，限制1000个通道。
     */
    public $ChannelList;

    /**
     * @var array AI 配置列表
     */
    public $Templates;

    /**
     * @var string AI 任务描述。仅支持中文、英文、数字、_、-，长度不超过128个字符
     */
    public $Desc;

    /**
     * @var string AI 结果回调地址。类似 "http://ip:port/xxx或者https://domain/xxx
     */
    public $CallbackUrl;

    /**
     * @var boolean 是否立即开启 AI 任务。"true"代表立即开启 AI 任务，"false"代表暂不开启 AI 任务，默认为 false。
     */
    public $IsStartTheTask;

    /**
     * @param string $Name AI 任务名称。仅支持中文、英文、数字、_、-，长度不超过32个字符
     * @param array $ChannelList 通道 ID 列表。不能添加存在于其他 AI 任务的通道，限制1000个通道。
     * @param array $Templates AI 配置列表
     * @param string $Desc AI 任务描述。仅支持中文、英文、数字、_、-，长度不超过128个字符
     * @param string $CallbackUrl AI 结果回调地址。类似 "http://ip:port/xxx或者https://domain/xxx
     * @param boolean $IsStartTheTask 是否立即开启 AI 任务。"true"代表立即开启 AI 任务，"false"代表暂不开启 AI 任务，默认为 false。
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

        if (array_key_exists("ChannelList",$param) and $param["ChannelList"] !== null) {
            $this->ChannelList = $param["ChannelList"];
        }

        if (array_key_exists("Templates",$param) and $param["Templates"] !== null) {
            $this->Templates = [];
            foreach ($param["Templates"] as $key => $value){
                $obj = new AITemplates();
                $obj->deserialize($value);
                array_push($this->Templates, $obj);
            }
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("IsStartTheTask",$param) and $param["IsStartTheTask"] !== null) {
            $this->IsStartTheTask = $param["IsStartTheTask"];
        }
    }
}

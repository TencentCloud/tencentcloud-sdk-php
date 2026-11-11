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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateModelChatTask请求参数结构体
 *
 * @method string getModel() 获取<p>模型标识</p>
 * @method void setModel(string $Model) 设置<p>模型标识</p>
 * @method array getMessages() 获取<p>对话消息数组</p>
 * @method void setMessages(array $Messages) 设置<p>对话消息数组</p>
 * @method ModelChatTaskNotifyConfig getTaskNotifyConfig() 获取<p>回调通知配置</p>
 * @method void setTaskNotifyConfig(ModelChatTaskNotifyConfig $TaskNotifyConfig) 设置<p>回调通知配置</p>
 */
class CreateModelChatTaskRequest extends AbstractModel
{
    /**
     * @var string <p>模型标识</p>
     */
    public $Model;

    /**
     * @var array <p>对话消息数组</p>
     */
    public $Messages;

    /**
     * @var ModelChatTaskNotifyConfig <p>回调通知配置</p>
     */
    public $TaskNotifyConfig;

    /**
     * @param string $Model <p>模型标识</p>
     * @param array $Messages <p>对话消息数组</p>
     * @param ModelChatTaskNotifyConfig $TaskNotifyConfig <p>回调通知配置</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new ModelChatMessageItem();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new ModelChatTaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }
    }
}

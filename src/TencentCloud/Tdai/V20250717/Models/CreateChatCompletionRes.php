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
 * 对话接口出参
 *
 * @method string getObject() 获取枚举值，返回的数据类型
 * @method void setObject(string $Object) 设置枚举值，返回的数据类型
 * @method integer getCreated() 获取消息时间戳
 * @method void setCreated(integer $Created) 设置消息时间戳
 * @method string getModel() 获取输出模型
 * @method void setModel(string $Model) 设置输出模型
 * @method integer getAppId() 获取用户标识
 * @method void setAppId(integer $AppId) 设置用户标识
 * @method string getOwnerUin() 获取主账户标识
 * @method void setOwnerUin(string $OwnerUin) 设置主账户标识
 * @method string getUin() 获取当前账户标识
 * @method void setUin(string $Uin) 设置当前账户标识
 * @method string getRequestId() 获取Request ID

 * @method void setRequestId(string $RequestId) 设置Request ID

 * @method string getChatId() 获取当前会话ID
 * @method void setChatId(string $ChatId) 设置当前会话ID
 * @method string getStreamingId() 获取当前流ID
 * @method void setStreamingId(string $StreamingId) 设置当前流ID
 * @method string getTaskId() 获取当前任务ID
 * @method void setTaskId(string $TaskId) 设置当前任务ID
 * @method array getChoices() 获取消息的数据详情
 * @method void setChoices(array $Choices) 设置消息的数据详情
 */
class CreateChatCompletionRes extends AbstractModel
{
    /**
     * @var string 枚举值，返回的数据类型
     */
    public $Object;

    /**
     * @var integer 消息时间戳
     */
    public $Created;

    /**
     * @var string 输出模型
     */
    public $Model;

    /**
     * @var integer 用户标识
     */
    public $AppId;

    /**
     * @var string 主账户标识
     */
    public $OwnerUin;

    /**
     * @var string 当前账户标识
     */
    public $Uin;

    /**
     * @var string Request ID

     */
    public $RequestId;

    /**
     * @var string 当前会话ID
     */
    public $ChatId;

    /**
     * @var string 当前流ID
     */
    public $StreamingId;

    /**
     * @var string 当前任务ID
     */
    public $TaskId;

    /**
     * @var array 消息的数据详情
     */
    public $Choices;

    /**
     * @param string $Object 枚举值，返回的数据类型
     * @param integer $Created 消息时间戳
     * @param string $Model 输出模型
     * @param integer $AppId 用户标识
     * @param string $OwnerUin 主账户标识
     * @param string $Uin 当前账户标识
     * @param string $RequestId Request ID

     * @param string $ChatId 当前会话ID
     * @param string $StreamingId 当前流ID
     * @param string $TaskId 当前任务ID
     * @param array $Choices 消息的数据详情
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
        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("StreamingId",$param) and $param["StreamingId"] !== null) {
            $this->StreamingId = $param["StreamingId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = [];
            foreach ($param["Choices"] as $key => $value){
                $obj = new UploadChoice();
                $obj->deserialize($value);
                array_push($this->Choices, $obj);
            }
        }
    }
}

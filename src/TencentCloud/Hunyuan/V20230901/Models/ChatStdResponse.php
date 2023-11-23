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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatStd返回参数结构体
 *
 * @method integer getCreated() 获取unix 时间戳，单位为秒。
 * @method void setCreated(integer $Created) 设置unix 时间戳，单位为秒。
 * @method Usage getUsage() 获取token统计信息。
按照总token数量计费。
 * @method void setUsage(Usage $Usage) 设置token统计信息。
按照总token数量计费。
 * @method string getNote() 获取免责声明。
 * @method void setNote(string $Note) 设置免责声明。
 * @method string getId() 获取本轮对话的id。
 * @method void setId(string $Id) 设置本轮对话的id。
 * @method array getChoices() 获取回复内容。
 * @method void setChoices(array $Choices) 设置回复内容。
 * @method ErrorMsg getErrorMsg() 获取错误信息。
如果流式返回中服务处理异常，返回该错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(ErrorMsg $ErrorMsg) 设置错误信息。
如果流式返回中服务处理异常，返回该错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 */
class ChatStdResponse extends AbstractModel
{
    /**
     * @var integer unix 时间戳，单位为秒。
     */
    public $Created;

    /**
     * @var Usage token统计信息。
按照总token数量计费。
     */
    public $Usage;

    /**
     * @var string 免责声明。
     */
    public $Note;

    /**
     * @var string 本轮对话的id。
     */
    public $Id;

    /**
     * @var array 回复内容。
     */
    public $Choices;

    /**
     * @var ErrorMsg 错误信息。
如果流式返回中服务处理异常，返回该错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
     */
    public $RequestId;

    /**
     * @param integer $Created unix 时间戳，单位为秒。
     * @param Usage $Usage token统计信息。
按照总token数量计费。
     * @param string $Note 免责声明。
     * @param string $Id 本轮对话的id。
     * @param array $Choices 回复内容。
     * @param ErrorMsg $ErrorMsg 错误信息。
如果流式返回中服务处理异常，返回该错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
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
        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new Usage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = [];
            foreach ($param["Choices"] as $key => $value){
                $obj = new Choice();
                $obj->deserialize($value);
                array_push($this->Choices, $obj);
            }
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = new ErrorMsg();
            $this->ErrorMsg->deserialize($param["ErrorMsg"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

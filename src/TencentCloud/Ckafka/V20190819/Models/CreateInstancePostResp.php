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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后付费实例相关接口返回结构
 *
 * @method string getReturnCode() 获取返回的code，0为正常，非0为错误
 * @method void setReturnCode(string $ReturnCode) 设置返回的code，0为正常，非0为错误
 * @method string getReturnMessage() 获取接口返回消息，当接口报错时提示错误信息
 * @method void setReturnMessage(string $ReturnMessage) 设置接口返回消息，当接口报错时提示错误信息
 * @method CreateInstancePostData getData() 获取返回的Data数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(CreateInstancePostData $Data) 设置返回的Data数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateInstancePostResp extends AbstractModel
{
    /**
     * @var string 返回的code，0为正常，非0为错误
     */
    public $ReturnCode;

    /**
     * @var string 接口返回消息，当接口报错时提示错误信息
     */
    public $ReturnMessage;

    /**
     * @var CreateInstancePostData 返回的Data数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param string $ReturnCode 返回的code，0为正常，非0为错误
     * @param string $ReturnMessage 接口返回消息，当接口报错时提示错误信息
     * @param CreateInstancePostData $Data 返回的Data数据
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMessage",$param) and $param["ReturnMessage"] !== null) {
            $this->ReturnMessage = $param["ReturnMessage"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new CreateInstancePostData();
            $this->Data->deserialize($param["Data"]);
        }
    }
}

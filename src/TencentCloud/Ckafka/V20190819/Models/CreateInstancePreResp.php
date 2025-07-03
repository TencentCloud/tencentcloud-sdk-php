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
 * 预付费实例相关接口返回结构
 *
 * @method string getReturnCode() 获取返回的code，0为正常，非0为错误
 * @method void setReturnCode(string $ReturnCode) 设置返回的code，0为正常，非0为错误
 * @method string getReturnMessage() 获取成功消息
 * @method void setReturnMessage(string $ReturnMessage) 设置成功消息
 * @method CreateInstancePreData getData() 获取操作型返回的Data数据
 * @method void setData(CreateInstancePreData $Data) 设置操作型返回的Data数据
 * @method string getDeleteRouteTimestamp() 获取删除时间。目前该参数字段已废弃，将会在未来被删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteRouteTimestamp(string $DeleteRouteTimestamp) 设置删除时间。目前该参数字段已废弃，将会在未来被删除
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateInstancePreResp extends AbstractModel
{
    /**
     * @var string 返回的code，0为正常，非0为错误
     */
    public $ReturnCode;

    /**
     * @var string 成功消息
     */
    public $ReturnMessage;

    /**
     * @var CreateInstancePreData 操作型返回的Data数据
     */
    public $Data;

    /**
     * @var string 删除时间。目前该参数字段已废弃，将会在未来被删除
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $DeleteRouteTimestamp;

    /**
     * @param string $ReturnCode 返回的code，0为正常，非0为错误
     * @param string $ReturnMessage 成功消息
     * @param CreateInstancePreData $Data 操作型返回的Data数据
     * @param string $DeleteRouteTimestamp 删除时间。目前该参数字段已废弃，将会在未来被删除
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
            $this->Data = new CreateInstancePreData();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("DeleteRouteTimestamp",$param) and $param["DeleteRouteTimestamp"] !== null) {
            $this->DeleteRouteTimestamp = $param["DeleteRouteTimestamp"];
        }
    }
}

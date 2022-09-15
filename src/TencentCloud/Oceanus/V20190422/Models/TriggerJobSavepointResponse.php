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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TriggerJobSavepoint返回参数结构体
 *
 * @method boolean getSavepointTrigger() 获取是否成功
 * @method void setSavepointTrigger(boolean $SavepointTrigger) 设置是否成功
 * @method string getErrorMsg() 获取错误消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置错误消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinalSavepointPath() 获取快照路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinalSavepointPath(string $FinalSavepointPath) 设置快照路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSavepointId() 获取快照 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSavepointId(string $SavepointId) 设置快照 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class TriggerJobSavepointResponse extends AbstractModel
{
    /**
     * @var boolean 是否成功
     */
    public $SavepointTrigger;

    /**
     * @var string 错误消息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string 快照路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinalSavepointPath;

    /**
     * @var string 快照 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SavepointId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $SavepointTrigger 是否成功
     * @param string $ErrorMsg 错误消息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinalSavepointPath 快照路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SavepointId 快照 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SavepointTrigger",$param) and $param["SavepointTrigger"] !== null) {
            $this->SavepointTrigger = $param["SavepointTrigger"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("FinalSavepointPath",$param) and $param["FinalSavepointPath"] !== null) {
            $this->FinalSavepointPath = $param["FinalSavepointPath"];
        }

        if (array_key_exists("SavepointId",$param) and $param["SavepointId"] !== null) {
            $this->SavepointId = $param["SavepointId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

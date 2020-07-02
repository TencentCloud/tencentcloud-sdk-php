<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Npp\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetVirtualNum返回参数结构体
 *
 * @method string getErrorCode() 获取错误码
 * @method void setErrorCode(string $ErrorCode) 设置错误码
 * @method string getBindId() 获取绑定 ID，该 ID 全局唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindId(string $BindId) 设置绑定 ID，该 ID 全局唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefNum() 获取中间号还剩引用计数，如果计数为 0 会解绑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefNum(string $RefNum) 设置中间号还剩引用计数，如果计数为 0 会解绑
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualNum() 获取中间号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualNum(string $VirtualNum) 设置中间号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsg() 获取错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetVirtualNumResponse extends AbstractModel
{
    /**
     * @var string 错误码
     */
    public $ErrorCode;

    /**
     * @var string 绑定 ID，该 ID 全局唯一
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindId;

    /**
     * @var string 中间号还剩引用计数，如果计数为 0 会解绑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefNum;

    /**
     * @var string 中间号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualNum;

    /**
     * @var string 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ErrorCode 错误码
     * @param string $BindId 绑定 ID，该 ID 全局唯一
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefNum 中间号还剩引用计数，如果计数为 0 会解绑
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualNum 中间号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msg 错误原因
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
        if (array_key_exists('ErrorCode',$param) and $param['ErrorCode'] !== null) {
            $this->ErrorCode = $param['ErrorCode'];
        }

        if (array_key_exists('BindId',$param) and $param['BindId'] !== null) {
            $this->BindId = $param['BindId'];
        }

        if (array_key_exists('RefNum',$param) and $param['RefNum'] !== null) {
            $this->RefNum = $param['RefNum'];
        }

        if (array_key_exists('VirtualNum',$param) and $param['VirtualNum'] !== null) {
            $this->VirtualNum = $param['VirtualNum'];
        }

        if (array_key_exists('Msg',$param) and $param['Msg'] !== null) {
            $this->Msg = $param['Msg'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}

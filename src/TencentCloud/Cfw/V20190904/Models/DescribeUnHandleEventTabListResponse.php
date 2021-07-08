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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUnHandleEventTabList返回参数结构体
 *
 * @method UnHandleEvent getData() 获取租户伪攻击链未处置事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(UnHandleEvent $Data) 设置租户伪攻击链未处置事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReturnCode() 获取错误码，0成功 非0错误
 * @method void setReturnCode(integer $ReturnCode) 设置错误码，0成功 非0错误
 * @method string getReturnMsg() 获取返回信息 success成功
 * @method void setReturnMsg(string $ReturnMsg) 设置返回信息 success成功
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUnHandleEventTabListResponse extends AbstractModel
{
    /**
     * @var UnHandleEvent 租户伪攻击链未处置事件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var integer 错误码，0成功 非0错误
     */
    public $ReturnCode;

    /**
     * @var string 返回信息 success成功
     */
    public $ReturnMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param UnHandleEvent $Data 租户伪攻击链未处置事件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReturnCode 错误码，0成功 非0错误
     * @param string $ReturnMsg 返回信息 success成功
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new UnHandleEvent();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

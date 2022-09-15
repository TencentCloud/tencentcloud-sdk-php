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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebProtectionAttackEvents返回参数结构体
 *
 * @method CCInterceptEventData getData() 获取DDos攻击事件数据
 * @method void setData(CCInterceptEventData $Data) 设置DDos攻击事件数据
 * @method integer getStatus() 获取状态，1:失败，0:成功
 * @method void setStatus(integer $Status) 设置状态，1:失败，0:成功
 * @method string getMsg() 获取返回消息
 * @method void setMsg(string $Msg) 设置返回消息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWebProtectionAttackEventsResponse extends AbstractModel
{
    /**
     * @var CCInterceptEventData DDos攻击事件数据
     */
    public $Data;

    /**
     * @var integer 状态，1:失败，0:成功
     */
    public $Status;

    /**
     * @var string 返回消息
     */
    public $Msg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param CCInterceptEventData $Data DDos攻击事件数据
     * @param integer $Status 状态，1:失败，0:成功
     * @param string $Msg 返回消息
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
            $this->Data = new CCInterceptEventData();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

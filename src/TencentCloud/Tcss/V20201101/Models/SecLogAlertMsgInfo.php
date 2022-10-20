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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全日志告警信息
 *
 * @method string getMsgType() 获取告警类型
 * @method void setMsgType(string $MsgType) 设置告警类型
 * @method string getMsgValue() 获取告警值
 * @method void setMsgValue(string $MsgValue) 设置告警值
 * @method boolean getState() 获取状态(0:关闭 1:开启)
 * @method void setState(boolean $State) 设置状态(0:关闭 1:开启)
 */
class SecLogAlertMsgInfo extends AbstractModel
{
    /**
     * @var string 告警类型
     */
    public $MsgType;

    /**
     * @var string 告警值
     */
    public $MsgValue;

    /**
     * @var boolean 状态(0:关闭 1:开启)
     */
    public $State;

    /**
     * @param string $MsgType 告警类型
     * @param string $MsgValue 告警值
     * @param boolean $State 状态(0:关闭 1:开启)
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
        if (array_key_exists("MsgType",$param) and $param["MsgType"] !== null) {
            $this->MsgType = $param["MsgType"];
        }

        if (array_key_exists("MsgValue",$param) and $param["MsgValue"] !== null) {
            $this->MsgValue = $param["MsgValue"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}

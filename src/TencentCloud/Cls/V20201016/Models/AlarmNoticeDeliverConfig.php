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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知渠道投递日志配置信息
 *
 * @method DeliverConfig getDeliverConfig() 获取通知渠道投递日志配置信息。
 * @method void setDeliverConfig(DeliverConfig $DeliverConfig) 设置通知渠道投递日志配置信息。
 * @method string getErrMsg() 获取投递失败原因。
 * @method void setErrMsg(string $ErrMsg) 设置投递失败原因。
 */
class AlarmNoticeDeliverConfig extends AbstractModel
{
    /**
     * @var DeliverConfig 通知渠道投递日志配置信息。
     */
    public $DeliverConfig;

    /**
     * @var string 投递失败原因。
     */
    public $ErrMsg;

    /**
     * @param DeliverConfig $DeliverConfig 通知渠道投递日志配置信息。
     * @param string $ErrMsg 投递失败原因。
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
        if (array_key_exists("DeliverConfig",$param) and $param["DeliverConfig"] !== null) {
            $this->DeliverConfig = new DeliverConfig();
            $this->DeliverConfig->deserialize($param["DeliverConfig"]);
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}

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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企微机器人回调接入配置
 *
 * @method CallbackConfig getCallback() 获取<p>回调配置</p>
 * @method void setCallback(CallbackConfig $Callback) 设置<p>回调配置</p>
 * @method string getRobotName() 获取<p>机器人名称</p>
 * @method void setRobotName(string $RobotName) 设置<p>机器人名称</p>
 * @method string getWecomCorpId() 获取<p>企微企业ID</p>
 * @method void setWecomCorpId(string $WecomCorpId) 设置<p>企微企业ID</p>
 * @method string getWecomRobotId() 获取<p>企微机器人ID</p>
 * @method void setWecomRobotId(string $WecomRobotId) 设置<p>企微机器人ID</p>
 */
class WecomRobotCallbackAccess extends AbstractModel
{
    /**
     * @var CallbackConfig <p>回调配置</p>
     */
    public $Callback;

    /**
     * @var string <p>机器人名称</p>
     */
    public $RobotName;

    /**
     * @var string <p>企微企业ID</p>
     */
    public $WecomCorpId;

    /**
     * @var string <p>企微机器人ID</p>
     */
    public $WecomRobotId;

    /**
     * @param CallbackConfig $Callback <p>回调配置</p>
     * @param string $RobotName <p>机器人名称</p>
     * @param string $WecomCorpId <p>企微企业ID</p>
     * @param string $WecomRobotId <p>企微机器人ID</p>
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
        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackConfig();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("RobotName",$param) and $param["RobotName"] !== null) {
            $this->RobotName = $param["RobotName"];
        }

        if (array_key_exists("WecomCorpId",$param) and $param["WecomCorpId"] !== null) {
            $this->WecomCorpId = $param["WecomCorpId"];
        }

        if (array_key_exists("WecomRobotId",$param) and $param["WecomRobotId"] !== null) {
            $this->WecomRobotId = $param["WecomRobotId"];
        }
    }
}

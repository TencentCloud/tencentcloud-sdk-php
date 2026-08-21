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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TestWebhookReceiver请求参数结构体
 *
 * @method integer getID() 获取<p>机器人配置ID</p>
 * @method void setID(integer $ID) 设置<p>机器人配置ID</p>
 * @method string getData() 获取<p>自定义测试内容（明文）。不传时使用系统默认测试样例<br>入参限制：长度 0-2048</p>
 * @method void setData(string $Data) 设置<p>自定义测试内容（明文）。不传时使用系统默认测试样例<br>入参限制：长度 0-2048</p>
 */
class TestWebhookReceiverRequest extends AbstractModel
{
    /**
     * @var integer <p>机器人配置ID</p>
     */
    public $ID;

    /**
     * @var string <p>自定义测试内容（明文）。不传时使用系统默认测试样例<br>入参限制：长度 0-2048</p>
     */
    public $Data;

    /**
     * @param integer $ID <p>机器人配置ID</p>
     * @param string $Data <p>自定义测试内容（明文）。不传时使用系统默认测试样例<br>入参限制：长度 0-2048</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}

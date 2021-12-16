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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMessageForward请求参数结构体
 *
 * @method integer getIntId() 获取配置ID
 * @method void setIntId(integer $IntId) 设置配置ID
 * @method string getMessageType() 获取json数组， 转发类型 1: 告警 2:GPS
 * @method void setMessageType(string $MessageType) 设置json数组， 转发类型 1: 告警 2:GPS
 */
class ModifyMessageForwardRequest extends AbstractModel
{
    /**
     * @var integer 配置ID
     */
    public $IntId;

    /**
     * @var string json数组， 转发类型 1: 告警 2:GPS
     */
    public $MessageType;

    /**
     * @param integer $IntId 配置ID
     * @param string $MessageType json数组， 转发类型 1: 告警 2:GPS
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
        if (array_key_exists("IntId",$param) and $param["IntId"] !== null) {
            $this->IntId = $param["IntId"];
        }

        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }
    }
}

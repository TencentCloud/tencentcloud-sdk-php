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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateConnection请求参数结构体
 *
 * @method string getConnectionId() 获取连接器ID
 * @method void setConnectionId(string $ConnectionId) 设置连接器ID
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method boolean getEnable() 获取使能开关
 * @method void setEnable(boolean $Enable) 设置使能开关
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getConnectionName() 获取连接器名称
 * @method void setConnectionName(string $ConnectionName) 设置连接器名称
 */
class UpdateConnectionRequest extends AbstractModel
{
    /**
     * @var string 连接器ID
     */
    public $ConnectionId;

    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var boolean 使能开关
     */
    public $Enable;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 连接器名称
     */
    public $ConnectionName;

    /**
     * @param string $ConnectionId 连接器ID
     * @param string $EventBusId 事件集ID
     * @param boolean $Enable 使能开关
     * @param string $Description 描述
     * @param string $ConnectionName 连接器名称
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
        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConnectionName",$param) and $param["ConnectionName"] !== null) {
            $this->ConnectionName = $param["ConnectionName"];
        }
    }
}

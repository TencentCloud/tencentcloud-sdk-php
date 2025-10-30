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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源下线
 *
 * @method integer getResourceId() 获取资源ID
 * @method void setResourceId(integer $ResourceId) 设置资源ID
 * @method string getResourceDeleteTime() 获取资源下线时间
 * @method void setResourceDeleteTime(string $ResourceDeleteTime) 设置资源下线时间
 * @method string getResourceDeleteMessage() 获取资源下线提示
 * @method void setResourceDeleteMessage(string $ResourceDeleteMessage) 设置资源下线提示
 */
class ResourceOffline extends AbstractModel
{
    /**
     * @var integer 资源ID
     */
    public $ResourceId;

    /**
     * @var string 资源下线时间
     */
    public $ResourceDeleteTime;

    /**
     * @var string 资源下线提示
     */
    public $ResourceDeleteMessage;

    /**
     * @param integer $ResourceId 资源ID
     * @param string $ResourceDeleteTime 资源下线时间
     * @param string $ResourceDeleteMessage 资源下线提示
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceDeleteTime",$param) and $param["ResourceDeleteTime"] !== null) {
            $this->ResourceDeleteTime = $param["ResourceDeleteTime"];
        }

        if (array_key_exists("ResourceDeleteMessage",$param) and $param["ResourceDeleteMessage"] !== null) {
            $this->ResourceDeleteMessage = $param["ResourceDeleteMessage"];
        }
    }
}

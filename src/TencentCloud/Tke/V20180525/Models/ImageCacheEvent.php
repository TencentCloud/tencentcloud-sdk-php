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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像缓存的事件
 *
 * @method string getImageCacheId() 获取镜像缓存Id
 * @method void setImageCacheId(string $ImageCacheId) 设置镜像缓存Id
 * @method string getType() 获取事件类型, Normal或者Warning
 * @method void setType(string $Type) 设置事件类型, Normal或者Warning
 * @method string getReason() 获取事件原因简述
 * @method void setReason(string $Reason) 设置事件原因简述
 * @method string getMessage() 获取事件原因详述
 * @method void setMessage(string $Message) 设置事件原因详述
 * @method string getFirstTimestamp() 获取事件第一次出现时间
 * @method void setFirstTimestamp(string $FirstTimestamp) 设置事件第一次出现时间
 * @method string getLastTimestamp() 获取事件最后一次出现时间
 * @method void setLastTimestamp(string $LastTimestamp) 设置事件最后一次出现时间
 */
class ImageCacheEvent extends AbstractModel
{
    /**
     * @var string 镜像缓存Id
     */
    public $ImageCacheId;

    /**
     * @var string 事件类型, Normal或者Warning
     */
    public $Type;

    /**
     * @var string 事件原因简述
     */
    public $Reason;

    /**
     * @var string 事件原因详述
     */
    public $Message;

    /**
     * @var string 事件第一次出现时间
     */
    public $FirstTimestamp;

    /**
     * @var string 事件最后一次出现时间
     */
    public $LastTimestamp;

    /**
     * @param string $ImageCacheId 镜像缓存Id
     * @param string $Type 事件类型, Normal或者Warning
     * @param string $Reason 事件原因简述
     * @param string $Message 事件原因详述
     * @param string $FirstTimestamp 事件第一次出现时间
     * @param string $LastTimestamp 事件最后一次出现时间
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
        if (array_key_exists("ImageCacheId",$param) and $param["ImageCacheId"] !== null) {
            $this->ImageCacheId = $param["ImageCacheId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FirstTimestamp",$param) and $param["FirstTimestamp"] !== null) {
            $this->FirstTimestamp = $param["FirstTimestamp"];
        }

        if (array_key_exists("LastTimestamp",$param) and $param["LastTimestamp"] !== null) {
            $this->LastTimestamp = $param["LastTimestamp"];
        }
    }
}

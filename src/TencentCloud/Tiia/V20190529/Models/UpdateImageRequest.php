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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateImage请求参数结构体
 *
 * @method string getGroupId() 获取图库ID。
 * @method void setGroupId(string $GroupId) 设置图库ID。
 * @method string getEntityId() 获取物品ID，最多支持64个字符。
 * @method void setEntityId(string $EntityId) 设置物品ID，最多支持64个字符。
 * @method string getPicName() 获取图片名称，最多支持64个字符。
 * @method void setPicName(string $PicName) 设置图片名称，最多支持64个字符。
 * @method string getTags() 获取新的自定义标签，最多不超过10个，格式为JSON。
 * @method void setTags(string $Tags) 设置新的自定义标签，最多不超过10个，格式为JSON。
 */
class UpdateImageRequest extends AbstractModel
{
    /**
     * @var string 图库ID。
     */
    public $GroupId;

    /**
     * @var string 物品ID，最多支持64个字符。
     */
    public $EntityId;

    /**
     * @var string 图片名称，最多支持64个字符。
     */
    public $PicName;

    /**
     * @var string 新的自定义标签，最多不超过10个，格式为JSON。
     */
    public $Tags;

    /**
     * @param string $GroupId 图库ID。
     * @param string $EntityId 物品ID，最多支持64个字符。
     * @param string $PicName 图片名称，最多支持64个字符。
     * @param string $Tags 新的自定义标签，最多不超过10个，格式为JSON。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("PicName",$param) and $param["PicName"] !== null) {
            $this->PicName = $param["PicName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}

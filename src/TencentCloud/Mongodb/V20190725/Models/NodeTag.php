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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点Tag
 *
 * @method string getTagKey() 获取节点Tag key
 * @method void setTagKey(string $TagKey) 设置节点Tag key
 * @method string getTagValue() 获取节点Tag Value
 * @method void setTagValue(string $TagValue) 设置节点Tag Value
 */
class NodeTag extends AbstractModel
{
    /**
     * @var string 节点Tag key
     */
    public $TagKey;

    /**
     * @var string 节点Tag Value
     */
    public $TagValue;

    /**
     * @param string $TagKey 节点Tag key
     * @param string $TagValue 节点Tag Value
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}

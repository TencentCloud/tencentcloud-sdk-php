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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户业务标签的 KV 表示（路由/服务标签分组）
 *
 * @method integer getTagId() 获取<p>标签 ID</p>
 * @method void setTagId(integer $TagId) 设置<p>标签 ID</p>
 * @method string getTagKey() 获取<p>标签 Key</p>
 * @method void setTagKey(string $TagKey) 设置<p>标签 Key</p>
 * @method string getTagValue() 获取<p>标签 Value</p>
 * @method void setTagValue(string $TagValue) 设置<p>标签 Value</p>
 */
class KongUserTagKV extends AbstractModel
{
    /**
     * @var integer <p>标签 ID</p>
     */
    public $TagId;

    /**
     * @var string <p>标签 Key</p>
     */
    public $TagKey;

    /**
     * @var string <p>标签 Value</p>
     */
    public $TagValue;

    /**
     * @param integer $TagId <p>标签 ID</p>
     * @param string $TagKey <p>标签 Key</p>
     * @param string $TagValue <p>标签 Value</p>
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
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}

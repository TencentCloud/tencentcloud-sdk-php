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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 校验消息项
 *
 * @method string getBillingItem() 获取<p>计费项标识</p>
 * @method void setBillingItem(string $BillingItem) 设置<p>计费项标识</p>
 * @method string getMessage() 获取<p>校验失败描述信息</p>
 * @method void setMessage(string $Message) 设置<p>校验失败描述信息</p>
 */
class MessageItem extends AbstractModel
{
    /**
     * @var string <p>计费项标识</p>
     */
    public $BillingItem;

    /**
     * @var string <p>校验失败描述信息</p>
     */
    public $Message;

    /**
     * @param string $BillingItem <p>计费项标识</p>
     * @param string $Message <p>校验失败描述信息</p>
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
        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}

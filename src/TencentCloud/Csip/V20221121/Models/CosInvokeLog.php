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
 * cos调用日志
 *
 * @method integer getInvokeTimestamp() 获取调用时间戳
 * @method void setInvokeTimestamp(integer $InvokeTimestamp) 设置调用时间戳
 * @method string getRequestId() 获取请求id
 * @method void setRequestId(string $RequestId) 设置请求id
 * @method string getRequestContent() 获取请求内容 base64 json 结构
 * @method void setRequestContent(string $RequestContent) 设置请求内容 base64 json 结构
 */
class CosInvokeLog extends AbstractModel
{
    /**
     * @var integer 调用时间戳
     */
    public $InvokeTimestamp;

    /**
     * @var string 请求id
     */
    public $RequestId;

    /**
     * @var string 请求内容 base64 json 结构
     */
    public $RequestContent;

    /**
     * @param integer $InvokeTimestamp 调用时间戳
     * @param string $RequestId 请求id
     * @param string $RequestContent 请求内容 base64 json 结构
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
        if (array_key_exists("InvokeTimestamp",$param) and $param["InvokeTimestamp"] !== null) {
            $this->InvokeTimestamp = $param["InvokeTimestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("RequestContent",$param) and $param["RequestContent"] !== null) {
            $this->RequestContent = $param["RequestContent"];
        }
    }
}

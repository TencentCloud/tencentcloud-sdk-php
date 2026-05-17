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
 * cos调用详情信息
 *
 * @method integer getInvokeTimestamp() 获取调用时间
 * @method void setInvokeTimestamp(integer $InvokeTimestamp) 设置调用时间
 * @method string getInvokeRequestId() 获取请求id
 * @method void setInvokeRequestId(string $InvokeRequestId) 设置请求id
 * @method string getInvokeContent() 获取调用内容
 * @method void setInvokeContent(string $InvokeContent) 设置调用内容
 */
class CosInvokeDetailInfo extends AbstractModel
{
    /**
     * @var integer 调用时间
     */
    public $InvokeTimestamp;

    /**
     * @var string 请求id
     */
    public $InvokeRequestId;

    /**
     * @var string 调用内容
     */
    public $InvokeContent;

    /**
     * @param integer $InvokeTimestamp 调用时间
     * @param string $InvokeRequestId 请求id
     * @param string $InvokeContent 调用内容
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

        if (array_key_exists("InvokeRequestId",$param) and $param["InvokeRequestId"] !== null) {
            $this->InvokeRequestId = $param["InvokeRequestId"];
        }

        if (array_key_exists("InvokeContent",$param) and $param["InvokeContent"] !== null) {
            $this->InvokeContent = $param["InvokeContent"];
        }
    }
}

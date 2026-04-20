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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAccount请求参数结构体
 *
 * @method string getPlatform() 获取<p>平台 Id，指定访问的平台。关于平台概念，请参见文档 <a href="https://cloud.tencent.com/document/product/1156/43767">平台</a>。</p>
 * @method void setPlatform(string $Platform) 设置<p>平台 Id，指定访问的平台。关于平台概念，请参见文档 <a href="https://cloud.tencent.com/document/product/1156/43767">平台</a>。</p>
 * @method string getUserId() 获取<p>用户标识 。</p>
 * @method void setUserId(string $UserId) 设置<p>用户标识 。</p>
 * @method string getOperator() 获取<p>操作者。如不填，默认为 <code>cmeid_system</code>，表示平台管理员操作，可以操作任意账户。如果指定操作者，则操作者必须为账户所有者。</p>
 * @method void setOperator(string $Operator) 设置<p>操作者。如不填，默认为 <code>cmeid_system</code>，表示平台管理员操作，可以操作任意账户。如果指定操作者，则操作者必须为账户所有者。</p>
 */
class DeleteAccountRequest extends AbstractModel
{
    /**
     * @var string <p>平台 Id，指定访问的平台。关于平台概念，请参见文档 <a href="https://cloud.tencent.com/document/product/1156/43767">平台</a>。</p>
     */
    public $Platform;

    /**
     * @var string <p>用户标识 。</p>
     */
    public $UserId;

    /**
     * @var string <p>操作者。如不填，默认为 <code>cmeid_system</code>，表示平台管理员操作，可以操作任意账户。如果指定操作者，则操作者必须为账户所有者。</p>
     */
    public $Operator;

    /**
     * @param string $Platform <p>平台 Id，指定访问的平台。关于平台概念，请参见文档 <a href="https://cloud.tencent.com/document/product/1156/43767">平台</a>。</p>
     * @param string $UserId <p>用户标识 。</p>
     * @param string $Operator <p>操作者。如不填，默认为 <code>cmeid_system</code>，表示平台管理员操作，可以操作任意账户。如果指定操作者，则操作者必须为账户所有者。</p>
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}

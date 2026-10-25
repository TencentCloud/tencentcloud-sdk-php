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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重定向配置
 *
 * @method integer getStatusCode() 获取<p>重定向状态码</p><p>枚举值：</p><ul><li>301： 永久重定向</li><li>302： 临时重定向</li><li>303： 查看其他位置</li><li>307： 临时重定向（保留请求方法）</li><li>308： 永久重定向（保留请求方法）</li></ul>
 * @method void setStatusCode(integer $StatusCode) 设置<p>重定向状态码</p><p>枚举值：</p><ul><li>301： 永久重定向</li><li>302： 临时重定向</li><li>303： 查看其他位置</li><li>307： 临时重定向（保留请求方法）</li><li>308： 永久重定向（保留请求方法）</li></ul>
 * @method string getTargetUrl() 获取<p>目标地址，填写为空表示关闭重定向。不支持路径填写。</p>
 * @method void setTargetUrl(string $TargetUrl) 设置<p>目标地址，填写为空表示关闭重定向。不支持路径填写。</p>
 */
class RedirectConfig extends AbstractModel
{
    /**
     * @var integer <p>重定向状态码</p><p>枚举值：</p><ul><li>301： 永久重定向</li><li>302： 临时重定向</li><li>303： 查看其他位置</li><li>307： 临时重定向（保留请求方法）</li><li>308： 永久重定向（保留请求方法）</li></ul>
     */
    public $StatusCode;

    /**
     * @var string <p>目标地址，填写为空表示关闭重定向。不支持路径填写。</p>
     */
    public $TargetUrl;

    /**
     * @param integer $StatusCode <p>重定向状态码</p><p>枚举值：</p><ul><li>301： 永久重定向</li><li>302： 临时重定向</li><li>303： 查看其他位置</li><li>307： 临时重定向（保留请求方法）</li><li>308： 永久重定向（保留请求方法）</li></ul>
     * @param string $TargetUrl <p>目标地址，填写为空表示关闭重定向。不支持路径填写。</p>
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("TargetUrl",$param) and $param["TargetUrl"] !== null) {
            $this->TargetUrl = $param["TargetUrl"];
        }
    }
}

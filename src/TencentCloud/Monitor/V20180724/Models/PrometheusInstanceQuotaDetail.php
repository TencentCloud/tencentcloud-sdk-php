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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus实例创建配额信息
 *
 * @method integer getLimit() 获取<p>prometheus实例创建总限制数量</p>
 * @method void setLimit(integer $Limit) 设置<p>prometheus实例创建总限制数量</p>
 * @method integer getUsage() 获取<p>当前账号下创建prometheus实例数量</p>
 * @method void setUsage(integer $Usage) 设置<p>当前账号下创建prometheus实例数量</p>
 * @method integer getAvailable() 获取<p>剩余可用prometheus实例创建数量</p>
 * @method void setAvailable(integer $Available) 设置<p>剩余可用prometheus实例创建数量</p>
 */
class PrometheusInstanceQuotaDetail extends AbstractModel
{
    /**
     * @var integer <p>prometheus实例创建总限制数量</p>
     */
    public $Limit;

    /**
     * @var integer <p>当前账号下创建prometheus实例数量</p>
     */
    public $Usage;

    /**
     * @var integer <p>剩余可用prometheus实例创建数量</p>
     */
    public $Available;

    /**
     * @param integer $Limit <p>prometheus实例创建总限制数量</p>
     * @param integer $Usage <p>当前账号下创建prometheus实例数量</p>
     * @param integer $Available <p>剩余可用prometheus实例创建数量</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }
    }
}

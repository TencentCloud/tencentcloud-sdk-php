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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主账号配额总览
 *
 * @method QuotaResourceInfo getQuota() 获取<p>主账号各资源维度的配额上限</p>
 * @method void setQuota(QuotaResourceInfo $Quota) 设置<p>主账号各资源维度的配额上限</p>
 * @method QuotaResourceInfo getUsage() 获取<p>主账号各资源维度的当前用量</p>
 * @method void setUsage(QuotaResourceInfo $Usage) 设置<p>主账号各资源维度的当前用量</p>
 */
class AccountQuotaOverview extends AbstractModel
{
    /**
     * @var QuotaResourceInfo <p>主账号各资源维度的配额上限</p>
     */
    public $Quota;

    /**
     * @var QuotaResourceInfo <p>主账号各资源维度的当前用量</p>
     */
    public $Usage;

    /**
     * @param QuotaResourceInfo $Quota <p>主账号各资源维度的配额上限</p>
     * @param QuotaResourceInfo $Usage <p>主账号各资源维度的当前用量</p>
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
        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = new QuotaResourceInfo();
            $this->Quota->deserialize($param["Quota"]);
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new QuotaResourceInfo();
            $this->Usage->deserialize($param["Usage"]);
        }
    }
}

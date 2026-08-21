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
 * 最后一天风险摘要项
 *
 * @method string getKey() 获取风险项类型：intrusion_alert / vulnerability
 * @method void setKey(string $Key) 设置风险项类型：intrusion_alert / vulnerability
 * @method string getName() 获取展示名称，按请求语言返回；漏洞项按是否付费区分文案
 * @method void setName(string $Name) 设置展示名称，按请求语言返回；漏洞项按是否付费区分文案
 * @method integer getCount() 获取风险数量
 * @method void setCount(integer $Count) 设置风险数量
 */
class RiskTrendItem extends AbstractModel
{
    /**
     * @var string 风险项类型：intrusion_alert / vulnerability
     */
    public $Key;

    /**
     * @var string 展示名称，按请求语言返回；漏洞项按是否付费区分文案
     */
    public $Name;

    /**
     * @var integer 风险数量
     */
    public $Count;

    /**
     * @param string $Key 风险项类型：intrusion_alert / vulnerability
     * @param string $Name 展示名称，按请求语言返回；漏洞项按是否付费区分文案
     * @param integer $Count 风险数量
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}

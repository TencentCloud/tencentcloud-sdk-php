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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异常连接防护配置。
 *
 * @method integer getAbnormalConnectThreshold() 获取<p>异常连接数限制，限制同一时间单个源 IP 异常连接数量， 0为不启用, 范围: 0-4294967295。</p><p>取值范围：[0, 4294967295]</p>
 * @method void setAbnormalConnectThreshold(integer $AbnormalConnectThreshold) 设置<p>异常连接数限制，限制同一时间单个源 IP 异常连接数量， 0为不启用, 范围: 0-4294967295。</p><p>取值范围：[0, 4294967295]</p>
 * @method AbnormalConnectCondition getAbnormalConnectCondition() 获取<p>异常连接判定条件。满足任意条件则计为一次异常统计。</p>
 * @method void setAbnormalConnectCondition(AbnormalConnectCondition $AbnormalConnectCondition) 设置<p>异常连接判定条件。满足任意条件则计为一次异常统计。</p>
 */
class AbnormalConnectionLimit extends AbstractModel
{
    /**
     * @var integer <p>异常连接数限制，限制同一时间单个源 IP 异常连接数量， 0为不启用, 范围: 0-4294967295。</p><p>取值范围：[0, 4294967295]</p>
     */
    public $AbnormalConnectThreshold;

    /**
     * @var AbnormalConnectCondition <p>异常连接判定条件。满足任意条件则计为一次异常统计。</p>
     */
    public $AbnormalConnectCondition;

    /**
     * @param integer $AbnormalConnectThreshold <p>异常连接数限制，限制同一时间单个源 IP 异常连接数量， 0为不启用, 范围: 0-4294967295。</p><p>取值范围：[0, 4294967295]</p>
     * @param AbnormalConnectCondition $AbnormalConnectCondition <p>异常连接判定条件。满足任意条件则计为一次异常统计。</p>
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
        if (array_key_exists("AbnormalConnectThreshold",$param) and $param["AbnormalConnectThreshold"] !== null) {
            $this->AbnormalConnectThreshold = $param["AbnormalConnectThreshold"];
        }

        if (array_key_exists("AbnormalConnectCondition",$param) and $param["AbnormalConnectCondition"] !== null) {
            $this->AbnormalConnectCondition = new AbnormalConnectCondition();
            $this->AbnormalConnectCondition->deserialize($param["AbnormalConnectCondition"]);
        }
    }
}

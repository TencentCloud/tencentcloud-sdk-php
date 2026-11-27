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
 * 连接类攻击防护配置。
 *
 * @method integer getSourceIPNewConnectionLimit() 获取<p>源 IP 每秒新建连接数限制，为 0 为不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
 * @method void setSourceIPNewConnectionLimit(integer $SourceIPNewConnectionLimit) 设置<p>源 IP 每秒新建连接数限制，为 0 为不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
 * @method integer getSourceIPConcurrentConnectionLimit() 获取<p>源 IP 并发连接数限制，为 0 不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
 * @method void setSourceIPConcurrentConnectionLimit(integer $SourceIPConcurrentConnectionLimit) 设置<p>源 IP 并发连接数限制，为 0 不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
 * @method integer getDestinationIPNewConnectionLimit() 获取<p>目的 IP 每秒新建连接数限制，为 0 不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
 * @method void setDestinationIPNewConnectionLimit(integer $DestinationIPNewConnectionLimit) 设置<p>目的 IP 每秒新建连接数限制，为 0 不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
 * @method integer getDestinationIPConcurrentConnectionLimit() 获取<p>目的 IP 并发连接数限制，为 0 不限制（关闭）， 大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
 * @method void setDestinationIPConcurrentConnectionLimit(integer $DestinationIPConcurrentConnectionLimit) 设置<p>目的 IP 并发连接数限制，为 0 不限制（关闭）， 大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
 * @method AbnormalConnectionLimit getAbnormalConnectionLimit() 获取<p>源 IP 异常连接限制。</p>
 * @method void setAbnormalConnectionLimit(AbnormalConnectionLimit $AbnormalConnectionLimit) 设置<p>源 IP 异常连接限制。</p>
 */
class ConnectionProtectionConfig extends AbstractModel
{
    /**
     * @var integer <p>源 IP 每秒新建连接数限制，为 0 为不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
     */
    public $SourceIPNewConnectionLimit;

    /**
     * @var integer <p>源 IP 并发连接数限制，为 0 不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
     */
    public $SourceIPConcurrentConnectionLimit;

    /**
     * @var integer <p>目的 IP 每秒新建连接数限制，为 0 不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
     */
    public $DestinationIPNewConnectionLimit;

    /**
     * @var integer <p>目的 IP 并发连接数限制，为 0 不限制（关闭）， 大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
     */
    public $DestinationIPConcurrentConnectionLimit;

    /**
     * @var AbnormalConnectionLimit <p>源 IP 异常连接限制。</p>
     */
    public $AbnormalConnectionLimit;

    /**
     * @param integer $SourceIPNewConnectionLimit <p>源 IP 每秒新建连接数限制，为 0 为不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
     * @param integer $SourceIPConcurrentConnectionLimit <p>源 IP 并发连接数限制，为 0 不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
     * @param integer $DestinationIPNewConnectionLimit <p>目的 IP 每秒新建连接数限制，为 0 不限制（关闭），大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
     * @param integer $DestinationIPConcurrentConnectionLimit <p>目的 IP 并发连接数限制，为 0 不限制（关闭）， 大于 0 开启限制。命中后限制新建连接。</p><p>取值范围：[0, 4294967295]</p>
     * @param AbnormalConnectionLimit $AbnormalConnectionLimit <p>源 IP 异常连接限制。</p>
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
        if (array_key_exists("SourceIPNewConnectionLimit",$param) and $param["SourceIPNewConnectionLimit"] !== null) {
            $this->SourceIPNewConnectionLimit = $param["SourceIPNewConnectionLimit"];
        }

        if (array_key_exists("SourceIPConcurrentConnectionLimit",$param) and $param["SourceIPConcurrentConnectionLimit"] !== null) {
            $this->SourceIPConcurrentConnectionLimit = $param["SourceIPConcurrentConnectionLimit"];
        }

        if (array_key_exists("DestinationIPNewConnectionLimit",$param) and $param["DestinationIPNewConnectionLimit"] !== null) {
            $this->DestinationIPNewConnectionLimit = $param["DestinationIPNewConnectionLimit"];
        }

        if (array_key_exists("DestinationIPConcurrentConnectionLimit",$param) and $param["DestinationIPConcurrentConnectionLimit"] !== null) {
            $this->DestinationIPConcurrentConnectionLimit = $param["DestinationIPConcurrentConnectionLimit"];
        }

        if (array_key_exists("AbnormalConnectionLimit",$param) and $param["AbnormalConnectionLimit"] !== null) {
            $this->AbnormalConnectionLimit = new AbnormalConnectionLimit();
            $this->AbnormalConnectionLimit->deserialize($param["AbnormalConnectionLimit"]);
        }
    }
}

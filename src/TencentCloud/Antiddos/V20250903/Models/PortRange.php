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
 * 端口范围。
 *
 * @method integer getFromPort() 获取<p>起始端口。</p><p>取值范围：[1, 65535]</p><p>与 <code>ToPort</code> 相同时表示单个端口。</p>
 * @method void setFromPort(integer $FromPort) 设置<p>起始端口。</p><p>取值范围：[1, 65535]</p><p>与 <code>ToPort</code> 相同时表示单个端口。</p>
 * @method integer getToPort() 获取<p>结束端口</p><p>取值范围：[1, 65535]</p>
 * @method void setToPort(integer $ToPort) 设置<p>结束端口</p><p>取值范围：[1, 65535]</p>
 */
class PortRange extends AbstractModel
{
    /**
     * @var integer <p>起始端口。</p><p>取值范围：[1, 65535]</p><p>与 <code>ToPort</code> 相同时表示单个端口。</p>
     */
    public $FromPort;

    /**
     * @var integer <p>结束端口</p><p>取值范围：[1, 65535]</p>
     */
    public $ToPort;

    /**
     * @param integer $FromPort <p>起始端口。</p><p>取值范围：[1, 65535]</p><p>与 <code>ToPort</code> 相同时表示单个端口。</p>
     * @param integer $ToPort <p>结束端口</p><p>取值范围：[1, 65535]</p>
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
        if (array_key_exists("FromPort",$param) and $param["FromPort"] !== null) {
            $this->FromPort = $param["FromPort"];
        }

        if (array_key_exists("ToPort",$param) and $param["ToPort"] !== null) {
            $this->ToPort = $param["ToPort"];
        }
    }
}

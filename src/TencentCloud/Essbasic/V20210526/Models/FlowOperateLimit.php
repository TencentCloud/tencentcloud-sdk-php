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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发起合同流程时对合同流程的部分操作加以限制的配置。
 *
 * @method boolean getNoRelease() 获取<p>发起合同流程时，对签署完成后是否能发起对应的解除合同加以限制：<ul><li><b>false（默认值）</b>: 合同流程完成签署后，支持发起对应的解除协议。</li><li><b>true </b>: 合同流程完成签署后，<b>不支持</b>发起对应的解除协议。</li></ul></p>
 * @method void setNoRelease(boolean $NoRelease) 设置<p>发起合同流程时，对签署完成后是否能发起对应的解除合同加以限制：<ul><li><b>false（默认值）</b>: 合同流程完成签署后，支持发起对应的解除协议。</li><li><b>true </b>: 合同流程完成签署后，<b>不支持</b>发起对应的解除协议。</li></ul></p>
 */
class FlowOperateLimit extends AbstractModel
{
    /**
     * @var boolean <p>发起合同流程时，对签署完成后是否能发起对应的解除合同加以限制：<ul><li><b>false（默认值）</b>: 合同流程完成签署后，支持发起对应的解除协议。</li><li><b>true </b>: 合同流程完成签署后，<b>不支持</b>发起对应的解除协议。</li></ul></p>
     */
    public $NoRelease;

    /**
     * @param boolean $NoRelease <p>发起合同流程时，对签署完成后是否能发起对应的解除合同加以限制：<ul><li><b>false（默认值）</b>: 合同流程完成签署后，支持发起对应的解除协议。</li><li><b>true </b>: 合同流程完成签署后，<b>不支持</b>发起对应的解除协议。</li></ul></p>
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
        if (array_key_exists("NoRelease",$param) and $param["NoRelease"] !== null) {
            $this->NoRelease = $param["NoRelease"];
        }
    }
}

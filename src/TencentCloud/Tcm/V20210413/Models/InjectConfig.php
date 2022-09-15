<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动注入配置
 *
 * @method array getExcludeIPRanges() 获取不需要进行代理的 ip 地址范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludeIPRanges(array $ExcludeIPRanges) 设置不需要进行代理的 ip 地址范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHoldApplicationUntilProxyStarts() 获取是否等待sidecar启动
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHoldApplicationUntilProxyStarts(boolean $HoldApplicationUntilProxyStarts) 设置是否等待sidecar启动
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHoldProxyUntilApplicationEnds() 获取是否允许sidecar等待
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHoldProxyUntilApplicationEnds(boolean $HoldProxyUntilApplicationEnds) 设置是否允许sidecar等待
注意：此字段可能返回 null，表示取不到有效值。
 */
class InjectConfig extends AbstractModel
{
    /**
     * @var array 不需要进行代理的 ip 地址范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludeIPRanges;

    /**
     * @var boolean 是否等待sidecar启动
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HoldApplicationUntilProxyStarts;

    /**
     * @var boolean 是否允许sidecar等待
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HoldProxyUntilApplicationEnds;

    /**
     * @param array $ExcludeIPRanges 不需要进行代理的 ip 地址范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HoldApplicationUntilProxyStarts 是否等待sidecar启动
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HoldProxyUntilApplicationEnds 是否允许sidecar等待
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ExcludeIPRanges",$param) and $param["ExcludeIPRanges"] !== null) {
            $this->ExcludeIPRanges = $param["ExcludeIPRanges"];
        }

        if (array_key_exists("HoldApplicationUntilProxyStarts",$param) and $param["HoldApplicationUntilProxyStarts"] !== null) {
            $this->HoldApplicationUntilProxyStarts = $param["HoldApplicationUntilProxyStarts"];
        }

        if (array_key_exists("HoldProxyUntilApplicationEnds",$param) and $param["HoldProxyUntilApplicationEnds"] !== null) {
            $this->HoldProxyUntilApplicationEnds = $param["HoldProxyUntilApplicationEnds"];
        }
    }
}

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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拦截页面的总体配置，用于配置各个模块的拦截后行为。
 *
 * @method string getSwitch() 获取配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method DropPageDetail getWafDropPageDetail() 获取Waf(托管规则)模块的拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWafDropPageDetail(DropPageDetail $WafDropPageDetail) 设置Waf(托管规则)模块的拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DropPageDetail getAclDropPageDetail() 获取自定义页面的拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAclDropPageDetail(DropPageDetail $AclDropPageDetail) 设置自定义页面的拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DropPageConfig extends AbstractModel
{
    /**
     * @var string 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var DropPageDetail Waf(托管规则)模块的拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WafDropPageDetail;

    /**
     * @var DropPageDetail 自定义页面的拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AclDropPageDetail;

    /**
     * @param string $Switch 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param DropPageDetail $WafDropPageDetail Waf(托管规则)模块的拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DropPageDetail $AclDropPageDetail 自定义页面的拦截页面配置。如果为null，默认使用历史配置。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("WafDropPageDetail",$param) and $param["WafDropPageDetail"] !== null) {
            $this->WafDropPageDetail = new DropPageDetail();
            $this->WafDropPageDetail->deserialize($param["WafDropPageDetail"]);
        }

        if (array_key_exists("AclDropPageDetail",$param) and $param["AclDropPageDetail"] !== null) {
            $this->AclDropPageDetail = new DropPageDetail();
            $this->AclDropPageDetail->deserialize($param["AclDropPageDetail"]);
        }
    }
}

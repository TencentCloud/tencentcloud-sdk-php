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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态签署领取链接配置，当全部签署方均为动态签署方时生效。
 *
 * @method integer getDynamicReceiveType() 获取多份合同批量签署时，动态签署领取要求：<ul><li><b>0（默认值）</b>: 可以领取部分合同进入签署。</li><li><b>1 </b>: 必须全部领取进入签署，生成链接的所有合同必须相同经办人完成合同的领取签署。</li></ul>
 * @method void setDynamicReceiveType(integer $DynamicReceiveType) 设置多份合同批量签署时，动态签署领取要求：<ul><li><b>0（默认值）</b>: 可以领取部分合同进入签署。</li><li><b>1 </b>: 必须全部领取进入签署，生成链接的所有合同必须相同经办人完成合同的领取签署。</li></ul>
 * @method string getOrganizationName() 获取动态签署方时，预设的企业名称，预设企业名称后，只允许对应的企业员工进行领取签署。
 * @method void setOrganizationName(string $OrganizationName) 设置动态签署方时，预设的企业名称，预设企业名称后，只允许对应的企业员工进行领取签署。
 */
class DynamicSignOption extends AbstractModel
{
    /**
     * @var integer 多份合同批量签署时，动态签署领取要求：<ul><li><b>0（默认值）</b>: 可以领取部分合同进入签署。</li><li><b>1 </b>: 必须全部领取进入签署，生成链接的所有合同必须相同经办人完成合同的领取签署。</li></ul>
     */
    public $DynamicReceiveType;

    /**
     * @var string 动态签署方时，预设的企业名称，预设企业名称后，只允许对应的企业员工进行领取签署。
     */
    public $OrganizationName;

    /**
     * @param integer $DynamicReceiveType 多份合同批量签署时，动态签署领取要求：<ul><li><b>0（默认值）</b>: 可以领取部分合同进入签署。</li><li><b>1 </b>: 必须全部领取进入签署，生成链接的所有合同必须相同经办人完成合同的领取签署。</li></ul>
     * @param string $OrganizationName 动态签署方时，预设的企业名称，预设企业名称后，只允许对应的企业员工进行领取签署。
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
        if (array_key_exists("DynamicReceiveType",$param) and $param["DynamicReceiveType"] !== null) {
            $this->DynamicReceiveType = $param["DynamicReceiveType"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }
    }
}

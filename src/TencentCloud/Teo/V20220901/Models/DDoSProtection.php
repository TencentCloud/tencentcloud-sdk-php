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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独立 DDoS 防护配置。
 *
 * @method string getProtectionOption() 获取指定独立 DDoS 的防护范围。取值为：
<li> protect_all_domains：独立 DDoS 防护对站点内全部域名生效，新接入域名自动开启独立 DDoS 防护，入参为 protect_all_domains 时，入参 DomainDDoSProtections 不作处理；</li>
<li> protect_specified_domains：仅对指定域名生效，具体范围可通过 DomainDDoSProtection 参数指定。</li>
 * @method void setProtectionOption(string $ProtectionOption) 设置指定独立 DDoS 的防护范围。取值为：
<li> protect_all_domains：独立 DDoS 防护对站点内全部域名生效，新接入域名自动开启独立 DDoS 防护，入参为 protect_all_domains 时，入参 DomainDDoSProtections 不作处理；</li>
<li> protect_specified_domains：仅对指定域名生效，具体范围可通过 DomainDDoSProtection 参数指定。</li>
 * @method array getDomainDDoSProtections() 获取域名的独立 DDoS 防护配置。在入参场景中：
<li> 当 ProtectionOption 保持为 protect_specified_domains 时：未填写的域名维持原有独立 DDoS 防护配置不变，显式指定的域名​按传入参数更新；</li>
<li> 当 ProtectionOption 由 protect_all_domains 切换为 protect_specified_domains 时：若 DomainDDoSProtections 传空，停用站点下全部域名的独立 DDoS 防护；若 DomainDDoSProtections 不为空，参数中指定的域名停用或保持独立 DDoS 防护，其余未列出的域名统一停用独立 DDoS 防护。</li>
 * @method void setDomainDDoSProtections(array $DomainDDoSProtections) 设置域名的独立 DDoS 防护配置。在入参场景中：
<li> 当 ProtectionOption 保持为 protect_specified_domains 时：未填写的域名维持原有独立 DDoS 防护配置不变，显式指定的域名​按传入参数更新；</li>
<li> 当 ProtectionOption 由 protect_all_domains 切换为 protect_specified_domains 时：若 DomainDDoSProtections 传空，停用站点下全部域名的独立 DDoS 防护；若 DomainDDoSProtections 不为空，参数中指定的域名停用或保持独立 DDoS 防护，其余未列出的域名统一停用独立 DDoS 防护。</li>
 * @method array getSharedCNAMEDDoSProtections() 获取共享 CNAME 的独立 DDoS 防护配置。仅作为出参使用。
 * @method void setSharedCNAMEDDoSProtections(array $SharedCNAMEDDoSProtections) 设置共享 CNAME 的独立 DDoS 防护配置。仅作为出参使用。
 */
class DDoSProtection extends AbstractModel
{
    /**
     * @var string 指定独立 DDoS 的防护范围。取值为：
<li> protect_all_domains：独立 DDoS 防护对站点内全部域名生效，新接入域名自动开启独立 DDoS 防护，入参为 protect_all_domains 时，入参 DomainDDoSProtections 不作处理；</li>
<li> protect_specified_domains：仅对指定域名生效，具体范围可通过 DomainDDoSProtection 参数指定。</li>
     */
    public $ProtectionOption;

    /**
     * @var array 域名的独立 DDoS 防护配置。在入参场景中：
<li> 当 ProtectionOption 保持为 protect_specified_domains 时：未填写的域名维持原有独立 DDoS 防护配置不变，显式指定的域名​按传入参数更新；</li>
<li> 当 ProtectionOption 由 protect_all_domains 切换为 protect_specified_domains 时：若 DomainDDoSProtections 传空，停用站点下全部域名的独立 DDoS 防护；若 DomainDDoSProtections 不为空，参数中指定的域名停用或保持独立 DDoS 防护，其余未列出的域名统一停用独立 DDoS 防护。</li>
     */
    public $DomainDDoSProtections;

    /**
     * @var array 共享 CNAME 的独立 DDoS 防护配置。仅作为出参使用。
     */
    public $SharedCNAMEDDoSProtections;

    /**
     * @param string $ProtectionOption 指定独立 DDoS 的防护范围。取值为：
<li> protect_all_domains：独立 DDoS 防护对站点内全部域名生效，新接入域名自动开启独立 DDoS 防护，入参为 protect_all_domains 时，入参 DomainDDoSProtections 不作处理；</li>
<li> protect_specified_domains：仅对指定域名生效，具体范围可通过 DomainDDoSProtection 参数指定。</li>
     * @param array $DomainDDoSProtections 域名的独立 DDoS 防护配置。在入参场景中：
<li> 当 ProtectionOption 保持为 protect_specified_domains 时：未填写的域名维持原有独立 DDoS 防护配置不变，显式指定的域名​按传入参数更新；</li>
<li> 当 ProtectionOption 由 protect_all_domains 切换为 protect_specified_domains 时：若 DomainDDoSProtections 传空，停用站点下全部域名的独立 DDoS 防护；若 DomainDDoSProtections 不为空，参数中指定的域名停用或保持独立 DDoS 防护，其余未列出的域名统一停用独立 DDoS 防护。</li>
     * @param array $SharedCNAMEDDoSProtections 共享 CNAME 的独立 DDoS 防护配置。仅作为出参使用。
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
        if (array_key_exists("ProtectionOption",$param) and $param["ProtectionOption"] !== null) {
            $this->ProtectionOption = $param["ProtectionOption"];
        }

        if (array_key_exists("DomainDDoSProtections",$param) and $param["DomainDDoSProtections"] !== null) {
            $this->DomainDDoSProtections = [];
            foreach ($param["DomainDDoSProtections"] as $key => $value){
                $obj = new DomainDDoSProtection();
                $obj->deserialize($value);
                array_push($this->DomainDDoSProtections, $obj);
            }
        }

        if (array_key_exists("SharedCNAMEDDoSProtections",$param) and $param["SharedCNAMEDDoSProtections"] !== null) {
            $this->SharedCNAMEDDoSProtections = [];
            foreach ($param["SharedCNAMEDDoSProtections"] as $key => $value){
                $obj = new DomainDDoSProtection();
                $obj->deserialize($value);
                array_push($this->SharedCNAMEDDoSProtections, $obj);
            }
        }
    }
}

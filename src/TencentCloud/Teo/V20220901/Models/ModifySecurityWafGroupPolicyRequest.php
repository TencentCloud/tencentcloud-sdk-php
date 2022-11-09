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
 * ModifySecurityWafGroupPolicy请求参数结构体
 *
 * @method string getZoneId() 获取站点Id。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
 * @method void setZoneId(string $ZoneId) 设置站点Id。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
 * @method string getEntity() 获取子域名。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
 * @method void setEntity(string $Entity) 设置子域名。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
 * @method string getSwitch() 获取总开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>不填默认为上次的配置。
 * @method void setSwitch(string $Switch) 设置总开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>不填默认为上次的配置。
 * @method string getLevel() 获取规则等级，取值有：
<li> loose：宽松；</li>
<li> normal：正常；</li>
<li> strict：严格；</li>
<li> stricter：超严格；</li>
<li> custom：自定义。</li>不填默认为上次的配置。
 * @method void setLevel(string $Level) 设置规则等级，取值有：
<li> loose：宽松；</li>
<li> normal：正常；</li>
<li> strict：严格；</li>
<li> stricter：超严格；</li>
<li> custom：自定义。</li>不填默认为上次的配置。
 * @method string getMode() 获取处置方式，取值有：
<li> block：阻断；</li>
<li> observe：观察。</li>不填默认为上次的配置。
 * @method void setMode(string $Mode) 设置处置方式，取值有：
<li> block：阻断；</li>
<li> observe：观察。</li>不填默认为上次的配置。
 * @method WafRule getWafRules() 获取托管规则。不填默认为上次的配置。
 * @method void setWafRules(WafRule $WafRules) 设置托管规则。不填默认为上次的配置。
 * @method AiRule getAiRule() 获取AI引擎模式。不填默认为上次的配置。
 * @method void setAiRule(AiRule $AiRule) 设置AI引擎模式。不填默认为上次的配置。
 * @method array getWafGroups() 获取托管规则等级组。不填默认为上次的配置。
 * @method void setWafGroups(array $WafGroups) 设置托管规则等级组。不填默认为上次的配置。
 * @method string getTemplateId() 获取模板Id。当使用模板Id时可不填ZoneId和Entity，否则必须填写ZoneId和Entity。
 * @method void setTemplateId(string $TemplateId) 设置模板Id。当使用模板Id时可不填ZoneId和Entity，否则必须填写ZoneId和Entity。
 */
class ModifySecurityWafGroupPolicyRequest extends AbstractModel
{
    /**
     * @var string 站点Id。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
     */
    public $ZoneId;

    /**
     * @var string 子域名。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
     */
    public $Entity;

    /**
     * @var string 总开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>不填默认为上次的配置。
     */
    public $Switch;

    /**
     * @var string 规则等级，取值有：
<li> loose：宽松；</li>
<li> normal：正常；</li>
<li> strict：严格；</li>
<li> stricter：超严格；</li>
<li> custom：自定义。</li>不填默认为上次的配置。
     */
    public $Level;

    /**
     * @var string 处置方式，取值有：
<li> block：阻断；</li>
<li> observe：观察。</li>不填默认为上次的配置。
     */
    public $Mode;

    /**
     * @var WafRule 托管规则。不填默认为上次的配置。
     */
    public $WafRules;

    /**
     * @var AiRule AI引擎模式。不填默认为上次的配置。
     */
    public $AiRule;

    /**
     * @var array 托管规则等级组。不填默认为上次的配置。
     */
    public $WafGroups;

    /**
     * @var string 模板Id。当使用模板Id时可不填ZoneId和Entity，否则必须填写ZoneId和Entity。
     */
    public $TemplateId;

    /**
     * @param string $ZoneId 站点Id。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
     * @param string $Entity 子域名。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
     * @param string $Switch 总开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>不填默认为上次的配置。
     * @param string $Level 规则等级，取值有：
<li> loose：宽松；</li>
<li> normal：正常；</li>
<li> strict：严格；</li>
<li> stricter：超严格；</li>
<li> custom：自定义。</li>不填默认为上次的配置。
     * @param string $Mode 处置方式，取值有：
<li> block：阻断；</li>
<li> observe：观察。</li>不填默认为上次的配置。
     * @param WafRule $WafRules 托管规则。不填默认为上次的配置。
     * @param AiRule $AiRule AI引擎模式。不填默认为上次的配置。
     * @param array $WafGroups 托管规则等级组。不填默认为上次的配置。
     * @param string $TemplateId 模板Id。当使用模板Id时可不填ZoneId和Entity，否则必须填写ZoneId和Entity。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("WafRules",$param) and $param["WafRules"] !== null) {
            $this->WafRules = new WafRule();
            $this->WafRules->deserialize($param["WafRules"]);
        }

        if (array_key_exists("AiRule",$param) and $param["AiRule"] !== null) {
            $this->AiRule = new AiRule();
            $this->AiRule->deserialize($param["AiRule"]);
        }

        if (array_key_exists("WafGroups",$param) and $param["WafGroups"] !== null) {
            $this->WafGroups = [];
            foreach ($param["WafGroups"] as $key => $value){
                $obj = new WafGroup();
                $obj->deserialize($value);
                array_push($this->WafGroups, $obj);
            }
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}

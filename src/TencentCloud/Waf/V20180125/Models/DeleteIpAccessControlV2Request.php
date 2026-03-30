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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteIpAccessControlV2请求参数结构体
 *
 * @method string getDomain() 获取域名，当操作对象为全局规则时，Domain参数应填写为"global"
 * @method void setDomain(string $Domain) 设置域名，当操作对象为全局规则时，Domain参数应填写为"global"
 * @method array getRuleIds() 获取规则ID列表，支持批量删除，在DeleteAll参数为true的时候可以不传
 * @method void setRuleIds(array $RuleIds) 设置规则ID列表，支持批量删除，在DeleteAll参数为true的时候可以不传
 * @method boolean getDeleteAll() 获取是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定IP名单，批量防护不支持
 * @method void setDeleteAll(boolean $DeleteAll) 设置是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定IP名单，批量防护不支持
 * @method string getSourceType() 获取用于按数据来源删除黑白名单记录，非必填，默认为custom。 custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护	），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则
 * @method void setSourceType(string $SourceType) 设置用于按数据来源删除黑白名单记录，非必填，默认为custom。 custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护	），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则
 * @method integer getActionType() 获取IP黑白名单类型，40为IP白名单，42为IP黑名单，在DeleteAll为true的时候必传此参数
 * @method void setActionType(integer $ActionType) 设置IP黑白名单类型，40为IP白名单，42为IP黑名单，在DeleteAll为true的时候必传此参数
 */
class DeleteIpAccessControlV2Request extends AbstractModel
{
    /**
     * @var string 域名，当操作对象为全局规则时，Domain参数应填写为"global"
     */
    public $Domain;

    /**
     * @var array 规则ID列表，支持批量删除，在DeleteAll参数为true的时候可以不传
     */
    public $RuleIds;

    /**
     * @var boolean 是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定IP名单，批量防护不支持
     */
    public $DeleteAll;

    /**
     * @var string 用于按数据来源删除黑白名单记录，非必填，默认为custom。 custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护	），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则
     */
    public $SourceType;

    /**
     * @var integer IP黑白名单类型，40为IP白名单，42为IP黑名单，在DeleteAll为true的时候必传此参数
     */
    public $ActionType;

    /**
     * @param string $Domain 域名，当操作对象为全局规则时，Domain参数应填写为"global"
     * @param array $RuleIds 规则ID列表，支持批量删除，在DeleteAll参数为true的时候可以不传
     * @param boolean $DeleteAll 是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定IP名单，批量防护不支持
     * @param string $SourceType 用于按数据来源删除黑白名单记录，非必填，默认为custom。 custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护	），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则
     * @param integer $ActionType IP黑白名单类型，40为IP白名单，42为IP黑名单，在DeleteAll为true的时候必传此参数
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("DeleteAll",$param) and $param["DeleteAll"] !== null) {
            $this->DeleteAll = $param["DeleteAll"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }
    }
}

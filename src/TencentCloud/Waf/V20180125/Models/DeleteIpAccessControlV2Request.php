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
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getRuleIds() 获取规则ID列表，支持批量删除，在DeleteAll参数为true的时候可以不传
 * @method void setRuleIds(array $RuleIds) 设置规则ID列表，支持批量删除，在DeleteAll参数为true的时候可以不传
 * @method boolean getDeleteAll() 获取是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定IP名单，批量防护不支持
 * @method void setDeleteAll(boolean $DeleteAll) 设置是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定IP名单，批量防护不支持
 * @method string getSourceType() 获取batch表示为批量防护的IP黑白名单
 * @method void setSourceType(string $SourceType) 设置batch表示为批量防护的IP黑白名单
 * @method integer getActionType() 获取IP黑白名单类型，40为IP白名单，42为IP黑名单，在DeleteAll为true的时候必传此参数
 * @method void setActionType(integer $ActionType) 设置IP黑白名单类型，40为IP白名单，42为IP黑名单，在DeleteAll为true的时候必传此参数
 */
class DeleteIpAccessControlV2Request extends AbstractModel
{
    /**
     * @var string 域名
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
     * @var string batch表示为批量防护的IP黑白名单
     */
    public $SourceType;

    /**
     * @var integer IP黑白名单类型，40为IP白名单，42为IP黑名单，在DeleteAll为true的时候必传此参数
     */
    public $ActionType;

    /**
     * @param string $Domain 域名
     * @param array $RuleIds 规则ID列表，支持批量删除，在DeleteAll参数为true的时候可以不传
     * @param boolean $DeleteAll 是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定IP名单，批量防护不支持
     * @param string $SourceType batch表示为批量防护的IP黑白名单
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

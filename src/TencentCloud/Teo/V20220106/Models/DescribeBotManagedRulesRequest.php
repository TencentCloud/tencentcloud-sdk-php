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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBotManagedRules请求参数结构体
 *
 * @method string getZoneId() 获取一级域名
 * @method void setZoneId(string $ZoneId) 设置一级域名
 * @method string getEntity() 获取子域名/应用名
 * @method void setEntity(string $Entity) 设置子域名/应用名
 * @method integer getPage() 获取页数
 * @method void setPage(integer $Page) 设置页数
 * @method integer getPerPage() 获取每页数量
 * @method void setPerPage(integer $PerPage) 设置每页数量
 * @method string getRuleType() 获取idcid/sipbot/uabot规则类型，空代表拉取全部
 * @method void setRuleType(string $RuleType) 设置idcid/sipbot/uabot规则类型，空代表拉取全部
 */
class DescribeBotManagedRulesRequest extends AbstractModel
{
    /**
     * @var string 一级域名
     */
    public $ZoneId;

    /**
     * @var string 子域名/应用名
     */
    public $Entity;

    /**
     * @var integer 页数
     */
    public $Page;

    /**
     * @var integer 每页数量
     */
    public $PerPage;

    /**
     * @var string idcid/sipbot/uabot规则类型，空代表拉取全部
     */
    public $RuleType;

    /**
     * @param string $ZoneId 一级域名
     * @param string $Entity 子域名/应用名
     * @param integer $Page 页数
     * @param integer $PerPage 每页数量
     * @param string $RuleType idcid/sipbot/uabot规则类型，空代表拉取全部
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PerPage",$param) and $param["PerPage"] !== null) {
            $this->PerPage = $param["PerPage"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}

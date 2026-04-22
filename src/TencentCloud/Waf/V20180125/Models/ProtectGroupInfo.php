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
 * 防护对象组对象详情
 *
 * @method integer getID() 获取防护对象组ID
 * @method void setID(integer $ID) 设置防护对象组ID
 * @method string getName() 获取防护对象组名称
 * @method void setName(string $Name) 设置防护对象组名称
 * @method string getRemark() 获取防护对象组备注
 * @method void setRemark(string $Remark) 设置防护对象组备注
 * @method array getDomains() 获取防护对象组中绑定的域名详情
 * @method void setDomains(array $Domains) 设置防护对象组中绑定的域名详情
 * @method integer getRuleNum() 获取关联的批量规则数
 * @method void setRuleNum(integer $RuleNum) 设置关联的批量规则数
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class ProtectGroupInfo extends AbstractModel
{
    /**
     * @var integer 防护对象组ID
     */
    public $ID;

    /**
     * @var string 防护对象组名称
     */
    public $Name;

    /**
     * @var string 防护对象组备注
     */
    public $Remark;

    /**
     * @var array 防护对象组中绑定的域名详情
     */
    public $Domains;

    /**
     * @var integer 关联的批量规则数
     */
    public $RuleNum;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param integer $ID 防护对象组ID
     * @param string $Name 防护对象组名称
     * @param string $Remark 防护对象组备注
     * @param array $Domains 防护对象组中绑定的域名详情
     * @param integer $RuleNum 关联的批量规则数
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = [];
            foreach ($param["Domains"] as $key => $value){
                $obj = new ProtectGroupDomainInfo();
                $obj->deserialize($value);
                array_push($this->Domains, $obj);
            }
        }

        if (array_key_exists("RuleNum",$param) and $param["RuleNum"] !== null) {
            $this->RuleNum = $param["RuleNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

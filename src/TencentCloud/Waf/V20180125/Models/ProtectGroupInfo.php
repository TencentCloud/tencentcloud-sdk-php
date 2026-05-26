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
 * @method integer getID() 获取<p>防护对象组ID</p>
 * @method void setID(integer $ID) 设置<p>防护对象组ID</p>
 * @method string getName() 获取<p>防护对象组名称</p>
 * @method void setName(string $Name) 设置<p>防护对象组名称</p>
 * @method string getRemark() 获取<p>防护对象组备注</p>
 * @method void setRemark(string $Remark) 设置<p>防护对象组备注</p>
 * @method array getDomains() 获取<p>防护对象组中绑定的域名详情</p>
 * @method void setDomains(array $Domains) 设置<p>防护对象组中绑定的域名详情</p>
 * @method integer getRuleNum() 获取<p>关联的批量规则数</p>
 * @method void setRuleNum(integer $RuleNum) 设置<p>关联的批量规则数</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method array getTagInfos() 获取<p>标签信息</p>
 * @method void setTagInfos(array $TagInfos) 设置<p>标签信息</p>
 * @method boolean getBoundTemplate() 获取<p>是否绑定了模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBoundTemplate(boolean $BoundTemplate) 设置<p>是否绑定了模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProtectGroupInfo extends AbstractModel
{
    /**
     * @var integer <p>防护对象组ID</p>
     */
    public $ID;

    /**
     * @var string <p>防护对象组名称</p>
     */
    public $Name;

    /**
     * @var string <p>防护对象组备注</p>
     */
    public $Remark;

    /**
     * @var array <p>防护对象组中绑定的域名详情</p>
     */
    public $Domains;

    /**
     * @var integer <p>关联的批量规则数</p>
     */
    public $RuleNum;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>标签信息</p>
     */
    public $TagInfos;

    /**
     * @var boolean <p>是否绑定了模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BoundTemplate;

    /**
     * @param integer $ID <p>防护对象组ID</p>
     * @param string $Name <p>防护对象组名称</p>
     * @param string $Remark <p>防护对象组备注</p>
     * @param array $Domains <p>防护对象组中绑定的域名详情</p>
     * @param integer $RuleNum <p>关联的批量规则数</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param array $TagInfos <p>标签信息</p>
     * @param boolean $BoundTemplate <p>是否绑定了模板</p>
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

        if (array_key_exists("TagInfos",$param) and $param["TagInfos"] !== null) {
            $this->TagInfos = [];
            foreach ($param["TagInfos"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfos, $obj);
            }
        }

        if (array_key_exists("BoundTemplate",$param) and $param["BoundTemplate"] !== null) {
            $this->BoundTemplate = $param["BoundTemplate"];
        }
    }
}

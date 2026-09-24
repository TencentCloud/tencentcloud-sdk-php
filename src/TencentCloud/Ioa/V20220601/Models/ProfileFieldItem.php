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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登记信息数据
 *
 * @method integer getId() 获取<p>键值id</p>
 * @method void setId(integer $Id) 设置<p>键值id</p>
 * @method integer getKey() 获取<p>排序key(只支持32位)</p>
 * @method void setKey(integer $Key) 设置<p>排序key(只支持32位)</p>
 * @method string getTitle() 获取<p>名称</p>
 * @method void setTitle(string $Title) 设置<p>名称</p>
 * @method integer getType() 获取<p>输入类型(只支持32位)</p>
 * @method void setType(integer $Type) 设置<p>输入类型(只支持32位)</p>
 * @method integer getIsMust() 获取<p>是否必选(只支持32位)</p>
 * @method void setIsMust(integer $IsMust) 设置<p>是否必选(只支持32位)</p>
 * @method integer getIsShow() 获取<p>是否显示(只支持32位)</p>
 * @method void setIsShow(integer $IsShow) 设置<p>是否显示(只支持32位)</p>
 * @method integer getIsCustom() 获取<p>是否自定义(只支持32位)</p>
 * @method void setIsCustom(integer $IsCustom) 设置<p>是否自定义(只支持32位)</p>
 * @method integer getNextOptionKey() 获取<p>下一个选项key(只支持32位)</p>
 * @method void setNextOptionKey(integer $NextOptionKey) 设置<p>下一个选项key(只支持32位)</p>
 * @method string getOptions() 获取<p>选项数据</p>
 * @method void setOptions(string $Options) 设置<p>选项数据</p>
 * @method integer getIsReplace() 获取<p>是否覆盖(只支持32位)</p>
 * @method void setIsReplace(integer $IsReplace) 设置<p>是否覆盖(只支持32位)</p>
 * @method boolean getGroupEditable() 获取<p>是否可以修改分组</p>
 * @method void setGroupEditable(boolean $GroupEditable) 设置<p>是否可以修改分组</p>
 * @method boolean getHasRules() 获取<p>是否有规则</p>
 * @method void setHasRules(boolean $HasRules) 设置<p>是否有规则</p>
 * @method integer getRuleId() 获取<p>规则id</p>
 * @method void setRuleId(integer $RuleId) 设置<p>规则id</p>
 * @method string getTitleEn() 获取<p>名称-英文</p>
 * @method void setTitleEn(string $TitleEn) 设置<p>名称-英文</p>
 * @method string getOptionsEn() 获取<p>选项数据-英文</p>
 * @method void setOptionsEn(string $OptionsEn) 设置<p>选项数据-英文</p>
 * @method array getOptionsItem() 获取<p>选项数据(包含中英文)</p>
 * @method void setOptionsItem(array $OptionsItem) 设置<p>选项数据(包含中英文)</p>
 */
class ProfileFieldItem extends AbstractModel
{
    /**
     * @var integer <p>键值id</p>
     */
    public $Id;

    /**
     * @var integer <p>排序key(只支持32位)</p>
     */
    public $Key;

    /**
     * @var string <p>名称</p>
     */
    public $Title;

    /**
     * @var integer <p>输入类型(只支持32位)</p>
     */
    public $Type;

    /**
     * @var integer <p>是否必选(只支持32位)</p>
     */
    public $IsMust;

    /**
     * @var integer <p>是否显示(只支持32位)</p>
     */
    public $IsShow;

    /**
     * @var integer <p>是否自定义(只支持32位)</p>
     */
    public $IsCustom;

    /**
     * @var integer <p>下一个选项key(只支持32位)</p>
     */
    public $NextOptionKey;

    /**
     * @var string <p>选项数据</p>
     */
    public $Options;

    /**
     * @var integer <p>是否覆盖(只支持32位)</p>
     */
    public $IsReplace;

    /**
     * @var boolean <p>是否可以修改分组</p>
     */
    public $GroupEditable;

    /**
     * @var boolean <p>是否有规则</p>
     */
    public $HasRules;

    /**
     * @var integer <p>规则id</p>
     */
    public $RuleId;

    /**
     * @var string <p>名称-英文</p>
     */
    public $TitleEn;

    /**
     * @var string <p>选项数据-英文</p>
     */
    public $OptionsEn;

    /**
     * @var array <p>选项数据(包含中英文)</p>
     */
    public $OptionsItem;

    /**
     * @param integer $Id <p>键值id</p>
     * @param integer $Key <p>排序key(只支持32位)</p>
     * @param string $Title <p>名称</p>
     * @param integer $Type <p>输入类型(只支持32位)</p>
     * @param integer $IsMust <p>是否必选(只支持32位)</p>
     * @param integer $IsShow <p>是否显示(只支持32位)</p>
     * @param integer $IsCustom <p>是否自定义(只支持32位)</p>
     * @param integer $NextOptionKey <p>下一个选项key(只支持32位)</p>
     * @param string $Options <p>选项数据</p>
     * @param integer $IsReplace <p>是否覆盖(只支持32位)</p>
     * @param boolean $GroupEditable <p>是否可以修改分组</p>
     * @param boolean $HasRules <p>是否有规则</p>
     * @param integer $RuleId <p>规则id</p>
     * @param string $TitleEn <p>名称-英文</p>
     * @param string $OptionsEn <p>选项数据-英文</p>
     * @param array $OptionsItem <p>选项数据(包含中英文)</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsMust",$param) and $param["IsMust"] !== null) {
            $this->IsMust = $param["IsMust"];
        }

        if (array_key_exists("IsShow",$param) and $param["IsShow"] !== null) {
            $this->IsShow = $param["IsShow"];
        }

        if (array_key_exists("IsCustom",$param) and $param["IsCustom"] !== null) {
            $this->IsCustom = $param["IsCustom"];
        }

        if (array_key_exists("NextOptionKey",$param) and $param["NextOptionKey"] !== null) {
            $this->NextOptionKey = $param["NextOptionKey"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = $param["Options"];
        }

        if (array_key_exists("IsReplace",$param) and $param["IsReplace"] !== null) {
            $this->IsReplace = $param["IsReplace"];
        }

        if (array_key_exists("GroupEditable",$param) and $param["GroupEditable"] !== null) {
            $this->GroupEditable = $param["GroupEditable"];
        }

        if (array_key_exists("HasRules",$param) and $param["HasRules"] !== null) {
            $this->HasRules = $param["HasRules"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("TitleEn",$param) and $param["TitleEn"] !== null) {
            $this->TitleEn = $param["TitleEn"];
        }

        if (array_key_exists("OptionsEn",$param) and $param["OptionsEn"] !== null) {
            $this->OptionsEn = $param["OptionsEn"];
        }

        if (array_key_exists("OptionsItem",$param) and $param["OptionsItem"] !== null) {
            $this->OptionsItem = [];
            foreach ($param["OptionsItem"] as $key => $value){
                $obj = new OptionsItem();
                $obj->deserialize($value);
                array_push($this->OptionsItem, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号工厂基线项
 *
 * @method string getIdentifier() 获取账号工厂基线项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
 * @method void setIdentifier(string $Identifier) 设置账号工厂基线项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
 * @method string getName() 获取基线项名称，功能项名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
 * @method void setName(string $Name) 设置基线项名称，功能项名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
 * @method string getNameEn() 获取基线项英文名称，基线项名字唯一，仅支持英文字母、数字、空格、符号@、＆_[]-的组合，1-64个英文字符。
 * @method void setNameEn(string $NameEn) 设置基线项英文名称，基线项名字唯一，仅支持英文字母、数字、空格、符号@、＆_[]-的组合，1-64个英文字符。
 * @method integer getWeight() 获取基线项权重，数值小权重越高，取值范围大于等于0。
 * @method void setWeight(integer $Weight) 设置基线项权重，数值小权重越高，取值范围大于等于0。
 * @method integer getRequired() 获取基线项是否必填，1必填，0非必填
 * @method void setRequired(integer $Required) 设置基线项是否必填，1必填，0非必填
 * @method array getDependsOn() 获取基线项依赖项，N的取值范围与该基线项依赖的其它基线项个数有关。
 * @method void setDependsOn(array $DependsOn) 设置基线项依赖项，N的取值范围与该基线项依赖的其它基线项个数有关。
 * @method string getDescription() 获取基线描述，长度为2~256个英文或中文字符，默认值为空。
 * @method void setDescription(string $Description) 设置基线描述，长度为2~256个英文或中文字符，默认值为空。
 * @method string getDescriptionEn() 获取基线项英文描述，长度为2~1024个英文字符，默认值为空。
 * @method void setDescriptionEn(string $DescriptionEn) 设置基线项英文描述，长度为2~1024个英文字符，默认值为空。
 * @method string getClassify() 获取基线分类，长度为2~32个英文或中文字符，不能为空。
 * @method void setClassify(string $Classify) 设置基线分类，长度为2~32个英文或中文字符，不能为空。
 * @method string getClassifyEn() 获取基线英文分类，长度为2~64个英文字符，不能为空。
 * @method void setClassifyEn(string $ClassifyEn) 设置基线英文分类，长度为2~64个英文字符，不能为空。
 */
class AccountFactoryItem extends AbstractModel
{
    /**
     * @var string 账号工厂基线项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
     */
    public $Identifier;

    /**
     * @var string 基线项名称，功能项名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
     */
    public $Name;

    /**
     * @var string 基线项英文名称，基线项名字唯一，仅支持英文字母、数字、空格、符号@、＆_[]-的组合，1-64个英文字符。
     */
    public $NameEn;

    /**
     * @var integer 基线项权重，数值小权重越高，取值范围大于等于0。
     */
    public $Weight;

    /**
     * @var integer 基线项是否必填，1必填，0非必填
     */
    public $Required;

    /**
     * @var array 基线项依赖项，N的取值范围与该基线项依赖的其它基线项个数有关。
     */
    public $DependsOn;

    /**
     * @var string 基线描述，长度为2~256个英文或中文字符，默认值为空。
     */
    public $Description;

    /**
     * @var string 基线项英文描述，长度为2~1024个英文字符，默认值为空。
     */
    public $DescriptionEn;

    /**
     * @var string 基线分类，长度为2~32个英文或中文字符，不能为空。
     */
    public $Classify;

    /**
     * @var string 基线英文分类，长度为2~64个英文字符，不能为空。
     */
    public $ClassifyEn;

    /**
     * @param string $Identifier 账号工厂基线项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
     * @param string $Name 基线项名称，功能项名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
     * @param string $NameEn 基线项英文名称，基线项名字唯一，仅支持英文字母、数字、空格、符号@、＆_[]-的组合，1-64个英文字符。
     * @param integer $Weight 基线项权重，数值小权重越高，取值范围大于等于0。
     * @param integer $Required 基线项是否必填，1必填，0非必填
     * @param array $DependsOn 基线项依赖项，N的取值范围与该基线项依赖的其它基线项个数有关。
     * @param string $Description 基线描述，长度为2~256个英文或中文字符，默认值为空。
     * @param string $DescriptionEn 基线项英文描述，长度为2~1024个英文字符，默认值为空。
     * @param string $Classify 基线分类，长度为2~32个英文或中文字符，不能为空。
     * @param string $ClassifyEn 基线英文分类，长度为2~64个英文字符，不能为空。
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NameEn",$param) and $param["NameEn"] !== null) {
            $this->NameEn = $param["NameEn"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("DependsOn",$param) and $param["DependsOn"] !== null) {
            $this->DependsOn = [];
            foreach ($param["DependsOn"] as $key => $value){
                $obj = new DependsOnItem();
                $obj->deserialize($value);
                array_push($this->DependsOn, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DescriptionEn",$param) and $param["DescriptionEn"] !== null) {
            $this->DescriptionEn = $param["DescriptionEn"];
        }

        if (array_key_exists("Classify",$param) and $param["Classify"] !== null) {
            $this->Classify = $param["Classify"];
        }

        if (array_key_exists("ClassifyEn",$param) and $param["ClassifyEn"] !== null) {
            $this->ClassifyEn = $param["ClassifyEn"];
        }
    }
}

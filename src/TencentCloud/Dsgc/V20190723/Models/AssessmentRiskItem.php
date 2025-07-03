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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险项列表详细数据
 *
 * @method integer getId() 获取脆弱项id
 * @method void setId(integer $Id) 设置脆弱项id
 * @method string getRiskName() 获取名称
 * @method void setRiskName(string $RiskName) 设置名称
 * @method string getLevel() 获取脆弱性级别
 * @method void setLevel(string $Level) 设置脆弱性级别
 * @method string getDescription() 获取说明
 * @method void setDescription(string $Description) 设置说明
 * @method string getRiskType() 获取风险类型
 * @method void setRiskType(string $RiskType) 设置风险类型
 * @method integer getReferTemplateCount() 获取关联模板个数
 * @method void setReferTemplateCount(integer $ReferTemplateCount) 设置关联模板个数
 * @method array getSupportDataSource() 获取支持的数据源
 * @method void setSupportDataSource(array $SupportDataSource) 设置支持的数据源
 * @method string getRiskSide() 获取风险面
 * @method void setRiskSide(string $RiskSide) 设置风险面
 * @method array getReferTemplateList() 获取关联模板列表
 * @method void setReferTemplateList(array $ReferTemplateList) 设置关联模板列表
 */
class AssessmentRiskItem extends AbstractModel
{
    /**
     * @var integer 脆弱项id
     */
    public $Id;

    /**
     * @var string 名称
     */
    public $RiskName;

    /**
     * @var string 脆弱性级别
     */
    public $Level;

    /**
     * @var string 说明
     */
    public $Description;

    /**
     * @var string 风险类型
     */
    public $RiskType;

    /**
     * @var integer 关联模板个数
     */
    public $ReferTemplateCount;

    /**
     * @var array 支持的数据源
     */
    public $SupportDataSource;

    /**
     * @var string 风险面
     */
    public $RiskSide;

    /**
     * @var array 关联模板列表
     */
    public $ReferTemplateList;

    /**
     * @param integer $Id 脆弱项id
     * @param string $RiskName 名称
     * @param string $Level 脆弱性级别
     * @param string $Description 说明
     * @param string $RiskType 风险类型
     * @param integer $ReferTemplateCount 关联模板个数
     * @param array $SupportDataSource 支持的数据源
     * @param string $RiskSide 风险面
     * @param array $ReferTemplateList 关联模板列表
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

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("ReferTemplateCount",$param) and $param["ReferTemplateCount"] !== null) {
            $this->ReferTemplateCount = $param["ReferTemplateCount"];
        }

        if (array_key_exists("SupportDataSource",$param) and $param["SupportDataSource"] !== null) {
            $this->SupportDataSource = $param["SupportDataSource"];
        }

        if (array_key_exists("RiskSide",$param) and $param["RiskSide"] !== null) {
            $this->RiskSide = $param["RiskSide"];
        }

        if (array_key_exists("ReferTemplateList",$param) and $param["ReferTemplateList"] !== null) {
            $this->ReferTemplateList = [];
            foreach ($param["ReferTemplateList"] as $key => $value){
                $obj = new TemplateInfo();
                $obj->deserialize($value);
                array_push($this->ReferTemplateList, $obj);
            }
        }
    }
}

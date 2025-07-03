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
 * ES扫描任务结果详情
 *
 * @method integer getId() 获取id
 * @method void setId(integer $Id) 设置id
 * @method integer getTaskId() 获取任务id
 * @method void setTaskId(integer $TaskId) 设置任务id
 * @method string getFieldName() 获取字段名称
 * @method void setFieldName(string $FieldName) 设置字段名称
 * @method integer getRuleId() 获取规则id
 * @method void setRuleId(integer $RuleId) 设置规则id
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getCategoryId() 获取分类id
 * @method void setCategoryId(integer $CategoryId) 设置分类id
 * @method string getCategoryName() 获取分类名称
 * @method void setCategoryName(string $CategoryName) 设置分类名称
 * @method array getCategoryArr() 获取多级分类的路径
 * @method void setCategoryArr(array $CategoryArr) 设置多级分类的路径
 * @method integer getLevelId() 获取分级id
 * @method void setLevelId(integer $LevelId) 设置分级id
 * @method string getLevelName() 获取分级名称
 * @method void setLevelName(string $LevelName) 设置分级名称
 * @method integer getLevelRiskScore() 获取分级分数
 * @method void setLevelRiskScore(integer $LevelRiskScore) 设置分级分数
 */
class ESTaskResultDetail extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var integer 任务id
     */
    public $TaskId;

    /**
     * @var string 字段名称
     */
    public $FieldName;

    /**
     * @var integer 规则id
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 分类id
     */
    public $CategoryId;

    /**
     * @var string 分类名称
     */
    public $CategoryName;

    /**
     * @var array 多级分类的路径
     */
    public $CategoryArr;

    /**
     * @var integer 分级id
     */
    public $LevelId;

    /**
     * @var string 分级名称
     */
    public $LevelName;

    /**
     * @var integer 分级分数
     */
    public $LevelRiskScore;

    /**
     * @param integer $Id id
     * @param integer $TaskId 任务id
     * @param string $FieldName 字段名称
     * @param integer $RuleId 规则id
     * @param string $RuleName 规则名称
     * @param integer $CategoryId 分类id
     * @param string $CategoryName 分类名称
     * @param array $CategoryArr 多级分类的路径
     * @param integer $LevelId 分级id
     * @param string $LevelName 分级名称
     * @param integer $LevelRiskScore 分级分数
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("CategoryArr",$param) and $param["CategoryArr"] !== null) {
            $this->CategoryArr = $param["CategoryArr"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("LevelRiskScore",$param) and $param["LevelRiskScore"] !== null) {
            $this->LevelRiskScore = $param["LevelRiskScore"];
        }
    }
}

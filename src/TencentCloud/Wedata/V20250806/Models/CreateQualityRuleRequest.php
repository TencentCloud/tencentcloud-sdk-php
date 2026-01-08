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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateQualityRule请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getCreateRuleScene() 获取规则创建场景
1：单表多规则
2：多表单规则
3：克隆创建规则
 * @method void setCreateRuleScene(integer $CreateRuleScene) 设置规则创建场景
1：单表多规则
2：多表单规则
3：克隆创建规则
 * @method array getRuleBOList() 获取单条规则信息集合	
 * @method void setRuleBOList(array $RuleBOList) 设置单条规则信息集合	
 */
class CreateQualityRuleRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 规则创建场景
1：单表多规则
2：多表单规则
3：克隆创建规则
     */
    public $CreateRuleScene;

    /**
     * @var array 单条规则信息集合	
     */
    public $RuleBOList;

    /**
     * @param string $ProjectId 项目id
     * @param integer $CreateRuleScene 规则创建场景
1：单表多规则
2：多表单规则
3：克隆创建规则
     * @param array $RuleBOList 单条规则信息集合	
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreateRuleScene",$param) and $param["CreateRuleScene"] !== null) {
            $this->CreateRuleScene = $param["CreateRuleScene"];
        }

        if (array_key_exists("RuleBOList",$param) and $param["RuleBOList"] !== null) {
            $this->RuleBOList = [];
            foreach ($param["RuleBOList"] as $key => $value){
                $obj = new QualityRuleInfo();
                $obj->deserialize($value);
                array_push($this->RuleBOList, $obj);
            }
        }
    }
}

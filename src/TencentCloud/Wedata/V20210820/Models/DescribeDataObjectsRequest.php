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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataObjects请求参数结构体
 *
 * @method string getDatasourceId() 获取数据来源ID
 * @method void setDatasourceId(string $DatasourceId) 设置数据来源ID
 * @method string getTableId() 获取数据表ID
 * @method void setTableId(string $TableId) 设置数据表ID
 * @method integer getRuleGroupId() 获取质量规则组ID
 * @method void setRuleGroupId(integer $RuleGroupId) 设置质量规则组ID
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 */
class DescribeDataObjectsRequest extends AbstractModel
{
    /**
     * @var string 数据来源ID
     */
    public $DatasourceId;

    /**
     * @var string 数据表ID
     */
    public $TableId;

    /**
     * @var integer 质量规则组ID
     */
    public $RuleGroupId;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @param string $DatasourceId 数据来源ID
     * @param string $TableId 数据表ID
     * @param integer $RuleGroupId 质量规则组ID
     * @param string $ProjectId 项目ID
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}

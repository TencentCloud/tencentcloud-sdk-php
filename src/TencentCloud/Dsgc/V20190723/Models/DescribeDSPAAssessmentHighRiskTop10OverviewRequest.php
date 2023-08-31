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
 * DescribeDSPAAssessmentHighRiskTop10Overview请求参数结构体
 *
 * @method string getDspaId() 获取dspa实例Id
 * @method void setDspaId(string $DspaId) 设置dspa实例Id
 * @method integer getTemplateId() 获取评估模版id
 * @method void setTemplateId(integer $TemplateId) 设置评估模版id
 * @method string getFilter() 获取过滤条件， rdb（数据库）cos（对象存储）
不传就是全部
 * @method void setFilter(string $Filter) 设置过滤条件， rdb（数据库）cos（对象存储）
不传就是全部
 */
class DescribeDSPAAssessmentHighRiskTop10OverviewRequest extends AbstractModel
{
    /**
     * @var string dspa实例Id
     */
    public $DspaId;

    /**
     * @var integer 评估模版id
     */
    public $TemplateId;

    /**
     * @var string 过滤条件， rdb（数据库）cos（对象存储）
不传就是全部
     */
    public $Filter;

    /**
     * @param string $DspaId dspa实例Id
     * @param integer $TemplateId 评估模版id
     * @param string $Filter 过滤条件， rdb（数据库）cos（对象存储）
不传就是全部
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }
    }
}

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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPAAssessmentRiskSideList请求参数结构体
 *
 * @method string getDspaId() 获取<p>DSPA实例ID</p>
 * @method void setDspaId(string $DspaId) 设置<p>DSPA实例ID</p>
 * @method integer getTemplateId() 获取<p>评估模板id</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>评估模板id</p>
 */
class DescribeDSPAAssessmentRiskSideListRequest extends AbstractModel
{
    /**
     * @var string <p>DSPA实例ID</p>
     */
    public $DspaId;

    /**
     * @var integer <p>评估模板id</p>
     */
    public $TemplateId;

    /**
     * @param string $DspaId <p>DSPA实例ID</p>
     * @param integer $TemplateId <p>评估模板id</p>
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
    }
}

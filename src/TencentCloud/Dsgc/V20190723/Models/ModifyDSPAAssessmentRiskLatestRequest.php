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
 * ModifyDSPAAssessmentRiskLatest请求参数结构体
 *
 * @method string getDspaId() 获取dspa实例id
 * @method void setDspaId(string $DspaId) 设置dspa实例id
 * @method integer getRiskLatestTableId() 获取最新风险项Id
 * @method void setRiskLatestTableId(integer $RiskLatestTableId) 设置最新风险项Id
 * @method string getStatus() 获取风险状态（waiting:待处理，processing:处理中，finished:已处理，ignored:已忽略）
 * @method void setStatus(string $Status) 设置风险状态（waiting:待处理，processing:处理中，finished:已处理，ignored:已忽略）
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 * @method string getProcessPeople() 获取处置人
 * @method void setProcessPeople(string $ProcessPeople) 设置处置人
 * @method array getBathRiskIdList() 获取批量处理的列表
 * @method void setBathRiskIdList(array $BathRiskIdList) 设置批量处理的列表
 */
class ModifyDSPAAssessmentRiskLatestRequest extends AbstractModel
{
    /**
     * @var string dspa实例id
     */
    public $DspaId;

    /**
     * @var integer 最新风险项Id
     * @deprecated
     */
    public $RiskLatestTableId;

    /**
     * @var string 风险状态（waiting:待处理，processing:处理中，finished:已处理，ignored:已忽略）
     */
    public $Status;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @var string 处置人
     */
    public $ProcessPeople;

    /**
     * @var array 批量处理的列表
     */
    public $BathRiskIdList;

    /**
     * @param string $DspaId dspa实例id
     * @param integer $RiskLatestTableId 最新风险项Id
     * @param string $Status 风险状态（waiting:待处理，processing:处理中，finished:已处理，ignored:已忽略）
     * @param string $Note 备注
     * @param string $ProcessPeople 处置人
     * @param array $BathRiskIdList 批量处理的列表
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

        if (array_key_exists("RiskLatestTableId",$param) and $param["RiskLatestTableId"] !== null) {
            $this->RiskLatestTableId = $param["RiskLatestTableId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("ProcessPeople",$param) and $param["ProcessPeople"] !== null) {
            $this->ProcessPeople = $param["ProcessPeople"];
        }

        if (array_key_exists("BathRiskIdList",$param) and $param["BathRiskIdList"] !== null) {
            $this->BathRiskIdList = $param["BathRiskIdList"];
        }
    }
}

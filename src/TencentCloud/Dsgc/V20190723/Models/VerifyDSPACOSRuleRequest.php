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
 * VerifyDSPACOSRule请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method ScanTaskCOSRules getCOSRules() 获取待验证COS规则
 * @method void setCOSRules(ScanTaskCOSRules $COSRules) 设置待验证COS规则
 * @method string getData() 获取待验证数据
 * @method void setData(string $Data) 设置待验证数据
 */
class VerifyDSPACOSRuleRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var ScanTaskCOSRules 待验证COS规则
     */
    public $COSRules;

    /**
     * @var string 待验证数据
     */
    public $Data;

    /**
     * @param string $DspaId DSPA实例ID
     * @param ScanTaskCOSRules $COSRules 待验证COS规则
     * @param string $Data 待验证数据
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

        if (array_key_exists("COSRules",$param) and $param["COSRules"] !== null) {
            $this->COSRules = new ScanTaskCOSRules();
            $this->COSRules->deserialize($param["COSRules"]);
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}

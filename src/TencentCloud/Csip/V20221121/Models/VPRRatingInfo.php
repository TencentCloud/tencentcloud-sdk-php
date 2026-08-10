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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VRP评级信息
 *
 * @method string getResult() 获取VPR 评级结果
枚举值：
URGENT：立即修复
SUGGESTED：建议修复
DEFERRABLE：可延迟修复
 * @method void setResult(string $Result) 设置VPR 评级结果
枚举值：
URGENT：立即修复
SUGGESTED：建议修复
DEFERRABLE：可延迟修复
 * @method string getRemark() 获取评级说明
 * @method void setRemark(string $Remark) 设置评级说明
 * @method array getStage() 获取分阶段评级详情列表
 * @method void setStage(array $Stage) 设置分阶段评级详情列表
 */
class VPRRatingInfo extends AbstractModel
{
    /**
     * @var string VPR 评级结果
枚举值：
URGENT：立即修复
SUGGESTED：建议修复
DEFERRABLE：可延迟修复
     */
    public $Result;

    /**
     * @var string 评级说明
     */
    public $Remark;

    /**
     * @var array 分阶段评级详情列表
     */
    public $Stage;

    /**
     * @param string $Result VPR 评级结果
枚举值：
URGENT：立即修复
SUGGESTED：建议修复
DEFERRABLE：可延迟修复
     * @param string $Remark 评级说明
     * @param array $Stage 分阶段评级详情列表
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = [];
            foreach ($param["Stage"] as $key => $value){
                $obj = new VPRRatingStage();
                $obj->deserialize($value);
                array_push($this->Stage, $obj);
            }
        }
    }
}

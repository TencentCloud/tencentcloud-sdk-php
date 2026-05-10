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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发货步骤描述
 *
 * @method integer getTotalSteps() 获取<p>总步骤数</p>
 * @method void setTotalSteps(integer $TotalSteps) 设置<p>总步骤数</p>
 * @method integer getCurrentStep() 获取<p>当前步骤</p>
 * @method void setCurrentStep(integer $CurrentStep) 设置<p>当前步骤</p>
 * @method array getSteps() 获取<p>步骤详情</p>
 * @method void setSteps(array $Steps) 设置<p>步骤详情</p>
 */
class CreatingProgress extends AbstractModel
{
    /**
     * @var integer <p>总步骤数</p>
     */
    public $TotalSteps;

    /**
     * @var integer <p>当前步骤</p>
     */
    public $CurrentStep;

    /**
     * @var array <p>步骤详情</p>
     */
    public $Steps;

    /**
     * @param integer $TotalSteps <p>总步骤数</p>
     * @param integer $CurrentStep <p>当前步骤</p>
     * @param array $Steps <p>步骤详情</p>
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
        if (array_key_exists("TotalSteps",$param) and $param["TotalSteps"] !== null) {
            $this->TotalSteps = $param["TotalSteps"];
        }

        if (array_key_exists("CurrentStep",$param) and $param["CurrentStep"] !== null) {
            $this->CurrentStep = $param["CurrentStep"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new CreatingStepInfo();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }
    }
}

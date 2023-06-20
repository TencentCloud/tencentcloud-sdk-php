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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弱口令风险高级配置
 *
 * @method integer getCheckItemId() 获取检测项ID
 * @method void setCheckItemId(integer $CheckItemId) 设置检测项ID
 * @method integer getEnable() 获取是否开启，0-不开启，1-开启
 * @method void setEnable(integer $Enable) 设置是否开启，0-不开启，1-开启
 */
class TaskCenterWeakPwdRiskInputParam extends AbstractModel
{
    /**
     * @var integer 检测项ID
     */
    public $CheckItemId;

    /**
     * @var integer 是否开启，0-不开启，1-开启
     */
    public $Enable;

    /**
     * @param integer $CheckItemId 检测项ID
     * @param integer $Enable 是否开启，0-不开启，1-开启
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
        if (array_key_exists("CheckItemId",$param) and $param["CheckItemId"] !== null) {
            $this->CheckItemId = $param["CheckItemId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}

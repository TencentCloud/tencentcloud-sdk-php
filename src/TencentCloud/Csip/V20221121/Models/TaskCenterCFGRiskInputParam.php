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
 * 配置风险高级配置
 *
 * @method string getItemId() 获取检测项ID
 * @method void setItemId(string $ItemId) 设置检测项ID
 * @method integer getEnable() 获取是否开启，0-不开启，1-开启
 * @method void setEnable(integer $Enable) 设置是否开启，0-不开启，1-开启
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 */
class TaskCenterCFGRiskInputParam extends AbstractModel
{
    /**
     * @var string 检测项ID
     */
    public $ItemId;

    /**
     * @var integer 是否开启，0-不开启，1-开启
     */
    public $Enable;

    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @param string $ItemId 检测项ID
     * @param integer $Enable 是否开启，0-不开启，1-开启
     * @param string $ResourceType 资源类型
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}

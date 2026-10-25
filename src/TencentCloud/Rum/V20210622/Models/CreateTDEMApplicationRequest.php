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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTDEMApplication请求参数结构体
 *
 * @method string getInstanceId() 获取<p>业务系统 ID（必填）</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID（必填）</p>
 * @method string getName() 获取<p>应用名称（必填）</p>
 * @method void setName(string $Name) 设置<p>应用名称（必填）</p>
 * @method string getType() 获取<p>应用类型。取值：web、wx-miniprogram、uniapp、ios、android、electron、rn（React Native）。</p>
 * @method void setType(string $Type) 设置<p>应用类型。取值：web、wx-miniprogram、uniapp、ios、android、electron、rn（React Native）。</p>
 * @method string getDesc() 获取<p>应用描述（可选）</p>
 * @method void setDesc(string $Desc) 设置<p>应用描述（可选）</p>
 * @method array getApmInstanceIds() 获取<p>APM 实例 ID</p>
 * @method void setApmInstanceIds(array $ApmInstanceIds) 设置<p>APM 实例 ID</p>
 */
class CreateTDEMApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>业务系统 ID（必填）</p>
     */
    public $InstanceId;

    /**
     * @var string <p>应用名称（必填）</p>
     */
    public $Name;

    /**
     * @var string <p>应用类型。取值：web、wx-miniprogram、uniapp、ios、android、electron、rn（React Native）。</p>
     */
    public $Type;

    /**
     * @var string <p>应用描述（可选）</p>
     */
    public $Desc;

    /**
     * @var array <p>APM 实例 ID</p>
     */
    public $ApmInstanceIds;

    /**
     * @param string $InstanceId <p>业务系统 ID（必填）</p>
     * @param string $Name <p>应用名称（必填）</p>
     * @param string $Type <p>应用类型。取值：web、wx-miniprogram、uniapp、ios、android、electron、rn（React Native）。</p>
     * @param string $Desc <p>应用描述（可选）</p>
     * @param array $ApmInstanceIds <p>APM 实例 ID</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ApmInstanceIds",$param) and $param["ApmInstanceIds"] !== null) {
            $this->ApmInstanceIds = $param["ApmInstanceIds"];
        }
    }
}

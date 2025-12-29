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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 澄清询问配置
 *
 * @method integer getOutputType() 获取输出类型，1-文本 3-widget
 * @method void setOutputType(integer $OutputType) 设置输出类型，1-文本 3-widget
 * @method array getWidgetConfigs() 获取澄清widget配置
 * @method void setWidgetConfigs(array $WidgetConfigs) 设置澄清widget配置
 */
class ClarificationConfig extends AbstractModel
{
    /**
     * @var integer 输出类型，1-文本 3-widget
     */
    public $OutputType;

    /**
     * @var array 澄清widget配置
     */
    public $WidgetConfigs;

    /**
     * @param integer $OutputType 输出类型，1-文本 3-widget
     * @param array $WidgetConfigs 澄清widget配置
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
        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("WidgetConfigs",$param) and $param["WidgetConfigs"] !== null) {
            $this->WidgetConfigs = [];
            foreach ($param["WidgetConfigs"] as $key => $value){
                $obj = new ClarificationWidgetConfig();
                $obj->deserialize($value);
                array_push($this->WidgetConfigs, $obj);
            }
        }
    }
}

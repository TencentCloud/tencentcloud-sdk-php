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
 * Widget输出参数配置
 *
 * @method string getWidgetId() 获取widget id
 * @method void setWidgetId(string $WidgetId) 设置widget id
 * @method string getWidgetName() 获取widget名字
 * @method void setWidgetName(string $WidgetName) 设置widget名字
 * @method array getWidgetParam() 获取展示结果
 * @method void setWidgetParam(array $WidgetParam) 设置展示结果
 */
class OutputWidgetConfig extends AbstractModel
{
    /**
     * @var string widget id
     */
    public $WidgetId;

    /**
     * @var string widget名字
     */
    public $WidgetName;

    /**
     * @var array 展示结果
     */
    public $WidgetParam;

    /**
     * @param string $WidgetId widget id
     * @param string $WidgetName widget名字
     * @param array $WidgetParam 展示结果
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
        if (array_key_exists("WidgetId",$param) and $param["WidgetId"] !== null) {
            $this->WidgetId = $param["WidgetId"];
        }

        if (array_key_exists("WidgetName",$param) and $param["WidgetName"] !== null) {
            $this->WidgetName = $param["WidgetName"];
        }

        if (array_key_exists("WidgetParam",$param) and $param["WidgetParam"] !== null) {
            $this->WidgetParam = [];
            foreach ($param["WidgetParam"] as $key => $value){
                $obj = new WidgetParam();
                $obj->deserialize($value);
                array_push($this->WidgetParam, $obj);
            }
        }
    }
}

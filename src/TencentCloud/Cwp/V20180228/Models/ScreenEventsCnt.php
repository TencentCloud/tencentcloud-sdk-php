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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统计入侵检测
 *
 * @method string getTitle() 获取展示内容：待处理风险总数，影响资产总数
 * @method void setTitle(string $Title) 设置展示内容：待处理风险总数，影响资产总数
 * @method integer getTotal() 获取事件总数
 * @method void setTotal(integer $Total) 设置事件总数
 * @method array getCategory() 获取name 具体展示内容类型： 攻击事件, 潜在风险, 失陷资产, 潜在风险资产
Value: 事件统计数
 * @method void setCategory(array $Category) 设置name 具体展示内容类型： 攻击事件, 潜在风险, 失陷资产, 潜在风险资产
Value: 事件统计数
 */
class ScreenEventsCnt extends AbstractModel
{
    /**
     * @var string 展示内容：待处理风险总数，影响资产总数
     */
    public $Title;

    /**
     * @var integer 事件总数
     */
    public $Total;

    /**
     * @var array name 具体展示内容类型： 攻击事件, 潜在风险, 失陷资产, 潜在风险资产
Value: 事件统计数
     */
    public $Category;

    /**
     * @param string $Title 展示内容：待处理风险总数，影响资产总数
     * @param integer $Total 事件总数
     * @param array $Category name 具体展示内容类型： 攻击事件, 潜在风险, 失陷资产, 潜在风险资产
Value: 事件统计数
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = [];
            foreach ($param["Category"] as $key => $value){
                $obj = new ScreenNameValue();
                $obj->deserialize($value);
                array_push($this->Category, $obj);
            }
        }
    }
}

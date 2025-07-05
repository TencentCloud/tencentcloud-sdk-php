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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCheckItemList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取每次查询的最大记录数量
 * @method void setLimit(integer $Limit) 设置每次查询的最大记录数量
 * @method array getFilters() 获取Name 可取值：
Name: 检查项名称
RiskType: 风险类别
RiskLevel: 风险等级
RiskTarget: 检查对象
RiskAttribute: 检测项所属分型线类型
Enable: 检查项是否开启(0:关闭 1:开启)
 * @method void setFilters(array $Filters) 设置Name 可取值：
Name: 检查项名称
RiskType: 风险类别
RiskLevel: 风险等级
RiskTarget: 检查对象
RiskAttribute: 检测项所属分型线类型
Enable: 检查项是否开启(0:关闭 1:开启)
 */
class DescribeCheckItemListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 每次查询的最大记录数量
     */
    public $Limit;

    /**
     * @var array Name 可取值：
Name: 检查项名称
RiskType: 风险类别
RiskLevel: 风险等级
RiskTarget: 检查对象
RiskAttribute: 检测项所属分型线类型
Enable: 检查项是否开启(0:关闭 1:开启)
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 每次查询的最大记录数量
     * @param array $Filters Name 可取值：
Name: 检查项名称
RiskType: 风险类别
RiskLevel: 风险等级
RiskTarget: 检查对象
RiskAttribute: 检测项所属分型线类型
Enable: 检查项是否开启(0:关闭 1:开启)
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ComplianceFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

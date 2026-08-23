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
 * DescribeSkillScanAlertList请求参数结构体
 *
 * @method integer getOffset() 获取分页偏移量
取值范围：[0, +∞)
默认值：0
 * @method void setOffset(integer $Offset) 设置分页偏移量
取值范围：[0, +∞)
默认值：0
 * @method integer getLimit() 获取每页返回数量
取值范围：[1, 200]
默认值：10
 * @method void setLimit(integer $Limit) 设置每页返回数量
取值范围：[1, 200]
默认值：10
 * @method array getFilters() 获取过滤条件列表，支持的过滤字段：BelongAssetType（归属资产类型 HOST/CONTAINER，未指定默认 HOST）、ContainerId（容器 ID，仅容器告警生效）、RiskLevel（风险等级，精确匹配）、Status（处理状态，精确匹配）、SkillName（Skill 名称，模糊匹配）、UUID（主机 UUID，精确匹配）、Level（告警级别，精确匹配）、ContentHash（文件 SHA256，精确匹配）、InstanceID（实例 ID，精确匹配）、InstanceName（实例名称，模糊匹配）、SkillPath（Skill 路径，模糊匹配）
 * @method void setFilters(array $Filters) 设置过滤条件列表，支持的过滤字段：BelongAssetType（归属资产类型 HOST/CONTAINER，未指定默认 HOST）、ContainerId（容器 ID，仅容器告警生效）、RiskLevel（风险等级，精确匹配）、Status（处理状态，精确匹配）、SkillName（Skill 名称，模糊匹配）、UUID（主机 UUID，精确匹配）、Level（告警级别，精确匹配）、ContentHash（文件 SHA256，精确匹配）、InstanceID（实例 ID，精确匹配）、InstanceName（实例名称，模糊匹配）、SkillPath（Skill 路径，模糊匹配）
 * @method string getOrder() 获取排序方式
枚举值：
ASC：升序
DESC：降序
默认值：DESC
 * @method void setOrder(string $Order) 设置排序方式
枚举值：
ASC：升序
DESC：降序
默认值：DESC
 * @method string getBy() 获取排序字段
枚举值：
CreateTime：首次检出时间
SecurityScore：安全评分
UpdateTime：更新时间
默认值：CreateTime
 * @method void setBy(string $By) 设置排序字段
枚举值：
CreateTime：首次检出时间
SecurityScore：安全评分
UpdateTime：更新时间
默认值：CreateTime
 * @method array getMemberId() 获取集团账号的成员 id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员 id
 */
class DescribeSkillScanAlertListRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移量
取值范围：[0, +∞)
默认值：0
     */
    public $Offset;

    /**
     * @var integer 每页返回数量
取值范围：[1, 200]
默认值：10
     */
    public $Limit;

    /**
     * @var array 过滤条件列表，支持的过滤字段：BelongAssetType（归属资产类型 HOST/CONTAINER，未指定默认 HOST）、ContainerId（容器 ID，仅容器告警生效）、RiskLevel（风险等级，精确匹配）、Status（处理状态，精确匹配）、SkillName（Skill 名称，模糊匹配）、UUID（主机 UUID，精确匹配）、Level（告警级别，精确匹配）、ContentHash（文件 SHA256，精确匹配）、InstanceID（实例 ID，精确匹配）、InstanceName（实例名称，模糊匹配）、SkillPath（Skill 路径，模糊匹配）
     */
    public $Filters;

    /**
     * @var string 排序方式
枚举值：
ASC：升序
DESC：降序
默认值：DESC
     */
    public $Order;

    /**
     * @var string 排序字段
枚举值：
CreateTime：首次检出时间
SecurityScore：安全评分
UpdateTime：更新时间
默认值：CreateTime
     */
    public $By;

    /**
     * @var array 集团账号的成员 id
     */
    public $MemberId;

    /**
     * @param integer $Offset 分页偏移量
取值范围：[0, +∞)
默认值：0
     * @param integer $Limit 每页返回数量
取值范围：[1, 200]
默认值：10
     * @param array $Filters 过滤条件列表，支持的过滤字段：BelongAssetType（归属资产类型 HOST/CONTAINER，未指定默认 HOST）、ContainerId（容器 ID，仅容器告警生效）、RiskLevel（风险等级，精确匹配）、Status（处理状态，精确匹配）、SkillName（Skill 名称，模糊匹配）、UUID（主机 UUID，精确匹配）、Level（告警级别，精确匹配）、ContentHash（文件 SHA256，精确匹配）、InstanceID（实例 ID，精确匹配）、InstanceName（实例名称，模糊匹配）、SkillPath（Skill 路径，模糊匹配）
     * @param string $Order 排序方式
枚举值：
ASC：升序
DESC：降序
默认值：DESC
     * @param string $By 排序字段
枚举值：
CreateTime：首次检出时间
SecurityScore：安全评分
UpdateTime：更新时间
默认值：CreateTime
     * @param array $MemberId 集团账号的成员 id
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
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}

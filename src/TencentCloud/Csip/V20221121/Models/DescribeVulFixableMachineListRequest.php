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
 * DescribeVulFixableMachineList请求参数结构体
 *
 * @method array getVulIds() 获取<p>漏洞ID列表，最多支持100个</p>
 * @method void setVulIds(array $VulIds) 设置<p>漏洞ID列表，最多支持100个</p>
 * @method integer getOffset() 获取<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method integer getLimit() 获取<p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method array getFilters() 获取<p>过滤条件<br>支持的Filter.Name：<br>Keyword - 模糊匹配，按资产ID、资产名称搜索<br>ComponentName - 模糊匹配，按关联组件名称搜索<br>InstanceId - 精确匹配，按主机实例ID筛选<br>MachineName - 模糊匹配，按主机名称搜索<br>MachineIp - 模糊匹配，按主机IP搜索<br>OsType - 精确匹配，按操作系统类型筛选：linux/windows<br>SupportAutoFix - 精确匹配，按是否支持自动修复筛选：0-不支持 1-支持<br>Tag - 精确匹配，按资产标签筛选<br>AppId - 精确匹配，按所属账号筛选</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件<br>支持的Filter.Name：<br>Keyword - 模糊匹配，按资产ID、资产名称搜索<br>ComponentName - 模糊匹配，按关联组件名称搜索<br>InstanceId - 精确匹配，按主机实例ID筛选<br>MachineName - 模糊匹配，按主机名称搜索<br>MachineIp - 模糊匹配，按主机IP搜索<br>OsType - 精确匹配，按操作系统类型筛选：linux/windows<br>SupportAutoFix - 精确匹配，按是否支持自动修复筛选：0-不支持 1-支持<br>Tag - 精确匹配，按资产标签筛选<br>AppId - 精确匹配，按所属账号筛选</p>
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 */
class DescribeVulFixableMachineListRequest extends AbstractModel
{
    /**
     * @var array <p>漏洞ID列表，最多支持100个</p>
     */
    public $VulIds;

    /**
     * @var integer <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件<br>支持的Filter.Name：<br>Keyword - 模糊匹配，按资产ID、资产名称搜索<br>ComponentName - 模糊匹配，按关联组件名称搜索<br>InstanceId - 精确匹配，按主机实例ID筛选<br>MachineName - 模糊匹配，按主机名称搜索<br>MachineIp - 模糊匹配，按主机IP搜索<br>OsType - 精确匹配，按操作系统类型筛选：linux/windows<br>SupportAutoFix - 精确匹配，按是否支持自动修复筛选：0-不支持 1-支持<br>Tag - 精确匹配，按资产标签筛选<br>AppId - 精确匹配，按所属账号筛选</p>
     */
    public $Filters;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @param array $VulIds <p>漏洞ID列表，最多支持100个</p>
     * @param integer $Offset <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     * @param integer $Limit <p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
     * @param array $Filters <p>过滤条件<br>支持的Filter.Name：<br>Keyword - 模糊匹配，按资产ID、资产名称搜索<br>ComponentName - 模糊匹配，按关联组件名称搜索<br>InstanceId - 精确匹配，按主机实例ID筛选<br>MachineName - 模糊匹配，按主机名称搜索<br>MachineIp - 模糊匹配，按主机IP搜索<br>OsType - 精确匹配，按操作系统类型筛选：linux/windows<br>SupportAutoFix - 精确匹配，按是否支持自动修复筛选：0-不支持 1-支持<br>Tag - 精确匹配，按资产标签筛选<br>AppId - 精确匹配，按所属账号筛选</p>
     * @param array $MemberId 集团账号的成员id
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
        if (array_key_exists("VulIds",$param) and $param["VulIds"] !== null) {
            $this->VulIds = $param["VulIds"];
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}

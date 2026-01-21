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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplates请求参数结构体
 *
 * @method array getProductTypes() 获取<p>指定查询的产品版本与架构。</p><ul><li>6：Redis 4.0 标准架构。</li><li>7：Redis 4.0 集群架构。</li><li>8：Redis 5.0 标准架构。</li><li>9：Redis 5.0 集群架构。</li><li>15：Redis 6.2 标准架构。</li><li>16：Redis 6.2 集群架构。</li><li>17：Redis 7.0 标准架构。</li><li>18：Redis 7.0 集群架构。</li><li>19：ValKey 8.0 标准架构。</li><li>20：ValKey 8.0 集群架构。</li></ul>
 * @method void setProductTypes(array $ProductTypes) 设置<p>指定查询的产品版本与架构。</p><ul><li>6：Redis 4.0 标准架构。</li><li>7：Redis 4.0 集群架构。</li><li>8：Redis 5.0 标准架构。</li><li>9：Redis 5.0 集群架构。</li><li>15：Redis 6.2 标准架构。</li><li>16：Redis 6.2 集群架构。</li><li>17：Redis 7.0 标准架构。</li><li>18：Redis 7.0 集群架构。</li><li>19：ValKey 8.0 标准架构。</li><li>20：ValKey 8.0 集群架构。</li></ul>
 * @method array getTemplateNames() 获取<p>指定查询的参数模板名称。</p><ul><li>数据类型：字符串数组，最大长度限制为50。</li><li>获取方式：请通过 <a href="https://console.cloud.tencent.com/redis/templates">Redis 控制台的参数模版</a> 页面复制自定义模板或系统默认模板的模板名称。</li></ul>
 * @method void setTemplateNames(array $TemplateNames) 设置<p>指定查询的参数模板名称。</p><ul><li>数据类型：字符串数组，最大长度限制为50。</li><li>获取方式：请通过 <a href="https://console.cloud.tencent.com/redis/templates">Redis 控制台的参数模版</a> 页面复制自定义模板或系统默认模板的模板名称。</li></ul>
 * @method array getTemplateIds() 获取<p>指定查询的参数模板 ID。</p><ul><li>数据类型：字符串数组，最大长度限制为50。</li><li>获取方式：请通过 <a href="https://console.cloud.tencent.com/redis/templates">Redis 控制台的参数模版</a> 页面复制自定义模板或系统默认模板的模板 ID。</li></ul>
 * @method void setTemplateIds(array $TemplateIds) 设置<p>指定查询的参数模板 ID。</p><ul><li>数据类型：字符串数组，最大长度限制为50。</li><li>获取方式：请通过 <a href="https://console.cloud.tencent.com/redis/templates">Redis 控制台的参数模版</a> 页面复制自定义模板或系统默认模板的模板 ID。</li></ul>
 * @method integer getLimit() 获取<p>指定查询结果的分页大小，即每页返回的记录数量。</p><ul><li>取值范围：0～200。</li><li>默认值：200。</li></ul>
 * @method void setLimit(integer $Limit) 设置<p>指定查询结果的分页大小，即每页返回的记录数量。</p><ul><li>取值范围：0～200。</li><li>默认值：200。</li></ul>
 * @method integer getOffset() 获取<p>分页偏移量，用于指定查询结果的起始位置。</p><ul><li>取值：必须为 Limit 的整数倍，默认值为 0。</li><li>计算公式：offset=limit*(页码-1)。</li></ul>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，用于指定查询结果的起始位置。</p><ul><li>取值：必须为 Limit 的整数倍，默认值为 0。</li><li>计算公式：offset=limit*(页码-1)。</li></ul>
 */
class DescribeParamTemplatesRequest extends AbstractModel
{
    /**
     * @var array <p>指定查询的产品版本与架构。</p><ul><li>6：Redis 4.0 标准架构。</li><li>7：Redis 4.0 集群架构。</li><li>8：Redis 5.0 标准架构。</li><li>9：Redis 5.0 集群架构。</li><li>15：Redis 6.2 标准架构。</li><li>16：Redis 6.2 集群架构。</li><li>17：Redis 7.0 标准架构。</li><li>18：Redis 7.0 集群架构。</li><li>19：ValKey 8.0 标准架构。</li><li>20：ValKey 8.0 集群架构。</li></ul>
     */
    public $ProductTypes;

    /**
     * @var array <p>指定查询的参数模板名称。</p><ul><li>数据类型：字符串数组，最大长度限制为50。</li><li>获取方式：请通过 <a href="https://console.cloud.tencent.com/redis/templates">Redis 控制台的参数模版</a> 页面复制自定义模板或系统默认模板的模板名称。</li></ul>
     */
    public $TemplateNames;

    /**
     * @var array <p>指定查询的参数模板 ID。</p><ul><li>数据类型：字符串数组，最大长度限制为50。</li><li>获取方式：请通过 <a href="https://console.cloud.tencent.com/redis/templates">Redis 控制台的参数模版</a> 页面复制自定义模板或系统默认模板的模板 ID。</li></ul>
     */
    public $TemplateIds;

    /**
     * @var integer <p>指定查询结果的分页大小，即每页返回的记录数量。</p><ul><li>取值范围：0～200。</li><li>默认值：200。</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量，用于指定查询结果的起始位置。</p><ul><li>取值：必须为 Limit 的整数倍，默认值为 0。</li><li>计算公式：offset=limit*(页码-1)。</li></ul>
     */
    public $Offset;

    /**
     * @param array $ProductTypes <p>指定查询的产品版本与架构。</p><ul><li>6：Redis 4.0 标准架构。</li><li>7：Redis 4.0 集群架构。</li><li>8：Redis 5.0 标准架构。</li><li>9：Redis 5.0 集群架构。</li><li>15：Redis 6.2 标准架构。</li><li>16：Redis 6.2 集群架构。</li><li>17：Redis 7.0 标准架构。</li><li>18：Redis 7.0 集群架构。</li><li>19：ValKey 8.0 标准架构。</li><li>20：ValKey 8.0 集群架构。</li></ul>
     * @param array $TemplateNames <p>指定查询的参数模板名称。</p><ul><li>数据类型：字符串数组，最大长度限制为50。</li><li>获取方式：请通过 <a href="https://console.cloud.tencent.com/redis/templates">Redis 控制台的参数模版</a> 页面复制自定义模板或系统默认模板的模板名称。</li></ul>
     * @param array $TemplateIds <p>指定查询的参数模板 ID。</p><ul><li>数据类型：字符串数组，最大长度限制为50。</li><li>获取方式：请通过 <a href="https://console.cloud.tencent.com/redis/templates">Redis 控制台的参数模版</a> 页面复制自定义模板或系统默认模板的模板 ID。</li></ul>
     * @param integer $Limit <p>指定查询结果的分页大小，即每页返回的记录数量。</p><ul><li>取值范围：0～200。</li><li>默认值：200。</li></ul>
     * @param integer $Offset <p>分页偏移量，用于指定查询结果的起始位置。</p><ul><li>取值：必须为 Limit 的整数倍，默认值为 0。</li><li>计算公式：offset=limit*(页码-1)。</li></ul>
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
        if (array_key_exists("ProductTypes",$param) and $param["ProductTypes"] !== null) {
            $this->ProductTypes = $param["ProductTypes"];
        }

        if (array_key_exists("TemplateNames",$param) and $param["TemplateNames"] !== null) {
            $this->TemplateNames = $param["TemplateNames"];
        }

        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}

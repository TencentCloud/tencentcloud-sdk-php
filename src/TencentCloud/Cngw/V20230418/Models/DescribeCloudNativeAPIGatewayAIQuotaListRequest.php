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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayAIQuotaList请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例Id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例Id</p>
 * @method integer getOffset() 获取<p>开始位置</p>
 * @method void setOffset(integer $Offset) 设置<p>开始位置</p>
 * @method integer getLimit() 获取<p>每页数量</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量</p>
 * @method array getFilters() 获取<p>过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p>
 * @method array getAlarmLevels() 获取<p>配额预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
 * @method void setAlarmLevels(array $AlarmLevels) 设置<p>配额预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
 */
class DescribeCloudNativeAPIGatewayAIQuotaListRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例Id</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>开始位置</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件</p>
     */
    public $Filters;

    /**
     * @var array <p>配额预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
     */
    public $AlarmLevels;

    /**
     * @param string $GatewayId <p>网关实例Id</p>
     * @param integer $Offset <p>开始位置</p>
     * @param integer $Limit <p>每页数量</p>
     * @param array $Filters <p>过滤条件</p>
     * @param array $AlarmLevels <p>配额预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("AlarmLevels",$param) and $param["AlarmLevels"] !== null) {
            $this->AlarmLevels = $param["AlarmLevels"];
        }
    }
}
